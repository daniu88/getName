<?php 

//读取文件中的字符串
$oldMsg= file_get_contents('./Db/db.txt');
//转json为数组
$oldMsg = json_decode($oldMsg,true);
// 接收post的数据
$data = $_POST;
// 增加创建时间
$data['ctime']=time();
//追加到数据库数组
$oldMsg[]=$data;
// 写入文件
file_put_contents('./Db/db.txt', json_encode($oldMsg));
// 跳转到首页
header("Location:./index.php");
 ?>