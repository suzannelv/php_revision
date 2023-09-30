<?php
function myAutoload($className) {
  // 将类名转换为文件路径
  $filePath = $className . '.php';

  // 检查文件是否存在，然后导入文件
  if (file_exists($filePath)) {
      include $filePath;
  }
}

spl_autoload_register('myAutoload');

// 创建 Dog 类的实例
$dog = new Dog();

