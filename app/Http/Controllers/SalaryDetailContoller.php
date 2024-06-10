<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Country;
use App\Models\Department;
use App\Models\Employee;
use App\Models\EmployeeSalary;
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
        $employeesSalary = EmployeeSalary::all();

        return view('dashboard.salaryDetails.salary_details', compact('companies', 'employeesSalary', 'employees'));
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
        $employeesSalary = EmployeeSalary::all();
        $companies = Company::where('user_id', Auth::id())->get();

        return view('dashboard.salaryDetails.salary_details', compact('companies', 'employees', 'employeesSalary'));
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

        $taxDeductions = [
            "United States" => [
                "Federal Income Tax",
                "State Income Tax",
                "Social Security",
                "Medicare",
                "Health Insurance",
                "Retirement Contributions"
            ],
            "United Kingdom" => [
                "Income Tax",
                "National Insurance Contributions (NIC)",
                "Student Loan Repayments",
                "Pension Contributions",
                "Health Insurance"
            ],
            "Canada" => [
                "Federal and Provincial Income Tax",
                "Canada Pension Plan (CPP)",
                "Employment Insurance (EI)",
                "Health Insurance",
                "Retirement Savings Plan (RSP)"
            ],
            "Australia" => [
                "Income Tax",
                "Medicare Levy",
                "Superannuation",
                "Private Health Insurance"
            ],
            "Germany" => [
                "Income Tax",
                "Social Security Contributions",
                "Church Tax",
                "Health Insurance",
                "Retirement Contributions"
            ],
            "Japan" => [
                "Income Tax",
                "Residence Tax",
                "Social Insurance",
                "Health Insurance",
                "Pension Contributions"
            ],
            "India" => [
                "Income Tax (TDS - Tax Deducted at Source)",
                "Provident Fund (PF)",
                "Professional Tax (PT)",
                "Employee State Insurance (ESI)",
                "Gratuity",
                "Labor Welfare Fund",
                "Health Insurance",
                "Voluntary Deductions"
            ]
        ];

        $salaryHead = SalaryHeadMaster::where('employee_id', $employeeId)->first();
        $existingData = null;

        if ($salaryHead) {
            $existingData = json_decode($salaryHead->additional_Head, true);
        }
        $employeeSalary = EmployeeSalary::where('employee_id', $employeeId)->latest()->first();

        $salaryHeadMaster = SalaryHeadMaster::where('employee_id', $employeeId)->latest()->first();

        $additionalHeads = json_decode($employeeSalary?->additional_head, true) ?? [];
        $deductionHeads = json_decode($employeeSalary?->deduction_head, true) ?? [];
        $taxMetrics = json_decode($employeeSalary?->tax_matrices);

        $additionalHeadLabels = json_decode($salaryHeadMaster?->additional_Head, true) ?? [];
        $deductionHeadLabels = json_decode($salaryHeadMaster?->deduction_Head, true) ?? [];

        // Mapping the values to labels
        $mappedAdditionalHeads = [];
        foreach ($additionalHeads as $key => $value) {
            $mappedAdditionalHeads[$additionalHeadLabels[$key]] = $value;
        }

        $mappedDeductionHeads = [];
        foreach ($deductionHeads as $key => $value) {
            $mappedDeductionHeads[$deductionHeadLabels[$key]] = $value;
        }
        return view('dashboard.salaryDetails.salary_head_master', compact('companyId', 'departmentId', 'employeeId', 'salaryHead', 'mappedAdditionalHeads', 'mappedDeductionHeads', 'taxDeductions', 'taxMetrics'));
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
        $employeeSalary = null;
        return view('dashboard.salaryDetails.normal_salary', compact('employees', 'countries', 'salaryHead', 'employeeSalary'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function submitSalaryMaster(Request $request)
    {

        $headValues = [];
        $deductionValues = [];
        foreach ($request->all() as $key => $value) {
            if ($value != null) {
                if (strpos($key, 'addhead') === 0) {
                    $headValues[$key] = $value;
                } elseif (strpos($key, 'dedhead') === 0) {
                    $deductionValues[$key] = $value;
                }
            }
        }

        $salaryHeadMaster = new SalaryHeadMaster();
        $salaryHeadMaster->additional_Head = json_encode($headValues);
        $salaryHeadMaster->deduction_Head = json_encode($deductionValues);
        $salaryHeadMaster->salary_type = $request->salary_type;
        $salaryHeadMaster->company_id = $request->company_id;
        $salaryHeadMaster->employee_id = $request->employee_id;;
        $salaryHeadMaster->department_id = $request->department_id;
        $salaryHeadMaster->professional_tax_ranges = json_encode($request->pf_ranges);
        $salaryHeadMaster->tax_matrix = json_encode($request->deduction);
        $salaryHeadMaster->user_id = Auth::id();
        $salaryHeadMaster->save();

        return redirect()->route('salaryDetails');

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
        $employeeSalary = null;
        if ($employeeData) {
            $salaryHead = SalaryHeadMaster::where('employee_id', $request->emp_code)->latest()->first();
            $employeeSalary = employeeSalary::where('employee_id', $request->emp_code)->latest()->first();
            $employeeSalaryAdditionalHeads = json_decode($employeeSalary?->additional_head, true);
            $employeeSalaryDeductionHeads = json_decode($employeeSalary?->deduction_head, true);
            $employeeSalaryTaxMatrix = json_decode($employeeSalary?->tax_matrix, true);

        }
        return view('dashboard.salaryDetails.normal_salary', compact('employees', 'employeeData', 'countries', 'salaryHead', 'employeeSalary', 'employeeSalaryAdditionalHeads', 'employeeSalaryDeductionHeads'));
    }

    public function normalSalarySubmit(Request $request)
    {
        $additionalValue = [];
        $deductionValues = [];
        foreach ($request->all() as $key => $value) {
            if (strpos($key, 'addhead') === 0) {
                $additionalValue[$key] = $value;
            } elseif (strpos($key, 'dedhead') === 0) {
                $deductionValues[$key] = $value;
            }
        }

        $employeeSalary = new employeeSalary();

        $employeeSalary->employee_id = $request->employee_id;
        $employeeSalary->employee_name = $request->emp_name;
        $employeeSalary->additional_head = json_encode($additionalValue);
        $employeeSalary->deduction_head = json_encode($deductionValues);
        $employeeSalary->salary_type = $request->salaryType;
        $employeeSalary->per_hour = $request->perHour;
        $employeeSalary->total_hours = $request->totalHours;
        $employeeSalary->tax_matrices = json_encode($request->taxMatrices);
        $employeeSalary->total = $request->total;
        $employeeSalary->sub_total_deduction_head = $request->sub_total_deduction_head;
        $employeeSalary->subtotal_additional_head = $request->sub_total_additional_head;
        $employeeSalary->user_id = Auth::id();
        $employeeSalary->company_id = $request->company_id;
        $employeeSalary->save();

        return redirect()->route('salaryDetails');
    }
}