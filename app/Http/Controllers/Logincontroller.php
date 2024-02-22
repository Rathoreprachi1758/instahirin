<?php

namespace App\Http\Controllers;

use Auth;
use GuzzleHttp\Client;
use App\Models\User;
use App\Models\Country;
use Illuminate\Http\Request;
use App\Models\Job;
use Illuminate\Support\Facades\Http;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailNotify;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Redirect;

class Logincontroller extends Controller
{

    public function index()
    {
        $countryCodes = Country::all(['name', 'phone']);
        return view("dashboard.registration", ["countryCodes" => $countryCodes]);
    }
    public function store(Request $request)
    {

        $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required',
            'password_confirmation' => 'required|same:password',
            'country_code' => 'required',
            'Mobile_Number' => 'required',
            'privacy_statement' => 'required',
            // 'Admin_status' => 'required',
        ]);
        // dd($request->all());
        $firstName = $request->firstName;
        $lastName = $request->lastName;
        $name = $firstName . ' ' . $lastName;
        $countrycode = $request->country_code;
        $phone = $request->Mobile_Number;
        // $mobilenumber = $countrycode . ' ' . $phone;
        $user = new User;

        $user->name = $name;
        $mail = $request->email;
        $user->email = $request->email;
        $a = $request->password;
        $data = Hash::make($a);
        $user->password = $data;
        $user->country_code = $request->country_code;
        $user->mobilenumber = $request->Mobile_Number;
        // $user->country = '';
        // $user->nationality = '';
        $user->save();
        if ($user->wasRecentlyCreated) {
            return view('dashboard.login-page')->with('message', 'Login Succesfully');

        } else {
            return redirect()->back()->with('message', 'Something went wrong, please try again');
        }


    }
    public function login(Request $request)
    {
        return view('dashboard.login-page');
        // return "Hii";
    }
    public function authenticate(Request $request)
    {

        \Log::info('-------------------------attempting ogin');
        $this->validate($request, [
            'email' => [
                'required',
                'string',
                'email',
                Rule::exists('users', 'email'),
            ],
            'password' => [
                'required',
                'string',
                function ($attribute, $value, $fail) use ($request) {
                    $email = $request->input('email');       
                    $user = User::where('email', $email)->first();       
                    if (!$user || !Hash::check($value, $user->password)) {
                        $fail('Invalid email or password. Please try again.');
                    }
                },
            ],
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {     
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
            // return view('dashboard.dashboard');
        } else {
            return redirect()->back()->with('message', 'Invalid email or password. Please try again.');
        }
    }
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/loginpage');
    }

    public function forgotpassword(Request $request)
    {
        return view('dashboard.forgotpassword');
    }
    //
    public function resetpassword(Request $request)
    {
        // dd($request->all());
        $email = $request->restoring_password;
        return $email;
        // $data = [
        //     'password' => 'Hii',
        // ];
        // Mail::to($email)->send(new MailNotify($data));
    }
    // public function changePassword(Request $request)
    // {
    //     return view('change-password');
    // }

    public function changePasswordSave(Request $request)
    {
        $validator = $this->validate($request, [
            'current_password' => [
                'required',
                'string',
                function ($attribute, $value, $fail) {
                    if (!Hash::check($value, auth()->user()->password)) {
                        $fail('The current password is incorrect.');
                    }
                },
            ],
            'new_password' => 'required|min:5|string|different:current_password',
            'confirm_password' => 'required|min:5|string|same:new_password',
        ]);
        $auth = Auth::user();
        // dd($auth);
        // The passwords matches
        // if (!Hash::check($request->get('current_password'), $auth->password)) {
        //     return back()->with('error', "Current Password is Invalid");
        // }

        // Current password and new password same
        // if (strcmp($request->get('current_password'), $request->new_password) == 0) {
        //     return redirect()->back()->with("error", "New Password cannot be same as your current password.");
        // }
        $user = User::find($auth->id);
        if ($user) {
            $user->password = Hash::make($request->new_password);
            $user->save();
            return redirect()->back()->with('message', 'Password changed successfully');
        } else {
            return redirect()->back()->with('danger', 'Something went wrong');
        }

        // return view('dashboard.userinfo',['userdata' => $userdata])->with('success', 'Password changed successfully');
    }

    public function resetpswd(Request $request)
    {
        return view('dashboard.reset-password');
    }

    // public function open_positions(Request $request)
    // {  
    // //     $job_component = Job::all();
    // //    return view('dashboard.openpositions',['job_component'=>$job_component]);
    //    return $request->all();
    // }

}
