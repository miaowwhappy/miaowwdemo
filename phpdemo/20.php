<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<!-- 索引数组 -->
<?php
$cars = array("Volvo","BMW","SAAB");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2].".";
echo "<br>";
echo count($cars);
echo "<br>";

$arrlength = count($cars);
for($x=0;$x<$arrlength;$x++){
	echo $cars[$x];
	echo "<br>";
}
?>
<!-- 关联数组 -->
<?php
$age = array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
echo "Peter is " . $age["Peter"] . " years old ";
echo "<br>";
foreach($age as $x=>$x_value){
	echo "Key=".$x.",Value=".$x_value;
	echo "<br>";
}
?>
</body>
</html>