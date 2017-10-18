<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<!-- $GLOBALS
	 $_SERVER
	 $_REQUEST
	 $_POST
	 $_GET
	 $_FILES
	 $_ENV
	 $_COOKIE
	 $_SESSION -->

<?php
$x = 75;
$y = 25;

function addition(){
	$GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}
addition();
echo $z;
echo "<br>";
?>	

<?php
echo $_SERVER["PHP_SELF"];
echo "<br>";
echo $_SERVER["SERVER_NAME"];
echo "<br>";
echo $_SERVER["HTTP_HOST"];
echo "<br>";
echo $_SERVER["HTTP_REFERER"];
echo "<br>";
echo $_SERVER["HTTP_USER_AGENT"];
echo "<br>";
echo $_SERVER["SCRIPT_NAME"];
?>

<form action="<?php echo $_SERVER['PHP_SELF']?>">
	Name:<input type="text" name="fname">
	<input type="submit">
</form>
<?php
$name = $_REQUEST['fname'];
echo $name
?>

<form action="<?php echo $_SERVER['PHP_SELF']?>">
	Name:<input type="text" name="fname2">
	<input type="submit">
</form>

<?php
$name2 = $_POST['fname2'];
echo $name2
?>

<a href="<?php echo $_SERVER['PHP_SELF']?>?subject=PHP&web=W3school.com.cn">测试$GET</a>
<?php
 echo "Study" . $_GET['subject'] . "at" . $_GET['web'];
?>
</body>
</html>