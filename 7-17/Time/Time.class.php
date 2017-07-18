<?php 

/**
* 验证码类
*/

class Code
{

	public $config=array(
		"with"=>400,
		"height"=>200,
		"fontSize"=>100,
		"lenght"=>5,	
		"useNoise"=>true
		);

	public $src;
	public $color;
	public $str;
	function __construct($config=array())
	{
		$this->config = array_merge($this->config,$config);
	}

	public function entry()
	{
		
		if ($this->config["useNoise"]==true) {
		$this->create();
		// $this->color();
		$this->xian();
		$this->font();
		$this->dian();
		$this->text();
		$this->fill();
		}
		
		
	}
	public function create()
	{
		$this->src=imageCreateTrueColor($this->config['with'],$this->config['height']); 
		$color=imageColorAllocate($this->src,255,255,255);
		imageFill($this->src,0,0,$color);
	}

	// public function color()
	// {	
		
	// 	$this->color = imageColorAllocate($this->src,mt_rand(0,255),mt_rand(0,255),mt_rand(0,255)); 
		
	// }

	public function xian()
	{
		// imagefilledellipse ( $this->src , 100 , 150, 100 , 100 ,$this->color );
		for ($i=0; $i < 100; $i++) { 
			$color = imageColorAllocate($this->src,mt_rand(0,255),mt_rand(0,255),mt_rand(0,255)); //设置颜色
			imageline ($this->src , mt_rand(0,400), mt_rand(0,200), mt_rand(0,400), mt_rand(0,200),$color );//划线
		}
	}

	public function dian()
	{
		for ($i=0; $i < 1000; $i++) { 
			$color = imageColorAllocate($this->src,mt_rand(0,255),mt_rand(0,255),mt_rand(0,255)); 
			imagesetpixel ( $this->src , mt_rand(0,400), mt_rand(0,200),$color  ) ;//画一个单一像素

		}
	}

	public function font()
	{
		$this->str = "QWERTYUIOPASDFGHJKLZXCVBNMqwertyuiopasdfghjklzxcvbnm1234567890";//设置输出字体
		$x = ($this->config["lenght"]);
		for ($i=0; $i < ($this->config["lenght"]); $i++) { 
			$font = $this->str[mt_rand(0,strlen($this->str)-1)]; 
			$color = imageColorAllocate($this->src,mt_rand(0,255),mt_rand(0,255),mt_rand(0,255)); 
			imagettftext ( $this->src ,$this->config["fontSize"], mt_rand(-30,30) ,$x, 150 , $color,"./Font/xiao2.ttf",$font);
			$x +=80;
		}
				
	}

	public function text(){
		for ($i=0; $i <60 ; $i++) { 
			$font=$this->str[mt_rand(0,strlen($this->str)-1)];
			$color=imageColorAllocate($this->src,mt_rand(0,255),mt_rand(0,255),mt_rand(0,255));
			imagettftext($this->src ,20 , mt_rand(0,90) , mt_rand(0,400) , mt_rand(0,200) , $color , "./Font/plume.ttf" , $font );
		}
	}



	public function fill()
	{	
		imagepng($this->src);
	}










}

























 ?>