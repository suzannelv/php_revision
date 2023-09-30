<?php


abstract class Animal
{
  abstract public function jump();

}

abstract class Person extends Animal
{
  public $name;
  public function say()
  {
    echo 'say name';
  }
  abstract public function eat($name);

}

class Teacher extends Person{
  public function eat($name)
  {
    echo 'teaching';
  }
  public function jump()
  {
    echo "jump";
  }
}