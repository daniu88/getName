<?php 



$lao = 	file_get_contents("./db.txt");
$lao = 	json_decode($lao,true);
$time = $_POST;
$time['ctime'] = time();

$lao[] = $time;

// $lao['id_username']=
file_put_contents("./db.txt", json_encode($lao));

header("Location:./index.php");








 ?>