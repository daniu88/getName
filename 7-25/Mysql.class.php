<?php 
/**
* 数据库操作类
*/
class Model
{

	public $table;//存表
	public static $db;//存数据库链接
	public $error;//存错误信息
	public $where;//where条件
	function __construct($table="")
	{
		//传进来要操作的表
		$this->table=$table;
		try {
			if(!self::$db){
				//实例化pdo对象
				self::$db = new PDO(C("DB_TYPE").":host=".C("DB_HOST").";dbname=".C("DB_NAME").";charset=utf8",C("DB_USERNAME"),C("DB_PASS")); 
			}
		} catch (PDOException  $e) {
			$this->error ="数据链接失败，失败原因：".$e;
		}	
	}

	//原生查询方法
	public function query($sql)
	{	
		//链接数据库
		$res = self::$db->query($sql);
		//如果链接成功
		if ($res) {
			//查询并返回结果
			return $res->fetchAll(PDO::FETCH_ASSOC);
		}else{
			//链接失败并把错误存到error方法里
			$this->error="查询失败,失败原因：".self::$db->errorCode()."错误原因：".self::$db->errorInfo()[2];
			return false;
		}

	}


	//执行原生增删改方法
	public function exec($sql)
	{
		//链接数据库
		$res = self::$db->exec($sql);
		// var_dump($res);
		// 如果成功返回true
		if ($res) {
			return true;
		}else{
			//返回错误信息并存入
			$this->error="添加失败,失败原因：".self::$db->errorCode()."错误原因：".self::$db->errorInfo()[2];
			return false;
		}
	}


	//数据增加
	public function add($data)
	{	

		// var_dump($data);
		//返回建名并用“，”隔开，组成字符串
		$key=implode(',', array_keys($data)) ;
		// var_dump($key);
		//转字符串，组值，并逗号隔开
		$values=implode("','",$data);
		// var_dump($values);

		$sql= "insert into ".$this->table."(".$key.")values('".$values."')";
		var_dump($sql);
		$res = $this->exec($sql);
		if ($res) {
			return self::$db->lastInsertId (); 
		}else{
			return false;
		}
	}


	public function delete($id="")
	{

		if ($id) {
			$pkey = $this->getPkey();
			$sql = "delete from ".$this->table." where ".$pkey."=".$id;

			}else{
				$sql="delete from ".$this->table.$this->where;

			}	
		// var_dump($sql);
		return $this->exec($sql);
	}


	public function where($where)
	{
		$this->where =" where ".$where;
		return $this;

	}


	public function seve($data)
	{
		// var_dump($data);
		$str = "";
		foreach ($data as $k => $v) {
			$str.=$k."='".$v."',";
		}

		$str = rtrim($str,',');
		// var_dump($str);

		$sql = "update ".$this->table." set ".$str." ".$this->where;
		return $this->exec($sql);
	}

	public function getPkey()
	{
		$sql = "desc ".$this->table;
		$res = $this->query($sql);
		// // var_dump($res);
		foreach ($res as $v) {
			if ($v['Key']=="PRI") {
				return $v["Field"];
			}
		}
	}




	public function findOne($id="")
	{
		if ($id) {
			$pkey=$this->getPkey();
			$sql = "select * from ".$this->table." where ".$pkey."=".$id."limit 1";
		}else{
			$sql = "select * from ".$this->table.$this->where." limit 1";
			// var_dump($sql);
		}
	
		return $this->query($sql);


		// var_dump($sql);
	}



	// public function findAll()
	// {
	// 	$sql = "select * from ".$this->table.$this->where;
	// 	return $this->query($sql);
	// }

	public function findAll()
	{
		$sql = "select * from ".$this->table.$this->where;
		return $this->query($sql);
	}






	public function getError()
	{
		return $this->error;
	}


}


























 ?>