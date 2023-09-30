<?php
// echo '<pre>';
// print_r($_SERVER);

$var1 = 'aa';
$var2 = 'bb';
echo '<pre>';
// 打印$GLOBALS时，它会把声明的两个变量也会加入$GLOBALS数组中
// print_r($GLOBALS);

// global 和 $GLOBALS区别
/**
 * global 实质是全局变量的一个引用或者叫指针
 * $GLOBALS 就是全局变量本身
 */
function test() {
  // 在这里，直接打印外面的变量会报错
  //echo $var1;
  //需要用global关键字来访问全局变量
  global $var1;
  echo $var1, '<br/>';
  echo $GLOBALS['var1'], '<br/>';//变量名为键  
  unset($var1);//销毁变量，此销毁的不是全局变量$var1（外部变量）
  // var_dump($var1);//null Warning: Undefined variable $var1
  unset($GLOBALS['var1']);//此时销毁的才是真正的全局变量$var1
}

test();
var_dump($var1);


