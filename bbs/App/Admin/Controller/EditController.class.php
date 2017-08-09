<?php
namespace Admin\Controller;
use Think\Controller;
class EditController extends Controller {
    public function index(){
    	$uid = I('get.uid');
    	$user = M('user')->where(['uid'=>$uid])->find();
    	$this->assign('user',$user);

    	$this->display();
   }

   public function edit()
   {

	   	$data = I('post.');


    	$User = D("User"); // 实例化User对象

		if (!$User->create($data,2)){ // 指定新增数据
		     // 如果创建失败 表示验证没有通过 输出错误提示信息
		     $this->ajaxReturn(['error'=>1,'info'=>$User->getError()]);
		}else{

			// "select * from user where eamil='emil' and uid <> 8";

			$res = M('user')->where(['email'=>$data['email'],'uid'=>['neq',$data['uid']]])->select();

			if($res){
				$this->ajaxReturn(['error'=>1,'info'=>"邮箱已存在"]);
			}

			$res = M('user')->where(['nickname'=>$data['nickname'],'uid'=>['neq',$data['uid']]])->select();

			if($res){
				$this->ajaxReturn(['error'=>1,'info'=>"昵称已存在"]);
			}


			M('user')->where(['uid'=>$data['uid']])->save($data);
			// $_SESSION['nickname'] = $data['nickname'];
			$this->ajaxReturn(['error'=>0,'info'=>"修改成功"]);

			}











   }

}