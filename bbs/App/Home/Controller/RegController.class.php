<?php
namespace Home\Controller;
use Think\Controller;
class RegController extends Controller {
    public function index(){
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

    	// $data['email']="dadsad";

    	
    	$User = D("User"); // 实例化User对象

		if (!$User->create($data,1)){ // 指定新增数据
		     // 如果创建失败 表示验证没有通过 输出错误提示信息
		     $this->ajaxReturn(['error'=>1,'info'=>$User->getError()]);
		}else{
			
			$data['create_time'] = time();
			$data['password'] = md5($data['password']);

			if(M('user')->add($data)){
				$this->ajaxReturn(['error'=>0,'info'=>"注册成功"]);
			}else{
				$this->ajaxReturn(['error'=>1,'info'=>"注册失败"]);
			}

		     // 验证通过 可以进行其他数据操作
		}
    }

		





    // public function  checkdate()
    // {
    // 	$data=I("post.");
    // 	$res=D("vercode")->checkCode($data['vercode']);
    // 	if (!$res) {
    // 		exit(json_encode(['error'=>1,'info'=>"人类验证不通过！"]));
    // 	}

    // 	M('user')->add($data);
    // }

}




























?>
