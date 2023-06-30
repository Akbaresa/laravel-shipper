<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GudangBersamaController;
use App\Http\Controllers\GudangKhususController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrasiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VerificationController;
use App\Models\gudang_bersama;

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



// Route::get('/login', [LoginController::class , 'show'])->name('login')->middleware('guest');
Route::get('/login', [LoginController::class , 'show']);
Route::post('/login', [LoginController::class , 'auth'])->name('login');


Route::get('/email/verify/butuh-verifikasi', [VerificationController::class, 'notice'])->middleware('auth')->name('verification.notice');
Route::get('/email/verify/{id}/{hash}', [VerificationController::class, 'verify'])->middleware('auth','signed')->name('verification.verify');
Route::get('/email/verify/resend-verif', [VerificationController::class, 'resend'])->middleware('auth','throttle:6,1')->name('verification.send');

Route::middleware(['auth','auth.session' , 'verified'])->group(function (){
    Route::get('/dashboard', [DashboardController::class , 'show']);
});

Route::group(['middleware' => ['auth', 'admin']], function () {
    // Routes yang hanya dapat diakses oleh pengguna dengan peran admin
    Route::get('/Admin',[AdminController::class , 'index'] )->name('admin.dashboard');
    Route::get('/admin/detail', function () {
    return view('Admin.detail');
    });
    Route::get('/admin/detail/{user:nama}', [AdminController::class , 'detail'])->name('admin.detail');
    Route::put('/admin/detail/{user:nama}', [AdminController::class , 'update'])->name('admin.update');
    Route::delete('/admin/detail/{id}', [AdminController::class , 'delete'])->name('admin.delete');
    Route::post('/Admin/search', [AdminController::class , 'search'])->name('admin.search');
    // Tambahkan route-admin lainnya di sini
});
Route::post('/logout', [LoginController::class , 'logout']);

Route::get('/registrasi', [RegistrasiController::class , 'show'])->middleware('guest');
Route::post('/registrasi', [RegistrasiController::class , 'store'])->name('user.store');

// gudang-khusus
Route::get('/gudang-khusus', [GudangKhususController::class , 'index']);
Route::get('/gudang-khusus/sewa', [GudangKhususController::class , 'show']);
Route::post('/gudang-khusus/sewa', [GudangKhususController::class , 'store'])->name('gudang-khusus.store');
Route::get('/gudang-khusus/sewa/cetak', [GudangKhususController::class , 'sewa'])->name('gudang-khusus.sewa');
Route::get('/gudang-khusus/{id}/cetakKontrak', [GudangKhususController::class , 'cetak'])->middleware('auth')->name('gudang-khusus.cetak');
// Route::get('/pembayaran/{id}/validasi', [PaymentController::class, 'validatePayment']);

Route::get('/gudang-bersama' , [GudangBersamaController::class , 'index'])->name('gudang
-bersama.index');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
