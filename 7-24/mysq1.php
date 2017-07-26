<?php 
include '../function.php';

$src = @mysql_connect('127.0.0.1','root','');
if(!$src){
	exit("操作失败错误原因：".mysql_error()."错误代码：".mysql_errno());
}


 $res = mysql_select_db('cesi');
 mysql_query("set names utf8");

if(!$res){
	exit("操作失败错误原因：".mysql_error()."错误代码：".mysql_errno());
}

$sql="update stu set sex='女' where age>30";

// $sql = "update stu set age='30' where sid<19";
// 

$sql="insert into stu(name,age)values('大白白',80)";

// $sql = "insert into stu (name,age) values('大白菜',55)";
$sql="insert into stu(name,age)values('白花花',110)";


$sql="update stu set age='31' where sid>5";



$resa = mysql_query($sql);

if(!$resa){
	exit("操作失败错误原因：".mysql_error()."错误代码：".mysql_errno());
}




mysql_close();  




























 ?>