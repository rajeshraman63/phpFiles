<!DOCTYPE html>
<html>
<head>
	<title>Function</title>
</head>
<body>

<?php

	$name  = array("Batman","The Flash","SpiderMan","Superman","RaMan");


	echo "$name[0]";

	echo "<hr><br>Using for loop <hr>";

	$arrLength = count($name);

	for ($i=0; $i < $arrLength; $i++) 
	{ 
		echo "<br>$name[$i]";
	}

	echo "<hr><br> Using For Each Loop <hr>";

	foreach ($name as $key) 
	{
		echo "<br>$key";	
	}


	echo "<hr><br> Associated Array <hr>";

	$age  = array('Spiderman' => 30,'Superman' => 40,'The Flash' => 20);

	foreach ($age as $key => $value) {
		
		echo "<br> $key  is $value years  old";
	}


	echo "<hr><br> Sorting Array <hr>";

	sort($name);

	echo "<hr><br>After sorting the name array in ascending order<hr>";

	$arrLength = count($name);

	for ($i=0; $i < $arrLength; $i++) 
	{ 
		echo "<br>$name[$i]";
	}


	rsort($name);

	echo "<hr><br>After sorting the name array in ascending order<hr>";

	$arrLength = count($name);

	for ($i=0; $i < $arrLength; $i++) 
	{ 
		echo "<br>$name[$i]";
	}


	echo "<hr><br> Associated Array increasing sorting by value  <hr>";

	asort($age);

	foreach ($age as $key => $value) {
		
		echo "<br> $key  is $value years  old";
	}


	echo "<hr><br> Associated Array decreasing sorting by value  <hr>";

	arsort($age);

	foreach ($age as $key => $value) {
		
		echo "<br> $key  is $value years  old";
	}

	echo "<hr><br> Associated Array increasing sorting by key  <hr>";

	ksort($age);

	foreach ($age as $key => $value) {
		
		echo "<br> $key  is $value years  old";
	}

	echo "<hr><br> Associated Array decreasing sorting by key  <hr>";

	krsort($age);

	foreach ($age as $key => $value) {
		
		echo "<br> $key  is $value years  old";
	}


?>


</body>
</html>