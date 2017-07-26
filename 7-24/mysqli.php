<?php 

include '../function.php';


$mysqli = @new mysqli('127.0.0.1','root','','cesi');

// var_dump($mysqli->connect_errno);

$mysqli->query("set names utf8");

if ($mysqli->connect_errno) {
	exit("链接失败，代码：".$mysqli->connect_errno."错误原因：".$mysqli->connect_error);
}


// $sql = "insert into stu (name,age) values ('小小明1',40)";
// $res=$mysqli->query($sql);

// if (!$res) {
// 	exit("执行失败，代码：".$mysqli->errno."错误原因：".$mysqli->error);
// }



$sql = "select * from stu";


$res = $mysqli->query($sql);

// var_dump($res->fetch_assoc() );
// var_dump($res->fetch_object()  );
// var_dump($res->fetch_array()   );

$arr=array();
while ($row = $res->fetch_assoc()) {
	$arr[]=$row;
}

var_dump($arr);















 ?>