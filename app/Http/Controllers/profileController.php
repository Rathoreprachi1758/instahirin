<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class profileController extends Controller
{
    public function index()
    {  
        $userdata = User::find(auth()->user()->id);
        return view('dashboard.userinfo',[$userdata]);
    }

    public function user_info(Request $request)
    {
        return view('dashboard.kycinfo');
    }
    
    public function creditrequest(Request $request)
    {
        return view('dashboard.creditrequest');
    }

}
