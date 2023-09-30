<?php
// PDO mysql 驱动 

// 第一种连接方式
// $dsn = "mysql:host=localhost;dbname=user_info";
// try{
//   $pdo = new PDO($dsn, 'root', '');
//   var_dump($pdo);
// }catch(PDOException $e){
//   die($e->getMessage());
// }

//第二种连接方式
try{
  $pdo = new PDO('uri:file:///C:\wamp64\www\grafikart_php_revision\PDO\dsn.txt', 'root', '');
  var_dump($pdo);
}catch(PDOException $e){
  die($e->getMessage());
}
