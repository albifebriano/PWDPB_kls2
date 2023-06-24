<!DOCTYPE html>
<html>
<head>
	<title>input data php</title>
	<style type="text/css">
		marquee{
			color: yellow;
			background-color: dimgrey;
			height: 50px;
			font-size: 40px;

		}
		body{
			background-image: url("smk2.2.jpg");

		}
		form{
			background-color: white;
			width: 50%;
			padding: 10px;
			border-radius: 10px;
			border: 5px solid orange;
			margin-top: 180px;
		}
		.input{
			background-color: green;
			font-size: +5;
			color: white;
			cursor: pointer;
		}
		.input:hover{
				background-color: yellow;
				color: black;
		}
		.gambar{
			position: absolute;
			margin-left: 340px;
			margin-top: 200px;
		}
		.gambar img{
			width: 100px;
		}
		.baris{
			color: red;
		}
	
	</style>
</head>
<body>
	<marquee>SELAMAT DATANG DI APLIKASI PENGINPUTAN DATA SISWA</marquee>
	
	<div class="gambar"><p>Penulis: M. Albi febriano</p><img src="albi-dibengkel.jpg" width="100px";></div>
	
	<center>

		<form  method="post">

			<h3>Masukkan Data Siswa</h3>
		<table cellpadding="5">
			
			<tr>
				<td>NIS: </td>
				<td><input type="text" name="nis"></td>
			</tr>
			<tr>
				<td>NAMA: </td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>JURUSAN: </td>
				<td><select name="jurusan">
						<option value="tekhnik informatika">Teknik Informatika</option>
						<option value="tekhnik otomotif">Teknik Otomotif</option>
						<option value="tekhnik listrik">Teknik Listrik</option>
						<option value="tekhnik elektronika">Teknik Elektronika</option>
						<option value="tekhnik sipil">Teknik Sipil</option>
				</select></td>
			</tr>
			<tr>
				<td><input type="submit" name="kirim" value="kirim" class="input"></td>
				<td><button type="reset">reset</button></td>
			</tr>
			<tr>
				<td><a href="tampildata.php">lihat daftar siswa</a></td>
			</tr>
			<tr>
				<td>
					<button name="kembali"><a href="login.php">log out</button></a>
				</td>
			</tr>

		</table>
		<?php 
include 'koneksi.php';
if(isset($_POST['kirim'])){
	$nis= $_POST['nis'];
	$nama=$_POST['nama'];
	$jurusan=$_POST['jurusan'];
	$query=mysqli_query($koneksi,"INSERT INTO datasiswa(nis,nama,jurusan) VALUES('$nis','$nama','$jurusan')");
	if(strlen($nis)!==4){
		echo "<p class='baris'>nomor nis tidak boleh melebihi 4 angka!</p>";
	}else{
	if ($query==true) {
		# code...
		
		echo "<center>Data Berhasil Tersimpan<br><a href='tampildata.php'>lihat hasil!</a></center>";
	}else{
		echo "Data Gagal Tersimpan!";
	}
}
}
 ?>
	</form>
	</center>


</body>
</html>