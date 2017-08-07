<?php 
namespace Home\Controller;
use Think\Controller;
class UserController extends CommonController {
		public function index(){
		
			
			$uid=$_SESSION['uid'];

			$data = "select t2.title,t2.qid,t2.answer_num,t2.view_num,t2.create_time from user t1 inner join question t2 on t1.uid=t2.uid where t1.uid='{$uid}'";


			$res="select count(qid) t1 from question where question.uid='{$uid}'";
	        
	        
	    	$Ucard = M()->query($data);

	    	$num = M()->query($res);
	    	$num = M()->query($res);
	    	$this->assign('title',"用户中心");
	    	$this->assign('num',$num);
	        $this->assign('Ucard',$Ucard );
			$this->display();

		}

		public function collection()
		{
			$res = $_SESSION['uid'];
			var_dump($res);
			// $this->assign('res',$res);
			$this->display('index');

		}

}

 ?>