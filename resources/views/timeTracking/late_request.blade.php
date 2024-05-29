@php use Carbon\Carbon; @endphp
<x-header data="offers component" />
<link rel="stylesheet" href="{{ asset('css/css/Employer_activity_style.css') }}">
<link rel="stylesheet" href="{{ asset('css/css/Employer_activity_style.css') }}">



<style>
    .table-responsive {
        box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
        margin-top: 30px;
        border-radius: 10px;
        position: relative;
        z-index: 0;
    }

    .leave_button_bg,
    .leave_button_bg2 {
        background-color: #Fff !important;
        box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
        padding: 16px 20px;
        font-size: 14px;
        position: relative;
        border: none !important;
        border-radius: 5px;
        color: #343A40 !important;

    }


    .leave_button_bg,
    .leave_button_bg2:hover {
        color: #343A40 !important;
    }

    .leave_button_bg2 {
        position: relative;
        left: 10px !important;
        color: #343A40 !important;
    }

    .nav-tabs {
        border-bottom: none !important;

    }

    .tab-content {
        background-color: #Fff !important;
        border-radius: 10px;
        margin-top: 25px;

    }

    .track-form {
        padding: 25px !important;
        box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
    }

    .submit_from_bg_color {
        background-color: #343A40 !important;
        color: #Fff !important;
    }

    .submit_from_bg_color:hover {
        color: #fff !important;
    }
</style>



