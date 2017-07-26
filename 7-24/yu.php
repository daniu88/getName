<?php 
include '../function.php';

$mysqli = @new mysqli("127.0.0.1", "root", "", "cesi");


if($mysqli->connect_errno){
	exit("链接失败,代码：".$mysqli->connect_errno."错误原因：".$mysqli->connect_error);
}

$mysqli->query("set names utf8"); 

$sql = "insert into stu(name,age)values(?:?)";
$stmt = $mysqli->prepare($sql);//准备




if($stmt){
	$stmt->bind_param('si',$name,$age);//绑定参数

	for ($i=0; $i <200 ; $i++) { 
		$name = "小花".$i;
		$age = 30;
		$stmt->execute();//执行
	}







// if ($stmt) {
// 	$stmt->bind_param('si',$name,$age);
// 	for ($i=0; $i < 200; $i++) { 
// 		$name="小花".$i;
// 		$age=30;
// 		$stmt->execute();
// 	}
}































 ?>