<x-header data="offers component" />
<link rel="stylesheet" href="{{ asset('css/css/Employer_activity_style.css') }}">
<link rel="stylesheet" href="{{ asset('css/css/Employer_activity_style.css') }}">


<style>
    .nav-tabs {
        border-bottom: none !important;
    }



    .track-form {
        border: 1px solid #ebeaea;
        padding: 25px;
        background-color: #Fff !important;
        border-radius: 4px;
    }



    .submit_from_bg_color {
        background-color: #343A40 !important;
        color: #Fff !important;
    }

    .submit_from_bg_color:hover {
        color: #fff !important;
    }



    /* .form-control:focus {
  box-shadow: none !important;
  outline: none !important;
} */



    .nav-tabs .nav-item.show .nav-link,
    .nav-tabs .nav-link.active {
        color: #007bff !important;
        border: none !important;
        background-color: transparent !important;
        border: 1px solid #ebeaea !important;
        border-color: none !important;
        padding: 10px !important;
    }

    .nav-tabs .nav-item.show .nav-link,
    .nav-tabs .nav-link {
        padding: 0 15px !important;
        font-weight: 500 !important;
        font-size: 15px !important;
        color: #555 !important;
    }

    .nav-pills .nav-link.active,
    .nav-pills .show>.nav-link {
        color: #007bff !important;
        background-color: transparent !important;
        border-bottom: 3px solid #007bff !important;
        border-radius: 0px !important;
        font-size: 15px !important;
    }

    .nav-pills .nav-link {
        color: #555 !important;
        font-size: 15px !important;
    }



    .tracking-table li {
        list-style: none;
    }

    .tracking-table {
        position: relative;
    }

    .tracking-table .dropdown:hover .dropdown-menu {
        display: block;
        max-width: 100px !important;
        position: absolute;
        left: 0;
        top: 100%;
    }



    /* .tracking-table .dropdown-menu {
        --bs-dropdown-min-width: 2rem !important;
        --bs-border-radius: 0 !important;
        padding: 0 !important;
        text-align: start
    } */

    .table> :not(:last-child)> :last-child>* {
        border-bottom-color: #dee2e6 !important;
    }

    .tracking-table .dropdown-menu .dropdown-item:hover {
        background-color: #eff5f9 !important;
        color: #000 !important;
    }

    .dropdown-menu {
        min-width: auto !important;
        border-radius: 0 !important;
        padding: 0 !important;
        border: 1px solid #dee2e6 !important;
    }

    .dropdown-item {
        padding: 5px 15px !important;
    }


    .tracking-table .dropdown-menu .dropdown-item:first-child {
        background-color: #000 !important;
        color: #fff !important;
    }

    .table-responsive {
        overflow-x: inherit !important;
    }

    @media (max-width:480px) {
        .table-responsive {
            overflow-x: auto !important;
        }
    }

    .tracking-table thead td {
        background-color: #eff5f9 !important;
    }


    .tracking-table tbody td:nth-child(1) {
        background-color: #eff5f9 !important;
    }

    .tracking-table tbody td:nth-child(2) {
        background-color: #eff5f9 !important;
    }
