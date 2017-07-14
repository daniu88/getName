<?php 


include '../function.php';

function run($num){
	$saomiao = glob($num."/*");
	var_dump($saomiao);
	if ($saomiao) {
		foreach ($saomiao as $a=> $k) {
			if (is_dir($k)) {
				run($k);
			}else{
				unlink($k);
			}
		}
	}
	rmdir($num);
}

run("./a");
























 ?>