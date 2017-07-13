<?php 

include '../function.php';


$lagou = file_get_contents("https://www.lagou.com/?");

// $pregs = "/<a href=\"(.*?)\" target=\"_blank\" class=\"position_link/";











// $ti = preg_match_all($pregs,$lagou, $out);

// var_dump($out);








// $zhiw = "/data-lg-tj-cid=\"idnull\">(.*?)<\/a>/";



// $zhiweitiq = preg_match_all($zhiw, $lagou, $out);

// var_dump($out);



$zhiwei = "/<a href=\".*?\" target=\"_blank\" data-lg-tj-id=\".*?\" data-lg-tj-no=\".*?\" data-lg-tj-cid=\".*?\">(.*?)<\/a>/";


$zhiweitiq = preg_match_all($zhiwei, $lagou, $out);

// $zhuan = json_decode($zhiweitiq);

file_put_contents("./tt.txt", $out[1]);
// var_dump($out);


















 ?>