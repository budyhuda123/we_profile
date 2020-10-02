<!-- Menghubungkan dengan view template master -->
@extends('master')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman')


<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')

	<h1>Ini Adalah Halaman Home</h1>
	<p>Selamat datang !</p>

		<h3>Ini Berita</h3>
		<div class="card" style="width: 18rem;">
  		<img src="..." class="card-img-top" alt="...">
  		<div class="card-body">
    		<h5 class="card-title">Card title</h5>
    		<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    		<a href="#" class="btn btn-primary">Go somewhere</a>
  		</div>
		</div>
		

@endsection
