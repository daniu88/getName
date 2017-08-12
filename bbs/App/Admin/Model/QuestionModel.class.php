<?php 

namespace Admin\Model;
use Think\Model;
class QuestionModel extends Model{
   protected $_validate = array(

      array('title','5,100','标题长度不符！',1,'length',5), 


         
   );
}

 ?>