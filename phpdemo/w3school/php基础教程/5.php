<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<!-- global 关键词用于访问函数内的全局变量。要做到这一点，请在（函数内部）变量前面使用 global 关键词 -->
<?php
$x = 5;
$y = 10;

function myTest(){
	global $x,$y;
	$y = $x + $y;
}

myTest();
echo $y;

?>
	
</body>
</html>