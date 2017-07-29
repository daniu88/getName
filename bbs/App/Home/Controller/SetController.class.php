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

	}

?>