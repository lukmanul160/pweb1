<?php 
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "pweb");


function query($query) {
	global $conn;
	// var_dump($query);die;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}
	return $rows;
}


function tambah($data) {
	global $conn;

	$nama = htmlspecialchars($data["nama"]);
	$alamat = htmlspecialchars($data["alamat"]);
	$pendidikan = htmlspecialchars($data["pendidikan"]);
	$pekerjaan = htmlspecialchars($data["pekerjaan"]);
	$jenis_kelamin = htmlspecialchars($data["jenis"]);
	$status = htmlspecialchars($data["status"]);


	$query = "INSERT INTO data_aaa
				VALUES
			  ('', '$nama', '$alamat', '$pendidikan', '$pekerjaan', '$jenis_kelamin', '$status' )
			";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}


function hapus($id) {
	global $conn;
	mysqli_query($conn, "DELETE FROM data_aaa WHERE id = $id");
	return mysqli_affected_rows($conn);
}


function ubah($data) {
	global $conn;
	
$id = $data["id"];

	$nama = htmlspecialchars($data["nama"]);
	$alamat = htmlspecialchars($data["alamat"]);
	$pendidikan = htmlspecialchars($data["pendidikan"]);
	$pekerjaan = htmlspecialchars($data["pekerjaan"]);
	$pekerjaan = htmlspecialchars($data["pekerjaan"]);
	$jenis_kelamin = htmlspecialchars($data["jenis"]);
	$status = htmlspecialchars($data["status"]);

	$query = "UPDATE data_aaa SET
				nama = '$nama',
				alamat = '$alamat',
				pendidikan = '$pendidikan',
				pekerjaan = '$pekerjaan',
				jenis_kelamin = '$jenis_kelamin',
				statusz = '$status'

			  WHERE id = $id
			";
	//var_dump($query); die;
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);	
}













?>