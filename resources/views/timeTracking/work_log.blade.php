<x-header data="offers component" />
<link rel="stylesheet" href="{{ asset('css/css/Employer_activity_style.css') }}">
<link rel="stylesheet" href="{{ asset('css/css/Employer_activity_style.css') }}">



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
</style>


<div class="fr-section" style="margin-top: -72px">

    <div class="fr-section_detail">
        <div class="container-fluid">
            <div style="font-size:22px;font-weight:600;margin-bottom:3px;">Time Tracking</div>
            <div style="font-size:16px;font-weight:500;margin-bottom:15px"><b>Description:</b> To monitor the
                timekeeping records of employees within their respective companies.</div>
            <div class="dashboard_innerPages">
                <div class="custom_tabs_section">
                    <div class="custom_tabs">
                    </div>
                    <br>
                    <div class="tabletext">
                        <form action="{{ route('workLogCompany') }}" method="POST">
                            @csrf
                            <label for="from" style="font-size: 14px;">Select Company:</label>
                            <select id="companyName" name="company" aria-label="First select example"
                                onchange="fetchDepartments()">
                                <option selected disabled>Select Company</option>
                                @isset($companies)
                                    @foreach ($companies as $company)
                                        <option value="{{ $company->id }}">{{ $company->company_name }}</option>
                                    @endforeach
                                @endisset
                            </select>
                            <label for="departmentSelect" style="font-size: 14px;">Select Department:</label>
                            <select id="departmentName" name="department" aria-label="Second select example">
                                @if (!isset($companies))
                                    disabled
                                @endif>
                                <option selected disabled>Select Department</option>
                                @isset($departments)
                                    @foreach ($departments as $department)
                                        <option value="{{ $department->id }}">
                                            {{ $department->department_name }}
                                        </option>
                                    @endforeach
                                @endisset
                            </select>
                            <label for="from" style="font-size: 14px;">From:</label>
                            <input type="date" id="from" name="from">
                            <label for="to" style="font-size: 14px;">To:</label>
                            <input type="date" id="to" name="to">
                            <button class="btn-dark" type="submit" style="font-size: 14px;">Filter</button>
                        </form>

                    </div>

                    <div class="ppp">
                        <!-- End of 'from' and 'to' date inputs -->
                        <div class="custom_tabs_data" style="display: block" id="tab5">
                            <div class="row mt-3">
                                <div class="col-xl-12 col-xl-12 col-lg-12 col-md-12">
                                    <div class="table-responsive">
                                        <div class="activityTable_data">
                                            <table class="table table-bordered text-center tracking-table">
                                                <thead>
                                                    <tr>
                                                        <td rowspan="2" class="align-middle">#</td>
                                                        <td rowspan="2" class="align-middle">Company</td>
                                                        <td rowspan="2" class="align-middle">Department</td>
                                                        <td rowspan="2" class="align-middle">Emp Code</td>
                                                        <td rowspan="2" class="align-middle"> Calendar</td>
                                                        <td colspan="2">Time Recorder</td>
                                                        <td rowspan="2" class="align-middle">Total Hours</td>
                                                        <td rowspan="2" class="align-middle">Ip Address</td>
                                                        <td rowspan="2" class="align-middle">Action</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Time In</td>
                                                        <td>Time Out</td>
                                                    </tr>
                                                </thead>


                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Bizionic Tech</td>
                                                        <td>Marketing</td>
                                                        <td>014</td>
                                                        <td>01/12/2023</td>
                                                        <td>11:00</td>
                                                        <td>19:00</td>
                                                        <td>07:00 Hrs</td>
                                                        <td>192.172.100.1</td>
                                                        <td><span style="color:rgb(8, 194, 8)">Accept</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td>034</td>
                                                        <td>01/10/2023</td>
                                                        <td>11:00</td>
                                                        <td>19:00</td>
                                                        <td>08:00 Hrs</td>
                                                        <td>192.172.100.2</td>
                                                        <td><span style="color: rgb(208, 18, 18);">Reject</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td>064</td>
                                                        <td>01/10/2023</td>
                                                        <td>00:00</td>
                                                        <td>00:00</td>
                                                        <td>00:00 Hrs</td>
                                                        <td>192.172.100.3</td>
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
                                                </tbody>


                                                @php($increamentId = 1)
                                                @isset($punchInOutInfo)
                                                    @foreach ($punchInOutInfo as $punchInOutData)
                                                        <tr>
                                                            <td>
                                                                <div class="tabletext">
                                                                    <p>{{ $increamentId }}</p>
                                                                </div>
                                                            <td>
                                                                <div class="tabletext">
                                                                    <p>{{ $punchInOutData['company']->company_name }}</p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="tabletext">
                                                                    <p>{{ $punchInOutData['department']->department_name }}
                                                                    </p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="tabletext">
                                                                    <p>{{ $punchInOutData['date'] }}</p>
                                                                </div>
                                                            </td>
                                                            <td width="180">
                                                                <table>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td width="80"
                                                                                style="border-right: 1px solid #000;">
                                                                                <div class="tabletext">
                                                                                    <p>{{ $punchInOutData['punchIn'] }}</p>
                                                                                </div>
                                                                            </td>

                                                                            <td width="50">
                                                                                <div class="tabletext">
                                                                                    <p>{{ $punchInOutData['punchOut'] }}
                                                                                    </p>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                            {{--                                                <td> --}}
                                                            {{--                                                    <div class="tabletext"> --}}
                                                            {{--                                                        <p>punchIn - {{ $punchInOutData['punchIn'] }}</p> --}}
                                                            {{--                                                        <p>punchOut - {{ $punchInOutData['punchOut'] }}</p> --}}
                                                            {{--                                                    </div> --}}
                                                            {{--                                                </td> --}}
                                                            <td>
                                                                <div class="tabletext">
                                                                    <p>{{ $punchInOutData['totalWorkHours'] }}</p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="tabletext">
                                                                    <p>{{ $punchInOutData['ip_address'] }}</p>
                                                                </div>
                                                            </td>
                                                            <td width="90">
                                                                <div class="tabletext">
                                                                    <div class="statusFiled">
                                                                        @if ($punchInOutData['work_log_status'] === null)
                                                                            <strong class="">Pending</strong>
                                                                        @elseif($punchInOutData['work_log_status'] == 1)
                                                                            <strong class="">Accept</strong>
                                                                        @elseif($punchInOutData['work_log_status'] == 0)
                                                                            <strong class="">Reject</strong>
                                                                        @elseif($punchInOutData['work_log_status'] == 2)
                                                                            <strong class="">Approved</strong>
                                                                        @elseif($punchInOutData['work_log_status'] == 3)
                                                                            <strong class="">Rejected</strong>
                                                                        @endif
                                                                        <div class="statusFieldInfo">
                                                                            @if ($punchInOutData['work_log_status'] === null)
                                                                                <div class="statusDrop">
                                                                                    <span><i class="fa fa-ellipsis-v"
                                                                                            aria-hidden="true"></i></span>
                                                                                    <div class="statusDropdown">
                                                                                        <ul>
                                                                                            <li>
                                                                                                <form
                                                                                                    action="{{ route('status') }}"
                                                                                                    method="post">
                                                                                                    @csrf
                                                                                                    <input type="hidden"
                                                                                                        value="1"
                                                                                                        name="status">
                                                                                                    <input type="hidden"
                                                                                                        value="{{ $punchInOutData['department']->id }}"
                                                                                                        name="department_id">
                                                                                                    <input type="hidden"
                                                                                                        value="{{ $punchInOutData['company']->id }}"
                                                                                                        name="company_id">
                                                                                                    <input type="hidden"
                                                                                                        value="{{ $punchInOutData['date'] }}"
                                                                                                        name="date">
                                                                                                    <input type="submit"
                                                                                                        value="Accept"
                                                                                                        name="workLog">
                                                                                                </form>
                                                                                            </li>
                                                                                            <li>
                                                                                                <form
                                                                                                    action="{{ route('status') }}"
                                                                                                    method="post">
                                                                                                    @csrf
                                                                                                    <input type="hidden"
                                                                                                        value="0"
                                                                                                        name="status">
                                                                                                    <input type="hidden"
                                                                                                        value="{{ $punchInOutData['department']->id }}"
                                                                                                        name="department_id">
                                                                                                    <input type="hidden"
                                                                                                        value="{{ $punchInOutData['company']->id }}"
                                                                                                        name="company_id">
                                                                                                    <input type="hidden"
                                                                                                        value="{{ $punchInOutData['date'] }}"
                                                                                                        name="date">
                                                                                                    <input type="submit"
                                                                                                        value="Reject"
                                                                                                        name="workLog">
                                                                                                </form>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            <td>
                                                                <button type="button" class="btn btn-primary"
                                                                    data-toggle="modal"
                                                                    data-target="#exampleModal-{{ $increamentId }}"
                                                                    data-whatever="@isset($punchInOutData['punchHistories']){{ json_encode($punchInOutData['punchHistories']) }}@endisset">
                                                                    View
                                                                </button>
                                                            </td>
                                                            <div class="modal fade" id="exampleModal-{{ $increamentId }}"
                                                                tabindex="-1" role="dialog"
                                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title"
                                                                                id="exampleModalLabel">Punch
                                                                                History</h5>
                                                                            <button type="button" class="close"
                                                                                data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            @isset($punchInOutData['punchHistories'])
                                                                                <ul class="list-group">
                                                                                    @foreach ($punchInOutData['punchHistories'] as $punchHistory)
                                                                                        @isset($punchHistory['punch_in'])
                                                                                            @if ($punchHistory['punch_in'] !== null)
                                                                                                <li class="list-group-item">Punch
                                                                                                    In
                                                                                                    At:
                                                                                                    {{ Carbon\Carbon::parse($punchHistory['punch_in'])->format('h:i A') }}
                                                                                                </li>
                                                                                            @endif
                                                                                        @endisset
                                                                                        @isset($punchHistory['punch_out'])
                                                                                            @if ($punchHistory['punch_out'] !== null)
                                                                                                <li class="list-group-item">Punch
                                                                                                    Out
                                                                                                    At:
                                                                                                    {{ Carbon\Carbon::parse($punchHistory['punch_out'])->format('h:i A') }}
                                                                                                </li>
                                                                                            @endif
                                                                                        @endisset
                                                                                    @endforeach
                                                                                </ul>
                                                                            @endisset
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </tr>
                                                        @php($increamentId++)
                                                    @endforeach
                                                @endisset
                                                </tbody>
                                            </table>
                                            <!-- Button trigger modal -->
                                            {{--                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" --}}
                                            {{--                                     aria-labelledby="exampleModalLabel" aria-hidden="true"> --}}
                                            {{--                                    <div class="modal-dialog" role="document"> --}}
                                            {{--                                        <div class="modal-content"> --}}
                                            {{--                                            <div class="modal-header"> --}}
                                            {{--                                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> --}}
                                            {{--                                                <button type="button" class="close" data-dismiss="modal" --}}
                                            {{--                                                        aria-label="Close"> --}}
                                            {{--                                                    <span aria-hidden="true">&times;</span> --}}
                                            {{--                                                </button> --}}
                                            {{--                                            </div> --}}
                                            {{--                                            <div class="modal-body"> --}}
                                            {{--                                                @isset($punchInOutData['punchHistories']) --}}
                                            {{--                                                    <ul class="list-group"> --}}
                                            {{--                                                        @foreach ($punchInOutData['punchHistories'] as $punchHistory) --}}
                                            {{--                                                            @isset($punchHistory['punch_in']) --}}
                                            {{--                                                                @if ($punchHistory['punch_in'] !== null) --}}
                                            {{--                                                                    <li class="list-group-item">Punch In At: {{ Carbon\Carbon::parse($punchHistory['punch_in'])->format('h:i A') }}</li> --}}
                                            {{--                                                                @endif --}}
                                            {{--                                                            @endisset --}}
                                            {{--                                                            @isset($punchHistory['punch_out']) --}}
                                            {{--                                                                @if ($punchHistory['punch_out'] !== null) --}}
                                            {{--                                                                    <li class="list-group-item">Punch Out At: {{ Carbon\Carbon::parse($punchHistory['punch_out'])->format('h:i A') }}</li> --}}
                                            {{--                                                                @endif --}}
                                            {{--                                                            @endisset --}}
                                            {{--                                                        @endforeach --}}
                                            {{--                                                    </ul> --}}
                                            {{--                                                @endisset --}}
                                            {{--                                            </div> --}}
                                            {{--                                            <div class="modal-footer"> --}}
                                            {{--                                                <button type="button" class="btn btn-secondary" data-dismiss="modal"> --}}
                                            {{--                                                    Close --}}
                                            {{--                                                </button> --}}
                                            {{--                                            </div> --}}
                                            {{--                                        </div> --}}
                                            {{--                                    </div> --}}
                                            {{--                                </div> --}}


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
    function fetchDepartments() {
        var companyId = document.getElementById('companyName').value;
        var departmentSelect = document.getElementById('departmentName');
        console.log(companyId);
        departmentSelect.innerHTML = ' <option selected disabled>Select Department</option>';
        fetch('/company/' + companyId, {
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
<script>
    <?php if (isset($punchInOutData['punchHistories'])) { ?>

    function populateModal() {
        // Get the punch histories data from PHP
        var punchHistories = <?php if (isset($punchInOutData)) {
            echo json_encode($punchInOutData['punchHistories']);
        } ?>;

        // Create HTML content for punch histories
        var html = '';
        if (punchHistories.length > 0) {
            html += '<ul class="list-group">';
            punchHistories.forEach(function(punchHistory) {
                html += '<li class="list-group-item">';
                if (punchHistory['punch_in'] != null) {
                    html += 'Punch In At: ' + moment(punchHistory['punch_in']).format('h:mm A');
                }
                if (punchHistory['punch_out'] != null) {
                    html += ' Punch Out At: ' + moment(punchHistory['punch_out']).format('h:mm A');
                }
                html += '</li>';
            });
            html += '</ul>';
        } else {
            html = '<p>No punch history available.</p>';
        }

        // Populate the modal body with HTML content
        document.getElementById('modalBody').innerHTML = html;
    }
    <?php } ?>
</script>
<!-- Include moment.js via CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>

<script>
    $('#exampleModal').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget); // Button that triggered the modal
        var punchHistories = button.data('whatever'); // Extract info from data-* attributes
        var modal = $(this);
        var punchHistoryList = modal.find('#punchHistoryList');
        punchHistoryList.empty(); // Clear previous data
        $.each(punchHistories, function(index, punchHistory) {
            if (punchHistory['punch_in'] !== null) {
                punchHistoryList.append('<li class="list-group-item">Punch In At: ' + moment(
                    punchHistory['punch_in']).format('h:i A') + '</li>');
            }
            if (punchHistory['punch_out'] !== null) {
                punchHistoryList.append('<li class="list-group-item">Punch Out At: ' + moment(
                    punchHistory['punch_out']).format('h:i A') + '</li>');
            }
        });
    });
</script>
</div>
