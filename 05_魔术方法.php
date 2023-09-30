<?php

class Person {
  public $name = "Tom";
  protected $age = 17;
  private $height = 198;
// 1. __get
  public function __get($name){
    if($name == 'height') {
      return $this->height;

    }
  }

  // 2__set
  public function __set($name, $value){
    if($name == 'age'){
      $this -> age = $value;
    }
    // var_dump($name, $value);
  }

  // __isset
  public function __isset($name){
    if($name == 'age'){
      return isset($this -> $name);
    }
  }
}

$p1 = new Person();
// echo $p1 ->height;
$p1 -> age=12;
// echo $p1-> age;
var_dump(isset($p1->age));