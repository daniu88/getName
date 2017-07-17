<?php 

/**
*上传类
*/
class Upload 
{
	public $config = array(
		'path'=>"./Upload",
		'exts'=>["jpg","png","gif"],
		'maxsize'=>100000
		);
	public $data;
	public function __construct($config=array())
	{
		$this->config = array_merge($this->config,$config);
	}
	public function save()
	{
		$this->config;
		$this->data=current($_FILES);//当前维
		$this->isError();//错误
		$this->checkType();//类型
		$this->checkSize();//大小
		$this->movefile();//移动文件
	}



	for ($i=0; $i < ; $i++) { 
		




	public function isError()
	{
		$this->data;
	}

	public function checkType()
	{
		# code...
	}


	public function checkSize()
	{
		// $this->config['path']
	}

	public function movefile()
	{
		$this->data;
	}





}


}



























 ?>