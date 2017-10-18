<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php
$t=date("H");

if($t<"20"){
	echo "Have a good day!";
}
?>
<?php
$t=date("H");

if($t<"20"){
	echo "Have a good day!";
}else{
	echo "Have a good night";
}
?>

<?php
$t=date("H");

if($t<"10"){
	echo "Have a good morning!";
}else if($t<"20"){
	echo "Have a good day!";
}else{
	echo "Have a good night!";
}
?>


	
</body>
</html>