<?php 

$arr1 = array("a"=>"green","red","blue","red");
$arr2 = array("b"=>"green","yelow","red");




$er = json_encode($arr1);//加密
file_put_contents("./db.txt", $er);//写入文件

var_export($er);


// $quc = array_unique($arr1);
// array_unshift($arr2, "blue");
// 
// arsort($arr1);
// count($array1);//返回数组中元素的条数
// $dang = current($arr1);
// $dang = in_array("#fff",$arr1);
// 
// sort($arr1);
// foreach ($arr1 as $k => $v) {
// 	echo "$k = $v"."<br />";
// }


// $jian = key($arr1);






// var_dump($li);
// var_dump($dang);













//key();获取关联数组的键
//key()
//in_array()
//in_array()检测数组中是否唷存在的值


//arsort()数组降序排序
//arsort()
//array_unshift()
//array_unshift()在数组	开头插入一个或多个元素
//array_unshift()
// count()返回数组中元素的条数
// count()
//array_unique()数组去重
//array_unique()











// $chaji = array_diff($arr1, $arr2);

// array_keys($arr1);




// $hebin = array_merge($arr1,$arr2);
// array_pop($arr2);
// array_push($arr2, "#fff");
// $sui = array_rand($arr2,1);

// $suiti = array_replace($arr2, $arr1);
// $san = array_shift($arr1);
// 
// $jie = array_slice($arr1, 1,2,false);

// $jie = array_splice($arr1, 1);//删除数组中的其它项，并保留一项		




// var_dump($jie);






// array_pop(array)删除数组中最后一个元素
// array_pop()
// array_push()
// array_splice()
// array_splice()
// array_slice()
//array_slice()删除并返回删除值 
// 
// 
// 
// array_push()
// array_rend()获取数组中一个随机键
// array_replace()
// array_replace()
// 
// array_shift()
// array_shift()//删除数组第一个值
// 
// array_slice()截取数组中的一段，并返回截取的返回值
// array_slice()
// 
// 
// 
// 
// 
//array_rend()
// 
// 
// 
// 
// 
// 
// 
// 
// 
// 
// array_pop()
// array_merge(array1)//合并两个或多个数组
// array_merge(array1)

// array_keys(input)//返回数组中所有键值

// array_keys(input)

// array_diff(array1, array2)//计算数组的差级
// array_diff(array1, array2)















 ?>