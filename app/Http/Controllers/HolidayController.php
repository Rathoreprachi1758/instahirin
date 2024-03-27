<?php

namespace App\Http\Controllers;

use Auth;
use DateTime;
use Illuminate\Http\Request;
use App\Models\holiday;
use App\Models\Department;
use App\Models\Company;
use RealRashid\SweetAlert\Facades\Alert;

class HolidayController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $companyId = Company::where('user_id',Auth::id())->pluck('id');
        $department = Department::whereIn('company_id',$companyId)->get();
        $comapnaies = Company::where('user_id',Auth::id())->get();
        $HoliDay = holiday::where('company_id',$companyId)->get();
        return view('dashboard.master.Holiday',['HoliDay'=>$HoliDay,'comapnaies' =>$comapnaies,'department'=>$department]);
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
        // return $request->all();
        $HoLiday = new holiday();
        $HoLiday->holiday_name = $request->Holiday_name;
        $HoLiday->holiday_date = date_format(new DateTime($request->Holiday_date), 'd-m-Y');
        // $HoLiday->holiday_date = $request->Holiday_date;
        $HoLiday->holiday_type = $request->Holiday_type;
        $HoLiday->company_id = $request->company_id;
        $HoLiday->user_id = Auth::id();
        $HoLiday->save();
        Alert::success('Holiday Details', 'Added Successfully');
        return redirect()->back()->with('message','Holiday List Entered Succesfully');
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
        $HoLiday = holiday::find($request->id);
        $HoLiday->holiday_name = $request->Holiday_name;
        $HoLiday->holiday_date = date_format(new DateTime($request->Holiday_date), 'd-m-Y');
        // $HoLiday->holiday_date = $request->Holiday_date;
        $HoLiday->holiday_type = $request->Holiday_type;
        // $HoLiday->company_id = $request->company_id;
        // $HoLiday->user_id = Auth::id();
        $HoLiday->save();
        Alert::success('Holiday Details', 'Added Successfully');
        return redirect()->back()->with('message','Holiday List Entered Succesfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $designation = holiday::findOrFail($id);
        $designation->destroy($id);
        return redirect()->back()->with('message','Holiday Deleted Succesfully');
    }
}
