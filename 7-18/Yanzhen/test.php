<?php 

include 'Verify.class.php';

$config =    array(
    'fontSize'    =>    40,    // 验证码字体大小
    'length'      =>    3,     // 验证码位数
    'useNoise'    =>    true, // 关闭验证码杂点
);

$Verify = new Verify($config);

$Verify->entry();

 ?>