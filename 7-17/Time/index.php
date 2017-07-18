<?php 

include './Time.class.php';
include '../../function.php';
header("Content-type: image/png");	

$config = array('length'=>5);

$obj = new Code($config);

$obj->entry();





 ?>