<?php 
header("Content-type: image/png");

$dest = imageCreateFrompng("./yangyang.png");
// $src = imageCreateFrompng("./logo.png");
$src=imageCreateFrompng("./90.png"); 



$dx=imagesx($dest);
$dy=imagesy($dest);
$sx=imagesx($src);
$sy=imagesy($src);

// imagecopy ( $dest , $src , $dx/2 ,$dy/2-$sy , 0 , 0 , $sx, $sy ) ; 
// imagecopymerge ( $dest , $src  ,($dx/2+($sy/6))/2 , ($dy/2)-($sy/6), 0 , 0 , $sx, $sy  , 50 );	

imagecopyresized ( $dest , $src  ,($dx/2+($sy/6))/2 , ($dy/2)-($sy/6), 0 , 0 , $sx/6, $sy/6 ,$sx, $sy );

imagepng($dest); 
















 ?>