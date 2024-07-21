<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PropertyController;
use App\Http\Controllers\Admin\DeveloperController;
use App\Http\Controllers\Admin\AppointmentController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::prefix('admin')->name('admin.')->middleware(['auth'])->group(function () {
    Route::resource('developers', DeveloperController::class);
    Route::resource('properties', PropertyController::class);
    Route::resource('appointments', AppointmentController::class);
});
