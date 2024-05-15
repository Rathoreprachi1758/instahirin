<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Country;
use App\Models\Department;
use App\Models\Employee;
use App\Models\employeeSalary;
use App\Models\SalaryHeadMaster;
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

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|Factory|View|Application
     */

    public function SalaryHeadMaster(Request $request): Application|View|Factory|\Illuminate\Contracts\Foundation\Application
    {
        $companyId = $request->companyId;
        $departmentId = $request->departmentId;
        $employeeId = $request->employeeId;

        return view('dashboard.salaryDetails.salary_head_master', compact('companyId', 'departmentId', 'employeeId'));
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|Factory|View|Application
     */
    public function normalSalary(): Application|View|Factory|\Illuminate\Contracts\Foundation\Application
    {
        $companies = Company::where('user_id', Auth::id())->get();
        $companiesId = [];
        foreach ($companies as $company) {
            $companiesId[] = $company->id;
        }
        $employees = Employee::whereIn('company_id', $companiesId)->get();
        $countries = Country::all();
        $salaryHead = null;
        return view('dashboard.salaryDetails.normal_salary', compact('employees', 'countries' , 'salaryHead'));
    }

    /**
     * @param Request $request
     * @return void
     */
    public function submitSalaryMaster(Request $request)
    {
        $headValues = [];
        $deductionValues = [];
        foreach ($request->all() as $key => $value) {
            if (strpos($key, 'addhead') === 0) {
                $headValues[$key] = $value;
            } elseif (strpos($key, 'dedhead') === 0) {
                $deductionValues[$key] = $value;
            }
        }

        $salaryHeadMaster = new SalaryHeadMaster();
        $salaryHeadMaster->additional_Head = json_encode($headValues);
        $salaryHeadMaster->deduction_Head = json_encode($deductionValues);
        $salaryHeadMaster->company_id = $request->company_id;
        $salaryHeadMaster->employee_id = $request->employee_id;;
        $salaryHeadMaster->department_id = $request->department_id;
        $salaryHeadMaster->professional_tax_ranges = json_encode($request->pf_ranges);
        $salaryHeadMaster->pf = $request->pf;;
        $salaryHeadMaster->esi = $request->esi;
        $salaryHeadMaster->user_id = Auth::id();
        $salaryHeadMaster->save();

        dd(json_encode($headValues), json_encode($deductionValues));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|Factory|View|Application
     */
    public function getSalaryHead(Request $request)
    {
        $companies = Company::where('user_id', Auth::id())->get();
        $companiesId = [];
        foreach ($companies as $company) {
            $companiesId[] = $company->id;
        }
        $employees = Employee::whereIn('company_id', $companiesId)->get();
        $countries = Country::all();
        $employeeData = Employee::find($request->emp_code);
        $salaryHead = null;
        if ($employeeData) {
            $salaryHead = SalaryHeadMaster::where('employee_id', $request->emp_code)->first();
        }
        return view('dashboard.salaryDetails.normal_salary', compact('employees', 'employeeData', 'countries', 'salaryHead'));
    }

    public function normalSalarySubmit(Request $request)
    {
        $employeeSalary = new employeeSalary();

        $employeeSalary->employee_code = $request->emp_code;
        $employeeSalary->employee_name = $request->emp_name;
        $employeeSalary->salary_type = $request->salaryType;
        $employeeSalary->per_hour = $request->perHour;
        $employeeSalary->total_hours = $request->totalHours;
        $employeeSalary->total = $request->total;
        $employeeSalary->basic_additional_head = $request->basic_additional_head;
        $employeeSalary->medical_allowance_additional_head = $request->medical_allowance_additional_head;
        $employeeSalary->profession_tax_deduction_head = $request->professional_tax;
        $employeeSalary->total_hours = $request->pf_no;
        $employeeSalary->esi_number = $request->esi_no;
        $employeeSalary->profession_tax_total_deduction_head = $request->sub_total_deduction_head;
        $employeeSalary->subtotal_additional_head = $request->sub_total_addtional_head;
        $employeeSalary->user_id = Auth::id();
        $employeeSalary->save();
        dd($request);
    }
}
