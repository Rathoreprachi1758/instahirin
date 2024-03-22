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
                    <form action="{{ route('timeLogCompany') }}" method="POST">
                        @csrf
                        <label for="company">Select Company:</label>
                        <select id="company" name="company">
                            <option value="" selected disabled>Select Company</option>
                            @isset($companies)
                                @foreach($companies as $company)
                                    <option value="{{ $company->id }}">{{ $company->company_name }}</option>
                                @endforeach
                            @endisset
                        </select>
                        <label for="from">From:</label>
                        <input type="date" id="from" name="from">
                        <label for="to">To:</label>
                        <input type="date" id="to" name="to">

                        <label for="from">Select Emp Code:</label>
                        <input type="hidden" value="">
                        <select name="employee_code">
                            <option selected disabled>Choose Emp Code</option>
                            @isset($employees)
                                @foreach($employees as $employee)
                                    <option
                                        value="{{ $employee->id }}">{{ $employee->employee_code }}</option>
                                @endforeach
                            @endisset
                        </select>
                        <button class='btn btn-sm btn-dark' type="submit">Filter</button>
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
                                            <h6>Calendar</h6>
                                        </th>
                                        <th width="180">
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
                                        </th>
                                        <th>
                                            <h6>Total Hours</h6>
                                        </th>
                                        <th>
                                            <h6>Actions</h6>
                                        </th>
                                        <th>
                                            <h6>Punch History</h6>
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php($increamentId = 1)
                                    @isset($punchInOutInfo)
                                        @foreach($punchInOutInfo as $punchInOutData)
                                            <tr>
                                                <td>
                                                    <div class="tabletext">
                                                        <p>{{$increamentId}}</p>
                                                    </div>
                                                <td>
                                                    <div class="tabletext">
                                                        <p>{{ $punchInOutData['emp_code'] }}</p>
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
                                                            <td width="80" style="border-right: 1px solid #000;">
                                                                <div class="tabletext">
                                                                    <p>{{ $punchInOutData['punchIn'] }}</p>
                                                                </div>
                                                            </td>

                                                            <td width="50">
                                                                <div class="tabletext">
                                                                    <p>{{ $punchInOutData['punchOut'] }}</p>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                                <td>
                                                    <div class="tabletext">
                                                        <p>{{$punchInOutData['totalWorkHours']}}</p>
                                                    </div>
                                                </td>
                                                <td width="90">
                                                    <div class="tabletext">
                                                        <div class="statusFiled">
                                                            @if($punchInOutData['work_log_status'] === null)
                                                                <strong class="">Pending</strong>
                                                            @elseif($punchInOutData['work_log_status'] == 1)
                                                                <strong class="">Accept</strong>
                                                            @elseif($punchInOutData['work_log_status'] == 0)
                                                                <strong class="">Reject</strong>
                                                            @elseif($punchInOutData['work_log_status'] == 2)
                                                                <strong class="">Approved</strong>
                                                            @elseif($punchInOutData['work_log_status'] == 3)
                                                                <strong class="">Rejected</strong>
                                                            @endif
                                                            <div class="statusFieldInfo">
                                                                <div class="statusDrop">
                                                                <span><i class="fa fa-ellipsis-v"
                                                                         aria-hidden="true"></i></span>
                                                                    <div class="statusDropdown">
                                                                        <ul>
                                                                            <li>
                                                                                <form action="{{ route('status') }}"
                                                                                      method="post">
                                                                                    @csrf
                                                                                    <input type="hidden" value="2"
                                                                                           name="status">
                                                                                    <input type="hidden"
                                                                                           value="{{$punchInOutData['department']->id}}"
                                                                                           name="department_id">
                                                                                    <input type="hidden"
                                                                                           value="{{$punchInOutData['company']->id}}"
                                                                                           name="company_id">
                                                                                    <input type="hidden"
                                                                                           value="{{ $punchInOutData['date'] }}"
                                                                                           name="date">
                                                                                    <input type="submit" value="Approve"
                                                                                           name="timeLog">
                                                                                </form>
                                                                            </li>
                                                                            <li>
                                                                                <form action="{{ route('status') }}"
                                                                                      method="post">
                                                                                    @csrf
                                                                                    <input type="hidden" value="3"
                                                                                           name="status">
                                                                                    <input type="hidden"
                                                                                           value="{{$punchInOutData['department']->id}}"
                                                                                           name="department_id">
                                                                                    <input type="hidden"
                                                                                           value="{{$punchInOutData['company']->id}}"
                                                                                           name="company_id">
                                                                                    <input type="hidden"
                                                                                           value="{{ $punchInOutData['date'] }}"
                                                                                           name="date">
                                                                                    <input type="submit" value="Reject"
                                                                                           name="timeLog">
                                                                                </form>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                                            data-target="#exampleModal-{{$increamentId}}"
                                                            data-whatever="{{json_encode($punchInOutData['punchHistories'])}}">
                                                        View
                                                    </button>
                                                </td>
                                                <div class="modal fade" id="exampleModal-{{$increamentId}}"
                                                     tabindex="-1" role="dialog"
                                                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Punch
                                                                    History</h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                        aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                @isset($punchInOutData['punchHistories'])
                                                                    <ul class="list-group">
                                                                        @foreach($punchInOutData['punchHistories'] as $punchHistory)
                                                                            @isset($punchHistory['punch_in'])
                                                                                @if($punchHistory['punch_in'] !== null)
                                                                                    <li class="list-group-item">Punch In
                                                                                        At: {{ Carbon\Carbon::parse($punchHistory['punch_in'])->format('h:i A') }}</li>
                                                                                @endif
                                                                            @endisset
                                                                            @isset($punchHistory['punch_out'])
                                                                                @if($punchHistory['punch_out'] !== null)
                                                                                    <li class="list-group-item">Punch
                                                                                        Out
                                                                                        At: {{ Carbon\Carbon::parse($punchHistory['punch_out'])->format('h:i A') }}</li>
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
        </div>
    </div>
