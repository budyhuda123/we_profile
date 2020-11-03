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
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>

	<h3>Data Berita</h3>

	<a href="/berita/tambah"> + Tambah berita Baru</a><br>
  <a href="/home"> Kembali ke Home</a>

	<br/>
	<br/>

	<!--table border="1">
		<tr>

			<th>Judul</th>
			<th>Tanggal</th>
			<th>ISI</th>
			<th>Gambar</th>
			<th>Opsi</th>
		</tr>
@foreach($berita as $b)
		<tr>

			<td>{{ $b->judul }}</td>
			<td>{{ $b->tgl }}</td>
			<td>{{ $b->isi }}</td>
			<td>{{ $b->gambar }}</td>
			<td>
				<a href="/berita/edit/{{ $b->berita_id }}">Edit</a>
				|
				<a href="/berita/hapus/{{ $b->berita_id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table-->


</body>
<html>
													 <head>
															 <meta charset='utf-8'>
															 <meta name='viewport' content='width=device-width, initial-scale=1'>
															 <title>Snippet - BBBootstrap</title>
															 <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css' rel='stylesheet'>
															 <link href='' rel='stylesheet'>
															 <style>@import url('https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800,900|Rubik:300,400,500,700,900');

.bbb_advs {
	 width: 100%;
	 padding-top: 80px;
	 padding-bottom: 80px
}

.bbb_adv {
	 width: 100%;
	 height: 180px;
	 border: solid 1px #e8e8e8;
	 box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.1)
}

.bbb_adv_content {
	 padding-left: 30px
}

.bbb_adv_subtitle {
	 font-size: 12px;
	 color: rgba(0, 0, 0, 0.5);
	 margin-bottom: 26px
}

.bbb_adv_title a {
	 font-size: 18px;
	 font-weight: 500;
	 color: #000000
}

.bbb_adv_title a:hover {
	 color: #0e8ce4
}

.bbb_adv_title_2 a {
	 font-size: 18px;
	 font-weight: 500;
	 color: #0e8ce4
}

.bbb_adv_title_2 a:hover {
	 opacity: 0.8
}

.bbb_adv_text {
	 color: #828282;
	 margin-top: 10px;
	 font-size: 14px
}

.bbb_adv_image {
	 width: 178px;
	 height: 100%
}

.bbb_adv_image img {
	 display: block;
	 max-width: 100%
}</style>

													 </head>
													 <body>
													 <div class="bbb_advs">
	 <div class="container">

			 <div class="row">
				 @foreach($berita as $b)
					 <div class="col-lg-4  ">
							 <!-- bbb_adv Item -->
							 <div class="bbb_adv d-flex flex-row align-items-center justify-content-start">
									 <div class="bbb_adv_content">
											 <div class="bbb_adv_title"><a href="#">{{ $b->judul }}</a></div>
											 <div class="bbb_adv_text">{{ $b->tgl }}</div>
											 <div class="bbb_adv_text">{{ $b->isi }}</div>
									 </div>
									 <div class="ml-auto">
											 <div class="bbb_adv_image"><img src="{{ $b->gambar }}" alt=""></div>
									 </div>
							 </div>
					 </div>
@endforeach
					 <br>
			 </div>
	 </div>
</div>
													 </body>
</html>
@endsection
