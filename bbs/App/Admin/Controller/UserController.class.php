<?php
namespace Admin\Controller;
use Think\Controller;
class UserController extends Controller {
    public function index(){
    	$user = M('user')->select();

        $tot = "select count('id') tot from user";
        $tot = M()->query($tot);
        $this->assign('tot',$tot);
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


    public function status()
    {
        $uid = I('post.uid');
        $user = M('user')->find($uid);

        if ($user['status']==0) {

           M('user')->where(['uid'=>$uid])->save(['status'=>'1']); 
           $this->ajaxReturn(['error'=>0,'info'=>"已停用"]);
        }else{
           M('user')->where(['uid'=>$uid])->save(['status'=>'0']); 
           $this->ajaxReturn(['error'=>1,'info'=>"已启用"]); 
        }
    }

    public function deleAll()
    {
        $uids = I('post.uids');
        $uids = rtrim($uids,',');
        $sql = "update user set status='1' where uid in($uids)";

        // var_dump($sql);exit();
        M()->execute($sql);
        $this->ajaxReturn(['error'=>0,'info'=>"批量删除成功"]);
    }




    public function del()
    {
        $del = M('user')->where(['status'=>'1'])->select();

        $this->assign('del',$del);
        $this->display('del');
    }

    public function dele()
    {
        $uid = I('post.uid');

        $user = M('user')->find($uid);

        if ($user['status']==1) {

           M('user')->where(['uid'=>$uid])->save(['status'=>'0']); 
           $this->ajaxReturn(['error'=>0,'info'=>"已启用"]);
        }


    }





    public function admin_list()//管理员列表
    {
        $this->display('admin_list');
    }

    public function admin_role()//角色管理
    {
        $this->display('admin_role');
    }

    public function admin_cate()//权限分类
    {
        $this->display('admin_cate');
    }


    public function admin_rule()//权限管理
    {


        $this->display('admin_rule');
    }


}