<!DOCTYPE html>
<html>
<head>
	<title>Form Validation </title>
</head>
<body>

<p style="color: red">* mandatory field </p>

<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
	
	Name : <input type="text" name="name"><br>	
	Email : <input type="email" name="email"><br>	
	Gender : <input type="radio" name="gender" >Male	
				<input type="radio" name="gender" > Female <br>	

	Comment : <textarea minlength="5" ></textarea>
			<input type="submit" name="submit" value="Submit">
</form>


<?php
	
	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		$name = $_REQUEST['name'];
		$email = $_REQUEST['email'];
		$gender = $_REQUEST['gender'];

		echo "<br><hr><br>$name <br> $email <br> $gender <hr>";

	}


?>


</body>
</html>



<!-- 	to hack this file add at the end of its addresss in the address bar 

/%22%3E%3Cscript%3Ealert('hacked')%3C/script%3E -->
