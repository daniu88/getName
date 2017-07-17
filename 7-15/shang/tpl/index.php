<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="./upload.php" method="post" enctype="multipart/form-data" >
	<!-- <input type="hidden" name="MAX_FILE_SIZE" value="300"> -->
	<input type="file" multiple name="upload[]" >
		<input type="submit" value="上传">
	</form>
</body>
</html>