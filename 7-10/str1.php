<?php 

$tade = file_get_contents("./db.txt");//读取

// echo $tade;

$arr = json_decode($tade,true);//转数组
var_dump($arr);	





 ?>