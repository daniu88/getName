<?php 

namespace Home\Controller;
use Think\Controller;
class SetController extends Controller {
		public function index(){
			$uid = $_SESSION['uid'];
	    	$user = M('user')->find($uid);
	    	//模板赋值
	    	$this->assign('user',$user);
			$this->display();
		}

		public function checkdata()
		{
			$res = I('post.');
			$uid = $_SESSION['uid'];
			$data = M('user')->find($uid);
			$this->assign('user',$data);
			
	    	$User = D("User"); // 实例化User对象
			if (!$User->create($res,2)){ // 指定新增数据
			     $this->ajaxReturn(['error'=>1,'info'=>$User->getError()]);
			     
			}else{
				$res=M('user')->where(['email'=>$data['email'],'uid'=>['neq',$uid]])->select();
				if ($res) {
					$this->ajaxReturn(['error'=>1,'info'=>'已存在该邮箱']);
				}

				$res=M('user')->where(['nickname'=>$data['nickname'],'uid'=>['neq',$uid]])->select();
				if ($res) {
					$this->ajaxReturn(['error'=>1,'info'=>'已存在该邮箱']);
				}

				$res = I('post.');
				$uid = $_SESSION['uid'];
				$res=M('user')->where(['uid'=>$_SESSION['uid']])->save($data);
			
				if ($res) {
					$this->ajaxReturn(['error'=>0,'info'=>'修改成功']);
				}else{
					$this->ajaxReturn(['error'=>1,'info'=>'你还未修改']);
				}
			}
		}

	}

?>