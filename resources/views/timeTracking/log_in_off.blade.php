<link rel="stylesheet" href="css/bootstrap.min.css">
<!-- custom css -->
<link rel="stylesheet" href="{{ asset('css/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('css/css/responsive.css') }}">
<!-- aos animation  -->
<link rel="stylesheet" href="{{ asset('css/css/aos.css') }}">
<!-- font awesome-->
<link rel="stylesheet" href="{{ asset('css/css/font-awesome.min.css') }}">
<div class="container">
    <div class="row mt-5">
        <div class="col-12">
            <div class="d-flex">
                <form id="companyForm" action="{{route('company')}}" method="POST">
                    @csrf
                    <select class="form-select me-3" name="company" aria-label="First select example">
                        <option selected>Select Company</option>
                        @isset($companies)
                            @foreach($companies as $company)
                                <option
                                    value="{{ $company->id }}">
                                    {{ $company->company_name }}
                                </option>
                            @endforeach
                        @endisset
                    </select>
                    <button value="submit">submit</button>
                </form>
                <form id="departmentForm" action="{{route('department')}}" method="POST">
                    @csrf
                    <select class="form-select me-3" name="department" aria-label="Second select example">
                        <option selected>Select Department</option>
                        @isset($departments)
                            @foreach($departments as $department)
                                <option value="{{ $department->id }}">{{$department->name}}</option>
                            @endforeach
                        @endisset
                    </select>
                    <button value="submit">submit</button>
                </form>
                <form id="departmentForm" action="{{route('employee')}}" method="POST">
                    @csrf
                    <select class="form-select" name="employee" aria-label="Third select example">
                        <option selected>Select Employee</option>
                        @isset($employees)
                            @foreach($employees as $employee)
                                <option value="{{ $employee->id }}">{{$employee->name}}</option>
                            @endforeach
                        @endisset
                    </select>
                    <button value="submit">submit</button>
                </form>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="card mt-5" style="width: 18rem;">
            <div class="card-header">
                Employee Details
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Name: @isset($employeeInfo)
                        {{$employeeInfo->name}}
                    @endisset</li>
                <li class="list-group-item">Company:@isset($employeeInfo)
                        {{$company->company_name}}
                    @endisset</li>
                <li class="list-group-item">Department:@isset($employeeInfo)
                        {{$employeeInfo->department->name}}
                    @endisset</li>
                <li class="list-group-item">Designation:@isset($employeeInfo)
                        {{$employeeInfo->designation}}
                    @endisset</li>
                <li class="list-group-item">Employ Id:@isset($employeeInfo)
                        {{$employeeInfo->id}}
                    @endisset</li>
                <li class="list-group-item">Mail Id:@isset($employeeInfo)
                        {{$employeeInfo->email}}
                    @endisset</li>
                <li class="list-group-item">Reporting Manager:@isset($employeeInfo)
                        {{$employeeInfo->reporting_manager}}@endisset</li>
            </ul>
        </div>
    </div>
</div>

