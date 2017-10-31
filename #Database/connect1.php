<!DOCTYPE html>
<html>
<head>
	<title>Procedural</title>
</head>
<body>
 
<?php

$servername = "localhost";
$username = "root";
$password = "database"; // change the password for Connectionf Failed

$connect = mysqli_connect($servername,$username,$password);

if(!$connect)
{
	die("Connection Failed : " . mysqli_connect_error());
}
else
{
	echo "Database Connected";
}



?>

</body>
</html>