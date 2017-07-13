<?php 

$du = file_get_contents("./db.txt");
$du =json_decode($du,true);

$date = $_POST;
$date['ctime'] = time();

$du[] = $date;
var_dump($date);
file_put_contents("./db.txt",json_encode($du)); //put放

header ("Location:./index.php");

 ?>