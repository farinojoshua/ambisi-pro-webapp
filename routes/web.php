<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController as FrontHomeController;
use App\Http\Controllers\Frontend\PropertyController as FrontPropertyController;
use App\Http\Controllers\Admin\PropertyController as AdminPropertyController;
use App\Http\Controllers\Admin\DeveloperController as AdminDeveloperController;
use App\Http\Controllers\Admin\AppointmentController as AdminAppointmentController;

Route::get('/', [FrontHomeController::class, 'index'])->name('home');
Route::get('/about', [FrontHomeController::class, 'about'])->name('about');
Route::get('/properties', [FrontPropertyController::class, 'index'])->name('properties.index');
Route::get('/properties/{id}', [FrontPropertyController::class, 'show'])->name('properties.show');
Route::get('/contact', [FrontHomeController::class, 'contact'])->name('contact');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::prefix('admin')->name('admin.')->group(function () {
        Route::resource('developers', AdminDeveloperController::class);
        Route::resource('properties', AdminPropertyController::class);
        Route::resource('appointments', AdminAppointmentController::class);
    });
});
