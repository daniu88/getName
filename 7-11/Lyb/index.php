<?php 
include './function.php';

$db = file_get_contents("./db.txt");

$db = json_decode($db,true);

include './Tpl/index.html';








 ?>