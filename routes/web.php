<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PesawatController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PenjualanController;
use App\Http\Controllers\tiket_kapal\KapalController;

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


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/search-jadwal-pesawat', [PesawatController::class, 'cariJadwal'])->name('cari-jadwal-pesawat');
Route::get('/tiket/kapal', [KapalController::class, 'detail'])->name('kapal.detail');

route::middleware(['guest'])->group(function () {
    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::post('/register', [RegisterController::class, 'register'])->name('register.create');

    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'login'])->name('login.proses');
});


route::middleware(['auth'])->group(function () {
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('/admin', [DashboardController::class, 'index'])->name('admin.dashboard');

    Route::get('/data-penjualan', [PenjualanController::class, 'index'])->name('penjualan');
    Route::get('/data-penjualan/tambah', [PenjualanController::class, 'create'])->name('penjualan.create');
    Route::post('/data-penjualan/tambah', [PenjualanController::class, 'tambah'])->name('penjualan.create.simpan');
    Route::get('/data-penjualan/edit/{id}', [PenjualanController::class, 'edit'])->name('penjualan.edit');
    Route::post('/data-penjualan/edit/{id}', [PenjualanController::class, 'update'])->name('penjualan.update');
    Route::post('/data-penjualan/hapus/{id}', [PenjualanController::class, 'delete'])->name('penjualan.hapus');
    Route::get('/data-penjualan/export/{data}', [PenjualanController::class,'export'])->name('penjualan.export');

    Route::get('/manage-banner', [BannerController::class, 'index'])->name('banner');
    Route::get('/manage-banner/{id}/edit', [BannerController::class, 'edit'])->name('banner.edit');
    Route::post('/manage-banner/{id}/edit', [BannerController::class, 'update'])->name('banner.update');

    Route::get('/kelola-tiket-kapal', [KapalController::class, 'adminIndex'])->name('kapal.admin');
});





