<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;
use App\Http\Controllers\PesawatController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Galeri\GaleriController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PenjualanController;
use App\Http\Controllers\FilePondController;
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
Route::get('/testing', function(){

})->name('test');
Route::post('/search-jadwal-pesawat', [PesawatController::class, 'cariJadwal'])->name('cari-jadwal-pesawat');
Route::get('/pesawat/redirect', [PesawatController::class, 'redirecToWa'])->name('cari-jadwal-pesawat.redirect');
Route::get('/tiket/kapal/{id:slug}', [KapalController::class, 'detail'])->name('kapal.detail');
Route::get('/tiket/kapal/redirect/{id:slug}', [KapalController::class, 'redirecToWa'])->name('kapal.redirect');

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
    Route::get('/kelola-tiket-kapal/create', [KapalController::class, 'create'])->name('kapal.create');
    Route::post('/kelola-tiket-kapal/create', [KapalController::class, 'postCreate'])->name('kapal.create.post');

    Route::get('/kelola-tiket-kapal/edit/{id:slug}',[KapalController::class, 'edit'])->name('kapal.edit');
    Route::post('/kelola-tiket-kapal/edit/{id:slug}',[KapalController::class, 'update'])->name('kapal.update');

    Route::post('/status-expired/set/{id:slug}', [KapalController::class ,'toTiketHabis'])->name('kapal.set.expired');
    Route::post('/detele/tiket-kapal/{id:slug}', [KapalController::class, 'delete'])->name('kapal.delete');

    Route::get('/manage-galeri', [GaleriController::class, 'adminIndex'])->name('galeri.admin');
    Route::get('/manage-galeri/create', [GaleriController::class, 'create'])->name('galeri.admin.create');
    Route::post('/manage-galeri/create', [GaleriController::class, 'store'])->name('galeri.admin.store');
    Route::get('/manage-galeri/update/{id}', [GaleriController::class, 'edit'])->name('galeri.admin.edit');
    Route::post('/manage-galeri/update/{id}', [GaleriController::class, 'update'])->name('galeri.admin.update');

    Route::post('/filePond/post/create/{folder}', [FilePondController::class, 'postImage'])->name('filePond.post');
    Route::post('/filePond/delete/{folder}', [FilePondController::class, 'deleteImage'])->name('filePond.delete');
});





