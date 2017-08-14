<?php
namespace Admin\Controller;
use Think\Controller;
class QuestionController extends Controller {
    public function index(){
    	$sql = "select t1.*,t2.nickname,t3.cname from question t1 inner join user t2 on t1.uid=t2.uid inner join category t3 on t1.cid=t3.cid where t1.dele='0'";
    	$question = M()->query($sql);
    	$this->assign('question',$question);
        $this->display();
    }

    public function editl()
    {
  		// 分类
        $category = M('category')->select();
        $tempArr=array();
        foreach ($category as $row) {
            if ($row['fid']==0) {
                $tempArr[]=$row;
            }
        }
        foreach ($category as $key => $father) {
            foreach ($category as $son) {
                if ($son['fid']==$father['cid']) {
                    $tempArr[$key]['son'][]=$son;
                }
            }
        }

       $qid=I('get.id');
       // var_dump($qid);exit();

        $sql = "select * from  question where qid = ".$qid;
        $sql = M('question')->query($sql);
        // var_dump($sql);
        $this->assign('edit',$sql);

        $this->assign("category",$tempArr);
        $this->assign('title',"编辑帖子");
        $this->assign("question",$question);
        $this->display('edit');
    }

    public function ajaxedit()
    {
        $row = I('post.');
        $User = D("Question"); // 实例化User对象
        if (!$User->create($row,5)){ // 指定新增数据
             // 如果创建失败 表示验证没有通过 输出错误提示信息
             $this->ajaxReturn(['error'=>1,'info'=>$User->getError()]);
        }else{
             // 验证通过 可以进行其他数据操作
             M('question')->where(['qid'=>$row['qid']])->save($row);
            $this->ajaxReturn(['error'=>0,'info'=>'发布成功','url'=>U('admin/question/editl',array('id'=>$row['qid']))]);

        }
    }

    //问题表展示部分
    public function delel()
    {
        $qid = I('post.qid');
        // var_dump($qid);exit();
        $question = M('question')->where(['qid'=>$qid])->find();

        if ($question['dele']==0) {

            M('question')->where(['qid'=>$qid])->save(['dele'=>'1']);
           
            $this->ajaxReturn(['error'=>0,'info'=>"问题已隐藏"]);
        };

    }


    //彻底删除表展示部分

    public function dele()
    {
        $sql = "select t1.*,t2.nickname,t3.cname from question t1 inner join user t2 on t1.uid=t2.uid inner join category t3 on t1.cid=t3.cid where t1.dele='1'";
        $question = M()->query($sql);

        $this->assign('question',$question);
        $this->display('dele');
    }


    public function recover()
    {
        $qid = I('post.qid');

        $recover = M('question')->where(['qid'=>$qid])->find();

        if ($recover['dele']==1) {

            M('question')->where(['qid'=>$qid])->save(['dele'=>'0']);
           
            $this->ajaxReturn(['error'=>1,'info'=>"问题已恢复正常显示"]);
        };
    }

    public function qdel()
    {
        $qid = I('post.qid');
        $qdel = M('question')->where(['qid'=>$qid])->find();

        if ($qdel['dele']==1) {

            M('question')->where(['qid'=>$qid])->delete();
           
            $this->ajaxReturn(['error'=>0,'info'=>"问题已彻底删除"]);
        };
    }

    public function deleAll()
    {
        $uids = I('post.uids');
        $uids = rtrim($uids,',');
        // $sql = "delete form question where uid in(".$uids.")";
        M('question')->delete($uids);
        $this->ajaxReturn(['error'=>0,'info'=>"批量删除成功"]);
    }

    public function deleAll3()
    {
        $uids = I('post.uids');
        $uids = rtrim($uids,',');
        $sql = "update question set dele='1' where qid in($uids)";

        // var_dump($sql);exit();
        M()->execute($sql);
        
        $this->ajaxReturn(['error'=>0,'info'=>"批量删除成功"]);
    }

    public function category()
    {
        $this->display('category');
    }

}


