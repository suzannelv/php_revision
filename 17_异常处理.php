<?php

try {
  // 可能抛出异常的代码块
  echo 'se lever';
  throw new Exception("This is an exception.", 10); // 抛出异常
  echo 'manger';
} catch (Exception $e) {
  // 捕获并处理异常
  echo "Caught exception: " . $e->getMessage();
  echo $e->getCode();
}
echo 'go to work';