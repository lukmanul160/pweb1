<?php
require 'functions.php';

// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
	
	// cek apakah data berhasil di tambahkan atau tidak
	if( tambah($_POST) > 0 ) {
		echo "
			<script>
				alert('data berhasil ditambahkan!');
				document.location.href = 'index.php';
			</script>
		";
	} else {
		echo "
			<script>
				alert('data gagal ditambahkan!');
				document.location.href = 'index.php';
			</script>
		";
	}


}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tambah data mahasiswa</title>
</head>
<body>
	<h1>Tambah data mahasiswa</h1>

	<form action="" method="post">

				<label for="nrp">NRP : </label>
				<input type="text" name="nrp" id="nrp" required><br>

				<label for="nama">Nama : </label>
				<input type="text" name="nama" id="nama"><br>

				<label for="email">Email :</label>
				<input type="text" name="email" id="email"><br>

				<label for="jurusan">Jurusan :</label>
				<input type="text" name="jurusan" id="jurusan"><br>

				<label for="gambar">Gambar :</label>
				<input type="file" name="gambar" id="gambar"><br>

				<button type="submit" name="submit">Tambah Data!</button>

	</form>




</body>
</html>