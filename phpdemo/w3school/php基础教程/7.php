<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<!-- 通常，当函数完成/执行后，会删除所有变量。不过，有时我需要不删除某个局部变量 -->
<?php
function myTest(){
	static $x = 0;
	echo $x;
	$x++;
}
myTest();
myTest();
myTest();
?>
	
</body>
</html>