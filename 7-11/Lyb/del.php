<?php 

$id = $_GET['id'];
$du = file_get_contents("./db.txt");
$du = json_decode($du,true);

unset($du[$id]);

file_put_contents("./db.txt", json_encode(
	$du));
header("Location:./index.php");

 ?>