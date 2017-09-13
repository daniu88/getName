<?php
namespace Admin\Controller;
use Think\Controller;
class PasswordsController extends CommonController {
    public function index(){



    	$uid = I('get.uid');
    	$user = M('user')->where(['uid'=>$uid])->find();
    	$this->assign('user',$user);
    	$this->display();


   }

   public function editpass()
   {
   	$res = I('post.');

   	$uid = I('post.uid');

   	$pass = M('user')->where(['uid'=>$uid])->find();

   	$User = D("User"); // 实例化User对象
		if (!$User->create($data,3)){

		$this->ajaxReturn(['error'=>1,'info'=>$User->getError()]);
		}else{
				     
		$data['password']=md5($data['password']);
		M('user')->where(['uid'=>$_SESSION['uid']])->save($data);
		$this->ajaxReturn(['error'=>0,'info'=>"修改成功"]);  
				   
		}	






   }
}