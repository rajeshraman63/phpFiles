<?php
	$servername = "localhost";
	$username = "root";
	$password = "database";
	$dbname = "meraDB";

	$conn = mysqli_connect($servername,$username,$password,$dbname);


	if(!$conn)
	{
		die("connection Failed ");
	}


	$query = "select * from guests";

	$result = mysqli_query($conn,$query);

	if(mysqli_num_rows($result) > 0)
	{
		while($row = mysqli_fetch_assoc($result))
		{
			echo "Name : " .$row['name']. " Mobile :".$row['mobile']."<br>";
		}
	}
	else
	{
		echo "0 rows";
	}



?>