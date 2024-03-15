@php use Carbon\Carbon;
@endphp
<x-header data="worklog"/>
<link rel="stylesheet" href="css/bootstrap.min.css">
<!-- custom css -->
<link rel="stylesheet" href="{{ asset('css/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('css/css/responsive.css') }}">
<!-- aos animation  -->
<link rel="stylesheet" href="{{ asset('css/css/aos.css') }}">
<!-- font awesome-->
<link rel="stylesheet" href="{{ asset('css/css/font-awesome.min.css') }}">
<div class="fr-section" style="margin-top: -72px">
    <div class="fr-section_detail">
        <div class="dashboard_innerPages">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="d-flex">
                            <div class="col-6">
                                <select id="companyName" class="form-select me-3" name="company"
                                        aria-label="First select example" onchange="fetchDepartments()">
                                    <option selected disabled>Select Company</option>
                                    @isset($companies)
                                        @foreach($companies as $company)
                                            <option value="{{ $company->id }}">{{$company->company_name }}</option>
                                        @endforeach
                                    @endisset
                                </select>
                            </div>
                            <div class="col-6">

                                <form id="departmentForm" action="{{ route('department') }}" method="POST">
                                    @csrf
                                    <select id="departmentName" class="form-select me-3" name="department"
                                            aria-label="Second select example" onchange="this.form.submit()">
                                        @if(!isset($companies))
                                            disabled
                                        @endif>
                                        <option selected disabled>Select Department</option>
                                        @isset($departments)
                                            @foreach($departments as $department)
                                                <option value="{{ $department->id }}">
                                                    {{ $department->name }}
                                                </option>
                                            @endforeach
                                        @endisset
                                    </select>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row col-12">
                        <div class="col-4">
                            <div class="row">
                                <div class="card mt-5" style="width: 18rem;">
                                    <div class="card-header">
                                        Time Sheet {{ Carbon::now()->format('j M Y') }}
                                    </div>
                                    <form action="{{ route('punch') }}" method="post">
                                        @csrf
                                        <input type="hidden" name="department_id"
                                               value=" @isset($employeeInfo)
                                               {{$employeeInfo->department?->id}}
                                               @endisset">
                                        @if(is_null($lastPunch) || isset($lastPunch['punch_out']))
                                            <ul class=" mt-3 list-group list-group-flush">
                                                <button type="submit" name="punch" value="1" class="btn btn-dark"
                                                        @if(!isset($employeeInfo)) disabled @endif>
                                                    Punch In
                                                </button>
                                            </ul>
                                        @endisset
                                        @isset($lastPunch['punch_in'])
                                            <ul class=" mt-3 list-group list-group-flush">
                                                <button type="submit" name="punch" value="0" class="btn btn-dark"
                                                        @if(!isset($employeeInfo)) disabled @endif>
                                                    Punch Out
                                                </button>
                                            </ul>
                                        @endisset($lastPunch['punch_in'])
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="card mt-5" style="width: 18rem;">
                                <div class="card-header">
                                    Employee Details
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Name: @isset($employeeInfo)
                                            {{ $employeeInfo->employee_name }}
                                        @endisset</li>
                                    <li class=" list-group-item">Company: @isset($employeeInfo)
                                            {{ $employeeInfo->company->company_name }}
                                        @endisset</li>
                                    <li class="list-group-item">Department: @isset($employeeInfo)
                                            {{ $employeeInfo->department?->name }}
                                        @endisset</li>
                                    <li class="list-group-item">Designation: @isset($employeeInfo)
                                            {{ $employeeInfo->designation }}
                                        @endisset</li>
                                    <li class="list-group-item">Employee ID: @isset($employeeInfo)
                                            {{ $employeeInfo->employee_code }}
                                        @endisset</li>
                                    <li class="list-group-item">Email: @isset($employeeInfo)
                                            {{ $employeeInfo->Email }}
                                        @endisset</li>
                                    <li class="list-group-item">Reporting Manager: @isset($employeeInfo)
                                            {{ $employeeInfo->reporting_manager }}
                                        @endisset</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="row">
                                <div class="card mt-5" style="width: 18rem;">
                                    <div class="card-header">
                                        Today Activity
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        @isset($punchHistories)
                                            @foreach($punchHistories as $punchHistory)
                                                @isset($punchHistory['punch_in'])
                                                    @if($punchHistory['punch_in'] != null)
                                                        <li class="list-group-item">Punch In
                                                            At: {{ Carbon::parse($punchHistory['punch_in'])->format('h:i A') }}</li>
                                                    @endif
                                                @endisset
                                                @isset($punchHistory['punch_out'])
                                                    @if($punchHistory['punch_out'] != null)
                                                        <li class="list-group-item">Punch Out
                                                            At: {{ Carbon::parse($punchHistory['punch_out'])->format('h:i A') }}</li>
                                                    @endif
                                                @endisset
                                            @endforeach
                                        @endisset
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row col-12">
                        <div class="col-4">
                            <div class="row">
                                <div class="card mt-5" style="width: 18rem;">
                                    <div class="card-header">
                                        Calendar
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <!-- Additional content for time sheet can be added here -->
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="row">
                                <div class="card mt-5" style="width: 18rem;">
                                    <div class="card-header">
                                        Punch Details
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            Date: <?php echo Carbon::now()->format('jS F Y'); ?></li>
                                        <li class="list-group-item">Punch In At:
                                            @isset($punchDetails['firstLogIn'])
                                                {{ Carbon::createFromFormat('H:i:s', $punchDetails['firstLogIn'])->format('h:i A') }}
                                            @else
                                                N/A
                                            @endisset
                                        </li>
                                        <li class="list-group-item">Punch Out At:
                                            @isset($punchDetails['lastPunchOut'])
                                                {{ Carbon::createFromFormat('H:i:s', $punchDetails['lastPunchOut'])->format('h:i A') }}
                                            @else
                                                N/A
                                            @endisset
                                        </li>
                                        <li class="list-group-item">Work Hours: @isset($totalWorkHours)
                                                {{$totalWorkHours}}
                                            @endisset</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function fetchDepartments() {
        var companyId = document.getElementById('companyName').value;
        var departmentSelect = document.getElementById('departmentName');
        console.log(companyId);
        // Clear previous options
        departmentSelect.innerHTML = ' <option selected disabled>Select Department</option>';

        // Fetch departments based on selected company
        fetch('/company/' + companyId, {
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

