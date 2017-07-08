<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
	function table($kuan,$gao,$yan,$content){
		$table="<table border=1 cellspacing=0 cellpadding=0 width=70% bgcolor={$yan}>";
			for ($i=0; $i < $kuan; $i++) { 
				$table.="<tr>";
				for ($k=0; $k < $gao; $k++) { 
					$table.="<td>{$content}</td>";
				}
				$table.="</tr>";
			}
		$table.="</table>";
		return $table;
	}

	echo table(11,10,'green','hello word');

	 ?>
</body>
</html>