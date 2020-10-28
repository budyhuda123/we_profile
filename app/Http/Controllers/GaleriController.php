<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GaleriController extends Controller
{
  public function galeri()
      {
      	// mengambil data dari table galeri
      	$galeri = DB::table('galeri')->get();

      	// mengirim data galeri ke view index
      	return view('galeri',['galeri' => $galeri]);

      }
}
