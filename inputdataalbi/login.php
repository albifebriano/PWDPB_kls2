<!DOCTYPE html>
<html lang="en">
<head>
	   <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
	<style type="text/css">
		form{
			background-color: #FFFF00;
			width: 30%;
			border: 10px solid black;
			margin-top: 50px;
		}
		body{
			background-color: #008000;
		}
		span{
			font-size: 20pt;
			color: black;
		}
		button{
			background-color: #87CEFA;
			color: black;
		}
		button:hover{
			background-color: #87CEFA;
			color: black;
		}
		a{
			text-decoration: none;
			color: white;
		}
	</style>
	 </head>
<body>
<center>
	<form method="post">
		<span>Login Admin:</span>
	<table cellpadding="10">
		
		<tr>
			<td>Username:</td>
			<td><input type="text" name="user" placeholder="masukkan username"></td>
		</tr>
		<tr>
			<td>password:</td>
			<td><input type="password" name="pass" placeholder="masukkan password"></td>
		</tr>
		<tr>
			<td>
				<button name="masuk">Sign in</button>
			</td>
			<td>
				<input type="reset" name="hapus">
			</td>
		</tr>
	</table>
	</form>
	<?php 
		
		if (isset($_POST['masuk'])) {
			# code...
			include "koneksi.php";
			$user=$_POST['user'];
			$pass=$_POST['pass'];
			$query=mysqli_query($koneksi,"SELECT * FROM admin WHERE username='".$_POST['user']."'AND password='".$_POST['pass']."'");
			$row=mysqli_num_rows($query);
			if ($row==true) {
				# code...
				header('location:index.php');
			}else{
				echo "username atau password salah!";
			}
		}
	 ?>
</center>	

</body>
</html>