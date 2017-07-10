<?php 


$id = $_GET["id"];
$du = file_get_contents("./db.txt");
$du = json_decode($du,true);
array_splice($du,$id,1) ;
$du = file_get_contents("./db.txt");
$du = json_decode($du,true);
// $kk = file_get_contents("./db.txt");






 ?>