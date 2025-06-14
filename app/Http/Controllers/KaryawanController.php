<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KaryawanController extends Controller
{
    public function index()
    {
        // mengambil data dari table karyawan
        $karyawan = DB::table('karyawan')->paginate(15);

        // mengirim data karyawan ke view index
        return view('indexkaryawan', ['karyawan' => $karyawan]);
    }

    // method untuk menampilkan view form tambah karyawan
    public function tambah()
    {
        // memanggil view tambah
        return view('tambahkaryawan');
    }

    // method untuk insert data ke table karyawan
    public function store(Request $request)
    {
        // insert data ke table karyawan
        DB::table('karyawan')->insert([
            'kodepegawai' => $request->kodepegawai,
            'namalengkap' => $request->namalengkap,
            'divisi' => $request->divisi,
            'departemen' => $request->departemen,
        ]);
        // alihkan halaman ke halaman karyawan
        return redirect('/karyawan');
    }

    // method untuk edit data karyawan
    public function edit($kp)
    {
        // mengambil data karyawan berdasarkan kodepegawai yang dipilih
        $karyawan = DB::table('karyawan')->where('kodepegawai', $kp)->get();
        // passing data karyawan yang didapat ke view editkaryawan.blade.php
        return view('editkaryawan', ['karyawan' => $karyawan]);
    }

    // update data karyawan
    public function update(Request $request)
    {
        // update data karyawan
        DB::table('karyawan')->where('kodepegawai', $request->kodepegawai)->update([
            'namalengkap' => $request->namalengkap,
            'divisi' => $request->divisi,
            'departemen' => $request->departemen,
        ]);
        // alihkan halaman ke halaman karyawan
        return redirect('/karyawan');
    }

    // method untuk hapus data karyawan
    public function hapus($kp)
    {
        // menghapus data karyawan berdasarkan kodepegawai yang dipilih
        DB::table('karyawan')->where('kodepegawai', $kp)->delete();

        // alihkan halaman ke halaman karyawan
        return redirect('/karyawan');
    }

    // method untuk mencari karyawan
    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;

        // mengambil data dari table karyawan sesuai pencarian data
        $karyawan = DB::table('karyawan')
            ->where('namalengkap', 'like', "%" . $cari . "%")
            ->paginate();

        // mengirim data karyawan ke view index
        return view('indexkaryawan', ['karyawan' => $karyawan]);
    }
}
