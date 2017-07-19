<?php 

include '../../function.php';

session_start();
$data=$_POST;

$userlist = file_get_contents('user.txt');//将txt文件读入一个字符串
$userlist = json_decode($userlist,true);//将json转为数组
$data['password'] = md5($data['password']);//将$data的password加密

$userlist[]=$data;//写入数组
 
// var_dump($userlist);exit;	 	

$userlist=json_encode($userlist);//转字符串

// var_dump($userlist);exit;


file_put_contents('./user.txt',$userlist);//写入数据库

$_SESSION['info'] = '注册成功，请登陆！';

header("Location:./index.php");















 ?>