<x-header data="History component" />
<link rel="stylesheet " href="{{ asset('css/css/Employer_activity_responsive.css') }} ">
<link rel="stylesheet " href="{{ asset('css/css/Employer_activity_style.css') }} ">
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
                        <li><a href="/Job-Hire">Hired</a></li>
                        <li><a href="/History " class="active">History</a></li>
                    </ul>
                </div>
                <br>
                <!-- tab8 data  -->
                <div class="custom_tabs_data" style="display: block" id="tab9">
                    <div class="row">
                        <div class="col-xxl-8 col-xl-10 col-lg-11 col-md-12">
                            <div class="activityTable_data">
                                <table class="table table-striped">
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
                                                <h6>Work Experience</h6>
                                            </th>
                                            <th>
                                                <h6>Expert in</h6>
                                            </th>
                                            <th>
                                                <h6>Location</h6>
                                            </th>
                                            <th>
                                                <h6>Availability</h6>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="tabletext">
                                                    <p>1</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="tabletext">
                                                    <p>Rajesh Kumar</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="tabletext">
                                                    <p>Python Developer</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="tabletext">
                                                    <p>5 Yrs</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="tabletext">
                                                    <p>Java, C, C+</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="tabletext">
                                                    <p>Mumbai</p>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="tabletext">
                                                    <p>Full Time</p>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
