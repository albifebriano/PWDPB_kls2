<?php 
include 'koneksi.php';
	$nis= $_POST['nis'];
	$nama=$_POST['nama'];
	$jurusan=$_POST['jurusan'];
	$query=mysqli_query($koneksi,"INSERT INTO datasiswa(nis,nama,jurusan) VALUES('$nis','$nama','$jurusan')");
	if ($query==true) {
		# code...
		echo "<center>selamat data anda berhasil kami simpan<br><a href='tampildata.php'>lihat hasil!</a></center>";
	}else{
		echo "data anda gagal kami simpan!";
	}
 ?>
 