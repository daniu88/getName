<?php 

include '../function.php';


$data = $_FILES['wanjian'];

$num = count($data['name']);

for ($i=0; $i < $num ; $i++) { 
	if ($data['error'][$i]) {
		echo "上传失败";exit;
	}
	$arr = explode(".", $data['name'][$i]);
	$ext = end($arr);
	$exts = ['jpg','png'];
	if (!in_array($ext,$exts)) {
		echo "上传文件不符合";exit;
	}
	if ($data["size"][$i]>1000000) {
		echo "上传文件过大";exit;
	};

	$name = uniqid();
	$res = move_uploaded_file($data["tmp_name"][$i], "./Upuload/".$name.".".$ext);

	if ($res) {
		echo "上传成功";
	}else{
		echo "上传失败";
	};

}








 ?>