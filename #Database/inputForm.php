<!DOCTYPE html>
<html>
<head>
	<title>Insert To Database</title>
</head>
<body> 
<form action="inputDB.php" method="post">
	
	Name : <input type="text" name="name"><br>	
	Mobile : <input type="mobile" name="mobile"><br>	
	
		<input type="submit" name="submit" value="Insert">
</form>

<br>

<a href="selectMeraDB.php"><button>ShowDatabase</button></a>


<form method="post" action="showParticular.php">
	
	Name : <input type="text" name="user"><br>
	<input type="submit" name="showDetails">

</form>

<br><br>

<hr>
<br>
Sign In 
<br>
<hr>


<form method="post" action="gateway.php">
	
	Name : <input type="text" name="user"><br>
	Mobile : <input type="text" name="Inputmobile">

	<input type="submit" value="Sign In ">

</form>





</body>
</html>