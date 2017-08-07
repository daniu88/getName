<?php 
namespace Home\Controller;
use Think\Controller;
class LoginController extends CommonController {

	public function index()
	{
		if (isset($_SESSION['uid'])) {
			$this->error('已经登录',U('home/set/index'));
		}


		$question = D('vercode')->getOne();
		$this->assign('title',"登陆");
		$this->assign("question",$question);
		$this->display();
	}

	public function checkdata()
	{
		$data = I('post.');	
		// var_dump($data);
		$res = D('vercode')->checkCode($data['vercode']);
		if (!$res) {
			$this->ajaxReturn(['error'=>1,'info'=>"人类验证不通过"]);
		}

		$email = $data['email'];
		$password = md5($data['password']);

		$res=M("user")->where(['email'=>$email,'password'=>$password])->select(); 

		if ($res) {
			$_SESSION['uid']=current($res)['uid'];
			$_SESSION['nickname']=current($res)['nickname'];
			$_SESSION['face']=current($res)['face'];
			$this->ajaxReturn(['error'=>0,'info'=>"登录成功"]);
		}else{
			$this->ajaxReturn(['error'=>1,'info'=>"邮箱或者密码不正确"]);
		}
	}

	public function logout()
	{
		session_unset();
		session_destroy();
		$this->success('退出成功', U('home/login/index'));
	}


}








 ?>