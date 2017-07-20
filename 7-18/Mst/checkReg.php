<?php 

if(isset($_POST['username'])){
	username();
}elseif(isset($_POST['emile'])){
	email();
}else{
	password();
}



function username()
{
	$username=$_POST['username'];


	$preg="/^[A-z0-9][A-z0-9-_]{5,8}$/";



	$c=preg_match($preg, $username);


	if (!$c) {
		$info=array(
			'error'=>1,
			'info'=>"用户名不符合，要6-8位"	
			);
		echo json_encode($info);exit;
	}



	$userlist=file_get_contents('./user.txt');
	$userlist=json_decode($userlist,true);

	foreach ($userlist as $user) {
		if ($user['username']==$username) {
			$info=array(
			'error'=>1,
			'info'=>"用户名已经存在"	
			);
			echo json_encode($info);exit;
			}
		
	}


	$info=array(
			'error'=>0,
			'info'=>"用户名可以用"	
			);
	echo json_encode($info);
}









function email(){
	$email=$_POST['emile'];
	// var_dump($email);
	$preg="/^[a-zA-Z0-9_-]+@[a-zA-Z0-9_-]+(\.[a-zA-Z0-9_-]+)+$/";
	$c=preg_match($preg, $email);
	if (!$c) {
		$info=array(
			'error'=>1,
			'info'=>"邮箱不符合要求，请重新输入.."	
			);
		echo json_encode($info);exit;
	}

	$info=array(
			'error'=>0,
			'info'=>"邮箱可用"	
			);
	echo json_encode($info);

	}


	function password(){
		echo "888888";
	}





















 ?>