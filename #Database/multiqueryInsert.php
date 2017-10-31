<?php
$servername = "localhost";
$username = "root";
$password = "database";
$database = "meradb";

$conn = mysqli_connect($servername,$username,$password,$database);

if(!$conn)
{
	die("Connection failed");
}


$query = "insert into guests values('SuperMan','1232234');";
$query .= "insert into guests values('SuperMan','1232234');";
$query .= "insert into guests values('SuperMan','1232234');";
$query .= "insert into guests values('SuperMan','1232234');";
$query .= "insert into guests values('SuperMan','1232234');";

$result = mysqli_multi_query($conn,$query);

if($result)
{
	echo "data inserted ";
}
else
{
	echo "not inserted";
}


?>