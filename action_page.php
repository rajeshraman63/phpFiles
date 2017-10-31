<!DOCTYPE html>
<html>
<head>
	<title>Action Page</title>
</head>
<body>


<?php

	if($_SERVER['REQUEST_METHOD']=="POST")
	{
		$name = $_POST['name'];
		$people = $_POST['people'];
		$date = $_POST['date'];
		$message = $_POST['message'];

		echo "<br> $name";
		echo "<br> $people";
		echo "<br> $date";
		echo "<br> $message";
	}




?>


</body>
</html>