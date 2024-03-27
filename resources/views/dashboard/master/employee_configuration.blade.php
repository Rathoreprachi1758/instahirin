<x-header data="employee_config component" />
<link rel="stylesheet" href="{{ asset('css/css/master_tab.css') }}">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.7/dist/sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.7/dist/sweetalert2.all.min.js"></script>
<script>
    $(document).ready(function() {
        $('#employee_config').DataTable();
        //
        $('#emp_click_modal').click(function() {
            $('#create_emp').modal('show');
        });

        $('.edit_company').click(function() {
            var config_id = $(this).data('config-id');
            console.log('====', config_id);
            var dynamic_Id = '#' + config_id;
            $(dynamic_Id).modal('show');
        });
    });
    //
    function showCustomAlert(button) {
        var shiftId = button.getAttribute('data-conf-id');
        console.log(shiftId);
        console.log("Hii");
        Swal.fire({
            title: 'Delete Confirmation',
            text: 'Are you sure you want to delete this data?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'OK'
        }).then((result) => {
            if (result.isConfirmed) {
                var formAction = "{{ route('Employee-Configurations.destroy', ':shiftId') }}".replace(':shiftId',
                    shiftId);
                document.getElementById('deleteForm').action = formAction;
                document.getElementById('deleteForm').submit();
            }
        });
    }
