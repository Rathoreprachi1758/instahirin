<x-header data="employee_master component" />
<link rel="stylesheet" href="{{ asset('css/css/master_tab.css') }}">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.7/dist/sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.7/dist/sweetalert2.all.min.js"></script>
<script>
    $(document).ready(function() {
        $('#employee_master').DataTable();
        //
        $('#employee_modal').click(function() {
            $('#add_emp').modal('show');
        })
    });
</script>
<style>
    .modal-body {
        overflow-y: scroll !important;
        overflow: hidden;
        height: 514px !important;
    }
</style>
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
                        <li><a href="{{ route('Employee-Master.index') }}" class="active">Employee Master</a></li>
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
                {{-- // --}}
                <div class="custom_tabs_data" id="tab6" style="display: block;">
                    <div class="masterTab_bg">
                        <div class="masterTab_data">
                            <div class="custom_tittle">
                                <h5>Employee Master</h5>
                            </div>
                            <div class="masterTable empMasterTable">
                                <div class="row">
                                    <div class="col-xxl-12" style="margin-top:44px">
                                        <div class="masterTable_data">
                                            <div class="sorting_nav" style="margin-left: 165px;margin-bottom: -46px">
                                                <div class="showSort">
                                                    <div class="allSelect">
                                                        <strong class="entitiesSelect">Select Company</strong>
                                                        <div class="showSort_select seleComp">
                                                            <select class="fav_show">
                                                                <option value="Yes">Yes</option>
                                                                <option value="No">No</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="allSelect">
                                                        <strong class="entitiesSelect">Select Department</strong>
                                                        <div class="showSort_select seleComp">
                                                            <select class="fav_show">
                                                                <option value="Yes">Yes</option>
                                                                <option value="No">No</option>
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
                                            <table class="table table-striped" id="employee_master">
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            <div class="tableCheckbox">
                                                                <label class="checkbox-label">
                                                                    <input type="checkbox">
                                                                    <span class="checkbox-custom rectangular"></span>
                                                                </label>
                                                            </div>
                                                        </th>
                                                        <th>
                                                            <h6 class="text-left">Emp Code</h6>
                                                        </th>
                                                        <th>
                                                            <h6>Enrolled Id</h6>
                                                        </th>
                                                        <th>
                                                            <h6>Name</h6>
                                                        </th>
                                                        <th>
                                                            <h6>Dept. Name</h6>
                                                        </th>
                                                        <th>
                                                            <h6>Desg. Name</h6>
                                                        </th>
                                                        <th>
                                                            <h6>Cat. Name</h6>
                                                        </th>
                                                        <th>
                                                            <h6>Action</h6>
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @forelse ($EmpMaster as $emp)
                                                        <tr>
                                                            <td>
                                                                <div class="tableCheckbox">
                                                                    <label class="checkbox-label">
                                                                        <input type="checkbox">
                                                                        <span
                                                                            class="checkbox-custom rectangular"></span>
                                                                    </label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="tabletext">
                                                                    <p>{{ $emp->employee_code }}</p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="tabletext">
                                                                    <p>{{ $emp->bizionic_id }}</p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="tabletext">
                                                                    <p>{{ $emp->employee_name }}</p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="tabletext">
                                                                    <p>{{ $emp->designation }}</p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="tabletext">
                                                                    <p>{{ $emp->department }}</p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="tabletext">
                                                                    <p>{{ $emp->category }}</p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="actionBtns">
                                                                    <div class="actionBtns">
                                                                        <button class="actBtn edit_company"
                                                                            id="shift_edit_button" data-toggle="modal"
                                                                            data-target="#edit_shift"
                                                                            data-dept-id="edit_shift_{{ $emp->id }}">
                                                                            <i class="fa fa-pencil-square-o"
                                                                                aria-hidden="true"></i>
                                                                        </button>
                                                                        <form id = "deleteForm"
                                                                            action="{{ route('Employee-Master.destroy', $emp->id) }}"
                                                                            method="post">
                                                                            @csrf
                                                                            @method('delete')
                                                                            <button type="button"
                                                                                class="actBtn delete_shift"
                                                                                data-shift-id="{{ $emp->id }}"
                                                                                onclick="showCustomAlert(this)">
                                                                                <i class="fa fa-trash"
                                                                                    aria-hidden="true"></i>
                                                                            </button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    @empty
                                                        <p style="color:red;margin-top: -120px">Oops ! No Records In
                                                            Employee Master
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
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="table_actions">
                                <div class="row align-items-center">
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 ">
                                        <div class="table_actionsBtns">
                                            <button class="tb_actionBtn" id="employee_modal">Add</button>
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
<div class="modal fade" id="add_emp" tabindex="-1" role="dialog" aria-hidden="true" style="top:50px;">
    <div class="modal-dialog" role="document">
        {{-- <div class="modal-content" style="width: 173%;"> --}}
        <div class="modal-content" style="width: 220%;left: -305px">
            <div class="modal-header" style="background-color: #BCBCBC;">
                <h6 style="padding-bottom: 0px;margin-left: 417px;">Add New Employee Details Here</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="background-color: #ededed">
                <form method="post" id="skills" action="{{ route('Employee-Master.store') }}">
                    @csrf
                    <div class="row">
                        <div class="col-6">
                            <div class="popupForm_col">
                                <strong>Employee code<span style="color: red">*</span></strong>
                                <div class="popupForm_field">
                                    <select name="company_id" class="selective">
                                        @foreach ($comapnaies as $id)
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
                                <strong>Employee Name<span style="color: red">*</span></strong>
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
                        <div class="col-6">
                            <div class="popupForm_col">
                                <strong>Company<span style="color: red">*</span></strong>
                                <div class="popupForm_field">
                                    <input type="text" name="category_id" value="{{ old('category_id') }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="popupForm_col">
                                <strong>Bizionic Id<span style="color: red">*</span></strong>
                                <div class="popupForm_field">
                                    <input type="text" name="category_name" value="{{ old('category_name') }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="popupForm_col">
                                <strong>Department<span style="color: red">*</span></strong>
                                <div class="popupForm_field">
                                    <select name="company_id" class="selective">
                                        @foreach ($comapnaies as $id)
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
                                <strong>Emp status<span style="color: red">*</span></strong>
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
                        <div class="col-6">
                            <div class="popupForm_col">
                                <strong>Designation<span style="color: red">*</span></strong>
                                <div class="popupForm_field">
                                    <input type="text" name="category_id" value="{{ old('category_id') }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="popupForm_col">
                                <strong>Punch Entry Required<span style="color: red">*</span></strong>
                                <div class="popupForm_field">
                                    <input type="text" name="category_name" value="{{ old('category_name') }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="popupForm_col">
                                <strong>Category<span style="color: red">*</span></strong>
                                <div class="popupForm_field">
                                    <input type="text" name="category_id" value="{{ old('category_id') }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="popupForm_col">
                                <strong>Mobile Number<span style="color: red">*</span></strong>
                                <div class="popupForm_field">
                                    <input type="text" name="category_name" value="{{ old('category_name') }}">
                                </div>
                            </div>
                        </div>
                        <br><br>
                        <div class="row rowFieldSetting">
                            <div class="col-lg-3 col-md-6">
                              <div class="popupForm_col">
                                <strong>Shift1</strong>
                                <div class="auth_select_info p-0">
                                  <select>
                                    <option>Any</option>
                                    <option>Uae</option>
                                    <option>Uk</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                              <div class="popupForm_col">
                                <strong>Shift2</strong>
                                <div class="auth_select_info p-0">
                                  <select>
                                    <option>Any</option>
                                    <option>Uae</option>
                                    <option>Uk</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                              <div class="popupForm_col">
                                <strong>Shift3</strong>
                                <div class="auth_select_info p-0">
                                  <select>
                                    <option>Any</option>
                                    <option>Uae</option>
                                    <option>Uk</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                              <div class="popupForm_col">
                                <strong>Shift4</strong>
                                <div class="auth_select_info p-0">
                                  <select>
                                    <option>Any</option>
                                    <option>Uae</option>
                                    <option>Uk</option>
                                  </select>
                                </div>
                              </div>
                            </div>
          
                            <div class="col-lg-3 col-md-6">
                              <div class="popupForm_col">
                                <strong>Shift5</strong>
                                <div class="auth_select_info p-0">
                                  <select>
                                    <option>Any</option>
                                    <option>Uae</option>
                                    <option>Uk</option>
                                  </select>
                                </div>
                              </div>
                            </div>
          
                            <div class="col-lg-3 col-md-6">
                              <div class="popupForm_col">
                                <strong>Shift6</strong>
                                <div class="auth_select_info p-0">
                                  <select>
                                    <option>Any</option>
                                    <option>Uae</option>
                                    <option>Uk</option>
                                  </select>
                                </div>
                              </div>
                            </div>
          
                            <div class="col-lg-3 col-md-6">
                              <div class="popupForm_col">
                                <strong>Shift7</strong>
                                <div class="auth_select_info p-0">
                                  <select>
                                    <option>Any</option>
                                    <option>Uae</option>
                                    <option>Uk</option>
                                  </select>
                                </div>
                              </div>
                            </div>
          
                            <div class="col-lg-3 col-md-6">
                              <div class="popupForm_col">
                                <strong>Shift8</strong>
                                <div class="auth_select_info p-0">
                                  <select>
                                    <option>Any</option>
                                    <option>Uae</option>
                                    <option>Uk</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                          </div>
                          {{-- // --}}
                          <div class="row rowFieldSetting pt-2">
                            <div class="col-lg-4 col-md-4">
                              <div class="popupForm_col">
                                <strong>Weekoff1</strong>
                                <div class="auth_select_info p-0">
                                  <select>
                                    <option>Any</option>
                                    <option>Uae</option>
                                    <option>Uk</option>
                                  </select>
                                </div>
                              </div>
                              <div class="popupForm_col">
                                <strong>Weekoff2</strong>
                                <div class="auth_select_info p-0">
                                  <select>
                                    <option>Any</option>
                                    <option>Uae</option>
                                    <option>Uk</option>
                                  </select>
                                </div>
                              </div>
                            </div>
          
                            <div class="col-lg-4 col-md-4">
                              <div class="shiftSelect">
                                <strong>Saturday Full Day Off</strong>
                                <div class="shiftSelect_col">
                                  <div class="tableCheckbox lunchCheck">
                                    <label class="checkbox-label">
                                      <input type="checkbox" />
                                      <span class="checkbox-custom rectangular"></span>
                                    </label>
                                    Select All
                                  </div>
                                </div>
          
                                <div class="allshiftSelect">
                                  <div class="tableCheckbox lunchCheck">
                                    <label class="checkbox-label">
                                      <input type="checkbox" />
                                      <span class="checkbox-custom rectangular"></span>
                                    </label>
                                    1st
                                  </div>
                                  <div class="tableCheckbox lunchCheck">
                                    <label class="checkbox-label">
                                      <input type="checkbox" />
                                      <span class="checkbox-custom rectangular"></span>
                                    </label>
                                    2nd
                                  </div>
                                  <div class="tableCheckbox lunchCheck">
                                    <label class="checkbox-label">
                                      <input type="checkbox" />
                                      <span class="checkbox-custom rectangular"></span>
                                    </label>
                                    3rd
                                  </div>
                                  <div class="tableCheckbox lunchCheck">
                                    <label class="checkbox-label">
                                      <input type="checkbox" />
                                      <span class="checkbox-custom rectangular"></span>
                                    </label>
                                    4th
                                  </div>
                                  <div class="tableCheckbox lunchCheck">
                                    <label class="checkbox-label">
                                      <input type="checkbox" />
                                      <span class="checkbox-custom rectangular"></span>
                                    </label>
                                    5th
                                  </div>
                                </div>
                              </div>
                            </div>
          
                            <div class="col-lg-4 col-md-4">
                              <div class="shiftSelect shiftSelectHalf">
                                <strong>Saturday Half Day Off</strong>
                                <div class="shiftSelect_col">
                                  <div class="tableCheckbox lunchCheck">
                                    <label class="checkbox-label">
                                      <input type="checkbox" />
                                      <span class="checkbox-custom rectangular"></span>
                                    </label>
                                    Select All
                                  </div>
                                </div>
          
                                <div class="allshiftSelect">
                                  <div class="tableCheckbox lunchCheck">
                                    <label class="checkbox-label">
                                      <input type="checkbox" />
                                      <span class="checkbox-custom rectangular"></span>
                                    </label>
                                    1st
                                  </div>
                                  <div class="tableCheckbox lunchCheck">
                                    <label class="checkbox-label">
                                      <input type="checkbox" />
                                      <span class="checkbox-custom rectangular"></span>
                                    </label>
                                    2nd
                                  </div>
                                  <div class="tableCheckbox lunchCheck">
                                    <label class="checkbox-label">
                                      <input type="checkbox" />
                                      <span class="checkbox-custom rectangular"></span>
                                    </label>
                                    3rd
                                  </div>
                                  <div class="tableCheckbox lunchCheck">
                                    <label class="checkbox-label">
                                      <input type="checkbox" />
                                      <span class="checkbox-custom rectangular"></span>
                                    </label>
                                    4th
                                  </div>
                                  <div class="tableCheckbox lunchCheck">
                                    <label class="checkbox-label">
                                      <input type="checkbox" />
                                      <span class="checkbox-custom rectangular"></span>
                                    </label>
                                    5th
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          {{-- // --}}
                          <div class="row rowFieldSetting">
                            <div class="col-lg-6 col-md-6">
                              <div class="popupForm_col">
                                <strong>Father/Husband Name</strong>
                                <div class="popupForm_field">
                                  <input type="text" value="" />
                                </div>
                              </div>
                            </div>
          
                            <div class="col-lg-6 col-md-6">
                              <div class="popupForm_col">
                                <strong>Date Of Joining*</strong>
                                <div class="popupForm_field">
                                  <input type="text" value="" />
                                </div>
                              </div>
                            </div>
                          </div>
                          {{-- // --}}
                          <div class="row rowFieldSetting">
                            <div class="col-lg-6 col-md-6">
                              <div class="popupForm_col">
                                <strong>Address</strong>
                                <div class="popupForm_field">
                                  <textarea></textarea>
                                </div>
                              </div>
                            </div>
          
                            <div class="col-lg-6 col-md-6">
                              <div class="popupForm_col">
                                <strong>E-Mail</strong>
                                <div class="popupForm_field">
                                  <input type="text" value="" />
                                </div>
                              </div>
                            </div>
                          </div>
                          {{-- // --}}
                          <div class="table_actions" style="margin-left: 500px;margin-top:25px">
                                <div class="table_actionsBtns">
                                  <button class="tb_actionBtn">Save</button>
                                  <button class="tb_actionBtn">Exit</button>
                                </div>
                          </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
