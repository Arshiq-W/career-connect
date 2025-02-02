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
});
Route::get('run_file',[RunController::class,'runFile']);
Route::get('dashboard',[WebsiteController::class,'dashboard'])->name('dashboard')->middleware('auth');
Auth::routes();


//website routes
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/about_us', [App\Http\Controllers\HomeController::class, 'aboutUs'])->name('about_us');
Route::get('/faqs', [App\Http\Controllers\HomeController::class, 'faq'])->name('faqs');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
