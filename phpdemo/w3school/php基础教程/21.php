<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php
$cars = array("Volve","BMW","SAAB");
sort($cars);
?>
<?php
$numbers = array(3,5,1,22,11);
sort($numbers); 
?>
<!-- 根据值对数组进行升序排序 -->
<?php
$age = array("Bill"=>"35","Steve"=>"37","Peter"=>"43");
asort($age);
?>
<!-- 根据键对数组进行升序排序 -->
<?php
$age = array("Bill"=>"35","Steve"=>"37","Peter"=>"43");
ksort($age);
?>
<!-- 根据值对数组进行降序排序 -->
<?php
$age = array("Bill"=>"35","Steve"=>"37","Peter"=>"43");
arsort($age);
?>
<!-- 根据键对数组进行降序排序 -->
<?php
$age = array("Bill"=>"35","Steve"=>"37","Peter"=>"43");
krsort($age);
?>
</body>
</html>