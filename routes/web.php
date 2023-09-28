<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\OnboardController;

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


Route::get('/{levelOneSlug?}/{levelTwoSlug?}/{levelThreeSlug?}/{levelFourSlug?}', 'App\Http\Controllers\ContentController@index')->name('index');

// ContactUs Form Submission
Route::post('/submit-form', [App\Http\Controllers\ContentController::class, 'store'])->name('submit-form');

// Subscribe Form Submission
Route::post('/subscribe', [App\Http\Controllers\ContentController::class, 'subscription'])->name('subscribe');

// Hire Form Submission
Route::post('/hire', [ContentController::class, 'hire'])->name('hire');
Route::post('/insta-hirin-requirements', [ContentController::class, 'instaHirinRequirements'])->name('instaHirinRequirements');
//Route::post('/insta-hirin-onboard', [ContentController::class, 'instaHirinOnboard'])->name('instaHirinOnboard');
Route::post('/submitForm', [ContentController::class, 'submitForm'])->name('submitForm');

// Team Form Submission
Route::post('/submit-team-form', [ContentController::class, 'teamForm'])->name('team');

// Career Form Submission
Route::post('/career', [ContentController::class, 'career'])->name('career');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/hire/developer/developers-other/HireForm/{id}', [ContentController::class, 'hireExpert'])->name('hireExpert');

// Insta Hiring Onboard Form Submission country code
// Route::get('/getPhoneCodes', [OnboardController::class, 'getPhoneCodes'])->name('getPhoneCodes');
//Route::get('/getPhoneCodes', 'ContentController@getPhoneCodes')->name('phoneCodes');
