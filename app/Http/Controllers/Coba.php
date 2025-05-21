<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Coba extends Controller
{
    //
    public function helloword()
    {
        return view('blog');
    }
    public function index(){
        $nama = "Diki Alfarabi Hadi";
        $umur = 35;
        $alamat = "Surabaya";
        $pelajaran = ["Algoritma & Pemrograman","Kalkulus","Pemrograman Web"];
        //'usia' itu nama variabel yang ada di passingkan ke view, jadi nanti di view manggilnya $usia
    	return view('biodata', ['nama' => $nama, 'usia' => $umur, 'alamat' => $alamat, 'matkul' => $pelajaran]);
    }
}
