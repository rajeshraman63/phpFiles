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

$query = "update guests set mobile='3432432' where name='superman'";

$result = mysqli_query($conn,$query);

if($result)
{
	echo "Successfully Updated";
}
else
{
	echo "Updation failed";
}

mysqli_close($conn);

?>