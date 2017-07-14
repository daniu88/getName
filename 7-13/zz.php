<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<form action="./xiazi.php" method="post" enctype="multipart/form-data">
	<table border="1">
		<tr>
			<td>文件名</td>
			<td>文件大小</td>
			<td>下载</td>
		</tr>
		<?php 
			foreach ($miao as $row) { ?>
			<tr>
				<td><?php echo basename($row) ?></td>
				<td><?php echo filesize($row) ?></td>
				<td><a href="<?php echo $row ?>">下载</a></td>
			</tr>
			<?php } ?>
	</table>
</form>
</body>
</html>