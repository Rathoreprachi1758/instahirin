<x-header data="insta_project component" />
<link rel="stylesheet" href="{{ asset('css/css/master_tab.css') }}">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.7/dist/sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.7/dist/sweetalert2.all.min.js"></script>
<link rel="stylesheet" href="{{ asset('vendor/sweetalert2/sweetalert2.min.css') }}">
<script src="{{ asset('vendor/sweetalert2/sweetalert2.min.js') }}"></script>



<style>
    .tracking-table li {
        list-style: none;
    }

    .tracking-table {
        position: relative;
    }

    .tracking-table .dropdown:hover .dropdown-menu {
        display: block;
        max-width: 100px !important;
        position: absolute;
        left: 0;
        top: 100%;
    }



    /* .tracking-table .dropdown-menu {
        --bs-dropdown-min-width: 2rem !important;
        --bs-border-radius: 0 !important;
        padding: 0 !important;
        text-align: start
    } */

    .table> :not(:last-child)> :last-child>* {
        border-bottom-color: #dee2e6 !important;
    }

    .tracking-table .dropdown-menu .dropdown-item:hover {
        background-color: #eff5f9 !important;
        color: #000 !important;
    }

    .dropdown-menu {
        min-width: auto !important;
        border-radius: 0 !important;
        padding: 0 !important;
        border: 1px solid #dee2e6 !important;
    }


    .activityTable_data table td {
        border: 0.5px solid #dee2e6;
        padding: 0.8rem 0.6rem !important;
    }

    table.dataTable.no-footer {
        border-bottom: 1px solid #dee2e6;
    }





    .dropdown-item {
        padding: 5px 15px !important;
    }


    .tracking-table .dropdown-menu .dropdown-item:first-child {
        background-color: #000 !important;
        color: #fff !important;
    }

    .table-responsive {
        overflow-x: inherit !important;
    }

    @media (max-width:480px) {
        .table-responsive {
            overflow-x: auto !important;
        }
    }

    .tracking-table thead td {
        background-color: #eff5f9 !important;
    }


    .tracking-table tbody td:nth-child(1) {
        background-color: #eff5f9 !important;
    }

    .tracking-table tbody td:nth-child(2) {
        background-color: #eff5f9 !important;
    }

    .custom_tittle h4 {
        font-size: 25px;
        padding-bottom: 10px;
        font-family: "avenirmedium";
        color: #343A40;
    }

    .description_small_text {
        font-size: 14px !important;
        color: #777;
        line-height: 25px;

    }
</style>

@include('sweetalert::alert')
<div class="fr-section" style="margin-top: -72px">
    <div class="fr-section_detail ">
        <div class="dashboard_innerPages">
            <div class="custom_tabs_section">
                <div class="custom_tittle descriptionTxt">
                    <h4>Salary Details</h4>
                    <p class="description_small_text "><strong style="color:#343A40;">Description:</strong> A
                        comprehensive overview of an
                        employee’s compensation package
                        including wages, bonuses, deductions, and benefits.
                    </p>
                </div>
                <h1 style="font-size:18px;">Employee Salary Details</h1>
                @if (Session::has('message'))
                    <div class="alert alert-success" style="margin-top: 12px;" id="success-message">
                        <span style="margin-left:330px">{{ Session::get('message') }}</span>
                        <script>
                            setTimeout(function() {
                                document.getElementById('success-message').style.display = 'none';
                            }, 2000);
                        </script>
                    </div>
                @endif
                <div class="tabletext">
                    <form action="{{ route('salaryDetailFilters') }}" method="POST" class="row g-3 align-items-center">
                        @csrf
                        <div class="col-auto">
                            <label for="companyName" class="form-label">Select Company:</label>
                            <select id="companyName" name="company" class="form-select" onchange="fetchDepartments()">
                                <option selected disabled>Select Company</option>
                                @isset($companies)
                                    @foreach ($companies as $company)
                                        <option value="{{ $company->id }}">{{ $company->company_name }}</option>
                                    @endforeach
                                @endisset
                            </select>
                        </div>
                        <div class="col-auto">
                            <label for="departmentName" class="form-label">Select Department:</label>
                            <select id="departmentName" name="department" class="form-select"
                                @if (!isset($companies)) disabled @endif>
                                <option selected disabled>Select Department</option>
                                @isset($departments)
                                    @foreach ($departments as $department)
                                        <option value="{{ $department->id }}">{{ $department->department_name }}</option>
                                    @endforeach
                                @endisset
                            </select>
                        </div>
                        <div class="col-auto align-self-end">
                            <button class="btn btn-secondary" type="submit">Apply Filter</button>
                        </div>
                    </form>
                    <!-- End of 'from' and 'to' date inputs -->
                    <div class="custom_tabs_data mt-3" style="display: block" id="tab5">
                        <div class="col-xl-12 col-xl-12 col-lg-12 col-md-12">
                            <div class="activityTable_data">
                                <table id="employeeTable" class="table table-bordered text-center tracking-table">
                                    <thead>
                                        <tr>
                                            <td class="align-middle">Emp code</td>
                                            <td class="align-middle">Name</td>
                                            <td class="align-middle">Dept. Name</td>
                                            <td class="align-middle">Salary</td>
                                            <td class="align-middle">Salary Type</td>
                                            <td class="align-middle">Action</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($employees as $employee)
                                            <tr>
                                                <td>{{ $employee->employee_code }}</td>
                                                <td>{{ $employee->employee_name }}</td>
                                                <td>{{ $employee->department->department_name }}</td>

                                                @php
                                                    $employeeSalary = $employeesSalary
                                                        ?->where('employee_id', $employee->id)
                                                        ->where('company_id', $employee->company->id)
                                                        ->latest()
                                                        ->first();
                                                @endphp

                                                @if ($employeeSalary)
                                                    <td>{{ $employeeSalary->total }}</td>
                                                    <td>{{ $employeeSalary->salary_type }}</td>
                                                @else
                                                    <td>N/A</td>
                                                    <td>N/A</td>
                                                @endif

                                                <td>
                                                    <div class="actionBtns">
                                                        <a
                                                            href="{{ route('SalaryHeadMaster', ['employeeId' => $employee->id, 'companyId' => $employee->company->id, 'departmentId' => $employee->department->id]) }}">
                                                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                        </a>
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
    $(document).ready(function() {
        // Initialize DataTable
        $('#employeeTable').DataTable({
            "paging": true, // Enable pagination
            "lengthChange": true, // Enable the option to choose entries per page
            "searching": true, // Enable search
            "ordering": true, // Enable ordering
            "info": true, // Enable showing info
            "autoWidth": false, // Disable auto width calculation
            "responsive": true // Enable responsive design
        });
    });

    function fetchDepartments() {
        var companyId = document.getElementById('companyName').value;
        var departmentSelect = document.getElementById('departmentName');
        console.log(companyId);
        departmentSelect.innerHTML = '<option selected disabled>Select Department</option>';
        fetch('/salary-company/' + companyId, {
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
