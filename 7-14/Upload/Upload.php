<?php 

include './Upload.class.php';

$config = array(
	'path'=>'./xbs',
	'exts'=>['txt'],
	'maxsize'=>5000
	);

$upload = new Upload($config);

$upload->save();


 ?>