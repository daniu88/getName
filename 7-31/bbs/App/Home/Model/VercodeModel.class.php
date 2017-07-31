<?php 
namespace Home\Model;
use Think\Model;
class VercodeModel extends Model {

	public function getOne()
	{
		$row = M()->query("select * from vercode order by rand() limit 1");

		$row = current($row);

		$_SESSION['answer'] = $row['answer'];

		return $row['question'];
	}

	public function checkCode($code)
	{
		if($_SESSION['answer']==$code){
			return true;
		}else{
			return false;
		}
	}
}
 ?>