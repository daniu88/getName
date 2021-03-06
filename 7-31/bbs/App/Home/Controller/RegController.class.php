<?php
namespace Home\Controller;
use Think\Controller;
class RegController extends Controller {
    public function index(){

    	if(isset($_SESSION['uid'])){
    		 $this->error('已经登录',U('home/set/index'));
    	}
    	$question = D('vercode')->getOne();

    	$this->assign('question',$question);

        $this->display();
    }
    public function checkdata()
    {
    	$data = I('post.');

    	$res = D('vercode')->checkCode($data['vercode']);

    	if(!$res){
    		$this->ajaxReturn(['error'=>1,'info'=>"人类验证不通过"]);
    	}

    	$User = D("User"); // 实例化User对象

		if (!$User->create($data,1)){ // 指定新增数据
		     // 如果创建失败 表示验证没有通过 输出错误提示信息
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

		     // 验证通过 可以进行其他数据操作
		}
    }
}