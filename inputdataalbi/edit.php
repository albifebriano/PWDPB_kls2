<?php 
include 'koneksi.php';
	$nis=$_GET['nis'];
	$edit=mysqli_query($koneksi,"SELECT * FROM datasiswa WHERE nis='$nis'");
	$kolom=mysqli_fetch_array($edit);

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>form edit</title>
 	<style type="text/css">
 		body{
 			background-image: url("smk2.5.jpeg");
 			background-repeat: no-repeat;
 			background-size: cover;
 		}
 		table{
 			background-color: white;
 			border: solid;
 		}
 	button a{
 			text-decoration: none;
 			color: black;
 	}
 	</style>
 </head>
 <body>
 	<center>
 	<form method="post">
 	<table border="0" cellspacing="0" cellpadding="5">
 		<h4>Edit Data Siswa!</h4>
 		<tr>
 			<td>NIS:</td>
 			<td><input type="text" name="nis" value="<?php echo $kolom['nis'] ?>"></td>
 		</tr>
 		<tr>
 			<td>NAMA:</td>
 			<td><input type="text" name="nama" value="<?php echo $kolom['nama'] ?>"></td>
 		</tr>
 		<tr>
 			<td>JURUSAN:</td>
 			<td><input type="text" name="jurusan" value="<?php echo $kolom['jurusan'] ?>"></td>
 		</tr>
 		<tr>
 			<td><input type="submit" name="kirim" value="kirim"></td>
 			<td><button><a href="tampildata.php">Batal</a></button></td>
 		</tr>
 		<tr>
 			<?php 
 			if (isset($_POST['kirim'])) {
 				# code...
 			
	include "koneksi.php";
	
	$editdata=mysqli_query($koneksi,"UPDATE datasiswa SET jurusan='$_POST[jurusan]',nama='$_POST[nama]' WHERE nis='$_POST[nis]'");
	if ($editdata) {
		# code...
		echo "<td>Data anda berhasil di edit!<br><a href='tampildata.php'>Lihat hasil</a></td>";
		
	}else{
		echo "Data anda gagal di edit!";
	}
}
 ?>
 		</tr>
 	</table>
 	</center>
 
 </body>
 </html>