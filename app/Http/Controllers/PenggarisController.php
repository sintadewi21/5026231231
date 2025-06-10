<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PenggarisController extends Controller
{
    public function indexPenggaris(){

        $penggaris = DB::table('penggaris')->paginate(10);

    	// mengirim data pegawai ke view index
    	return view('indexpenggaris',['penggaris' => $penggaris]);
    }

    // method untuk menampilkan view form tambah penggaris
    public function tambahpenggaris()
    {

        // memanggil view tambah
        return view('tambahpenggaris');

    }
    // method untuk insert data ke table penggaris
    public function storepenggaris(Request $request)
    {

        DB::table('penggaris')->insert([
            'merkpenggaris' => $request->merk,
            'hargapenggaris' => $request->harga,
            'tersedia' => $request->has('tersedia') ? 1 : 0,
            'berat' => $request->berat
        ]);

        return redirect('/penggaris');
    }

    // method untuk edit data penggaris
    public function editpenggaris($id) //ada primary key di database, jadi harus ada id, dan ga ada parameter request.
    {
        // mengambil data penggaris berdasarkan id yang dipilih
        $penggaris = DB::table('penggaris')->where('ID',$id)->get(); //case sensitive, jadi kalo di database huruf besar, harus di sini juga huruf besar
        //output dari get itu format json
        // passing data penggaris yang didapat ke view edit.blade.php
        return view('editpenggaris',['penggaris' => $penggaris]);

    }
    // update data penggaris
    public function updatepenggaris(Request $request)
    {
        // update data penggaris
        DB::table('penggaris')->where('ID',$request->id)->update([
            'merkpenggaris' => $request->merk,
            'hargapenggaris' => $request->harga,
            'tersedia' => $request->has('tersedia') ? 1 : 0,
            'berat' => $request->berat
        ]);
        // alihkan halaman ke halaman penggaris
        return redirect('/penggaris');
    }

    // method untuk hapus data penggaris
    public function hapuspenggaris($id)
    {
        // menghapus data penggaris berdasarkan id yang dipilih
        DB::table('penggaris')->where('ID',$id)->delete();

        // alihkan halaman ke halaman penggaris
        return redirect('/penggaris');
    }

    // method untuk mencari penggaris
    public function caripenggaris(Request $request) //kalo request berarti harus ambil parameter dari form pencarian
	{
		// menangkap data pencarian
		$caripenggaris = $request->caripenggaris;

    		// mengambil data dari table penggaris sesuai pencarian data
		$penggaris = DB::table('penggaris')
		->where('merkpenggaris','like',"%".$caripenggaris."%") //disini operatornya like, jadi kalo ada yang mirip juga akan ditampilkan
		->paginate();

    		// mengirim data penggaris ke view index
		return view('indexpenggaris',['penggaris' => $penggaris]);

	}
}
