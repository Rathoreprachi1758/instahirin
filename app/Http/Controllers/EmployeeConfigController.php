<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Models\employeeconfig;
use App\Models\Department;
use App\Models\Company;
use App\Models\employee;
use DB;
use App\Models\designation;
use RealRashid\SweetAlert\Facades\Alert;
class EmployeeConfigController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $companyId = Company::where('user_id',Auth::id())->pluck('id');
        $department = Department::whereIn('company_id',$companyId)->get();
        $companies = Company::where('user_id',Auth::id())->get();
        $employees  = employee::where('user_id',Auth::id())->whereIn('company_id',$companyId)->get();
        // $employees  = employee::where('user_id',Auth::id())->get();
        // return $employees;
        $EmpConfig = employeeconfig::all();
        // return $EmpConfig;
        return view('dashboard.master.employee_configuration',['EmpConfig'=>$EmpConfig,'companies'=>$companies,'departments'=>$department,'employees'=>$employees]);
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
        $EmpConfig = new employeeconfig;
        $EmpConfig->Emp_code = $request->shift_code;
        $EmpConfig->Emp_name = $request->shift_name;
        $EmpConfig->send_sms_allow = $request->send_sms ?? 'off';
        $EmpConfig->employee_self_service_allow = $request->self_service ?? 'off';
        $EmpConfig->selfie_punch_allow = $request->selfie_punch ?? 'off';
        $EmpConfig->approve_selfie_punch = $request->selfie_approve ?? 'off';
        $EmpConfig->notification_to_own = $request->notification_allow ?? 'off';
        $EmpConfig->notification_to_admin = $request->Notification_admin ?? 'off';
        $EmpConfig->emp_id  = $request->shift_code;
        $EmpConfig->company_id  = $request->company_id;
        $EmpConfig->dept_id  = $request->dept_id;
        $EmpConfig->user_id  = Auth::id();
        $EmpConfig->save();
        Alert::success('Configuration Details', 'Added Successfully');
        return redirect()->back()->with('message','Configuration added Succesfully');

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
        $EmpConfig = employeeconfig :: find($id);
        $EmpConfig->Emp_code = $request->shift_code;
        $EmpConfig->Emp_name = $request->shift_code;
        $EmpConfig->send_sms_allow = $request->shift_code;
        $EmpConfig->employee_self_service_allow = $request->shift_code;
        $EmpConfig->selfie_punch_allow = $request->shift_code;
        $EmpConfig->approve_selfie_punch = $request->shift_code;
        $EmpConfig->notification_to_own = $request->shift_code;
        $EmpConfig->notification_to_admin = $request->shift_code;
        $EmpConfig->emp_id  = $request->shift_code;
        $EmpConfig->company_id  = $request->shift_code;
        $EmpConfig->user_id  = $request->shift_code;
        $EmpConfig->save();
        Alert::success('Configuration Details', 'Configuration Updated Successfully');
        return redirect()->back()->with('message','Configuration Updated Succesfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       $EmpConfig = employeeconfig::findOrFail($id);
       $EmpConfig->destroy($id);
       return redirect()->back()->with('message','Configuration Details Deleted Succesfully');
    }
}
