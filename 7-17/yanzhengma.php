<?php 

header("Content-type: image/png");
//创建画布
$src = imageCreateTrueColor(400,200); 
// 设置颜色资源
$color = imageColorAllocate($src,255,255,255); 

//颜色填充
imageFill($src,0,0,$color);

$color = imageColorAllocate($src,mt_rand(0,255),mt_rand(0,255),mt_rand(0,255)); 

// imagerectangle ( $src , 20 , 50, 100 , 100 , $color );

// imagefilledrectangle ( $src , 20 , 50, 100 , 100 ,$color );

// imageellipse ( $src , 20 , 50, 100 , 100 , $color );

// imagefilledellipse ( $src , 100 , 150, 100 , 100 ,$color );
// for ($i=0; $i < 100; $i++) { 
// 	$color = imageColorAllocate($src,mt_rand(0,255),mt_rand(0,255),mt_rand(0,255)); //设置颜色
// 	imageline ($src , mt_rand(0,400), mt_rand(0,200), mt_rand(0,400), mt_rand(0,200),$color );//划线
// }

// for ($i=0; $i < 1000; $i++) { 
// 	$color = imageColorAllocate($src,mt_rand(0,255),mt_rand(0,255),mt_rand(0,255)); 
// 	imagesetpixel ( $src , mt_rand(0,400), mt_rand(0,200),$color  ) ;//画一个单一像素

// }

$str = "QWERTYUIOPASDFGHJKLZXCVBNMqwertyuiopasdfghjklzxcvbnm1234567890";//设置输出字体
$x = (400/4)*0.3;
for ($i=0; $i < 4; $i++) { 
	$font = $str[mt_rand(0,strlen($str)-1)]; 
	$color = imageColorAllocate($src,mt_rand(0,255),mt_rand(0,255),mt_rand(0,255)); 
	imagettftext ( $src ,100, mt_rand(-30,30) ,$x, 150 , $color,"./plume.ttf",$font);
	$x +=100;
}














imagepng($src);
























 ?>