<!DOCTYPE html>
<html>
<head>
	<title>Function</title>
</head>
<body>

<?php

	function show()
	{
		echo "show";
	}

	function sum($x,$y)
	{
		$z = $x + $y;
		return $z;
	}

	show();


	echo "<br>2 + 3 =  ".sum(2,3);

?>


</body>
</html>