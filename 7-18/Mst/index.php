 <?php 
 include './function.php';
 session_start();
$db = file_get_contents("./db.txt");//读字符串
$db = json_decode($db,true);//转成能看懂的数组






// // 计算总数据量
// $count = count($db);

// // var_dump($db);exit;
// //一页多少条
// $row = 5;
// //一共多少页
// $num = ceil($count/$row);
// //接第几页，默认第1页
// $p = isset($_GET['p']) ? $_GET['p'] : 1;
// //通过当前页截取数据中的一部分
// $list = array_slice($db, ($p-1)*$row,$row);






include './Tpl/index.html';


// var_dump($db);


















  ?>