<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Department;
use App\Models\Employee;
use App\Models\EmployeeLogTime;
use App\Models\LateRequest;
use App\Models\leave;
use App\Models\LeaveRequest;
use Auth;
use Carbon\Carbon;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
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
//        dd(\Illuminate\Support\Facades\Auth::user()->pluck('roles'));

        $punchHistories = null;
        $punchDetails = null;
        $selectedCompany = null;
        $departments = [];

        $companies = Company::where('user_id', Auth::id())->get();
        $employeeInfo = Employee::where('user_id', Auth::id())->where('department_id', Session::get('department_id'))->first();

        if ($employeeInfo) {
            $punchHistories = $this->punchHistory($employeeInfo) ?? null;
            $punchDetails = $this->punchDetails($employeeInfo) ?? null;
        }

        $company = Session::get('selectedCompany');
        $employees = Employee::where('company_id', $company->id)->get();

        foreach ($employees as $employee) {
            $departments[] = $employee->department;
        }

        return view('timeTracking.log_in_off')->with([
            'companies' => $companies,
            'selectedCompany' => $selectedCompany,
            'punchHistories' => $punchHistories,
            'employeeInfo' => $employeeInfo,
            'punchDetails' => $punchDetails,
            'companyName' => $company?->company_name,
            'departments' => $departments,
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
     * @return JsonResponse
     */
    public function company($companyId): JsonResponse
    {
        $employees = Employee::where('company_id', $companyId)->get();
        $departments = [];
        foreach ($employees as $employee) {
            $departments[] = $employee->department;
        }
        return response()->json($departments);
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
        $departments = [];

        if (Session::has('workLogDepartment')) {
            $departments = Session::get('workLogDepartment');
        }

        return view('timeTracking.work_log', compact('companies', 'departments'));
    }

    public function workLogCompany(Request $request): \Illuminate\Foundation\Application|View|Factory|Application
    {
        $companies = Company::where('user_id', Auth::id())->get();
        $employeePunchLogsQuery = EmployeeLogTime::where('user_id', Auth::id());
        $employeeInfoQuery = Employee::where('user_id', Auth::id());

        if ($request->department != null) {
            $employeeInfoQuery->where('department_id', $request->department);
        }

        $employeeInfo = $employeeInfoQuery->first();

        if ($request->workLogCompany != null) {
            $employeePunchLogsQuery->where('company_id', $request->workLogCompany);
            Session::put('workLogCompany', $request->workLogCompany);
        }
        if ($request->department != null && $employeeInfo) {
            $employeePunchLogsQuery->where('employee_id', $employeeInfo->id);
        }
        if ($request->has('from') && $request->has('to') && $request->from != null && $request->to != null) {
            $employeePunchLogsQuery->whereBetween('date', [$request->from, $request->to]);
        }

        $employeePunchLogs = $employeePunchLogsQuery->get();

        $punchInOutInfo = $this->employeePunchLogs($employeePunchLogs);
        $employees = Employee::where('company_id', Session::get('workLogCompany'))->get();
        $departments = $employees->pluck('department')->unique()->values()->all();

        return view('timeTracking.work_log', compact('departments', 'companies', 'punchInOutInfo'));
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

        return redirect()->route('employeeWorkLog');
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
     * Handle form submission and process time log for selected company.
     *
     * @param Request $request
     * @return Application|Factory|View|\Illuminate\Foundation\Application
     */
    public function timeLogCompany(Request $request): \Illuminate\Foundation\Application|View|Factory|Application
    {
        $employee = EmployeeLogTime::query();

        if ($request->from && $request->to && ($request->from != null || $request->to != null) && $request->company == null) {
            $employee->whereBetween('date', [$request->from, $request->to]);
        } else if ($request->company != null && ($request->from == null || $request->to == null)) {
            $employee->where('company_id', $request->company);
        } else if ($request->from && $request->to && ($request->from != null || $request->to != null) && $request->company != null) {
            $employee->where('company_id', $request->company)->whereBetween('date', [$request->from, $request->to]);
        }

        $companies = Company::all();
        $employeePunchLogs = $employee->get();
        $punchInOutInfo = $this->employeePunchLogs($employeePunchLogs);
        return view('timeTracking.time_log', compact('companies', 'punchInOutInfo'));
    }

    /**
     * @param Request $request
     * @return Application|Factory|View|\Illuminate\Foundation\Application
     */
    public
    function timeOffCompany(Request $request): \Illuminate\Foundation\Application|View|Factory|Application
    {
        $leaveRequests = LeaveRequest::query();

        if (isset($request->timeOffCompany)) {
            $leaveRequests->where('company_id', $request->timeOffCompany);
        }

        if (isset($request->statusFilter) && ($request->statusFilter == 0 || $request->statusFilter == 1)) {
            $leaveRequests->where('leave_status', (int)$request->statusFilter);
        }

        $employeeLeaveRequests = $leaveRequests->get();
        $companies = Company::all();

        return view('timeTracking.time_off', compact('companies', 'employeeLeaveRequests'));

    }

    public
    function timeOffStatus(Request $request)
    {
        $leaveRequest = LeaveRequest::find($request->id);

        if (isset($request->status)) {
            $leaveRequest->leave_status = $request->status;
        }
        $leaveRequest->save();
        return redirect()->route('timeOff');
    }

    /**
     * @return Application|Factory|View|\Illuminate\Foundation\Application
     */
    public
    function timeOff(): \Illuminate\Foundation\Application|View|Factory|Application
    {
        $companies = Company::all();

        return view('timeTracking.time_off', compact('companies'));
    }

    /**
     * @param $employeePunchLogs
     * @return array
     */
    private function employeePunchLogs($employeePunchLogs): array
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
     * @return \Illuminate\Foundation\Application|View|Factory|Application
     */
    public function leaveRequest(): \Illuminate\Foundation\Application|View|Factory|Application
    {
        $companies = Company::all();
        $leaveTypes = leave::all();
        $leaveRequests = LeaveRequest::all();
        return view('timeTracking.leave_request')->with(compact('companies', 'leaveTypes', 'leaveRequests'));
    }

    /**
     * @param $companyId
     * @return JsonResponse
     */
    public
    function leaveRequestDepartments($companyId): JsonResponse
    {
        $departments = Department::where('company_id', $companyId)->get();
        return response()->json($departments);
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function leaveRequestSubmit(Request $request): RedirectResponse
    {
        $leave = leave::find($request->leaveId);

        $leaveRequest = new LeaveRequest;
        $leaveRequest->company_id = $request->company;
        $leaveRequest->department_id = $request->department;
        $leaveRequest->leave_id = $request->leaveId;
        $leaveRequest->leave_type = $leave->leave_name;
        $leaveRequest->employee_code = $request->emp_code;
        $leaveRequest->start_date = $request->From;
        $leaveRequest->end_date = $request->To;
        $leaveRequest->leave_reason = $request->reason;
        $leaveRequest->leave_days = $request->leaveDays;
        $leaveRequest->leave_balance = $request->leaveBalance;
        $leaveRequest->email = $request->email;
        $leaveRequest->phone = $request->phone;
        $leaveRequest->save();
        return redirect()->route('leaveRequest');

    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function leaveStatus(Request $request): RedirectResponse
    {
        $LeaveRequest = LeaveRequest::find($request->requestId);
        $LeaveRequest->leave_status = $request->status;
        $LeaveRequest->save();
        return redirect()->route('leaveRequest');

    }

    /**
     * @return \Illuminate\Foundation\Application|View|Factory|Application
     */
    public function lateRequest(): \Illuminate\Foundation\Application|View|Factory|Application
    {
        $companies = Company::all();
        $leaveTypes = leave::all();
        $lateRequests = LateRequest::all();
        return view('timeTracking.late_request')->with(compact('companies', 'leaveTypes', 'lateRequests'));
    }

    /**
     * @param $companyId
     * @return JsonResponse
     */
    public
    function lateRequestDepartments($companyId): JsonResponse
    {
        $departments = Department::where('company_id', $companyId)->get();
        return response()->json($departments);
    }

    /**
     * @param Request $request
     * @return Application|\Illuminate\Foundation\Application|Redirector|RedirectResponse
     */
    public function lateRequestSubmit(Request $request): \Illuminate\Foundation\Application|Redirector|RedirectResponse|Application
    {
        $lateRequest = new LateRequest;
        $lateRequest->company_id = $request->company;
        $lateRequest->department_id = $request->department;
        $lateRequest->employee_code = $request->emp_code;
        $lateRequest->date = $request->date;
        $lateRequest->expected_time = $request->time;
        $lateRequest->late_reason = $request->reason;
        $lateRequest->save();
        return redirect()->route('lateRequest');
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function lateStatus(Request $request): RedirectResponse
    {
        $LeaveRequest = LateRequest::find($request->requestId);
        $LeaveRequest->late_status = $request->status;
        $LeaveRequest->save();
        return redirect()->route('lateRequest');
    }
}
