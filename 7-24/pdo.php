<?php 


try {

$db = new PDO("mysql:host=127.0.0.1;dbname=cesi;charset=utf8","root","");
	
	$sql = "delete form stu where sid>19";
	$res = $db->exec($sql);



} catch (Exception $e) {
	echo "有错误：".$e;
}












 ?>