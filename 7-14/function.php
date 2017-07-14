<?php 
header("Content-type: text/html; charset=utf-8");
/**
 * [tim 时间格式转换]
 * @Author   Yuian
 * @DateTime 2017-07-13T11:46:29+0800
 * @param    [时间戳]      $num [description]
 * @return   [需要转的时间戳]  [description]
 */
function tim($num){
	$int = time()-$num;
	$ths = '';
	if ($int < 60) {
		$ths = floor($int)."秒之前";
	}elseif ($int<3600) {
		$ths = floor($int/60)."分之前";
	}elseif ($int<86400) {
		$ths = floor($int/3600)."天之前";
	}else{
		$ths = date("Y-m-d h:i:s",$int);
	}
	return $ths;
}

/**
 * [F 转存储单位]
 * @Author   Yuan.
 * @DateTime 2017-07-13T09:27:28+0800
 * @param    [浮点数]                   $num [字节]
 */

function F($num){
	if ($num<1024) {
		return $num."b";
	}elseif ($num<pow(1024,2)) {
		return round($num/1024,2)."Kb";
	}elseif ($num<pow(1024,3)) {
		return round($num/pow(1024,2),2)."mb";
	}elseif ($num<pow(1024,4)) {
		return round($num/pow(1024,3),2)."Gb";
	}elseif ($unm<pow(1024,5)) {
		return round($num/pow(1024,4),2)."Tb";
	}
}

/**
 * [ 创建文件 ]
 * @Author   Yuan.
 * @DateTime 2017-07-13T09:27:28+0800
 * @param    [mkdir传参，创建目录文件] 
 *   $num [字节]
 */

function Fmkdir($path){
	if (!is_dir(dirname($path))) {
		Fmkdir(dirname($path));//开辟一个新的空间执行函数
	}
	mkdir($path);
}















 ?>