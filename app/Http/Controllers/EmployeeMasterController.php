<?php

namespace App\Http\Controllers;

use Auth;
use DateTime;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\Company;
use App\Models\Employee;
use App\Models\designation;
use App\Models\Category;
use App\Models\Country;
use App\Models\Shiftcode;
use App\Models\week;
use RealRashid\SweetAlert\Facades\Alert;

class EmployeeMasterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $designation = designation::all();
        $category = Category::all();
        $companyId = Company::where('user_id', Auth::id())->pluck('id');
        $department = Department::whereIn('company_id', $companyId)->get();
        $companies = Company::where('user_id', Auth::id())->get();
        $EmpMasters = Employee::all();
        $countrycodes = Country::all(['name', 'phone']);
        $Shiftcode = Shiftcode::all();
        $weeks = week::all();
        // return $countrycodes;
        return view('dashboard.master.employee_master',['EmpMaster'=>$EmpMasters,'department' => $department, 'companies' => $companies,'designation' =>$designation,'category'=>$category,'countrycodes'=>$countrycodes,'Shiftcode'=>$Shiftcode,'weeks'=>$weeks]);
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
        $emp = new Employee();
        $emp->employee_code = $request->employee_code;
        $emp->employee_name = $request->employee_name;
        $emp->bizionic_id = $request->bizionic_id;
        $emp->country_code = $request->country_code;
        $emp->mobile_number = $request->Mobile_number;
        $emp->emp_status = $request->emp_status;
        $emp->punch_enquirey_required = $request->Punch_Entry;
        $emp->father_or_husband_name = $request->father_name;
        $emp->address = $request->address;
        // $emp->date_of_join = $request->DOJ;
        $emp->date_of_join = date_format(new DateTime($request->DOJ), 'd-m-Y');
        $emp->Email = $request->Email_address;
        $emp->shift_1 = $request->shift_1;
        $emp->shift_2 = $request->shift_2;
        $emp->shift_3 = $request->shift_3;
        $emp->shift_4 = $request->shift_4;
        $emp->weekoff1 = $request->week_off_1;
        $emp->weekoff_no = 'null';
        $emp->weekoff2 = $request->week_off_2;
        $emp->category_id = $request->category_name;
        $emp->designation_id = $request->desig_name;
        $emp->department_id = $request->dept_name;
        $emp->company_id = $request->company_name;
        $emp->user_id = Auth::id();
        $emp->father_or_husband_name = $request->father_name;
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
        $emp = Employee::find($id);
        $emp->employee_code = $request->employee_code;
        $emp->employee_name = $request->employee_name;
        $emp->bizionic_id = $request->bizionic_id;
        $emp->country_code = $request->country_code;
        $emp->mobile_number = $request->Mobile_number;
        $emp->emp_status = $request->emp_status;
        $emp->punch_enquirey_required = $request->Punch_Entry;
        $emp->father_or_husband_name = $request->father_name;
        $emp->address = $request->address;
        // $emp->date_of_join = $request->DOJ;
        $emp->date_of_join = date_format(new DateTime($request->DOJ), 'd-m-Y');
        $emp->Email = $request->Email_address;
        $emp->shift_1 = $request->shift_1;
        $emp->shift_2 = $request->shift_2;
        $emp->shift_3 = $request->shift_3;
        $emp->shift_4 = $request->shift_4;
        $emp->weekoff1 = $request->week_off_1;
        $emp->weekoff_no = 'null';
        $emp->weekoff2 = $request->week_off_2;
        $emp->category_id = $request->category_name;
        $emp->designation_id = $request->desig_name;
        $emp->department_id = $request->dept_name;
        $emp->company_id = $request->company_name;
        $emp->user_id = Auth::id();
        $emp->father_or_husband_name = $request->father_name;
        $emp->save();
        Alert::success('Employee Details', 'Updated Successfully');
        return redirect()->back()->with('message', 'Employee Details Updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $shift = Employee::findOrFail($id);
        $shift->destroy($id);
        return redirect()->back()->with('message', 'Employee details deleted successfully!');

    }
}
