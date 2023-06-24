<!DOCTYPE html>
<html>
<head>
<title>Perulangan foreach</title>
</head>
<body>
<?php
$biodata=array("nama"=>"abdul munif",
"alamat"=>"malang",
"jabatan"=>"direktur"
);
foreach($biodata as $value){
echo $value."<br>";
}
?>
</body>
</html>