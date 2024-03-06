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
                                <form class="row g-3" action="{{route('lateRequestSubmit')}}" method="post">
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
                                    <div class="row col-12 mt-3">
                                        <div class="col-md-6">
                                            <div class="col-12">
                                                <label for="birthday">Date</label>
                                            </div>
                                            <input type="date" id="from" name="date">
                                        </div>
                                        <div class="col-md-6">
                                            <div class="col-12">
                                                <label for="birthday">Expected time of arrival</label>
                                            </div>
                                            <input type="time" id="to" name="time">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="inputEmail" class="form-label">Reason For Leave</label>
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Type" name="reason"
                                                      id="floatingTextarea"></textarea>
                                        </div>
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
                                                                    <p>{{ $lateRequest->department->name }}</p>
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
                                                                            <strong class="">Accepted</strong>
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
                                                                                                       value="Accept"
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
            </div>
        </div>
    </div>
</div>
