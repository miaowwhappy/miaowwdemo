<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php
function setHeight($minheight=50){
	echo "The height is: $minheight<br>";
}
setHeight(350);
setHeight();
setHeight(135);
setHeight(80);
?>

<?php
function sum($x,$y){
	$z = $x + $y;
	return $z;
}
echo "5 + 10 =".sum(5,10)."<br>";
echo "7 + 13 =".sum(7,13)."<br>";
echo "2 + 4 = ".sum(2,4);
?>
</body>
</html>