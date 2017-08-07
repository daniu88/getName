<?php 
namespace Home\Controller;
use Think\Controller;
class CommonController extends Controller {

	public function _initialize()
	{
		$path = strtolower(MODULE_NAME."/".CONTROLLER_NAME."/".ACTION_NAME);
		if (in_array($path, C('AUTH_PATH'))) {
			if (!isset($_SESSION['uid'])) {
				if (IS_AJAX) {
					$this->ajaxReturn(['error'=>1,'info'=>'你还没有登陆,请先登陆']);
				}else{
					$this->error("你还没有登陆，请先登陆",U('home/login/index'));
				}
			}
		}
	}



}



 ?>