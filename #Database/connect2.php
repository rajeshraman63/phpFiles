<!DOCTYPE html>
<html>
<head>
	<title>Object Oriented</title>
</head>
<body>

<?php

$servername = "localhost";
$username = "root";
$password = "database"; // change the password for Connectionf Failed

$connect = new mysqli($servername,$username,$password);

if($connect->connect_error)
{
	echo ("Connection Failed : " . $connect->connect_error);
}
else
{
	echo "Database Connected";
}


?>

</body>
</html>