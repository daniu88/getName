<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>九九乘法表 </title>
</head>
<body>
	<?php 
	echo "<table border=1>";
	for ($i = 9; $i >= 1; $i--) { 
		echo "<tr>";
			for ($y=1; $y <= $i ; $y++) {
				if ($y%2==1) {
					echo "<td bgcolor='red'>"."$i"."*"."$y"."=".$i*$y."</td>";
				}else{
					
					if($i%2==1) {
						echo "<td bgcolor='blue'>"."$i"."*"."$y"."=".$i*$y."</td>";
					}else{
						echo "<td>"."$i"."*"."$y"."=".$i*$y."</td>";
					}
				}

				
			}
		echo "<tr>";
	}

	echo "<table>";
	 ?>
</body>
</html>