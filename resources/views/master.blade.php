<!DOCTYPE html>
<html>
<head>
	<title>Pande Besi</title>
</head>
<body>

	<header>

		<h2>Blog Pande Besi</h2>
		<nav>
			<a href="/home">HOME</a>
			|
			<a href="/home/tentang">TENTANG</a>
			|
			<a href="/home/kontak">KONTAK</a>
      |
      <a href="/home/login">BERITA</a>
			|
			  <a href="/home/berita">Login</a>
		</nav>
	</header>
	<hr/>
	<br/>
	<br/>

	<!-- bagian judul halaman blog -->
	<h3> @yield('judul_halaman') </h3>


	<!-- bagian konten blog -->
	@yield('konten')


	<br/>
	<br/>
	<hr/>
	<footer>
		<p>&copy; </a>. 2020</p>
	</footer>

</body>
</html>
