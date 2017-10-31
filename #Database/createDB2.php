<!DOCTYPE html>
<html>
<head>
	<title>Procedural Create Db</title>
</head>
<body>

<?php

$servername = "localhost";
$username = "root";
$password = "database";

$conn = mysqli_connect($servername,$username,$password);

if(!$conn) 
{
	die("Connection failed " . mysqli_connect_error());
}


$q = "create database meradb";

if(mysqli_query($conn,$q))
{
	echo "Database Created";
}
else
{
	echo "Database creation failed" . mysqli_query_error();
}

mysqli_clos($conn);


?>


</body>
</html>