<?php

/**
 * 分析：
 * 用户浏览记录是不断变更的，是多条数据，我们可以使用数组来保存。
 * cookie只能保存字符串，如何来保存数组？
 * 解决方案：通过系统内置的序列化和反序列化函数来实现，serialize()和unserialize()
 * 
 */

//  $arr = [1, 2, 3];
//  $a = serialize($arr); // 序列化数组
//  echo $a, '<br/>'; // 输出序列化后的字符串
//  print_r(unserialize($a)); // 反序列化字符串并打印数组


// 1. 获取到URL地址，用到 $_SERVER['REQUEST_URI];
$url = $_SERVER['REQUEST_URI'];
// echo $url, '<br/>';

// 2.将URL 放到cookie中
// 用一个数组保存URL
$arr=[];
// 首先要判断是否有浏览记录，如果有，将当前URL放到浏览记录的最前面。
// 如果不存在浏览记录，则新建一个浏览记录
if(isset($_COOKIE['his'])){
  // 取出来的是字符串，需要反序列化
  $arr = unserialize($_COOKIE['his']);
  // 将URL地址放在历史记录最前面
  array_unshift($arr, $url);

  // 重复的浏览记录去除
  $arr = array_unique($arr);


  // 只保存最近浏览记录10条记录
  if(count($arr)>10){ 
    // 将最后一条记录弹出
    array_pop($arr);
  }

  // 再次存放到cookie中
  setcookie('his', serialize($arr));
} else{
  $arr[] = $url;
  // 首次设置cookie
  setcookie('his', serialize($arr));
}

echo '历史浏览记录：<br/>';
// print_r($arr);
echo '<ol>';
foreach($arr as $k=>$v){
  echo '<li>' . $v . '</li>';
}
echo '</ol>';


echo '<hr/>';
//URL 的基本部分是 "?"，表示当前页面的 URL。
echo '<a href="?id=' .mt_rand(1, 100) . '">random value </a>';