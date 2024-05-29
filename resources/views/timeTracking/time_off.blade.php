<x-header data="offers component"/>
<link rel="stylesheet" href="{{ asset('css/css/Employer_activity_style.css') }}">
<link rel="stylesheet" href="{{ asset('css/css/Employer_activity_style.css') }}">


<style>
    .table-responsive{
        box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
        margin-top: 30px;
        border-radius:10px;
        position: relative;
        z-index: 0;
    }
    
    </style>
<div class="fr-section" style="margin-top: -72px">
    <div class="fr-section_detail">
        <div class="container-fluid">
            <div style="font-size:22px;font-weight:600;margin-bottom:3px;">Time Tracking</div>
            <div style="font-size:16px;font-weight:500;margin-bottom:15px"><b>Description:</b> To monitor the timekeeping records of employees within their respective companies.</div>
        <div class="dashboard_innerPages">
            <div class="custom_tabs_section">
                <div class="custom_tabs"></div>
                <br>
                <div class="tabletext">
                    <form action="{{ route('timeOffCompany') }}" method="POST">
                        @csrf
                        <label for="from" style="font-size: 14px;">Select Company:</label>
                        <select name="timeOffCompany">
                            <option selected disabled>Select Company</option>
                            @isset($companies)
                                @foreach($companies as $company)
                                    <option value="{{ $company->id }}">{{ $company->company_name }}</option>
                                @endforeach
                            @endisset
                        </select>
                        <label for="from" style="font-size: 14px;">Select Emp Code:</label>
                        <input type="hidden" value="">
                        <select name="employee_code">
                            <option selected disabled>Choose Emp Code</option>
                            @isset($employees)
                                @foreach($employees as $employee)
                                    <option value="{{ $employee->employee_code }}">{{ $employee->employee_code }}</option>
                                @endforeach
                            @endisset
                        </select>
                        <button class="btn-dark" type="submit"style="font-size: 14px;">Filter</button>
                    </form>

                </div>
                    <!-- End of 'from' and 'to' date inputs -->
                    <div class="custom_tabs_data" style="display: block" id="tab5">
                        <div class="row d-flex justify-content-center">
                        <div class="col-xl-12 col-sm-12 col-lg-12 col-md-12">
                            <div class="table-responsive">
                            <div class="activityTable_data">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>
                                            <h6>#</h6>
                                        </th>

                                        <th>
                                            <h6>Company Name</h6>
                                        </th>
                                        <th>
                                            <h6>Emp Code</h6>
                                        </th>
                                        <th>
                                            <h6>Celender</h6>
                                        </th>
                                        <th>
                                            <h6>Time Recorder</h6>
                                        </th>
                                        <th>
                                            <h6>Publish</h6>
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


                                        <tr>
                                            <td>1
                                            </td>
                                            <td class="text-center">Bizionic Tech
                                            </td>
                                            <td class="text-center">012
                                            </td>
                                            <td class="text-center">01/10/2023</td>
                                            <td class="text-center">00:00

                                            </td>
                                            <td class="text-center">yes</td>
                                            <td class="text-center"><span style="color:rgb(23, 239, 23)">Approved</span></td>
                                           
                                        </tr>


                                       



                                        <tr>
                                            <td>1
                                            </td>
                                            <td class="text-center">Bizionic Tech
                                            </td>
                                            <td class="text-center">012
                                            </td>
                                            <td class="text-center">01/10/2023</td>
                                            <td class="text-center">00:00

                                            </td>
                                            <td class="text-center">yes</td>
                                            <td class="text-center"><span style="color:rgb(23, 239, 23)">Approved</span></td>
                                           
                                        </tr>



                                        <tr>
                                            <td>1
                                            </td>
                                            <td class="text-center">Bizionic Tech
                                            </td>
                                            <td class="text-center">012
                                            </td>
                                            <td class="text-center">01/10/2023</td>
                                            <td class="text-center">00:00

                                            </td>
                                            <td class="text-center">yes</td>
                                            <td class="text-center"><span style="color:rgb(23, 239, 23)">Approved</span></td>
                                           
                                        </tr>


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
     
    </div>
    </div>

