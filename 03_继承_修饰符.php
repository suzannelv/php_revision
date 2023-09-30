<?php
class Animal{
  public $name = "kobe";
  protected $age = 35;
  private $height = 2;
}

class Person extends Animal{
  public function say(){
    echo "my name is" . $this->name . '<br/>';
    echo "I'm ". $this->age . 'years old' . '<br/>';
    echo 'Height:'. $this->height . '<br/>';
  }
}

$p1 = new Person();
$p1 -> say();