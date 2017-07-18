<?php


header("Content-type: image/png"); 
$dest = imageCreateFrompng("./90.png");

$dx = imagesx($dest);
$dy = imagesy($dest); 


$mid = imageCreateTrueColor($dx*2/3,$dy*2/3);

imagecopyresized ( $mid, $dest , 0 , 0 , 0 , 0 , $dx*2/3, $dy*2/3,$dx, $dy); 

imagepng($mid);


// $small = imageCreateTrueColor($dx*1/3,$dy*1/3);

// imagecopyresized ( $small, $dest , 0 , 0 , 0 , 0 , $dx*1/3, $dy*1/3,$dx, $dy); 

// imagepng($small,"./logo.png");
 

 ?>