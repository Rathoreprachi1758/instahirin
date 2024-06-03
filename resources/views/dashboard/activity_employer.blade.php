<x-header data="employer component" />
<link rel="stylesheet" href="{{ asset('css/css/Employer_activity_responsive.css') }} ">
<link rel="stylesheet" href="{{ asset('css/css/Employer_activity_style.css') }} ">
<style>
    .custom_tabs ul li a.active {
        /* background-color: #dddddd; */
        background-color: transparent !important;
        color: #007bff !important;

        border-bottom: 3px solid #007bff !important;

    }

    .custom_tabs ul li a:hover {
        background-color: transparent !important;
        /* background-color: #425056; */
    }

    .custom_tabs ul li a {
        padding: 0 15px !important;
        font-weight: 500 !important;
        font-size: 15px !important;
        color: #555 !important;
    }


    .custom_tittle h4 {
        font-size: 24px;
        padding-bottom: 10px;
        font-family: "avenirmedium";
        color: #343A40;
    }

    .description_small_text {
        font-size: 13px;
        color: #777;
        line-height: 25px;

    }

    .track-form {
        border: 1px solid #ebeaea;
        padding: 25px;
        background-color: #Fff !important;
        border-radius: 4px;
    }

    .activityTabs {
        background-color: #fff;
        padding: 0px 0px;
    }

    .select_input_height {
        height: 50px !important;
        font-size: 13px;
    }

    .facilityBtn .btndefault {
        border-radius: 5px;
        padding: 8px 25px;
        font-size: 13px;
        margin-top: 10px;
    }
</style>



