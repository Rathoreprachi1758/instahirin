<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Department;
use App\Models\Employee;
use App\Models\EmployeeLogTime;
use Auth;
use Carbon\Carbon;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
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

        $companies = Company::where('user_id', Auth::id())->get();
        $selectedCompany = null;
        $employeeInfo = Employee::where('user_id', Auth::id())->where('department_id', Session::get('department_id'))->first();
        $punchHistories = null;
        $punchDetails = null;

        if ($employeeInfo) {
            $punchHistories = $this->punchHistory($employeeInfo) ?? 'null';
            $punchDetails = $this->punchDetails($employeeInfo) ?? 'null';
        }
        $company = Session::get('selectedCompany');

        return view('timeTracking.log_in_off')->with([
            'companies' => $companies,
            'selectedCompany' => $selectedCompany,
            'punchHistories' => $punchHistories,
            'employeeInfo' => $employeeInfo,
            'punchDetails' => $punchDetails,
            'companyName' => $company?->company_name
        ]);
    }

    /**
     * @param $employeeInfo
     * @return mixed
     */
    public function punchHistory($employeeInfo): mixed
    {
        $employeeLogTime = EmployeeLogTime::where('user_id', $employeeInfo->user_id)->where('employee_id', $employeeInfo->id)->where('date', Carbon::now()->toDateString())->first() ?? null;
        return json_decode($employeeLogTime?->punch, true);
    }

    /**
     * @param $employeeInfo
     * @return array
     */
    public function punchDetails($employeeInfo): array
    {
        $employeePunchLogs = EmployeeLogTime::where('user_id', $employeeInfo->user_id)
            ->where('employee_id', $employeeInfo->id)
            ->where('date', Carbon::now()->toDateString())
            ->first();
        if ($employeePunchLogs) {
            $punch = json_decode($employeePunchLogs['punch'], true);
            $punchInLog = [];
            $punchOutLog = [];

            if ($punch != null) {

                foreach ($punch as $log) {
                    if (isset($log['punch_in'])) {
                        $punchInLog[] = $log['punch_in'];
                    }

                    if (isset($log['punch_out'])) {
                        $punchOutLog[] = $log['punch_out'];
                    }
                }
                asort($punchInLog);
                asort($punchOutLog);
            }
        }
        $firstLogIn = !empty($punchInLog) ? Carbon::parse(reset($punchInLog))->format('H:i:s') : null;
        $lastPunchOut = !empty($punchOutLog) ? Carbon::parse(end($punchOutLog))->format('H:i:s') : null;

        return ['firstLogIn' => $firstLogIn, 'lastPunchOut' => $lastPunchOut];
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

        $companies = Company::where('user_id', Auth::id())->get();

        Session::put('departments', $departments);
        Session::put('selectedCompany', $company);

        return view('timeTracking.log_in_off', compact('departments', 'companies', 'company'));
    }

    /**
     * Display employees based on the selected department.
     *
     * @param Request $request
     * @return View|Factory|\Illuminate\Foundation\Application
     */
    public function department(Request $request): View|Factory|Application
    {
        $companies = Company::where('user_id', Auth::id())->get();
        $employeeInfo = Employee::where('user_id', Auth::id())->where('department_id', $request->department)->first();

        $punchHistories = null;
        $punchDetails = null;
        if ($employeeInfo) {
            $punchHistories = $this->punchHistory($employeeInfo) ?? null;
            $punchDetails = $this->punchDetails($employeeInfo) ?? null;
        }
        Session::put('employeeInfo', $employeeInfo);
        $company = Session::get('selectedCompany');
        $companyName = $company->company_name;
        return view('timeTracking.log_in_off', compact('employeeInfo', 'companyName', 'companies', 'punchHistories', 'punchDetails'));
    }

    /**
     * Handles punching in or out.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function punch(Request $request): RedirectResponse
    {
        $punchStatus = $request->punch;
        $currentDateTime = $request->current_datetime;
        $dateOnly = Carbon::parse($currentDateTime)->toDateString();

        $response = Http::get('https://api.ipify.org');
        $ip = $response->body();

        if ($request->has('department_id')) {
            $department = Department::find($request->department_id);
            $employeeInfo = Employee::where('user_id', Auth::id())->where('department_id', $request->department_id)->first();
            $employeeId = $employeeInfo->id;
            $employeeField = [];

            if ($punchStatus) {
                $employeeField['punch_in'] = $currentDateTime;
            } else {
                $employeeField['punch_out'] = $currentDateTime;
            }
            $employeeData = EmployeeLogTime::where('user_id', $employeeInfo->user_id)
                ->where('employee_id', $employeeInfo->id)
                ->where('date', Carbon::now()->toDateString())
                ->first();
            if ($employeeData != null) {
                $existingPunchIn = json_decode($employeeData->punch, true);
                $existingPunchIn[] = $employeeField;
                $employeeData->punch = json_encode($existingPunchIn);
                $employeeData->save();
            } else {
                $employeeLogTime = new EmployeeLogTime;
                $employeeLogTime->punch = (json_encode([$employeeField], true));
                $employeeLogTime->employee_id = $employeeId;
                $employeeLogTime->user_id = $employeeInfo->user_id;
                $employeeLogTime->date = $dateOnly;
                $employeeLogTime->ip_address = $ip;
                $employeeLogTime->company_id = $department->company_id;
                $employeeLogTime->save();
            }
        }
        return redirect()->route('logInOff')->with('department_id', $request->department_id);
    }

    /**
     * Displays the view for employee work log.
     *
     * @return Application|Factory|View
     */
    public function employeeWorkLog(): View|Factory|Application
    {
        $companies = Company::where('user_id', Auth::id())->get();
        $departments = []; // Initialize departments as an empty array
        // Retrieve departments from session if available
        if (Session::has('workLogDepartment')) {
            $departments = Session::get('workLogDepartment');
        }

        return view('timeTracking.work_log', compact('companies', 'departments'));
    }

    /**
     * Displays work log based on the selected company.
     *
     * @param Request $request
     * @return \Illuminate\Foundation\Application|View|Factory|Application
     */
    public function workLogCompany(Request $request): \Illuminate\Foundation\Application|View|Factory|Application
    {
        $companies = Company::where('user_id', Auth::id())->get();
        $departments = Company::find($request->workLogCompany)->departments;
        Session::put('workLogDepartment', $departments);
        return view('timeTracking.work_log', compact('departments', 'companies'));
    }

    /**
     * Displays work log based on the selected department.
     *
     * @param Request $request
     * @return Application|Factory|View|\Illuminate\Foundation\Application
     */
    public function workLogDepartment(Request $request): Application|Factory|View|\Illuminate\Foundation\Application
    {
        $employeeInfo = Employee::where('user_id', Auth::id())->where('department_id', $request->department)->first();

        $companies = Company::where('user_id', Auth::id())->get();
        $departments = Session::get('workLogDepartment');
        if ($request->from && $request->to) {
            $employeePunchLogs = EmployeeLogTime::where('user_id', $employeeInfo?->user_id)->where('employee_id', $employeeInfo?->id)->whereBetween('date', [$request->from, $request->to])->get();
        } else {
            $employeePunchLogs = EmployeeLogTime::where('user_id', $employeeInfo?->user_id)->where('employee_id', $employeeInfo?->id)->get();
        }

        $punchInOutInfo = $this->employeePunchLogs($employeePunchLogs);

        return view('timeTracking.work_log', compact('punchInOutInfo', 'employeeInfo', 'companies', 'departments'));
    }

    /**
     * update the status of employee log
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function Status(Request $request): RedirectResponse
    {
        $employeeTimeLog = EmployeeLogTime::where('date', $request->date)->first();
        $employeeTimeLog->work_log_status = $request->status;
        $employeeTimeLog->save();
//        return redirect(URL::current());
        return redirect()->back()->with('success', 'your message,here');
    }

    /**
     * @return Application|Factory|View|\Illuminate\Foundation\Application
     */
    public function timeLogs(): \Illuminate\Foundation\Application|View|Factory|Application
    {
        $companies = Company::all();
        return view('timeTracking.time_log', compact('companies'));
    }

    /**
     * @param Request $request
     * @return Application|Factory|View|\Illuminate\Foundation\Application
     */
    public function timeLogCompany(Request $request): \Illuminate\Foundation\Application|View|Factory|Application
    {
        if ($request->from && $request->to) {
            $employeePunchLogs = EmployeeLogTime::where('company_id', $request->timeLogCompany)->whereBetween('date', [$request->from, $request->to])->get();
        } else {
            $employeePunchLogs = EmployeeLogTime::where('company_id', $request->timeLogCompany)->get();
        }

        $companies = Company::all();

        $punchInOutInfo = $this->employeePunchLogs($employeePunchLogs);

        return view('timeTracking.time_log', compact('companies', 'punchInOutInfo'));

    }


    /**
     * @param $employeePunchLogs
     * @return array|void
     */
    private function employeePunchLogs($employeePunchLogs)
    {
        $punchLogs = [];
        $punchInOutInfo = [];
        foreach ($employeePunchLogs as $employeePunchLog) {
            $employeeId = $employeePunchLog->employee_id;

            $employee = Employee::find($employeeId);
            $employeeCode = $employee->employee_code;

            $date = $employeePunchLog->date;
            $punchInfo = json_decode($employeePunchLog->punch, true);
            $ipAddress = $employeePunchLog->ip_address;
            $status = $employeePunchLog->work_log_status ?? null;

            if (!isset($punchLogs[$date])) {
                $punchLogs[$date] = [
                    'punch_in' => [],
                    'punch_out' => []
                ];
            }

            foreach ($punchInfo as $punchData) {
                if (isset($punchData['punch_in'])) {
                    $punchLogs[$date]['punch_in'][] = $punchData['punch_in'];
                } elseif (isset($punchData['punch_out'])) {
                    $punchLogs[$date]['punch_out'][] = $punchData['punch_out'];
                }
            }
            $punchLogs[$date]['ip_address'] = $ipAddress;
            $punchLogs[$date]['work_log_status'] = $status;
            $punchLogs[$date]['emp_code'] = $employeeCode;

        }
        foreach ($punchLogs as $date => $punchTime) {
            sort($punchTime['punch_in']);
            sort($punchTime['punch_out']);

            $ipAddressByDate = $punchTime['ip_address'];
            $statusByDate = $punchTime['work_log_status'];
            $employeeCode = $punchTime['emp_code'];
            $firstLogIn = !empty($punchTime['punch_in']) ? Carbon::parse(reset($punchTime['punch_in']))->format('H:i:s') : null;
            $lastPunchOut = !empty($punchTime['punch_out']) ? Carbon::parse(end($punchTime['punch_out']))->format('H:i:s') : null;

            $punchInOutInfo[] = [
                'date' => $date,
                'punchIn' => $firstLogIn,
                'punchOut' => $lastPunchOut,
                'ip_address' => $ipAddressByDate,
                'work_log_status' => $statusByDate,
                'emp_code' => $employeeCode
            ];
        }
        return $punchInOutInfo;
    }

    /**
     * @return Application|Factory|View|\Illuminate\Foundation\Application
     */
    public function leaveRequest(): \Illuminate\Foundation\Application|View|Factory|Application
    {
        $companies = Company::all();
        return view('timeTracking.leave_request')->with(compact('companies'));
    }
}
