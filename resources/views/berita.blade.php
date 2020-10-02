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

	<table border="1">
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
	</table>


</body>
</html>
