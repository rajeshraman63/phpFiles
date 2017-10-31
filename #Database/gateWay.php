<?php
	
	
	if($_SERVER['REQUEST_METHOD']=='POST')
	{
		$name=$_POST['user'];
		$mobile=$_REQUEST['Inputmobile'];

		show($name,$mobile);

	}


	function show($name,$mobile)
	{
		$servername = "localhost";
		$username = "root";
		$password = "database";
		$dbname = "meraDB";

		$conn = mysqli_connect($servername,$username,$password,$dbname);

		if(!$conn)
		{
			die("connection Failed ");
		} 

		echo "<br>$name";
		echo "<br>$mobile";

		$query = "select * from guests where name='$name' AND mobile='$mobile'";

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

	}

?>