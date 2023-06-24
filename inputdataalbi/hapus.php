<?php 
		include 'koneksi.php';
		$hapus=mysqli_query($koneksi,"DELETE FROM datasiswa WHERE nis='$_GET[nis]'");
		if ($hapus) {
			# code...
			echo "Data Berhasil Dihapus!<br><a href='tampildata.php'>lihat hasil</a>";
		}else{
			echo "Data Gagal Dihapus!";
		}
 ?>