<?php
$servername = "localhost";
$username = "root";
$password = "database";
$dbname = "meradb";

$conn = new mysqli($servername,$username,$password,$dbname);


if($conn->connect_error)
{
	die("Connection Failed " . $conn->connect_error);
}
else
{
	echo "Connected to the database";
}


// prepare and bind

$statement = $conn->prepare("insert into guests(name,mobile) values(?,?);");
$statement->bind_param("ss",$name,$mobile);

$name = 'Munna';
$mobile='3434';

$statement->execute();

echo "<br>new records created successfully";

$statement->close();
$conn->close();


?>