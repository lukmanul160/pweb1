<?php
	include "koneksi.php";

	$id=$_GET['id'];

	$query = "DELETE FROM `mahasiswa` WHERE `id`=$id";
	$hasil = mysqli_query($koneksi,$query);

	if (!$hasil) 
		die("Penghapusan Gagal!!");

	include("tampil.php");
	

	

?>