<x-header data="department component" />
<link rel="stylesheet" href="{{ asset('css/css/master_tab.css') }}">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
{{-- <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script> --}}
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.7/dist/sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.7/dist/sweetalert2.all.min.js"></script>
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
        /* overflow: hidden; */
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

    .masterTab_data {
        width: 100%;
        position: relative;
        background-color: #fff;
        box-shadow: 0px 0px 0px #cccccc96;
        padding: 0px;
        /* border: 1px solid #ebeaea; */
    }

    .sorting_nav {
        display: block !important;
        position: absolute;
        left: 20%;
        top: -13%;
    }



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
<link rel="stylesheet" href="{{ asset('vendor/sweetalert2/sweetalert2.min.css') }}">
<script src="{{ asset('vendor/sweetalert2/sweetalert2.min.js') }}"></script>
@include('sweetalert::alert')
<div class="fr-section" style="margin-top: -72px">
    <div class="fr-section_detail ">
        <div class="dashboard_innerPages">
            <div class="custom_tabs_section">
                <div class="custom_tittle descriptionTxt">
                    <h4>Master</h4>
                    <p class="description_small_text"><strong style="color:#343A40;">Description:</strong
                            style="color:#343A40;"> Keep track of
                        all company master details including employee
                        designations, shift information, category of employees, and their configurations. Also
                        able to oversee <br> leave master with holiday details.</p>
                </div>
                <div class="custom_tabs">
                    <ul>
                        <li><a href="{{ route('Master.index') }}">Company</a></li>
                        <li><a href="{{ route('Department.index') }}" class="active">Department</a></li>
                        <li><a href="{{ route('Designation.index') }}">Designation</a></li>
                        <li><a href="{{ route('shift_master.index') }}">Shift Master Daily</a></li>
                        <li><a href="{{ route('Category.index') }}">Category</a></li>
                        <li><a href="{{ route('Employee-Master.index') }}">Employee Master</a></li>
                        <li><a href="{{ route('Employee-Configurations.index') }}">Employee Configuration</a></li>
                        <li><a href="{{ url('/Employee/Mastery-data') }}">Import/Export - Excel</a></li>
                        <li><a href="{{ route('Leave.index') }}">Leave</a></li>
                        <li><a href="{{ route('Holiday.index') }}">Holiday</a></li>
                    </ul>
                </div>
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
                {{-- ///trie --}}
                <script>
                    // var $j = jQuery.noConflict();
                    $(document).ready(function() {
                        $("#submitFilter").click(function() {
                            let selectedCompanyId = $('#company_filter_select').val();
                            alert(selectedCompanyId);
                            //     $.ajax({
                            //         url: '/dept_id', // Corrected URL
                            //         type: 'GET', // Removed unnecessary semicolon
                            //         data: {
                            //             company_id: selectedCompanyId
                            //         }, // Passed selected company ID as data
                            //         dataType: 'json',
                            //         success: function(response) {
                            //             console.log('Success:', response);
                            //         },
                            //         error: function(xhr, status, error) {
                            //             console.error('Error:', xhr, status, error);
                            //         }
                            // });
                        });
                    });
                    // $(function() {
                    //     $('select[name=country]').change(function() {
                    //         alert($(this).val());
                    //     });
                    // });
                </script>
                <div class="allSelect">

                    {{-- <form action="{{ url('dept_id') }}" method="post" class="d-flex align-items-end"
                        id="filterForm">
                        @csrf
                        <div class="mr-3">
                            <div class="showSort_select seleComp">
                                <select class="fav_show" name="country" id="company_filter_select">
                                    @foreach ($CompanyFilter as $company_filter)
                                        <option value="{{ $company_filter->id }}">
                                            {{ $company_filter->company_name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <button type="button" id="submitFilter" class="btn btn-primary mt-2">Filter</button>
                    </form> --}}
                    {{-- <form action="{{ url('dept_id') }}" method="POST" class="d-flex align-items-end" id="filterForm">
                        @csrf <!-- Add CSRF token -->
                        <div class="mr-3">
                            <div class="showSort_select seleComp">
                                <select class="fav_show" name="company_id" id="company_filter_select"> <!-- Change name attribute to 'company_id' -->
                                    @foreach ($CompanyFilter as $company_filter)
                                        <option value="{{ $company_filter->id }}">
                                            {{ $company_filter->company_name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mt-2">Filter</button> <!-- Change type to 'submit' -->
                    </form> --}}

                </div>
                {{-- @php
                    die();
                @endphp --}}
                <div class="custom_tabs_data" id="tab2" style="display: block;">
                    <div class="masterTab_bg">
                        <div class="masterTab_data">
                            <div class="custom_tittle mt-4">
                                <h5>Department Master</h5>
                            </div>
                            <div class="masterTable">
                                <div class="row">
                                    <div class="col-xl-12"style="margin-top:10px">
                                        <div class="masterTable_data">
                                            <div class="sorting_nav">
                                                <div class="showSort">
                                                    <div class="allSelect">
                                                        <label class="entitiesSelect" style="font-size: 14px;">Select
                                                            Company</label>






                                                        {{-- <form action="{{ route('Department.index') }}" method="GET"
                                                            class="d-flex align-items-end" id="filterForm">
                                                            <div class="mr-3">
                                                                <div class="showSort_select seleComp">
                                                                    <select class="fav_show" name="country"
                                                                        id="company_filter_select">
                                                                        @foreach ($CompanyFilter as $company_filter)
                                                                            <option value="{{ $company_filter->id }}">
                                                                                {{ $company_filter->company_name }}
                                                                            </option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <button type="button" id="submitFilter"
                                                                class="btn btn-primary mt-2">Filter</button>
                                                        </form> --}}


                                                        <form action="{{ route('Department.index') }}" method="GET"
                                                            class="d-flex align-items-end" id="filterForm">
                                                            <div class="form-row">
                                                                <select class="fav_show form-select" name="company_id"
                                                                    id="company_filter_select">

                                                                    @foreach ($CompanyFilter as $company_filter)
                                                                        <option value="{{ $company_filter->id }}">
                                                                            {{ $company_filter->company_name }}
                                                                        </option>
                                                                    @endforeach
                                                                </select>

                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <table class="table table-bordered text-center tracking-table"
                                                id="department">
                                                <thead>
                                                    <tr>
                                                        <td class="align-middle">
                                                            ID
                                                        </td>
                                                        <td class="align-middle">
                                                            Department Name
                                                        </td>
                                                        <td class="align-middle">
                                                            Company Name
                                                        </td>
                                                        <td class="align-middle">
                                                            Action
                                                        </td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @forelse ($department as $dept)
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
                                                                    @foreach ($companes as $company)
                                                                        @if ($company->id == $dept->company_id)
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
                                                                        data-dept-id="edit_department_{{ $dept->id }}">
                                                                        <i class="fa fa-pencil-square-o"
                                                                            aria-hidden="true"></i>
                                                                    </button>
                                                                    <form id = "deleteForm"
                                                                        action="{{ route('Department.destroy', $dept->id) }}"
                                                                        method="post">
                                                                        @csrf
                                                                        @method('delete')
                                                                        <button type="button" class="actBtn"
                                                                            data-dept-id ="{{ $dept->id }}"
                                                                            onclick="showCustomAlert(this)">
                                                                            <i class="fa fa-trash"
                                                                                aria-hidden="true"></i>
                                                                        </button>
                                                                    </form>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        {{-- //edit --}}
                                                        <div class="modal fade"
                                                            id="edit_department_{{ $dept->id }}" tabindex="-1"
                                                            role="dialog" aria-hidden="true"
                                                            style="top: 101px;left: -186px ">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content" style="width: 173%;">
                                                                    <div class="modal-header"
                                                                        style="background-color: #BCBCBC;">
                                                                        <h6
                                                                            style="padding-bottom: 0px;margin-left: 321px;">
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
                                                                    <div class="modal-body"
                                                                        style="background-color: #ededed">
                                                                        <form method="post" id="skills"
                                                                            action="{{ route('Department.update', $dept->id) }}">
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
                                                                                                <input type="text"
                                                                                                    name="dept_id"
                                                                                                    value="{{ $dept->id }}">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-12">
                                                                                        <div class="popupForm_col">
                                                                                            <strong>Company
                                                                                                Name*</strong>
                                                                                            <div
                                                                                                class="popupForm_field">
                                                                                                <select
                                                                                                    name="company_id"
                                                                                                    class="select">
                                                                                                    @foreach ($companes as $id)
                                                                                                        <option
                                                                                                            value="{{ $id->id }}"@if ($dept->comapny_id == $id->id) selected @endif>
                                                                                                            {{ $id->company_name }}
                                                                                                        </option>
                                                                                                    @endforeach
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-12">
                                                                                        <div class="popupForm_col">
                                                                                            <strong>Department
                                                                                                Name*</strong>
                                                                                            <div
                                                                                                class="popupForm_field">
                                                                                                <input type="text"
                                                                                                    name="dept_name"
                                                                                                    value="{{ $dept->department_name }}">
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
                                                    @empty
                                                        <p style="color:red;margin-top: -120px">Oops ! No Records In
                                                            Departments
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
                                                        action="{{ route('Department.store') }}">
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
                                                                                @foreach ($companes as $id)
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
    let id_companyId = "";
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

    function showCustomAlert(button) {
        // var DeptId = button.getAttribute('data-dept-id');
        var DeptId = button.getAttribute('data-dept-id');
        // alert(DeptId);
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
                var formAction = "{{ route('Department.destroy', ':DeptId') }}".replace(':DeptId', DeptId);
                document.getElementById('deleteForm').action = formAction;
                document.getElementById('deleteForm').submit();
            }
        });
    }

    $(document).ready(function() {
        $('#submitBtn').click(function() {
            $.ajax({
                url: $('#filterForm').attr('action'),
                type: 'GET',
                data: $('#filterForm').serialize(),
                success: function(response) {
                    // Handle the response here
                    console.log(response);
                },
                error: function(error) {
                    // Handle the error here
                    console.log(error);
                }
            });
        });
    });
</script>
<script>
    // $(document).ready(function(){
    //     $("#submitFilter").click(function(){
    //         var $data = $("#county").val();
    //         alert($data);
    //     });
    // });
    // $(function() {
    //     $('select[name=country]').change(function() {
    //         alert($(this).val());


    //     var url = '{{ url('country') }}' + $(this).val() + '/states/';

    //     $.get(url, function(data) {
    //         var select = $('form select[name= state]');

    //         select.empty();

    //         $.each(data,function(key, value) {
    //             select.append('<option value=' + value.id + '>' + value.name + '</option>');
    //         });
    //     });
    //     });
    // });
</script>
