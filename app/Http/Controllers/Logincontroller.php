<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;
use Auth;
use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use Redirect;

class Logincontroller extends Controller
{

    public function index()
    {
        return view("dashboard.registration");
    }
    public function store(Request $request)
    {
        $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required',
            'password_confirmation' => 'required|same:password',
            // 'Admin_status' => 'required',
        ]);
        $firstName = $request->firstName;
        $lastName = $request->lastName;
        $name = $firstName . ' ' . $lastName;
        $user = new User;

        $user->name = $name;
        $mail = $request->email;
        $user->email = $request->email;
        $a = $request->password;
        $data = Hash::make($a);
        $user->password = $data;
        $user->country_code = $request->Country_Code;
        $user->mobilenumber = $request->Mobile_Number;
        $user->save();
        if ($user->wasRecentlyCreated) {
            return view('dashboard.login-page', ['message' => ' Signup Succesfully']);

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
         $credentials = $request->only('email', 'password');
         if (Auth::attempt($credentials)) {
           return view('dashboard.dashboard');

        } else {
            return redirect()->back()->with('message', 'Something went wrong, please try again');
        }
        
    }
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/loginpage');
    }
    //
    public function changePassword(Request $request)
    {
        return view('change-password');
    }

    public function changePasswordSave(Request $request)
    {

        $this->validate($request, [
            'current_password' => 'required|string',
            'new_password' => 'required|confirmed|min:5|string'
        ]);
        $auth = Auth::user();

        // The passwords matches
        if (!Hash::check($request->get('current_password'), $auth->password)) {
            return back()->with('error', "Current Password is Invalid");
        }

        // Current password and new password same
        if (strcmp($request->get('current_password'), $request->new_password) == 0) {
            return redirect()->back()->with("error", "New Password cannot be same as your current password.");
        }

        $user = User::find($auth->id);
        $user->password = Hash::make($request->new_password);
        $user->save();
        return back()->with('success', "Password Changed Successfully");
    }


}
