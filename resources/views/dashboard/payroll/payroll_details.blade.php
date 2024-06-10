<x-header data="insta_project component" />
<link rel="stylesheet" href="{{ asset('css/css/master_tab.css') }}">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.7/dist/sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.7/dist/sweetalert2.all.min.js"></script>
<link rel="stylesheet" href="{{ asset('vendor/sweetalert2/sweetalert2.min.css') }}">
<script src="{{ asset('vendor/sweetalert2/sweetalert2.min.js') }}"></script>
@include('sweetalert::alert')
{{-- <div class="fr-section" style="margin-top: -72px">
    <div class="fr-section_detail">
        <div class="dashboard_innerPages">
            <div class="custom_tabs_section  track-form">
                <div class="custom_tittle descriptionTxt">
                    <h4>Salary Details</h4>
                    <p><strong>Description:</strong> A comprehensive overview of an employee’s compensation package
                        including wages, bonuses, deductions, and benefits.
                    </p>
                </div> --}}




<body>

    <style>
        .custom_tabs {
            width: 100%;
            border: 0.5px solid #fff
        }


        /*
        table.dataTable.no-footer {
            border-bottom: 1px solid #eff5f9 !important;
        } */

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

        /* .tracking-table tbody td:nth-child(2) {
            background-color: #eff5f9 !important;
        } */

        .activityTable_data table td {
            border: 0.5px solid #eff5f9;

        }
    </style>



    <div class="fr-section" style="margin-top: -72px">
        <div class="fr-section_detail">
            <div class="container-fluid">
                <div style="font-size:22px;font-weight:600;margin-bottom:3px;">Payrolls</div>
                <div style="font-size:16px;font-weight:500;margin-bottom:15px"><b>Description:</b>Keep tracking all
                    payroll activities including payroll adjustment against the invoices and creadit notes.</div>
                <div class="dashboard_innerPages">
                    <div class="custom_tabs_section">
                        <div class="custom_tabs"></div>
                        <br>
                        {{-- <div class="tabletext">
                            <form action="{{ route('timeOffCompany') }}" method="POST">
                                @csrf
                                <label for="from" style="font-size: 14px;">Select Company:</label>
                                <select name="timeOffCompany">
                                    <option selected disabled>Select Company</option>
                                    @isset($companies)
                                        @foreach ($companies as $company)
                                            <option value="{{ $company->id }}">{{ $company->company_name }}</option>
                                        @endforeach
                                    @endisset
                                </select>
                                <label for="from" style="font-size: 14px;">Select Emp Code:</label>
                                <input type="hidden" value="">
                                <select name="employee_code">
                                    <option selected disabled>Choose Emp Code</option>
                                    @isset($employees)
                                        @foreach ($employees as $employee)
                                            <option value="{{ $employee->employee_code }}">{{ $employee->employee_code }}
                                            </option>
                                        @endforeach
                                    @endisset
                                </select>
                                <button class="btn-dark" type="submit"style="font-size: 14px;">Filter</button>
                            </form>

                        </div> --}}





                        {{-- here --}}


                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">


                                <div class="row">

                                    <div class="col-xl-3 col-lg-6 col-md-12 col-sm-12">


                                        <form id="departmentForm">

                                            <select id="departmentName" class="form-select me-3" name="department"
                                                style="border-radius: 100px;padding:10px;background-color:#f9f9f9;margin-bottom:10px"
                                                aria-label="Second select example" onchange="this.form.submit()">

                                                <option selected disabled>Company Name</option>

                                            </select>
                                        </form>
                                    </div>

                                    <div class="col-xl-3 col-lg-6 col-md-12 col-sm-12">

                                        <form id="departmentForm">

                                            <select id="departmentName" class="form-select me-3" name="department"
                                                style="border-radius: 100px;padding:10px;background-color:#f9f9f9;margin-bottom:10px"
                                                aria-label="Second select example" onchange="this.form.submit()">

                                                <option selected disabled>Select Department</option>

                                            </select>
                                        </form>
                                    </div>

                                    <div class="col-xl-3 col-lg-6 col-md-12 col-sm-12">
                                        <form id="departmentForm">

                                            <select id="departmentName" class="form-select me-3" name="department"
                                                style="border-radius: 100px;padding:10px;background-color:#f9f9f9;margin-bottom:10px"
                                                aria-label="Second select example" onchange="this.form.submit()">

                                                <option selected disabled>Select Location</option>

                                            </select>
                                        </form>
                                    </div>

                                    <div class="col-xl-2 col-lg-6 col-md-12 col-sm-12">
                                        <form id="departmentForm">

                                            <select id="departmentName" class="form-select me-3" name="department"
                                                style="border-radius: 100px;padding:10px;background-color:#f9f9f9;margin-bottom:10px"
                                                aria-label="Second select example" onchange="this.form.submit()">

                                                <option selected disabled>Select Period</option>

                                            </select>
                                        </form>
                                    </div>

                                    <div class="col-xl-1 col-lg-6 col-md-12 col-sm-12">
                                        <form id="departmentForm">

                                            <button
                                                style="border-radius: 3px;padding:7px 15px;background-color:#343A40;margin-bottom:10px;color:#fff;font-size: 15px;line-height: 25px;">Search</button>
                                        </form>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <!-- End of 'from' and 'to' date inputs -->
                        <div class="custom_tabs_data" style="display: block" id="tab5">
                            <div class="row d-flex justify-content-center">
                                <div class="col-xl-12 col-sm-12 col-lg-12 col-md-12 mt-3">
                                    <div class="table-responsive">
                                        <div class="activityTable_data">
                                            <table class="table table-bordered text-center tracking-table">
                                                <thead>
                                                    <tr>
                                                        <td class="align-middle">
                                                            #
                                                        </td>

                                                        <td class="align-middle">
                                                            Company Name
                                                        </td>
                                                        <td class="align-middle">
                                                            Emp Code
                                                        </td>
                                                        <td class="align-middle">
                                                            Celender
                                                        </td>
                                                        <td class="align-middle">
                                                            Time Recorder
                                                        </td>
                                                        <td class="align-middle">
                                                            Publish
                                                        </td>

                                                        <td class="align-middle">
                                                            Status
                                                        </td>



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
                                                        <td><span style="color:rgb(8, 194, 8)">Accept</span></td>

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
                                                        <td><span style="color: rgb(208, 18, 18);">Reject</span></td>

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


                                                        <td>
                                                            <li class="nav-item dropdown">
                                                                <a class="nav-link " href="#" id="navbarDropdown"
                                                                    role="button" data-toggle="dropdown"
                                                                    aria-haspopup="true" aria-expanded="false">
                                                                    <i class="bi bi-three-dots-vertical"></i>
                                                                </a>
                                                                <div class="dropdown-menu"
                                                                    aria-labelledby="navbarDropdown">
                                                                    <a class="dropdown-item" href="#">&check;
                                                                        Accept</a>
                                                                    <a class="dropdown-item" href="#">&#10005;
                                                                        Reject</a>

                                                                </div>
                                                            </li>
                                                        </td>


                                                    </tr>


                                                    @php($increamentId = 1)
                                                    @isset($employeeLeaveRequests)
                                                        @foreach ($employeeLeaveRequests as $employeeLeaveRequest)
                                                            <tr>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p>{{ $increamentId }}</p>
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
                                                                {{--                                                <td width="90"> --}}
                                                                {{--                                                    <div class="tabletext"> --}}
                                                                {{--                                                        <div class="statusFieldInfo"> --}}
                                                                {{--                                                            <div class="statusDrop"> --}}
                                                                {{--                                                                <div class="tabletext"> --}}
                                                                {{--                                                                    <div class="statusFiled"> --}}
                                                                {{--                                                                        <span><i --}}
                                                                {{--                                                                                class="fa fa-ellipsis-v" --}}
                                                                {{--                                                                                aria-hidden="true"></i></span> --}}
                                                                {{--                                                                        <div class="statusDropdown"> --}}
                                                                {{--                                                                            <ul> --}}
                                                                {{--                                                                                <li> --}}
                                                                {{--                                                                                    <form --}}
                                                                {{--                                                                                        action="{{ route('timeOffStatus') }}" --}}
                                                                {{--                                                                                        method="post"> --}}
                                                                {{--                                                                                        @csrf --}}
                                                                {{--                                                                                        <input type="hidden" value="1" --}}
                                                                {{--                                                                                               name="employee_status"> --}}
                                                                {{--                                                                                        <input type="hidden" --}}
                                                                {{--                                                                                               value="{{ $employeeLeaveRequest['id'] }}" --}}
                                                                {{--                                                                                               name="id"> --}}
                                                                {{--                                                                                        <input type="submit" --}}
                                                                {{--                                                                                               value="Accept" --}}
                                                                {{--                                                                                               name="button"> --}}
                                                                {{--                                                                                    </form> --}}
                                                                {{--                                                                                </li> --}}
                                                                {{--                                                                                <li> --}}
                                                                {{--                                                                                    <form --}}
                                                                {{--                                                                                        action="{{ route('timeOffStatus') }}" --}}
                                                                {{--                                                                                        method="post"> --}}
                                                                {{--                                                                                        @csrf --}}
                                                                {{--                                                                                        <input type="hidden" value="0" --}}
                                                                {{--                                                                                               name="employee_status"> --}}
                                                                {{--                                                                                        <input type="hidden" --}}
                                                                {{--                                                                                               value="{{  $employeeLeaveRequest['id'] }}" --}}
                                                                {{--                                                                                               name="id"> --}}
                                                                {{--                                                                                        <input type="submit" --}}
                                                                {{--                                                                                               value="Reject" --}}
                                                                {{--                                                                                               name="button"> --}}
                                                                {{--                                                                                    </form> --}}
                                                                {{--                                                                                </li> --}}
                                                                {{--                                                                            </ul> --}}
                                                                {{--                                                                        </div> --}}
                                                                {{--                                                                    </div> --}}
                                                                {{--                                                                </div> --}}
                                                                {{--                                                            </div> --}}
                                                                {{--                                                        </div> --}}
                                                                {{--                                                    </div> --}}
                                                                {{--                                                </td> --}}
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <div class="statusFiled">
                                                                            @if ($employeeLeaveRequest['leave_status'] === null)
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

    </div>


</body>
