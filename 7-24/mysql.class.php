<?php 
/**
* 数据库类
*/
class Model
{
	public $table;
	public static $db;
	public $where;
	public $field="*";
	public $limit=" ";
	public static $sql;
	//构造函数，实例化PDo链接数据库对象
	function __construct($table='')
	{
		$this->table=$table; 

		if(!self::$db){
			self::$db = new PDO("mysql:host=".C('DB_HOST').";dbname=".C('DB_NAME').";charset=".C('DB_CHARSET'),C('DB_USER'),C('DB_PASS')); 
		}
	} 
	//执行原生sql查询(select)
	public function query($sql)
	{
		self::$sql=$sql;
		$res = self::$db->query($sql);
		if($res){

			return $res->fetchAll(PDO::FETCH_ASSOC);
		}
		return $res;
	}
	//执行原生sql增删改(insert,update,delete)
	public function exec($sql)
	{
		self::$sql=$sql;
		return self::$db->exec($sql);

	}
	//获取错误信息
	public function getError()
	{
		$info = self::$db->errorInfo();
		return $info[2];
	}
	//查询全部数据
	public function select()
	{
		$sql = "select ".$this->field." from ".$this->table." ".$this->where.$this->limit;
		return $this->query($sql);
	}
	//查询一条数据
	public function find()
	{
		$sql = "select ".$this->field." from ".$this->table." ".$this->where." limit 1";
		// var_dump($sql);
		return current($this->query($sql));
	}
	//条件
	public function where($where)
	{
		$this->where = "where ".$where;
		return $this;
	}
	//字段
	public function field($field)
	{
		$this->field = $field;
		return $this;
	}
	//取部分数据
	public function limit($limit)
	{
		$this->limit = " limit ".$limit;
		return $this;
	}
	//删除操作
	public function delete()
	{
		$sql = "delete from ".$this->table." ".$this->where;

		return $this->exec($sql);
	}
	//增加操作
	public function add($data)
	{
		$keys = array_keys($data);
		//拼字符串
		$keysStr = implode(',', $keys);

		$valuesStr = implode("','", $data);

		$sql = "insert into ".$this->table."(".$keysStr.") values('".$valuesStr."')";

		if($this->exec($sql)){
			return self::$db->lastInsertId();
		}else{
			return false;
		}
	}

	//更新操作
	public function save($data)
	{
		$str = '';
		foreach ($data as $k => $v) {
			$str.=$k."='".$v."',";
		}
		//去最后的逗号
		$str = rtrim($str,',');

		$sql = "update ".$this->table." set ".$str." ".$this->where;

		return $this->exec($sql);
	}
	public function getSql()
	{
		return self::$sql;
	}
}












 ?>