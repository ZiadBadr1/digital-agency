<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\ClientSide\ClientSideController;
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


Route::prefix('/admin')->name('admin.')->middleware('auth:admin')->group(function () {
    Route::get('dashboard', [LoginController::class,'index'])->name('dashboard');
    Route::post('logout', [LoginController::class,'logout'])->name('logout');

    Route::get('settings',[DashboardController::class,'settings'])->name('settings');
    Route::get('skills',[DashboardController::class,'skills'])->name('skills');
    Route::get('subscriber',[DashboardController::class,'subscriber'])->name('subscriber');
    Route::get('counter',[DashboardController::class,'counter'])->name('counter');
    Route::get('service',[DashboardController::class,'service'])->name('service');
    Route::get('messages',[DashboardController::class,'messages'])->name('messages');
    Route::get('projects',[DashboardController::class,'projects'])->name('projects');
    Route::get('categories',[DashboardController::class,'categories'])->name('categories');
    Route::get('testimonials',[DashboardController::class,'testimonials'])->name('testimonials');
    Route::get('members',[DashboardController::class,'members'])->name('members');
});

Route::get('/login', function () {
    return view('admin.auth.login');
})->name('admin.login')->middleware('guest:admin');

Route::prefix('/')->name('client-side.')->group(function () {

    Route::get('',[ClientSideController::class,'home'])->name('index');

    Route::get('about', [ClientSideController::class,'about'])->name('about');

    Route::get('contact', [ClientSideController::class,'contact'])->name('contact');

    Route::get('projects', [ClientSideController::class,'projects'])->name('projects');

    Route::get('services', [ClientSideController::class,'services'])->name('services');

});

