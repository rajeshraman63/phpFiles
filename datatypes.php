<!DOCTYPE html>
<html>
<head>
	<title>PHP datatypes </title>
</head>
<body>

<?php
	$x = "Hello World";
	echo $x;

	echo "<br>";

	$i = 34;
	var_dump($i);

	echo "<br>";

	$b = true;

	echo "$b";

	echo "<br>";

	$arrayName = array('Volvo','BMW','Toyota' );

	echo "$arrayName[0]";

	echo "<br>";

	echo "$arrayName[1]";

	echo "<br>";

	var_dump($arrayName);

	echo "<br>";


	#class is needed to create an  object

	class Car 
	{
		function Car()
		{
			$this->model = "VW";
		}
	}

	$obj = new Car();

	echo $obj->model;






?>


</body>
</html>