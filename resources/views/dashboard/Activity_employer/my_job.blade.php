<x-header data="my_job component" />
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
                        <li><a href="/Employer-activity" >Post a Job</a></li>
                        <li><a href="/My-job-activity" class="active">My Job</a></li>
                        <li><a href="/My-job-Applicants-activity">My Job Applicants</a></li>
                        <li><a href="/job-talents-activity">Job Talents</a></li>
                        <li><a href="/Instahirin-activity">InstaHirin Shortlist</a></li>
                        <li><a href="/Interview-schedule">Interview Scheduled</a></li>
                        <li><a href="/Job-status">Job Status</a></li>
                        <li><a href="/employment-contract-form">Employment Contract</a></li>
                        <li><a href="/Job-Hire">Hired</a></li>
                        <li><a href="/History ">History</a></li>
                    </ul>
                </div>
                <br>
                <div class="custom_tabs_detail activityTabs actTabSetting">
                    <!-- tab2 data  -->
                    <div class="custom_tabs_data" style="display: block" id="tab2">
                        <div class="activityTable_data">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>
                                            <h6>Id</h6>
                                        </th>
                                        <th>
                                            <h6>Position Title</h6>
                                        </th>
                                        <th>
                                            <h6>Work Mode</h6>
                                        </th>
                                        <th>
                                            <h6>Skills</h6>
                                        </th>
                                        <th>
                                            <h6>Work Exp(years)</h6>
                                        </th>
                                        <th>
                                            <h6>Role Type</h6>
                                        </th>
                                        <th>
                                            <h6>Gross Salary</h6>
                                        </th>
                                        <th>
                                            <h6>Hourly</h6>
                                        </th>
                                        <th>
                                            <h6>Monthly</h6>
                                        </th>
                                        <th>
                                            <h6>Project</h6>
                                        </th>
                                        <th>
                                            <h6>Qualification</h6>
                                        </th>
                                        <th>
                                            <h6>Location</h6>
                                        </th>
                                        <th>
                                            <h6>Contact Mail ID</h6>
                                        </th>
                                        <th>
                                            <h6>Attachment</h6>
                                        </th>
                                    </tr>
                                </thead>
                                {{-- <tbody>
                                    <tr>
                                        <td>
                                            <div class="tabletext">
                                                <p>1</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="tabletext">
                                                <p>App Developer</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="tabletext">
                                                <p>On Site</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="tabletext">
                                                <p>Java, C, C+</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="tabletext">
                                                <p>3 Yrs</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="tabletext">
                                                <p>Full Time</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="tabletext">
                                                <p>360000</p>
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
                                                <p>B.Sc</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="tabletext">
                                                <p>Hyderabad</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="tabletext">
                                                <p>hr@bizionictech.com</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="tabletext_btn">
                                                <a href="#" class="documentBtn">Document</a>
                                                <a href="#" class="viewBtn"><i class="fa fa-eye"
                                                        aria-hidden="true"></i></a>
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
                                                <p>App Developer</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="tabletext">
                                                <p>On Site</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="tabletext">
                                                <p>Java, C, C+</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="tabletext">
                                                <p>3 Yrs</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="tabletext">
                                                <p>Full Time</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="tabletext">
                                                <p>360000</p>
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
                                                <p>B.Sc</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="tabletext">
                                                <p>Hyderabad</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="tabletext">
                                                <p>hr@bizionictech.com</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="tabletext_btn">
                                                <a href="#" class="documentBtn">Document</a>
                                                <a href="#" class="viewBtn"><i class="fa fa-eye"
                                                        aria-hidden="true"></i></a>
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
                                                <p>App Developer</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="tabletext">
                                                <p>On Site</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="tabletext">
                                                <p>Java, C, C+</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="tabletext">
                                                <p>3 Yrs</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="tabletext">
                                                <p>Full Time</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="tabletext">
                                                <p>360000</p>
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
                                                <p>B.Sc</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="tabletext">
                                                <p>Hyderabad</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="tabletext">
                                                <p>hr@bizionictech.com</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="tabletext_btn">
                                                <a href="#" class="documentBtn">Document</a>
                                                <a href="#" class="viewBtn"><i class="fa fa-eye"
                                                        aria-hidden="true"></i></a>
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
                                                <p>App Developer</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="tabletext">
                                                <p>On Site</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="tabletext">
                                                <p>Java, C, C+</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="tabletext">
                                                <p>3 Yrs</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="tabletext">
                                                <p>Full Time</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="tabletext">
                                                <p>360000</p>
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
                                                <p>B.Sc</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="tabletext">
                                                <p>Hyderabad</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="tabletext">
                                                <p>hr@bizionictech.com</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="tabletext_btn">
                                                <a href="#" class="documentBtn">Document</a>
                                                <a href="#" class="viewBtn"><i class="fa fa-eye"
                                                        aria-hidden="true"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody> --}}
                                @foreach ($myjob as $job)
                                    <tr>
                                        <td>
                                            <div class="tabletext">
                                                <p>{{ $job->id }}</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="tabletext">
                                                <p>{{ $job->position_title }}</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="tabletext">
                                                <p>{{ $job->work_mode }}</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="tabletext">
                                                <p>{{ $job->key_skills }}</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="tabletext">
                                                <p>{{ $job->max_experience }} to {{ $job->min_experience }}</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="tabletext">
                                                <p>{{ $job->employment_type }}</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="tabletext">
                                                <p> {{ $job->max_salary }}</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="tabletext">
                                                <p>{{ $job->work_mode }}</p>
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
                                                <p>{{ $job->education_qualification }}</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="tabletext">
                                                <p>{{ $job->location }}</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="tabletext">
                                                <p>{{ $job->email }}</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="tabletext_btn">
                                                <a href="{{ asset('storage/' . $job->document) }}"
                                                    class="documentBtn">Document</a>
                                                <a href="javascript:void(0);" class="previewBtn"
                                                    onclick="showPDFPreview('{{ asset('storage/' . $job->document) }}')"
                                                    class="viewBtn"><i class="fa fa-eye" style="color:black" aria-hidden="true"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <script>
            function showPDFPreview(pdfUrl) {
                window.open(pdfUrl, '_blank');
            }
        </script>
