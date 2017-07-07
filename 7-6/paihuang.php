<?php 

$name=	"学习啊啊啊啊啊啊";

 ?>


<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>只是想拍一下黄片</title>
</head>
<body>
	<?php 
		echo "$name";
		$a = 18;
		var_dump($a);
		var_dump($name);

		$ww = 23;
		$rr = &$ww;
		$rr = 99;
		echo "$ww";
	 ?>
</body>
</html>