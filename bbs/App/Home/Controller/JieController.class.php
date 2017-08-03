<?php
namespace Home\Controller;
use Think\Controller;
class JieController extends Controller {
    public function index(){


    	$qid = I('get.id');

        //文章输出
        M('question')->where(['qid'=>$qid])->setInc('view_num');
    	$sql = "select t1.*,t2.nickname,t2.face from question t1 left join user t2 on t1.uid=t2.uid where t1.qid='{$qid}'";
        $question = M()->query($sql);



        $huida = "select t1.*,t2.nickname,t2.face from answer t1 left join user t2 on t1.uid=t2.uid where t1.qid='{$qid}'";
        // var_dump($huida);
    	$answer = M()->query($huida);
        
        $this->assign('answer',$answer);
        // var_dump($answer );


        //热议
        $hotQues = M('question')->field('qid,title,answer_num')->order('answer_num desc')->limit(10)->select();
        $this->assign('hotQues',$hotQues);
    	// var_dump($question);
    	// var_dump($sql);
    	$this->assign('question',current($question));
        $this->display();
    }

    public function add()
    {

        //验证码
    	$question = D("vercode")->getOne();
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


    	$this->assign("category",$tempArr);

    	$this->assign("question",$question);
    	$this->display();
    }

    public function ajaxadd()
    {
        //接编辑的内容
    	$data = I('post.');

        //D一下类，执行一下chekcode方法检测
    	$res=D('vercode')->checkCode($data['vercode']);

    	if (!$res) {
    		$this->ajaxReturn(['error'=>1,"info"=>"人类验证不通过！"]);
    	}

    	$data['uid']=$_SESSION['uid'];
    	$data['create_time']=time();
    	$qid = M('question')->add($data);
    	
    	$this->ajaxReturn(['error'=>0,'info'=>'发布成功','url'=>U('home/jie/index',array('id'=>$qid))]);
    }


    public function upload()
    {
    	 	$upload = new \Think\Upload();// 实例化上传类
			    $upload->maxSize   =     3145728 ;// 设置附件上传大小
			    $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
			    $upload->rootPath  =     './Uploads/Pic/'; // 设置附件上传根目录
			    $upload->savePath  =     ''; // 设置附件上传（子）目录
			    // 上传文件 
			    $info   =   $upload->upload();
			    if(!$info) {// 上传错误提示错误信息
			    	 echo "失败";
			        // $this->error($upload->getError());
			    }else{// 上传成功
			    	// var_dump($info);
			       $face = __ROOT__."/Uploads/pic/".$info['file']['savepath'].$info['file']['savename'];

		            $arr = array(
		            	'code'=>0,
		            	'msg'=>'成功',
		            	'data'=>array(
		            		'src'=>$face,
		            		'title'=>'图片名称'
		            		)
		            	);
		            echo json_encode($arr);    
			    
		}
    }


    public function reply()
    {
        $data = I('post.');
        $data['uid'] = $_SESSION['uid'];
        $data['create_time']=time();
        $hid = M('answer')->add($data);


       $this->ajaxReturn(['error'=>0,'info'=>'评论成功','url'=>U('home/jie/index',array('id'=>$qid))]);





    }


    public function ping()
    {
        $upload = new \Think\Upload();// 实例化上传类
                $upload->maxSize   =     3145728 ;// 设置附件上传大小
                $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
                $upload->rootPath  =     './Uploads/Ping/'; // 设置附件上传根目录
                $upload->savePath  =     ''; // 设置附件上传（子）目录
                // 上传文件 
                $info   =   $upload->upload();
                if(!$info) {// 上传错误提示错误信息
                     echo "失败";
                    // $this->error($upload->getError());
                }else{// 上传成功
                    // var_dump($info);
                   $face = __ROOT__."/Uploads/Ping/".$info['file']['savepath'].$info['file']['savename'];
                   //返回json
                    $arr = array(
                        'code'=>0,
                        'msg'=>'成功',
                        'data'=>array(
                            'src'=>$face,
                            'title'=>'图片名称'
                            )
                        );
                    echo json_encode($arr);    
                
        }
    }

}



?>	