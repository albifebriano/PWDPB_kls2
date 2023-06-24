<?php
    include 'koneksi.php';
    $key    =  $_POST['keyword'];
    $field  =   $_POST['field'];
    $query  =  mysqli_query($koneksi,"SELECT * from datasiswa where $field like '%$key%'");
    
?>
    <!DOCTYPE html>
 <html>
 <head>
 	<title>data data siswa yang terdaftar!</title>
 	<style type="text/css">
 		body{
 			background-image: url("A6.png");
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
		color: black;
		cursor: pointer;
	}
	.a:hover{
		font-size: 20pt;
	}
	th{
		background-color: skyblue;
	}
	.nav{
		margin-top:  -20px;
		margin-right: -10px;
		margin-left: -10px;
		
		background-image: url("av.jpg");
		height: 70px;
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
		color: yellow;
		font-size: 12pt;
		font-family: sans-serif;
	}
	.dif{
		position: absolute;
		margin-left: 950px;
		margin-top: 140px;
	}
	.as{
		color: black;
	}
	</style>
</head>

 <body>
 <audio hidden="controls" controls="" autoplay="autoplay" preload="preload" loop="loop">
		<source src="iphone.mp3" type="audio/mp3">
	</audio>
 	<center>
 		<div class="nav"></div>
 		
<div class="dif">
<img src="ki.gif" width="200px">
</div>
 	

<div class="as">Jumlah Data Yang ditemukan  dengan pencarian <b><?php echo $key;?></b> adalah  
    <?php echo mysqli_num_rows($query);?> data</div>
 	<a href="index.php" class="a">Tambah Data!</a>
 	 <a href="cetak.php" target="_blank">cetak</a>
 	<table border="2" cellpadding="5" cellspacing="0">
 		<tr>
 			<th>NIS:</th>
 			<th>NAMA:</th>
 			<th>JURUSAN:</th>
 			<th colspan="2">operasi</th>
 		</tr>
 	<?php 
	while ($array=mysqli_fetch_array($query)) {
		# code...
		echo "<tr><td>$array[nis]</td>
		<td>$array[nama]</td>
		<td>$array[jurusan]</td>
		<td><a href='edit.php?nis=$array[nis]' class='b'>edit</a></td>
		<td><a href='hapus.php?nis=$array[nis]' class='b'>hapus</a></td></tr>";
	}
 	 ?>
 	 </center>

 
 </body>
 </html>