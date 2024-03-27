<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\Company;
use App\Models\Category;
use RealRashid\SweetAlert\Facades\Alert;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $companyId = Company::where('user_id', Auth::id())->pluck('id');
        $department = Department::whereIn('company_id', $companyId)->get();
        $comapnaies = Company::where('user_id', Auth::id())->get();
        $category = Category::where('user_id',Auth::id())->get();
        return view('dashboard.master.category',['category'=>$category,'department' => $department, 'comapnaies' => $comapnaies,]);
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
        $values = ($request->has('work_day') ? 'work_day ' : '') .
        ($request->has('week_off') ? 'week_off ' : '') .
        ($request->has('holidays') ? 'holidays ' : '');
        $values = rtrim($values);
        $Category = new Category;
        $Category->category_id = $request->category_id;
        $Category->category_name = $request->category_name;
        $Category->early_arrival_allow = $request->early_bird;
        $Category->Max_time_to_allow = $request->Max_OT_allow;
        $Category->OT_half_From = $request->OT_range_half_from;
        $Category->OT_half_To = $request->OT_range_half_to;
        $Category->OT_full_from = $request->OT_range_hals_c_From;
        $Category->OT_full_To = $request->OT_range_hals_c_off_To;
        $Category->work_day = $values;
        $Category->early_arraival_ignore = $request->Early_arraival;
        $Category->Late_arraival_allow = $request->Late_arraival;
        $Category->Early_depature_allow = $request->Early_departure;
        $Category->late_depature_ignore = $request->late_depature_ignore;
        $Category->OT_ignore = $request->OT_ignore;
        $Category->select_no_of_late = $request->no_of_late;
        $Category->Absent = $request->Absent;
        $Category->halfday_if_late_hours_greater_than= $request->half_late_hours;
        $Category->absent_if_Work_hours_less_than = $request->half_less_hours;
        $Category->absent_if_work_hours_greater_than = $request->Absent_after_hours;
        $Category->ot_calculations = $request->ot_calculations;
        $Category->OT_payment_multiplyaer = $request->ot_payment_multiplayer;
        $Category->all_in_first_in = $request->all;
        $Category->WO_Lapse_on_previous_and_next_absent = $request->wo_lapse;
        $Category->user_id = Auth::id();
        $Category->comapny_id = $request->company_id;
        $Category->department_id = $request->dept_id;
        $Category->save();
        Alert::success('Category Details', 'Added Successfully');
        return redirect()->back()->with('message', 'Category Details created successfully!');

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
        $values = ($request->has('work_day') ? 'work_day ' : '') .
        ($request->has('week_off') ? 'week_off ' : '') .
        ($request->has('holidays') ? 'holidays ' : '');
        $values = rtrim($values);
        $Category = Category::find($id);
        $Category->category_id = $request->category_id;
        $Category->category_name = $request->category_name;
        $Category->early_arrival_allow = $request->early_bird;
        $Category->Max_time_to_allow = $request->Max_OT_allow;
        $Category->OT_half_From = $request->OT_range_half_from;
        $Category->OT_half_To = $request->OT_range_half_to;
        $Category->OT_full_from = $request->OT_range_hals_c_From;
        $Category->OT_full_To = $request->OT_range_hals_c_off_To;
        $Category->work_day = $values;
        $Category->early_arraival_ignore = $request->Early_arraival;
        $Category->Late_arraival_allow = $request->Late_arraival;
        $Category->Early_depature_allow = $request->Early_departure;
        $Category->late_depature_ignore = $request->late_depature_ignore;
        $Category->OT_ignore = $request->OT_ignore;
        $Category->select_no_of_late = $request->no_of_late;
        $Category->Absent = $request->Absent;
        $Category->halfday_if_late_hours_greater_than= $request->half_late_hours;
        $Category->absent_if_Work_hours_less_than = $request->half_less_hours;
        $Category->absent_if_work_hours_greater_than = $request->Absent_after_hours;
        $Category->ot_calculations = $request->ot_calculations;
        $Category->OT_payment_multiplyaer = $request->ot_payment_multiplayer;
        $Category->all_in_first_in = $request->all;
        $Category->WO_Lapse_on_previous_and_next_absent = $request->wo_lapse;
        $Category->save();
        Alert::success('Category Details', 'Updated Successfully');
        return redirect()->back()->with('message', 'Category Details Updated successfully!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $shift = Category::findOrFail($id);
        $shift->destroy($id);
        return redirect()->back()->with('message', 'Shift details deleted successfully!');
    }
}
