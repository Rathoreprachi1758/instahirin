<?php

use App\Http\Controllers\AgencyContractor;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DesignationController;
use App\Http\Controllers\EmployeeConfigController;
use App\Http\Controllers\EmployeeMasterController;
use App\Http\Controllers\HolidayController;
use App\Http\Controllers\InstaProject;
use App\Http\Controllers\LeaveController;
use App\Http\Controllers\Logincontroller;
use App\Http\Controllers\MasterController;
use App\Http\controllers\InstaHirinProjectController;
use App\Http\Controllers\profileController;
use App\Http\Controllers\SalaryDetailContoller;
use App\Http\Controllers\shift_masterController;
use App\Http\Controllers\SocialLoginController;
use App\Http\Controllers\TimeTracking;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('sitemap.xml', function () {
    return response()->file('sitemap.xml');
});
////
Route::get('/get-sign-Up', [Logincontroller::class, 'index'])->name('signin');
Route::Post('signin', [Logincontroller::class, 'store'])->name('submit.signup');
Route::get('/loginpage', [LoginController::class, 'login'])->name('loginpage');
Route::get('/social-google-login', [SocialLoginController::class, 'googleLogin'])->name('googleLogin');
Route::get('/social-google-callback', [SocialLoginController::class, 'callBack'])->name('callBack');
Route::get('/social-linkedin-login', [SocialLoginController::class, 'linkedinLogin'])->name('linkedinLogin');
Route::get('/social-linkedin-callback', [SocialLoginController::class, 'linkedinCallBack'])->name('linkedinCallBack');
Route::get('/social-github-login', [SocialLoginController::class, 'githubLogin'])->name('githubLogin');
Route::get('/social-github-callback', [SocialLoginController::class, 'githubCallBack'])->name('githubCallBack');
//Route::get('/social-apple-login', [SocialLoginController::class, 'appleLogin'])->name('appleLogin');
Route::get('/apple-callback', [SocialLoginController::class, 'appleCallBack'])->name('appleCallBack');


// Route::post('login', [LoginController::class, 'authenticate'])->name('login');
Route::post('dashboard', [LoginController::class, 'authenticate'])->name('logino');
//Route::get('profile', [ProfileController::class, 'index']);
// Route::post('/apple-login-callback', [LoginController::class, 'appleCallback'])->name('appleCallback');
Route::group(['middleware' => 'web'], function () {
    Route::post('/apple-login-callback', [LoginController::class, 'appleCallback'])->name('appleCallback');
});

