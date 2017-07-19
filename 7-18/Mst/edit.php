<?php 
include './function.php';

$id = $_GET["id"];
$du = file_get_contents("./db.txt");
$du = json_decode($du,true);
$con = $du[$id];




include './tpl/gai.html';




 ?>

