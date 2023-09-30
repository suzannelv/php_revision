<?php

class Person {
  public $name;
  public $age;
  public $height ;
function __construct($name, $age, $height) 
  {
    $this->name = $name;
    $this->age = $age;
    $this->height = $height;
  }

  // __sleep
  function __sleep()
  {
    // echo 'sleep';
    // sleep作用可以要求想返回的字符串
    return ['age', 'height'];
  }

  // __wakeup
  function __wakeup()
  {
    echo "wakeup";
  }

  // __clone
  function __clone()
  {
    $this->age = 20;
  }

}

// function spl_autoload_register($className)
// {
//   $file =$className . '.php';
//   include $file;
// }

// $animal = new Animal();
// $animal->eat();

function myAutoloader($className) {
  $file = $className . '.php';
  if (file_exists($file)) {
      include $file;
  }
}

spl_autoload_register('myAutoloader');
$animal = new Animal();
$animal->eat();


// $p1 = new Person('bob', 12, 134);
// $obj = clone $p1;
// var_dump($obj);


// $str = file_get_contents('p1.txt');
// unserialize：将字符串反序列化成对象
// $obj = unserialize($str);
// var_dump($obj);


// $str = serialize($p1);
// if (file_put_contents('p1.txt', $str) !== false) {
//   echo "文件已成功生成。";
// } else {
//   echo "无法生成文件。";
// }
// file_put_contents('p1.txt', $str);
// echo $str;