</style>
<div class="fr-section" style="margin-top: -72px">


    <div class="fr-section_detail">

        <div class="container-fluid">
            <div style="font-size:22px;font-weight:600;margin-bottom:3px;">Time Tracking</div>
            <div style="font-size:16px;font-weight:500;margin-bottom:15px"><b>Description:</b> To monitor the
                timekeeping
                records of employees within their respective companies.</div>
            <div class="dashboard_innerPages">
                <div class="custom_tabs_section">
                    <br>
                    <div class="container">
                        <div class="row">
                            @if (auth()->user()->roles != 'company')
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <button class="nav-link active leave_button_bg" id="nav-home-tab"
                                        data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab"
                                        aria-controls="nav-home">Post
                                        Leave Request
                                    </button>
                                    <button class="nav-link leave_button_bg2" id="nav-profile-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-profile" type="button" role="tab"
                                        aria-controls="nav-profile">
                                        My
                                        Request
                                    </button>
                                </div>
                                {{-- </nav> --}}

                                <div>
                                    <div style="font-size:16px;font-weight:600;margin-bottom:25px;margin-top:20px;">
                                        EMPLOYEE
                                        LEAVE REQUEST FORM</div>
                                </div>
                            @endif


                            <div class="tab-content" id="nav-tabContent">
                                @if (auth()->user()->roles != 'company')
                                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                        aria-labelledby="nav-home-tab" tabindex="0">

                                        <form class="row g-3 track-form" action="{{ route('leaveRequestSubmit') }}"
                                            method="post">
                                            @csrf
                                            <div class="col-md-6">
                                                <label for="inputName" class="form-label"
                                                    style="font-size: 14px;">Company
                                                    Name</label>
                                                <select id="companyName" name="company" class="form-select"
                                                    class="form-control" style="height: 50px;"
                                                    onchange="fetchDepartments()">

                                                    <option selected>Select Name</option>

                                                    @foreach ($companies as $company)
                                                        <option value="{{ $company->id }}">{{ $company->company_name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>



                                            <div class="col-md-6">
                                                <label for="inputDepartment" class="form-label"
                                                    style="font-size: 14px;">Department</label>
                                                <select id="inputDepartment" name="department" class="form-select"
                                                    style="height: 50px;">
                                                    <option selected>Select Dept</option>
                                                    @isset($departments)
                                                        @foreach ($departments as $department)
                                                            <option value="{{ $department->id }}">
                                                                {{ $department->department_name }}</option>
                                                        @endforeach
                                                    @endisset
                                                </select>
                                            </div>
                                            <div class="col-6">
                                                <label for="inputCode" class="form-label"
                                                    style="font-size: 14px;">Employee
                                                    Code</label>
                                                <input type="text" name="emp_code" class="form-control"
                                                    id="inputCode"
                                                    style="height: 50px; background-color:#fff !important;"
                                                    placeholder="000" readonly>
                                            </div>






                                            <div class="col-md-6">
                                                <label for="inputType" class="form-label" style="font-size: 14px;">Leave
                                                    Type</label>
                                                <select id="inputType" name="leaveId" class="form-select"
                                                    style="height: 50px;">
                                                    <option selected>Choose...</option>
                                                    @foreach ($leaveTypes as $leaveType)
                                                        <option value="{{ $leaveType->id }}">
                                                            {{ $leaveType->leave_name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>


                                            {{-- <div class="col-md-6">
                                               
                                             <label for="birthday">Start Date(from)</label>
                                             
                                             <div id="inputType" name="leaveId" class="form-select">
                                                <option selected>Choose...</option>
                                                <input type="date"/>
                                                @foreach ($leaveTypes as $leaveType)
                                                    <option
                                                        value="{{$leaveType->id}}">{{$leaveType->leave_name}}</option>
                                                @endforeach
                                                    </div>
                                            </div> --}}

                                            <div class="col-md-6">
                                                <label for="inputDays" class="form-label" style="font-size: 14px;">Start
                                                    Date(From)</label>
                                                <div>
                                                    <input type="date" name="leaveDays" class="form-control"
                                                        style="height: 50px;" />
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <label for="inputDays" class="form-label" style="font-size: 14px;">End
                                                    Date
                                                    (To)</label>
                                                <div>
                                                    <input type="date" name="leaveDays" class="form-control"
                                                        style="height: 50px;" />
                                                </div>
                                            </div>




                                            {{-- <div class="col-md-6">
                                            <div class="col-12">
                                                <label for="birthday">Start Date(from)</label>
                                            </div>
                                            <input type="date" id="from" name="From" onchange="calculateDays()">
                                        </div>
                                        <div class="col-md-6">
                                            <div class="col-12">
                                                <label for="birthday">End Date(to)</label>
                                            </div>
                                            <input type="date" id="to" name="To" onchange="calculateDays()">
                                        </div> --}}
                                            <div class="col-md-12">
                                                <label for="inputEmail" class="form-label"
                                                    style="font-size: 14px;">Reason
                                                    For Leave</label>
                                                <div class="form-floating">
                                                    <textarea class="form-control" placeholder="Type" name="reason" style="height: 130px;" id="floatingTextarea"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="inputDays" class="form-label"
                                                    style="font-size: 14px;">Total
                                                    Number Of Days</label>
                                                <input type="number" name="leaveDays" class="form-control"
                                                    id="inputDays"
                                                    style="height: 50px;background-color:#Fff !important;"
                                                    oninput="updateLeaveBalance()" readonly>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="inputBalance" class="form-label"
                                                    style="font-size: 14px;">Balance Leave</label>
                                                <input type="number" value="11" name="leaveBalance"
                                                    class="form-control"
                                                    style="height: 50px;background-color:#Fff !important;"
                                                    id="inputBalance" readonly>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="inputEmail" class="form-label"
                                                    style="font-size: 14px;">Contact Email During
                                                    Leave</label>
                                                <input type="email" name="email" class="form-control"
                                                    id="inputEmail" style="height: 50px;" />
                                            </div>
                                            <div class="col-md-6">

                                                <label for="exampleFormControlTextarea1" class="form-label"
                                                    style="font-size: 14px;">Contact Number During
                                                    Leave</label>
                                                <div class="input-group">
                                                    <select class="form-select small-select" name="country_code"
                                                        id="countryCode" style="height: 50px;">
                                                        <option selected>Choose...</option>
                                                        @foreach ($countries as $country)
                                                            <option value="{{ $country->phone }}">
                                                                {{ $country->phone }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    <input type="number" name="phone" class="form-control"
                                                        style="height: 50px;" id="inputNumber"
                                                        placeholder="1234567890">
                                                </div>

                                                <label for="inputNumber" class="form-label"></label>

                                            </div>
                                            <div class="col-12">
                                                <button type="submit" class="btn submit_from_bg_color"
                                                    style="padding: 12px 30px;">Submit</button>
                                            </div>
                                        </form>

                                    </div>


                                    <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                        aria-labelledby="nav-profile-tab" tabindex="0">
                                @endif
                                <div class="custom_tabs_data" style="display: block" id="tab5">
                                    <form action="{{ route('leaveRequestFilter') }}" method="post">
                                        @csrf
                                        <label for="company" style="font-size: 14px;">Select Company:</label>
                                        <select id="company" name="company">
                                            <option value="" selected disabled>Select Company</option>
                                            @isset($companies)
                                                @foreach ($companies as $company)
                                                    <option value="{{ $company->id }}">{{ $company->company_name }}
                                                    </option>
                                                @endforeach
                                            @endisset
                                        </select>
                                        <label for="from" style="font-size: 14px;">From:</label>
                                        <input type="date" id="from" name="from">
                                        <label for="to" style="font-size: 14px;">To:</label>
                                        <input type="date" id="to" name="to">
                                        <select name="employee_code">
                                            <option selected disabled>Choose Emp Code</option>
                                            @isset($employees)
                                                @foreach ($employees as $employee)
                                                    <option value="{{ $employee->employee_code }}">
                                                        {{ $employee->employee_code }}</option>
                                                @endforeach
                                            @endisset
                                        </select>
                                        <button class="btn-dark" type="submit"
                                            style="font-size: 14px;background-color:#343A40;">Filter</button>
                                    </form>

                                    {{-- here_start --}}


                                    <div class="custom_tabs_data" style="display: block" id="tab5">
                                        <div class="row d-flex justify-content-center">
                                            <div class="col-xl-12 col-sm-12 col-lg-12 col-md-12 mt-3">
                                                <div class="table-responsive">
                                                    <div class="activityTable_data">



                                                        <table class="table table-bordered text-center tracking-table">

                                                            <thead>
                                                                <tr>
                                                                    <td colspan="5"></td>
                                                                    <td colspan="2">
                                                                        Time Recorder
                                                                    </td>
                                                                    <td colspan="3"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        #
                                                                    </td>
                                                                    <td>
                                                                        Company
                                                                    </td>
                                                                    <td>
                                                                        Department
                                                                    </td>
                                                                    <td>
                                                                        Emp Code
                                                                    </td>
                                                                    {{-- <th width="180">
                                                                    <h6>Time Recorder</h6>
                                                                    <hr style="border: 1px">
                                                                    <table>
                                                                        <thead>
                                                                        <th width="60">
                                                                            <h6>Punch In</h6>
                                                                        </th>
                                                                        <th width="60">
                                                                            <h6>Punch Out</h6>
                                                                        </th>
                                                                        </thead>
                                                                    </table>
                                                                </th> --}}
                                                                    <td>
                                                                        Calendar
                                                                    </td>
                                                                    <td>
                                                                        Time In
                                                                    </td>
                                                                    <td>
                                                                        Time Out
                                                                    </td>

                                                                    <td>
                                                                        Total Hours
                                                                    </td>
                                                                    <td>
                                                                        Ip Address
                                                                    </td>
                                                                    <td>
                                                                        Action
                                                                    </td>
                                                                </tr>
                                                            </thead>


                                                            <tbody>
                                                                <tr>
                                                                    <td>1
                                                                    </td>
                                                                    <td class="text-center">Bizionic Tech
                                                                    </td>
                                                                    <td class="text-center">Marketing</td>
                                                                    <td class="text-center">014</td>
                                                                    <td class="text-center">01/12/2023</td>
                                                                    <td class="text-center">11:00</td>
                                                                    <td class="text-center">19:00</td>
                                                                    <td class="text-center">07:00 Hrs</td>
                                                                    <td class="text-center">192.172.100.1</td>
                                                                    <td class="text-center"><span
                                                                            style="color:rgb(23, 239, 23)">Accept</span>
                                                                    </td>
                                                                </tr>


                                                                <tr>
                                                                    <td>1
                                                                    </td>
                                                                    <td class="text-center">Bizionic Tech
                                                                    </td>
                                                                    <td class="text-center">Marketing</td>
                                                                    <td class="text-center">014</td>
                                                                    <td class="text-center">01/12/2023</td>
                                                                    <td class="text-center">11:00</td>
                                                                    <td class="text-center">19:00</td>
                                                                    <td class="text-center">07:00 Hrs</td>
                                                                    <td class="text-center">192.172.100.1</td>
                                                                    <td class="text-center"><span
                                                                            style="color:rgb(250, 86, 86)">Reject</span>
                                                                    </td>
                                                                </tr>


                                                                <tr>
                                                                    <td>1
                                                                    </td>
                                                                    <td class="text-center">Bizionic Tech
                                                                    </td>
                                                                    <td class="text-center">Marketing</td>
                                                                    <td class="text-center">014</td>
                                                                    <td class="text-center">01/12/2023</td>
                                                                    <td class="text-center">11:00</td>
                                                                    <td class="text-center">19:00</td>
                                                                    <td class="text-center">07:00 Hrs</td>
                                                                    <td class="text-center">192.172.100.1</td>
                                                                    <td class="text-center"><span
                                                                            style="color:rgb(250, 86, 86)">Reject</span>

                                                                    </td>
                                                                </tr>



                                                            </tbody>
                                                            @php($increamentId = 1)
                                                            @isset($punchInOutInfo)
                                                                @foreach ($punchInOutInfo as $punchInOutData)
                                                                    <tr>
                                                                        <td>
                                                                            <div class="tabletext">
                                                                                <p>{{ $increamentId }}</p>
                                                                            </div>
                                                                        <td>
                                                                            <div class="tabletext">
                                                                                <p>{{ $punchInOutData['company']->company_name }}
                                                                                </p>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="tabletext">
                                                                                <p>{{ $punchInOutData['department']->department_name }}
                                                                                </p>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="tabletext">
                                                                                <p>{{ $punchInOutData['date'] }}</p>
                                                                            </div>
                                                                        </td>
                                                                        <td width="180">
                                                                            <table>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td width="80"
                                                                                            style="border-right: 1px solid #000;">
                                                                                            <div class="tabletext">
                                                                                                <p>{{ $punchInOutData['punchIn'] }}
                                                                                                </p>
                                                                                            </div>
                                                                                        </td>

                                                                                        <td width="50">
                                                                                            <div class="tabletext">
                                                                                                <p>{{ $punchInOutData['punchOut'] }}
                                                                                                </p>
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </td>
                                                                        {{--                                                <td> --}}
                                                                        {{--                                                    <div class="tabletext"> --}}
                                                                        {{--                                                        <p>punchIn - {{ $punchInOutData['punchIn'] }}</p> --}}
                                                                        {{--                                                        <p>punchOut - {{ $punchInOutData['punchOut'] }}</p> --}}
                                                                        {{--                                                    </div> --}}
                                                                        {{--                                                </td> --}}
                                                                        <td>
                                                                            <div class="tabletext">
                                                                                <p>{{ $punchInOutData['totalWorkHours'] }}
                                                                                </p>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="tabletext">
                                                                                <p>{{ $punchInOutData['ip_address'] }}</p>
                                                                            </div>
                                                                        </td>
                                                                        <td width="90">
                                                                            <div class="tabletext">
                                                                                <div class="statusFiled">
                                                                                    @if ($punchInOutData['work_log_status'] === null)
                                                                                        <strong
                                                                                            class="">Pending</strong>
                                                                                    @elseif($punchInOutData['work_log_status'] == 1)
                                                                                        <strong
                                                                                            class="">Accept</strong>
                                                                                    @elseif($punchInOutData['work_log_status'] == 0)
                                                                                        <strong
                                                                                            class="">Reject</strong>
                                                                                    @elseif($punchInOutData['work_log_status'] == 2)
                                                                                        <strong
                                                                                            class="">Approved</strong>
                                                                                    @elseif($punchInOutData['work_log_status'] == 3)
                                                                                        <strong
                                                                                            class="">Rejected</strong>
                                                                                    @endif
                                                                                    <div class="statusFieldInfo">
                                                                                        @if ($punchInOutData['work_log_status'] === null)
                                                                                            <div class="statusDrop">
                                                                                                <span><i class="fa fa-ellipsis-v"
                                                                                                        aria-hidden="true"></i></span>
                                                                                                <div
                                                                                                    class="statusDropdown">
                                                                                                    <ul>
                                                                                                        <li>
                                                                                                            <form
                                                                                                                action="{{ route('status') }}"
                                                                                                                method="post">
                                                                                                                @csrf
                                                                                                                <input
                                                                                                                    type="hidden"
                                                                                                                    value="1"
                                                                                                                    name="status">
                                                                                                                <input
                                                                                                                    type="hidden"
                                                                                                                    value="{{ $punchInOutData['department']->id }}"
                                                                                                                    name="department_id">
                                                                                                                <input
                                                                                                                    type="hidden"
                                                                                                                    value="{{ $punchInOutData['company']->id }}"
                                                                                                                    name="company_id">
                                                                                                                <input
                                                                                                                    type="hidden"
                                                                                                                    value="{{ $punchInOutData['date'] }}"
                                                                                                                    name="date">
                                                                                                                <input
                                                                                                                    type="submit"
                                                                                                                    value="Accept"
                                                                                                                    name="workLog">
                                                                                                            </form>
                                                                                                        </li>
                                                                                                        <li>
                                                                                                            <form
                                                                                                                action="{{ route('status') }}"
                                                                                                                method="post">
                                                                                                                @csrf
                                                                                                                <input
                                                                                                                    type="hidden"
                                                                                                                    value="0"
                                                                                                                    name="status">
                                                                                                                <input
                                                                                                                    type="hidden"
                                                                                                                    value="{{ $punchInOutData['department']->id }}"
                                                                                                                    name="department_id">
                                                                                                                <input
                                                                                                                    type="hidden"
                                                                                                                    value="{{ $punchInOutData['company']->id }}"
                                                                                                                    name="company_id">
                                                                                                                <input
                                                                                                                    type="hidden"
                                                                                                                    value="{{ $punchInOutData['date'] }}"
                                                                                                                    name="date">
                                                                                                                <input
                                                                                                                    type="submit"
                                                                                                                    value="Reject"
                                                                                                                    name="workLog">
                                                                                                            </form>
                                                                                                        </li>
                                                                                                    </ul>
                                                                                                </div>
                                                                                            </div>
                                                                                        @endif
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        <td>
                                                                            <button type="button" class="btn btn-primary"
                                                                                data-toggle="modal"
                                                                                data-target="#exampleModal-{{ $increamentId }}"
                                                                                data-whatever="@isset($punchInOutData['punchHistories']){{ json_encode($punchInOutData['punchHistories']) }}@endisset">
                                                                                View
                                                                            </button>
                                                                        </td>
                                                                        <div class="modal fade"
                                                                            id="exampleModal-{{ $increamentId }}"
                                                                            tabindex="-1" role="dialog"
                                                                            aria-labelledby="exampleModalLabel"
                                                                            aria-hidden="true">
                                                                            <div class="modal-dialog" role="document">
                                                                                <div class="modal-content">
                                                                                    <div class="modal-header">
                                                                                        <h5 class="modal-title"
                                                                                            id="exampleModalLabel">Punch
                                                                                            History</h5>
                                                                                        <button type="button"
                                                                                            class="close"
                                                                                            data-dismiss="modal"
                                                                                            aria-label="Close">
                                                                                            <span
                                                                                                aria-hidden="true">&times;</span>
                                                                                        </button>
                                                                                    </div>
                                                                                    <div class="modal-body">
                                                                                        @isset($punchInOutData['punchHistories'])
                                                                                            <ul class="list-group">
                                                                                                @foreach ($punchInOutData['punchHistories'] as $punchHistory)
                                                                                                    @isset($punchHistory['punch_in'])
                                                                                                        @if ($punchHistory['punch_in'] !== null)
                                                                                                            <li
                                                                                                                class="list-group-item">
                                                                                                                Punch In
                                                                                                                At:
                                                                                                                {{ Carbon\Carbon::parse($punchHistory['punch_in'])->format('h:i A') }}
                                                                                                            </li>
                                                                                                        @endif
                                                                                                    @endisset
                                                                                                    @isset($punchHistory['punch_out'])
                                                                                                        @if ($punchHistory['punch_out'] !== null)
                                                                                                            <li
                                                                                                                class="list-group-item">
                                                                                                                Punch
                                                                                                                Out
                                                                                                                At:
                                                                                                                {{ Carbon\Carbon::parse($punchHistory['punch_out'])->format('h:i A') }}
                                                                                                            </li>
                                                                                                        @endif
                                                                                                    @endisset
                                                                                                @endforeach
                                                                                            </ul>
                                                                                        @endisset
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </tr>
                                                                    @php($increamentId++)
                                                                @endforeach
                                                            @endisset
                                                            </tbody>
                                                        </table>

                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- here_end --}}
                                </div>
                            </div>

                        </div>



                    </div>
                </div>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
                    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
                </script>
                <script>
                    function fetchDepartments() {
                        var companyId = document.getElementById('companyName').value;
                        var departmentSelect = document.getElementById('inputDepartment');

                        // Clear previous options
                        departmentSelect.innerHTML = '<option selected>Choose...</option>';

                        // Fetch departments based on selected company
                        fetch('/leaveRequestDepartments/' + companyId, {
                                method: 'GET',
                                headers: {
                                    'Content-Type': 'application/json'
                                }
                            })
                            .then(response => response.json())
                            .then(data => {
                                data.forEach(function(department) {
                                    var option = document.createElement('option');
                                    option.value = department.id;
                                    option.textContent = department.department_name;
                                    departmentSelect.appendChild(option);
                                });
                            })
                            .catch(error => console.error('Error fetching departments:', error));
                    }
                </script>
                <script>
                    var initialBalance;

                    window.onload = function() {
                        var balanceInput = document.getElementById('inputBalance');
                        initialBalance = parseInt(balanceInput.value);
                    };

                    function updateLeaveBalance() {
                        var totalDaysInput = document.getElementById('inputDays');
                        var balanceInput = document.getElementById('inputBalance');
                        var totalDays = parseInt(totalDaysInput.value);
                        if (!isNaN(totalDays)) {
                            var newBalance = initialBalance - totalDays;
                            if (newBalance >= 0) {
                                balanceInput.value = newBalance;
                            } else {
                                alert("Total days cannot exceed balance leave");
                                totalDaysInput.value = "";
                                balanceInput.value = initialBalance;
                            }
                        } else {
                            balanceInput.value = initialBalance;
                        }
                    }

                    function calculateDays() {
                        var fromDate = document.getElementById('from').value;
                        var toDate = document.getElementById('to').value;

                        if (fromDate && toDate) {
                            var from = new Date(fromDate);
                            var to = new Date(toDate);
                            var differenceInTime = to.getTime() - from.getTime();
                            var differenceInDays = differenceInTime / (1000 * 3600 * 24);

                            if (differenceInDays < 0) {
                                alert("End date must be greater than or equal to Start date");
                                document.getElementById('to').value = '';
                            } else {
                                document.getElementById('inputDays').value = differenceInDays +
                                    1; // Add 1 to include both start and end dates
                                updateLeaveBalance(); // Update leave balance after calculating days
                            }
                        }
                    }
                </script>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                <script>
                    // Function to fetch employee code based on selected company and department
                    function fetchEmployeeCode() {
                        var companyId = document.getElementById('companyName').value;
                        var departmentId = document.getElementById('inputDepartment').value;

                        // Make AJAX request to fetch employee code
                        $.ajax({
                            url: '/fetch-employee-code',
                            type: 'POST',
                            data: {
                                company_id: companyId,
                                department_id: departmentId,
                                _token: "{{ csrf_token() }}"
                            },
                            success: function(response) {
                                // Update employee code input field with received value
                                $('#inputCode').val(response.employee_code);
                            },
                            error: function(xhr, status, error) {
                                console.error(xhr.responseText);
                            }
                        });
                    }
                    $('#inputDepartment').change(fetchEmployeeCode);
                </script>
            </div>
        </div>

    </div>
</div>
</div>
