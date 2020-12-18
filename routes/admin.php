<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register routes for your admin area. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "web" middleware group.
|
*/

Route::get('/admin', function () {
    return view('admin.main');
})->middleware(['auth', 'admin'])->name('admin');
