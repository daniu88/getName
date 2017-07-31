<?php 

function ReAjax($data)
{
	exit(json_encode($data));
}

/**
 * [Ctime 时间格式的转换]
 * @Author   Xuebingsi
 * @DateTime 2017-07-10T08:19:55+0800
 * @param    [时间戳]                   $time [需要转换的时间戳]
 */
function Ctime($time=null)
{
	if($time==null){
		return date("Y-m-d H:i:s");
	}
	
	$diff = time()-$time;

	if($diff<60){
		return "刚刚";
	}elseif($diff<3600){
		return ceil(($diff/60))."分钟前";
	}elseif($diff<86400){
		return ceil(($diff/3600))."小时前";
	}elseif($diff<(86400*7)){
		return ceil(($diff/86400))."天前";
	}else{
		return date("Y-m-d H:i:s",$time);
	}
}

















 ?>