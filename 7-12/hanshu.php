<?php 

include '../function.php';

$data = file_get_contents("https://www.lagou.com/");


// $preg = "/<a href=\"(.*?)\" target=\"_blank\" class=\"position_link/";
// 
$preg = "/data-lg-tj-cid=\"idnull\">(.*?)<\/a>/";


$res = preg_match_all($preg, $data, $out);


// preg_match();

// preg_match_all(pattern, subject, matches)

// preg_split(pattern, subject)

// preg_replace(pattern, replacement, subject)
var_dump($out);

















 ?>