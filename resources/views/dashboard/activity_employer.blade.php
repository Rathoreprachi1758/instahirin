<x-header data="employer component" />
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
                        <li><a href="/Employer-activity" class="active">Post a Job</a></li>
                        <li><a href="/My-job-activity">My Job</a></li>
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
                @if (Session::has('message'))
                    <div class="alert alert-success" style="margin-top: 12px;" id="success-message">
                        <span style="margin-left:330px">{{ Session::get('message') }}</span>
                        <script>
                            // Automatically hide the success message after 20 seconds
                            setTimeout(function() {
                                document.getElementById('success-message').style.display = 'none';
                            }, 10000);
                        </script>
                    </div>
                @endif
                @if (Session::has('danger'))
                    <div class="alert alert-danger" style="margin-top: 12px;">
                        <span style="margin-left:330px">{{ Session::get('danger') }}</span>
                    </div>
                @endif
                <div class="custom_tabs_detail activityTabs actTabSetting">
                    <!-- tab1 data  -->
                    <form action="{{ route('post_a_job') }}" method="post" id="job_post"
                        enctype="multipart/form-data">
                        @csrf
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
                                                            value="{{ old('position_title') }}" name="position_title">
                                                    </div>
                                                    @error('position_title')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                                <div class="auth_field">
                                                    <strong>Work Mode</strong>
                                                    <div class="auth_select_info">
                                                        <select name="work_mode" value="{{ old('work_mode') }}">
                                                            <option selected></option>
                                                            <option value="In Office">In Office</option>
                                                            <option value="Remote">Remote</option>
                                                            <option value="Hybrid">Hybrid</option>
                                                            <option value="Flexi Work">Flexi Work</option>
                                                            <option value="Job Sharing">Job Sharing</option>
                                                            <option value="Limited Contract">
                                                                Limited Contract
                                                            </option>
                                                        </select>
                                                    </div>
                                                    @error('work_mode')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-12">
                                                <div class="auth_field">
                                                    <strong>Skills / Project Description</strong>
                                                    <div class="auth_field_info">
                                                        <textarea name="project_description">{{ old('project_description') }}</textarea>
                                                    </div>
                                                    @error('project_description')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-12">
                                                <div class="auth_field">
                                                    <strong>Key Skills</strong>
                                                    <div class="auth_field_info">
                                                        <input type="text" placeholder=""
                                                            value="{{ old('key_skills') }}" name="key_skills">
                                                    </div>
                                                    @error('key_skills')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row align-items-end">
                                            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-4">
                                                <div class="auth_field">
                                                    <strong>Work Experience (Years):</strong>
                                                    <div class="auth_field_info">
                                                        <div class="auth_select_info">
                                                            <select name="min_experience"
                                                                value="{{ old('min_experience') }}">
                                                                <option value="">Min</option>
                                                                <option value="1">1 year</option>
                                                                <option value="2">2 year</option>
                                                                <option value="3">3 year</option>
                                                                <option value="4">4 year</option>
                                                                <option value="5">5 year</option>
                                                                <option value="6">6 year</option>
                                                                <option value="7">7 year</option>
                                                                <option value="8">8 year</option>
                                                                <option value="9">9 year</option>
                                                                <option value="10">10 year</option>
                                                                <option value=">10+">More Than 10</option>
                                                            </select>
                                                        </div>
                                                        @error('min_experience')
                                                            <div class="text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xxl-1 col-xl-1 col-lg-1 col-md-1">
                                                <p class="text-center d-block mt-3" style="margin-bottom: -12px;">To</p>
                                            </div>

                                            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-4">
                                                <div class="auth_field">
                                                    <div class="auth_field_info">
                                                        <div class="auth_select_info">
                                                            <select name="max_experience"
                                                                value="{{ old('max_experience') }}">
                                                                <option value="">Max</option>
                                                                <option value="1">1 year</option>
                                                                <option value="2">2 year</option>
                                                                <option value="3">3 year</option>
                                                                <option value="4">4 year</option>
                                                                <option value="5">5 year</option>
                                                                <option value="6">6 year</option>
                                                                <option value="7">7 year</option>
                                                                <option value="8">8 year</option>
                                                                <option value="9">9 year</option>
                                                                <option value="10">10 year</option>
                                                                <option value=">10+">More Than 10</option>
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
                                                            <select name="employment_type">
                                                                <option value="Full-Time"
                                                                    {{ old('employment_type') == 'Full-Time' ? 'selected' : '' }}>
                                                                    Full Time</option>
                                                                <option value="Part-Time"
                                                                    {{ old('employment_type') == 'Part-Time' ? 'selected' : '' }}>
                                                                    Part-Time</option>
                                                                <option value="Project Base"
                                                                    {{ old('employment_type') == 'Project Base' ? 'selected' : '' }}>
                                                                    Project Base</option>
                                                                <option value="Hourly"
                                                                    {{ old('employment_type') == 'Hourly' ? 'selected' : '' }}>
                                                                    Hourly</option>
                                                                <option value="On-Site"
                                                                    {{ old('employment_type') == 'On-Site' ? 'selected' : '' }}>
                                                                    On-Site</option>
                                                                <option value="Freelancing"
                                                                    {{ old('employment_type') == 'Freelancing' ? 'selected' : '' }}>
                                                                    Freelancing</option>
                                                                <option value="Contract"
                                                                    {{ old('employment_type') == 'Contract' ? 'selected' : '' }}>
                                                                    Contract</option>
                                                                <option value="Shift"
                                                                    {{ old('employment_type') == 'Shift' ? 'selected' : '' }}>
                                                                    Shift</option>
                                                                <option value="Consulting"
                                                                    {{ old('employment_type') == 'Consulting' ? 'selected' : '' }}>
                                                                    Consulting</option>
                                                                <option value="Volunteer"
                                                                    {{ old('employment_type') == 'Volunteer' ? 'selected' : '' }}>
                                                                    Volunteer</option>
                                                                <option value="Internships"
                                                                    {{ old('employment_type') == 'Internships' ? 'selected' : '' }}>
                                                                    Internships</option>
                                                            </select>

                                                        </div>
                                                        {{-- @error('employment_type')
                                                            <div class="text-danger">{{ $message }}</div>
                                                        @enderror --}}
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
                                                            <select name="salary_currency_monthly_project">
                                                                <option value="USD"
                                                                    {{ old('salary_currency_monthly_project') == 'USD' ? 'selected' : '' }}>
                                                                    $ USD</option>
                                                                <option value="INR"
                                                                    {{ old('salary_currency_monthly_project') == 'INR' ? 'selected' : '' }}>
                                                                    ₹ INR</option>
                                                            </select>

                                                        </div>
                                                        {{-- @error('salary_currency_monthly_project')
                                                            <div class="text-danger">{{ $message }}</div>
                                                        @enderror --}}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-4">
                                                <div class="auth_field">
                                                    <div class="auth_field_info">
                                                        <input type="text" placeholder="Min"
                                                            value="{{ old('min_salary_monthly_project') }}"
                                                            name="min_salary_monthly_project" pattern="[0-9]+">
                                                    </div>
                                                    {{-- @error('min_salary_monthly_project')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror --}}
                                                </div>
                                            </div>
                                            <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-4">
                                                <div class="auth_field">
                                                    <div class="auth_field_info">
                                                        <input type="text" placeholder="Max"
                                                            value="{{ old('max_salary_monthly_project') }}"
                                                            name="max_salary_monthly_project" pattern="[0-9]+">
                                                    </div>
                                                    {{-- @error('max_salary_monthly_project')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror --}}
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row align-items-end">
                                            <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-3">
                                                <div class="auth_field">
                                                    <strong>Yearly</strong>
                                                    <div class="auth_field_info">
                                                        <div class="auth_select_info">
                                                            <select name="salary_currency_yearly">
                                                                <option value="USD"
                                                                    {{ old('salary_currency_yearly') == 'USD' ? 'selected' : '' }}>
                                                                    $ USD</option>
                                                                <option value="INR"
                                                                    {{ old('salary_currency_yearly') == 'INR' ? 'selected' : '' }}>
                                                                    ₹ INR</option>
                                                            </select>

                                                        </div>
                                                        {{-- @error('salary_currency_yearly')
                                                            <div class="text-danger">{{ $message }}</div>
                                                        @enderror --}}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-4">
                                                <div class="auth_field">
                                                    <div class="auth_field_info">
                                                        <input type="text" placeholder="Min"
                                                            value="{{ old('min_salary_yearly') }}"
                                                            name="min_salary_yearly" pattern="[0-9]+">
                                                    </div>
                                                    {{-- @error('min_salary_yearly')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror --}}
                                                </div>
                                            </div>
                                            <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-4">
                                                <div class="auth_field">
                                                    <div class="auth_field_info">
                                                        <input type="text" placeholder="Max"
                                                            value="{{ old('max_salary_yearly') }}"
                                                            name="max_salary_yearly" pattern="[0-9]+">
                                                    </div>
                                                    {{-- @error('max_salary_yearly')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror --}}
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row align-items-end">
                                            <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-3">
                                                <div class="auth_field">
                                                    <strong>Hourly</strong>
                                                    <div class="auth_field_info">
                                                        <div class="auth_select_info">
                                                            <select name="salary_currency_hourly">
                                                                <option value="USD"
                                                                    {{ old('salary_currency_hourly') == 'USD' ? 'selected' : '' }}>
                                                                    $ USD</option>
                                                                <option value="INR"
                                                                    {{ old('salary_currency_hourly') == 'INR' ? 'selected' : '' }}>
                                                                    ₹ INR</option>
                                                            </select>
                                                        </div>
                                                        {{-- @error('salary_currency_hourly')
                                                            <div class="text-danger">{{ $message }}</div>
                                                        @enderror --}}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-4">
                                                <div class="auth_field">
                                                    <div class="auth_field_info">
                                                        <input type="text" placeholder="Min"
                                                            value="{{ old('min_salary_hourly') }}"
                                                            name="min_salary_hourly" pattern="[0-9]+">
                                                    </div>
                                                    {{-- @error('min_salary_hourly')
                                                            <div class="text-danger">{{ $message }}</div>
                                                        @enderror --}}
                                                </div>
                                            </div>
                                            <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-4">
                                                <div class="auth_field">
                                                    <div class="auth_field_info">
                                                        <input type="text" placeholder="Max"
                                                            value="{{ old('max_salary_hourly') }}"
                                                            name="max_salary_hourly" pattern="[0-9]+">
                                                    </div>
                                                    {{-- @error('max_salary_hourly')
                                                            <div class="text-danger">{{ $message }}</div>
                                                        @enderror --}}
                                                </div>
                                            </div>
                                        </div>
                                        {{-- // --}}
                                        {{-- <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                            <div class="auth_field">
                                                <strong>Salary period</strong>
                                                <div class="auth_select_info">
                                                    <select name="education_qualification" id="ed-qual">
                                                        <option>Any</option>
                                                        <option>Uae</option>
                                                        <option>Uk</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div> --}}
                                        <div class="row">
                                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                                <div class="auth_field">
                                                    <strong>Location</strong>
                                                    <div class="auth_field_info">
                                                        <input type="text" placeholder="Add Location"
                                                            id="locationInput" value="{{ old('location') }}"
                                                            name="location">
                                                    </div>
                                                    @error('location')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                                <div class="auth_field">
                                                    <strong>Educational Qualification</strong>
                                                    <div class="auth_select_info">
                                                        <select name="education_qualification" id="ed-qual"
                                                            value="{{ old('education_qualification') }}">
                                                            <option value="Any" selected>Any</option>
                                                            <option value="Graduate">Graduate</option>
                                                            <option value="Postgraduate">Postgraduate</option>
                                                            <option value="Doctorate">Doctorate</option>
                                                        </select>
                                                    </div>
                                                    @error('education_qualification')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                                <div class="auth_field">
                                                    <strong>Company Name</strong>
                                                    <div class="auth_field_info">
                                                        <input type="text" placeholder=""
                                                            value="{{ old('company_name') }}" name="company_name">
                                                    </div>
                                                    @error('company_name')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                                <div class="auth_field">
                                                    <strong>Company Website</strong>
                                                    <div class="auth_field_info">
                                                        <input type="text" placeholder="www.example.com"
                                                            value="{{ old('company_website') }}"
                                                            name="company_website">
                                                    </div>
                                                    @error('company_website')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                                <div class="auth_field">
                                                    <strong>Contact Person</strong>
                                                    <div class="auth_field_info">
                                                        <input type="text" placeholder=""
                                                            value="{{ old('contact_person') }}"
                                                            name="contact_person">
                                                    </div>
                                                    @error('contact_person')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                                <div class="auth_field">
                                                    <strong>E-mail Address</strong>
                                                    <div class="auth_field_info">
                                                        <input type="text" placeholder=""
                                                            value="{{ old('email') }}" name="email">
                                                    </div>
                                                    @error('email')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row align-items-end">
                                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                                <div class="auth_field">
                                                    <strong>Contact Number</strong>
                                                    <div class="auth_select_info">
                                                        <select name="country_code" required style="width: 100%;">
                                                            <option value="">Select a country code</option>
                                                            @foreach ($countryCodes as $country)
                                                                <option value="+{{ $country->phone }}">
                                                                    {{ $country->name . ' +' . $country->phone }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                                <div class="auth_field">
                                                    <div class="auth_field_info">
                                                        <input type="text" placeholder="Mobile/Whatsapp"
                                                            value="{{ old('contact_no') }}" name="contact_no"
                                                            pattern="[0-9]+">
                                                    </div>
                                                    @error('contact_no')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-12">
                                                <div class="auth_field">
                                                    <strong>Company Details</strong>
                                                    <div class="auth_field_info">
                                                        <textarea name="company_details" id="company_details" value="{{ old('company_details') }}"></textarea>
                                                    </div>
                                                    @error('company_details')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6"
                                            style="margin-left:-14px;max-width: 100%">
                                            <div class="auth_field">
                                                <strong>Hiring Timeline</strong>
                                                <div class="auth_select_info">
                                                    <select name="company_address" id="company_address"
                                                        value="{{ old('company_address') }}">
                                                        <option value="" disabled>
                                                            Select Hiring Timeline
                                                        </option>
                                                        <option value="Immediate">Immediate</option>
                                                        <option value="Within One Month">
                                                            Within One Month
                                                        </option>
                                                        <option value="Within 60 Days">
                                                            Within 60 Days
                                                        </option>
                                                        <option value="Within 90 Days">
                                                            Within 90 Days
                                                        </option>
                                                        <option value="Now Hiring">Now Hiring</option>
                                                        <option value="Immediate Vacancy">
                                                            Immediate Vacancy
                                                        </option>
                                                        <option value="Urgently Required">
                                                            Urgently Required
                                                        </option>
                                                        <option value="Fast-Track Hiring">
                                                            Fast-Track Hiring
                                                        </option>
                                                        <option value="Direct Recruitment">
                                                            Direct Recruitment
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="auth_field">
                                                    <strong>Upload supportive documents, If
                                                        have</strong>
                                                    <div class="">
                                                        <input type="file" placeholder=""
                                                            value="{{ old('document') }}" name="document">
                                                    </div>
                                                    @error('document')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="auth_text">
                                                    <p class="pb-0">
                                                        <label class="checkbox-label">
                                                            <input type="checkbox" name="notify_ai_applicants"
                                                                value="{{ old('notify_ai_applicants') }}">
                                                            <span class="checkbox-custom rectangular"></span>
                                                        </label>
                                                        Notify me about Al-recommended applicants.
                                                    </p>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="facilityBtn justify-content-start pt-4">
                                                    <input type="submit" class="btndefault" id="submit-btn">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
