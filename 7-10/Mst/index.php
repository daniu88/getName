 <?php 
 include './function.php';
$db = file_get_contents("./db.txt");//读字符串
$db = json_decode($db,true);//转成能看懂的数组
include './Tpl/index.html';


// var_dump($db);


















  ?>