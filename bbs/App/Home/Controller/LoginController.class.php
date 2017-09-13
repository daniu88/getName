<?php 
namespace Home\Controller;
use Think\Controller;
class LoginController extends CommonController {

	public function index()
	{
		var_dump($_SESSION);
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
			$url =U('home/set/index');
			
			$this->ajaxReturn(['error'=>0,'info'=>"登录成功",'url'=>$url]);
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



	//QQ登陆
	public function qqlogin()
	{
		Vendor('qqConnect.API.qqConnectAPI');
		// require_once("../../API/qqConnectAPI.php");
		$qc = new \QC();
		// var_dump($qc); 
		$qc->qq_login();

	}


	public function qqreutrn()
	{
		Vendor('qqConnect.API.qqConnectAPI');
		// require_once("../../API/qqConnectAPI.php");
		$qc = new \QC();
		$acs = $qc->qq_callback();
		$openid = $qc->get_openid();
		
		$uses = M('user')->where(['openid'=>$openid])->find();
		if ($uses) {
			$_SESSION['uid']=$uses['uid'];
			$_SESSION['nickname']=$uses['nickname'];
			$_SESSION['face']=$uses['face'];
			$this->success("登录成功",U('home/index/index'));
		}else{

			$qc = new \QC($acs,$openid);
			$user = $qc->get_user_info();
			$data['nickname'] = $user['nickname'];
			$data['sex'] = $user['gender'];
			$data['city'] = $user['city'];
			$data['create_time'] = time();
			$data['openid'] = $openid;
			$data['face'] = $this->getqqface($user['figureurl_2']);

			$uid = M('user')->add($data);
			if ($uid) {
				$_SESSION['uid']=$uid;
				$_SESSION['nickname']=$data['nickname'];
				$_SESSION['face']=$data['face'];
				$this->success("登录成功",U('home/index/index'));
			}
		}
	}


		public function getqqface($url="")
		{
			// $url = "http://qzapp.qlogo.cn/qzapp/101418527/C4EEE5532271AE02D73ED77E6B639D0C/100";
			// $data = file_get_contents($url);
			// $pata = "./Uploads/qq/".uniqid().".jpg";
			// // var_dump($pata);exit;
			// file_put_contents($pata,$data);

			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_HEADER, 0);
			$output = curl_exec($ch);
			$pata = "./Uploads/qq/".uniqid().".jpg";
			file_put_contents($pata,$output);
			curl_close($ch);

			return $pata;





		}







}








 ?>