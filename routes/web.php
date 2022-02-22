<?php

use Illuminate\Support\Facades\Route;

Route::view('tenant-404', 'errors.404-tenant')->name('tenant.404');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
