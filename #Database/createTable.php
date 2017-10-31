<!DOCTYPE html>
<html>
<head>
	<title>Procedural Create Db</title>
</head>
<body>

<?php

$servername = "localhost";
$username = "root";
$password = "databasef";
$database = "MeraDB";

$conn = mysqli_connect($servername,$username,$password,$database); 

if(!$conn)
{
	die("Connection Failed ");
}

$query = "create table guests
		(
			name varchar(50),
			mobile varchar(15)
		);";

$result = mysqli_query($conn,$query);

if($result)
{
	echo "Table Created in the Database";
}


?>

</body>
</html>