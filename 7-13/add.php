<?php 


var_dump($_FILES);
move_uploaded_file($_FILES["uploadfile"]['tmp_name'],"./Upload/".$_FILES['uploadfile']["name"] );

if ($_FILES['uploadfile']["size"]>5000) {
	echo "文件过大";exit;
}




 ?>