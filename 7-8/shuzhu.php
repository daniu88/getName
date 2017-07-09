<?php 
include './function.php';
// $arr = [15,46,7,48,79,52,55];
// echo $arr[3];

// $arr = [];
// $arr[0]=90;

$arr = array(
	array(
		'name'=>'张三',
		'age' =>18,
		'sex' =>'男'
		),
	array(
		'name'=>'李四',
		'age' =>18,
		'sex' =>'男'
		),
	array(
		'name'=>'王思',
		'age' =>18,
		'sex' =>'男'
		),
	array(
		'name'=>'王思',
		'age' =>18,
		'sex' =>'男'
		),
	array(
		'name'=>'王思',
		'age' =>18,
		'sex' =>'男'
		),
	array(
		'name'=>'王思',
		'age' =>18,
		'sex' =>'男'
		),
	array(
		'name'=>'王思',
		'age' =>18,
		'sex' =>'男'
		)

	);




 ?>


 <!doctype html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 </head>
 <body>
 	<table border="1">
 		<tr>
 			<td>姓名</td>
 			<td>年龄</td>
 			<td>性别</td>
 		</tr>
 		<?php foreach ($arr as $k => $v) { ?>
 		<tr>
 			<td><?php echo $v['name'] ?></td>
 			<td><?php echo $v['age'] ?></td>
 			<td><?php echo $v['sex'] ?></td>
 		</tr>
 	<?php } ?>	
 	</table>
 </body>
 </html>