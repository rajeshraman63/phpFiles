
<?php
$servername = "localhost";
$username = "root";
$password = "database";
$database = "meradb";

$conn = mysqli_connect($servername,$username,$password,$database);

if(!$conn)
{
	die("Connection Failed ");
}


$query = "describe guests;";

$result = mysqli_query($conn,$query);


if($result)
{
	echo "Query executed";
}
else
{
	echo "Query Execution Failed";
}


mysqli_close($conn);

?>


