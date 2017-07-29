<?php 

//核心文件

//公共目录，函数库
define('COMMON_PATH','./Core/Common');

//资源目录
define('LIB_PATH','./Core/Lib');

//第三方扩展
define('VENDOR_PATH','./Core/Vendor');

//加载函数库
include COMMON_PATH.'/function.php';

$module = isset($_GET['m']) ? ucfirst(strtolower($_GET['m'])) : C('DB_MODULE');

$controller = isset($_GET['c']) ? ucfirst(strtolower($_GET['c'])) : C('DB_CONTROLLER');

$action = isset($_GET['a']) ? ucfirst(strtolower($_GET['a'])) : C('DB_ACTION');


define('MODULE_NAME',$module);
define('DB_CONTROLLER_NAME',$controller);
define('DB_ACTION_NAME',$action);


define('MODULE_PATH', APP_PATH."/".$module);
define('CONTROLLERLE_PATH', MODULE_PATH."/Controller");

var_dump(MODULE_PATH,CONTROLLERLE_PATH);

function __autoload($classname)
{
	$paths = array(
		CONTROLLERLE_PATH."/".$classname.".class.php"
		);
}


$controller = $controller."Controller";

$obj = new $controller;



var_dump($module,$controller,$action);





 ?>