<div class="fr-section"style="margin-top: -72px">
    <div class="fr-section_detail">
        <div class="dashboard_innerPages">
            <div class="custom_tabs_section">
                <div class="custom_tittle descriptionTxt">
                    <h4>Employer / Company</h4>
                    <p class="description_small_text">
                        <strong style="color:#343A40;">Description:</strong> Keep track of all your
                        activities including job postings and job talents.
                        Details of shortlisted candidates will be scheduled

                        for interview. As well as track the<br> status of Hired
                        details.
                    </p>
                </div>
                <div class="custom_tabs">
                    <ul>
                        <li><a href="/Employer-activity" class="active">Post a Job</a></li>
                        <li><a href="/My-job-activity">My Job</a></li>
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
                @if (Session::has('message'))
                    <div class="alert alert-success" style="margin-top: 12px;" id="success-message">
                        <span style="margin-left:330px">{{ Session::get('message') }}</span>
                        <script>
                            // Automatically hide the success message after 20 seconds
                            do setTimeout(function() {
                                cument.getElementById('success-message').style.display = 'none';
                            }, 3000);
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
                    <form action="{{ route('post_a_job') }}" method="post" id="job_post" class="track-form mt-3"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="custom_tabs_data" style="display: block" id="tab1">
                            <div class="row">
                                <div class="col-xl-12 col-xl-12 col-lg-12 col-md-12">
                                    <div class="postJob_tab">
                                        <p>
                                            Please provides initials information and our
                                            representative will get back to you.
                                        </p>

                                        <div class="row">
                                            <div class="col-xl-6 col-sm-12 col-lg-6 col-md-6">
                                                <div class="auth_field">
                                                    <strong style="font-size: 15px;">Position Title</strong>
                                                    <div class="auth_field_info">
                                                        <input type="text" placeholder="IOS App Developer"
                                                            value="{{ old('position_title') }}" name="position_title"
                                                            style="height:50px; font-size: 13px;">
                                                    </div>
                                                    @error('position_title')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-xl-6 col-sm-12 col-lg-6 col-md-6">
                                                <div class="auth_field">
                                                    <strong style="font-size: 15px;">Work Mode</strong>
                                                    <div class="auth_select_info">
                                                        <select name="work_mode" value="{{ old('work_mode') }}"
                                                            style="height:50px; font-size: 13px;">
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
                                                    <strong style="font-size: 15px;">Skills / Project
                                                        Description</strong>
                                                    <div class="auth_field_info">
                                                        <textarea name="project_description" style="height:100px; font-size: 13px;">{{ old('project_description') }}</textarea>
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
                                                    <strong style="font-size: 15px;">Key Skills</strong>
                                                    <div class="auth_field_info">
                                                        <input type="text" placeholder=""
                                                            value="{{ old('key_skills') }}" name="key_skills"
                                                            style="height:50px; font-size: 13px;">
                                                    </div>
                                                    @error('key_skills')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row align-items-end">
                                            <div class="col-xl-3 col-xl-3 col-lg-4 col-md-4">
                                                <div class="auth_field">
                                                    <strong style="font-size: 15px;">Work Experience (Years):</strong>
                                                    <div class="auth_field_info">
                                                        <div class="auth_select_info">
                                                            <select name="min_experience"
                                                                style="height:50px; font-size: 13px;"
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

                                            <div class="col-xl-1 col-xl-1 col-lg-1 col-md-1">
                                                <p class="text-center d-block mt-3" style="margin-bottom:0px;"
                                                    style="font-size: 15px;">To
                                                </p>
                                            </div>

                                            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-4">
                                                <div class="auth_field">
                                                    <div class="auth_field_info">
                                                        <div class="auth_select_info">
                                                            <select name="max_experience"
                                                                style="height:50px; font-size: 13px;"
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
                                                    <strong style="font-size: 15px;">Employment Role / Type</strong>
                                                    <div class="auth_field_info">
                                                        <div class="auth_select_info">
                                                            <select name="employment_type"
                                                                style="height:50px; font-size: 13px;">
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
                                                    <strong style="font-size: 15px;">Salary Range (Enter the Salary
                                                        offered
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
                                                            <select name="salary_currency_monthly_project"
                                                                style="height:50px; font-size: 13px;">
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
                                                            name="min_salary_monthly_project"
                                                            style="height:50px; font-size: 13px;">
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
                                                            name="max_salary_monthly_project"
                                                            style="height:50px; font-size: 13px;">
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
                                                    <strong style="font-size: 15px;">Yearly</strong>
                                                    <div class="auth_field_info">
                                                        <div class="auth_select_info">
                                                            <select name="salary_currency_yearly"
                                                                style="height:50px; font-size: 13px;">
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
                                                            name="min_salary_yearly"
                                                            style="height:50px; font-size: 13px;">
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
                                                            name="max_salary_yearly"
                                                            style="height:50px; font-size: 13px;">
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
                                                    <strong style="font-size: 15px;">Hourly</strong>
                                                    <div class="auth_field_info">
                                                        <div class="auth_select_info">
                                                            <select name="salary_currency_hourly"
                                                                style="height:50px; font-size: 13px;">
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
                                                            name="min_salary_hourly"
                                                            style="height:50px; font-size: 13px;">
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
                                                            name="max_salary_hourly"
                                                            style="height:50px; font-size: 13px;">
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
                                                    <strong style="font-size: 15px;">Location</strong>
                                                    <div class="auth_field_info">
                                                        <input type="text" placeholder="Add Location"
                                                            id="location" value="{{ old('location') }}"
                                                            name="location" style="height:50px; font-size: 13px;">
                                                    </div>
                                                    @error('location')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                                <div class="auth_field">
                                                    <strong style="font-size: 15px">Educational Qualification</strong>
                                                    <div class="auth_select_info">
                                                        <select name="education_qualification" id="ed-qual"
                                                            style="height:50px; font-size: 13px;"
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
                                                    <strong style="font-size:15px;">Company Name</strong>
                                                    <div class="auth_field_info">
                                                        <input type="text" placeholder=""
                                                            value="{{ old('company_name') }}" name="company_name"
                                                            style="height:50px; font-size: 13px;">
                                                    </div>
                                                    @error('company_name')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                                <div class="auth_field">
                                                    <strong style="font-size: 15px;">Company Website</strong>
                                                    <div class="auth_field_info">
                                                        <input type="text" placeholder="www.example.com"
                                                            value="{{ old('company_website') }}"
                                                            name="company_website"
                                                            style="height:50px; font-size: 13px;">
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
                                                    <strong style="font-size: 15px;">Contact Person</strong>
                                                    <div class="auth_field_info">
                                                        <input type="text" placeholder=""
                                                            value="{{ old('contact_person') }}" name="contact_person"
                                                            style="height:50px; font-size: 13px;">
                                                    </div>
                                                    @error('contact_person')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                                <div class="auth_field">
                                                    <strong style="font-size: 15px;">E-mail Address</strong>
                                                    <div class="auth_field_info">
                                                        <input type="text" placeholder=""
                                                            value="{{ old('email') }}" name="email"
                                                            style="height:50px; font-size: 13px;">
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
                                                    <strong style="font-size: 15px;">Contact Number</strong>
                                                    <div class="auth_select_info">
                                                        <select name="country_code" required style="width: 100%;"
                                                            class="select_input_height">
                                                            <option value="">Select a country
                                                                code</option>
                                                            @foreach ($countryCodes as $country)
                                                                <option value="+{{ $country->phone }}">
                                                                    {{ $country->name . ' +' . $country->phone }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xl-6 col-sm-12 col-lg-6 col-md-6">
                                                <div class="auth_field">
                                                    <div class="auth_field_info">
                                                        <input type="text" placeholder="Mobile/Whatsapp"
                                                            value="{{ old('contact_no') }}" name="contact_no"
                                                            pattern="[0-9]+" style="height:50px; font-size: 13px;">
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
                                                    <strong style="font-size: 15px;">Company Details</strong>
                                                    <div class="auth_field_info">
                                                        <textarea name="company_details" id="company_details" value="{{ old('company_details') }}"></textarea>
                                                    </div>
                                                    @error('company_details')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-xl-6 col-sm-12 col-lg-6 col-md-6">
                                                <div class="auth_field">
                                                    <strong style="font-size: 15px;">Hiring Timeline</strong>
                                                    <div class="auth_select_info">
                                                        <select name="company_address" id="company_address"
                                                            style="height:50px; font-size: 13px;"
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
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="auth_field">
                                                    <strong style="font-size: 15px;">Upload supportive documents, If
                                                        have</strong>
                                                    <div class="">
                                                        <input type="file" placeholder=""
                                                            value="{{ old('document') }}" name="document"
                                                            style="font-size: 13px;">
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
                                                <div class="facilityBtn justify-content-start">
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
<script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCWCwDO2UDvwai9BBUyvxGS6t436Eot7Wc&libraries=places&callback=initAutocomplete"
    async defer></script>
<script>
    function initAutocomplete() {
        var locationInput = document.getElementById('location');
        var autocomplete = new google.maps.places.Autocomplete(locationInput);

        autocomplete.addListener('place_changed', function() {
            var place = autocomplete.getPlace();
            console.log(place);
        });
    }
</script>
