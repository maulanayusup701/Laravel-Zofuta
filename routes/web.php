<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\DashboardDevController;

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

Route::post('/orderStore', [OrderController::class, 'orderStore']);

Route::post('/contact', [ContactController::class, 'index'])->middleware('guest');

route::get('/dashboarddev', [DashboardDevController::class, 'index'])->middleware('dev');
route::get('/dashboardadmin', [DashboardAdminController::class, 'index'])->middleware('admin');



Route::get('/role', [RoleController::class, 'index']);
