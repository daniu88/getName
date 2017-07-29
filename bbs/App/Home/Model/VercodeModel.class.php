<?php 
namespace Home\Model;
use Think\Model;
class VercodeModel extends Model {
	public function getOne()
	{
		//数据库随机order by函数 
    	$question = M()-> query("select * from vercode order by rand() limit 1");
    	// var_dump($question);
    	
    	$_SESSION['answer']=current($question)['answer'];

    	return current($question)['question'];

    	
	}

    public function checkCode($answer)
    {
        if($answer==$_SESSION['answer']){
            return true;
        }else{
            return false;
        }
    }

}


















 ?>