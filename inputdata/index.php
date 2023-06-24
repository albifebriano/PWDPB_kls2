<!DOCTYPE html>
<html>
<head>
	<title>input data php</title>
	<style type="text/css">
		marquee{
			color: white;
			background-color: black;
			height: 50px;
			font-size: 40px;

		}
		body{
			background-color: skyblue;
		}
		form{
			background-color: white;
			width: 40%;
			padding: 10px;
			border-radius: 10px;
			border: 5px ;lightgreen;
			height: 1000px;
		}
		button{
			background-color: green;
			font-size: +5;
			color: white;
			cursor: pointer;
		}
		button:hover{
				background-color: yellow;
				color: black;
		}
		.gambar{
			position: absolute;
			margin-left: 310px;
			margin-top: 10px;
		}
		.gambar img{
			width: 100px;
		}
	</style>
		
	</style>
</head>
<body>
	<marquee>DAFTARKAN DIRI ANDA</marquee>
	
		<form action="fungsi.php" method="post">
			<h3>MASUKAN DATA DIRI ANDA</h3>
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
						<option value="ti">TEKNIK INFORMATIKA</option>
						<option value="to">TEKNIK OTOMOTIF</option>
						<option value="tl">TEKNIK LISTRIK</option>
						<option value="el">TEKNIK ELEKTRONIKA</option>
						<option value="tf">TEKNIK FURNITUR</option>
				</select></td>
			</tr>
			<tr>
				<td><button>SIMPAN DATA</button></td>
			</tr>
		</table>
	</form>


</body>
</html>