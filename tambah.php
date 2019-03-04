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

				<label for="nama">Nama : </label>
				<input type="text" name="nama" id="nrp" required><br>

				<label for="alamat">Alamat : </label>
				<input type="text" name="alamat" id="nama"><br>

				<label for="pendidikan">pendidikan :</label>
				<input type="text" name="pendidikan" id="email"><br>

				<label for="pekerjaan">pekerjaan :</label>
				<input type="text" name="pekerjaan" id="jurusan"><br>

				<label for="jenis">Jenis Kaelamin :</label>
					<input type="radio" name="jenis" value="pria">Pria&nbsp;
					<input type="radio" name="jenis" value="wanita">wanita
					<br>	

					<label for="status">Status :</label>
				<input type="status" name="status" id="email"><br>


				<button type="submit" name="submit">Tambah Data!</button>

	</form>




</body>
</html>