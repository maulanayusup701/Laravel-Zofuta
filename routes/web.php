<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\DashboardDevContactController;
use App\Http\Controllers\DashboardDevController;
use App\Http\Controllers\ProfileController;

Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'login')->middleware('guest')->name('login');
    Route::post('/login', 'loginAuth')->middleware('guest');
    Route::get('/register', 'register')->middleware('guest');
    Route::post('/register', 'registerStore')->middleware('guest');
    Route::post('/logout', 'logout')->middleware('auth');
});

//Home
Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/gor/{gor:slug_gor}', 'show');
    Route::get('/search', 'search');
});

//Profil
Route::controller(ProfileController::class)->group(function () {
    Route::get('/profile', 'index')->middleware('user');
});

Route::post('/orderStore', [OrderController::class, 'orderStore']);

Route::post('/contact', [ContactController::class, 'StoreContact'])->name('form-contact');

//Dashboard Dev
route::get('/dashboarddev', [DashboardDevController::class, 'index'])->middleware('dev');
Route::controller(DashboardDevContactController::class)->group(function () {
    Route::get('/dashboarddev/contact', 'index')->middleware('dev');
    Route::get('/dashboarddev/contact/{contact}', 'show')->middleware('dev');
    Route::delete('/dashboarddev/contact/{contact}', 'destroy')->middleware('dev');
});

route::get('/dashboardadmin', [DashboardAdminController::class, 'index'])->middleware('admin');

Route::get('/role', [RoleController::class, 'index']);
