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
   public function home()
    {
    // mengambil data dari table berita
    $berita = DB::table('berita')->get();

    // mengirim data berita ke view index
    return view('home',['berita' => $home]);

    }
}
