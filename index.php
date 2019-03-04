<?php 
require 'functions.php';
$mahasiswa = query("SELECT * FROM data_aaa");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>

<a href="tambah.php">Tambah data data</a>
<br><br>

<table border="1" cellpadding="10" cellspacing="0">

	<tr>
		<th>No.</th>
		<th>Nama</th>
		<th>alamat</th>
		<th>pendidikan</th>
		<th>pekerjaan</th>
		<th>jenis</th>
		<th>Status</th>
		<th>hapus</th>
	</tr>

	<?php $i = 1; ?>
	<?php foreach( $mahasiswa as $row ) : ?>
	<tr>
		<td><?= $i; ?></td>
		<td><a href="ubah.php?id=<?= $row["id"]; ?>"><?= $row["nama"]; ?></a></td>
		<td><?= $row["alamat"]; ?></td>
		<td><?= $row["pendidikan"]; ?></td>
		<td><?= $row["pekerjaan"]; ?></td>
		<td><?= $row["jenis_kelamin"]; ?></td>
		<td><?= $row["statusz"]; ?></td>
		<td><a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?');">hapus</a></td>
	</tr>
	<?php $i++; ?>
	<?php endforeach; ?>


	
	
</table>

</body>
</html>