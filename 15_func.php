<?php

function test($arg){
  echo 'il faut beau <br/>'.$arg.'<br/>';
}

// test();

// call_user_func('test', 'c\'est vrai');
// call_user_func_array('test', ['oui']);

class Dog
{
  function wang(){
    echo "wang wang";
  }
  function rock(){
    call_user_func([$this, 'wang']);
    echo 'cute';
  }

}

$dog = new Dog();
// 使用call_user_func调用类里面的方法
call_user_func([$dog, 'wang']);
$dog->rock();