<?php 

namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {

	public function index()
	{
		$question = D('vercode')->getOne();
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


		var_dump($res);


		







	}
}








 ?>