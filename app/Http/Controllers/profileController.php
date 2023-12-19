<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class profileController extends Controller
{
    public function index()
    {  
        $userdata = User::where('id',auth()->user()->id)->get();
        // return $userdata;
        return view('dashboard.userinfo',['userdata' => $userdata]);
    }

    // public function changepassword(Request $request)
    // {
    //     //return 'Hii';
    //     dd($request->all());
    // }

    public function user_info(Request $request)
    {
        return view('dashboard.kycinfo');
    }
    
    public function creditrequest(Request $request)
    {
        return view('dashboard.creditrequest');
    }

}
