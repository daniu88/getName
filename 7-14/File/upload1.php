<?php 
include '../function.php';

$data = $_FILES[ 'wanjian'];

$num = count($data["name"]);//检测文件个数

for ($i=0; $i < $num; $i++) { 

if ($data['error'][$i]) { 
	echo "上传失败";
}

$arr = explode(".", $data['name'][$i]);
$eit = end($arr);
$eits = ["jpg","png"];

if (!in_array($eit, $eits)) {
	echo "上传文件类型条件不符合";exit;
}

if ($data["size"][$i]>100000) {
	echo "上传文件过大";exit;
}

$name = uniqid();

$res = move_uploaded_file($data["tmp_name"][$i],"./Upuload/".$name.".".$eit);

if ($res) {
	echo "上传成功";
}else{
	echo "上传失败";
}

}







 ?>