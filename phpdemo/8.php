<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<!-- echo 和 print 之间的差异：
echo - 能够输出一个以上的字符串
print - 只能输出一个字符串，并始终返回 1 -->


<!-- 显示字符串 -->
<?php
echo "<h2>PHP is fun!</h2>";
echo "Hello world<br>";
echo "i'm about to learn PHP!";
echo "this ","string ","was ","made ","with multiple parameters.";
echo "<br>";
?>	
<!-- 显示变量 -->
<?php
$txt1 = "learn PHP";
$txt2 = "W3School.com.cn";
$cars = array("Volvo","BMW","SAAB");

echo $txt1;
echo " Study PHP at $txt2 ";
echo "<br>";
echo "My car is a $cars[0]";
?>

<!-- print显示字符串 -->
<?php
print "<h2>PHP is fun!</h2>";
print "Hello world<br>";
print "i'm about to learn PHP!";
print"<br>";
?>	
<!-- print显示变量 -->
<?php
$txt1 = "learn PHP";
$txt2 = "W3School.com.cn";
$cars = array("Volvo","BMW","SAAB");

print $txt1;
print " Study PHP at $txt2 ";
print "<br>";
print "My car is a {$cars[0]}";
?>


</body>
</html>