<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;

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

Route::get('/', [HomeController::class, 'index']);
Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'login')->middleware('guest')->name('login');
    Route::post('/login', 'loginAuth')->middleware('guest');
    Route::get('/register', 'register')->middleware('guest');
    Route::post('/register', 'registerStore')->middleware('guest');
    Route::post('/logout', 'logout')->middleware('auth');
});
Route::resource('/dashboard', DashboardController::class)->middleware('auth');
