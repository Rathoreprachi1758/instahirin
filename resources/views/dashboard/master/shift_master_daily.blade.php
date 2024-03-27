<x-header data="shift_master component" />
<link rel="stylesheet" href="{{ asset('css/css/master_tab.css') }}">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.7/dist/sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.7/dist/sweetalert2.all.min.js"></script>
<script>
    $(document).ready(function() {
        $('#shift_master').DataTable({
            "ordering": false
        });
    });
</script>
<style>
    .shift_heade {
        font-size: 12px;
        color: #ededed
    }

    td {
        max-width: 100px;
        white-space: normal;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .bordered-table {
        border-collapse: collapse;
    }

    .bordered-table th,
    .bordered-table td {
        border: 1px solid #c9c4c4;
        padding: 2px;
        /* display: flex; */
        text-align: center;
        vertical-align: middle;
    }

    .align2 {
        display: flex;
        justify-content: center;
    }

    .bg-clr {
        background-color: #343a40 !important;
    }
</style>
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
                        <li><a href="{{ route('Master.index') }}">Company</a></li>
                        <li><a href="{{ route('Department.index') }}">Department</a></li>
                        <li><a href="{{ route('Designation.index') }}">Designation</a></li>
                        <li><a href="{{ route('shift_master.index') }}" class="active">Shift Master Daily</a></li>
                        <li><a href="{{ route('Category.index') }}">Category</a></li>
                        <li><a href="{{ route('Employee-Master.index') }}">Employee Master</a></li>
                        <li><a href="{{ route('Employee-Configurations.index') }}">Employee Configuration</a></li>
                        <li><a href="{{ route('Employee-Master.index') }}">Import/Export - Excel</a></li>
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
                <div class="custom_tabs_data" id="tab4" style="display: block;">
                    <div class="masterTab_bg">
                        <div class="masterTab_data">
                            <div class="custom_tittle">
                                <h5>Shift Master</h5>
                            </div>
                            <div class="masterTable">
                                <div class="row">
                                    <div class="col-xxl-12" style="margin-top:20px">
                                        <div class="masterTable_data">
                                            <div class="sorting_nav" style="margin-left: 200px;margin-bottom: -46px">
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
                                            <table class="table" id="shift_master">
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            <h6 class="text-left">Week day</h6>
                                                        </th>
                                                        <th>
                                                            <h6 class="text-left">Shift Code</h6>
                                                        </th>
                                                        <th>
                                                            <h6 class="text-left">Shift Name</h6>
                                                        </th>
                                                        <th>
                                                            <h6 class="text-left">In Time</h6>
                                                        </th>
                                                        <th>
                                                            <h6 class="text-left">Out Time</h6>
                                                        </th>
                                                        <th>
                                                            <h6 class="text-left">Shift Hours</h6>
                                                        </th>
                                                        <th width="">
                                                            <h6>Time Zone</h6>
                                                        </th>
                                                        <th>
                                                            <h6>Action</h6>
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @forelse ($shify as $shift)
                                                        <tr>
                                                            <td>
                                                                <div class="tabletext">
                                                                    <p class="pl-3">{{ $shift->week_day }}</p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="tabletext">
                                                                    <p class="pl-3">{{ $shift->shift_code }}</p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="tabletext">
                                                                    <p>{{ $shift->shift_name }}</p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="tabletext">
                                                                    <p>{{ $shift->Shift_in }}</p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="tabletext">
                                                                    <p>{{ $shift->Shift_out }}</p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="tabletext">
                                                                    <p>8:00</p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="tabletext">
                                                                    <p>{{ $shift->time_zone }}</p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="actionBtns">
                                                                    <div class="actionBtns">
                                                                        <button class="actBtn edit_company"
                                                                            id="shift_edit_button" data-toggle="modal"
                                                                            data-target="#edit_shift"
                                                                            data-dept-id="edit_shift_{{ $shift->id }}">
                                                                            <i class="fa fa-pencil-square-o"
                                                                                aria-hidden="true"></i>
                                                                        </button>
                                                                        <form id = "deleteForm"
                                                                            action="{{ route('shift_master.destroy', $shift->id) }}"
                                                                            method="post">
                                                                            @csrf
                                                                            @method('delete')
                                                                            <button type="button"
                                                                                class="actBtn delete_shift"
                                                                                data-shift-id="{{ $shift->id }}"
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
                                                            Shift Master
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
                                            @foreach ($shify as $shift)
                                                <div class="modal fade" id="edit_shift_{{ $shift->id }}"
                                                    tabindex="-1" role="dialog" aria-hidden="true"
                                                    style="top:99px;left: -186px width:-webkit-fill-available">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content" style="width: 252%;left: -380px">
                                                            <div class="modal-header"
                                                                style="background-color: #BCBCBC;">
                                                                <h6 style="padding-bottom: 0px;margin-left: 500px;">
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
                                                                <form method="post"
                                                                    id="skills"action="{{ route('shift_master.update', $shift->id) }}">
                                                                    @csrf
                                                                    @method('patch')
                                                                    <div class="row">
                                                                        <div class="col-6">
                                                                            <div class="popupForm_col">
                                                                                <strong>Shift Code *</strong>
                                                                                <div class="popupForm_field">
                                                                                    <select name="shift_code"
                                                                                        class="selective">
                                                                                        @foreach ($shiftCode as $id)
                                                                                            <option
                                                                                                value="{{ $id->shift_code }}">
                                                                                                {{ $id->shift_code }}
                                                                                            </option>
                                                                                        @endforeach
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-6">
                                                                            <div class="popupForm_col">
                                                                                <strong>Shift Name*</strong>
                                                                                <div class="popupForm_field">
                                                                                    <select name="shift_name"
                                                                                        class="selective">
                                                                                        @foreach ($shiftCode as $shiftname)
                                                                                            <option
                                                                                                value="{{ $shiftname->shift_Name }}">
                                                                                                {{ $shiftname->shift_Name }}
                                                                                            </option>
                                                                                        @endforeach
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        {{-- //table --}}
                                                                        <div class="col-lg-8"
                                                                            style="flex: 2 1 72.666667%;max-width: 100.666667%;">
                                                                            <table class="table bordered-table"
                                                                                id="shift_master">
                                                                                <thead
                                                                                    style="text-align: center;vertical-align: middle;">
                                                                                    <tr>
                                                                                        {{-- <th>
                                                                                            <h6 class="text-left shift_heade">Select All</h6>
                                                                                            <input type="checkbox" name="select_all">
                                                                                        </th> --}}
                                                                                        <th class="bg-clr">
                                                                                            <h6 class="text-left shift_heade"
                                                                                                style="color:#ededed">
                                                                                                Week Day</h6>
                                                                                        </th>
                                                                                        <th class="bg-clr">
                                                                                            <h6 class="text-left shift_heade"
                                                                                                style="color:#ededed">
                                                                                                Time Zone</h6>
                                                                                        </th>
                                                                                        <th class="bg-clr">
                                                                                            <h6 class="text-left shift_heade"
                                                                                                style="color:#ededed">
                                                                                                Shift In</h6>
                                                                                        </th>
                                                                                        <th class="bg-clr">
                                                                                            <h6 class="text-left shift_heade"
                                                                                                style="color:#ededed">
                                                                                                Shift Out</h6>
                                                                                        </th>
                                                                                        <th class="bg-clr">
                                                                                            <h6 class="text-left shift_heade"
                                                                                                style="color:#ededed">
                                                                                                Lunch In</h6>
                                                                                        </th>
                                                                                        <th class="bg-clr">
                                                                                            <h6 class="text-left shift_heade"
                                                                                                style="color:#ededed">
                                                                                                Lunch Out</h6>
                                                                                        </th>
                                                                                        <th class="bg-clr">
                                                                                            <h6 class="text-left shift_heade"
                                                                                                style="color:#ededed">
                                                                                                Ded.Full Lunch Hrs</h6>
                                                                                        </th>
                                                                                        {{-- <th>
                                                                                        <h6 class="text-left shift_heade">Extra Day Hrs</h6>
                                                                                    </th> --}}
                                                                                        <th class="bg-clr">
                                                                                            <h6 class="text-left shift_heade"
                                                                                                style="color:#ededed">
                                                                                                Send SMS Delay</h6>
                                                                                        </th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    @foreach ($weeks as $week)
                                                                                        @if ($week->week_name == $shift->week_day)
                                                                                            <tr>
                                                                                                <td>
                                                                                                    <div class="tabletext"
                                                                                                        style="display: flex; align-items: center;">
                                                                                                        {{-- <button
                                                                                                            class="btn btn-primary"
                                                                                                            style="height: 30px;">Copy</button> --}}
                                                                                                        <p
                                                                                                            class="pl-3">
                                                                                                            {{ $week->week_name }}
                                                                                                        </p>
                                                                                                        <input
                                                                                                            type="hidden"
                                                                                                            name="week_name"
                                                                                                            value={{ $week->week_name }}>
                                                                                                    </div>
                                                                                                </td>
                                                                                                <td>
                                                                                                    <div
                                                                                                        class="tabletext">
                                                                                                        <select
                                                                                                            name="time_zone"
                                                                                                            class="selective"
                                                                                                            style="width: 94px;height: 33px">
                                                                                                            @foreach ($timezones as $time)
                                                                                                                <option
                                                                                                                    value="{{ $time->label }}">
                                                                                                                    {{ $time->label }}
                                                                                                                </option>
                                                                                                            @endforeach
                                                                                                        </select>
                                                                                                    </div>
                                                                                                </td>
                                                                                                <td>
                                                                                                    <div
                                                                                                        class="tabletext">
                                                                                                        <input
                                                                                                            type="time"
                                                                                                            name="sign_in"
                                                                                                            class="selective"
                                                                                                            style="width: 94px;height: 23px"
                                                                                                            value="{{ $shift->Shift_in }}">
                                                                                                    </div>
                                                                                                </td>
                                                                                                <td>
                                                                                                    <div
                                                                                                        class="tabletext">
                                                                                                        <input
                                                                                                            type="time"
                                                                                                            name="sign_out"
                                                                                                            class="selective"
                                                                                                            style="width: 94px;height: 23px"
                                                                                                            value="{{ $shift->Shift_out }}">
                                                                                                    </div>
                                                                                                </td>
                                                                                                <td>
                                                                                                    <div
                                                                                                        class="tabletext">
                                                                                                        <input
                                                                                                            type="time"
                                                                                                            name="Lunch_in"
                                                                                                            class="selective"
                                                                                                            style="width: 94px;height: 23px"
                                                                                                            value="{{ $shift->Lunch_in }}">
                                                                                                    </div>
                                                                                                </td>
                                                                                                <td>
                                                                                                    <div
                                                                                                        class="tabletext">
                                                                                                        <input
                                                                                                            type="time"
                                                                                                            name="Lunch_out"
                                                                                                            class="selective"
                                                                                                            style="width: 94px;height: 23px"
                                                                                                            value="{{ $shift->Lunch_out }}">
                                                                                                    </div>
                                                                                                </td>
                                                                                                <td>
                                                                                                    <div class="tabletext"
                                                                                                        style="display:flex; align-items:center;">
                                                                                                        <input
                                                                                                            type="checkbox"
                                                                                                            name="Monday_check"
                                                                                                            {{ $shift->ded_full_lunch_hrs == 'on' ? 'checked' : '' }}>
                                                                                                        <p class="pl-3"
                                                                                                            style="color:orange">
                                                                                                            Deduct Hrs
                                                                                                        </p>
                                                                                                    </div>
                                                                                                </td>
                                                                                                <td>
                                                                                                    <div class="tabletext"
                                                                                                        style="display:flex;align-items:center; !important">
                                                                                                        <input
                                                                                                            type="text"
                                                                                                            name="sms_send"
                                                                                                            class="selective"
                                                                                                            style="width: 94px;height: 23px"
                                                                                                            value=""
                                                                                                            disabled>
                                                                                                    </div>
                                                                                                </td>
                                                                                            </tr>
                                                                                        @endif
                                                                                    @endforeach
                                                                                </tbody>
                                                                            </table>
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
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="table_actions">
                                <div class="row align-items-center">
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 ">
                                        <div class="table_actionsBtns">
                                            <button class="tb_actionBtn" id="shift_model">Add</button>
                                            <button class="tb_actionBtn">Exit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- //table --}}
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
{{-- //add_model --}}
<div class="modal fade" id="add_shift" tabindex="-1" role="dialog" aria-hidden="true"
    style="top:17px;left: -186px width:-webkit-fill-available">
    <div class="modal-dialog" role="document">
        {{-- <div class="modal-content" style="width: 173%;"> --}}
        <div class="modal-content" style="width: 252%;left: -380px">
            <div class="modal-header" style="background-color: #BCBCBC;">
                <h6 style="padding-bottom: 0px;margin-left: 500px;">Add New Shifts Details Here</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body" style="background-color: #ededed">
                <form method="post" id="skills" action="{{ route('shift_master.store') }}">
                    @csrf
                    <div class="row">
                        <div class="col-6">
                            <div class="popupForm_col">
                                <strong>Company Name*</strong>
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
                                <strong>Shift Code *</strong>
                                <div class="popupForm_field">
                                    <select name="shift_code" class="selective">
                                        @foreach ($shiftCode as $id)
                                            <option value="{{ $id->shift_code }}">
                                                {{ $id->shift_code }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        {{-- // --}}
                        <div class="col-6">
                            <div class="popupForm_col">
                                <strong>Shift Name*</strong>
                                <div class="popupForm_field">
                                    <select name="shift_name" class="selective">
                                        @foreach ($shiftCode as $shiftname)
                                            <option value="{{ $shiftname->shift_Name }}">
                                                {{ $shiftname->shift_Name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        {{-- // --}}
                        <div class="col-lg-8" style="flex: 2 1 72.666667%;max-width: 100.666667%;">
                            <table class="table bordered-table" id="shift_master">
                                <thead style="background-color: #343A40;text-align: center;vertical-align: middle;">
                                    <tr>
                                        {{-- <th>
                                                <h6 class="text-left shift_heade">Select All</h6>
                                                <input type="checkbox" name="select_all">
                                            </th> --}}
                                        <th>
                                            <h6 class="text-left shift_heade">Week Day</h6>
                                        </th>
                                        <th>
                                            <h6 class="text-left shift_heade">Time Zone</h6>
                                        </th>
                                        <th>
                                            <h6 class="text-left shift_heade">Shift In</h6>
                                        </th>
                                        <th>
                                            <h6 class="text-left shift_heade">Shift Out</h6>
                                        </th>
                                        <th>
                                            <h6 class="text-left shift_heade">Lunch In</h6>
                                        </th>
                                        <th>
                                            <h6 class="text-left shift_heade">Lunch Out</h6>
                                        </th>
                                        <th>
                                            <h6 class="text-left shift_heade">Ded.Full Lunch Hrs</h6>
                                        </th>
                                        {{-- <th>
                                            <h6 class="text-left shift_heade">Extra Day Hrs</h6>
                                        </th> --}}
                                        <th>
                                            <h6 class="text-left shift_heade">Send SMS Delay</h6>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $i = 1;
                                    @endphp
                                    @foreach ($weeks as $week)
                                        <tr>
                                            <td>
                                                <div class="tabletext" style="display: flex; align-items: center;">
                                                    {{-- <button class="btn btn-primary"
                                                        style="height: 30px;">Copy</button> --}}
                                                    <p class="pl-3">{{ $week->week_name }}</p>
                                                    <input type="hidden"
                                                        name="week_name[{{ $i }}][week_name]"
                                                        value={{ $week->week_name }}>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="tabletext">
                                                    <select name="week_name[{{ $i }}][time_zone]"
                                                        class="selective" style="width: 94px;height: 33px">
                                                        @foreach ($timezones as $time)
                                                            <option value="{{ $time->label }}">{{ $time->label }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="tabletext">
                                                    <input type="time"
                                                        name="week_name[{{ $i }}][sign_in]"
                                                        class="selective" style="width: 94px;height: 23px">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="tabletext">
                                                    <input type="time"
                                                        name="week_name[{{ $i }}][sign_out]"
                                                        class="selective" style="width: 94px;height: 23px">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="tabletext">
                                                    <input type="time"
                                                        name="week_name[{{ $i }}][Lunch_in]"
                                                        class="selective" style="width: 94px;height: 23px">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="tabletext">
                                                    <input type="time"
                                                        name="week_name[{{ $i }}][Lunch_out]"
                                                        class="selective" style="width: 94px;height: 23px">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="tabletext" style="display:flex; align-items:center;">
                                                    <input type="checkbox"
                                                        name="week_name[{{ $i }}][Monday_check]">
                                                    <p class="pl-3" style="color:orange">Deduct Hrs</p>
                                                </div>
                                            </td>
                                            {{-- <td>
                                                <div class="tabletext" style="display:flex;align-items:center;">
                                                    <input type="checkbox" name="week_name[{{$i}}][tuesday_check]">
                                                    <p class="pl-3" style="color:orange">Extra Day Hrs</p>
                                                </div>
                                            </td> --}}
                                            <td>
                                                <div class="tabletext"
                                                    style="display:flex;align-items:center; !important">
                                                    <input type="text"
                                                        name="week_name[{{ $i }}][sms_send]"
                                                        class="selective" style="width: 94px;height: 23px">
                                                </div>
                                            </td>
                                        </tr>
                                        @php
                                            $i++;
                                        @endphp
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
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
    $(document).ready(function() {
        $('#shift_model').click(function() {
            $('#add_shift').modal('show');
        })
        $('.edit_company').click(function() {
            var Shiftid = $(this).data('dept-id');
            console.log('kkk', Shiftid);
            var $shift_Id = "#" + Shiftid;
            $($shift_Id).modal('show');
        })

    });

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
                var formAction = "{{ route('shift_master.destroy', ':shiftId') }}".replace(':shiftId',
                    shiftId);
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
                    console.log(response);
                    console.log('Hii');
                },
                error: function(error) {
                    console.log(error);
                    console.log('Hello');
                }
            });
        });
        //toggle
        // $('.toggleButton').click(function(){
        //     var inputField = $( this).next('input[type="time"]');
        //     var isDisabled  = $inputField.prop('disabled');
        //     $inputField.prop('disabled',!isDisabled);
        // });
    });
</script>
