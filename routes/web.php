<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrasiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VerificationController;

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

Route::get('/', function () {
    return view('landing');
});
Route::get('/admin', function () {
    return view('Admin.admin');
});


// Route::get('/login', [LoginController::class , 'show'])->name('login')->middleware('guest');
Route::get('/login', [LoginController::class , 'show']);
Route::post('/login', [LoginController::class , 'auth']);
Route::post('/logout', [LoginController::class , 'logout']);

Route::get('/registrasi', [RegistrasiController::class , 'show'])->middleware('guest');
Route::post('/registrasi', [RegistrasiController::class , 'store'])->name('user.store');

Route::get('/dashboard', [DashboardController::class , 'show']);

Route::get('/GudangKhusus');
Route::get('/GudangBersama');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
