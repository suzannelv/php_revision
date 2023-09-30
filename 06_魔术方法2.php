<?php

class Person {
  public $name = "Tom";
  public $age = 17;
  public $height = 198;
// 1. __toString
  public function __toString()
  {
    echo "PHP studying";
  }

  // 2.__debugInfo
  public function __debugInfo()
  {
    return ["age" => $this-> age, "height"=>$this->height];
  }
  // 3. __call
  public function test(){
    echo "test method";
  }
  public function __call($name, $value){
    var_dump($name, $value);
  }
}

$p1 = new Person();
// var_dump($p1);
$p1->demo(1, 2, 3);