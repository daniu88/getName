<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
	function table($h,$j)
	{
		
	
		$table = "<table border=1 cellspacing=0 cellpadding=0 width='80%' 	> ";
			for ($i=1; $i <= $h; $i++) { 
				$table.="<tr>";
					for ($k=1; $k <= $j; $k++) { 
						$table.="<td>政委</td>";
					}

				$table.="</tr>";
			}

		$table.= "</table>";
		return $table;
	}

echo "<hr>";
echo table(5,9);
echo "<hr>";
echo table(8,8);

	 ?>
</body>
</html>