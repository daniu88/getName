<?php 




function run($num)
{
	for ($i=0; $i <= $num ; $i++) { 
		if ($i%3==0  && $i%4==0) {
			 echo $i."<br/>";	
		}
	}
}



run(200);




 ?>