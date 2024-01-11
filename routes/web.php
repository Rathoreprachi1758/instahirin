<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\OnboardController;
use App\Http\Controllers\Logincontroller;
use App\Http\Controllers\profileController;

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
// Route::middleware(['middleware' =>'auth.check'])->group(function () {
Route::post('dashboard', [LoginController::class, 'authenticate'])->name('login');
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

Route::get('kyc-info', [profileController::class, 'user_info']);
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
Route::get('employment-contract-form', function () {
    return view('dashboard.activity_employer.Employment_contract_form');
});
Route::get('Interview-schedule', [profileController::class, 'Interviewschedule']);
//emp
// Route::get('activity-employee-talent' [profileController::class, 'Employer_activity']);
// {
//    return view('dashboard.activity_employer');
// });
// });

Route::get('reset-password', [LoginController::class, 'resetpswd']);
Route::post('password-reset', [Logincontroller::class, 'resetpassword']);
Route::get('forgot-password', [LoginController::class, 'forgotpassword']);


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
//
//Thankyou page
// Route::get('/thankyou',[App\Http\Controllers\ContentController::class, 'thanksMessage'])->name('Thankyou');
Route::get('/industries/industries-we-serve/industries/thankyou', [App\Http\Controllers\ContentController::class, 'thanksMessage'])->name('Thankyou');
//this is slug
// Route::get('/industries/{industries-we-serve}/{industries}/{jobid}', [ContentController::class, 'applyShow']);
//
Route::post('content/process/{jobId}', [ContentController::class, 'process'])->name('content.process');
Route::get('/hire/developer/front-end-developement/all-jobs', [ContentController::class, 'allJobs'])->name('content.allJobs');
