<?php
$servername = "localhost";
$username = "root";
$password =  "database";
$database = "meradb";

$conn = mysqli_connect($servername,$username,$password,$database);


if(!$conn)
{
	die("connection failed");
}



$query = "insert into guests(name,mobile) values('Toney Stark','543534');";

$result = mysqli_query($conn,$query);

if($result)
{
	$last_id = mysqli_insert_id($conn);

	echo "Last inserted id is ".$last_id."<br>";

	echo "Data inserted to the table";
}
else
{
	echo " Data not inserted ";
}




?>