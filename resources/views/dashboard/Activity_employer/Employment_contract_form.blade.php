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
</style>
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
                        <li><a href="/employment-contract-form" class="active">Employment Contract</a></li>
                        <li><a href="/Job-Hire">Hired</a></li>
                        <li><a href="/History ">History</a></li>
                    </ul>
                </div>
                <form action="/submit-contract" method="post" class="container">
                    @csrf
                    <h2 class="mb-4">Employee Contract Form</h2>
                
                    <!-- Personal Information -->
                    <div class="form-group">
                        <label for="fullName">Full Name:</label>
                        <input type="text" class="form-control" id="fullName" name="fullName" required>
                    </div>
                
                    <div class="form-group">
                        <label for="address">Address:</label>
                        <input type="text" class="form-control" id="address" name="address" required>
                    </div>
                
                    <div class="form-group">
                        <label for="dob">Date of Birth:</label>
                        <input type="date" class="form-control" id="dob" name="dob" required>
                    </div>
                
                    <!-- Employment Details -->
                    <div class="form-group">
                        <label for="position">Position:</label>
                        <input type="text" class="form-control" id="position" name="position" required>
                    </div>
                
                    <div class="form-group">
                        <label for="startDate">Start Date:</label>
                        <input type="date" class="form-control" id="startDate" name="startDate" required>
                    </div>
                
                    <div class="form-group">
                        <label for="salary">Salary:</label>
                        <input type="number" class="form-control" id="salary" name="salary" required>
                    </div>
                
                    <!-- Terms and Conditions -->
                    <div class="form-group">
                        <label for="probationPeriod">Probation Period (months):</label>
                        <input type="number" class="form-control" id="probationPeriod" name="probationPeriod" required>
                    </div>
                
                    <div class="form-group">
                        <label for="workHours">Weekly Work Hours:</label>
                        <input type="number" class="form-control" id="workHours" name="workHours" required>
                    </div>
                
                    <div class="form-group">
                        <label for="vacationDays">Vacation Days:</label>
                        <input type="number" class="form-control" id="vacationDays" name="vacationDays" required>
                    </div>
                
                    <!-- Agreement and Submit Button -->
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="agreement" name="agreement" required>
                        <label class="form-check-label" for="agreement">I agree to the terms and conditions</label>
                    </div>
                
                    <button type="submit" class="btndefault">Submit Contract</button>
                </form>  
                {{-- <br> --}}
            </div>
        </div>
    </div>
</div>