Route::middleware(['middleware' => 'auth.check'])->group(function () {
    Route::get('dashboard', function () {
        return view('dashboard.dashboard');
    });
    Route::get('dashboard-return', function () {
        return view('dashboard.dashboard');
    });
    Route::get('logout', [LoginController::class, 'logout']);
    //profile
    Route::get('profile', [ProfileController::class, 'index']);
    // Route::get('edit-contact/{id}', [ProfileController::class, 'edituserinfo'])->name('edit.contact');
    Route::patch('edit-contact/{id}', [ProfileController::class, 'edituserinfo'])->name('edit.contact');
    Route::patch('edit-nationality/{id}', [ProfileController::class, 'editnation'])->name('edit.nation');
    Route::post('change-password', [Logincontroller::class, 'changePasswordSave']);
    //
    Route::get('reset-password', [LoginController::class, 'resetpswd']);
    Route::post('password-reset', [Logincontroller::class, 'resetpassword']);
    Route::get('forgot-password', [LoginController::class, 'forgotpassword']);


    Route::get('kyc-info', [profileController::class, 'userInfo']);
    Route::Post('kyc-submit', [profileController::class, 'kyc_submit'])->name('kyc.submit');
    Route::get('credit-request', [profileController::class, 'creditrequest']);
    Route::post('credit-request-submit', [profileController::class, 'creditrequest_submit'])->name('creadit.request');
    //Activity
    Route::get('Employer-activity', [profileController::class, 'Employer_activity']);
    // Route::post('/insta-hirin-requirements', [ContentController::class, 'instaHirinRequirements'])->name('instaHirinRequirements');
    Route::post('/job-posting-activity', [profileController::class, 'post_job'])->name('post_a_job');
    Route::get('My-job-activity', [profileController::class, 'my_job_activity']);
    Route::get('My-job-Applicants-activity', [profileController::class, 'my_job_Applicants']);
    Route::get('job-talents-activity', [profileController::class, 'job_talents']);
    Route::get('Instahirin-activity', [profileController::class, 'Instahirin_activity']);
    Route::get('History', [profileController::class, 'job_history']);
    Route::get('Job-Hire', [profileController::class, 'Hire']);
    Route::get('Job-status', [profileController::class, 'job_status']);
    Route::Post('status-update', [profileController::class, 'status_update']);
    Route::get('employment-contract-form', function () {
        return view('dashboard.activity_employer.Employment_contract_form');
    });
    Route::get('Interview-schedule', [profileController::class, 'Interviewschedule']);
    Route::post('Meeting-link', [ProfileController::class, 'schedule_interview'])->name('interview_schedule');
    Route::get('Employee/Mastery-data', [profileController::class, 'master_data'])->name('master.master_data');
    //activity of employees
    Route::get('Employee-activity', [profileController::class, 'Employee_activity']);
    Route::post('upload-resume', [profileController::class, 'Employee_Resume'])->name('Employee.Resume.submit');
    Route::post('upload/resume/skills', [profileController::class, 'Employee_skills_update'])->name('Employee.keyskills.submit');
    Route::post('upload/Resume/headline', [profileController::class, 'Employee_headline_update'])->name('Employee.Resume.headline');
    Route::post('upload/Resume/employement', [profileController::class, 'Employee_Resume_employement'])->name('Employee.Resume.employement');
    Route::post('upload/Resume/graduation', [profileController::class, 'Employee_Resume_graduation'])->name('Employee.Resume.graduation');
    Route::post('upload/Resume/secondary', [profileController::class, 'Employee_Resume_secondary'])->name('Employee.Resume.secondary');
    Route::post('upload/Resume/personal_info', [profileController::class, 'Employee_Resume_personal_info'])->name('Employee.Resume.personal_info');
    Route::get('upload/Resume/delete/{id}', [profileController::class, 'Employee_Resume_delete'])->name('Employee.Resume.delete');

    //activity-agency-contractor
    Route::get('agency-contractor', [AgencyContractor::class, 'agencyContractor'])->name('agencyContractor');
    Route::post('agency-contractor-company', [AgencyContractor::class, 'companyDetailsSubmit'])->name('companyDetailsSubmit');
    Route::post('agency-contractor-location', [AgencyContractor::class, 'agencyLocationSubmit'])->name('agencyLocationSubmit');
    Route::post('certification-form', [AgencyContractor::class, 'certificationsForm'])->name('certificationsForm');
    Route::post('edit-delete-certificates', [AgencyContractor::class, 'editOrDeleteCertificates'])->name('editOrDeleteCertificates');
    Route::get('download/{id}', [AgencyContractor::class, 'fileDownload'])->name('fileDownload');
    Route::get('/getCertificateData/{id}', [AgencyContractor::class, 'complianceCertificate'])->name('complianceCertificate');
    Route::post('/portfolio', [AgencyContractor::class, 'portfolioSubmit'])->name('portfolioSubmit');
    Route::get('/portfolio-delete', [AgencyContractor::class, 'portfolioDelete'])->name('portfolioDelete');
    Route::post('/services', [AgencyContractor::class, 'saveServices'])->name('saveServices');
    Route::post('/specialization-services', [AgencyContractor::class, 'specializationSubmit'])->name('specializationSubmit');
    Route::post('/client-update', [AgencyContractor::class, 'clientUpdate'])->name('clientUpdate');
    Route::get('/agency-locations/delete/{id}', [AgencyContractor::class, 'deleteAgencyLocation'])->name('deleteAgencyLocation');
    Route::get('/agency-company-delete/delete/{id}', [AgencyContractor::class, 'deleteCompanyDetail'])->name('deleteCompanyDetail');

    Route::get('/InstaProject',[InstaHirinProjectController::class,'createProject']);
    Route::post('create-project',[InstaHirinProjectController::class,'post_project'])->name('store_project');
    Route::get('/InstaProject/My-Projects',[InstaHirinProjectController::class,'my_project'])->name('myProjects');
    Route::get('/InstaProject/My-Project-Bid',[InstaHirinProjectController::class,'my_project_bids']);
    // Route::get('/InstaProject/ShowMore/{id}', [InstaHirinProjectController::class,'myProjShow'])->name('myProjShowMore');
    Route::get('/InstaProject/ShowMore', [InstaHirinProjectController::class,'myProjShow'])->name('myProjShowMore');
    Route::patch('/InstaProject/update-Project-Overview/{id}', [InstaHirinProjectController::class,'updateProjOverview'])->name('updateOverview');
    // Route::post('create-project',[InstaHirinProjectController::class,'post_project'])->name('store_project');
    Route::get('/InstaProject/Post-Review',[InstaHirinProjectController::class,'PostReview'])->name('PostReview');
    Route::get('/InstaProject/My-Review',[InstaHirinProjectController::class,'MyReview']);

//    Route::get('/insta-project', [InstaProject::class, 'instaProject'])->name('instaProject');
    Route::post('/insta-project-review-submit', [InstaHirinProjectController::class, 'instaProjectReviewSubmit'])->name('instaProjectReviewSubmit');

    //salary Details

    Route::get('/salary-details',[SalaryDetailContoller::class, 'salaryDetails'])->name('salaryDetails');
    Route::get('/salary-company/{companyId}',[SalaryDetailContoller::class , 'company']);
    Route::post('/salary-detail',[SalaryDetailContoller::class , 'salaryDetailFilters'])->name('salaryDetailFilters');
    Route::get('/salary-head-master',[SalaryDetailContoller::class , 'SalaryHeadMaster'])->name('SalaryHeadMaster');
    Route::post('/salary-head-master-submit',[SalaryDetailContoller::class , 'submitSalaryMaster'])->name('submitSalaryMaster');
    Route::get('/normal-salary',[SalaryDetailContoller::class , 'normalSalary'])->name('normalSalary');
    Route::post('/normal-salary-submit',[SalaryDetailContoller::class , 'normalSalarySubmit'])->name('normalSalarySubmit');
    Route::get('/get-salary-head/{employeeId}',[SalaryDetailContoller::class , 'getSalaryHead']);



    //
    Route::get('/Favorites', [profileController::class, 'emp_favorates'])->name('favorites');
    Route::get('Applied-jobs', [profileController::class, 'Applied_jobs'])->name('Applied.jobs');
    Route::get('Interview-schedule-calander', [profileController::class, 'schedule_interview_calander'])->name('Interview.schedule.calander');
    Route::get('offers', [profileController::class, 'employee_offers'])->name('Applied.offers');
    Route::post('Talent-History', [profileController::class, 'employee_History'])->name('Applied.History');
    //
    Route::resource('Master', MasterController::class);
    Route::resource('Department', DepartmentController::class);
    Route::resource('Designation', DesignationController::class);
    Route::resource('shift_master', shift_masterController::class);
    Route::resource('Category', CategoryController::class);
    Route::resource('Employee-Configurations', EmployeeConfigController::class);
    Route::resource('Employee-Master', EmployeeMasterController::class);
    Route::resource('Leave', LeaveController::class);
    Route::resource('Holiday', HolidayController::class);

    Route::get('log-in-off', [TimeTracking::class, 'logInOff'])->name('logInOff');
    Route::get('/company/{companyId}', [TimeTracking::class, 'company']);
    Route::post('department', [TimeTracking::class, 'department'])->name('department');
    Route::post('employee', [TimeTracking::class, 'employee'])->name('employee');
    Route::get('Employee-work-log', [TimeTracking::class, 'employeeWorkLog'])->name('employeeWorkLog');
    Route::post('work-log-company', [TimeTracking::class, 'workLogCompany'])->name('workLogCompany');
    Route::post('work-log-department', [TimeTracking::class, 'workLogDepartment'])->name('workLogDepartment');
    Route::post('punch', [TimeTracking::class, 'punch'])->name('punch');
    Route::post('status', [TimeTracking::class, 'status'])->name('status');
    Route::get('time-logs', [TimeTracking::class, 'timeLogs'])->name('timeLogs');
    Route::post('time-log-company', [TimeTracking::class, 'timeLogCompany'])->name('timeLogCompany');
    Route::get('time-off', [TimeTracking::class, 'timeOff'])->name('timeOff');
    Route::post('time-off-status', [TimeTracking::class, 'timeOffStatus'])->name('timeOffStatus');
    Route::post('time-off-company', [TimeTracking::class, 'timeOffCompany'])->name('timeOffCompany');

    Route::get('leave-request', [TimeTracking::class, 'leaveRequest'])->name('leaveRequest');
    Route::post('leave-request-filter', [TimeTracking::class, 'leaveRequestFilter'])->name('leaveRequestFilter');
    Route::post('leave-request-submit', [TimeTracking::class, 'leaveRequestSubmit'])->name('leaveRequestSubmit');
    Route::get('/leaveRequestDepartments/{companyId}', [TimeTracking::class, 'leaveRequestDepartments']);
    Route::post('/fetch-employee-code', [TimeTracking::class, 'fetchEmployeeCode']);
    Route::post('leave-status', [TimeTracking::class, 'leaveStatus'])->name('leaveStatus');
    Route::get('late-request', [TimeTracking::class, 'lateRequest'])->name('lateRequest');
    Route::post('late-request-submit', [TimeTracking::class, 'lateRequestSubmit'])->name('lateRequestSubmit');
    Route::get('/lateRequestDepartments/{companyId}', [TimeTracking::class, 'lateRequestDepartments']);
    Route::post('late-request-submit', [TimeTracking::class, 'lateRequestSubmit'])->name('lateRequestSubmit');
    Route::post('late-status', [TimeTracking::class, 'lateStatus'])->name('lateStatus');
    Route::post('late-request-filter', [TimeTracking::class, 'lateRequestFilter'])->name('lateRequestFilter');
    Route::get('leave-late-approval', [TimeTracking::class, 'leaveLateApproval'])->name('leaveLateApproval');
    Route::post('leave-request-approval-filter', [TimeTracking::class, 'leaveRequestApprovalFilter'])->name('leaveRequestApprovalFilter');
    Route::post('late-request-approval-filter', [TimeTracking::class, 'lateApprovalFilter'])->name('lateApprovalFilter');
    Route::post('department', [TimeTracking::class, 'department'])->name('department');

    Route::get('leave-request', [TimeTracking::class, 'leaveRequest'])->name('leaveRequest');
    Route::post('leave-request-filter', [TimeTracking::class, 'leaveRequestFilter'])->name('leaveRequestFilter');
    Route::post('leave-request-submit', [TimeTracking::class, 'leaveRequestSubmit'])->name('leaveRequestSubmit');
    Route::get('/leaveRequestDepartments/{companyId}', [TimeTracking::class, 'leaveRequestDepartments']);
    Route::post('/fetch-employee-code', [TimeTracking::class, 'fetchEmployeeCode']);
    Route::post('leave-status', [TimeTracking::class, 'leaveStatus'])->name('leaveStatus');
    Route::get('late-request', [TimeTracking::class, 'lateRequest'])->name('lateRequest');
    Route::post('late-request-submit', [TimeTracking::class, 'lateRequestSubmit'])->name('lateRequestSubmit');
    Route::get('/lateRequestDepartments/{companyId}', [TimeTracking::class, 'lateRequestDepartments']);
    Route::post('late-request-submit', [TimeTracking::class, 'lateRequestSubmit'])->name('lateRequestSubmit');
    Route::post('late-status', [TimeTracking::class, 'lateStatus'])->name('lateStatus');
    Route::post('late-request-filter', [TimeTracking::class, 'lateRequestFilter'])->name('lateRequestFilter');
    Route::get('leave-late-approval', [TimeTracking::class, 'leaveLateApproval'])->name('leaveLateApproval');
    Route::post('leave-request-approval-filter', [TimeTracking::class, 'leaveRequestApprovalFilter'])->name('leaveRequestApprovalFilter');
    Route::post('late-request-approval-filter', [TimeTracking::class, 'lateApprovalFilter'])->name('lateApprovalFilter');
});

