<?php 

/**
* 
*/
class Upload
{
	
	public $config=array(//把初始值存到一个数组
		'path'=>'./Upload',//文件上传存放的文件夹
		'exts'=>['jpg','png','gif'],//支持上传的类型
		'maxsize'=>100000//上传允许的最大值
		);
	public $data;//$_FILES的初始变量
	public $errer;//错误信息存储变量

	public $errorinfo = array(//错误信息合集
		1=>"上传的文件超过了 PHP.ini 中 upload_max_filesize 选项限制的值",
		2=>"上传文件的大小超过了 HTML 表单中 MAX_FILE_SIZE 选项指定的值",
		3=>"文件只有部分被上传",
		4=>"没有文件被上传",
		6=>"找不到临时文件夹。php 4.3.10 和 PHP 5.0.3 引进",
		7=>"文件写入失败。PHP 5.1.0 引进"
		);

	public function  __construct($config=array())//初始化构造函数
	{
		$this->config=array_merge($this->config,$config);//合并初始化上传值
	}


	public function save()//上传执行方法合集
	{
		$this->data=current($_FILES);//赋值上传初始值给data
		$this->isError();//判断上传错误函数
		$this->checkType();//判断上传错误类型函数
		$this->checkSize();//判断上传大小错误函数
		$this->movefile();//上传移动函数
		return $this->error;//上传错误返回值
	}


	public function isError()
	{
		// var_dump($this->data);exit;
		foreach ($this->data['error'] as $k => $v) {//循环上传error项
			if ($v!=0) {//如果有错误
				$this->error[$k]=$this->errorinfo[$v];//把错误放入error函数，并把错误信息放入
				// var_dump($this->error);	
			}
		}
	}

	public function checkType()
	{
		foreach ($this->data['name'] as $k => $v) {//循环初始值文件类型
			if (!isset($this->error[$k])) {//如果错误数组内没有这个错误
				$arr=explode(".", $v);//就把文件后缀用点切开
				$ext=end($arr);//取文件最后一个
				if (!in_array($ext,$this->config['exts'])) {//如果当前config里的[exts]类型这项没有$ext的文件后缀
					$this->error[$k]=$v."文件类型不符合";//那么判断为类型不符合，存入error这个变量
				}
			}
		}
	}



	public function checkSize()
	{
		foreach ($this->data['size'] as $k => $v) {//循环原始文件的大小这项

				if(!isset($this->error[$k])){//判断错误数组内是否存有循环文件，如果没有就走下面
					if ($v>$this->config['maxsize']) {//判断当前文件的大小是否超过初始大小
					$this->error[$k]=$this->data['name'][$k]."文件过大，限制是".$this->config['maxsize'].'字节';//超过大小输出的错误信息
					// var_dump($this->error);
				}
			}
		}
	}



	public function movefile()
	{
		foreach ($this->data["tmp_name"] as $k => $v) {//循环初始上传文件
			if (!isset($this->error[$k])) {//判断错误信息属性内是否有当前文件错误
				$path=$this->config['path'];//把初始路径给一个变量
				$name=uniqid();//起一个毫秒随机名
				is_dir($path)||mkdir($path);//判断有没有初始文件没有就创建
				$date=date("Y-m-d");//创建一个当前日期
				is_dir($path.'/'.$date)||mkdir($path.'/'.$date);//判断是否有默认文件加当前日期的文件夹，没有生成一个当前日期的文件夹
				$arr = explode('.', $this->data['name'][$k]);//切当前移动文件名
				$ext=end($arr);//取最后一个后缀
				$dest=$path.'/'.$date.'/'.$name.'.'.$ext;//生成一个当前文件路径+名称
				$res=move_uploaded_file($v, $dest);//移动当前文件到生成的文件夹内，并命名
				if ($res) {
					$this->error[$k]=$dest;//上传成功的路径
				}else{
					$this->error[$k]="移动文件失败";//上传失败的文件返回值
				}
			}
		}
	}




















}

























 ?>