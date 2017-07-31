<?php
namespace Home\Controller;
use Think\Controller;
class SetController extends Controller {
	//设置首页
    public function index(){

        // var_dump($_SERVER);
    	//获取登录用户的id
    	$uid = $_SESSION['uid'];

    	$user = M('user')->find($uid);

    	$this->assign('user',$user);
    	
        $this->display();
        
    }
    public function edit()
    {
    	$data = I('post.');

    	$User = D("User"); // 实例化User对象

		if (!$User->create($data,2)){ // 指定新增数据
		     // 如果创建失败 表示验证没有通过 输出错误提示信息
		     $this->ajaxReturn(['error'=>1,'info'=>$User->getError()]);
		}else{

			// "select * from user where eamil='emil' and uid <> 8";

			$res = M('user')->where(['email'=>$data['email'],'uid'=>['neq',$_SESSION['uid']]])->select();

			if($res){
				$this->ajaxReturn(['error'=>1,'info'=>"邮箱已存在"]);
			}

			$res = M('user')->where(['nickname'=>$data['nickname'],'uid'=>['neq',$_SESSION['uid']]])->select();

			if($res){
				$this->ajaxReturn(['error'=>1,'info'=>"昵称已存在"]);
			}


			M('user')->where(['uid'=>$_SESSION['uid']])->save($data);

			$_SESSION['nickname'] = $data['nickname'];

			$this->ajaxReturn(['error'=>0,'info'=>"修改成功"]);

		     // 验证通过 可以进行其他数据操作
		}
    }

    public function editpass()
    {
    	$data = I('post.');

    	$data['password'] = md5($data['password']);

    	M('user')->where(['uid'=>$_SESSION['uid']])->save($data);
    	$this->ajaxReturn(['error'=>0,'info'=>"修改成功"]);
    }
    public function upload()
    {
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize   =     3145728 ;// 设置附件上传大小
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath  =     './Uploads/'; // 设置附件上传根目录
        $upload->savePath  =     ''; // 设置附件上传（子）目录
        // 上传文件 
        $info   =   $upload->upload();
        if(!$info) {// 上传错误提示错误信息
            echo "失败";
        }else{// 上传成功
            // var_dump($info);
            $face = "Uploads/".$info['face']['savepath'].$info['face']['savename'];

            M('user')->where(['uid'=>$_SESSION['uid']])->save(['face'=>$face]);

            unlink($_SESSION['face']);

            $_SESSION['face'] =  $face;

           echo "成功"; 
            
        }
    }
}