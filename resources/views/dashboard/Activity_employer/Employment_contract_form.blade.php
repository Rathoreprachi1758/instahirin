<x-header data="this is employment contract form" />
<link rel="stylesheet " href="{{ asset('css/css/Employer_activity_style.css') }} ">
<link rel="stylesheet " href="{{ asset('css/css/Employer_activity_style.css') }} ">
<style>
    body {
        font-family: Arial, sans-serif;
    }

    form {
        max-width: 600px;
        margin: auto;
        margin-top: 50px;
    }

    label {
        margin-bottom: 8px;
    }

    input,
    select {
        margin-bottom: 16px;
    }

    button {
        margin-top: 20px;
    }

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


    .custom_tittle h4,
    .Employee_Contract_Form_heading {
        font-size: 24px;
        padding-bottom: 10px;
        font-family: "avenirmedium";
        color: #343A40;
    }

    .Employee_Contract_Form_heading {
        margin-top: -34px;
    }

    .description_small_text {
        font-size: 13px;
        color: #777;
        line-height: 25px;

    }

    .btndefault2 {
        border-radius: 5px;
        padding: 8px 25px;
        font-size: 13px;
        margin-top: 10px;
        text-align: center;
        background-color: #000000;
        color: #fff;
    }
</style>
<div class="fr-section" style="margin-top: -72px">
    <div class="fr-section_detail">
        <div class="dashboard_innerPages">
            <div class="custom_tabs_section">
                <div class="custom_tittle descriptionTxt">
                    <h4>Employer / Company</h4>
                    <p class="description_small_text">
                        <strong>Description:</strong> Keep track of all your
                        activities including job postings and job talents.
                        Details of shortlisted candidates will be scheduled

                        for interview. As well as track the <br />status of Hired
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
                        <li><a href="/employment-contract-form" class="active">Employment Contract</a></li>
                        <li><a href="/Job-Hire">Hired</a></li>
                        <li><a href="/History ">History</a></li>
                    </ul>
                </div>
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <form action="/submit-contract" method="post" class="container">
                            @csrf
                            <h2 class="Employee_Contract_Form_heading">Employee Contract Form</h2>

                            <!-- Personal Information -->
                            <div class="form-group">
                                <label for="fullName" style="font-size: 15px;">Full Name:</label>
                                <input type="text" class="form-control" id="fullName" name="fullName"
                                    style="height:50px;font-size:13px;" required>
                            </div>

                            <div class="form-group">
                                <label for="address" style="font-size: 15px;">Address:</label>
                                <input type="text" class="form-control" id="address" name="address"
                                    style="height:50px;font-size:13px;" required>
                            </div>

                            <div class="form-group">
                                <label for="dob" style="font-size: 15px;">Date of Birth:</label>
                                <input type="date" class="form-control" id="dob" name="dob"
                                    style="height:50px;font-size:13px;" required>
                            </div>

                            <!-- Employment Details -->
                            <div class="form-group">
                                <label for="position" style="font-size: 15px;">Position:</label>
                                <input type="text" class="form-control" id="position" name="position"
                                    style="height:50px;font-size:13px;" required>
                            </div>

                            <div class="form-group">
                                <label for="startDate" style="font-size: 15px;">Start Date:</label>
                                <input type="date" class="form-control" id="startDate" name="startDate"
                                    style="height:50px;font-size:13px;" required>
                            </div>

                            <div class="form-group">
                                <label for="salary" style="font-size: 15px;">Salary:</label>
                                <input type="number" class="form-control" id="salary" name="salary"
                                    style="height:50px;font-size:13px;" required>
                            </div>

                            <!-- Terms and Conditions -->
                            <div class="form-group">
                                <label for="probationPeriod" style="font-size: 15px;">Probation Period (months):</label>
                                <input type="number" class="form-control" id="probationPeriod" name="probationPeriod"
                                    style="height:50px;font-size:13px;" required>
                            </div>

                            <div class="form-group">
                                <label for="workHours" style="font-size: 15px;">Weekly Work Hours:</label>
                                <input type="number" class="form-control" id="workHours" name="workHours"
                                    style="height:50px;font-size:13px;" required>
                            </div>

                            <div class="form-group">
                                <label for="vacationDays" style="font-size: 15px;">Vacation Days:</label>
                                <input type="number" class="form-control" id="vacationDays" name="vacationDays"
                                    style="height:50px;font-size:13px;" required>
                            </div>

                            <!-- Agreement and Submit Button -->
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="agreement" name="agreement"
                                    required>
                                <label class="form-check-label" for="agreement"
                                    style="font-size:13px;padding-top:2px;">I agree to
                                    the terms and
                                    conditions</label>
                            </div>

                            <div>
                                <button type="submit" class="btndefault2">Submit Contract</button>
                            </div>
                        </form>
                    </div>
                </div>

                {{-- <br> --}}
            </div>
        </div>
    </div>
</div>
