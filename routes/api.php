<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\OnboardController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::prefix('v1')->group(function () {
    Route::get('/expert_categories', [ApiController::class, 'expert_categories']);
    Route::get('/experts', [ApiController::class, 'experts']);
    Route::post('/experts/search', [ApiController::class, 'experts_search']);
    Route::post('/experts/category', [ApiController::class, 'experts_by_category']);
    Route::post('/experts/experties', [ApiController::class, 'experts_by_experties']);
    Route::post('/experts/skills', [ApiController::class, 'experts_by_skills']);
    Route::get('/clients', [ApiController::class, 'clients']);
    Route::get('/getPhone', [OnboardController::class, 'getPhoneCodes'])->name('getPhone');
    Route::get('/skills', [OnboardController::class, 'getSkills'])->name('getSkills');
    Route::get('/expertise', [OnboardController::class, 'getExpert'])->name('getExpert');
    Route::get('/workWith', [OnboardController::class, 'getWork'])->name('getWork');
    Route::get('/getTimezones', [ContentController::class, 'getTimezones'])->name('getTimezones');
    Route::get('/getExpertise', [ContentController::class, 'getExpertise'])->name('getExpertise');
    // category of plans and pricing
    Route::get('/categories-plans-pricing', [ContentController::class, 'getPlansCategory'])->name('getPlansCategory');
    // Route::post('/submitForm', [ContentController::class, 'submitForm'])->name('submitForm');
    // Route for submitting the document data to insta_hirin_onboard_documents table
    //Route::post('/submit-document', [ContentController::class, 'submitDocument'])->name('submitDocument');
});
