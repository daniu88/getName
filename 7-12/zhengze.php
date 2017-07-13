<?php 


// $ttr = "/^[a-z]/";





include '../function.php';

$aa = "19355_56454545445.46@qq.com";

// $emlle = "/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/";




















	$str = "http://www.baidu.com不新浪网http://www.sina.com";
	$preg = "/\.(baidu|sina)\./";
	$new_str = preg_replace($preg,'.xuebingsiwang.',$str);
	// var_dump($new_str);
	// echo $new_str;

  








$emlle = "/^([0-9a-zA-Z])+([0-9A-Za-z\-\_\.])+@([0-9A-Za-z\-\_\.])+\.([a-zA-Z]{2,4})$/";


$wsfz = "500240199404105775";

$sfz = "/^[1-9]\d{5}[1-9]\d{3}((0\d)|(1[0-2]))(([0|1|2]\d)|3[0-1])\d{4}$/";






















$res = preg_match($sfz, $wsfz);
var_dump($res);

// $res = preg_match($emlle,$aa);
// var_dump($res);



$str = "学并思官网www.xuebingsiwang.com学并思论坛  http://bbs.xuebingsiwang.com我在学并思的网名叫xuebingsi";

$preg = "/(xuebingsi)wang/";

$newStr= preg_replace($preg,"<span  style='color:#f00'>$1</span>wang",$str);
	// echo $newStr;
	// 
	$str = "学并思官网www.xuebingsiwang.com学并思论坛  http://bbs.xuebingsiwang.com我在学并思的网名叫xuebingsi";

$preg = "/(xuebingsi)wang/";

$newStr= preg_match_all($preg, $str, $out);


// var_dump($out);


preg_match_all("|<[^>]+>(.*)</[^>]+>|U",
    "<b>example: </b><div align=left>this is a test</div>",
    $out, PREG_PATTERN_ORDER);
echo $out[0][0] . ", " . $out[0][1] . "\n";
echo $out[1][0] . ", " . $out[1][1] . "\n";




















 ?>