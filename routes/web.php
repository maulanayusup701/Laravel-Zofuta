<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ContactController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'login')->middleware('guest')->name('login');
    Route::post('/login', 'loginAuth')->middleware('guest');
    Route::get('/register', 'register')->middleware('guest');
    Route::post('/register', 'registerStore')->middleware('guest');
    Route::post('/logout', 'logout')->middleware('auth');
});

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/gor/{gor:slug_gor}', 'show');
});
Route::resource('/dashboard', DashboardController::class)->middleware('auth');

Route::post('/contact', [ContactController::class, 'index'])->middleware('guest');




Route::get('/role', [RoleController::class, 'index']);
