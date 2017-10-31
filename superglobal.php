<!DOCTYPE html>
<html>
<head>
	<title>Super Global</title>
</head>
<body>

<?php
	
	# global Variabble

	$x = 8;
	$y = 9;

	echo "<br><hr> GLOBALS <hr><br>";

	function multiply()
	{
		$GLOBALS['z'] = $GLOBALS['x']*$GLOBALS['y'];
	}

	multiply();

	echo $z;

	echo "<br><hr> _SERVER <hr><br>";

	echo "File Location : " .$_SERVER['PHP_SELF']. "<br>";

	echo "Server name : " .$_SERVER['SERVER_NAME']."<br>";
	echo "HTTP_HOST : " .$_SERVER['HTTP_HOST']."<br>";
	echo "HTTP_REFERER : " .$_SERVER['HTTP_REFERER']."<br>";
	echo "HTTP_USER_AGENT : " .$_SERVER['HTTP_USER_AGENT']."<br>";
	echo "SCRIPT_NAME : " .$_SERVER['SCRIPT_NAME']."<br>";



?>


</body>
</html>