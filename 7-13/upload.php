<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="./add.php" method="post" enctype="multipart/form-data">
		<input type="hidden" name="MAX_FILE_SIZE" value="3000">
		<input type="file" name="uploadfile">
		<input type="submit" value="提交">
	</form>
</body>
</html>