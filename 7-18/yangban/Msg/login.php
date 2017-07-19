<?php 

include './function.php';

session_start();


$data = $_POST;

$userlist = file_get_contents('./Db/user.txt');
$userlist = json_decode($userlist,true);

foreach ($userlist as  $user) {
	if($user['username']==$data['username'] && $user['password']==md5($data['password'])){		
		$_SESSION['username'] = $user['username'];
		$_SESSION['info'] = "登录成功";
		header("Location:./index.php");exit;
	}
}

$_SESSION['info'] = "登录失败，帐号可以密码不正确";
header("Location:./index.php");























 ?>