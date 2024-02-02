<x-header data="post-profile component" />
<link rel="stylesheet" href="{{ asset('css/css/Employer_activity_responsive.css') }} ">
<link rel="stylesheet" href="{{ asset('css/css/Employer_activity_style.css') }} ">
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
                    {{-- class="active" --}}
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
                                                    <input type="text" placeholder="Add Location" value="">
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
                </div>
                {{-- // --}}
            </div>
        </div>
    </div>
</div>
