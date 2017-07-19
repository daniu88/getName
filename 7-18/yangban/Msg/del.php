<?php 


// 删除功能
$id = $_GET['id'];

//读取文件中的字符串
$oldMsg= file_get_contents('./Db/db.txt');
//转json为数组
$oldMsg = json_decode($oldMsg,true);


unset($oldMsg[$id]);
// array_splice($oldMsg, $id,1);
// var_dump($oldMsg,$id);


// 写入文件
file_put_contents('./Db/db.txt', json_encode($oldMsg));
// 跳转到首页
header("Location:./index.php");








 ?>