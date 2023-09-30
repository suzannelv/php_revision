<?php

$dsn ='mysql:host=localhost; dbname=user_info; charset=utf8';
try{
  $pdo = new PDO($dsn, 'root', '');
  // 设置错误模式
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
  die('connecter la BDD échouée' .$e->getMessage());
}

try {
    $sql = 'insert into user_list(fistname, lastname, gender, email, tel, adress, code_postal, method_payment, create_time, birthday)
    values("Matilda", "Lawson", 0, "mathid@gmail.com", "0999999999", "lyon", "60999", "CB", NOW(), "1989-12-09")';

    $returnValue = $pdo->exec($sql);  
    if($returnValue>0){
      echo 'ajouter succès <br/>';
      // 查看最后插入的id
      echo $pdo->lastInsertId();
    }else{
      echo 'échouter ajouter';
    }
}catch(PDOException $e){
  echo $e-> getMessage();
}


