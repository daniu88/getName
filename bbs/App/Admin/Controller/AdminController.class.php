<?php
namespace Admin\Controller;
use Think\Controller;
class AdminController extends CommonController {
    public function index(){  //管理员列表下·下·下·
    	$sql = "select t1.*,t3.title from admin t1 left join auth_group_access t2 on t1.aid=t2.uid left join auth_group t3 on t2.group_id=t3.id";

    	$data = M()->query($sql);
    	// var_dump($data);
    	$this->assign('adminadd',$data);

    	$this->display();

    }

    public function addadmin()
    {

    	$cates = M('auth_group')->select();





    	$this->assign('group',$cates);
    	$this->display();
    }


    public function admindata()
    {
    	$data=I('post.');

    	$data['password']=md5($data['password']);
    	$data['create_time']=time();
    	$uid=M('admin')->add($data);
    	$groupData['uid']=$uid;
    	$groupData['group_id']=$data['group_id'];
    	$res = M('auth_group_access')->add($groupData);

    	if ($res) {
    		$this->ajaxReturn(['error'=>0,'info'=>"新增成功"]);
    	}else{
    		$this->ajaxReturn(['error'=>1,'info'=>"新增失败"]);
    	}


    }




    public function admin_role()//角色管理
    {


    	$cates = M('auth_group')->select();

    	foreach ($cates as $k => $row) {

    		$rules = $row['rules'];

    		
    		$sql = "select title name from auth_rule where id in ($rules) limit 4";



    		$data = M()->query($sql);


    		
    		$rulesname= [];

    		foreach ($data as $rule) {
    			$rulesname[]=$rule['name'];
    		}

    		$cates[$k]['rulename']=implode(',',$rulesname);
    	}
    	

    	$this->assign('user',$cates);
        $this->display();
    }

    public function addrole()
    {
    	
    	$rules = M('auth_rule t1')->field("t1.*,t2.cname")->join('left join auth_cate t2 on t1.cid=t2.cid')->select();
    	$tempArr = array();
    	foreach ($rules as $row) {
    		$tempArr[$row['cname']][] = $row;
    	}

    	$this->assign('rules',$tempArr);

    	$this->display();

    }

    public function adddata()
    {
    	$data = I('post.');
    	$data['rules'] = implode(',', $data['rules']);
    	$res = M('auth_group')->add($data);
    	if ($res) {
    		$this->ajaxReturn(['error'=>0,'info'=>"添加权限成功"]);
    	}else{
    		$this->ajaxReturn(['error'=>1,'info'=>"添加权限失败"]);
    	}
    }



    public function admin_cate()//权限分类
    {
    	$cates = M('auth_cate')->select();
    	$this->assign('cate',$cates);
        $this->display();
    }

    public function addcate()
    {
    	$data = I('post.');

    	$Cate = D("AuthCate"); 

    	if (!$Cate->create($data,1)){
		     // 对data数据进行验证
		     $this->ajaxReturn(['error'=>1,'info'=>$Cate->getError()]);
		}else{
		     // 验证通过 可以进行其他数据操作
			// $res = M('auth_cate')->select();
			$res = M('auth_cate')->where(['cname'=>$data['cname']])->select();

			if($res){
				$this->ajaxReturn(['error'=>1,'info'=>"分类名已存在"]);
			}

			M('auth_cate')->add($data);

			$this->ajaxReturn(['error'=>0,'info'=>"修改成功"]);

		}


    }


    public function admin_rule()//权限管理
    {

    	$rules = M('auth_rule t1')->field("t1.*,t2.cname")->join('left join auth_cate t2 on t1.cid=t2.cid')->select();
    	 
    	$cates = M('auth_cate')->select();
    	$this->assign('rules',$rules);
    	$this->assign('cate',$cates);
        $this->display('admin_rule');
    }


    public function addrule()
    {
    	$data = I('post.');

			$res = M('auth_rule')->where(['name'=>$data['name']])->select();

			// var_dump($res);exit;
			if($res){
				$this->ajaxReturn(['error'=>1,'info'=>"该规则已存在"]);
			}

			M('auth_rule')->add($data);

			$this->ajaxReturn(['error'=>0,'info'=>"添加成功"]);

		
    }

    public function wedit()
    {
    	$cid = I('get.cid');
    	$cates = M('auth_cate')->where(['cid'=>$cid])->find();

        $data = M('auth_cate')->select();
        $this->assign('data',$data);
    	$this->assign('cate',$cates);
    	$this->display();
    }


    public function savee()
    {
        $data = I('post.');
        $cid = $data['cid'];
        $cname = $data['cname'];

       $row = M('auth_cate')->where(['cname'=>$cname])->find();
        if ($row) {
            $this->ajaxReturn(['error'=>1,'info'=>"分类名已存在，请重新填写"]);
        }else{
            
            $yes = M('auth_cate')->where(['cid'=>$cid])->save(['cname'=>$cname]);
            if ($yes) {
                $this->ajaxReturn(['error'=>0,'info'=>"添加分类成功"]);
            }
        }
    }

    public function leidel()
    {
        $row = I('post.cid');
        // var_dump($row);
        $yes = M('auth_cate')->where(['cid'=>$row])->delete();
        if (!$yes) {
            $this->ajaxReturn(['error'=>1,'info'=>"删除分类失败"]);
        }else{
            $this->ajaxReturn(['error'=>0,'info'=>"删除分类成功"]);
        }
        
    }

    public function deleAll()
    {
        $data = I('post.uids');
        $id = rtrim($data,',');

        M('auth_rule')->delete($id);
        $this->ajaxReturn(['error'=>0,'info'=>"删除成功"]);
    }

    public function rolEedit()
    {
        $id = I('get.id');

        $one = M('auth_group')->where(['id'=>$id])->find();

        $this->assign('user',$one);


        $rules = M('auth_rule t1')->field("t1.*,t2.cname")->join('left join auth_cate t2 on t1.cid=t2.cid')->select();

        $tempArr = array();
        
        foreach ($rules as $row) {
            $tempArr[$row['cname']][] = $row;
        }

        $this->assign('rules',$tempArr);

        $this->display();
    }

    public function deleDel()
    {
        $data = I('post.uids');
        $id = rtrim($data,',');

        M('auth_group')->delete($id);
        $this->ajaxReturn(['error'=>0,'info'=>"删除成功"]);
    }


    public function status()
        {
            $uid = I('post.uid');
            // var_dump($uid);exit();
            $user = M('admin')->find($uid);
            // var_dump($user);exit();

            if ($user['status']==0) {

               M('admin')->where(['aid'=>$uid])->save(['status'=>'1']); 
               $this->ajaxReturn(['error'=>0,'info'=>"已停用"]);
            }else{
               M('admin')->where(['aid'=>$uid])->save(['status'=>'0']); 
               $this->ajaxReturn(['error'=>1,'info'=>"已启用"]); 
            }
        }


        public function deleAll33()
        {
            $uids = I('post.uids');
            $uids = rtrim($uids,',');
            $sql = M('admin')->where(['aid'=>$uids])->delete();
            if ($sql) {
                $this->ajaxReturn(['error'=>0,'info'=>"批量删除成功"]);
            }
           
        }


}

?>