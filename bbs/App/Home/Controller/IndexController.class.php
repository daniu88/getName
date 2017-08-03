<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	 $hotQues = M('question')->field('qid,title,answer_num')->order('answer_num desc')->limit(10)->select();
        $this->assign('hotQues',$hotQues);
        $this->display();
    }
}