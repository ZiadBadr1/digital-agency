<?php

use App\Http\Controllers\Admin\LoginController;
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


Route::prefix('/')->name('admin.')->middleware('auth:admin')->group(function () {
    Route::get('dashboard', [LoginController::class,'index'])->name('dashboard');
    Route::post('logout', [LoginController::class,'logout'])->name('logout');
});

Route::get('/login', function () {
    return view('admin.auth.login');
})->name('admin.login')->middleware('guest:admin');

Route::prefix('/')->name('client-side.')->group(function () {

    Route::view('', 'client-side.index')->name('index');

    Route::view('about', 'client-side.about')->name('about');

    Route::view('contact', 'client-side.contact')->name('contact');

    Route::view('projects', 'client-side.project')->name('projects');

    Route::view('services', 'client-side.service')->name('services');

});

