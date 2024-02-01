<x-header data="Hired component" />
<link rel="stylesheet " href="{{ asset('css/css/Employer_activity_responsive.css') }} ">
<link rel="stylesheet " href="{{ asset('css/css/Employer_activity_style.css') }} ">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#Hired').DataTable();
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
                        <li><a href="/My-job-Applicants-activity">My Job Applicants</a></li>
                        {{-- <li><a href="/job-talents-activity">Job Talents</a></li> --}}
                        <li><a href="/Instahirin-activity">InstaHirin Talents</a></li>
                        <li><a href="/Interview-schedule">Interview Scheduled</a></li>
                        <li><a href="/Job-status">Job Status</a></li>
                        <li><a href="/employment-contract-form">Employment Contract</a></li>
                        <li><a href="/Job-Hire" class="active">Hired</a></li>
                        <li><a href="/History ">History</a></li>
                    </ul>
                </div>
                <br>
                <!-- tab8 data  -->
                <div class="custom_tabs_data" style="display: block" id="tab8">
                    <div class="row">
                        <div class="col-xxl-10 col-xl-11s col-lg-12 col-md-12">
                            <div class="activityTable_data">
                                <table class="table table-striped" id="Hired">
                                    <thead>
                                        <tr>
                                            <th>
                                                <h6>Id</h6>
                                            </th>
                                            <th>
                                                <h6>Name</h6>
                                            </th>
                                            <th>
                                                <h6>Position Title</h6>
                                            </th>
                                            <th>
                                                <h6>Contact Details</h6>
                                            </th>
                                            <th>
                                                <h6>Company Name</h6>
                                            </th>
                                            <th>
                                                <h6>Business Email</h6>
                                            </th>
                                            <th>
                                                <h6>Hired Date</h6>
                                            </th>
                                            <th>
                                                <h6>Onboarding Status</h6>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($Hired_applicants as $applicants)
                                        <tr>
                                            <td>
                                                <div class="tabletext">
                                                    <p>{{$applicants->id}}</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="tabletext">
                                                    <p>{{$applicants->name}}</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="tabletext">
                                                    <p>{{$applicants->current_title}}</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="tabletext">
                                                    <p>{{$applicants->contact_details}}</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="tabletext">
                                                    <p>-</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="tabletext">
                                                    <p>-</p>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="tabletext">
                                                    <p>-</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="tabletext">
                                                    <p>-</p>
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
