<?php 

namespace Admin\Model;
use Think\Model;
class AuthCateModel extends Model{

protected $_validate = array(
	array('cname','','分类已存在',1,'unique',1),
   	array('cname','4,12','分类长度不符',1,'length',1),
   	array('cname','/^[\x{4e00}-\x{9fa5}]{4,12}$/u','分类名必须是中文',1,'regex',1),
         
   );


}