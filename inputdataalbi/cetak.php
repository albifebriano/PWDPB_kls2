<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center>
		<h1>DAFTAR DATA SISWA</h1>
	
	<table border="1" cellpadding="6" cellspacing="0">
 		<tr>
 			<th>NIS:</th>
 			<th>NAMA:</th>
 			<th>JURUSAN:</th>
 		
 		</tr>
 	<?php 
 		include "koneksi.php";
 		
	$select=mysqli_query($koneksi,"SELECT * FROM datasiswa");
	while ($array=mysqli_fetch_array($select)) {
		# code...
		echo "<tr><td>$array[nis]</td>
		<td>$array[nama]</td>
		<td>$array[jurusan]</td></tr>";
		
	}
 	 ?>
 	 <script type="text/javascript">
 	 	window.print()
 	 </script>
 	 </center>


</body>
</html>