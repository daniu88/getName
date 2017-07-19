<?php 

// 编辑功能

$id = $_GET['id'];

//读取文件中的字符串
$oldMsg= file_get_contents('./Db/db.txt');
//转json为数组
$oldMsg = json_decode($oldMsg,true);

$row = $oldMsg[$id];

include './Tpl/edit.html';














 ?>