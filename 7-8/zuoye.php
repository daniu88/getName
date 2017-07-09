<?php 
include './function.php';

// 作业：
// 封装一函数，传一个时间戳
// 一分钟之内，多少秒之前
// 一个小时内，多少分钟之前
// 一天之内，多个小时之前
// 7天之内，几天前
// 超过7天，输出一个具体的时间



function wordTime($time) {
        // $time = (int) substr($time, 0, 10);
        $int = time() - $time;
        $str = '';
        if ($int <= 2){
            $str = sprintf('刚刚', $int);
        }elseif ($int < 60){
            $str = sprintf('%d秒前', $int);
        }elseif ($int < 3600){
            $str = sprintf('%d分钟前', floor($int / 60));
        }elseif ($int < 86400){
            $str = sprintf('%d小时前', floor($int / 3600));
        }elseif ($int < 2592000){
            $str = sprintf('%d天前', floor($int / 86400));
        }else{
            $str = date('Y-m-d H:i:s', $time);
        }
        return $str;
    }



$run = wordTime(1499503082);

echo $run;















// function shijian($tt){
// 	$time=strtotime($tt);
// 	$t1='';
// 	$t=time()-$time;
// 	if($t<60){
// 		echo $t1=floor($t)."秒之前";
// 	}elseif($t<3600){
// 		echo $t1=floor($t/60)."分之前";
// 	}elseif($t<86400){
// 		echo $t1=floor($t/3600)."小时之前2";
// 	}elseif($t<604800){
// 		echo $t1=floor($t/86400)."天前";
// 	}else{
// 		echo $t1=floor($t/604800)."之前";
// 	}
	

// }

// shijian('2017-07-05 16:08:00');


 ?>