<x-header data="insta_project component"/>
<link rel="stylesheet" href="{{ asset('css/css/master_tab.css') }}">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
{{-- <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script> --}}
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.7/dist/sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.7/dist/sweetalert2.all.min.js"></script>
<link rel="stylesheet" href="{{ asset('vendor/sweetalert2/sweetalert2.min.css') }}">
<script src="{{ asset('vendor/sweetalert2/sweetalert2.min.js') }}"></script>
@include('sweetalert::alert')
<div class="fr-section" style="margin-top: -72px">
    <div class="fr-section_detail ">
        <div class="dashboard_innerPages">
            <div class="custom_tabs_section">
                <div class="custom_tittle descriptionTxt">
                    <h4>Salary Details</h4>
                    <p><strong>Description:</strong> A comprehensive overview of an employee’s compensation package
                        including wages, bonuses, deductions, and benefits.
                    </p>
                </div>
                <h1>Employee Salary Details</h1>
                @if (Session::has('message'))
                    <div class="alert alert-success" style="margin-top: 12px;" id="success-message">
                        <span style="margin-left:330px">{{ Session::get('message') }}</span>
                        <script>
                            setTimeout(function () {
                                document.getElementById('success-message').style.display = 'none';
                            }, 2000);
                        </script>
                    </div>
                @endif
                <div class="tabletext">
                    <form action="{{ route('salaryDetailFilters') }}" method="POST">
                        @csrf
                        <label for="from">Select Company:</label>
                        <select id="companyName" name="company"
                                aria-label="First select example" onchange="fetchDepartments()">
                            <option selected disabled>Select Company</option>
                            @isset($companies)
                                @foreach($companies as $company)
                                    <option value="{{ $company->id }}">{{$company->company_name }}</option>
                                @endforeach
                            @endisset
                        </select>
                        <label for="departmentSelect">Select Department:</label>
                        <select id="departmentName" name="department"
                                aria-label="Second select example">
                            @if(!isset($companies))
                                disabled
                            @endif>
                            <option selected disabled>Select Department</option>
                            @isset($departments)
                                @foreach($departments as $department)
                                    <option value="{{ $department->id }}">
                                        {{ $department->department_name }}
                                    </option>
                                @endforeach
                            @endisset
                        </select>
                        <button class="btn btn-secondary" type="submit">Apply Filter</button>
                    </form>
                    <!-- End of 'from' and 'to' date inputs -->
                    <div class="custom_tabs_data  mt-3" style="display: block" id="tab5">
                        <div class="col-xxl-9 col-xl-11 col-lg-11 col-md-12">
                            <div class="activityTable_data">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>
                                            <h6>Emp code</h6>
                                        </th>
                                        <th>
                                            <h6>Name</h6>
                                        </th>
                                        <th>
                                            <h6>Dept. Name</h6>
                                        </th>
                                        <th>
                                            <h6>Salary</h6>
                                        </th>
                                        <th>
                                            <h6>Action</h6>
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($employees as $employee)
                                        <tr>
                                            <td>
                                                <div class="tabletext">
                                                    {{$employee->employee_code}}
                                                </div>
                                            <td>
                                                <div class="tabletext">
                                                    {{$employee->employee_name}}

                                                </div>
                                            </td>
                                            <td>
                                                <div class="tabletext">
                                                    {{$employee->department->department_name}}

                                                </div>
                                            </td>
                                            <td>
                                                <div class="tabletext">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="tabletext">
{{--                                                    <a href=""--}}
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
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
<script>
    function fetchDepartments() {
        var companyId = document.getElementById('companyName').value;
        var departmentSelect = document.getElementById('departmentName');
        console.log(companyId);
        departmentSelect.innerHTML = ' <option selected disabled>Select Department</option>';
        fetch('/salary-company/' + companyId, {
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
                    option.textContent = department.department_name;
                    departmentSelect.appendChild(option);
                });
            })
            .catch(error => console.error('Error fetching departments:', error));
    }
</script>
