<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<!-- PHP字符串 -->
<?php
$x = "Hello World";
echo $x;
echo "<br>";
$x = 'hello world!';
echo $x;
echo "<br>";
?>	
<!-- PHP整数 -->
<?php
$x = 5985;
var_dump($x);
echo "<br>";
$x = -345;//负数
var_dump($x);
echo "<br>";
$x = 0x8C;//十六进制数
var_dump($x);
echo "<br>";
$x = 047;//八进制数
var_dump($x);
echo "<br>";
?>
<!-- PHP浮点数 -->
<?php
$x = 10.365;
var_dump($x);
echo "<br>";
$x = 2.4e3;
var_dump($x);
echo "<br>";
$x = 8E-5;
var_dump($x);
echo "<br>";
?>
<!-- PHP逻辑 -->
<?php
$x = true;
$y = false;
?>
<!-- PHP数组 -->
<?php
$cars = array("Volve","BMW","SAAB");
var_dump($cars);
?>
<!-- PHP对象 -->
<?php
class Car{
	var $color;
	function Car ($color="green"){
		$this->color=$color;
	}
	function what_color(){
		return $this->color;
	}
}
?>
<!-- PHP NULL值 -->
<?php
echo "<br>";
$x = "Hello world";
$x = null;
var_dump($x);
?>
</body>
</html>