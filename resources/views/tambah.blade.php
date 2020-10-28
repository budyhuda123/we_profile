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
		Judul <input type="text" name="judul" required="required"> <br/>
		Tanggal <input type="date" name="tgl" required="required"> <br/>
		<!-- Gambar <input type="text" name="gamabr" required="required"> <br/-->
		 <!--form>
  <div class="form-group">
    <label for="exampleFormControlFile1">Gambar</label>
    <input type="file" class="form-control-file" name="gambar" id="exampleFormControlFile1">
  </div>
</form-->
		ISI <textarea name="isi" required="required"></textarea> <br/>
		<input type="submit" value="Simpan Data">
	</form>

</body>
</html>
