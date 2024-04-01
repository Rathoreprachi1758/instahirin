<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Shift_master_daily;
use App\Models\Department;
use App\Models\Company;
use App\Models\TimeZones;
use App\Models\week;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
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
        $department = Department::whereIn('company_id', $companyId)->get();
        $comapnaies = Company::where('user_id', Auth::id())->get();
        $shify = Shift_master_daily::where('user_id', Auth::id())
        ->orderByRaw("FIELD(week_day, 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday')")
        ->orderBy('week_day', 'ASC')
        ->get();
        $shiftCode = Shiftcode::all();
        $timezones = TimeZones::all();
        $week = week::all();
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
        // $weeks = week::pluck('week_name');
        // foreach($weeks as $week){
        //     $request->validate([
        //         $week => [ 'week_day', Rule::unique('shift_master_dailies', 'week_day')],
        //     ]);
        // }
        // return $request->all();
        foreach ($request->week_name as $week_name) {       
            if (is_array($week_name) && !is_null($week_name['sign_in']) && !is_null($week_name['sign_out']) &&  !is_null($week_name['Lunch_in']) && !is_null($week_name['Lunch_out'])) {
                $existingRecordCount = Shift_master_daily::where([
                    'user_id' => Auth::id(),
                    'department_id' => $request->dept_id,
                    'company_id' => $request->company_id,
                    'week_day' => $week_name['week_name']
                ])->count(); 
                if ($existingRecordCount === 0){
                    Shift_master_daily::create([
                        'shift_code' => $request->shift_code,
                        'shift_name' => $request->shift_name,
                        'time_zone' => $week_name['time_zone'],
                        'Shift_in' => $week_name['sign_in'],
                        'Shift_out' => $week_name['sign_out'],
                        'Lunch_in' => $week_name['Lunch_in'],
                        'Lunch_out' => $week_name['Lunch_out'],
                        'ded_full_lunch_hrs' => $week_name['Monday_check'] ?? 'off',
                        'Send_sms_delay' => 'N/A',
                        'department_id' => $request->dept_id,
                        'user_id' => Auth::id(),
                        'company_id' => $request->company_id,
                        'week_day' => $week_name['week_name']
                    ]);
                }
                else{
                    Alert::error('Warning', 'Added Already Do Update');
                    return redirect()->back()->with('danger', 'These shift details created Added Already');
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
