<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php
function writeMsg(){
	echo "Hello world";
}

writeMsg();
?>

<?php
function familyName($fname){
	echo "$fname Zhang.<br>";
}

familyName("Li");
familyName("Hong");
familyName("Tao");
familyName("Xiao Mei");
familyName("Jian");
?>	

<?php
function familyName2($fname,$year){
	echo "$fname Zhang Born in $year <br>";
};

familyName2("li","1975");
familyName2("Hong","1978");
familyName2("Tao","1983");
?>
</body>
</html>