<?php 
include './function.php';
session_start();
$id = $_GET["id"];
$du = file_get_contents("./db.txt");//读数组
$du = json_decode($du,true);//转字符
unset($du[$id]);//删数组
$du = json_encode($du);//转字符串
file_put_contents("./db.txt",$du);//写入
$_SESSION['info']="删除成功！";

header("Location:./index.php");//跳到首页

 ?>