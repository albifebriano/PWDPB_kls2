<?php 
	include "koneksi.php";
	
	$editdata=mysqli_query($koneksi,"UPDATE datasiswa SET jurusan='$_POST[jurusan]',nama='$_POST[nama]' WHERE nis='$_POST[nis]'");
	if ($editdata) {
		# code...
		header('location:tampildata.php');
	}else{
		echo "gagal edit!";
	}
 ?>