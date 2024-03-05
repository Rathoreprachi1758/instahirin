<x-header data="master component" />
<link rel="stylesheet" href="{{ asset('css/css/master_tab.css') }}">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
{{-- <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script> --}}
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.7/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.7/dist/sweetalert2.all.min.js"></script>
<style>
    .dataTables_wrapper .dataTables_length select {
        width: 48px;
    }

    .label {
        display: inline-flex !important;
        margin-bottom: 0.5rem;
    }

    .dataTables_wrapper .dataTables_length {
        float: left;
    }

    .modal-content1 {
        position: relative;
        display: flex;
        flex-direction: column;
        width: 100%;
        pointer-events: auto;
        background-color: #bcbcbc;
        border: 0px !important;
        border-radius: 0.3rem;
        outline: 0;
    }
</style>
<script>
    $(document).ready(function() {
        $('#master_company').DataTable();
    });
</script>
{{-- @include('sweet::alert') --}}
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
                        {{-- <li><a href="{{route('master.company')}}">Company</a></li> --}}
                        <li><a href="{{ route('master.index') }}" class="active">Company</a></li>
                        <li><a href="{{ route('department.index') }}">Department</a></li>
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
                <div class="custom_tabs_detail">
                    <div class="custom_tabs_data" id="tab1" style="display: block;">
                        <div class="masterTab_bg">
                            <div class="masterTab_data">
                                <div class="custom_tittle">
                                    <h5>Company Master</h5>
                                </div>
                                <div class="masterTable">
                                    <div class="row">
                                        <div class="col-xxl-12 ">
                                            <div class="masterTable_data">
                                                <table class="table" id="master_company">
                                                    <thead>
                                                        <tr>
                                                            <th style="width:283px">
                                                                <h6 class="text-left">Company ID</h6>
                                                            </th>
                                                            <th width="200">
                                                                <h6>Company Name</h6>
                                                            </th>
                                                            <th width="450">
                                                                <h6>Address</h6>
                                                            </th>
                                                            <th>
                                                                <h6>Action</h6>
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($companyData as $comdata)
                                                            <tr>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p class="pl-3">{{ $comdata->id }}</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p>{{ $comdata->company_name }}</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p>{{ $comdata->address }}</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="actionBtns">
                                                                        <button class="actBtn edit_company"
                                                                            data-toggle="modal"
                                                                            data-target="#comapny_edit_model"
                                                                            data-company-id="comapny_edit_model_{{ $comdata->id }}">
                                                                            <i class="fa fa-pencil-square-o"
                                                                                aria-hidden="true"></i>
                                                                        </button>
                                                                        <form id="deleteForm" action="{{ route('master.destroy', $comdata->id) }}" method="post">
                                                                            @csrf
                                                                            @method('delete')
                                                                            <button type="button" class="actBtn" onclick="showCustomAlert()">
                                                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                                                            </button>
                                                                        </form>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            {{-- ////edit-model --}}
                                                            <div class="modal fade" id="comapny_edit_model_{{ $comdata->id }}" tabindex="-1" role="dialog" aria-hidden="true" style="top: 101px;left: -186px ">
                                                                <div class="modal-dialog" role="document">
                                                                    <div class="modal-content" style="width: 173%;">
                                                                        <div class="modal-header"
                                                                            style="background-color: #BCBCBC;">
                                                                            <h6
                                                                                style="padding-bottom: 0px;margin-left: 320px;">
                                                                                Edit Selected Company </h6>
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
                                                                            <form method="post" id="skills" action="{{ route('master.update', $comdata->id) }}">
                                                                                @csrf
                                                                                @method('patch')
                                                                                <div class="row">
                                                                                    <div class="col-lg-6 col-md-6">
                                                                                        <div class="popupForm_col">
                                                                                            <strong>Company ID*</strong>
                                                                                            <div
                                                                                                class="popupForm_field">
                                                                                                <input type="text" value="{{ $comdata->id }}" disabled>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="col-lg-6 col-md-6">
                                                                                        <div class="popupForm_col">
                                                                                            <strong>Company Name*</strong>
                                                                                            <div
                                                                                                class="popupForm_field">
                                                                                                <input type="text" name="company_name" value="{{ $comdata->company_name}}">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="col-lg-12">
                                                                                        <div class="popupForm_col"
                                                                                            style="width: 49%;!important">
                                                                                            <strong>Address..</strong>
                                                                                            <div
                                                                                                class="popupForm_field">
                                                                                                <textarea style="width: 254%;" name="address" value="{{ $comdata->address}}">{{ $comdata->address}}</textarea>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="col-lg-6 col-md-6">
                                                                                        <div class="popupForm_col">
                                                                                            <strong>Phone No*</strong>
                                                                                            <div
                                                                                                class="popupForm_field">
                                                                                                <input type="text" name="phone_no" value="{{ $comdata->phone_no}}">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="col-lg-6 col-md-6">
                                                                                        <div class="popupForm_col">
                                                                                            <strong>Fax No.</strong>
                                                                                            <div
                                                                                                class="popupForm_field">
                                                                                                <input type="text" name="fax_no" value="{{ $comdata->fax_no}}" >
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="col-lg-6 col-md-6">
                                                                                        <div class="popupForm_col">
                                                                                            <strong>E-mail Id*</strong>
                                                                                            <div
                                                                                                class="popupForm_field">
                                                                                                <input type="text" name="email_id"  value="{{ $comdata->email_id}}">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="col-lg-6 col-md-6">
                                                                                        <div class="popupForm_col">
                                                                                            <strong>Website.</strong>
                                                                                            <div
                                                                                                class="popupForm_field">
                                                                                                <input type="text" name="website"  value="{{ $comdata->website}}">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="table_actions">
                                                                                    <div
                                                                                        class="row align-items-center ">
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
                                                            {{-- // --}}
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
                                                <button class="tb_actionBtn" id="company_model">Add</button>
                                                <button class="tb_actionBtn">Exit</button>
                                            </div>
                                            <div class="modal fade" id="create_model" tabindex="-1" role="dialog"
                                                aria-hidden="true" style="top: 101px;left: -186px ">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content" style="width: 173%;">
                                                        <div class="modal-header" style="background-color: #BCBCBC;">
                                                            <h6 style="padding-bottom: 0px;margin-left: 357px;">Add
                                                                Company Details</h6>
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
                                                                action="{{ route('master.store') }}">
                                                                @csrf
                                                                <div class="row">
                                                                    <div class="col-lg-6 col-md-6">
                                                                        <div class="popupForm_col">
                                                                            <strong>Company ID*</strong>
                                                                            <div class="popupForm_field">
                                                                                <input type="text"
                                                                                    name="company_id"
                                                                                    value="{{ old('company_id') }}"
                                                                                    placeholder="Enter Company Id">
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-lg-6 col-md-6">
                                                                        <div class="popupForm_col">
                                                                            <strong>Company Name*</strong>
                                                                            <div class="popupForm_field">
                                                                                <input type="text"
                                                                                    name="company_name"
                                                                                    value="{{ old('company_name') }}"
                                                                                    placeholder=" Enter Company Name">
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-lg-12">
                                                                        <div class="popupForm_col"
                                                                            style="width: 49%;!important">
                                                                            <strong>Address..</strong>
                                                                            <div class="popupForm_field">
                                                                                <textarea style="width: 254%;" name="address" placeholder="Enter address" value="{{ old('address') }}"></textarea>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-lg-6 col-md-6">
                                                                        <div class="popupForm_col">
                                                                            <strong>Phone No*</strong>
                                                                            <div class="popupForm_field">
                                                                                <input type="text"
                                                                                    name="phonenumber"
                                                                                    placeholder="Phone number"
                                                                                    value="{{ old('phonenumber') }}">
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-lg-6 col-md-6">
                                                                        <div class="popupForm_col">
                                                                            <strong>Fax No.</strong>
                                                                            <div class="popupForm_field">
                                                                                <input type="text" name="fax_no"
                                                                                    placeholder="Fax No"
                                                                                    value="{{ old('fax_no') }}">
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-lg-6 col-md-6">
                                                                        <div class="popupForm_col">
                                                                            <strong>E-mail Id*</strong>
                                                                            <div class="popupForm_field">
                                                                                <input type="email" name="email_id"
                                                                                    value="{{ old('email_id') }}"
                                                                                    placeholder="Email">
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-lg-6 col-md-6">
                                                                        <div class="popupForm_col">
                                                                            <strong>Website.</strong>
                                                                            <div class="popupForm_field">
                                                                                <input type="text" name="website" 
                                                                                value="{{ old('website') }}" 
                                                                                placeholder="Enter website if any" />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="table_actions">
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
    </div>
</div>
{{-- //edit_model --}}
<script>
    $(document).ready(function() {
        $("#company_model").click(function() {
            $("#create_model").modal("show");
        });
        //edit
        $('.edit_company').click(function() {
            var companyId = $(this).data('company-id');
            var id_companyId = "#"+companyId;
            console.log(id_companyId);
            // $(id_companyId).find('.modal-body input[name="company_id"]').val(companyId);
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
