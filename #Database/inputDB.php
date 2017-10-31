<?php


if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$name = $_REQUEST['name'];
	$mobile = $_POST['mobile'];

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


	$query = "insert into guests(name,mobile) values('$name','$mobile') ";

	$result = mysqli_query($conn,$query);

	if($result)
	{
		echo "Data Inserted";
	}
	else
	{
		echo "Not Inserted";
	}

	$conn_mysqli_close();


}

?>	