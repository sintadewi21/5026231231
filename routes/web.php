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
Route::get('index', function () {
    return view('index');
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

Route::get('/pegawai/{nama}', [PegawaiController::class, 'index']);


Route::get('/formulir', [PegawaiController::class, 'formulir']); //halaman isian formulir
Route::post('/formulir/proses', [PegawaiController::class, 'proses']); //redirect atau action form. diisni juga di encript dengan memanggil route nya pake Route::post

// route blog
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);
