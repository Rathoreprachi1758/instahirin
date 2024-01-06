<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Country;
use App\Models\Creditrequest;

class profileController extends Controller
{

    private $userdata;
    private $countrycodes;
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->userdata = User::where('id', auth()->user()->id)->get();
            $this->countrycodes = Country::all(['name', 'phone']);

            return $next($request);
        });
    }
    public function index()
    {
        return view('dashboard.userinfo', ['userdata' => $this->userdata, 'countryCodes' => $this->countrycodes]);
    }

    public function edituserinfo(Request $request)
    {
        //return $request->all();
        $user = User::find($request->id);
        $user->country_code = $request->country_code;
        $user->mobilenumber = $request->mobilenumber;
        $user->country = $request->country;
        $user->save();
        // return view('dashboard.userinfo',['userdata' => $this->userdata,'countryCodes'=>$this->countrycodes]);
        return redirect()->back()->with('message', 'Contact details updated successfully!');

    }
    public function editnation(Request $request)
    {
        $user = User::find($request->id);
        $user->nationality = $request->nationality;
        $user->save();
        return redirect()->back()->with('message', 'Nationality details updated successfully!');
    }
    public function user_info(Request $request)
    {
        return view('dashboard.kycinfo');
    }

    public function creditrequest(Request $request)
    {
        return view('dashboard.creditrequest');
    }

    public function creditrequest_submit(Request $request)
    {
        $request->validate([
            'Account_holder_name' => 'required',
            'Account_no' => 'required',
            'Cheque_amount' => 'required',
            'cheque_no' => 'required',
            'issued_bank' => 'required',
            'file' => 'required|image|mimes:jpeg,png,jpg,gif',
            'checkbox' => 'required',
        ]);
        $credit = new Creditrequest;
        $credit->User_id = Auth::id();
        $credit->account_holder_name = $request->Account_holder_name;
        $credit->account_no = $request->Account_no;
        $credit->cheque_Amount = $request->Cheque_amount;
        $credit->cheque_number = $request->cheque_no;
        $credit->cheque_issuing_bank = $request->issued_bank;
        // $credit->Cheque_image = $request->file;
        if ($request->hasFile('file')) {
            
            $file = $request->file('file');
            $filename = 'bizionic/credit_request/' . auth()->user()->email.time(). '_' . $file->getClientOriginalName();
            $file->move('bizionic/credit_request/', $filename);
            $credit->Cheque_image = $filename;
        }
        $credit->save();

        return redirect()->back()->with('message', ' credit request updated!');
    }

}
