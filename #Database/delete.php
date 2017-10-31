<?php

$severname = "localhost";
$username = "root";
$password = "database";
$dbname  = "meradb";

$conn = mysqli_connect($severname,$username,$password,$dbname);

if(!$conn)
{
	echo "Connection Failed";
}
else
{
	echo "connected <br>"; 
}


$query = "delete from guests where name='Toney Stark'";

$result = mysqli_query($conn,$query);

if($result)
{
	echo "Successfully deleted from the database";
}
else
{
	echo "Deletion Failed";
}





?>