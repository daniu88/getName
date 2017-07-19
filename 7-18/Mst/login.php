<?php 

include '../../function.php';

session_start();
$data=$_POST;
// var_dump($data);

$userlist = file_get_contents('user.txt');//将txt文件读入一个字符串
$userlist = json_decode($userlist,true);//将json转为数组

// var_dump($userlist);exit;
foreach ($userlist as $user) {
	if ($user['username']==$data['username'] && $user['password']==md5($data['password'])) {
		$_SESSION['username']=$user['username'];
		$_SESSION['info'] = '登陆成功';
		header("Location:./index.php");exit;
	}
}

$_SESSION['info']="登录失败，帐号可以密码不正确";

// var_dump($_SESSION['info']);

header("Location:./index.php");









 ?>