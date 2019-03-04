<table border="1">
	<thead>
		<th>Nim</th>
		<th>Nama</th>
		<th>Email</th>
		<th>Jenis Kelamin</th>
		<th>Prodi</th>
		<th>SKS</th>
		<th>Agama</th>
		<th>Alamat</th>
	</thead>
	<tbody>
		<?php
			include "koneksi.php";

			$query = "SELECT * FROM mahasiswa";
			$hasil = mysqli_query($koneksi,$query);

			/* Bisa juga seperti berikut :
			$query = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
			*/

			if (!$hasil) 
				die("Permintaan Gagal!!");
			
			while ($tbl_mahasiswa=mysqli_fetch_array($hasil)){
			?>
			<tr>
				<td>
					<a href="edit.php?id=<?php echo $tbl_mahasiswa['id']; ?>">

					<?php 
						echo $tbl_mahasiswa['nim']; 
						?>	</a>
				</td>
				<td>
					<?php 
						echo $tbl_mahasiswa['nama'];
						?>
				</td>
				<td>
					<?php 
						echo $tbl_mahasiswa['email'];
						?>
				</td>
				<td>
					<?php
						echo $tbl_mahasiswa['jenis'];
						?>
				</td>
				<td>
					<?php 
						echo $tbl_mahasiswa['prodi'];
						?>
				</td>
				<td>
					<?php
						echo $tbl_mahasiswa['sks'];
						?>
				</td>
				<td>
					<?php
						echo $tbl_mahasiswa['agama'];
						?>
				</td>
				<td>
					<?php
						echo $tbl_mahasiswa['alamat'];
						?>
				</td>
				<td>
					<a href="hapus.php?id=<?php echo $tbl_mahasiswa['id']; ?>"> Hapus </a>
				</td>
			</tr>
			<?php
			}
		?>
	</tbody>
</table>				