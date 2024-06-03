<x-header data="category_config component" />
<link rel="stylesheet" href="{{ asset('css/css/master_tab.css') }}">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.7/dist/sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.7/dist/sweetalert2.all.min.js"></script>
<script>
    $(document).ready(function() {
        $('#category_config').DataTable();
    //
        $('#category_modal').click(function() {
            $('#add_shift').modal('show');
        })
        $('.edit_company').click(function() {
            var Shiftid = $(this).data('dept-id');
            console.log('kkk', Shiftid);
            var $shift_Id = "#" + Shiftid;
            $($shift_Id).modal('show');
        })
    });
    //
    const checkboxes = document.querySelectorAll('input[type="checkbox"]');
    checkboxes.forEach((checkbox) => {
        checkbox.addEventListener('click', () => {
            checkboxes.forEach((cb) => {
                if (cb !== checkbox) {
                    cb.checked = false;
                }
            });
        });
    });
    //alert
    function showCustomAlert(button) {
        var shiftId = button.getAttribute('data-shift-id');
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
                var formAction = "{{ route('Category.destroy', ':shiftId') }}".replace(':shiftId',
                    shiftId);
                document.getElementById('deleteForm').action = formAction;
                document.getElementById('deleteForm').submit();
            }
        });
    }
</script>


