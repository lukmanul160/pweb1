<?php
	
	include "koneksi.php";

	$nim = $_POST['nim'];
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$jenis = $_POST['jenis'];
	$prodi = $_POST['prodi'];
	$sks = $_POST['sks'];
	$agama = $_POST['agama'];
	$alamat = $_POST['alamat'];

	
	$query = " INSERT INTO `mahasiswa` (`nim`, `nama`, `email`, `jenis`, `prodi`, `sks`, `agama`, `alamat`) 
					VALUES ('$nim','$nama','$email', '$jenis', '$prodi', '$sks', '$agama', '$alamat' )";

	$hasil = mysqli_query($koneksi,$query);

	if (!$hasil) 
		die("Penyimpanan Gagal!");
	
	header("Location: tampil.php");
	

	/* Diatas bisa diganti seperti ini : 
	$insert = mysqli_query($koneksi, "INSERT INTO mahasiswa(`nim`, `nama`, `email`, `jenis`, `prodi`, `sks`, `agama`, `alamat`)
	               VALUES('$nim','$nama','$email', '$jenis', '$prodi', '$sks', '$agama', '$alamat')") 
	               or die(mysqli_error());

	     		   header("Location: tampil.php");

	*/


	
?>