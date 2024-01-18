<x-header data="interview_schedule component" />
<link rel="stylesheet " href="{{ asset('css/css/Employer_activity_style.css') }} ">
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
                        <li><a href="/Job-status" class="active" >Job Status</a></li>
                        <li><a href="/employment-contract-form">Employment Contract</a></li>
                        <li><a href="/Job-Hire">Hired</a></li>
                        <li><a href="/History ">History</a></li>
                    </ul>
                </div>
                <br>
                <!-- tab7 data  -->
                <div class="custom_tabs_data" style="display: block" id="tab7">
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
                                                    <p>+91 9873456720</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="tabletext">
                                                    <p>ravik@gmail.com</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="tabletext">
                                                    <p>Hyderabad</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="tabletext">
                                                    <p>On Site</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="tabletext">
                                                    <p>IOS Developer</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="tabletext">
                                                    <p>5 Yrs</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="tabletext">
                                                    <p>400000</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="tabletext">
                                                    <p>B.Com</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="tabletext">
                                                    <p>30 Days</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="tabletext">
                                                    <p>Full Time</p>
                                                </div>
                                            </td>
                                            <td width="90">
                                                <div class="tabletext">
                                                    <div class="statusFiled">
                                                        <p>
                                                            <strong class="text-success">Hired</strong>
                                                        </p>
                                                        <div class="statusFieldInfo">
                                                            <div class="statusDrop">
                                                                <span><i class="fa fa-ellipsis-v"
                                                                        aria-hidden="true"></i></span>
                                                                <div class="statusDropdown">
                                                                    <ul>
                                                                        <li>
                                                                            <strong><i class="fa fa-check"
                                                                                    aria-hidden="true"></i>
                                                                                Hired</strong>
                                                                        </li>
                                                                        <li>
                                                                            <strong><i class="fa fa-times"
                                                                                    aria-hidden="true"></i>
                                                                                Reject</strong>
                                                                        </li>
                                                                        <li>
                                                                            <strong><i class="fa fa-minus"
                                                                                    aria-hidden="true"></i>
                                                                                On hold</strong>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

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
                                                    <p>+91 9873456720</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="tabletext">
                                                    <p>ravik@gmail.com</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="tabletext">
                                                    <p>Hyderabad</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="tabletext">
                                                    <p>On Site</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="tabletext">
                                                    <p>IOS Developer</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="tabletext">
                                                    <p>5 Yrs</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="tabletext">
                                                    <p>400000</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="tabletext">
                                                    <p>B.Com</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="tabletext">
                                                    <p>30 Days</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="tabletext">
                                                    <p>Full Time</p>
                                                </div>
                                            </td>
                                            <td width="90">
                                                <div class="tabletext">
                                                    <div class="statusFiled">
                                                        <p>
                                                            <strong class="text-danger">Reject</strong>
                                                        </p>
                                                        <div class="statusFieldInfo">
                                                            <div class="statusDrop">
                                                                <span><i class="fa fa-ellipsis-v"
                                                                        aria-hidden="true"></i></span>
                                                                <div class="statusDropdown">
                                                                    <ul>
                                                                        <li>
                                                                            <strong><i class="fa fa-check"
                                                                                    aria-hidden="true"></i>
                                                                                Hired</strong>
                                                                        </li>
                                                                        <li>
                                                                            <strong><i class="fa fa-times"
                                                                                    aria-hidden="true"></i>
                                                                                Reject</strong>
                                                                        </li>
                                                                        <li>
                                                                            <strong><i class="fa fa-minus"
                                                                                    aria-hidden="true"></i>
                                                                                On hold</strong>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

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
                                                    <p>+91 9873456720</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="tabletext">
                                                    <p>ravik@gmail.com</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="tabletext">
                                                    <p>Hyderabad</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="tabletext">
                                                    <p>On Site</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="tabletext">
                                                    <p>IOS Developer</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="tabletext">
                                                    <p>5 Yrs</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="tabletext">
                                                    <p>400000</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="tabletext">
                                                    <p>B.Com</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="tabletext">
                                                    <p>30 Days</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="tabletext">
                                                    <p>Full Time</p>
                                                </div>
                                            </td>
                                            <td width="90">
                                                <div class="tabletext">
                                                    <div class="statusFiled">
                                                        <p>
                                                            <strong class="">On hold</strong>
                                                        </p>
                                                        <div class="statusFieldInfo">
                                                            <div class="statusDrop">
                                                                <span><i class="fa fa-ellipsis-v"
                                                                        aria-hidden="true"></i></span>
                                                                <div class="statusDropdown">
                                                                    <ul>
                                                                        <li>
                                                                            <strong><i class="fa fa-check"
                                                                                    aria-hidden="true"></i>
                                                                                Hired</strong>
                                                                        </li>
                                                                        <li>
                                                                            <strong><i class="fa fa-times"
                                                                                    aria-hidden="true"></i>
                                                                                Reject</strong>
                                                                        </li>
                                                                        <li>
                                                                            <strong><i class="fa fa-minus"
                                                                                    aria-hidden="true"></i>
                                                                                On hold</strong>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
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