Route::post('department', [TimeTracking::class, 'department'])->name('department');
Route::get('loading_shift_codes', [profileController::class, 'Shift_codes']);
Route::get('/{levelOneSlug?}/{levelTwoSlug?}/{levelThreeSlug?}/{levelFourSlug?}', 'App\Http\Controllers\ContentController@index')->name('index');

// ContactUs Form Submission
Route::post('/submit-form', [App\Http\Controllers\ContentController::class, 'store'])->name('submit-form');

Route::get('/hire/developer/front-end-developement/{planId}', [App\Http\Controllers\ContentController::class, 'proposalGet'])->name('planId');
//marketing url
Route::get('/marketing/marketing-services-we-provide/plans-and-pricing/get-plan/{planId}', [App\Http\Controllers\ContentController::class, 'proposalGet'])->name('planId');

// Proposal Form Submission
Route::post('/submit-proposal-form', [App\Http\Controllers\ContentController::class, 'proposalForm'])->name('submit-proposal-form');

// Funding Apply Form Submission
Route::post('/funding-apply', [App\Http\Controllers\ContentController::class, 'fundingApply'])->name('funding-apply');

// Subscribe Form Submission
Route::post('/subscribe', [App\Http\Controllers\ContentController::class, 'subscription'])->name('subscribe');
// Hire Form Submission
Route::post('/hire', [ContentController::class, 'hire'])->name('hire');
Route::post('/insta-hirin-requirements', [ContentController::class, 'instaHirinRequirements'])->name('instaHirinRequirements');
//Route::post('/insta-hirin-onboard', [ContentController::class, 'instaHirinOnboard'])->name('instaHirinOnboard');
Route::post('/submitForm', [ContentController::class, 'submitForm'])->name('submitForm');
Route::post('/submitHireApplication', [ContentController::class, 'HireApplication'])->name('HireApplication');

