<?php
require 'functions.php';

// ambil data di URL
$id = $_GET["id"];

// query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM data_aaa WHERE id = $id")[0];

// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
	
	// cek apakah data berhasil diubah atau tidak
	if( ubah($_POST) > 0 ) {
		echo "
			<script>
				alert('data berhasil diubah!');
				document.location.href = 'index.php';
			</script>
		";
	} else {
		echo "
			<script>
				alert('data gagal diubah!');
				document.location.href = 'index.php';
			</script>
		";
	}


}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ubah data mahasiswa</title>
</head>
<body>
	<h1>Ubah data mahasiswa</h1>



	<form action="" method="post">

<input type="hidden" name="id" value="<?= $mhs["id"]; ?>">

<label for="nama">Nama : </label>
<input type="text" name="nama" id="nrp" required value="<?= $mhs["nama"]; ?>"><br>

<label for="alamat">Alamat : </label>
<input type="text" name="alamat" id="nama" value="<?= $mhs["alamat"]; ?>">  <br>

<label for="pendidikan">pendidikan :</label>
<input type="text" name="pendidikan" id="email" value="<?= $mhs["pendidikan"]; ?>"><br>

<label for="pekerjaan">pekerjaan :</label>
<input type="text" name="pekerjaan" id="jurusan" value="<?= $mhs["pekerjaan"]; ?>"><br>

					<input type="radio" name="jenis" value="pria" 
						<?php 
							if (strtolower( $mhs["jenis_kelamin"])=='pria') { ?>
								checked="true" <?php } ?> > Pria &nbsp;
					<input type="radio" name="jenis" value="wanita" 
						<?php 
							if (strtolower( $mhs["jenis_kelamin"])=='wanita') { ?>
								checked="true" <?php } ?> > Wanita <br>


<label for="status">Status :</label>
<input type="status" name="status" id="email" value="<?= $mhs["statusz"]; ?>"><br>


<button type="submit" name="submit">Tambah Data!</button>

</form>


</body>
</html>