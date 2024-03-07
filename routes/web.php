<?php

use App\Models\Buku;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LogoutController;

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
    return view('landing-page');
});
Route::get('/admin/user', function () {
    return view('admin.index_user');
});
Route::get('/admin/user/create', function () {
    return view('admin.create_user');
});
Route::get('/peminjam/daftar_buku', function () {
    return view('peminjam.daftar_buku');
});
Route::get('/admin/peminjaman', function () {
    return view('admin.peminjam_index');
});
Route::get('/admin/peminjaman/create', function () {
    return view('admin.create_data_peminjaman');
});
Route::get('/admin/pengembalian', function () {
    return view('admin.data_pengembalian');
});
Route::get('/admin/pengembalian/create', function () {
    return view('admin.create_data_pengembalian');
});
Route::get('/peminjam/detail_buku', function () {
    return view('peminjam.detail_buku');
});
Route::get('/petugas/dashboardpet', function () {
    return view('petugas.dashboardpet');
});

Route::middleware('guest')->group(function () {
    Route::get('/login', [\App\Http\Controllers\LoginController::class, 'login'])->name('login');
    Route::post('/login', [\App\Http\Controllers\LoginController::class, 'loginActon'])->name('login');
    Route::get('/register', [\App\Http\Controllers\RegisterController::class, 'create'])->name('register');
    Route::post('/register', [\App\Http\Controllers\RegisterController::class, 'store'])->name('register');
});

Route::middleware('auth')->group(function() {
    Route::resource('dashboard', DashboardController::class);
    Route::get('logout', [LogoutController::class, 'logout'])->name('logout');
        Route::resource('buku', BukuController::class);
        Route::resource('kategori', KategoriController::class);
    Route::prefix('pengaturan')->group(function () {
        Route::resource('user', UserController::class);
    });
});
