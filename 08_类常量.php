<?php
class Person 
{
  const ABC = 1000;
  public $name;
  public $age;
  function test(){
    // self 就是当前类名Person
    echo self::ABC;
  }
}
// 类外调用：类名::常量名 (或者 $obj::常量名)
// echo Person::ABC;

$p1 = new Person();
$p1->test();