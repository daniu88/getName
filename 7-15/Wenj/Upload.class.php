<?php 

/**
* 上传类
*/
class Upload
{
	public $config=array(
		'path'=>"./Upload",
		'exts'=>['jpg','png','gif'],
		'maxsize'=>1000000
		);
	public $data;
	public $error;
	public $errorinfo = array(
		1=>"上传的文件超过了 PHP.ini 中 upload_max_filesize 选项限制的值",
		2=>"上传文件的大小超过了 HTML 表单中 MAX_FILE_SIZE 选项指定的值",
		3=>"文件只有部分被上传",
		4=>"没有文件被上传",
		6=>"找不到临时文件夹。php 4.3.10 和 PHP 5.0.3 引进",
		7=>"文件写入失败。PHP 5.1.0 引进"
		);
	function __construct($config=array())
	{
		$this->config=array_merge($this->config,$config);
	}
	public function save()
	{
		$this->data=current($_FILES);
		$this->isError();
		$this->checkType();
		

		$this->checkSize();
		$this->movfile();
		return $this->error;
	}
	public function isError()
	{
		foreach ($this->data['error'] as $k => $v) {
			if ($v!=0) {
				$this->error[$k]=$this->errorinfo[$v];
			}
		}
	}
	public function checkType()
	{
		foreach ($this->data['name'] as $k => $v) {
			if (!isset($this->error[$k])) {
				$arr=explode('.',$v);
				$ext=end($arr);
				if (!in_array($ext, $this->config['exts'])) {
				$this->error[$k]=$v."文件类型不符合";
				}
			}
		}
	}
	public function checkSize()
	{
		foreach ($this->data['size'] as $k => $v) {
			if (!isset($this->error[$k])) {
				if ($v>$this->config['maxsize']) {
					$this->error[$k]=$this->data['name'][$k]."文件过大，限制是".$this->config['maxsize']."字节";
				}
			}
		}
	}
	public function movfile()
	{
		
		foreach ($this->data['tmp_name'] as $k => $v) {
			if (!isset($this->error[$k])) {
				$path=$this->config['path'];
				$name=uniqid();
				is_dir($path) ||  mkdir($path);
				$date=date('Y-m-d');
				is_dir($path."/".$date) || mkdir($path.'/'.$date);
				$arr=explode('.', $this->data['name'][$k]);
				$ext=end($arr);
				$dast=$path."/".$date."/".$name.".".$ext;
				$res=move_uploaded_file($v, $dast);
				if ($res) {
					$this->error[$k]=$dast;
				}else{
					$this->error[$k]="移动文件失败";
				}
			}
		}
		// var_dump($this->error);
	}

















	
}
































 ?>