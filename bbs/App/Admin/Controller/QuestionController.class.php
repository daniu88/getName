<?php
namespace Admin\Controller;
use Think\Controller;
class QuestionController extends Controller {
    public function index(){
    	$question = M('question')->select();
    	$this->assign('question',$question);
        $this->display();
    }

}