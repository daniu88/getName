<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
		function add($x,$y)
		{
			return $x+$y;
		}
		function reduce($x,$y)
		{
			return $x-$y;
		}
		function calc($name,$i,$j)
		{
			return $name($i,$j);
		}
	echo add(100,50);



	 ?>
</body>
</html>