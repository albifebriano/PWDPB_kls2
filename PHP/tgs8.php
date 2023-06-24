
<!DOCTYPE html>
<html>
<head>
<title>Seleksi switch</title>
</head>
<body>
<?php
$i=0;
if($i==0){
echo" i setara dengan o";
}
elseif($i==1){
echo"i setara dengan 1";
}
elseif($i==2){
echo"i setara dengan 2";
}
// Ekuivalen dengan pendekatan switch
echo"<br>";
switch($i){
case 0;
echo" i setara dengan o";
break;
case 1;
echo" i setara dengan 1";
break;
case 3;
echo" i setara dengan 2";
break;
}
?>
</body>
</html>