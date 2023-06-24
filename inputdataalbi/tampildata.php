<!DOCTYPE html>
 <html>
 <head>
 	<title>data data siswa yang terdaftar!</title>
 	<style type="text/css">
 		body{
 			background-image: url("smk2.2.jpg");
 			background-repeat: no-repeat;
 			background-size: cover;

 		}
 		h2{
 			color: yellow;
 		}
		table{
			background-color: white;	
		}
	.b{
		text-decoration: none;
		cursor: pointer;
		color: blue;
		font-size: 18pt;
		background-clip: all;

	}
	.b:hover{
		color: green;
		background-clip: all;
	}
	.a{
		text-decoration: none;
		color: white;
		cursor: pointer;
	}
	.a:hover{
		font-size: 20pt;
	}
	th{
		background-color: green;
	}
	.nav{
		margin-top:  -20px;
		margin-right: -10px;
		margin-left: -10px;
		
		background-image: url("hider.jpg");
		height: 90px;
	}
	.bt{
		float: right;
		margin-top: -40px;

	}
	.bt button{
		background-color: green;
	}
	.ama{
		float: left;
		margin-top: -40px;
		color: whitesmoke;
		font-size: 12pt;
		font-family: bold;
	}
	.dif{
		position: absolute;
		margin-left: 950px;
		margin-top: 140px;
	}
	</style>
</head>

 <body>
 	<center>
 		<div class="nav"></div>
 		<div class="ama">M. ALBI FEBRIANO</div>
 		<div class="bt"><form action="pencarian.php" method="post">
    <input type="text" name="keyword" placeholder="masukan kata kunci">
    <select name="field">
        <option value="nis">Nis</option>
        <option value="nama">Nama</option>
    </select>
    <button type="submit">Cari</button>
</form></div>
 	<h2>DAFTAR DATA SISWA</h2>
 	<h2>SMK NEGERI 2 LANGSA</h2>
 	<a href="index.php" class="a">[Tambahkan Data Siswa]</a>
 	<table border="2" cellpadding="5" cellspacing="0">
 		<tr>
 			<th>NIS</th>
 			<th>NAMA</th>
 			<th>JURUSAN</th>
 			<th colspan="2">Edit/Hapus</th>
 		</tr>
 	<?php 
 		include "koneksi.php";
 		
	$select=mysqli_query($koneksi,"SELECT * FROM datasiswa");
	while ($array=mysqli_fetch_array($select)) {
		# code...
		echo "<tr><td>$array[nis]</td>
		<td>$array[nama]</td>
		<td>$array[jurusan]</td>
		<td><a href='edit.php?nis=$array[nis]' class='b'>edit</a></td>
		<td><a href='hapus.php?nis=$array[nis]' class='b' onClick='alert('Tombol diklik!')'>hapus</a></td></tr>";
	}
 	 ?><br>
 	 <a href="cetak.php" target="_blank">cetak</a>
 	 </center>

 
 </body>
 </html>