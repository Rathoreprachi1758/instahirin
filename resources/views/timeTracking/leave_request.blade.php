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
                                        type="button" role="tab" aria-controls="nav-home" aria-selected="true">Post
                                    Leave Request
                                </button>
                                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-profile"
                                        type="button" role="tab" aria-controls="nav-profile" aria-selected="false">My
                                    Request
                                </button>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                 aria-labelledby="nav-home-tab"
                                 tabindex="0">
                                <form class="row g-3" action="{{route('leaveRequestSubmit')}}" method="post">
                                    @csrf
                                    <div class="col-md-6">
                                        <label for="inputName" class="form-label">Company Name</label>
                                        <select id="companyName" name="company" class="form-select"
                                                onchange="fetchDepartments()">
                                            <option selected>Choose...</option>
                                            @foreach($companies as $company)
                                                <option value="{{$company->id}}">{{$company->company_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputDepartment" class="form-label">Department</label>
                                        <select id="inputDepartment" name="department" class="form-select">
                                            <option selected>Choose...</option>
                                            @isset($departments)
                                                @foreach($departments as $department)
                                                    <option
                                                        value="{{ $department->id }}">{{ $department->name }}</option>
                                                @endforeach
                                            @endisset
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <label for="inputCode" class="form-label">Employee Code</label>
                                        <input type="text" name="emp_code" class="form-control" id="inputCode"
                                               placeholder="000">
                                    </div>
                                    <div class="col-12">
                                        <div class="col-md-6">
                                            <label for="inputType" class="form-label">Leave Type</label>
                                            <select id="inputType" name="leaveId" class="form-select">
                                                <option selected>Choose...</option>
                                                @foreach($leaveTypes as $leaveType)
                                                    <option
                                                        value="{{$leaveType->id}}">{{$leaveType->leave_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="col-12">
                                            <label for="birthday">Start Date(from)</label>
                                        </div>
                                        <input type="date" id="from" name="From">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="col-12">
                                            <label for="birthday">End Date(to)</label>
                                        </div>
                                        <input type="date" id="to" name="To">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="inputEmail" class="form-label">Reason For Leave</label>
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Type" name="reason"
                                                      id="floatingTextarea"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputDays" class="form-label">Total Number Of days</label>
                                        <input type="text" name="leaveDays" class="form-control" id="inputDays">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputBalance" class="form-label">Balance Leave</label>
                                        <input type="text" name="leaveBalance" class="form-control" id="inputBalance"
                                               disabled>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputEmail" class="form-label">Contact Email During Leave</label>
                                        <input type="email" name="email" class="form-control" id="inputEmail">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputNumber" class="form-label">Contact Number During Leave</label>
                                        <input type="number" name="phone" class="form-control" id="inputNumber">
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                 aria-labelledby="nav-profile-tab" tabindex="0">
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
                                                        {{--                                                        @php(dd($leaveRequest))--}}
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
                                                                            <strong class="">Accepted</strong>
                                                                        @elseif($leaveRequest['leave_status'] == false)
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
                                                                                                       value="Accept"
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
                        fetch('/leaveRequestDepartments/' + companyId, {
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
            </div>
        </div>
    </div>
</div>
