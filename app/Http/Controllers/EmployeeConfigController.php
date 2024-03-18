<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Models\employeeconfig;
use App\Models\Department;
use App\Models\Company;
use App\Models\employee;
use App\Models\designation;
class EmployeeConfigController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $companyId = Company::where('user_id',Auth::id())->pluck('id');
        $department = Department::whereIn('comapny_id',$companyId)->get();
        $comapnaies = Company::where('user_id',Auth::id())->get();
        $employees  = employee::where('user_id',Auth::id())->whereIn('comapny_id',$companyId)->get();
        $EmpConfig = employeeconfig::all();
        // return $EmpConfig;
        return view('dashboard.master.employee_configuration',['EmpConfig'=>$EmpConfig,'comapnaies'=>$comapnaies,'department'=>$department,'employees'=>$employees]);
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
        //
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
