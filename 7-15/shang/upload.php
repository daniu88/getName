<?php 

include '../../function.php';
include './Upload.class.php';


$upload = new Upload();

$res = $upload->save();

var_dump($res);










 ?>