<?php 
//读取文件中的字符串
$oldMsg= file_get_contents('./db.txt');
//转json为数组
$oldMsg = json_decode($oldMsg,true);
//通过post获取id
$id = $_POST['id'];
//把新的数据赋值给一个变量
$data = $_POST;
//增加一个当时时间
$data['ctime'] = time();
// 修改数据库中的id项
$oldMsg[$id]=$data;
// 写入文件
file_put_contents('./db.txt', json_encode($oldMsg));
// 跳转到首页
header("Location:./index.php");









 ?>