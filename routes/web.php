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
    return view('register');
});

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
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
Route::get('/peminjam/dashboard', function () {
    return view('peminjam.dashboard');
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
