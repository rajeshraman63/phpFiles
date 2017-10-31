<!DOCTYPE html>
<html>
<head>
	<title>form Validation</title>
</head>
<body>


<?php
	
	$nameErr = "";
	$emailErr = "";

	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		$name = $_POST['name'];

		if (!preg_match("/^[a-zA-Z ]*$/",$name)) 
		{
 			 $nameErr = "Only letters and white space allowed";
		}

		$email = $_POST["email"];
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
		{
		  $emailErr = "Invalid email format";
		}
	}


?>




<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
	
	Name : <input type="text" name="name">
		<span><?php echo $nameErr; ?></span><br>

		Email : <input type="text" name="email">
		<span><?php echo $emailErr; ?></span><br>

	<input type="submit" value="submit">

</form>



<?php

	echo "<br> $name";

	echo "<br> email";

?>







</body>
</html>