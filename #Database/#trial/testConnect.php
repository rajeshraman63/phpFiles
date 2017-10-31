<?php

$servername = "localhost";

$username = "root";
$password = "database";
$database = "college";

$conn = mysqli_connect($servername,$username,$password,$database);

if(!$conn)
	die("Connection could not be established");
else
	echo "Connnected Successfully";

$query = "insert into welcome(id,name,Branch) values('343','Manmohan','CSE');";

$result = mysqli_query($conn,$query);

if($result)
	echo "\nInserted";
else
	echo "\nFailed Insertion";

echo "\nInsertion process completed";

mysql_close($conn);

?>