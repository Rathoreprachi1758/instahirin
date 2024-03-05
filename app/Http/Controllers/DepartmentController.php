<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\Company;
use RealRashid\SweetAlert\Facades\Alert;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {  

        $CompanyFilter = Company::query();

        if ($request->has('company_filter')) {
            // $customers->whereDate('created_at', $request->filter_date);
            return $request->company_filter;
        }

        $CompanyFilter = $CompanyFilter->get();

        // return view('customers.index', compact('customers'));
        //

        $companyId = Company::where('user_id', Auth::id())->get();
        $companes = json_decode($companyId);
        $departMent = Department::where('user_id', Auth::id())->get();
        return view('dashboard.master.department',['companyId' => $companes,'department'=>$departMent,'CompanyFilter'=> $CompanyFilter]);
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
            $department = new Department();
            $department->department_id = $request->department_id;
            $department->department_name = $request->department_name;
            $department->comapny_id = $request->company_id;
            $department->user_id = Auth::id();
            $department->save();

        Alert::success('Department Details', 'Added Successfully');
        return redirect()->back()->with('message', 'Department details created successfully!');
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
        echo "This is edit controller";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {       
            // return $request->all();
            $department = Department::find($id);
            $department->department_id = $request->dept_id;
            $department->department_name = $request->dept_name;
            $department->comapny_id = $request->company_id;
            $department->user_id = Auth::id();
            $department->save();
        Alert::success('Department Details', 'Updated Successfully');
        return redirect()->back()->with('message', 'Department details created successfully!');

        // return $request->all();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // echo "This is destroy controller";
        $dept = Department::findOrFail($id);
        $dept->destroy($id);
        return redirect()->back()->with('message', 'Department details deleted successfully!'); 
    }
}
