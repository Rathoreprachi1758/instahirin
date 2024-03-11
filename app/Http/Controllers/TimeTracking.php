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
        $punchHistories = [];
        $punchDetails = null;
        $selectedCompany = null;
        $departments = [];

        $companies = Company::where('user_id', Auth::id())->get();
        $employeeInfo = Employee::where('user_id', Auth::id())->where('department_id', Session::get('department_id'))->where('company_id', Session::get('logInOffCompanyId'))->where('user_id', Auth::id())->first();

        if ($employeeInfo) {
            $punchHistories = $this->punchHistory($employeeInfo);
            $punchDetails = $this->punchDetails($employeeInfo) ?? null;
        }

//        $total_working_hours = 0;
//
//        for ($i = 0; $i < count($punchHistories); $i += 2) {
//            if (isset($punchHistories[$i]['punch_in']) && isset($punchHistories[$i + 1]['punch_out'])) {
//                $punch_in_time = strtotime($punchHistories[$i]['punch_in']);
//                $punch_out_time = strtotime($punchHistories[$i + 1]['punch_out']);
//
//                $working_hours = ($punch_out_time - $punch_in_time) / (60 * 60);
//                $total_working_hours += $working_hours;
//            }
//        }
//
//        $hours = floor($total_working_hours);
//        $minutes_decimal = ($total_working_hours - $hours) * 60;
//        $minutes = round($minutes_decimal);
//
//        dd($hours, $minutes);
////        gmdate("H:i", $total_working_hours);
//        dd($total_working_hours);
        $lastPunch = end($punchHistories);

        $company = Session::get('selectedCompany');
        $employees = Employee::where('company_id', $company?->id)->where('user_id', Auth::id())->get();

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
            'lastPunch' => $lastPunch
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

    public function totalHours()
    {

    }

    /**
     * Display departments based on the selected company.
     *
     * @param $companyId
     * @return JsonResponse
     */
    public function company($companyId): JsonResponse
    {
        Session::put('logInOffCompanyId', $companyId);
        $employees = Employee::where('company_id', $companyId)->where('user_id', Auth::id())->get();

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

        $employeeInfo = Employee::where('user_id', Auth::id())->where('department_id', $request->department)->where('company_id', Session::get('logInOffCompanyId'))->where('user_id', Auth::id())->first();
        $punchHistories = [];
        $punchDetails = null;
        if ($employeeInfo) {
            $punchHistories = $this->punchHistory($employeeInfo);
            $punchDetails = $this->punchDetails($employeeInfo) ?? null;
        }

        $lastPunch = !empty($punchHistories) ? end($punchHistories) : null;

        Session::put('employeeInfo', $employeeInfo);
        Session::put('department_id', $request->department);

        return view('timeTracking.log_in_off', compact('employeeInfo', 'companies', 'punchHistories', 'punchDetails', 'lastPunch'));
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
            $employeeInfo = Employee::where('user_id', Auth::id())->where('department_id', $request->department_id)->where('company_id', Session::get('logInOffCompanyId'))->where('user_id', Auth::id())->first();
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
                $employeeLogTime->department_id = $department->id;
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

    /**
     * @param Request $request
     * @return \Illuminate\Foundation\Application|View|Factory|Application
     */
    public function workLogCompany(Request $request): \Illuminate\Foundation\Application|View|Factory|Application
    {
        $companies = Company::where('user_id', Auth::id())->get();
        $employeePunchLogsQuery = EmployeeLogTime::where('user_id', Auth::id());

        $employeeInfoQuery = Employee::where('user_id', Auth::id());
        if ($request->department != null) {
            $employeeInfoQuery->where('department_id', $request->department);
        }

        $employeeInfo = $employeeInfoQuery->first();
        if ($request->company != null) {
            $employeePunchLogsQuery->where('company_id', $request->company);
            Session::put('workLogCompany', $request->company);
        }
        if ($request->department != null && $employeeInfo) {
            $employeePunchLogsQuery->where('employee_id', $employeeInfo->id);
        }
        if ($request->has('from') && $request->has('to') && $request->from != null && $request->to != null) {
            $employeePunchLogsQuery->whereBetween('date', [$request->from, $request->to]);
        }

        if ($request->department != null && $employeeInfo && $request->company != null) {
            $employeePunchLogsQuery->where('employee_id', $employeeInfo->id)->where('company_id', $request->company);
        }
        $employeePunchLogs = $employeePunchLogsQuery->get();

        $punchInOutInfo = $this->employeePunchLogs($employeePunchLogs);

        $employees = Employee::where('company_id', Session::get('workLogCompany'))->where('user_id', Auth::id())->get();
        $departments = $employees->pluck('department')->unique()->values()->all();
        return view('timeTracking.work_log', compact('departments', 'companies', 'punchInOutInfo'));
    }

    /**
     * @param $employeePunchLogs
     * @return array
     */
    private function employeePunchLogs($employeePunchLogs): array
    {
        $punchInOutInfo = [];

        foreach ($employeePunchLogs as $employeePunchLog) {
            $employeeId = $employeePunchLog->employee_id;

            $employee = Employee::find($employeeId);
            $employeeCode = $employee->employee_code;

            $date = Carbon::parse($employeePunchLog->date)->format('Y-m-d');

            $ipAddress = $employeePunchLog->ip_address;
            $workLogStatus = $employeePunchLog->work_log_status ?? null;
            $timeLogStatus = $employeePunchLog->time_log_status ?? null;
            $department = $employeePunchLog->department;
            $company = $employeePunchLog->company;


            $punches = json_decode($employeePunchLog->punch, true);

            usort($punches, function ($punchIn, $punchOut) {
                $punchInTime = strtotime(current($punchIn));
                $punchOutTime = strtotime(current($punchOut));
                return $punchInTime <=> $punchOutTime;
            });

            $firstPunchIn = null;
            $lastPunchOut = null;

            foreach ($punches as $punch) {
                if (isset($punch['punch_in'])) {
                    $firstPunchIn = $punch['punch_in'];
                } elseif (isset($punch['punch_out'])) {
                    $lastPunchOut = $punch['punch_out'];
                }
            }

            $firstLogIn = Carbon::parse($firstPunchIn)->format('H:i:s') ?? null;
            $lastPunchOut = Carbon::parse($lastPunchOut)->format('H:i:s') ?? null;

            $punchInOutInfo[] = [
                'date' => $date,
                'punchIn' => $firstLogIn,
                'punchOut' => $lastPunchOut,
                'ip_address' => $ipAddress,
                'work_log_status' => $workLogStatus,
                'time_log_status' => $timeLogStatus,
                'emp_code' => $employeeCode,
                'department' => $department,
                'company' => $company
            ];
        }

        return $punchInOutInfo;
    }

    /**
     * update the status of employee log
     *
     * @param Request $request
     * @return RedirectResponse|void
     */
    public function Status(Request $request)
    {
        $employeeTimeLog = EmployeeLogTime::where('date', $request->date)->where('department_id', $request->department_id)->where('company_id', $request->company_id)->first();
        if (isset($request->workLog)) {
            $employeeTimeLog->work_log_status = $request->status;
            $employeeTimeLog->save();
            return redirect()->route('employeeWorkLog');

        } elseif ($request->timeLog) {
            $employeeTimeLog->time_log_status = $request->status;
            $employeeTimeLog->save();
            return redirect()->route('timeLogs');
        }
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

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function timeOffStatus(Request $request): RedirectResponse
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
     * @return \Illuminate\Foundation\Application|View|Factory|Application
     */
    public function leaveRequest(): \Illuminate\Foundation\Application|View|Factory|Application
    {
        $companies = Company::where('user_id', Auth::id())->get();
        $leaveTypes = leave::all();
        $leaveRequests = LeaveRequest::all();
        return view('timeTracking.leave_request')->with(compact('companies', 'leaveTypes', 'leaveRequests'));
    }

    /**
     * @param $companyId
     * @return JsonResponse
     */
    public function leaveRequestDepartments($companyId): JsonResponse
    {
        $departments = [];
        $employees = Employee::where('company_id', $companyId)->where('user_id', Auth::id())->get();

        foreach ($employees as $employee) {
            $departments[] = $employee->department;
        }
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
     * @param Request $request
     * @return JsonResponse
     */
    public function fetchEmployeeCode(Request $request): JsonResponse
    {
        $employeeTimeLog = EmployeeLogTime::where('company_id', $request->company_id)->where('department_id', $request->department_id)->where('user_id', Auth::id())->first();
        $emmployeeId = $employeeTimeLog->employee_id;
        $employee = Employee::find($emmployeeId);
        return response()->json(['employee_code' => $employee->employee_code]);
    }

    /**
     * @return \Illuminate\Foundation\Application|View|Factory|Application
     */
    public function lateRequest(): \Illuminate\Foundation\Application|View|Factory|Application
    {
        $companies = Company::where('user_id', Auth::id())->get();
        $lateRequests = LateRequest::all();
        return view('timeTracking.late_request')->with(compact('companies', 'lateRequests'));
    }

    /**
     * @param $companyId
     * @return JsonResponse
     */
    public function lateRequestDepartments($companyId): JsonResponse
    {
        $departments = [];
        $employees = Employee::where('company_id', $companyId)->where('user_id', Auth::id())->get();

        foreach ($employees as $employee) {
            $departments[] = $employee->department;
        }
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


    public function leaveLateApproval()
    {
        $lateRequests = LateRequest::all();
        $leaveRequests = LeaveRequest::all();
    }
}
