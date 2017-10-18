<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php
$x = 5;

function myTest(){
	$y = 10;
	echo "<p>测试函数内部的变量;</p>";
	echo "变量x是：$x";
	echo "<br>";
	echo "变量y是：$y";
}

myTest();

echo "<p>测试函数之外的变量;</p>";
echo "变量x是：$x";
echo "<br>";
echo "变量y是：$y";

?>
	
</body>
</html>