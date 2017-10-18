<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php
for($x=0;$x<=10;$x++){
	echo "数字是：$x<br>";
}
?>
<?php
$color = array("red","green","blue","yellow");

foreach($color as $value){
	echo "$value<br>";
}
?>
</body>
</html>