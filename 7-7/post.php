<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
		

		var_dump($_POST)	;


	 ?>

<table border="1">
	<tr>
		<td>姓名</td>
		<td>密码</td>
		<td>邮箱</td>
		<td>手机</td>
	</tr>
	<tr>
		<td> <?php echo $_POST["user"] ?> </td>
		<td><?php echo $_POST["password"] ?> </td>
		<td><?php echo $_POST["emell"] ?> </td>
		<td><?php echo $_POST["shouji"] ?> </td>
	</tr>
</table>


</body>
</html>