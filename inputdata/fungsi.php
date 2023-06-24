<?php 
include('koneksi.php');
	$nis= $_POST['nis'];
	$nama=$_POST['nama'];
	$jurusan=$_POST['jurusan'];
	$query=mysqli_query($koneksi,"INSERT INTO data_siswa(NIS,NAMA,JURUSAN) VALUES('$nis','$nama','$jurusan')");
	if ($query==true) {
		# code...
		echo "DATA ANDA TERSIMPAN!";
	}else{
		echo "DATA ANDA GAGAL DISIMPAN!";
	}
 ?>