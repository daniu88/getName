<?php 

include './function.php';

$data = $_FILES['uplod'];

$houzi = ['jpg','gif','png'];
if ($data["error"]!=0) {
	echo "上传失败，错误代码： ".$data['erroe'];exit;
}

$arr = explode('.', $data['name']);
$ext = end($arr);
if (!in_array($ext, $houzi)) {
	echo "不允许上传的类型，请重新上传";exit;
};


if ($data["size"]>100000){
	echo "文件大小不符合";exit;
}


$name = uniqid();
move_uploaded_file($data['tmp_name'], "./Upload/".$name.".".$ext);






// if ($data["error"]==0) {
// 	$arr = explode('.', $data['name']);
//  	$ext = end($arr);
//  	if (in_array($ext, $houzi)) {
//  		if ($data["size"]<100000) {
//  			$name = uniqid();
//  			move_uploaded_file($data['tmp_name'], "./Upload/".$name.".".$ext);
//  		}else{
//  			echo "文件大小不符合";
//  		}

//  	}else{
//  		echo "不允许上传的类型，请重新上传";
//  	}
// }else{
// 	echo "上传失败，错误代码： ".$data['erroe'];
// }





// var_dump($_FILES);










 ?>