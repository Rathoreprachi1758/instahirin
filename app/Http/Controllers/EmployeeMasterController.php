<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\Company;
use App\Models\employee;
use RealRashid\SweetAlert\Facades\Alert;

class EmployeeMasterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $companyId = Company::where('user_id', Auth::id())->pluck('id');
        $department = Department::whereIn('company_id', $companyId)->get();
        $comapnaies = Company::where('user_id', Auth::id())->get();
        $EmpMasters = employee::all();
        return view('dashboard.master.employee_master',['EmpMaster'=>$EmpMasters,'department' => $department, 'comapnaies' => $comapnaies]);
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
        $emp = new employee();
        $emp->employee_code = $request->emp;
        $emp->employee_name = $request->emp;
        $emp->company = $request->emp;
        $emp->bizionic_id = $request->emp;
        $emp->department = $request->emp;
        $emp->designation = $request->emp;
        $emp->category = $request->emp;
        $emp->emp_status = $request->emp;
        $emp->punch_enquirey_required = $request->emp;
        $emp->mobile_number = $request->emp;
        $emp->father_or_husband_name = $request->emp;
        $emp->address = $request->emp;
        $emp->date_of_join = $request->emp;
        $emp->Email = $request->emp;
        $emp->shift_1 = $request->emp;
        $emp->shift_2 = $request->emp;
        $emp->shift_3 = $request->emp;
        $emp->shift_4 = $request->emp;
        $emp->weekoff1 = $request->emp;
        $emp->weekoff_no = $request->emp;
        $emp->weekoff2 = $request->emp;
        $emp->user_id = $request->emp;
        $emp->comapny_id = $request->emp;
        $emp->department_id = $request->emp;
        $emp->designation_id = $request->emp;
        $emp->father_or_husband_name = $request->emp;
        $emp->save();
        Alert::success('Employee Details', 'Added Successfully');
        return redirect()->back()->with('message', 'Employee Details created successfully!');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
