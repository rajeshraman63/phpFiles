<?php 

$servername = "localhost";
$usenname = "root";
$password = "database";
$dbname = "meradb";

$conn = new mysqli($servername,$usenname,$password,$dbname);

if($conn->connect_error)
{
	die("Connection failed");
}
else
{
	echo "connected to the database <br>";
}


$statement = $conn->prepare("insert into guests values(?,?);");
$statement->bind_param("ss",$name,$mobile);

$name = "Rajesh";
$mobile = "432";
$statement->execute();


$name = "Ram";
$mobile="343423";
$statement->execute();

$name="Ankit";
$mobile="43234";
$statement->execute();


echo "new data updated ";

$statement->close();
$conn->close();;


?>