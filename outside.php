
<!-- PHP $_REQUEST is used to collect data after submitting an HTML form. -->

 <html>
<body>



<form method="post" action="<?php echo $_SERVER['PHP_SELP']; ?>">
	
	<input type="text" name="fname"><br>
	<input type="submit" value="inputQuery"><br>
</form>

<?php

 if($_SERVER['REQUEST_METHOD']=='POST')
 {
 	//collect value of input field

 	$name = $_REQUEST['fname'];

 	if(empty($name))
 		echo "Please input you name";
 	else
 		echo "<br>$name";
 }



?>



</body>
</html> 