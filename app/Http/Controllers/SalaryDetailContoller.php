<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Department;
use App\Models\Employee;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SalaryDetailContoller extends Controller
{
    /**
     * @return View|Application|Factory|\Illuminate\Contracts\Foundation\Application
     */
    public function salaryDetails(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        $companies = Company::where('user_id', Auth::id())->get();
        $companiesId = [];
        foreach ($companies as $company) {
            $companiesId[] = $company->id;
        }

        $employees = Employee::whereIn('company_id', $companiesId)->get();

        return view('dashboard.salaryDetails.salary_details', compact('companies', 'employees'));
    }

    /**
     * Display departments based on the selected company.
     *
     * @param $companyId
     * @return JsonResponse
     */
    public function company($companyId): JsonResponse
    {
        $departments = Department::where('company_id', $companyId)->get();
        return response()->json($departments);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|Factory|View|Application
     */
    public function salaryDetailFilters(Request $request): Application|View|Factory|\Illuminate\Contracts\Foundation\Application
    {
        if (isset($request->company) && isset($request->department)) {
            $employees = Employee::where('company_id', $request->company)
                ->where('department_id', $request->department)
                ->get();
        } elseif (isset($request->company)) {
            $employees = Employee::where('company_id', $request->company)->get();
        } else {
            $employees = Employee::all();
        }
        $companies = Company::where('user_id', Auth::id())->get();

        return view('dashboard.salaryDetails.salary_details', compact('companies', 'employees'));
    }

}
