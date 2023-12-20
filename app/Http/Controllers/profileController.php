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
    
    public function edituserinfo(Request $request)
    {   
        // $id = $request->id;
        // //return $id;
        // $projects = p::find($id);
        // //return $projects;
        // $login = $request->login_field;
        // $projects->login_field = json_encode($login);
        // $projects->save();
        // return redirect()->route('project.index')->with('success', 'LOGINFIELDS HAS BEEN UPDATED SUCCESSFULLY');

        return "hii";
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
