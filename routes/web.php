<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RunController;
use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Artisan;
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


Route::get('/clear-all', function () {
    Illuminate\Support\Facades\Artisan::call('cache:clear');
    Illuminate\Support\Facades\Artisan::call('config:clear');
    Illuminate\Support\Facades\Artisan::call('config:cache'); // Optional: Rebuild config cache
    Illuminate\Support\Facades\Artisan::call('view:clear'); // Optional: Clear compiled views
    Illuminate\Support\Facades\Artisan::call('route:clear'); // Optional: Clear cached routes

    return "All caches cleared successfully!";
})->name('clear-all');

Route::get('/', function () {
    return view('welcome');
})->name('/');
Route::get('run_file',[RunController::class,'runFile']);
Route::get('dashboard/{key?}',[App\Http\Controllers\WebsiteController::class,'dashboard'])->name('dashboard')->middleware('auth');
Route::post('store_profile',[App\Http\Controllers\WebsiteController::class,'storeProfile'])->name('store-profile')->middleware('auth');
Route::get('profile_summary',[App\Http\Controllers\WebsiteController::class,'profileSummary'])->name('profile-summary')->middleware('auth');
Route::get('profile_dashboard',[App\Http\Controllers\WebsiteController::class,'profileDashboard'])->name('profile_dashboard')->middleware('auth');
Route::get('quizes',[App\Http\Controllers\WebsiteController::class,'quiz'])->name('quizes')->middleware('auth');
Route::get('jobs',[App\Http\Controllers\WebsiteController::class,'job'])->name('jobs')->middleware('auth');
Route::get('career_profile',[App\Http\Controllers\WebsiteController::class,'careerProfile'])->name('career_profile')->middleware('auth');
Auth::routes();


//website routes
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('/faqs', [App\Http\Controllers\HomeController::class, 'faq'])->name('faqs');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
