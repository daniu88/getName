<?php 

namespace Home\Model;
use Think\Model;
class UserModel extends Model{
   protected $_validate = array(
   	array('email','require','邮箱码必须',1,'',1),
   	array('email','email','邮箱格式不正确！',1,'',1),
   	array('email','','邮箱已存在',0,'unique',1),

   	array('nickname','require','昵称必须！',1,'',1),
   	array('nickname',"/^[A-z0-9]{6,8}$/",'昵称长度不条例',1,'regex',1),
   	array('nickname','','昵称已经存在！',1,'unique',1),

   	array('repassword','password','确认密码不正确',0,'confirm',1),
   	array('password',"/^[A-z0-9]{6,8}$/",'密码长度不条例',1,'regex',1),

      array('email','require','邮箱码必须',1,'',2),
      array('email','email','邮箱格式不正确！',1,'',2),

      array('nickname',"/^[A-z0-9]{6,8}$/",'昵称长度不条例',1,'regex',2),
      array('nickname','require','昵称必须！',1,'',2),

      array('repassword','password','确认密码不正确',0,'confirm',3),
      array('password',"/^[A-z0-9]{6,8}$/",'密码长度不条例',1,'regex',3),
         
   );
}

 ?>