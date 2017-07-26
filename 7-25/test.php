<?php 

include '../function.php';
include './Mysql.class.php';

// $model = new Model("stu");
// 
$model = new Model("stu");


// $res = $model->query("select * from sfdtu");

// $res = $model->exec("insert into stu (name,age)values('宝宝1sss1',5)");

// var_dump($res);
// var_dump($model->getError($res));
$data = array(

	'name'=>"小军jun",
	'sex'=>"女",
	'age'=>20

	);

$id = $model->add($data);

// var_dump($id);




// $model =  $model->delete(1288);

// $model->where("age>90")->delete();
// var_dump($model->getError());




// $data = array(
// 	'name'=>'大军',
// 	'sex'=>'男',
// 	'age'=>30
// 	);
// $id=$model->where("sid=1")->seve($data);



// $res = $model->findOne(1);


// var_dump($res);


// $res = $model->where("sex='男'")->findAll();

// var_dump($res);
 // var_dump($model->getError());









 ?>