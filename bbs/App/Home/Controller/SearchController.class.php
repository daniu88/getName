<?php 
namespace Home\Controller;
use Think\Controller;
class SearchController extends CommonController {

	public function index()
	{
		$words = I('get.q');
		// 加入头文件
		// require '/path/to/pscws4.class.php';
		vendor("pscws4.pscws4",'','.class.php');
		// 建立分词类对像, 参数为字符集, 默认为 gbk, 可在后面调用 set_charset 改变
		$pscws = new \PSCWS4('utf8');

		
		// //
		// // 接下来, 设定一些分词参数或选项, set_dict 是必须的, 若想智能识别人名等需要 set_rule 
		// //
		// // 包括: set_charset, set_dict, set_rule, set_ignore, set_multi, set_debug, set_duality ... 等方法
		// // 
		$pscws->set_dict('./public/dict.utf8.xdb');//设置字典



		//$pscws->set_rule('/path/to/etc/rules.ini');//规则

		// // 分词调用 send_text() 将待分词的字符串传入, 紧接着循环调用 get_result() 方法取回一系列分好的词
		// // 直到 get_result() 返回 false 为止
		// // 返回的词是一个关联数组, 包含: word 词本身, idf 逆词率(重), off 在text中的偏移, len 长度, attr 词性
		// //
		$pscws->send_text($words);
		$tops = $pscws->get_tops(3, 'n,v');
		// while ($some = $pscws->get_result())
		// {
		//    foreach ($some as $word)
		//    {
		//       var_dump($word);
		//    }
		// }
		
		$sql = "select * from question where ";

		foreach ($tops as $row) {
			$sql .= " title like '%".$row['word']."%' or"; 
		}

		$sql = rtrim($sql,' or');


		$this->assign('words',$words);
		$question = M()->query($sql);

		$this->assign('question',$question);

		// var_dump($question );



		$this->assign('title',"搜索帖子");

		$this->display();
	}



}







 ?>