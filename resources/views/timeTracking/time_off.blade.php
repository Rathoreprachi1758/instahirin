<x-header data="offers component"/>
<link rel="stylesheet" href="{{ asset('css/css/Employer_activity_style.css') }}">
<link rel="stylesheet" href="{{ asset('css/css/Employer_activity_style.css') }}">
<div class="fr-section" style="margin-top: -72px">
    <div class="fr-section_detail">
        <div class="dashboard_innerPages">
            <div class="custom_tabs_section">
                <div class="custom_tabs">
                </div>
                <br>
                <div class="tabletext">
                    <form action="{{ route('timeOffCompany') }}" method="POST">
                        @csrf
                        <label for="from">Select Company:</label>
                        <select name="timeOffCompany">
                            <option selected disabled>Select Company</option>
                            @isset($companies)
                                @foreach($companies as $company)
                                    <option value="{{ $company->id }}">{{ $company->company_name }}</option>
                                @endforeach
                            @endisset
                        </select>
                        <label for="from">Select Emp Code:</label>
                        <input type="hidden" value="">
                        <select name="employee_code">
                            <option selected disabled>Choose Emp Code</option>
                            @isset($employees)
                                @foreach($employees as $employee)
                                    <option value="{{ $employee->employee_code }}">{{ $employee->employee_code }}</option>
                                @endforeach
                            @endisset
                        </select>
                        <button class="btn-dark" type="submit">Filter</button>
                    </form>
                    <!-- End of 'from' and 'to' date inputs -->
                    <div class="custom_tabs_data" style="display: block" id="tab5">
                        <div class="col-xxl-9 col-xl-11 col-lg-11 col-md-12">
                            <div class="activityTable_data">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>
                                            <h6>#</h6>
                                        </th>
                                        <th>
                                            <h6>Emp Code</h6>
                                        </th>
                                        <th>
                                            <h6>From</h6>
                                        </th>
                                        <th>
                                            <h6>To</h6>
                                        </th>
                                        <th>
                                            <h6>No of Days</h6>
                                        </th>
{{--                                        <th>--}}
{{--                                            <h6>Publish</h6>--}}
{{--                                        </th>--}}
                                        <th>
                                            <h6>Status</h6>
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php($increamentId = 1)
                                    @isset($employeeLeaveRequests)
                                        @foreach($employeeLeaveRequests as $employeeLeaveRequest)
                                            <tr>
                                                <td>
                                                    <div class="tabletext">
                                                        <p>{{$increamentId}}</p>
                                                    </div>
                                                <td>
                                                    <div class="tabletext">
                                                        <p>{{ $employeeLeaveRequest['employee_code'] }}</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="tabletext">
                                                        <p>{{ $employeeLeaveRequest['start_date'] }}</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="tabletext">
                                                        <p>{{ $employeeLeaveRequest['end_date'] }}</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="tabletext">
                                                        <p>{{ $employeeLeaveRequest['leave_days'] }}</p>
                                                    </div>
                                                </td>
{{--                                                <td width="90">--}}
{{--                                                    <div class="tabletext">--}}
{{--                                                        <div class="statusFieldInfo">--}}
{{--                                                            <div class="statusDrop">--}}
{{--                                                                <div class="tabletext">--}}
{{--                                                                    <div class="statusFiled">--}}
{{--                                                                        <span><i--}}
{{--                                                                                class="fa fa-ellipsis-v"--}}
{{--                                                                                aria-hidden="true"></i></span>--}}
{{--                                                                        <div class="statusDropdown">--}}
{{--                                                                            <ul>--}}
{{--                                                                                <li>--}}
{{--                                                                                    <form--}}
{{--                                                                                        action="{{ route('timeOffStatus') }}"--}}
{{--                                                                                        method="post">--}}
{{--                                                                                        @csrf--}}
{{--                                                                                        <input type="hidden" value="1"--}}
{{--                                                                                               name="employee_status">--}}
{{--                                                                                        <input type="hidden"--}}
{{--                                                                                               value="{{ $employeeLeaveRequest['id'] }}"--}}
{{--                                                                                               name="id">--}}
{{--                                                                                        <input type="submit"--}}
{{--                                                                                               value="Accept"--}}
{{--                                                                                               name="button">--}}
{{--                                                                                    </form>--}}
{{--                                                                                </li>--}}
{{--                                                                                <li>--}}
{{--                                                                                    <form--}}
{{--                                                                                        action="{{ route('timeOffStatus') }}"--}}
{{--                                                                                        method="post">--}}
{{--                                                                                        @csrf--}}
{{--                                                                                        <input type="hidden" value="0"--}}
{{--                                                                                               name="employee_status">--}}
{{--                                                                                        <input type="hidden"--}}
{{--                                                                                               value="{{  $employeeLeaveRequest['id'] }}"--}}
{{--                                                                                               name="id">--}}
{{--                                                                                        <input type="submit"--}}
{{--                                                                                               value="Reject"--}}
{{--                                                                                               name="button">--}}
{{--                                                                                    </form>--}}
{{--                                                                                </li>--}}
{{--                                                                            </ul>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </td>--}}
                                                <td>
                                                    <div class="tabletext">
                                                        <div class="statusFiled">
                                                            @if($employeeLeaveRequest['leave_status'] === null)
                                                                <strong class="">Pending</strong>
                                                            @elseif($employeeLeaveRequest['leave_status'] == true)
                                                                <strong class="">Approved</strong>
                                                            @elseif($employeeLeaveRequest['leave_status'] == false)
                                                                <strong class="">Rejected</strong>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </td>
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
        </div>
    </div>
