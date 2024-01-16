<x-header data="interview_schedule component" />
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
                        <li><a href="/Instahirin-activity">InstaHirin Shortlist</a></li>
                        <li><a href="/Interview-schedule" class="active" >Interview Scheduled</a></li>
                        <li><a href="/Job-status">Job Status</a></li>
                        <li><a href="/employment-contract-form">Employment Contract</a></li>
                        <li><a href="/Job-Hire">Hired</a></li>
                        <li><a href="/History ">History</a></li>
                    </ul>
                </div>
                <br>
                <!-- tab6 data  -->
                <div class="custom_tabs_data" style="display: block" id="tab6">
                    <div class="row">
                        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
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
                                                <h6>Company Name</h6>
                                            </th>
                                            <th>
                                                <h6>Business Email</h6>
                                            </th>
                                            <th>
                                                <h6>Hire Period</h6>
                                            </th>

                                            <th width="240">
                                                <h6>
                                                    Scheduled on Virtual call Assistance
                                                </h6>
                                                <table>
                                                    <thead>
                                                        <th width="110">
                                                            <h6>Date</h6>
                                                        </th>
                                                        <th width="60">
                                                            <h6>From</h6>
                                                        </th>
                                                        <th width="60">
                                                            <h6>To</h6>
                                                        </th>
                                                    </thead>
                                                </table>
                                            </th>
                                            <th>
                                                <h6>Meeting Link</h6>
                                            </th>
                                            <th>
                                                <h6>Interviewer</h6>
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
                                                    <p>Ravi Kumar</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="tabletext">
                                                    <p>PHP Developer</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="tabletext">
                                                    <p>Bizionic Technologies</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="tabletext">
                                                    <p>hr@bizionictech.com</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="tabletext">
                                                    <p>Full Time</p>
                                                </div>
                                            </td>

                                            <td width="240">
                                                <table>
                                                    <tbody>
                                                        <tr>
                                                            <td width="110">
                                                                <div class="tabletext">
                                                                    <p>Dd/mm/yyyy</p>
                                                                </div>
                                                            </td>
                                                            <td width="60">
                                                                <div class="tabletext">
                                                                    <p>HH-MM</p>
                                                                </div>
                                                            </td>
                                                            <td width="60">
                                                                <div class="tabletext">
                                                                    <p>HH-MM</p>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>

                                            <td>
                                                <div class="tabletext">
                                                    <p>
                                                        <a href="#">https://us04web.zoom.us/j/739425646</a>
                                                    </p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="tabletext">
                                                    <p>Lavanya</p>
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
