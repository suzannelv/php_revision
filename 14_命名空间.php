<?php
// 第一个命名空间前不能有任何代码
namespace hello;
class Person
{
  function eat(){
    echo "hello: eating <br/>";
  }
}

// 子空间
namespace world\test;
class Person{
  function eat(){
    echo "world: eat <br/>";
  }
}

// $p1 = new \hello\Person();
// $p1->eat();
// $p2 = new \world\test\Person();
// $p2->eat();