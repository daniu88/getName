<?php
namespace Admin\Controller;
use Think\Controller;
class UserController extends Controller {
    public function index(){
    	$user = M('user')->select();
    	$this->assign('user',$user);
        $this->display();
    }

    public function Member()
    {

    	$uid = I('get.uid');
    	$user = M('user')->where(['uid'=>$uid])->find();
    	$this->assign('user',$user);
    	$this->display('Member');
    }

    public function Add()
    {   
        $this->display('add');
    }

    public function Zadd()
    {
        $data = I('post.');
        $User = D("User"); 

        if (!$User->create($data,1)){ 
             $this->ajaxReturn(['error'=>1,'info'=>$User->getError()]);
        }else{
            
            $data['create_time'] = time();
            $data['password'] = md5($data['password']);

            $faces = ['Public/images/face1.jpg','Public/images/face.jpg','Public/images/face2.jpg'];

            $data['face'] = $faces[array_rand($faces)];

            if(M('user')->add($data)){
                $this->ajaxReturn(['error'=>0,'info'=>"添加成功"]);
            }else{
                $this->ajaxReturn(['error'=>1,'info'=>"添加失败"]);
            }
        }
    }
}