<!DOCTYPE html>
<html>
<head>
	<title>FORM INPUT DATA</title>
</head>
<body>
	
	<form action="simpan.php" method="POST">
		<table>
			<tr>
				<td>NIM : </td>
				<td><input type="text" name="nim"></td>
			</tr>
			<tr>
				<td>Nama : </td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Email : </td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin : </td>
				<td><input type="radio" name="jenis" value="pria">Pria&nbsp;
					<input type="radio" name="jenis" value="wanita">Wanita</td>
			</tr>
			<tr>
				<td>Prodi </td>
				<td><select name="prodi">
					<option value="">- PILIH -
						<option>Sistem Informasi
						<option>Teknik Informatika
						<option>Teknik Komputer
					
				</select></td>
			</tr>
			<tr>
				<td>Jumlah SKS :</td>
				<td><input type="text" name="sks"></td>
			</tr>
			<tr>
				<td>Agama : </td>
				<td><select name="agama">
					<option value=""> - PILIH -
						<option> Islam	
						<option> Buddha
						<option> Kristen
						<option> Hindu
						<option> Katolik
					
				</select></td>
			</tr>
			<tr>
				<td>Alamat : </td>
				<td><textarea name="alamat" cols="35" rows="3"></textarea></td>
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