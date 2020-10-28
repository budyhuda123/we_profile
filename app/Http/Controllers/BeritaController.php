<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BeritaController extends Controller
{
    public function berita()
   {
     // mengambil data dari table berita
     $berita = DB::table('berita')->get();

     // mengirim data berita ke view index
    return view('berita',['berita' => $berita]);
    

   }
   // method untuk menampilkan view form tambah berita
    public function tambah()
    {

    	// memanggil view tambah
    	return view('tambah');

    }
    // method untuk insert data ke table pegawai
    public function store(Request $request)
    {
    	// insert data ke table pegawai
    	DB::table('berita')->insert([
    		'judul' => $request->judul,
    		'tgl' => $request->tgl,
    		'gambar' => $request->gambar,
    		'isi' => $request->isi
    	]);
    	// alihkan halaman ke halaman pegawai
    	return redirect('/berita');

    }
}
