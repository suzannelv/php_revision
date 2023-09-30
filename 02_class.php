<?php
class Person{
  public $age;
  public function eat(){
    echo 'eating';
  }
}

$p1 = new Person();
var_dump($p1);