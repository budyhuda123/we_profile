<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>

	<h3>Tamabah Berita</h3>

	<a href="/berita"> Kembali</a>

	<br/>
	<br/>

	<form action="/berita/store" method="post">
		{{ csrf_field() }}
		Judul <input type="text" name="nama" required="required"> <br/>
		Tanggal <input type="date" name="jabatan" required="required"> <br/>
		 Gambar <input type="text" name="umur" required="required"> <br/>
		ISI <textarea name="alamat" required="required"></textarea> <br/>
		<input type="submit" value="Simpan Data">
	</form>

</body>
</html>
