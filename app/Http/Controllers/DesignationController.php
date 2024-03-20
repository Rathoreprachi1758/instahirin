<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\Company;
use App\Models\designation;
use RealRashid\SweetAlert\Facades\Alert;

class DesignationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $companyId = Company::where('user_id',Auth::id())->pluck('id');
        $department = Department::whereIn('comapny_id',$companyId)->get();
        $comapnaies = Company::where('user_id',Auth::id())->get();
        $designation = designation::where('user_id', Auth::id())->get();
        // return $department;
        return view('dashboard.master.designation',['comapnaies'=>$comapnaies,'department'=>$department,'designation' =>$designation]);
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
        $designation->comapny_id = $request->company_id;
        $designation->save();
        Alert::success('Designation Details', 'Added Successfully');
        return redirect()->back()->with('message','Designation Entered Succesfully');


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
        $designation->comapny_id = $request->company_id;
        $designation->save();
        Alert::success('Designation Details', 'Updated Successfully');
        return redirect()->back()->with('message','Designation Updated Succesfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {   
        $designation = designation::findOrFail($id);
        $designation->destroy($id);
        return redirect()->back()->with('message','Designation Deleted Succesfully');
    }
}
