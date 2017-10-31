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
 

//$query = "select name,mobile from guests;";
	
$query = "select * from guests;";

$result = mysqli_query($conn,$query);

if(mysqli_num_rows($result) > 0)
{
	while ($row = mysqli_fetch_assoc($result)) 
	{
		echo "Name : " . $row['name'] . " Mobile :" .$row['mobile']."<br>";
	}
}
else
{
	echo "0 rows";
}


?>