<div class="fr-section" style="margin-top: -72px;">
    <div class="fr-section_detail">

        <div class="container-fluid">

            <div style="font-size:22px;font-weight:600;margin-bottom:3px;">Time Tracking</div>
            <div style="font-size:16px;font-weight:500;margin-bottom:15px"><b>Description:</b> To monitor the
                timekeeping
                records of employees within their respective companies.</div>


            <div class="dashboard_innerPages">
                <div class="custom_tabs_section">
                    <div class="custom_tabs">
                    </div>
                    <br>
                    <div class="container">
                        <div class="row">
                            @if (auth()->user()->roles != 'company')
                                <nav>
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                        <button class="nav-link active leave_button_bg" id="nav-home-tab"
                                            data-bs-toggle="tab" style="color: red;" data-bs-target="#nav-home"
                                            type="button" role="tab" aria-controls="nav-home" aria-selected="true">
                                            <div>Post late Request</div>
                                        </button>
                                        <button class="nav-link leave_button_bg2" id="nav-profile-tab"
                                            data-bs-toggle="tab" data-bs-target="#nav-profile" type="button"
                                            role="tab" aria-controls="nav-profile" aria-selected="false">
                                            My
                                            Request
                                        </button>
                                    </div>
                                </nav>
                            @endif
                            <div class="tab-content" id="nav-tabContent">
                                @if (auth()->user()->roles != 'company')
                                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                        aria-labelledby="nav-home-tab" tabindex="0">
                                        <form class="row g-3 track-form" action="{{ route('lateRequestSubmit') }}"
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
                                                <label for="inputDays" class="form-label" style="font-size: 14px;">Start
                                                    Date(From)</label>
                                                <div>
                                                    <input type="date" name="leaveDays" class="form-control"
                                                        style="height: 50px;" />
                                                </div>
                                            </div>



                                            <div class="col-md-6">
                                                <label for="inputDays" class="form-label" style="font-size: 14px;">Start
                                                    Date(From)</label>
                                                <div>
                                                    <input type="Time" name="leaveDays" class="form-control"
                                                        style="height: 50px;" />
                                                </div>
                                            </div>


                                            <div class="col-md-12">
                                                <label for="inputEmail" class="form-label"
                                                    style="font-size: 14px;">Reason
                                                    For Leave</label>
                                                <div class="form-floating">
                                                    <textarea class="form-control" placeholder="Type" name="reason" style="height: 130px;" id="floatingTextarea"></textarea>
                                                </div>
                                            </div>


                                            <div class="form-check mt-4 ms-3">
                                                <input type="checkbox" class="form-check-input" id="Check"
                                                    style="margin-top: 0px;" required>
                                                <label class="form-check-label" for="exampleCheck1"
                                                    style="font-size:14px;margin-left:10px;">I acknowledge
                                                    that I am
                                                    responsible for arriving at work on time, and understand that
                                                    late
                                                    arrivals may have consequence as per company policy.</label>
                                            </div>
                                            <div class="col-12">
                                                <button type="submit" class="btn submit_from_bg_color"
                                                    style="padding: 12px 30px;">Submit</button>
                                            </div>
                                        </form>

                                    </div>
                                    <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                        aria-labelledby="nav-profile-tab" tabindex="0">
                                        <div class="custom_tabs_data" style="display: block" id="tab5">
                                @endif
                                <form action="{{ route('lateRequestFilter') }}" method="post">
                                    @csrf
                                    <input type="hidden" value="lateRequest" name="lateRequest">
                                    <label for="company" style="font-size:14px;">Select Company:</label>
                                    <select id="company" name="company">
                                        <option value="" selected disabled>Select Company</option>
                                        @isset($companies)
                                            @foreach ($companies as $company)
                                                <option value="{{ $company->id }}">{{ $company->company_name }}
                                                </option>
                                            @endforeach
                                        @endisset
                                    </select>
                                    <label for="from" style="font-size:14px;">From:</label>
                                    <input type="date" id="from" name="from">
                                    <label for="to" style="font-size:14px;">To:</label>
                                    <input type="date" id="to" name="to">
                                    <select name="employee_code">
                                        <option selected disabled>Choose Emp Code</option>
                                        @isset($employees)
                                            @foreach ($employees as $employee)
                                                <option value="{{ $employee->employee_code }}">
                                                    {{ $employee->employee_code }}
                                                </option>
                                            @endforeach
                                        @endisset
                                    </select>
                                    <button class="btn-dark" type="submit" style="font-size:14px;">Filter</button>
                                </form>


                                <div class="custom_tabs_data" style="display: block" id="tab5">
                                    <div class="row d-flex justify-content-center">
                                        <div class="col-xl-12 col-sm-12 col-lg-12 col-md-12">
                                            <div class="table-responsive">

                                                <div class="activityTable_data">
                                                    <table class="table table-striped">


                                                        <thead>
                                                            {{-- <tr>
                                                                <th colspan="5"></th>
                                                                <th colspan="2">
                                                                    <h6 style="color: #fff">Time Recorder</h6>
                                                                </th>
                                                                <th colspan="3"></th>
                                                            </tr> --}}
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
                                                                <th>
                                                                    <h6>Calendar</h6>
                                                                </th>
                                                                <th>
                                                                    <h6>Time In</h6>
                                                                </th>
                                                                <th>
                                                                    <h6>Time Out</h6>
                                                                </th>

                                                                <th>
                                                                    <h6>Total Hours</h6>
                                                                </th>
                                                                <th>
                                                                    <h6>Ip Address</h6>
                                                                </th>
                                                                <th>
                                                                    <h6>Action</h6>
                                                                </th>
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

                                                        <tbody>
                                                            @php($increamentId = 1)
                                                            @isset($lateRequests)
                                                                @foreach ($lateRequests as $lateRequest)
                                                                    <tr>
                                                                        <td>
                                                                            <div class="tabletext">
                                                                                <p>{{ $increamentId }}</p>
                                                                            </div>
                                                                        <td>
                                                                            <div class="tabletext">
                                                                                <p>{{ $lateRequest->company->company_name }}
                                                                                </p>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="tabletext">
                                                                                <p>{{ $lateRequest->department->department_name }}
                                                                                </p>
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
                                                                                <p>{{ Carbon::parse($lateRequest->expected_time)->format('h:i A') }}
                                                                                </p>
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
                                                                                    @if ($lateRequest['late_status'] === null)
                                                                                        <strong
                                                                                            class="">Pending</strong>
                                                                                    @elseif($lateRequest['late_status'] == true)
                                                                                        <strong
                                                                                            class="">Approved</strong>
                                                                                    @elseif($lateRequest['late_status'] == false)
                                                                                        <strong
                                                                                            class="">Rejected</strong>
                                                                                    @endif
                                                                                    {{--                                                                            <div class="statusFieldInfo"> --}}
                                                                                    {{--                                                                                <div class="statusDrop"> --}}
                                                                                    {{--                                                                <span><i class="fa fa-ellipsis-v" --}}
                                                                                    {{--                                                                         aria-hidden="true"></i></span> --}}
                                                                                    {{--                                                                                    <div class="statusDropdown"> --}}
                                                                                    {{--                                                                                        <ul> --}}
                                                                                    {{--                                                                                            <li> --}}
                                                                                    {{--                                                                                                <form --}}
                                                                                    {{--                                                                                                    action="{{ route('lateStatus') }}" --}}
                                                                                    {{--                                                                                                    method="post"> --}}
                                                                                    {{--                                                                                                    @csrf --}}
                                                                                    {{--                                                                                                    <input type="hidden" --}}
                                                                                    {{--                                                                                                           value="1" --}}
                                                                                    {{--                                                                                                           name="status"> --}}
                                                                                    {{--                                                                                                    <input type="hidden" --}}
                                                                                    {{--                                                                                                           value="{{ $lateRequest->id }}" --}}
                                                                                    {{--                                                                                                           name="requestId"> --}}
                                                                                    {{--                                                                                                    <input type="submit" --}}
                                                                                    {{--                                                                                                           value="Accept" --}}
                                                                                    {{--                                                                                                           name="button"> --}}
                                                                                    {{--                                                                                                </form> --}}
                                                                                    {{--                                                                                            </li> --}}
                                                                                    {{--                                                                                            <li> --}}
                                                                                    {{--                                                                                                <form --}}
                                                                                    {{--                                                                                                    action="{{ route('lateStatus') }}" --}}
                                                                                    {{--                                                                                                    method="post"> --}}
                                                                                    {{--                                                                                                    @csrf --}}
                                                                                    {{--                                                                                                    <input type="hidden" --}}
                                                                                    {{--                                                                                                           value="0" --}}
                                                                                    {{--                                                                                                           name="status"> --}}
                                                                                    {{--                                                                                                    <input type="hidden" --}}
                                                                                    {{--                                                                                                           value="{{ $lateRequest->id }}" --}}
                                                                                    {{--                                                                                                           name="requestId"> --}}
                                                                                    {{--                                                                                                    <input type="submit" --}}
                                                                                    {{--                                                                                                           value="Reject" --}}
                                                                                    {{--                                                                                                           name="button"> --}}
                                                                                    {{--                                                                                                </form> --}}
                                                                                    {{--                                                                                            </li> --}}
                                                                                    {{--                                                                                        </ul> --}}
                                                                                    {{--                                                                                    </div> --}}
                                                                                    {{--                                                                                </div> --}}
                                                                                    {{--                                                                            </div> --}}
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
                    fetch('/lateRequestDepartments/' + companyId, {
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
