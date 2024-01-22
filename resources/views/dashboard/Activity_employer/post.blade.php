<x-header data="post-profile component" />
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
                        <li><a href="/My-job-activity" class="active">My Job</a></li>
                        <li><a href="/My-job-Applicants-activity">My Job Applicants</a></li>
                        {{-- <li><a href="/job-talents-activity">Job Talents</a></li> --}}
                        <li><a href="/Instahirin-activity">InstaHirin Talents</a></li>
                        <li><a href="/Interview-schedule">Interview Scheduled</a></li>
                        <li><a href="/Job-status">Job Status</a></li>
                        <li><a href="/employment-contract-form">Employment Contract</a></li>
                        <li><a href="/Job-Hire">Hired</a></li>
                        <li><a href="/History ">History</a></li>
                    </ul>
                </div>
                {{-- // --}}
                <div class="custom_tabs_detail activityTabs actTabSetting">
                    <!-- tab1 data  -->
                    <div class="custom_tabs_data" style="display: block" id="tab1">
                        <div class="row">
                            <div class="col-xxl-8 col-xl-10 col-lg-11 col-md-12">
                                <div class="postJob_tab">
                                    <p>
                                        Please provides initials information and our
                                        representative will get back to you.
                                    </p>

                                    <div class="row">
                                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                            <div class="auth_field">
                                                <strong>Position Title</strong>
                                                <div class="auth_field_info">
                                                    <input type="text" placeholder="IOS App Developer"
                                                        value="">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                            <div class="auth_field">
                                                <strong>Work Mode</strong>
                                                <div class="auth_select_info">
                                                    <select>
                                                        <option>In Office</option>
                                                        <option>Uae</option>
                                                        <option>Uk</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12">
                                            <div class="auth_field">
                                                <strong>Skills / Project Description</strong>
                                                <div class="auth_field_info">
                                                    <textarea></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12">
                                            <div class="auth_field">
                                                <strong>Key Skills</strong>
                                                <div class="auth_field_info">
                                                    <input type="text" placeholder="" value="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row align-items-end">
                                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4">
                                            <div class="auth_field">
                                                <strong>Work Experience (Years):</strong>
                                                <div class="auth_field_info">
                                                    <div class="auth_select_info">
                                                        <select>
                                                            <option>Min</option>
                                                            <option>Uae</option>
                                                            <option>Uk</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4">
                                            <div class="auth_field">
                                                <div class="auth_field_info">
                                                    <div class="auth_select_info">
                                                        <select>
                                                            <option>Max</option>
                                                            <option>Uae</option>
                                                            <option>Uk</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row align-items-end">
                                        <div class="col-12">
                                            <div class="auth_field">
                                                <strong>Employment Role / Type</strong>
                                                <div class="auth_field_info">
                                                    <div class="auth_select_info">
                                                        <select>
                                                            <option>Full Time</option>
                                                            <option>Uae</option>
                                                            <option>Uk</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row align-items-end">
                                        <div class="col-12">
                                            <div class="auth_field">
                                                <strong>Salary Range (Enter the Salary offered
                                                    for this Job/Project)</strong>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row align-items-end">
                                        <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-3">
                                            <div class="auth_field">
                                                <strong>Monthly / Project</strong>
                                                <div class="auth_field_info">
                                                    <div class="auth_select_info">
                                                        <select>
                                                            <option>$</option>
                                                            <option>£</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-4">
                                            <div class="auth_field">
                                                <div class="auth_field_info">
                                                    <input type="text" placeholder="Min" value="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-4">
                                            <div class="auth_field">
                                                <div class="auth_field_info">
                                                    <input type="text" placeholder="Max" value="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row align-items-end">
                                        <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-3">
                                            <div class="auth_field">
                                                <strong>Yearly</strong>
                                                <div class="auth_field_info">
                                                    <div class="auth_select_info">
                                                        <select>
                                                            <option>$</option>
                                                            <option>£</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-4">
                                            <div class="auth_field">
                                                <div class="auth_field_info">
                                                    <input type="text" placeholder="Min" value="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-4">
                                            <div class="auth_field">
                                                <div class="auth_field_info">
                                                    <input type="text" placeholder="Max" value="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row align-items-end">
                                        <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-3">
                                            <div class="auth_field">
                                                <strong>Hourly</strong>
                                                <div class="auth_field_info">
                                                    <div class="auth_select_info">
                                                        <select>
                                                            <option>$</option>
                                                            <option>£</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-4">
                                            <div class="auth_field">
                                                <div class="auth_field_info">
                                                    <input type="text" placeholder="Min" value="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-4">
                                            <div class="auth_field">
                                                <div class="auth_field_info">
                                                    <input type="text" placeholder="Max" value="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                            <div class="auth_field">
                                                <strong>Location</strong>
                                                <div class="auth_field_info">
                                                    <input type="text" placeholder="Add Location"
                                                        value="">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                            <div class="auth_field">
                                                <strong>Educational Qualification</strong>
                                                <div class="auth_select_info">
                                                    <select>
                                                        <option>Any</option>
                                                        <option>Uae</option>
                                                        <option>Uk</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                            <div class="auth_field">
                                                <strong>Company Name</strong>
                                                <div class="auth_field_info">
                                                    <input type="text" placeholder="" value="">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                            <div class="auth_field">
                                                <strong>Company Website</strong>
                                                <div class="auth_field_info">
                                                    <input type="text" placeholder="" value="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                            <div class="auth_field">
                                                <strong>Contact Person</strong>
                                                <div class="auth_field_info">
                                                    <input type="text" placeholder="" value="">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                            <div class="auth_field">
                                                <strong>E-mail Address</strong>
                                                <div class="auth_field_info">
                                                    <input type="text" placeholder="" value="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row align-items-end">
                                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                            <div class="auth_field">
                                                <strong>Contact Number</strong>
                                                <div class="auth_select_info">
                                                    <select>
                                                        <option>+91 (India)</option>
                                                        <option>Uae</option>
                                                        <option>Uk</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                            <div class="auth_field">
                                                <div class="auth_field_info">
                                                    <input type="text" placeholder="" value="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12">
                                            <div class="auth_field">
                                                <strong>Company Details</strong>
                                                <div class="auth_field_info">
                                                    <textarea></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12">
                                            <div class="auth_field">
                                                <strong>Company Address</strong>
                                                <div class="auth_field_info">
                                                    <textarea></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12">
                                            <div class="auth_field">
                                                <strong>Upload supportive documents, If
                                                    have</strong>
                                                <div class="">
                                                    <input type="file" placeholder="" value="">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="auth_text">
                                                <p class="pb-0">
                                                    <label class="checkbox-label">
                                                        <input type="checkbox">
                                                        <span class="checkbox-custom rectangular"></span>
                                                    </label>
                                                    Notify me about Al-recommended applicants.
                                                </p>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="facilityBtn justify-content-start pt-4">
                                                <a href="#" class="btndefault">Post</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- <!-- tab2 data  -->
                    <div class="custom_tabs_data" style="" id="tab2">
                        <div class="activityTable_data">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>
                                            <h6>#</h6>
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
                                            <h6>Work Exp</h6>
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
                                <tbody>
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
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- tab3 data  -->
                    <div class="custom_tabs_data" style="" id="tab3">
                        <div class="activityTable_data">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>
                                            <h6>#</h6>
                                        </th>
                                        <th>
                                            <h6>Name</h6>
                                        </th>
                                        <th>
                                            <h6>Email Address</h6>
                                        </th>
                                        <th>
                                            <h6>Contact Details</h6>
                                        </th>
                                        <th>
                                            <h6>Location</h6>
                                        </th>
                                        <th>
                                            <h6>Current Title</h6>
                                        </th>
                                        <th width="120">
                                            <h6>Work Since</h6>
                                            <table>
                                                <thead>
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
                                            <h6>Qualification</h6>
                                        </th>
                                        <th>
                                            <h6>Notice Period</h6>
                                        </th>
                                        <th>
                                            <h6>Availability</h6>
                                        </th>
                                        <th>
                                            <h6>Date</h6>
                                        </th>
                                        <th width="120">
                                            <h6>Time</h6>
                                            <table>
                                                <thead>
                                                    <th width="60">
                                                        <h6>From</h6>
                                                    </th>
                                                    <th width="60">
                                                        <h6>To</h6>
                                                    </th>
                                                </thead>
                                            </table>
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
                                                <p>ravikumar@gmail.com</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="tabletext">
                                                <p>+91 9000000001</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="tabletext">
                                                <p>Hyderabad</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="tabletext">
                                                <p>IOS Developer</p>
                                            </div>
                                        </td>
                                        <td width="120">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td width="60">
                                                            <div class="tabletext">
                                                                <p>DD-MM-YYYY</p>
                                                            </div>
                                                        </td>
                                                        <td width="60">
                                                            <div class="tabletext">
                                                                <p>DD-MM-YYYY</p>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                        <td>
                                            <div class="tabletext">
                                                <p>B.Sc</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="tabletext">
                                                <p>1 Month</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="tabletext">
                                                <p>Full Time</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="tabletext">
                                                <p>DD-MM-YYYY</p>
                                            </div>
                                        </td>

                                        <td width="120">
                                            <table>
                                                <tbody>
                                                    <tr>
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
                                                <p>ravikumar@gmail.com</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="tabletext">
                                                <p>+91 9000000001</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="tabletext">
                                                <p>Hyderabad</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="tabletext">
                                                <p>IOS Developer</p>
                                            </div>
                                        </td>
                                        <td width="120">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td width="60">
                                                            <div class="tabletext">
                                                                <p>DD-MM-YYYY</p>
                                                            </div>
                                                        </td>
                                                        <td width="60">
                                                            <div class="tabletext">
                                                                <p>DD-MM-YYYY</p>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                        <td>
                                            <div class="tabletext">
                                                <p>B.Sc</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="tabletext">
                                                <p>1 Month</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="tabletext">
                                                <p>Full Time</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="tabletext">
                                                <p>DD-MM-YYYY</p>
                                            </div>
                                        </td>

                                        <td width="120">
                                            <table>
                                                <tbody>
                                                    <tr>
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
                                                <p>ravikumar@gmail.com</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="tabletext">
                                                <p>+91 9000000001</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="tabletext">
                                                <p>Hyderabad</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="tabletext">
                                                <p>IOS Developer</p>
                                            </div>
                                        </td>
                                        <td width="120">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td width="60">
                                                            <div class="tabletext">
                                                                <p>DD-MM-YYYY</p>
                                                            </div>
                                                        </td>
                                                        <td width="60">
                                                            <div class="tabletext">
                                                                <p>DD-MM-YYYY</p>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                        <td>
                                            <div class="tabletext">
                                                <p>B.Sc</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="tabletext">
                                                <p>1 Month</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="tabletext">
                                                <p>Full Time</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="tabletext">
                                                <p>DD-MM-YYYY</p>
                                            </div>
                                        </td>

                                        <td width="120">
                                            <table>
                                                <tbody>
                                                    <tr>
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
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- tab4 data  -->
                    <div class="custom_tabs_data" style="" id="tab4">
                        <div class="row">
                            <div class="col-xxl-7 col-xl-10 col-lg-12 col-md-12">
                                <div class="activityTable_data">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <h6>#</h6>
                                                </th>
                                                <th>
                                                    <h6>Name</h6>
                                                </th>
                                                <th>
                                                    <h6>Position Title</h6>
                                                </th>
                                                <th>
                                                    <h6>Work Exp</h6>
                                                </th>
                                                <th>
                                                    <h6>Location</h6>
                                                </th>
                                                <th>
                                                    <h6>Work Mode</h6>
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
                                                        <p>Ravi Kumar</p>
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
                                                        <p>Full Time</p>
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
                                                        <p>Full Time</p>
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

                    <!-- tab5 data  -->
                    <div class="custom_tabs_data" style="" id="tab5">
                        <div class="activityTable_data">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>
                                            <h6>#</h6>
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
                                            <h6>Current Location</h6>
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
                                        <th width="180">
                                            <h6>Schedule Interview</h6>
                                            <table>
                                                <thead>
                                                    <th width="60">
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
                                                <p>+91 9671237612</p>
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

                                        <td width="180">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td width="80">
                                                            <div class="tabletext">
                                                                <p>DD-MM-YYYY</p>
                                                            </div>
                                                        </td>
                                                        <td width="50">
                                                            <div class="tabletext">
                                                                <p>HH-MM</p>
                                                            </div>
                                                        </td>
                                                        <td width="50">
                                                            <div class="tabletext">
                                                                <p>HH-MM</p>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
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
                                                <p>+91 9671237612</p>
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

                                        <td width="180">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td width="80">
                                                            <div class="tabletext">
                                                                <p>DD-MM-YYYY</p>
                                                            </div>
                                                        </td>
                                                        <td width="50">
                                                            <div class="tabletext">
                                                                <p>HH-MM</p>
                                                            </div>
                                                        </td>
                                                        <td width="50">
                                                            <div class="tabletext">
                                                                <p>HH-MM</p>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
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
                                                <p>+91 9671237612</p>
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

                                        <td width="180">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td width="80">
                                                            <div class="tabletext">
                                                                <p>DD-MM-YYYY</p>
                                                            </div>
                                                        </td>
                                                        <td width="50">
                                                            <div class="tabletext">
                                                                <p>HH-MM</p>
                                                            </div>
                                                        </td>
                                                        <td width="50">
                                                            <div class="tabletext">
                                                                <p>HH-MM</p>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- tab6 data  -->
                    <div class="custom_tabs_data" style="" id="tab6">
                        <div class="row">
                            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
                                <div class="activityTable_data">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <h6>#</h6>
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

                    <!-- tab7 data  -->
                    <div class="custom_tabs_data" style="" id="tab7">
                        <div class="row">
                            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
                                <div class="activityTable_data">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <h6>#</h6>
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

                    <!-- tab8 data  -->
                    <div class="custom_tabs_data" style="" id="tab8">
                        <div class="row">
                            <div class="col-xxl-10 col-xl-11s col-lg-12 col-md-12">
                                <div class="activityTable_data">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <h6>#</h6>
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
                                                        <p>+91 9612937401</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="tabletext">
                                                        <p>Letwizard Technologies</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="tabletext">
                                                        <p>hr@letwizard.com</p>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="tabletext">
                                                        <p>Dd/mm/yyyy</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="tabletext">
                                                        <p>Not Started</p>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- tab8 data  -->
                    <div class="custom_tabs_data" style="" id="tab9">
                        <div class="row">
                            <div class="col-xxl-8 col-xl-10 col-lg-11 col-md-12">
                                <div class="activityTable_data">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <h6>#</h6>
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
                    </div> --}}
                </div>
                {{-- // --}}
            </div>
        </div>
    </div>
</div>
