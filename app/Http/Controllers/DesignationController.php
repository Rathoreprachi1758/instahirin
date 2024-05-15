<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Department;
use App\Models\designation;
use Auth;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class DesignationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $companyId = Company::where('user_id', Auth::id())->pluck('id');
        $department = Department::whereIn('company_id', $companyId)->get();
        $companies = Company::where('user_id', Auth::id())->get();
        $designation = designation::where('user_id', Auth::id())->get();
        // return $department;
        return view('dashboard.master.designation', ['companies' => $companies, 'department' => $department, 'designation' => $designation]);
    }

    /**
     * @param $companyId
     * @return JsonResponse
     */
    public function company($companyId)
    {
        $departments = Department::where('company_id', $companyId)->where('user_id', Auth::id())->get();
        return response()->json($departments);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        echo "this is create";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // echo "this is store";
        // return $request->all();
        $designation = new designation();
        $designation->department_id = $request->dept_id;
        $designation->designation_name = $request->designation_name;
        $designation->user_id = Auth::id();
        $designation->company_id = $request->company_id;
        $designation->save();
        Alert::success('Designation Details', 'Added Successfully');
        return redirect()->back()->with('message', 'Designation Entered Succesfully');


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
        echo "This is edit";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $designation = designation::find($id);
        // return $designation;
        $designation->department_id = $request->dept_id;
        $designation->designation_name = $request->designation_name;
        $designation->user_id = Auth::id();
        $designation->company_id = $request->company_id;
        $designation->save();
        Alert::success('Designation Details', 'Updated Successfully');
        return redirect()->back()->with('message', 'Designation Updated Succesfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $designation = designation::findOrFail($id);
        $designation->destroy($id);
        return redirect()->back()->with('message', 'Designation Deleted Succesfully');
    }
}
