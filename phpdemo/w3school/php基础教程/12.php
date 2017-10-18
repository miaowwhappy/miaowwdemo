<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php
$x = 10;
$y = 6;
echo ($x + $y);
echo "<br>";
echo ($x - $y);
echo "<br>";
echo ($x * $y);
echo "<br>";
echo ($x / $y);
echo "<br>";
echo ($x % $y);
echo "<br>";
?>

<?php
$x = 10;
echo $x;
echo "<br>";

$y = 20;
$y += 100;
echo $y;
echo "<br>";

$z = 50;
$z -= 25;
echo $z;
echo "<br>";

$i = 5;
$i *= 6;
echo $i;
echo "<br>";

$j = 10;
$j /= 5;
echo $j;
echo "<br>";

$k = 15;
$k %= 4;
echo $k;
echo "<br>";
?>

<?php
$a = "Hello";
$b = $a . "World";
echo $b;

echo "<br>";
$x = "Hello";
$x .= "World";
echo $x;
echo "<br>";
?>

<?php
$x = 10;
echo ++$x;
echo "<br>";

$y = 10;
echo $y++;
echo "<br>";

$z = 5;
echo --$z;
echo "<br>";

$i = 5;
echo $i--;
echo "<br>";
?>

<?php
$x = 100;
$y = "100";

var_dump($x == $y);
echo "<br>";
var_dump($x === $y);
echo "<br>";
var_dump($x != $y);
echo "<br>";
var_dump($x !== $y);
echo "<br>";

$a = 50;
$b = 90;

var_dump($a > $b);
echo "<br>";
var_dump($a < $b);
?>

<?php
$x = array("a" => "red","b" => "green");
$y = array("c" => "blue", "d" => "yellow");
$z = $x + $y;
var_dump($z);
var_dump($x==$y);
var_dump($x===$y);
var_dump($x != $y);
var_dump($x <> $y);
var_dump($x !== $y);
?>

</body>
</html>