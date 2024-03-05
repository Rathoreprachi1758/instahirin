<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Department;
use App\Models\Employee;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

/**
 * Controller class for managing time tracking functionality.
 */
class TimeTracking extends Controller
{
    /**
     * Display the view for logging in or off.
     *
     * @return View|Factory|Application
     */
    public function logInOff(): Factory|View|Application
    {
        $companies = Company::all();
        $selectedCompany = null;

        return view('timeTracking.log_in_off', compact('companies', 'selectedCompany'));
    }

    /**
     * Display departments based on the selected company.
     *
     * @param Request $request
     * @return Application|Factory|View|\Illuminate\Foundation\Application
     */
    public function company(Request $request): \Illuminate\Foundation\Application|View|Factory|Application
    {
        $company = Company::find($request->company);
        $departments = $company->departments;

        Session::put('departments', $departments);
        Session::put('selectedCompany', $company);

        return view('timeTracking.log_in_off', compact('departments', 'company'));
    }

    /**
     * Display employees based on the selected department.
     *
     * @param Request $request
     * @return View|Factory|\Illuminate\Foundation\Application
     */
    public function department(Request $request): View|Factory|Application
    {
        $department = Department::find($request->department);
        $employees = $department->employees;

        $departments = Session::get('departments');
        $companies = Company::all();

        Session::put('selectedDepartment', $department);

        return view('timeTracking.log_in_off', compact('employees', 'departments', 'companies'));
    }

    /**
     * Display employee details.
     *
     * @param Request $request
     * @return Application|Factory|View|\Illuminate\Foundation\Application
     */
    public function employee(Request $request): \Illuminate\Foundation\Application|View|Factory|Application
    {
        $employeeInfo = Employee::find($request->employee);
        $department = $employeeInfo->department;
        $company = Session::get('selectedCompany');

        return view('timeTracking.log_in_off', compact('employeeInfo', 'company'));
    }

    /**
     * @return Application|Factory|View|\Illuminate\Foundation\Application
     */
    public function EmployeeWorkLog(): \Illuminate\Foundation\Application|View|Factory|Application
    {
        $companies = Company::all();

        return view('timeTracking.work_log', compact('companies'));
    }

    /**
     * @param Request $request
     * @return Application|Factory|View|\Illuminate\Foundation\Application
     */
    public function workLogCompany(Request $request): \Illuminate\Foundation\Application|View|Factory|Application
    {
        $companies = Company::all();
        $departments = Company::find($request->workLogCompany)->departments;
        return view('timeTracking.work_log', compact('departments', 'companies'));
    }

    /**
     * @param Request $request
     * @return Application|Factory|View|\Illuminate\Foundation\Application
     */
    public function workLogDepartment(Request $request): \Illuminate\Foundation\Application|View|Factory|Application
    {
        $department = Department::find($request->department);
        $employees = $department->employees;
        $companies = Company::all();

        return view('timeTracking.work_log', compact('employees', 'companies'));
    }

    public function leaveRequest()
    {
        return view('timeTracking.leave_request');
    }

}


