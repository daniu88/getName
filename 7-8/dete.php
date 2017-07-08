<?php 

// echo date_default_timezone_get()
// 


echo date("Y-m-d h:i:s")."<br/>";

echo time()."<br/>";

echo microtime(true)."<br/>";



echo strtotime('now')."<br/>";
echo strtotime('+5 hours')."<br/>";
$time = strtotime("+100 days")."<br/>";


var_dump(getdate($time)) ;

















 ?>