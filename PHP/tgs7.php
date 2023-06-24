<!DOCTYPE html>
<html>
<head>
<title>Percabangan if-elseif dan operator logika</title>
</head>
<body>
<?php
$a=10;
$b=11;
$c=12;
$d=12;
if($a<=$b&&$c==$d){
echo"a kurang dari b dan c sama dengan d";
}elseif($a>=$b&&$c==$d){
echo"a lebih dari b dan c sama dengan d";
}elseif($a==$b&&$c>=$d){
echo"a sama dengan b dan c lebih dari sama dengan d";
}else{
echo"definisikan sendiri hasilnya!";
}
?>
</body>
</html>