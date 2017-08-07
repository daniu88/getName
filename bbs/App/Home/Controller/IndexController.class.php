<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends CommonController{
    public function index(){
    	 $hotQues = M('question')->field('qid,title,answer_num')->order('answer_num desc')->limit(10)->select();
        $this->assign('hotQues',$hotQues);

        $hotuser = M('user')->field('face,nickname,uid,answer_num')->order("answer_num desc")->limit(12)->select();
       

         $this->assign('hotuser',$hotuser);

         $sql="select t1.*,t2.nickname,t2.face,t3.cname  from question t1 inner join user t2 on t1.uid=t2.uid inner join category t3 on t1.cid=t3.cid where t1.top='1'";

         $topQues=M()->query($sql);

         $this->assign('topQues',$topQues);


         $sql="select t1.*,t2.nickname,t2.face,t3.cname  from question t1 inner join user t2 on t1.uid=t2.uid inner join category t3 on t1.cid=t3.cid where t1.top<>'1' order by create_time desc limit 6 ";

         $question=M()->query($sql);
         $this->assign('title',"一个解决老司机对象的论坛");

         $this->assign('question',$question);




        $this->display();
    }

    public function all()
    {

    	 $sql="select t1.*,t2.nickname,t2.face,t3.cname  from question t1 inner join user t2 on t1.uid=t2.uid inner join category t3 on t1.cid=t3.cid where t1.top='1'";

         $topQues=M()->query($sql);

         $this->assign('topQues',$topQues);




		$count      = M('question')->where('top<>1')->count();// 查询满足要求的总记录数
		$Page       = new \Think\Page($count,6);// 实例化分页类 传入总记录数和每页显示的记录数(25)
		$show       = $Page->show();// 分页显示输出
	

         $sql="select t1.*,t2.nickname,t2.face,t3.cname  from question t1 inner join user t2 on t1.uid=t2.uid inner join category t3 on t1.cid=t3.cid where t1.top<>'1' order by create_time desc limit ".$Page->firstRow.",".$Page->listRows;

         $question=M()->query($sql);

         $this->assign('title',"全部帖子");

         $this->assign('question',$question);

         $this->assign('page',$show);// 赋值分页输出

    	 $this->display();
    }

    public function unsolved()
    {

    	$sql="select t1.*,t2.nickname,t2.face,t3.cname  from question t1 inner join user t2 on t1.uid=t2.uid inner join category t3 on t1.cid=t3.cid where t1.top='1'";

         $topQues=M()->query($sql);

         $this->assign('topQues',$topQues);



    	$count      = M('question')->where("question.status='未结贴'")->count();// 查询满足要求的总记录数

    	// var_dump($count);exit();
		$Page       = new \Think\Page($count,6);// 实例化分页类 传入总记录数和每页显示的记录数(25)
		$show       = $Page->show();// 分页显示输出
		

    	$sql="select t1.*,t2.nickname,t2.face,t3.cname  from question t1 inner join user t2 on t1.uid=t2.uid inner join category t3 on t1.cid=t3.cid where t1.top<>'1' and t1.status='未结贴' order by create_time desc limit ".$Page->firstRow.",".$Page->listRows;

    	// var_dump($sql);exit();


    	$question=M()->query($sql);

        $this->assign('title',"未结贴");
    	
         $this->assign('question',$question);

         $this->assign('page',$show);
    	$this->display('all');
    }

    public function solved()
    {
    	$sql="select t1.*,t2.nickname,t2.face,t3.cname  from question t1 inner join user t2 on t1.uid=t2.uid inner join category t3 on t1.cid=t3.cid where t1.top='1'";

         $topQues=M()->query($sql);

         $this->assign('topQues',$topQues);



    	$count      = M('question')->where("question.status='已采纳'")->count();// 查询满足要求的总记录数

    	// var_dump($count);exit();
		$Page       = new \Think\Page($count,6);// 实例化分页类 传入总记录数和每页显示的记录数(25)
		$show       = $Page->show();// 分页显示输出
		

    	$sql="select t1.*,t2.nickname,t2.face,t3.cname  from question t1 inner join user t2 on t1.uid=t2.uid inner join category t3 on t1.cid=t3.cid where t1.top<>'1' and t1.status='已采纳' order by create_time desc limit ".$Page->firstRow.",".$Page->listRows;

    	// var_dump($sql);exit();


    	$question=M()->query($sql);

    	$this->assign('title',"已采纳的帖子");
         $this->assign('question',$question);

         $this->assign('page',$show);
    	$this->display('all');
    }


    public function Wonderful()
    {
    	$sql="select t1.*,t2.nickname,t2.face,t3.cname  from question t1 inner join user t2 on t1.uid=t2.uid inner join category t3 on t1.cid=t3.cid where t1.top='1'";

         $topQues=M()->query($sql);

         $this->assign('topQues',$topQues);



    	$count      = M('question')->where("question.top='2'")->count();// 查询满足要求的总记录数

    	// var_dump($count);exit();
		$Page       = new \Think\Page($count,6);// 实例化分页类 传入总记录数和每页显示的记录数(25)
		$show       = $Page->show();// 分页显示输出
		

    	$sql="select t1.*,t2.nickname,t2.face,t3.cname  from question t1 inner join user t2 on t1.uid=t2.uid inner join category t3 on t1.cid=t3.cid where t1.top<>'1' and t1.top='2' order by create_time desc limit ".$Page->firstRow.",".$Page->listRows;

    	// var_dump($sql);exit();


    	$question=M()->query($sql);

        $this->assign('title',"精华帖子");    	
         $this->assign('question',$question);

         $this->assign('page',$show);
    	$this->display('all');
    }

}