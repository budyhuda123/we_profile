<!-- Menghubungkan dengan view template master -->
@extends('master')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman')


<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')

<!DOCTYPE html>
<html>
<head>
	<title>Galeri</title>
</head>
<body>

	<h3>Galeri</h3>

	<a href="/berita/tambah"> + Tambah berita Baru</a><br>
  <a href="/home"> Kembali ke Home</a>

	<p>Seri Tutorial Laravel Lengkap Dari Dasar</p>
	<p>Ini adalah view galeri. ada di route galeri.</p>
	<br>
@foreach($galeri as $g)
	<div class="card-deck">
  <div class="card">
    <img src="{{ $g->foto}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{ $g->judul }}</h5>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
</div>
@endforeach
 </div>
 <br>
</body>
</html>
@endsection
