<?php 
include '../function.php';


function run($num){
	$miao = glob($num,"/*");
	if ($miao) {
		foreach ($miao as $key ) {
			if (is_dir($key)) {
					run($key);
				}else{
					unlink($key);
				}	
		}
	}

	rmdir($num);

}



run($num);






 ?>