//Route::get('/helloworld', [ContentController::class,'helloWorld'])->name('helloWorld');
// Team Form Submission
Route::post('/submit-team-form', [ContentController::class, 'teamForm'])->name('team');

// Career Form Submission
Route::post('/career', [ContentController::class, 'career'])->name('career');

Auth::routes();

Route::get('/Home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/hire/developer/developers-other/HireForm/{id}', [ContentController::class, 'hireExpert'])->name('hireExpert');

// Insta Hiring Onboard Form Submission country code
// Route::get('/getPhoneCodes', [OnboardController::class, 'getPhoneCodes'])->name('getPhoneCodes');
//Route::get('/getPhoneCodes', 'ContentController@getPhoneCodes')->name('phoneCodes');

// Apply Form
Route::get('/industries/industries-we-serve/industries/apply-now-form/{jobId}', [ContentController::class, 'applyShow'])->name('apply-now-form');
// Route::get('/hire/developer/front-end-developement/blogId/{blogId}', [ContentController::class, 'blogDetail'])->name('blogs-detail');
// Route::get('/blogs/{blogId}', [ContentController::class, 'blogDetail'])->name('blogs-detail');
//Thankyou page
// Route::get('/thankyou',[App\Http\Controllers\ContentController::class, 'thanksMessage'])->name('Thankyou');
Route::get('/industries/industries-we-serve/industries/thankyou', [App\Http\Controllers\ContentController::class, 'thanksMessage'])->name('Thankyou');
//this is slug
// Route::get('/industries/{industries-we-serve}/{industries}/{jobid}', [ContentController::class, 'applyShow']);
//
Route::post('content/process/{jobId}', [ContentController::class, 'process'])->name('content.process');
Route::get('/hire/developer/front-end-developement/all-jobs', [ContentController::class, 'allJobs'])->name('content.allJobs');
