<?php 
namespace Home\Controller;
use Think\Controller;
class UController extends CommonController {
	public function index()
	{	
		
		$uid = I('get.id');

		$user = M('user')->find($uid);
		if (!$user) {
			$this->error("该用户不存在",U('home/index/index'));
		}
		$this->assign('title',$user['nickname']."个人中心");
		$this->assign('user',$user);
		$this->display();
	}
}
 ?>