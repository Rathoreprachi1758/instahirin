<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\OnboardController;
use App\Http\Controllers\Logincontroller;

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
Route::get('/Sign-In', [Logincontroller::class, 'index'])->name('signin');
Route::Post('sign-up', [Logincontroller::class, 'store'])->name('submit.signup');
Route::get('/login', [LoginController::class, 'login'])->name('loginpage');
Route::post('dashboard', [LoginController::class, 'loginpage'])->name('login');

Route::get('/{levelOneSlug?}/{levelTwoSlug?}/{levelThreeSlug?}/{levelFourSlug?}', 'App\Http\Controllers\ContentController@index')->name('index');

// ContactUs Form Submission
Route::post('/submit-form', [App\Http\Controllers\ContentController::class, 'store'])->name('submit-form');

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
Route::get('/industries/{industries-we-serve}/{industries}/{jobid}', [ContentController::class, 'applyShow']);
//
Route::post('content/process/{jobId}', [ContentController::class, 'process'])->name('content.process');
