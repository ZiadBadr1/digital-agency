<?php

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

Route::get('/a', function () {
    return view('admin.auth.login');
});

Route::prefix('/')->name('client-side.')->group(function () {

    Route::view('', 'client-side.index')->name('index');

    Route::view('about', 'client-side.about')->name('about');

    Route::view('contact', 'client-side.contact')->name('contact');

    Route::view('projects', 'client-side.project')->name('projects');

    Route::view('services', 'client-side.service')->name('services');

});

