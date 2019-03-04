<?php
	include "koneksi.php";

	$id = $_POST['id'];
	$nim = $_POST['nim'];
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$jenis = $_POST['jenis'];
	$prodi = $_POST['prodi'];
	$sks = $_POST['sks'];
	$agama = $_POST['agama'];
	$alamat = $_POST['alamat'];


	$query = "UPDATE `mahasiswa` SET `nim`='$nim', `nama`='$nama', `email`='$email', `jenis`='$jenis', `prodi`='$prodi', `sks`='$sks', `agama`='$agama', `alamat`='$alamat' WHERE `id`='$id'";
	$hasil = mysqli_query($koneksi,$query);

	if (!$hasil) 
		die("Pengubahan Gagal!!");
	
	include('tampil.php');
?>