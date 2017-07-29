<?php
namespace Home\Controller;
use Think\Controller;
class RegController extends Controller {
    public function index(){

        if (isset($_SESSION['uid'])) {
           $this->error('已经登录',U('home/set/index'));
        }

    	$question = D("vercode")->getOne();
    	$this->assign("question",$question);

    	$this->display();
    }

    public function checkdata()
    {
    	$data = I('post.');
    	$res=D('vercode')->checkCode($data['vercode']);

    	if (!$res) {
    		$this->ajaxReturn(['error'=>1,"info"=>"人类验证不通过！"]);
    	}
    	$User = D("User"); 

		if (!$User->create($data,1)){ 
		     $this->ajaxReturn(['error'=>1,'info'=>$User->getError()]);
		}else{
			
			$data['create_time'] = time();
			$data['password'] = md5($data['password']);

            $faces = ['Public/images/face.jpg','Public/images/face1.jpg','Public/images/face2.jpg'];

            $data['face'] = $faces[array_rand($faces)];

			if(M('user')->add($data)){
				$this->ajaxReturn(['error'=>0,'info'=>"注册成功"]);
			}else{
				$this->ajaxReturn(['error'=>1,'info'=>"注册失败"]);
			}
		}
    }
}




























?>
