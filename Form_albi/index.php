<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <table border="0"cellspacing="0"cellpadding="10">
	<tr>
		<td><label for="username">username</label></td>
		<td>:</td>
		<td><input type="text" id="username"></td>
	</tr>
	<tr>
		<td><label for="password">password</label></td>
		<td>:</td>
		<td><input type="password" id="password"></td>
	</tr>
	<tr>
		<td><label for="pria"for="wanita">jenis kelamin</label>
		<td>:</td>
		<td><input type="radio" id="pria" name="jeniskelamin"><label for="pria">pria</label>
			<input type="radio" id="wanita" name="jeniskelamin"><label for="wanita">wanita</label> </td>
	<tr>
		<td><label for="menyanyi"for="olahraga"for="ngoding">hobi</label></td>
		<td>:</td>
		<td><input type="checkbox" id="menyanyi"><label for="menyanyi">menyanyi</label>
			<input type="checkbox" id="olahraga"><label for="olahraga">olahraga</label>
			<input type="checkbox" id="ngoding"><label for="ngoding">ngoding</label>
            <input type="checkbox" id="ngoding"><label for="ngoding">dan lain-lain</label>
	</tr>
	<tr>
		<td><label for="textarea">catatan : </label></td>
		<td>:</td>
		<td><textarea id="textarea" cols="22" rows="5"></textarea></td>
	</tr>
	<tr>
		<td><label>alamat</label></td>
		<td>:</td>
		<td>
			<select>
				<option>bandung</option>
				<option>jakarta</option>
				<option>bekasi</option>
			</select>
		</td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td><button type="submit">kirim</button>
			<button type="reset">reset</button></td>
	</tr>

</table>
</body>
</html>