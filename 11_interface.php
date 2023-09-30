<?php

interface Test{
  function demo();
}

interface eat extends Test{
  function eatBread();
}

interface Jump{
 function jump();
}

class Animal
{

}
// 先继承，再接口
class Person extends Animal implements Eat, Jump{
  function eatBread()
  {
    echo "eat bread";
  }
  function demo(){

  }

  function jump(){
    echo "I jump";
  }
}
$person = new Person();
$person->eatBread(); // 输出：eat bread
$person->demo(); // 空操作，因为 demo() 方法在接口中没有具体实现
$person->jump(); // 输出：I jump
