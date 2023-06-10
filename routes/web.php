<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContentController;

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

//ContactUs Form Submission
Route::post('/submit-form', [App\Http\Controllers\ContentController::class, 'store'])->name('submit-form');

//Subscribe Form Submission
Route::post('/subscribe', [App\Http\Controllers\ContentController::class, 'subscription'])->name('subscribe');

// Hire Form Submission
Route::post('/hire', [ContentController::class, 'hire'])->name('hire');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
