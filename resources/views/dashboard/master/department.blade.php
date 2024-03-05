<x-header data="department component" />
<link rel="stylesheet" href="{{ asset('css/css/master_tab.css') }}">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
{{-- <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script> --}}
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.7/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.7/dist/sweetalert2.all.min.js"></script>
{{-- // --}}
{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}
<script>
    $(document).ready(function() {
        $('#department').DataTable();
    });
</script>
<style>
    .select {
        width: 100%;
        padding: 8px 15px;
        font-size: 12px;
        border-radius: 4px;
        width: 100%;
        background-color: #fff;
    }
</style>
<link rel="stylesheet" href="{{ asset('vendor/sweetalert2/sweetalert2.min.css') }}">
<script src="{{ asset('vendor/sweetalert2/sweetalert2.min.js') }}"></script>
@include('sweetalert::alert')
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
                        <li><a href="{{ route('master.index') }}">Company</a></li>
                        <li><a href="{{ route('department.index') }}" class="active">Department</a></li>
                        <li><a href="{{ route('master.designation') }}">Designation</a></li>
                        <li><a href="{{ route('master.shift_master') }}">Shift Master Daily</a></li>
                        <li><a href="{{ route('master.category') }}">Category</a></li>
                        <li><a href="{{ route('master.emp_master') }}">Employee Master</a></li>
                        <li><a href="{{ route('master.shift_config') }}">Employee Configuration</a></li>
                        <li><a href="{{ route('master.master_data') }}">Import/Export - Excel</a></li>
                        <li><a href="{{ route('master.master_leave') }}">Leave</a></li>
                        <li><a href="{{ route('master.master_holiday') }}">Holiday</a></li>
                    </ul>
                </div>
                @if (Session::has('message'))
                    <div class="alert alert-success" style="margin-top: 12px;" id="success-message">
                        <span style="margin-left:330px">{{ Session::get('message') }}</span>
                        <script>
                            setTimeout(function() {
                                document.getElementById('success-message').style.display = 'none';
                            }, 5000);
                        </script>
                    </div>
                @endif
                <div class="custom_tabs_data" id="tab2" style="display: block;">
                    <div class="masterTab_bg">
                        <div class="masterTab_data">
                            <div class="custom_tittle">
                                <h5>Department Master</h5>
                            </div>
                            <div class="sorting_nav" style="margin-left: 165px;margin-bottom: -46px">
                                <div class="showSort">
                                    <div class="allSelect">
                                        <strong class="entitiesSelect">Select Company</strong>
                                        <form action="{{ route('department.index') }}" method="GET" class="d-flex align-items-end" id="filterForm">
                                            <div class="mr-3">
                                                <div class="showSort_select seleComp">
                                                    <select class="fav_show" name="company_filter" id="company_filter_select">
                                                        @foreach($CompanyFilter as $company_filter)
                                                            <option value="{{ $company_filter->id }}">{{ $company_filter->company_name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <button type="button" id="submitFilter" class="btn btn-primary mt-2">Filter</button>
                                        </form>                
                                    </div>
                                </div>
                            </div>
                            <div class="masterTable">
                                <div class="row">
                                    <div class="col-xxl-12 ">
                                        <div class="masterTable_data">
                                            <table class="table" id="department">
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            <h6 class="text-left">Department ID</h6>
                                                        </th>
                                                        <th width="550">
                                                            <h6>Department Name</h6>
                                                        </th>
                                                        <th width="550">
                                                            <h6>Company Name</h6>
                                                        </th>
                                                        <th>
                                                            <h6>Action</h6>
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($department as $dept)
                                                        <tr>
                                                            <td>
                                                                <div class="tabletext">
                                                                    <p class="pl-3">{{ $dept->id }}</p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="tabletext">
                                                                    <p>{{ $dept->department_name }}</p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="tabletext">
                                                                    @foreach ($companyId as $company)
                                                                        @if ($company->id == $dept->comapny_id)
                                                                            <p>{{ $company->company_name }}</p>
                                                                        @endif
                                                                    @endforeach
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="actionBtns">
                                                                    <button class="actBtn edit_company"
                                                                        data-toggle="modal"
                                                                        data-target="#edit_department"
                                                                        {{-- data-target="#edit_department_{{ $dept->id }}" --}}
                                                                        data-dept-id="edit_department_{{ $dept->id }}">
                                                                        <i class="fa fa-pencil-square-o"
                                                                            aria-hidden="true"></i>
                                                                    </button>
                                                                    <form id = "deleteForm" action="{{ route('department.destroy', $dept->id) }}"
                                                                        method="post">
                                                                        @csrf
                                                                        @method('delete')
                                                                            <button type="button" class="actBtn" onclick="showCustomAlert()">
                                                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                                                            </button>
                                                                    </form>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        {{-- //edit --}}
                                                            <div class="modal fade" id="edit_department_{{ $dept->id }}" tabindex="-1" role="dialog" aria-hidden="true" style="top: 101px;left: -186px ">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content" style="width: 173%;">
                                                                    <div class="modal-header"
                                                                        style="background-color: #BCBCBC;">
                                                                        <h6
                                                                            style="padding-bottom: 0px;margin-left: 321px;">
                                                                            Edit Seleccted Department</h6>
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
                                                                        <form method="post" id="skills" action="{{ route('department.update', $dept->id) }}">
                                                                            @csrf
                                                                            @method('patch')
                                                                            <div class="col-lg-8 col-md-10 m-auto">
                                                                                <div class="row">
                                                                                    <div class="col-lg-12">
                                                                                        <div class="popupForm_col">
                                                                                            <strong>Department
                                                                                                ID*</strong>
                                                                                            <div
                                                                                                class="popupForm_field">
                                                                                                <input type="text" name="dept_id"
                                                                                                    value="{{ $dept->id }}">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-12">
                                                                                        <div class="popupForm_col">
                                                                                            <strong>Company Name*</strong>
                                                                                            <div
                                                                                                class="popupForm_field">
                                                                                                <select name="company_id" class="select">
                                                                                                    @foreach ($companyId as $id)
                                                                                                        <option
                                                                                                            value="{{ $id->id }}"@if ( $dept->comapny_id == $id->id) selected @endif>
                                                                                                            {{ $id->company_name }}
                                                                                                        </option>
                                                                                                    @endforeach
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-12">
                                                                                        <div class="popupForm_col">
                                                                                            <strong>Department Name*</strong>
                                                                                            <div
                                                                                                class="popupForm_field">
                                                                                                <input type="text" name="dept_name" value="{{ $dept->department_name}}">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <br>
                                                                            <div class="table_actions">
                                                                                <div class="row align-items-center ">
                                                                                    <div
                                                                                        class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 m-auto ">
                                                                                        <div
                                                                                            class="table_actionsBtns justify-content-center">
                                                                                            <button
                                                                                                class="tb_actionBtn">Save</button>
                                                                                            <button
                                                                                                class="tb_actionBtn"
                                                                                                data-dismiss="modal">Exit</button>
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
                                            <button class="tb_actionBtn" id="department_add_model">Add</button>
                                            <button class="tb_actionBtn">Exit</button>
                                        </div>
                                    </div>
                                    {{-- //add-model --}}
                                    <div class="modal fade" id="department_model" tabindex="-1" role="dialog"
                                        aria-hidden="true" style="top: 101px;left: -186px ">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content" style="width: 173%;">
                                                <div class="modal-header" style="background-color: #BCBCBC;">
                                                    <h6 style="padding-bottom: 0px;margin-left: 357px;">Add Department
                                                        Details</h6>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
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
                                                        action="{{ route('department.store') }}">
                                                        @csrf
                                                        <div class="col-lg-8 col-md-10 m-auto">
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <div class="popupForm_col">
                                                                        <strong>Department ID*</strong>
                                                                        <div class="popupForm_field">
                                                                            <input type="text"
                                                                                name= "department_id"
                                                                                value="{{ old('department_id') }}">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                {{-- // --}}
                                                                <div class="col-lg-12">
                                                                    <div class="popupForm_col">
                                                                        <strong>Company Name*</strong>
                                                                        <div class="popupForm_field">
                                                                            <select name="company_id" class="select">
                                                                                @foreach ($companyId as $id)
                                                                                    <option
                                                                                        value="{{ $id->id }}">
                                                                                        {{ $id->company_name }}
                                                                                    </option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12">
                                                                    <div class="popupForm_col">
                                                                        <strong>Department Name*</strong>
                                                                        <div class="popupForm_field">
                                                                            <input type="text"name="department_name"
                                                                                value="{{ old('department_name') }}" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div class="table_actions">
                                                            <div class="row align-items-center ">
                                                                <div
                                                                    class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 m-auto ">
                                                                    <div
                                                                        class="table_actionsBtns justify-content-center">
                                                                        <button class="tb_actionBtn">Save</button>
                                                                        <button class="tb_actionBtn"
                                                                            data-dismiss="modal">Exit</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
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
    </div>
</div>

<script>
    let id_companyId="";
    $(document).ready(function() {
        $("#department_add_model").click(function() {
            $("#department_model").modal('show');
        })
        $('.edit_company').click(function() {
            var companyId = $(this).data('dept-id');
            let id_companyId = "#" + companyId;
            console.log('companyId==', id_companyId);
            $(id_companyId).modal('show');
        });
    });
</script>
<script>
    function showCustomAlert() {
            // Example of using SweetAlert with a confirmation
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
                    // If the user clicks "OK," submit the form
                    document.getElementById('deleteForm').submit();
                }
            });
        }
</script>
<script>
    $(document).ready(function () {
        $('#submitBtn').click(function () {
            $.ajax({
                url: $('#filterForm').attr('action'),
                type: 'GET',
                data: $('#filterForm').serialize(),
                success: function (response) {
                    // Handle the response here
                    console.log(response);
                },
                error: function (error) {
                    // Handle the error here
                    console.log(error);
                }
            });
        });
    });
</script>