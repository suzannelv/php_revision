<?php


class Person {
  public $name;
  public $age;
  public function __construct($name, $age)
  {
    $this->name =$name;
    $this->age = $age;
  }
  public function work(){
    echo 'peson work';
  }
}

class Student extends Person {
  public $height;
  public $weight;
  public function __construct($name, $age, $height, $weight){
    parent::__construct($name, $age);
    $this->height = $height;
    $this->weight = $weight;
  }
 
public function study(){
  parent :: work();
  echo 'student study' . $this->name;
}
}

$stu1= new Student("Bob", 12, 2, 23);
$stu1->study();

