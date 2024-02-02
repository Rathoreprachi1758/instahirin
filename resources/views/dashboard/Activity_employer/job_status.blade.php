<x-header data="interview_schedule component" />
<link rel="stylesheet" href="{{ asset('css/css/Employer_activity_style.css') }} ">
<link rel="stylesheet" href="{{ asset('css/css/Employer_activity_style.css') }} ">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#Job_status').DataTable();
    });
</script>
<style>
    .dropbtn {
        background-color: #fff;
        color: black;
        /* padding: 16px; */
        /* font-size: 16px; */
        border: none;
    }

    .dropdowncustom {
        /* position: relative; */
        display: inline-block;
        /* display: flex; */
        align-items: flex-start;
    }

    .dropdowncustom-content {
        display: none;
        position: absolute;
        background-color: #f1f1f1;
        min-width: 100px;
        box-shadow: 0px 4px 8px 0px rgba(0, 0, 0, 0.2);
        z-index: 1000;
        /* list-style: none; */
        top: 100%;
        right: 0;
    }

    .dropdowncustom-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdowncustom-content a:hover {
        background-color: #9f1e1e;
    }

    .dropdowncustom:hover .dropdowncustom-content {
        display: block;
        z-index: 1000;
    }

    .dropdowncustom:hover .dropbtn {
        background-color: #f3f3f3;
    }

    .button-hover:hover {
        background-color: #eee;
        cursor: pointer;
    }
</style>

<div class="fr-section" style="margin-top: -72px">
    <div class="fr-section_detail">
        <div class="dashboard_innerPages">
            <div class="custom_tabs_section">
                <div class="custom_tittle descriptionTxt">
                    <h4>Employer / Company</h4>
                    <p>
                        <strong>Description:</strong> Keep track of all your
                        activities including job postings and job talents.
                        Details of shortlisted candidates will be scheduled
                        <br />
                        for interview. As well as track the status of Hired
                        details.
                    </p>
                </div>
                <div class="custom_tabs">
                    <ul>
                        <li><a href="/Employer-activity">Post a Job</a></li>
                        <li><a href="/My-job-activity">My Job</a></li>
                        <li><a href="/My-job-Applicants-activity">My Job Applicants</a></li>
                        {{-- <li><a href="/job-talents-activity">Job Talents</a></li> --}}
                        <li><a href="/Instahirin-activity">InstaHirin Talents</a></li>
                        <li><a href="/Interview-schedule">Interview Scheduled</a></li>
                        <li><a href="/Job-status" class="active">Job Status</a></li>
                        <li><a href="/employment-contract-form">Employment Contract</a></li>
                        <li><a href="/Job-Hire">Hired</a></li>
                        <li><a href="/History ">History</a></li>
                    </ul>
                </div>
                <br>
                @if (Session::has('message'))
                    <div class="alert alert-success" style="margin-top: 12px;" id="success-message">
                        <span style="margin-left:330px">{{ Session::get('message') }}</span>
                        <script>
                            // Automatically hide the success message after 20 seconds
                            setTimeout(function() {
                                document.getElementById('success-message').style.display = 'none';
                            }, 5000);
                        </script>
                    </div>
                @endif
                <!-- tab7 data  -->
                <div class="custom_tabs_data" style="display: block" id="tab7">
                    <div class="row">
                        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
                            <div class="activityTable_data">
                                <table class="table table-striped" id="Job_status">
                                    <thead>
                                        <tr>
                                            <th>
                                                <h6>Id</h6>
                                            </th>
                                            <th>
                                                <h6>Name</h6>
                                            </th>
                                            <th>
                                                <h6>Contact Details</h6>
                                            </th>
                                            <th>
                                                <h6>Email Address</h6>
                                            </th>
                                            <th>
                                                <h6>Location</h6>
                                            </th>
                                            <th>
                                                <h6>Work Mode</h6>
                                            </th>
                                            <th>
                                                <h6>Position Title</h6>
                                            </th>
                                            <th>
                                                <h6>Work Exp</h6>
                                            </th>
                                            <th>
                                                <h6>Annual Salary</h6>
                                            </th>
                                            <th>
                                                <h6>Qualification</h6>
                                            </th>
                                            <th>
                                                <h6>Notice Period</h6>
                                            </th>
                                            <th>
                                                <h6>Availability</h6>
                                            </th>
                                            <th width="90">
                                                <h6>Status</h6>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($job_statuses as $job_status)
                                            <tr>
                                                <td>
                                                    <div class="tabletext">
                                                        <p>{{ $job_status->id }}</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="tabletext">
                                                        <p>{{ $job_status->name }}</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="tabletext">
                                                        <p>{{ $job_status->contact_details }}</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="tabletext">
                                                        <p>{{ $job_status->email }}</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="tabletext">
                                                        <p>{{ $job_status->current_location }}</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="tabletext">
                                                        <p>-</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="tabletext">
                                                        <p>{{ $job_status->current_title }}</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="tabletext">
                                                        <p>{{ $job_status->experience_year }}.{{ $job_status->experience_month }}
                                                        </p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="tabletext">
                                                        <p>{{ $job_status->annual_salary_currency }}.{{ $job_status->annual_salary }}
                                                        </p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="tabletext">
                                                        <p>{{ $job_status->highest_qualification }}</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="tabletext">
                                                        <p>{{ $job_status->notice_period }}</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="tabletext">
                                                        <p>{{ $job_status->availability }}</p>
                                                    </div>
                                                </td>
                                                <td width="90">
                                                    <div class="tabletext">
                                                        <div class="dropdowncustom">
                                                            <p>
                                                                <strong class="text-success p-2"
                                                                    style="font-size: 24px;">&vellip;</strong>
                                                            </p>
                                                            <div class="dropdowncustom-content pl-2">
                                                                <form action="{{ url('status-update') }}"
                                                                    method="post" id="activityForm">
                                                                    @csrf
                                                                    <div class="chooseBttn pt-2">
                                                                        <input type="text" name="applicant_id"
                                                                            value="{{ $job_status->id }}" required
                                                                            hidden>
                                                                        <input type="text" name="status"
                                                                            value="" required hidden>
                                                                        <ul class="p-1" style=" ">
                                                                            <li class="p-1"><button type="button" class="dropdown-item"
                                                                                    onclick="submitForm('hired', {{ $job_status->id }})">Hired</button></li>
                                                                            <li class="p-1"><button type="button" class="dropdown-item"
                                                                                    onclick="submitForm('reject', {{ $job_status->id }})">Reject</button>
                                                                            </li>
                                                                            <li class="p-1"><button type="button" class="dropdown-item"
                                                                                    onclick="submitForm('onhold', {{ $job_status->id }})">On
                                                                                    hold</button></li>
                                                                        </ul>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
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
    <script>
        function submitForm(action, applicantId) {
            var form = document.getElementById('activityForm');
            form.elements['status'].value = action;
            form.elements['applicant_id'].value = applicantId;
            form.submit();
        }
    </script>
