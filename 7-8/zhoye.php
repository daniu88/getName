<?php 
include './function.php';
function tin($num)
{
	$ths = time()-$num;
	$zz = '';
	if ($ths<2) {
		$zz = $ths."刚刚";
	}elseif ($ths<60) {
		$zz = $ths."秒之前";
	}elseif ($ths<3600) {
		$zz = floor($ths/60)."分钟之前";
	}elseif ($ths<84600) {
		$zz = floor($ths/3600)."天之前";
	}else{
		$zz = date("Y-m-d H:i:s",$zz );
	}
	return $zz;
}

$ll = tin(1499507023);
echo $ll;



















 ?>