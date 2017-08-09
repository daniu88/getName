<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function index(){

    	 $this->display();
    }

    public function checkdata()
	{
		$data = I('post.');	
		// var_dump($data);exit();
		$nickname = $data['nickname'];
		$password = md5($data['password']);

		$res=M("admin")->where(['nickname'=>$nickname,'password'=>$password])->select(); 

		if ($res) {
			$_SESSION['aid']=current($res)['aid'];
			$_SESSION['nickname']=current($res)['nickname'];
			$this->ajaxReturn(['error'=>0,'info'=>"登录成功"]);
		}else{
			$this->ajaxReturn(['error'=>1,'info'=>"昵称或者密码不正确"]);
		}
	}

	public function logout()
	{
		session_unset();
        session_destroy();
        $this->success('退出成功', U('admin/login/index'));
	}



  }