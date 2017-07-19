<?php


session_start();

// 引入自己封装的函数库
include './function.php';

//读取文件中的字符串
$db = file_get_contents('./Db/db.txt');
//转json为数组
$db = json_decode($db,true);

// 计算总数据量
$count = count($db);

// var_dump($db);exit;
//一页多少条
$row = 5;
//一共多少页
$num = ceil($count/$row);
//接第几页，默认第1页
$p = isset($_GET['p']) ? $_GET['p'] : 1;
//通过当前页截取数据中的一部分
$list = array_slice($db, ($p-1)*$row,$row);

// var_dump($count,$num,$p,$list);


// exit;

// 引模板
include './Tpl/index.html';
 ?>