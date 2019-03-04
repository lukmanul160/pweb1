<?php
	include "koneksi.php";

	$id = $_GET['id'];

	$query = "SELECT * FROM mahasiswa WHERE id = '$id'";
	$hasil = mysqli_query($koneksi,$query);

	$tbl_mahasiswa=mysqli_fetch_array($hasil);
	$nim=$tbl_mahasiswa['nim'];
	$nama=$tbl_mahasiswa['nama'];
	$email=$tbl_mahasiswa['email'];
	$jenis=$tbl_mahasiswa['jenis'];
	$prodi=$tbl_mahasiswa['prodi'];
	$sks=$tbl_mahasiswa['sks'];
	$agama=$tbl_mahasiswa['agama'];
	$alamat=$tbl_mahasiswa['alamat'];

?>

<html>
<head>
	<title>EDIT FORM</title>
</head>
<body>
	<form action="proses_edit.php" method="POST">
		<input type="hidden" name="id" value="<?php echo $id; ?>">
		<table>
			<tr>
				<td>NIM : </td>
				<td><input type="text" name="nim" value="<?php echo $nim; ?>"></td>
			</tr>
			<tr>
				<td> Nama : </td>
				<td> <input type="text " name="nama" value="<?php echo $nama; ?>"></td>
			</tr>
			<tr>
				<td> Email : </td>
				<td><input type="text" name="email" value="<?php echo $email; ?>"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin : </td>
				<td>
					<input type="radio" name="jenis" value="pria" 
						<?php 
							if (strtolower($jenis_kelamin)=='pria') { ?>
								checked="true" <?php } ?> > Pria &nbsp;
					<input type="radio" name="jenis" value="wanita" 
						<?php 
							if (strtolower($jenis_kelamin)=='wanita') { ?>
								checked="true" <?php } ?> > Wanita
				</td>
			</tr>
			<tr>
				<td> Prodi : </td>
				<td>
					<select name="prodi" >
						<option <?php if (strtolower($prodi) == 'Sistem Informasi') { ?> selected="true" <?php } ?> >Sistem Informasi
						<option <?php if (strtolower($prodi) == 'Teknik Informatika') { ?> selected="true" <?php } ?> >Teknik Informatika
						<option <?php if (strtolower($prodi) == 'Teknik Komputer') { ?> selected="true" <?php } ?> >Teknik Komputer
					</select>
				</td>
			</tr>
			<tr>
				<td> SKS : </td>
				<td> <input type="text " name="sks" value="<?php echo $sks; ?>"></td>
			</tr>
			<tr>
				<td> Agama : </td>
				<td>
					<select name="agama" >
						<option <?php if (strtolower($agama) == 'Islam') { ?> selected="true" <?php } ?> > Islam
						<option <?php if (strtolower($agama) == 'Buddha') { ?> selected="true" <?php } ?> > Buddha
						<option <?php if (strtolower($agama) == 'Kristen') { ?> selected="true" <?php } ?> > Kristen
						<option <?php if (strtolower($agama) == 'Hindu') { ?> selected="true" <?php } ?> > Hindu
						<option <?php if (strtolower($agama) == 'Katolik') { ?> selected="true" <?php } ?> > Katolik
					</select>
				</td>
			</tr>
			<tr>
				<td>Alamat : </td>
				<td><textarea name="alamat" cols="35" rows="3" > <?php echo $alamat; ?></textarea></td>
			</tr>
			<tr>
            	<td colspan="2" align="center">
                <input type="submit" value="SUBMIT">
                <input type="reset" value="CANCEL">
           		 </td>
       		 </tr>
		</table>
	</form>
</body>
</html>