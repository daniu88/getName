<?php 

include './function.php';
// var_dump($_POST);
$cont = ($_POST);
$cont['ctime'] = time();

$cont[] = $cont;
// json_encode($cont);
file_put_contents("./db.txt",$cont);//写入









 ?>