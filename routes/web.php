<?php

use Illuminate\Support\Facades\Route;
//kalo di java use itu mirip import
//import java.io.*;

//tambahin use buat coba.php tadi
use App\Http\Controllers\Coba;

use App\Http\Controllers\PegawaiController;
//ini buat controller pegawai

use App\Http\Controllers\BlogController;
//ini buat controller blog

use App\Http\Controllers\PegawaiDBController;
//ini buat controller pegawai database

use App\Http\Controllers\PenggarisController;
//ini buat controller penggaris

use App\Http\Controllers\KeranjangBelanjaController;
//ini buat controller keranjang belanja
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

//system.out.println();
//nah kalo di oop nya php itu ::, jadinya ganti . di java itu. jadi misalkan di java bakalan ditulis Route.get();
//ini kalo di php jadinya:
Route::get('/', function () {
    return view('welcome');
});
//kode diatas ada contohnya di dokumentasi laravel

Route::get('/selamat', function () {
    return view('welcome');
});

//ini simple route
Route::get('halo', function () {
	return "<h1>Halo, Selamat datang di tutorial laravel www.malasngoding.com</h1>";
});

//dia ga muncul underscrore awalnya, karena ga punya filenya. ceknya ke bagian explorer - resources - views
//nah kalo dah bikin dia bakalan muncul underscore, terus cek aja, jangan lupa pake 127.0.01:8000/blog
Route::get('blog', function () {
	return view('blog');
});

//ini route buat coba.php
Route::get('hello', [Coba::class, 'helloword']);
//Route::get('hello',App\Http\Controllers@helloword);

//pertama
Route::get('pertama', function () {
	return view('pertama');
});

//tugas 1
Route::get('tugas1', function () {
    return view('tugas1');
});

//bootstrap1
Route::get('bootstrap1', function () {
    return view('bootstrap1');
});

//bootstrap2
Route::get('bootstrap2', function () {
    return view('bootstrap2');
});

//js1
Route::get('js1', function () {
    return view('js1');
});

//js2
Route::get('js2', function () {
    return view('js2');
});

//index
Route::get('danantara', function () {
    return view('danantara');
});

//linktree
Route::get('linktree', function () {
    return view('linktree');
});

//ets
Route::get('ets', function () {
    return view('ets');
});

//frontend
Route::get('frontend', function () {
    return view('frontend');
});

Route::get('dosen', [Coba::class, 'index']);

//Route::get('/pegawai/{nama}', [PegawaiController::class, 'index']);


Route::get('/formulir', [PegawaiController::class, 'formulir']); //halaman isian formulir
Route::post('/formulir/proses', [PegawaiController::class, 'proses']); //redirect atau action form. diisni juga di encript dengan memanggil route nya pake Route::post

// route blog
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);


//INI MULAI MYSQL, route buat pegawai
Route::get('/pegawai', [PegawaiDBController::class, 'index']);

//route input pegawai
Route::get('/pegawai/tambah',[PegawaiDBController::class, 'tambah']);

//route store
Route::post('/pegawai/store', [PegawaiDBController::class, 'store']);

//route edit pegawai
Route::get('/pegawai/edit/{id}', [PegawaiDBController::class, 'edit']);

//route update pegawai
Route::post('/pegawai/update', [PegawaiDBController::class, 'update']);

//route hapus pegawai
Route::get('/pegawai/hapus/{id}', [PegawaiDBController::class, 'hapus']);

//route cari pegawai
Route::get('/pegawai/cari', [PegawaiDBController::class, 'cari']);

//route proses
Route::post('/pegawai/proses', [PegawaiDBController::class, 'proses']);

//route tugas pertemuan 14 tabel penggaris
Route::get('/penggaris', [PenggarisController::class, 'indexpenggaris']);
Route::get('/penggaris/caripenggaris', [PenggarisController::class, 'caripenggaris']);
Route::get('/penggaris/tambahpenggaris', [PenggarisController::class, 'tambahpenggaris']);
Route::post('/penggaris/storepenggaris', [PenggarisController::class, 'storepenggaris']);
Route::get('/penggaris/editpenggaris/{id}', [PenggarisController::class, 'editpenggaris']);
Route::post('/penggaris/updatepenggaris', [PenggarisController::class, 'updatepenggaris']);
Route::get('/penggaris/hapuspenggaris/{id}', [PenggarisController::class, 'hapuspenggaris']);

//route tugas pertemuan 15 keranjangbelanja
Route::get('/keranjangbelanja', [KeranjangBelanjaController::class, 'indexkeranjangbelanja']);
Route::get('/keranjangbelanja/belikeranjangbelanja/{id}', [KeranjangBelanjaController::class, 'belikeranjangbelanja']);
Route::get('/keranjangbelanja/batalkeranjangbelanja/{id}', [KeranjangBelanjaController::class, 'batalkeranjangbelanja']);
Route::post('/keranjangbelanja/storekeranjangbelanja', [KeranjangBelanjaController::class, 'storekeranjangbelanja']);
Route::post('/keranjangbelanja/updatekeranjangbelanja', [KeranjangBelanjaController::class, 'updatekeranjangbelanja']);
