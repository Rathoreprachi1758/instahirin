@php use Carbon\Carbon; @endphp
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
                <div class="container">
                    <div class="row mt-5">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-home"
                                        type="button" role="tab" aria-controls="nav-home" aria-selected="true">
                                    Leave Request
                                </button>
                                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-profile"
                                        type="button" role="tab" aria-controls="nav-profile" aria-selected="false">
                                    Late Request
                                </button>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                 aria-labelledby="nav-home-tab"
                                 tabindex="0">
                                <div class="custom_tabs_data" style="display: block" id="tab5">
                                    <form action="{{ route('leaveRequestApprovalFilter') }}" method="post">
                                        @csrf
                                        <label for="company">Select Company:</label>
                                        <select id="company" name="company">
                                            <option value="" selected disabled>Select Company</option>
                                            @isset($companies)
                                                @foreach($companies as $company)
                                                    <option
                                                        value="{{ $company->id }}">{{ $company->company_name }}</option>
                                                @endforeach
                                            @endisset
                                        </select>
                                        <label for="from">From:</label>
                                        <input type="date" id="from" name="from">
                                        <label for="to">To:</label>
                                        <input type="date" id="to" name="to">
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
                                    <div class="col-xxl-9 col-xl-11 col-lg-11 col-md-12">
                                        <div class="activityTable_data">
                                            <table class="table table-striped">
                                                <thead>
                                                <tr>
                                                    <th>
                                                        <h6>#</h6>
                                                    </th>
                                                    <th>
                                                        <h6>Company</h6>
                                                    </th>
                                                    <th>
                                                        <h6>Department</h6>
                                                    </th>
                                                    <th>
                                                        <h6>Emp Code</h6>
                                                    </th>
                                                    <th>
                                                        <h6>Leave Type</h6>
                                                    </th>
                                                    <th>
                                                        <h6>Leave Periods</h6>
                                                    </th>
                                                    <th>
                                                        <h6>No of Days</h6>
                                                    </th>
                                                    <th>
                                                        <h6>Leave Balance</h6>
                                                    </th>
                                                    <th>
                                                        <h6>Alternate Details</h6>
                                                    </th>
                                                    <th>
                                                        <h6>Reason for leave</h6>
                                                    </th>
                                                    <th>
                                                        <h6>Actions</h6>
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @php($increamentId = 1)
                                                @isset($leaveRequests)
                                                    @foreach($leaveRequests as $leaveRequest)
                                                        <tr>
                                                            <td>
                                                                <div class="tabletext">
                                                                    <p>{{$increamentId}}</p>
                                                                </div>
                                                            <td>
                                                                <div class="tabletext">
                                                                    <p>{{ $leaveRequest->company->company_name }}</p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="tabletext">
                                                                    <p>{{ $leaveRequest->department->name }}</p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="tabletext">
                                                                    <p>{{ $leaveRequest->employee_code }}</p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="tabletext">
                                                                    <p>{{ $leaveRequest->leave_type }}</p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="tabletext">
                                                                    <p>start date:-{{ $leaveRequest->start_date }}</p>
                                                                </div>
                                                                <div class="tabletext">
                                                                    <p>End date:-{{ $leaveRequest->end_date }}</p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="tabletext">
                                                                    <p>{{ $leaveRequest->leave_days }}</p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="tabletext">
                                                                    <p>{{ $leaveRequest->leave_balance }}</p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="tabletext">
                                                                    <p>Email:- {{ $leaveRequest->email }}</p>
                                                                </div>
                                                                <div class="tabletext">
                                                                    <p>Phone:- {{ $leaveRequest->phone }}</p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="tabletext">
                                                                    <p>{{ $leaveRequest->leave_reason }}</p>
                                                                </div>
                                                            </td>
                                                            <td width="90">
                                                                <div class="tabletext">
                                                                    <div class="statusFiled">
                                                                        @if($leaveRequest['leave_status'] === null)
                                                                            <strong class="">Pending</strong>
                                                                        @elseif($leaveRequest['leave_status'] == true)
                                                                            <strong class="">Approved</strong>
                                                                        @elseif($leaveRequest['leave_status'] == false)
                                                                            <strong class="">Rejected</strong>
                                                                        @endif
                                                                        <div class="statusFieldInfo">
                                                                            <div class="statusDrop">
                                                                                @if(auth()->user()->roles == 'company')
                                                                                    <span><i class="fa fa-ellipsis-v"
                                                                                             aria-hidden="true"></i></span>
                                                                                    <div class="statusDropdown">
                                                                                        <ul>
                                                                                            <li>
                                                                                                <form
                                                                                                    action="{{ route('leaveStatus') }}"
                                                                                                    method="post">
                                                                                                    @csrf
                                                                                                    <input type="hidden"
                                                                                                           value="1"
                                                                                                           name="status">
                                                                                                    <input type="hidden"
                                                                                                           value="{{ $leaveRequest->id }}"
                                                                                                           name="requestId">
                                                                                                    <input type="submit"
                                                                                                           value="Approve"
                                                                                                           name="button">
                                                                                                </form>
                                                                                            </li>
                                                                                            <li>
                                                                                                <form
                                                                                                    action="{{ route('leaveStatus') }}"
                                                                                                    method="post">
                                                                                                    @csrf
                                                                                                    <input type="hidden"
                                                                                                           value="0"
                                                                                                           name="status">
                                                                                                    <input type="hidden"
                                                                                                           value="{{ $leaveRequest->id }}"
                                                                                                           name="requestId">
                                                                                                    <input type="submit"
                                                                                                           value="Reject"
                                                                                                           name="button">
                                                                                                </form>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                @endif
                                                                            </div>
                                                                        </div>
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
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                 aria-labelledby="nav-profile-tab" tabindex="0">
                                <div class="custom_tabs_data" style="display: block" id="tab5">
                                    <div class="col-xxl-9 col-xl-11 col-lg-11 col-md-12">
                                        <form action="{{ route('lateApprovalFilter') }}" method="post">
                                            @csrf
                                            <input type="hidden" value="lateApprovalRequest" name="lateApprovalRequest">
                                            <label for="company">Select Company:</label>
                                            <select id="company" name="company">
                                                <option value="" selected disabled>Select Company</option>
                                                @isset($companies)
                                                    @foreach($companies as $company)
                                                        <option
                                                            value="{{ $company->id }}">{{ $company->company_name }}</option>
                                                    @endforeach
                                                @endisset
                                            </select>
                                            <label for="from">From:</label>
                                            <input type="date" id="from" name="from">
                                            <label for="to">To:</label>
                                            <input type="date" id="to" name="to">
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
                                        <div class="activityTable_data">
                                            <table class="table table-striped">
                                                <thead>
                                                <tr>
                                                    <th>
                                                        <h6>#</h6>
                                                    </th>
                                                    <th>
                                                        <h6>Company</h6>
                                                    </th>
                                                    <th>
                                                        <h6>Department</h6>
                                                    </th>
                                                    <th>
                                                        <h6>Emp Code</h6>
                                                    </th>
                                                    <th>
                                                        <h6>Date</h6>
                                                    </th>
                                                    <th>
                                                        <h6>Expected time of arrival</h6>
                                                    </th>
                                                    <th>
                                                        <h6>Reason</h6>
                                                    </th>
                                                    <th>
                                                        <h6>Actions</h6>
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @php($increamentId = 1)
                                                @isset($lateRequests)
                                                    @foreach($lateRequests as $lateRequest)
                                                        {{--                                                        @php(dd($leaveRequest))--}}
                                                        <tr>
                                                            <td>
                                                                <div class="tabletext">
                                                                    <p>{{$increamentId}}</p>
                                                                </div>
                                                            <td>
                                                                <div class="tabletext">
                                                                    <p>{{ $lateRequest->company->company_name }}</p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="tabletext">
                                                                    <p>{{ $lateRequest->department->department_name }}</p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="tabletext">
                                                                    <p>{{ $lateRequest->employee_code }}</p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="tabletext">
                                                                    {{ $lateRequest->date }}
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="tabletext">
                                                                    <p>{{ Carbon::parse($lateRequest->expected_time)->format('h:i A') }}</p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="tabletext">
                                                                    <p>{{ $lateRequest->late_reason }}</p>
                                                                </div>
                                                            </td>
                                                            <td width="90">
                                                                <div class="tabletext">
                                                                    <div class="statusFiled">
                                                                        @if($lateRequest['late_status'] === null)
                                                                            <strong class="">Pending</strong>
                                                                        @elseif($lateRequest['late_status'] == true)
                                                                            <strong class="">Approved</strong>
                                                                        @elseif($lateRequest['late_status'] == false)
                                                                            <strong class="">Rejected</strong>
                                                                        @endif
                                                                        <div class="statusFieldInfo">
                                                                            <div class="statusDrop">
                                                                <span><i class="fa fa-ellipsis-v"
                                                                         aria-hidden="true"></i></span>
                                                                                <div class="statusDropdown">
                                                                                    <ul>
                                                                                        <li>
                                                                                            <form
                                                                                                action="{{ route('lateStatus') }}"
                                                                                                method="post">
                                                                                                @csrf
                                                                                                <input type="hidden"
                                                                                                       value="1"
                                                                                                       name="status">
                                                                                                <input type="hidden"
                                                                                                       value="{{ $lateRequest->id }}"
                                                                                                       name="requestId">
                                                                                                <input type="submit"
                                                                                                       value="Approve"
                                                                                                       name="button">
                                                                                            </form>
                                                                                        </li>
                                                                                        <li>
                                                                                            <form
                                                                                                action="{{ route('lateStatus') }}"
                                                                                                method="post">
                                                                                                @csrf
                                                                                                <input type="hidden"
                                                                                                       value="0"
                                                                                                       name="status">
                                                                                                <input type="hidden"
                                                                                                       value="{{ $lateRequest->id }}"
                                                                                                       name="requestId">
                                                                                                <input type="submit"
                                                                                                       value="Reject"
                                                                                                       name="button">
                                                                                            </form>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
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
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
                        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
                        crossorigin="anonymous">
                </script>
                <script>
                    function fetchDepartments() {
                        var companyId = document.getElementById('companyName').value;
                        var departmentSelect = document.getElementById('inputDepartment');

                        // Clear previous options
                        departmentSelect.innerHTML = '<option selected>Choose...</option>';

                        // Fetch departments based on selected company
                        fetch('/lateRequestDepartments/' + companyId, {
                            method: 'GET',
                            headers: {
                                'Content-Type': 'application/json'
                            }
                        })
                            .then(response => response.json())
                            .then(data => {
                                data.forEach(function (department) {
                                    var option = document.createElement('option');
                                    option.value = department.id;
                                    option.textContent = department.name;
                                    departmentSelect.appendChild(option);
                                });
                            })
                            .catch(error => console.error('Error fetching departments:', error));
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
                            success: function (response) {
                                // Update employee code input field with received value
                                $('#inputCode').val(response.employee_code);
                            },
                            error: function (xhr, status, error) {
                                console.error(xhr.responseText);
                            }
                        });
                    }

                    $('#inputDepartment').change(fetchEmployeeCode);
                </script>
                <script>
                    $(document).ready(function() {
                        const tab = '{{ session("tab") }}';
                        if (tab === 'late') {
                            $('#nav-profile-tab').tab('show');
                        }
                    });
                </script>
            </div>
        </div>
    </div>
</div>
