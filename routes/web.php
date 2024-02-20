<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/admin/dashboardad', function () {
    return view('admin.dashboardad');
});
Route::get('/admin/profile', function () {
    return view('admin.profile');
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
Route::get('/peminjam/buku_peminjam', function () {
    return view('peminjam.buku_peminjam');
});
Route::get('/peminjam/dashboardpem', function () {
    return view('peminjam.dashboardpem');
});
Route::get('/admin/user/edit', function () {
    return view('admin.edit_user');
});
Route::get('/admin/buku', function () {
    return view('admin.data_buku');
});
Route::get('/admin/buku/create', function () {
    return view('admin.create_data_buku');
});
Route::get('/admin/kategori', function () {
    return view('admin.data_kategori');
});
Route::get('/admin/kategori/create', function () {
    return view('admin.create_data_kategori');
});
Route::get('/admin/peminjaman', function () {
    return view('admin.data_peminjaman');
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
Route::get('/admin/buku/edit', function () {
    return view('admin.edit_buku');
});
Route::get('/peminjam/koleksi_buku', function () {
    return view('peminjam.koleksi_buku');
});
Route::get('/peminjam/detail_buku', function () {
    return view('peminjam.detail_buku');
});
Route::get('/petugas/dashboardpet', function () {
    return view('petugas.dashboardpet');
});
Route::get('/register', [\App\Http\Controllers\RegisterController::class, 'create'])->name('register');
Route::post('/register', [\App\Http\Controllers\RegisterController::class, 'store'])->name('register');
