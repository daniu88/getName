<?php 

include './function.php';

$arr = array(
	array(
		"name" => "张三",
		"sex" => "女",
		"age" => 20

		),
	array(
		"name" => "李四",
		"sex" => "女",
		"age" => 20

		),
	array(
		"name" =>"小北",
		"sex" => "女",
		"age" => 20

		),
	array(
		"name" => "一句话",
		"sex" => "女",
		"age" => 20

		),
	array(
		"name" => "调侃",
		"sex" => "女",
		"age" => 20

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
			<td>性别</td>
			<td>年龄</td>
		</tr>
		<?php foreach ($arr as $k => $v) { ?>
				<tr>
					<td><?php echo $v["name"] ?></td>
					<td><?php echo $v["sex"] ?></td>
					<td><?php echo $v["age"] ?></td>
				</tr>
		<?php } ?>	
	</table>
</body>
</html>




