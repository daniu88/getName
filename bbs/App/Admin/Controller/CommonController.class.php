<?php 
namespace Admin\Controller;
use Think\Controller;
use Think\Auth;
class CommonController extends Controller {

	public function _initialize()
	{
		$path = strtolower(MODULE_NAME."/".CONTROLLER_NAME."/".ACTION_NAME);
		
		$auth=new Auth();  

		// if (!$auth->check($path,$_SESSION['aid'])) {
		// 	$this->error("你没有权限访问该页面,请联系管理员开通权限",U('admin/index/welcome'));
		// }

		
	}



}



 ?>