<?php 
include '../../function.php';
include './Upload.class.php';
$config = array(
	'path'=>'./Text',
	'exts'=>['txt']
	);
	
	$upload = new Upload($config);


	$res = $upload->save();

	var_dump($res);









  ?>