<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>数组回掉函数</title>
</head>
<body>
	<?php 
		$arry=array(1,2,30);
		function test($var)
		{
			return $var*2;
		}
	$res = array_map('test', $arry);
	print_r($res);





	 ?>
</body>
</html>