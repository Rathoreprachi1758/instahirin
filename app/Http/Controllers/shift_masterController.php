<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Shift_master_daily;
use App\Models\Department;
use App\Models\Company;
use App\Models\TimeZones;
use App\Models\week;
use App\Models\Shiftcode;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Config;

class shift_masterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $companyId = Company::where('user_id', Auth::id())->pluck('id');
        $department = Department::whereIn('comapny_id', $companyId)->get();
        $comapnaies = Company::where('user_id', Auth::id())->get();
        $shify = Shift_master_daily::where('user_id', Auth::id())->get();
        $shiftCode = Shiftcode::all();
        $timezones = TimeZones::all();
        // $getWeek = week::all();
        $week = week::all();
        // dd($week);
        // $week = array();
        // foreach($getWeek as $value)
        // {  
        //     $getW = array();
        //     $getW['week_id'] = $value->id;
        //     $getW['week_name'] = $value->week_name;
        //     $week[] = $getW;
        // }
        // dd($week);
        return view('dashboard.master.shift_master_daily', ['shify' => $shify, 'department' => $department, 'comapnaies' => $comapnaies, 'timezones' => $timezones, 'weeks' => $week,'shiftCode'=>$shiftCode]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   
        // dd($request->all());
        foreach ($request->week_name as $week_name) {
            if(is_array($week_name))
            {
                if (!is_null($week_name['sign_in']) && !is_null($week_name['sign_out']) && !is_null($week_name['Lunch_in']) && !is_null($week_name['Lunch_out']))
                {
                    $shifty = new Shift_master_daily();
                    $shifty->shift_code = $request->shift_code;
                    $shifty->shift_name = $request->shift_name;
                    // foreach($week_name['time_zone'])
                    $shifty->time_zone = $week_name['time_zone'];
                    $shifty->Shift_in = $week_name['sign_in'];
                    $shifty->Shift_out = $week_name['sign_out'];
                    $shifty->Lunch_in = $week_name['Lunch_in'];
                    $shifty->Lunch_out = $week_name['Lunch_out'];
                    $shifty->ded_full_lunch_hrs = $week_name['Monday_check']?? 'off';
                    // $shifty->extraday_hrs = $request->shiftname;
                    $shifty->Send_sms_delay = 'N/A';
                    $shifty->department_id = $request->dept_id;
                    $shifty->user_id = Auth::id();
                    $shifty->comapny_id = $request->company_id;
                    $shifty->week_day = $week_name['week_name'];
                    $shifty->save();
    
                }
            }
        }
        Alert::success('Shift Details', 'Added Successfully');
        return redirect()->back()->with('message', 'Shift details created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {    
        // return $request->all();
        $shifty = Shift_master_daily::find($id);
        $shifty->shift_code = $request->shift_code;
        $shifty->shift_name = $request->shift_name;
        $shifty->time_zone = $request->time_zone;
        $shifty->Shift_in = $request->sign_in;
        $shifty->Shift_out = $request->sign_out;
        $shifty->Lunch_in = $request->Lunch_in;
        $shifty->Lunch_out = $request->Lunch_out;
        $shifty->ded_full_lunch_hrs = $request->Monday_check;
        $shifty->extraday_hrs = 'N/A';
        $shifty->Send_sms_delay = 'N/A';
        // $shifty->department_id = $request->shiftname;
        // $shifty->user_id = $request->shiftname;
        // $shifty->comapny_id = $request->shiftname;
        // $shifty->designation_id = $request->shiftname;
        $shifty->week_day = $request->week_name;
        $shifty->save();
        Alert::success('Shift Details', 'Updated Successfully');
        return redirect()->back()->with('message', 'Shift details Updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {   
        $shift = Shift_master_daily::findOrFail($id);
        $shift->destroy($id);
        return redirect()->back()->with('message', 'Shift details deleted successfully!');
    }
}
