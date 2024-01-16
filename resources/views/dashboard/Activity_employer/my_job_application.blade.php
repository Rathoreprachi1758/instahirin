<x-header data="my_job_activity component" />
<link rel="stylesheet " href="{{ asset('css/css/Employer_activity_responsive.css') }} ">
<link rel="stylesheet " href="{{ asset('css/css/Employer_activity_style.css') }} ">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script>
   $(document).ready(function() {
        $('#my-job-activity').DataTable();
    });
</script>
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
                        <li><a href="/My-job-Applicants-activity" class="active">My Job Applicants</a></li>
                        {{-- <li><a href="/job-talents-activity">Job Talents</a></li> --}}
                        <li><a href="/Instahirin-activity">InstaHirin Talents</a></li>
                        <li><a href="/Interview-schedule">Interview Scheduled</a></li>
                        <li><a href="/Job-status">Job Status</a></li>
                        <li><a href="/employment-contract-form">Employment Contract</a></li>
                        <li><a href="/Job-Hire">Hired</a></li>
                        <li><a href="/History ">History</a></li>
                    </ul>
                </div>
                <br>
                <div class="custom_tabs_detail activityTabs actTabSetting">
                    <div class="custom_tabs_data" style="display: block" id="tab3">
                        <div class="activityTable_data">
                            <table class="table table-striped" id="my-job-activity">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Email Address</th>
                                        <th style="width: 100px;">Contact Details</th>
                                        <th>Location</th>
                                        <th>Current Title</th>
                                        <th colspan="2">Work Since</th>
                                        <th>Qualification</th>
                                        <th>Notice Period</th>
                                        <th>Availability</th>
                                        <th>Date</th>
                                        <th colspan="2">Time</th>
                                        <th colspan="3">Schedule Interview</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($results as $my_applicants)
                                        <tr>
                                            <td>{{ $my_applicants->id }}</td>
                                            <td>{{ $my_applicants->name }}</td>
                                            <td>{{ $my_applicants->email }}</td>
                                            <td>{{ $my_applicants->contact_details }}</td>
                                            <td>{{ $my_applicants->current_location }}</td>
                                            <td>{{ $my_applicants->current_title }}</td>
                                            <td colspan="2">{{ $my_applicants->working_since_date }} to {{ $my_applicants->working_since_date2 }}</td>
                                            <td>{{ $my_applicants->highest_qualification }}</td>
                                            <td>{{ $my_applicants->notice_period }}</td>
                                            <td>{{ $my_applicants->availability }}</td>
                                            <td>{{ $my_applicants->availability_date }}</td>
                                            <td colspan="2">{{ $my_applicants->availability_time_from }} to {{ $my_applicants->availability_time_to }}</td>
                                            <td colspan="3">{{ $my_applicants->interview_schedule_date }} from {{ $my_applicants->interview_schedule_time_from }} to {{ $my_applicants->interview_schedule_time_to }}</td>
                                            <td>⋮</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{-- <table class="table table-striped" id="job_activity">
                                <thead>
                                    <tr>
                                        <th><h6>Id</h6></th>
                                        <th><h6>Name</h6></th>
                                        <th><h6>Email Address</h6></th>
                                        <th style="width: 100px;"><h6>Contact Details</h6></th>
                                        <th><h6>Location</h6></th>
                                        <th><h6>Current Title</h6></th>
                                        <th colspan="2"><h6>Work Since</h6></th>
                                        <th><h6>Qualification</h6></th>
                                        <th><h6>Notice Period</h6></th>
                                        <th><h6>Availability</h6></th>
                                        <th><h6>Date</h6></th>
                                        <th colspan="2"><h6>Time</h6></th>
                                        <th colspan="3"><h6>Schedule Interview</h6></th>
                                        <th><h6>Action</h6></th>
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th><h6>From</h6></th>
                                        <th><h6>To</h6></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th><h6>From</h6></th>
                                        <th><h6>To</h6></th>
                                        <th><h6>Date</h6></th>
                                        <th><h6>From</h6></th>
                                        <th><h6>To</h6></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                
                                @foreach ($results as $my_applicants)
                                    <tbody>
                                            <tr>
                                                <td>
                                                    <div class="tabletext">
                                                        <p>{{ $my_applicants->id }}</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="tabletext">
                                                        <p>{{ $my_applicants->name }}</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="tabletext">
                                                        <p>{{ $my_applicants->email }}</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="tabletext">
                                                        <p>{{ $my_applicants->contact_details }}</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="tabletext">
                                                        <p>{{ $my_applicants->current_location }}</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="tabletext">
                                                        <p>{{ $my_applicants->current_title }}</p>
                                                    </div>
                                                </td>
                                                <td width="120">
                                                    <div class="tabletext">
                                                        <p>{{ $my_applicants->working_since_date }}</p>
                                                    </div>
                                                </td>
                                                <td width="60">
                                                    <div class="tabletext">
                                                        <p>{{ $my_applicants->working_since_date2 }}</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="tabletext">
                                                        <p>{{ $my_applicants->highest_qualification }}</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="tabletext">
                                                        <p>{{ $my_applicants->notice_period }}</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="tabletext">
                                                        <p>{{ $my_applicants->availability }}</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="tabletext">
                                                        <p>{{ $my_applicants->availability_date }}</p>
                                                    </div>
                                                </td>
                                                <td width="60">
                                                    <div class="tabletext">
                                                        <p>{{ $my_applicants->availability_time_from }}</p>
                                                    </div>
                                                </td>
                                                <td width="60">
                                                    <div class="tabletext">
                                                        <p>{{ $my_applicants->availability_time_to }}</p>
                                                    </div>
                                                </td>
                                                <td width="60">
                                                    <div class="tabletext">
                                                        <p>{{ $my_applicants->availability_time_from }}</p>
                                                    </div>
                                                </td>
                                                <td width="60">
                                                    <div class="tabletext">
                                                        <p>{{ $my_applicants->availability_time_to }}</p>
                                                    </div>
                                                </td>
                                                <td width="60">
                                                    <div class="tabletext">
                                                        <p>{{ $my_applicants->interview_schedule_date }}</p>
                                                    </div>
                                                </td>
                                                <td width="60">
                                                    <div class="tabletext">
                                                        <p>{{ $my_applicants->interview_schedule_time_from }}</p>
                                                    </div>
                                                </td>
                                                <td width="60">
                                                    <div class="tabletext">
                                                        <p>{{ $my_applicants->interview_schedule_time_to }}</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="tabletext">
                                                        <p>⋮</p>
                                                    </div>
                                                </td>
                                            </tr>
                                    </tbody>
                                    
                                @endforeach
                            </table> --}}
                            {{-- <table class="table table-striped table-bordered" id="job_activity">
                                <thead>
                                    <tr style="width:200px !important">
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email Address</th>
                                        <th >Contact Details</th>
                                        <th>Location</th>
                                        <th>Current Title</th>
                                        <th>Work Since</th>
                                        <th>Qualification</th>
                                        <th>Notice Period</th>
                                        <th>Availability</th>
                                        <th>Date</th>
                                        <th>Time</th>
                                        <th>Schedule Interview</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($myjob_applicant as $my_applicants)
                                        <tr>
                                            <td>{{ $my_applicants->id }}</td>
                                            <td>{{ $my_applicants->name }}</td>
                                            <td>{{ $my_applicants->email }}</td>
                                            <td>{{ $my_applicants->contact_details }}</td>
                                            <td>{{ $my_applicants->current_location }}</td>
                                            <td>{{ $my_applicants->current_title }}</td>
                                            <td>{{ $my_applicants->working_since_date }} to
                                                {{ $my_applicants->working_since_date2 }}</td>
                                            <td>{{ $my_applicants->highest_qualification }}</td>
                                            <td>{{ $my_applicants->notice_period }}</td>
                                            <td>{{ $my_applicants->availability }}</td>
                                            <td>{{ $my_applicants->availability_date }}</td>
                                            <td>{{ $my_applicants->availability_time_from }} to
                                                {{ $my_applicants->availability_time_to }}</td>
                                            <td>{{ $my_applicants->interview_date }}
                                                {{ $my_applicants->interview_time_from }} to
                                                {{ $my_applicants->interview_time_to }}</td>
                                            <td>⋮</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
