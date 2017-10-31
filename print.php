 <!DOCTYPE html>
<html>
<body>

<?php
	
	$txt = "I am fine";

	echo "1)First Method : <br>";
	echo "Hurrah!  $txt <br>";
	
	echo "2)Second Method : <br>";
	echo "Hurrah! " .$txt;
?>

<p> Sum Of two numbers </p>

<?php
	$a = 5;
	$b = 30;

	echo $a + $b;
?>

<?php
	$x = 5; // global scope

	function myTest() {
	    // using x inside this function will generate an error
	    echo "<p>Variable x inside function is: $x</p>";
	}
	myTest();

	echo "<p>Variable x outside function is: $x</p>";
?> 


<?php

	function myTest2() {
	    $d = 5; // local scope
	    echo "<p>Variable x inside function is: $d</p>";
	}

	myTest2();

// using x outside the function will generate an error
//echo "<p>Variable x outside function is: $d</p>";
?> 


<?php
	$m = 5;
	$n = 10;

	function myTest3() {
	    $GLOBALS['n'] = $GLOBALS['m'] + $GLOBALS['n'];
	}

	myTest3();
	echo $n; // outputs 15
?> 


<?php

	function myTest4() {
	    static $j = 0;
	    echo "<br>" .$j;
	    $j++;
	}

	myTest4();
	myTest4();
	myTest4();
?> 

<?php
$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";
$x = 5;
$y = 4;

print "<h2>$txt1</h2>";
print "Study PHP at $txt2<br>";
print $x + $y;
?> 




</body>
</html> 