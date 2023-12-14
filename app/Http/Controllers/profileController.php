<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class profileController extends Controller
{
    public function index()
    {
        return view('dashboard.profile');
    }

    public function user_info(Request $request)
    {
        return view('dashboard.userinfo');
    }

}
