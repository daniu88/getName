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

		$res=M("user")->where(['email'=>$email,'password'=>$password])->find(); 

		if ($res) {
			if ($res['status']) {
				$this->ajaxReturn(['error'=>1,'info'=>"账号被封停，请联系管理员开通"]);
			}
			$_SESSION['uid']=$res['uid'];
			$_SESSION['nickname']=$res['nickname'];
			$_SESSION['face']=$res['face'];
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