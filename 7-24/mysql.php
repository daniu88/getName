<?php 

include '../function.php';

$src = @mysql_connect('127.0.0.1','root','');
//链接sql判断
if (!$src) {
	exit("操作失败啦！原因：".mysql_error()."错误代码有：".mysql_errno());
}

$res = mysql_select_db('cesi');

mysql_query("set names utf8");
//链接库判断
if (!$res) {
	exit("操作失败啦！原因：".mysql_error()."错误代码有：".mysql_errno());
}




// $sql = "insert into stu (name,age)values('小明明',25) ";
// mysql_query($sql);




// for ($i=0; $i < 200; $i++) { 
// 	$sql = "insert into stu (name,age)values('小明明1".$i."',25) ";
// 	mysql_query($sql);

// }












$sql = "update stu set age='30' where sid<19";

// $sql = "delete from stu where sid>19";

$sql = "delete from stu where sid>19";


$sql = "select * from stu where age=30 and sex='男'";


$res = mysql_query($sql);

if (!$res) {
	exit("操作失败啦！原因：".mysql_error()."错误代码有：".mysql_errno());
}


// var_dump(mysql_fetch_row($res));

$tempArr=array();

while ($row=mysql_fetch_assoc($res)) {
	$tempArr[]=$row;
}


// var_dump($tempArr);








$sql = "insert into stu (name,age) values('大白菜',55)";

mysql_query($sql);

$id = mysql_insert_id();

var_dump($id);exit;











 ?>