</script>
<div class="fr-section" style="margin-top: -72px">
    <div class="fr-section_detail ">
        <div class="dashboard_innerPages">
            <div class="custom_tabs_section">
                <div class="custom_tittle descriptionTxt">
                    <h4>Master</h4>
                    <p><strong>Description:</strong> Keep track of all company master details including employee
                        designations, shift information, category of employees, and <br> their configurations. Also
                        able to oversee leave master with holiday details.</p>
                </div>
                <div class="custom_tabs">
                    <ul>
                        <li><a href="{{ route('Master.index') }}">Company</a></li>
                        <li><a href="{{ route('Department.index') }}">Department</a></li>
                        <li><a href="{{ route('Designation.index') }}">Designation</a></li>
                        <li><a href="{{ route('shift_master.index') }}">Shift Master Daily</a></li>
                        <li><a href="{{ route('Category.index') }}">Category</a></li>
                        <li><a href="{{ route('Employee-Master.index') }}">Employee Master</a></li>
                        <li><a href="{{ route('Employee-Configurations.index') }}" class="active">Employee
                                Configuration</a></li>
                        <li><a href="{{ url('/Employee/Mastery-data') }}">Import/Export - Excel</a></li>
                        <li><a href="{{ route('Leave.index') }}">Leave</a></li>
                        <li><a href="{{ route('Holiday.index') }}">Holiday</a></li>
                    </ul>
                </div>
                <div class="custom_tabs_data" id="tab7" style="display: block;">
                    <div class="masterTab_bg">
                        <div class="masterTab_data">
                            <div class="custom_tittle">
                                <h5>Employee Configuration</h5>
                            </div>
                            <div class="masterTable empMasterTable empConfigTable">
                                <div class="row">

                                    <div class="col-xxl-12" style="margin-top:44px">
                                        <div class="masterTable_data">
                                            <div class="sorting_nav" style="margin-left: 165px;margin-bottom: -46px">
                                                <div class="showSort">
                                                    <div class="allSelect">
                                                        <strong class="entitiesSelect">Select Company</strong>
                                                        <div class="showSort_select seleComp">
                                                            {{-- <select class="fav_show">
                                                                <option value="Yes">Yes</option>
                                                                <option value="No">No</option>
                                                            </select> --}}
                                                            <select id="companyName" class="form-select me-3" name="company" aria-label="First select example" onchange="fetchDepartments()">
                                                                <option selected disabled>Select Company</option>
                                                                    @isset($companies)
                                                                        @foreach($companies as $company)
                                                                            <option value="{{ $company->id }}">{{$company->company_name }}</option>
                                                                        @endforeach
                                                                    @endisset
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="allSelect">
                                                        <strong class="entitiesSelect">Select Department</strong>
                                                        <div class="showSort_select seleComp">
                                                            {{-- <select class="fav_show">
                                                                <option value="Yes">Yes</option>
                                                                <option value="No">No</option>
                                                            </select> --}}
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
                                                                                {{ $department->department_name }}
                                                                            </option>
                                                                        @endforeach
                                                                    @endisset
                                                                </select>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <div class="filterBtn">
                                                        <div class="table_actionsBtns">
                                                            <button class="tb_actionBtn">Apply Filter</button>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <table class="table table-striped" id="employee_config">
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            <h6 class="text-left">Emp Code</h6>
                                                        </th>
                                                        <th width="110">
                                                            <h6>Name</h6>
                                                        </th>
                                                        <th width="150">
                                                            <h6>Dept. Name</h6>
                                                        </th>
                                                        <th>
                                                            <h6>SMS Allow</h6>
                                                        </th>
                                                        <th>
                                                            <h6>ESS Allow</h6>
                                                        </th>
                                                        <th>
                                                            <h6>Selfie Allow</h6>
                                                        </th>
                                                        <th>
                                                            <h6>Auto Selfie Approval</h6>
                                                        </th>
                                                        <th>
                                                            <h6>Noti. OWN</h6>
                                                        </th>
                                                        <th>
                                                            <h6>Noti. Admin</h6>
                                                        </th>
                                                        <th>
                                                            <h6>Action</h6>
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @forelse ($EmpConfig as $emp)
                                                        <tr>
                                                            <td>
                                                                <div class="tabletext">
                                                                    <p>{{ $emp->Emp_code }}</p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="tabletext">
                                                                    <p>{{ $emp->Emp_name }}</p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="tabletext">
                                                                    <p>{{ $emp->department }}</p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="tabletext">
                                                                    <p>{{ $emp->send_sms_allow }}</p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="tabletext">
                                                                    <p>{{ $emp->employee_self_service_allow }}</p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="tabletext">
                                                                    <p>{{ $emp->selfie_punch_allow }}</p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="tabletext">
                                                                    <p>{{ $emp->approve_selfie_punch }}</p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="tabletext">
                                                                    <p>{{ $emp->notification_to_own }}</p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="tabletext">
                                                                    <p>{{ $emp->notification_to_admin }}</p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="actionBtns">
                                                                    <button class="actBtn edit_company"
                                                                        id="config_button" data-toggle="modal"
                                                                        data-target ="#confg_id"
                                                                        data-config-id = "config_id_{{ $emp->id }}"><i
                                                                            class="fa fa-pencil-square-o"
                                                                            aria-hidden="true"></i></button>
                                                                    {{-- <button class="actBtn"><i class="fa fa-trash"
                                                                            aria-hidden="true"></i></button> --}}
                                                                    <form id = "deleteForm"
                                                                        action="{{ route('Employee-Configurations.destroy', $emp->id) }}"
                                                                        method="post">
                                                                        @csrf
                                                                        @method('delete')
                                                                        <button type="button"
                                                                            class="actBtn delete_shift"
                                                                            data-conf-id="{{ $emp->id }}"
                                                                            onclick="showCustomAlert(this)">
                                                                            <i class="fa fa-trash"
                                                                                aria-hidden="true"></i>
                                                                        </button>
                                                                    </form>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    @empty
                                                        <p style="color:red;margin-top: -120px">Oops ! No Records Found
                                                            <?xml version="1.0" standalone="no"?>
                                                            <!DOCTYPE svg
                                                                PUBLIC "-//W3C//DTD SVG 20010904//EN" "http://www.w3.org/TR/2001/REC-SVG-20010904/DTD/svg10.dtd">
                                                            <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                                                                width="40.000000pt" height="40.000000pt"
                                                                viewBox="0 0 240.000000 240.000000"
                                                                preserveAspectRatio="xMidYMid meet">

                                                                <g transform="translate(0.000000,240.000000) scale(0.100000,-0.100000)"
                                                                    fill="#000000" stroke="none">
                                                                    <path d="M920 1969 c-119 -11 -322 -45 -418 -69 -70 -17 -73 -17 -82 0 -13 24
                                                                -50 16 -43 -10 4 -14 -2 -21 -21 -26 -14 -3 -26 -12 -26 -18 0 -7 27 -104 59
                                                                -217 32 -112 64 -223 70 -246 11 -40 12 -41 42 -33 36 11 26 33 109 -251 56
                                                                -196 64 -216 82 -211 12 3 18 11 15 21 -2 9 -32 114 -67 234 -52 178 -61 220
                                                                -50 227 17 11 203 46 325 61 50 6 178 12 285 12 107 0 236 -6 285 -12 122 -15
                                                                308 -50 325 -61 11 -7 2 -49 -50 -227 -35 -120 -65 -226 -68 -235 -3 -13 2
                                                                -18 16 -18 23 0 17 -16 98 260 31 107 58 198 60 202 3 3 18 3 34 -2 29 -8 30
                                                                -7 41 33 6 23 38 134 70 246 32 113 59 210 59 217 0 6 -12 15 -26 18 -19 5
                                                                -25 12 -21 26 7 26 -30 34 -43 10 -9 -17 -12 -17 -82 0 -101 26 -301 57 -438
                                                                70 -134 12 -404 11 -540 -1z m171 -128 c22 -17 24 -29 27 -116 2 -52 1 -107
                                                                -2 -120 -14 -56 -119 -70 -151 -21 -23 34 -41 199 -27 231 21 46 110 61 153
                                                                26z m227 3 c18 -12 22 -25 22 -70 0 -61 -22 -94 -64 -94 -26 0 -36 -21 -36
                                                                -82 0 -37 -1 -38 -35 -35 l-35 2 0 101 c0 56 -3 122 -6 148 l-7 46 69 0 c47 0
                                                                77 -5 92 -16z m201 -9 c30 -15 41 -33 41 -65 0 -25 -15 -33 -50 -25 -23 5 -30
                                                                12 -30 31 0 13 -4 24 -10 24 -5 0 -10 -2 -10 -4 0 -2 -2 -11 -5 -18 -3 -8 14
                                                                -34 41 -61 45 -46 46 -49 41 -94 -7 -62 -36 -87 -90 -80 -53 7 -77 31 -77 79
                                                                0 37 1 38 35 38 33 0 35 -2 35 -36 0 -21 4 -33 10 -29 23 14 9 55 -31 93 -37
                                                                34 -41 44 -41 83 1 32 6 48 23 61 26 22 80 23 118 3z m-664 -27 c21 -19 27
                                                                -38 39 -118 8 -57 11 -103 5 -117 -12 -32 -64 -56 -104 -49 -42 8 -58 33 -78
                                                                121 -28 120 -26 140 16 165 43 27 90 26 122 -2z m839 -8 c4 -5 -5 -52 -20
                                                                -107 -25 -84 -32 -98 -52 -101 -13 -2 -25 3 -28 12 -5 14 11 172 21 203 4 13
                                                                62 8 79 -7z m-56 -249 c-2 -22 -8 -26 -33 -26 -21 0 -31 5 -33 18 -7 33 4 44
                                                                38 39 27 -4 31 -8 28 -31z" />
                                                                    <path d="M1015 1733 c8 -94 15 -136 23 -129 6 7 4 128 -4 174 -4 17 -11 32
                                                                -16 32 -6 0 -7 -29 -3 -77z" />
                                                                    <path d="M1250 1776 c0 -20 5 -36 10 -36 6 0 10 13 10 29 0 17 -4 33 -10 36
                                                                -6 4 -10 -8 -10 -29z" />
                                                                    <path d="M780 1756 c0 -28 28 -167 35 -175 15 -14 15 17 0 98 -16 88 -35 129
                                                                -35 77z" />
                                                                    <path d="M1050 1057 c-63 -33 -62 -51 2 -22 29 14 61 25 71 25 9 0 17 5 17 10
                                                                0 17 -45 11 -90 -13z" />
                                                                    <path d="M1260 1071 c0 -6 8 -11 18 -11 9 0 41 -11 70 -25 59 -27 70 -18 17
                                                                15 -40 25 -105 38 -105 21z" />
                                                                    <path d="M1061 994 c-40 -50 -17 -138 29 -114 27 14 40 42 40 82 0 60 -35 75
                                                                -69 32z" />
                                                                    <path d="M1282 1008 c-15 -15 -16 -72 -2 -98 6 -11 19 -24 30 -30 46 -24 69
                                                                64 29 114 -22 28 -39 32 -57 14z" />
                                                                    <path d="M1135 706 c-16 -7 -39 -23 -49 -35 l-19 -21 34 17 c46 24 152 24 198
                                                                0 l34 -17 -19 21 c-40 46 -120 61 -179 35z" />
                                                                </g>
                                                            </svg>
                                                        </p>
                                                    @endforelse
                                                </tbody>
                                            </table>
                                            @foreach ($EmpConfig as $emp)
                                                <div class="modal fade" id="config_id_{{ $emp->id }}"
                                                    tabindex="-1" role="dialog" aria-hidden="true"
                                                    style="top: 38px;left: -186px">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content" style="width: 173%;">
                                                            <div class="modal-header"
                                                                style="background-color: #BCBCBC;">
                                                                <h6 style="padding-bottom: 0px;margin-left: 310px;">
                                                                    Edit Selected Department</h6>
                                                                <button type="button" class="close"
                                                                    data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                                @if ($errors->any())
                                                                    <div class="alert alert-danger">
                                                                        <ul>
                                                                            @foreach ($errors->all() as $error)
                                                                                <li>{{ $error }}</li>
                                                                            @endforeach
                                                                        </ul>
                                                                    </div>
                                                                @endif
                                                            </div>
                                                            <div class="modal-body" style="background-color: #ededed">
                                                                <form method="post" id="skills"
                                                                    action="{{ route('Employee-Configurations.update', $emp->id) }}">
                                                                    @csrf
                                                                    @method('patch')
                                                                    <div class="row">
                                                                        {{-- <hr style="border: -1px solid black; width: 97%;"> --}}
                                                                        <div class="col-6">
                                                                            <div class="popupForm_col">
                                                                                <strong>Company Name*</strong>
                                                                                <div class="popupForm_field">
                                                                                    <select name="company_id"
                                                                                        class="selective">
                                                                                        @foreach ($companies as $id)
                                                                                            <option value="{{ $id->id }}"
                                                                                                @if ($id->id == $emp->company_id) selected @endif>
                                                                                                {{ $id->company_name }}
                                                                                            </option>
                                                                                        @endforeach
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-6">
                                                                            <div class="popupForm_col">
                                                                                <strong>Department Name*</strong>
                                                                                <div class="popupForm_field">
                                                                                    <select name="dept_id"
                                                                                        class="selective">
                                                                                        @foreach ($departments as $id)
                                                                                            <option value="{{ $id->id }}"
                                                                                                @if ($id->id == $emp->dept_id) selected @endif>
                                                                                                {{ $id->department_name }}
                                                                                            </option>
                                                                                        @endforeach
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        {{-- // --}}
                                                                        <div class="col-6">
                                                                            <div class="popupForm_col">
                                                                                <strong>Employee code*</strong>
                                                                                <div class="popupForm_field">
                                                                                    <select name="shift_code"
                                                                                        class="selective">
                                                                                        @foreach ($employees as $id)
                                                                                            <option
                                                                                                value="{{ $id->id }}"
                                                                                                @if ($id->id == $emp->id) selected @endif>
                                                                                                {{ $id->employee_code }}
                                                                                            </option>
                                                                                        @endforeach
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        {{-- // --}}
                                                                        <div class="col-6">
                                                                            <div class="popupForm_col">
                                                                                <strong>Employee Name*</strong>
                                                                                <div class="popupForm_field">
                                                                                    <select name="shift_name"
                                                                                        class="selective">
                                                                                        @foreach ($employees as $shiftname)
                                                                                            <option
                                                                                                value="{{ $shiftname->employee_name }}"@if ($shiftname->employee_name == $emp->Emp_name) selected @endif>
                                                                                                {{ $shiftname->employee_name }}
                                                                                            </option>
                                                                                        @endforeach
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <br><br>
                                                                        <hr
                                                                            style="border: -1px solid black; width: 97%;">
                                                                        <div class="tabletext"
                                                                            style="display:flex; margin-left:300px;">
                                                                            <input type="checkbox" name="send_sms"
                                                                                value="{{ $emp->send_sms_allow }}"
                                                                                @if ($emp->send_sms_allow == 'on') checked @endif>
                                                                            <h8 class="pl-3">Send SMS Allow</h8>
                                                                        </div><br>
                                                                        <div class="tabletext"
                                                                            style="display:flex; margin-left:300px;">
                                                                            <input type="checkbox" name="self_service"
                                                                                value="{{ $emp->employee_self_service_allow }}"
                                                                                @if ($emp->employee_self_service_allow == 'on') checked @endif>
                                                                            <h8 class="pl-3">Employee Self Service
                                                                                Portal Allow</h8>
                                                                        </div><br>
                                                                        <div class="tabletext"
                                                                            style="display:flex; margin-left:300px;">
                                                                            <input type="checkbox" name="selfie_punch"
                                                                                value="{{ $emp->selfie_punch_allow }}"
                                                                                @if ($emp->selfie_punch_allow == 'on') checked @endif>
                                                                            <h8 class="pl-3">Selfie Punch Allow</h8>
                                                                        </div><br>
                                                                        <div class="tabletext"
                                                                            style="display:flex; margin-left:300px;">
                                                                            <input type="checkbox"
                                                                                name="selfie_approve"
                                                                                value="{{ $emp->approve_selfie_punch }}"
                                                                                @if ($emp->approve_selfie_punch == 'on') checked @endif>
                                                                            <h8 class="pl-3">Approve Selfie Punch
                                                                                Auto</h8>
                                                                        </div><br>
                                                                        <hr
                                                                            style="border: -1px solid black; width: 97%;">
                                                                        <div class="tabletext"
                                                                            style="display:flex; margin-left:300px;">
                                                                            <input type="checkbox"
                                                                                name="notification_allow"
                                                                                value="{{ $emp->notification_to_own }}"
                                                                                @if ($emp->notification_to_own == 'on') checked @endif>
                                                                            <h8 class="pl-3">Notification to Own</h8>
                                                                        </div><br>
                                                                        <div class="tabletext"
                                                                            style="display:flex; margin-left:300px;">
                                                                            <input type="checkbox"
                                                                                name="Notification_admin"
                                                                                value="{{ $emp->notification_to_admin }}"
                                                                                @if ($emp->notification_to_admin == 'on') checked @endif>
                                                                            <h8 class="pl-3">Notification to Admin
                                                                            </h8>
                                                                        </div><br>

                                                                    </div>
                                                                    {{-- </div> --}}
                                                                    <br>
                                                                    <div class="table_actions"
                                                                        style="margin-left: -105px">
                                                                        <div class="row align-items-center ">
                                                                            <div
                                                                                class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 m-auto ">
                                                                                <div
                                                                                    class="table_actionsBtns justify-content-center">
                                                                                    <button
                                                                                        class="tb_actionBtn">Save</button>
                                                                                    <button class="tb_actionBtn"
                                                                                        data-dismiss="modal">Exit</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                 </div>
                                                                </div>
                                                            </form>
                                                    </div>
                                                </div>
                                        </div>

                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="table_actions">
                        <div class="row align-items-center">
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 ">
                                <div class="table_actionsBtns">
                                    <button class="tb_actionBtn" id="emp_click_modal">Add</button>
                                    <button class="tb_actionBtn">Exit</button>
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
</div>
{{-- add_model --}}
<div class="modal fade" id="create_emp" tabindex="-1" role="dialog" aria-hidden="true"
    style="top: 38px;left: -186px">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="width: 173%;">
            <div class="modal-header" style="background-color: #BCBCBC;">
                <h6 style="padding-bottom: 0px;margin-left: 310px;">Add Employee Configuration</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
            <div class="modal-body" style="background-color: #ededed">
                <form method="post" id="skills" action="{{ route('Employee-Configurations.store') }}">
                    @csrf
                    <div class="row">
                        {{-- <hr style="border: -1px solid black; width: 97%;"> --}}
                        <div class="col-6">
                            <div class="popupForm_col">
                                <strong>Company Name*</strong>
                                <div class="popupForm_field">
                                    <select name="company_id" class="selective">
                                        @foreach ($companies as $id)
                                            <option value="{{ $id->id }}">
                                                {{ $id->company_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="popupForm_col">
                                <strong>Department Name*</strong>
                                <div class="popupForm_field">
                                    <select name="dept_id" class="selective">
                                        @foreach ($departments as $id)
                                            <option value="{{ $id->id }}">
                                                {{ $id->department_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        {{-- // --}}
                        <div class="col-6">
                            <div class="popupForm_col">
                                <strong>Employee code*</strong>
                                <div class="popupForm_field">
                                    <select name="shift_code" class="selective">
                                        @foreach ($employees as $id)
                                            <option value="{{ $id->id }}">
                                                {{ $id->employee_code }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        {{-- // --}}
                        <div class="col-6">
                            <div class="popupForm_col">
                                <strong>Employee Name*</strong>
                                <div class="popupForm_field">
                                    <select name="shift_name" class="selective">
                                        @foreach ($employees as $shiftname)
                                            <option value="{{ $shiftname->employee_name }}">
                                                {{ $shiftname->employee_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <br><br>
                        <hr style="border: -1px solid black; width: 97%;">
                        <div class="tabletext" style="display:flex; margin-left:300px;">
                            <input type="checkbox" name="send_sms" @if (old('send_sms')) checked @endif>
                            <h8 class="pl-3">Send SMS Allow</h8>
                        </div><br>
                        <div class="tabletext" style="display:flex; margin-left:300px;">
                            <input type="checkbox" name="self_service"
                                @if (old('self_service')) checked @endif>
                            <h8 class="pl-3">Employee Self Service Portal Allow</h8>
                        </div><br>
                        <div class="tabletext" style="display:flex; margin-left:300px;">
                            <input type="checkbox" name="selfie_punch"
                                @if (old('selfie_punch')) checked @endif>
                            <h8 class="pl-3">Selfie Punch Allow</h8>
                        </div><br>
                        <div class="tabletext" style="display:flex; margin-left:300px;">
                            <input type="checkbox" name="selfie_approve"
                                @if (old('selfie_approve')) checked @endif>
                            <h8 class="pl-3">Approve Selfie Punch Auto</h8>
                        </div><br>
                        <hr style="border: -1px solid black; width: 97%;">
                        <div class="tabletext" style="display:flex; margin-left:300px;">
                            <input type="checkbox" name="notification_allow"
                                @if (old('notification_allow')) checked @endif>
                            <h8 class="pl-3">Notification to Own</h8>
                        </div><br>
                        <div class="tabletext" style="display:flex; margin-left:300px;">
                            <input type="checkbox" name="Notification_admin"
                                @if (old('Notification_admin')) checked @endif>
                            <h8 class="pl-3">Notification to Admin</h8>
                        </div><br>
                    </div>
                    {{-- </div> --}}
                    <br>
                    <div class="table_actions" style="margin-left: -105px">
                        <div class="row align-items-center ">
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 m-auto ">
                                <div class="table_actionsBtns justify-content-center">
                                    <button class="tb_actionBtn">Save</button>
                                    <button class="tb_actionBtn" data-dismiss="modal">Exit</button>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        </form>
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
                    option.textContent = department.department_name;
                    departmentSelect.appendChild(option);
                });
            })
            .catch(error => console.error('Error fetching departments:', error));
    }

</script>
