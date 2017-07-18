<?php 
/**
* 验证码类
*/
class Verify 
{
	public $config =array(
		'imageW'      => 200,
		'imageH'      => 80,
		'fontSize'    =>    30,    // 验证码字体大小
	    'length'      =>    4,     // 验证码位数
	    'useNoise'    =>    false, // 关闭验证码杂点
	    'line'        =>    0, // 关闭验证码杂点
	   	'str'=>"QWERTYUIOPASDFGHJKLZXCVBNMqwertyuiopasdfghjklzxcvbnm1234567890",
	   	"bgColor"     => [255,255,255]
		);
	public $src;//放画布

	public function __construct($config=array())
	{
		$this->config = array_merge($this->config,$config);
	}

	public function entry()
	{
		$this->create();
		$this->line();
		$this->useNoise();
		$this->addText();
		$this->output();
	}

	public function __get($name)
	{
		if(isset($this->config[$name])){
			return $this->config[$name];
		}
	}

	public function create()
	{
		$this->src = imageCreateTrueColor($this->imageW,$this->imageH);

		$color = imageColorAllocate($this->src,$this->bgColor[0],$this->bgColor[1],$this->bgColor[2]);

		imageFill($this->src,0,0,$color); 
 
	}
	public function line()
	{
		for ($i=0; $i < $this->line ; $i++) { 
			$color = imageColorAllocate($this->src,mt_rand(0,255),mt_rand(0,255),mt_rand(0,255));
			imageline ($this->src,mt_rand(0,$this->imageW),mt_rand(0,10),mt_rand(0,$this->imageW),mt_rand($this->imageH-10,$this->imageH), $color);
		}
	}
	public function useNoise()
	{
		if(!$this->useNoise){
			return;
		}

		for ($i=0; $i <30 ; $i++) { 
			$font = $this->str[mt_rand(0,strlen($this->str)-1)];

			$color = imageColorAllocate($this->src,mt_rand(150,255),mt_rand(150,255),mt_rand(150,255));

			imagettftext ( $this->src ,$this->fontSize/2, 0 ,mt_rand(0,$this->imageW),mt_rand(0,$this->imageH), $color,"./Rene.Bieder_Campton.Bold.otf",$font);
		}
	}
	public function addText()
	{
		$color = imageColorAllocate($this->src,mt_rand(0,60),mt_rand(0,60),mt_rand(0,60));

		$x  = ($this->imageW/$this->length)/2-$this->fontSize/2;

		for ($i=0; $i < $this->length ; $i++) { 		

			$font = $this->str[mt_rand(0,strlen($this->str)-1)];

			$diff = $this->imageW/$this->length;

			$y = $this->imageH/2+$this->fontSize/2;

			imagettftext ( $this->src ,$this->fontSize, mt_rand(-20,20) ,$x,$y, $color,"./Rene.Bieder_Campton.Bold.otf",$font);

			$x += $diff;


		}
	}
	public function output()
	{
		header("Content-type: image/png");
		imagepng($this->src);
		imageDestroy($this->src);  
	}
}



















 ?>