<style>
    .modal-body {
        overflow-y: scroll !important;
        height: 514px !important;
    }

    
    .custom_tabs {
        width: 100%;
        border: 0.5px solid #fff;
    }

    .custom_tabs ul li a.active {

        /* background-color: #dddddd; */
        background-color: transparent !important;
        color: #007bff !important;

        border-bottom: 3px solid #007bff !important;
    }

    .custom_tabs ul li a:hover {
        background-color: transparent !important;
        /* background-color: #425056; */
    }

    .custom_tabs ul li a {
        padding: 0 11px !important;
        font-weight: 500 !important;
        font-size: 15px !important;
        color: #555 !important;
    }

    .masterTab_bg {
        background-color: #fff;
        padding: 0px;
        overflow: hidden;
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

    
    /* table */

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

    table.dataTable.no-footer {
        border-bottom: 1px solid #eff5f9 !important;
    }
</style>
<div class="fr-section" style="margin-top: -72px">
    <div class="fr-section_detail ">
        <div class="dashboard_innerPages">
            <div class="custom_tabs_section">
                <div class="custom_tittle descriptionTxt">
                    <h4>Master</h4>
                    <p class="description_small_text"><strong  style="color:#343A40;">Description:</strong> Keep track of all company master details including employee
                        designations, shift information, category of employees, and their configurations. Also
                        able to oversee leave  <br>  master with holiday details.</p>
                </div>
                <div class="custom_tabs">
                    <ul>
                        <li><a href="{{ route('Master.index') }}">Company</a></li>
                        <li><a href="{{ route('Department.index') }}">Department</a></li>
                        <li><a href="{{ route('Designation.index') }}">Designation</a></li>
                        <li><a href="{{ route('shift_master.index') }}">Shift Master Daily</a></li>
                        <li><a href="{{ route('Category.index') }}" class="active">Category</a></li>
                        <li><a href="{{ route('Employee-Master.index') }}">Employee Master</a></li>
                        <li><a href="{{ route('Employee-Configurations.index') }}">Employee Configuration</a></li>
                        <li><a href="{{ url('/Employee/Mastery-data') }}">Import/Export - Excel</a></li>
                        <li><a href="{{ route('Leave.index') }}">Leave</a></li>
                        <li><a href="{{ route('Holiday.index') }}">Holiday</a></li>
                    </ul>
                </div>
                @include('sweetalert::alert')
                @if (Session::has('message'))
                    <div class="alert alert-success" style="margin-top: 12px;" id="success-message">
                        <span style="margin-left:330px">{{ Session::get('message') }}</span>
                        <script>
                            setTimeout(function() {
                                document.getElementById('success-message').style.display = 'none';
                            }, 3000);
                        </script>
                    </div>
                @endif
                @if (Session::has('danger'))
                    <div class="alert alert-danger" style="margin-top: 12px;" id="danger-message">
                        <span style="margin-left:330px">{{ Session::get('danger') }}</span>
                        <script>
                            setTimeout(function() {
                                document.getElementById('danger-message').style.display = 'none';
                            }, 3000);
                        </script>
                    </div>
                @endif
                <div class="custom_tabs_data" id="tab5" style="display: block;">
                    <div class="masterTab_bg">
                        <div class="masterTab_data">
                            <div class="custom_tittle">
                                <h5>Category Master</h5>
                            </div>
                            <div class="masterTable">
                                <div class="row">
                                    <div class="col-xl-12 ">
                                        <div class="masterTable_data">
                                            <div class="sorting_nav" style="margin-left: 165px;margin-bottom: -46px">
                                                <div class="showSort">
                                                    <div class="allSelect">
                                                        <strong class="entitiesSelect">Select Company</strong>
                                                        <div class="showSort_select seleComp">
                                                            <select id="companyName" name="company_desig"
                                                                    aria-label="First select example" onchange="fetchDepartments()">
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
                                                        </div>
                                                    </div>
                                                    <div class="filterBtn">
                                                        <div class="table_actionsBtns">
                                                            <button class="tb_actionBtn">Apply Filter</button>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <table class="table table-bordered text-center tracking-table" id="category_config">
                                                <thead>
                                                    <tr>
                                                        <td class="align-middle" style="font-size: 13px;">
                                                            Category ID
                                                        </td>
                                                        <td class="align-middle" style="font-size: 13px;">
                                                            Category Name
                                                        </td>
                                                        <td class="align-middle" style="font-size: 13px;">
                                                            Early Arrival Allow
                                                        </td>
                                                        <td class="align-middle" style="font-size: 13px;">
                                                           Max. OT Allow
                                                        </td>
                                                        <td class="align-middle" style="font-size: 13px;">
                                                         Action
                                                        </td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @forelse($category as $catgry)
                                                        <tr>
                                                            <td>
                                                                <div class="tabletext">
                                                                    <p>{{$catgry->category_id}}</p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="tabletext">
                                                                    <p>{{$catgry->category_name}}</p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="tabletext">
                                                                    <p>{{$catgry->early_arrival_allow}}</p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="tabletext">
                                                                    <p>{{$catgry->Max_time_to_allow}}</p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="actionBtns">
                                                                    <button class="actBtn edit_company"
                                                                        id="shift_edit_button" data-toggle="modal"
                                                                        data-target="#edit_shift"
                                                                        data-dept-id="edit_shift_{{ $catgry->id }}">
                                                                        <i class="fa fa-pencil-square-o"
                                                                            aria-hidden="true"></i>
                                                                    </button>
                                                                    <form id = "deleteForm"
                                                                        action="{{ route('Category.destroy', $catgry->id) }}"
                                                                        method="post">
                                                                        @csrf
                                                                        @method('delete')
                                                                        <button type="button"
                                                                            class="actBtn delete_shift"
                                                                            data-shift-id="{{ $catgry->id }}"
                                                                            onclick="showCustomAlert(this)">
                                                                            <i class="fa fa-trash"
                                                                                aria-hidden="true"></i>
                                                                        </button>
                                                                    </form>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        {{-- //edit --}}
                                                        <div class="modal fade edit" id="edit_shift_{{ $catgry->id }}" tabindex="-1" role="dialog" aria-hidden="true"
                                                        style="top:37px;">
                                                        <div class="modal-dialog" role="document">
                                                            {{-- <div class="modal-content" style="width: 173%;"> --}}
                                                            <div class="modal-content" style="width: 252%;left: -380px">
                                                                <div class="modal-header" style="background-color: #BCBCBC;">
                                                                    <h6 style="padding-bottom: 0px;margin-left: 500px;">Add Category Details Here</h6>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body" style="background-color: #ededed">
                                                                    <form method="post" id="skills" action="{{ route('Category.update', $catgry->id) }}">
                                                                        @csrf
                                                                        @method('patch')
                                                                        <div class="row">
                                                                            <div class="col-6">
                                                                                <div class="popupForm_col">
                                                                                    <strong>Category Id*</strong>
                                                                                    <div class="popupForm_field">
                                                                                        <input type="text" name="category_id" value="{{$catgry->category_id}}">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            {{-- // --}}
                                                                            <div class="col-6">
                                                                                <div class="popupForm_col">
                                                                                    <strong>Category Name*</strong>
                                                                                    <div class="popupForm_field">
                                                                                        <input type="text" name="category_name" value="{{$catgry->category_name}}">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-8" style="flex: 2 1 72.666667%;max-width: 100.666667%;">
                                                                                <div class="addCategory_column">
                                                                                    <div class="row">
                                                                                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 ">
                                                                                            <div class="addCategory_colInfo">
                                                                                                <div class="addCategory_colList">
                                                                                                    <ul>
                                                                                                        <li>
                                                                                                            <div class="addCategory_colListInfo">
                                                                                                                <strong>Early Arrival Allow</strong>
                                                                                                                <div class="shitInput">
                                                                                                                    <input type="time"  name="early_bird" value="{{$catgry->early_arrival_allow}}">
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </li>

                                                                                                        <li>
                                                                                                            <div class="addCategory_colListInfo">
                                                                                                                <strong>Max. OT Allow</strong>
                                                                                                                <div class="shitInput">
                                                                                                                    <input type="time" name="Max_OT_allow" value="{{$catgry->Max_time_to_allow}}">
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </li>
                                                                                                    </ul>
                                                                                                </div>
                                                                                                <div class="hoursRange_sec">
                                                                                                    <div class="hoursRange_sec_info">
                                                                                                        <label>OT Hours Range For Half C.off</label>
                                                                                                        <div class="hoursRange_sec_row pb-3">
                                                                                                            <div class="addCategory_colListInfo">
                                                                                                                <strong>From</strong>
                                                                                                                <div class="shitInput">
                                                                                                                    <input type="time" name="OT_range_half_from" value="{{$catgry->OT_half_From}}">
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="addCategory_colListInfo">
                                                                                                                <strong>To</strong>
                                                                                                                <div class="shitInput">
                                                                                                                    <input type="time" name="OT_range_half_to" value="{{$catgry->OT_half_To}}">
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="hoursRange_sec_info">
                                                                                                        <label>OT Hours Range For Full C.off</label>
                                                                                                        <div class="hoursRange_sec_row ">
                                                                                                            <div class="addCategory_colListInfo">
                                                                                                                <strong>From</strong>
                                                                                                                <div class="shitInput">
                                                                                                                    <input type="time" name="OT_range_hals_c_From" value="{{$catgry->OT_full_from}}">
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="addCategory_colListInfo">
                                                                                                                <strong>To</strong>
                                                                                                                <div class="shitInput">
                                                                                                                    <input type="time" name="OT_range_hals_c_off_To" value="{{$catgry->OT_full_To}}">
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="hoursRange_sec_info applyFor">
                                                                                                    <label>Apply for</label>
                                                                                                    <div>
                                                                                                        <ul>
                                                                                                            <li>
                                                                                                                <div class="tableCheckbox lunchCheck">
                                                                                                                    <label class="checkbox-label">
                                                                                                                        <input type="checkbox" name="work_day" @if($catgry->work_day == 'week_day') checked @endif>
                                                                                                                        <span class="checkbox-custom rectangular"></span>
                                                                                                                    </label>
                                                                                                                    Work Days
                                                                                                                </div>
                                                                                                            </li>
                                                                                                            <li>
                                                                                                                <div class="tableCheckbox lunchCheck">
                                                                                                                    <label class="checkbox-label">
                                                                                                                        <input type="checkbox" name="week_off" @if($catgry->work_day == 'week_off') checked @endif>
                                                                                                                        <span class="checkbox-custom rectangular"></span>
                                                                                                                    </label>
                                                                                                                    Week off
                                                                                                                </div>
                                                                                                            </li>
                                                                                                            <li>
                                                                                                                <div class="tableCheckbox lunchCheck">
                                                                                                                    <label class="checkbox-label">
                                                                                                                        <input type="checkbox" name="holidays" @if($catgry->work_day == 'holidays') checked @endif>
                                                                                                                        <span class="checkbox-custom rectangular"></span>
                                                                                                                    </label>
                                                                                                                    Holidays
                                                                                                                </div>
                                                                                                            </li>
                                                                                                        </ul>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 ">
                                                                                            <div class="addCategory_colInfo secndCol">
                                                                                                <div class="addCategory_colList">
                                                                                                    <ul>
                                                                                                        <li>
                                                                                                            <div class="addCategory_colListInfo">
                                                                                                                <strong>Early Arrival Ignore</strong>
                                                                                                                <div class="shitInput">
                                                                                                                    <input type="time" name="Early_arraival" value="{{$catgry->early_arraival_ignore}}">
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </li>

                                                                                                        <li>
                                                                                                            <div class="addCategory_colListInfo">
                                                                                                                <strong>Late Arrival Allow</strong>
                                                                                                                <div class="shitInput">
                                                                                                                    <input type="time" name="Late_arraival" value="{{$catgry->Late_arraival_allow}}">
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </li>
                                                                                                        <li>
                                                                                                            <div class="addCategory_colListInfo">
                                                                                                                <strong>Early Departure Allow</strong>
                                                                                                                <div class="shitInput">
                                                                                                                    <input type="time" name="Early_departure" value="{{$catgry->Early_depature_allow}}">
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </li>
                                                                                                        <li>
                                                                                                            <div class="addCategory_colListInfo">
                                                                                                                <strong>Late Departure Ignore</strong>
                                                                                                                <div class="shitInput">
                                                                                                                    <input type="time" name="late_depature_ignore" value="{{$catgry->Late_depature_ignore}}">
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </li>
                                                                                                        <li>
                                                                                                            <div class="addCategory_colListInfo">
                                                                                                                <strong>OverTime Ignore</strong>
                                                                                                                <div class="shitInput">
                                                                                                                    <input type="time" name="OT_ignore" value="{{$catgry->OT_ignore}}">
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </li>
                                                                                                        <li>
                                                                                                            <div class="addCategory_colListInfo timeSelect">
                                                                                                                <strong>Select No. of Late Arraival(dates)/month</strong>
                                                                                                                <div class="auth_select_info ">
                                                                                                                    <select name="no_of_late">
                                                                                                                        <option @if($catgry->select_no_of_late == 5) selected @endif>5</option>
                                                                                                                        <option @if($catgry->select_no_of_late == 10) selected @endif>10</option>
                                                                                                                        <option @if($catgry->select_no_of_late == 15) selected @endif>15</option>
                                                                                                                    </select>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </li>
                                                                                                        <li>
                                                                                                            <div class="addCategory_colListInfo timeSelect lateAction">
                                                                                                                <strong>Late Action</strong>
                                                                                                                <div class="auth_select_info">
                                                                                                                    <select name="Absent">
                                                                                                                        <option value="Half Absent" {{ $catgry->Absent == 'Half Absent' ? 'selected' : '' }}>Half Absent</option>
                                                                                                                        <option value="Full Absent" {{ $catgry->Absent == 'Full Absent' ? 'selected' : '' }}>Full Absent</option>
                                                                                                                    </select>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </li>
                                                                                                    </ul>
                                                                                                </div>

                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 ">
                                                                                            <div class="addCategory_colInfo ">
                                                                                                <div class="addCategory_colList">
                                                                                                    <ul>
                                                                                                        <li>
                                                                                                            <div class="addCategory_colListInfo">
                                                                                                                <strong>Half Day If Late Hours Greater Than</strong>
                                                                                                                <div class="shitInput">
                                                                                                                    <input type="time" name="half_late_hours" value="{{$catgry->halfday_if_late_hours_greater_than}}">
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </li>
                                                                                                        <li>
                                                                                                            <div class="addCategory_colListInfo">
                                                                                                               <strong>Half Day If Work Hrs Less Than</strong>
                                                                                                                <div class="shitInput">
                                                                                                                    <input type="time" name="half_less_hours" value="{{$catgry->halfday_if_Work_hours_less_than}}">
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </li>
                                                                                                        <li>
                                                                                                            <div class="addCategory_colListInfo">
                                                                                                                <strong>Absent If Late Hrs Greater Than</strong>
                                                                                                                <div class="shitInput">
                                                                                                                    <input type="time" name="Absent_after_hours" value="{{$catgry->absent_if_Work_hours_less_than}}">
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </li>
                                                                                                        {{-- <li>
                                                                                                            <div class="addCategory_colListInfo">
                                                                                                                <strong>Absent If Work Hours Less Than</strong>
                                                                                                                <div class="shitInput">
                                                                                                                    <input type="text" name="Absent_after_hours" value="{{old('Absent_after_hours')}}">
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </li> --}}
                                                                                                        <li>
                                                                                                            <div class="addCategory_colListInfo">
                                                                                                                <strong>Shift Hrs For OT Calculation</strong>
                                                                                                                <div class="shitInput">
                                                                                                                    <input type="time" name="ot_calculations" value="{{$catgry->ot_calculations}}">
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </li>
                                                                                                        <li>
                                                                                                            <div class="addCategory_colListInfo">
                                                                                                                <strong>OverTime Payment Multiplyer</strong>
                                                                                                                <div class="shitInput">
                                                                                                                    <input type="time" name="ot_payment_multiplayer" value="{{$catgry->OT_payment_multiplyaer}}">
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </li>

                                                                                                    </ul>
                                                                                                </div>
                                                                                                <div class="allIn">
                                                                                                    <ul>
                                                                                                        <li>
                                                                                                            <div class="allInRadio_btn">
                                                                                                                <label>
                                                                                                                    <input type="radio" name="all" value="All_in" @if($catgry->all_in_first_in == 'All_in') checked @endif>
                                                                                                                    All IN/OUT
                                                                                                                </label>
                                                                                                            </div>
                                                                                                        </li>
                                                                                                        <li>
                                                                                                            <div class="allInRadio_btn">
                                                                                                                <label>
                                                                                                                    <input type="radio" name="all"  value="First_in" @if($catgry->all_in_first_in == 'First_in') checked @endif>
                                                                                                                    First IN Last OUT
                                                                                                                </label>
                                                                                                            </div>
                                                                                                        </li>
                                                                                                    </ul>
                                                                                                </div>

                                                                                                <div class="hoursRange_sec_info applyFor">
                                                                                                    <div>
                                                                                                        <ul>
                                                                                                            <li>
                                                                                                                <div class="tableCheckbox lunchCheck">
                                                                                                                    <label class="checkbox-label">
                                                                                                                        <input type="checkbox" name="wo_lapse"  value="on" @if($catgry->WO_Lapse_on_previous_and_next_absent == 'on') checked @endif>
                                                                                                                        <span class="checkbox-custom rectangular"></span>
                                                                                                                    </label>
                                                                                                                    WO Lapse on Previous And Next Absent
                                                                                                                </div>
                                                                                                            </li>
                                                                                                        </ul>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <br>
                                                                        <div class="table_actions">
                                                                            <div class="row align-items-center ">
                                                                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 m-auto ">
                                                                                    <div class="table_actionsBtns justify-content-center">
                                                                                        <button class="tb_actionBtn">Save</button>
                                                                                        <button class="tb_actionBtn" data-dismiss="modal">Exit</button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @empty
                                                        <p style="color:red;margin-top: -120px">Oops ! No Records Found
                                                            Category
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
                                            {{-- //edit --}}
                                            {{-- @foreach ( as )
                                            @endforeach --}}
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="table_actions">
                                <div class="row align-items-center">
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 ">
                                        <div class="table_actionsBtns">
                                            <button class="tb_actionBtn" id="category_modal">Add</button>
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
{{-- //add_modal --}}
<div class="modal fade" id="add_shift" tabindex="-1" role="dialog" aria-hidden="true"
    style="top:37px;">
    <div class="modal-dialog" role="document">
        {{-- <div class="modal-content" style="width: 173%;"> --}}
        <div class="modal-content" style="width: 252%;left: -380px">
            <div class="modal-header" style="background-color: #BCBCBC;">
                <h6 style="padding-bottom: 0px;margin-left: 500px;">Add New Category Details Here</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="background-color: #ededed">
                <form method="post" id="skills" action="{{ route('Category.store') }}">
                    @csrf
                    <div class="row">
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
                                        @foreach ($department as $id)
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
                                <strong>Category Id*</strong>
                                <div class="popupForm_field">
                                    <input type="text" name="category_id" value="{{ old('category_id') }}">
                                </div>
                            </div>
                        </div>
                        {{-- // --}}
                        <div class="col-6">
                            <div class="popupForm_col">
                                <strong>Category Name*</strong>
                                <div class="popupForm_field">
                                    <input type="text" name="category_name" value="{{ old('category_name') }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8" style="flex: 2 1 72.666667%;max-width: 100.666667%;">
                            <div class="addCategory_column">
                                <div class="row">
                                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 ">
                                        <div class="addCategory_colInfo">
                                            <div class="addCategory_colList">
                                                <ul>
                                                    <li>
                                                        <div class="addCategory_colListInfo">
                                                            <strong>Early Arrival Allow</strong>
                                                            <div class="shitInput">
                                                                <input type="time"  name="early_bird" value="{{old('early_bird')}}">
                                                            </div>
                                                        </div>
                                                    </li>

                                                    <li>
                                                        <div class="addCategory_colListInfo">
                                                            <strong>Max. OT Allow</strong>
                                                            <div class="shitInput">
                                                                <input type="time" name="Max_OT_allow" value="{{old('Max_OT_allow')}}">
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="hoursRange_sec">
                                                <div class="hoursRange_sec_info">
                                                    <label>OT Hours Range For Half C.off</label>
                                                    <div class="hoursRange_sec_row pb-3">
                                                        <div class="addCategory_colListInfo">
                                                            <strong>From</strong>
                                                            <div class="shitInput">
                                                                <input type="time" name="OT_range_half_from" value="{{old('OT_range_half_from')}}">
                                                            </div>
                                                        </div>
                                                        <div class="addCategory_colListInfo">
                                                            <strong>To</strong>
                                                            <div class="shitInput">
                                                                <input type="time" name="OT_range_half_to" value="{{old('OT_range_half_to')}}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="hoursRange_sec_info">
                                                    <label>OT Hours Range For Full C.off</label>
                                                    <div class="hoursRange_sec_row ">
                                                        <div class="addCategory_colListInfo">
                                                            <strong>From</strong>
                                                            <div class="shitInput">
                                                                <input type="time" name="OT_range_hals_c_From" value="{{old('OT_range_hals_c_From')}}">
                                                            </div>
                                                        </div>
                                                        <div class="addCategory_colListInfo">
                                                            <strong>To</strong>
                                                            <div class="shitInput">
                                                                <input type="time" name="OT_range_hals_c_off_To" value="{{old('OT_range_hals_c_off_To')}}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="hoursRange_sec_info applyFor">
                                                <label>Apply for</label>
                                                <div>
                                                    <ul>
                                                        <li>
                                                            <div class="tableCheckbox lunchCheck">
                                                                <label class="checkbox-label">
                                                                    <input type="checkbox" name="work_day" value="on">
                                                                    <span class="checkbox-custom rectangular"></span>
                                                                </label>
                                                                Work Days
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="tableCheckbox lunchCheck">
                                                                <label class="checkbox-label">
                                                                    <input type="checkbox" name="week_off" value="on">
                                                                    <span class="checkbox-custom rectangular"></span>
                                                                </label>
                                                                Week off
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="tableCheckbox lunchCheck">
                                                                <label class="checkbox-label">
                                                                    <input type="checkbox" name="holidays" value="on">
                                                                    <span class="checkbox-custom rectangular"></span>
                                                                </label>
                                                                Holidays
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 ">
                                        <div class="addCategory_colInfo secndCol">
                                            <div class="addCategory_colList">
                                                <ul>
                                                    <li>
                                                        <div class="addCategory_colListInfo">
                                                            <strong>Early Arrival Ignore</strong>
                                                            <div class="shitInput">
                                                                <input type="time" name="Early_arraival" value="{{old('Early_arraival')}}">
                                                            </div>
                                                        </div>
                                                    </li>

                                                    <li>
                                                        <div class="addCategory_colListInfo">
                                                            <strong>Late Arrival Allow</strong>
                                                            <div class="shitInput">
                                                                <input type="time" name="Late_arraival" value="{{old('Late_arraival')}}">
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="addCategory_colListInfo">
                                                            <strong>Early Departure Allow</strong>
                                                            <div class="shitInput">
                                                                <input type="time" name="Early_departure" value="{{old('Early_departure')}}">
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="addCategory_colListInfo">
                                                            <strong>Late Departure Ignore</strong>
                                                            <div class="shitInput">
                                                                <input type="time" name="late_depature_ignore" value="{{old('late_departure')}}">
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="addCategory_colListInfo">
                                                            <strong>OverTime Ignore</strong>
                                                            <div class="shitInput">
                                                                <input type="time" name="OT_ignore" value="{{old('OT_ignore')}}">
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="addCategory_colListInfo timeSelect">
                                                            <strong>Select No. of Late Arraival(dates)/month</strong>
                                                            <div class="auth_select_info ">
                                                                <select name="no_of_late">
                                                                    <option value="5">5</option>
                                                                    <option value="10">10</option>
                                                                    <option value="15">15</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="addCategory_colListInfo timeSelect lateAction">
                                                            <strong>Late Action</strong>
                                                            <div class="auth_select_info">
                                                                <select name="Absent">
                                                                    <option value="Half Absent" {{ old('Absent') == 'Half Absent' ? 'selected' : '' }}>Half Absent</option>
                                                                    <option value="Full Absent" {{ old('Absent') == 'Full Absent' ? 'selected' : '' }}>Full Absent</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 ">
                                        <div class="addCategory_colInfo ">
                                            <div class="addCategory_colList">
                                                <ul>
                                                    <li>
                                                        <div class="addCategory_colListInfo">
                                                            <strong>Half Day If Late Hours Greater Than</strong>
                                                            <div class="shitInput">
                                                                <input type="time" name="half_late_hours" value="{{old('half_late_hours')}}">
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="addCategory_colListInfo">
                                                       <strong>Half Day If Work Hrs Less Than</strong>
                                                            <div class="shitInput">
                                                                <input type="time" name="half_less_hours" value="{{old('half_less_hours')}}">
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="addCategory_colListInfo">
                                                            <strong>Absent If Late Hrs Greater Than</strong>
                                                            <div class="shitInput">
                                                                <input type="time" name="Absent_after_hours" value="{{old('Absent_after_hours')}}">
                                                            </div>
                                                        </div>
                                                    </li>
                                                    {{-- <li>
                                                        <div class="addCategory_colListInfo">
                                                            <strong>Absent If Work Hours Less Than</strong>
                                                            <div class="shitInput">
                                                                <input type="text" name="Absent_after_hours" value="{{old('Absent_after_hours')}}">
                                                            </div>
                                                        </div>
                                                    </li> --}}
                                                    <li>
                                                        <div class="addCategory_colListInfo">
                                                            <strong>Shift Hrs For OT Calculation</strong>
                                                            <div class="shitInput">
                                                                <input type="time" name="ot_calculations" value="{{old('ot_calculations')}}">
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="addCategory_colListInfo">
                                                            <strong>OverTime Payment Multiplyer</strong>
                                                            <div class="shitInput">
                                                                <input type="time" name="ot_payment_multiplayer" value="{{old('ot_payment_multiplayer')}}">
                                                            </div>
                                                        </div>
                                                    </li>

                                                </ul>
                                            </div>
                                            <div class="allIn">
                                                <ul>
                                                    <li>
                                                        <div class="allInRadio_btn">
                                                            <label><input type="radio" name="all" value="All_in">All
                                                                IN/OUT</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="allInRadio_btn">
                                                            <label><input type="radio" name="all" value="First_in"> First IN
                                                                Last OUT</label>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="hoursRange_sec_info applyFor">
                                                <div>
                                                    <ul>
                                                        <li>
                                                            <div class="tableCheckbox lunchCheck">
                                                                <label class="checkbox-label">
                                                                    <input type="checkbox" name="wo_lapse">
                                                                    <span class="checkbox-custom rectangular"></span>
                                                                </label>
                                                                WO Lapse on Previous And Next Absent
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="table_actions">
                        <div class="row align-items-center ">
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 m-auto ">
                                <div class="table_actionsBtns justify-content-center">
                                    <button class="tb_actionBtn">Save</button>
                                    <button class="tb_actionBtn" data-dismiss="modal">Exit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
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
        fetch('/category-master-company/' + companyId, {
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
