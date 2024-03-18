<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Models\Company;
// use App\Models\Job;
use RealRashid\SweetAlert\Facades\Alert;

class MasterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $companyData = Company::where('user_id',Auth::id())->get();
        // return $companyData;
        return view('dashboard.master.master',['companyData'=>$companyData]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return "crate method";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $company = new Company();
        $company->company_id = $request->company_id;
        $company->company_name = $request->company_name;
        $company->address = $request->address;
        $company->phone_no = $request->phonenumber;
        $company->fax_no = $request->fax_no;
        $company->email_id = $request->email_id;
        $company->website = $request->website;
        $company->user_id = Auth::id();
        $company->save();
        Alert::success('Company Details', 'Added Successfully');
        return redirect()->back()->with('message', 'Company details created successfully!'); 
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
        return "This is edit method";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $company = Company::find($id);
        // return $company;
        $company->company_id = $request->company_id;
        $company->company_name = $request->company_name;
        $company->address = $request->address;
        $company->phone_no = $request->phone_no;
        $company->fax_no = $request->fax_no;
        $company->email_id = $request->email_id;
        $company->website = $request->website;
        $company->user_id = Auth::id();
        $company->save();
        Alert::success('Company Details', 'Updated Successfully');
        return redirect()->back()->with('message', 'Company details updated successfully!'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Alert::error('Company Details', 'Deleted Successfully');
        // return $id;
        $comPany = Company::findOrFail($id);
        $comPany->destroy($id);
        return redirect()->back()->with('message', 'Company details deleted successfully!'); 

    }
//     public function destroy(string $id)
// {
//     try {
//         $comPany = Company::findOrFail($id);

//         // Show SweetAlert confirmation
//         Alert::warning('Delete Company', 'Are you sure you want to delete this company?')
//             ->showCancelButton(true)
//             ->showConfirmButton(true)
//             ->confirmButtonText('Yes, delete it!')
//             ->cancelButtonText('No, cancel')
//             ->focusCancel(true)
//             ->reverseButtons(true)
//             ->timerProgressBar(true)
//             ->then(function () use ($comPany, $id) {
//                 // User clicked "Yes, delete it!" in the confirmation
//                 $comPany->delete();
//                 Alert::success('Company Details', 'Deleted Successfully');
//             }, function (Dismissable $dismiss) {
//                 // User clicked "No, cancel" or closed the SweetAlert
//                 if ($dismiss === Dismissable::TIMED_OUT) {
//                     // Handle if the SweetAlert was closed due to timer
//                 }
//             });

//         return redirect()->back()->with('message', 'Company details deleted successfully!');
//     } catch (\Exception $e) {
//         // Handle any exceptions (e.g., if the company is not found)
//         Alert::warning('Error', 'Failed to delete company details');
//         return redirect()->back()->with('error', 'Failed to delete company details');
//     }
// }
}
