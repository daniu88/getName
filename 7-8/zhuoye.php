<?php 

include './function.php';

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

$un = tim(1499503082);
echo $un;













 ?>