<?php
include '../function.php'; 

$yu = disk_free_space("e:");//磁盘可用大小

$yu = disk_total_space("e:");//磁盘大小

$tes = pow(1024,3);

$kess = "./lib/css/mail/index.php";


// echo dirname($kess);

// echo basename($kess);

// var_dump(file_exists("./test.php"));

// file_exists();
// file_exists();

// is_dir()
// is_dir()

// var_dump(is_dir("./a"));
// 



// mkdir("./text1");

// $run = rename("./text1", "texe");

 // copy("./mulu.php", "./texe/cop1.php");


// $run = rmdir("./text1");

// var_dump($run);	


// unlink("./texe/cop1.php");
// 
// $res = glob("./*");

// var_dump($res);


// var_dump(is_writable("./mulu.php"));

// var_dump(is_readable("./mulu.php"));


// echo F(filesize("./mulu.php"));


// echo tim(filemtime("./mulu.php"));


// Fmkdir("./aa/bb/cc/cc/d/bbb");

// var_dump(expression);






function del($dirName) {  
		if (!is_dir($dirName)) return false;
		foreach (glob($dirName. "/*") as $v) 
		return rmdir($dirName);
	}


$ren = glob("./aa/bb/cc/cc/d/bbb"."/*");
   

var_dump($ren);





function chuanjian($num){
	if (!is_dir(dirname($num))) {
		chuangjian(dirname($num));
	}

	mkdir($num);//创建$num;
}






function chang($num){
	if (!is_dir(dirname($num))) {
		chuang(dirname($num));
	}
	mkdir($num);
}




function chuangj($num){
	if (!is_dir(dirname($num))) {
		chuangj(dirname($num));
	}
	mkdir($num);
}


























 ?>