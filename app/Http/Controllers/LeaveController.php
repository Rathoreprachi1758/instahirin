<?php

namespace App\Http\Controllers;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

use Auth;
use App\Models\holiday;
use App\Models\Department;
use App\Models\Company;
use App\Models\leave;
use RealRashid\SweetAlert\Facades\Alert;

class LeaveController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $companyId = Company::where('user_id',Auth::id())->pluck('id');
        $department = Department::whereIn('company_id',$companyId)->get();
        $companies = Company::where('user_id',Auth::id())->get();
        $leaves = leave::all();
        return view('dashboard.master.leave',['leaves'=>$leaves,'companies' =>$companies,'department'=>$department]);
    }

    /**
     * @param $companyId
     * @return JsonResponse
     */
    public function company($companyId): JsonResponse
    {
        $departments = Department::where('company_id', $companyId)->where('user_id', Auth::id())->get();
        return response()->json($departments);

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
         $leave = new leave();
         $leave->leave_code = $request->leave_code;
         $leave->leave_name = $request->Leave_Name;
         $leave->encash = $request->leave_encash;
         $leave->carry_forward = $request->leave_carry_forward;
         $leave->annual_limit = $request->annual_limit;
         $leave->company_id = $request->company_id;
         $leave->user_id = Auth::id();
         $leave->save();
         Alert::success('Leave Details', 'Added Successfully');
        return redirect()->back()->with('message','Leave Detasils Succesfully');

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
        // $request->all();
        $leave = leave::find($id);
         $leave->leave_code = $request->leave_code;
         $leave->leave_name = $request->Leave_Name;
         $leave->encash = $request->leave_encash;
         $leave->carry_forward = $request->leave_carry_forward;
         $leave->annual_limit = $request->annual_limit;
        //  $leave->comapny_id = $request->company_id;
        //  $leave->user_id = Auth::id();
         $leave->save();
         Alert::success('Leave Details', 'Updated Successfully');
        return redirect()->back()->with('message','Leave Details Updated Succesfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $designation = leave::findOrFail($id);
        $designation->destroy($id);
        return redirect()->back()->with('message','Holiday Deleted Succesfully');
    }
}
