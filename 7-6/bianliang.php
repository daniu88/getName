<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php 

$arr = ['广州','深圳','瓜子/啤酒/饮料喝花生'];
var_dump($arr);
 ?>
 <?php //传值,就是把前面的一个值赋给后面的，内存是一块，如果没有&符，那么就是两个内存
 	$age = 18;
 	$nam = &$age;
 	echo "$nam";

  ?>
  <?php //可变变量,还是等于前面的一个
  	$a = "name";
  	$$a = "hello";
  	echo "$a";



   ?>
</body>
</html>
