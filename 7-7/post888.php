<?php 


// var_dump($_POST);

	if ($_POST['fuhao']=='*') {
		echo $_POST['num1']*$_POST['num2'];
	}elseif ($_POST['fuhao']=='/') {
		echo $_POST['num1']/$_POST['num2'];
	}elseif ($_POST['fuhao']=='+') {
		echo $_POST['num1']+$_POST['num2'];
	}else{
		echo $_POST['num1']-$_POST['num2'];
	}



 ?>