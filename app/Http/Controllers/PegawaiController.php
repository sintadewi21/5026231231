<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    //
    public function index($nama){
    	return $nama;
        //disini hanya return variabel, ga view
    }

    public function formulir(){

    	return view('formulir');

    }
    public function proses(Request $request){
        $nama = $request->input('nama'); //kelas request di properti input bagian nama
        //butuh konsistensi antara nama di form dan di controller, jadi nama yang ada di formulir.blade.php dan pegawaiController harus sama
     	$alamat = $request->input('alamat');
        //return "Nama : ".$nama."<br> Alamat : ".$alamat . "<br> Aslinya : ".$request; //dia nanti bakaln nampilin informasi yang ga dibutuhkan viewer, disitu ada settingan servernya, jadi kalo ga match ya ga boleh, intinya ini bahasa advanced
        return "Nama : ".$nama."<br> Alamat : ".$alamat;
}
}

