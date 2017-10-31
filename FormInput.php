<!DOCTYPE html>
<html>
<head>
	<title>Form Input Test</title>
</head>
<body>



<?php 
	
	$nameErr ="";
	$name="";

	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		if(empty($_POST['name']))
			$nameErr = "Enter your name ";
		else
			$name = $_POST['name'];
	}


?>



<form action="<?php echo  $_SERVER['PHP_SELF'] ?>" method="post">

Name : <input type="text" name="name"> 
	<span class="error">*  <?php echo $nameErr; ?>  </span><br>

<input type="submit" name="submit" value="submit">

</form>



	

<?php
	
	echo "<hr>Your Input <br.";

	echo "<br> $name";

?>



</body>
</html>