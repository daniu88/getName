<?php 
include '../function.php';
/**
* 
*/
class A 
{
	public $name;
	public $color;
	public function run(){
		echo "能睡觉";
	}
}


$obj = new A();


$obj ->color="#fff";
// var_dump($obj);

$obj ->name="猪";

// echo $obj->name;



/**
* 
*/
class zz
{
	
	public function __construct($rr)
	{
		echo "$rr";
	}
	public function __destruct()
	{
		echo "壮烈翻车~~~";
	}
}

$obj = new zz("人人车！！！");


/**
* 
*/
class ct
{
	
	public function __construct()
	{
		echo "春天里来桃花开~~~";
	}
	public function cha()
	{
		echo "我想说：喝茶像喝药~~";
	}
}

$obj = new ct();
























 ?>