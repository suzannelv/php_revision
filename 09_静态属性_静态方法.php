<?php
class Person {
  static public $name = "tom";
  public static function test(){
    echo 'méthode statique';
  }
  public function demo(){
    echo self::$name;
    self::test();

  }
}
// 用static修饰的的属性和方法，是属于整个类的。
// echo Person::$name;
// Person::test();

$p2 = new Person();
$p2->demo();


