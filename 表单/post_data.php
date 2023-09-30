<?php


// 表单method缺省的情况下，默认是个get方式
echo $_SERVER['REQUEST_METHOD'];//获取表单提交的方式
echo '<pre>';
print_r($_GET);
print_r($_POST);
print_r($_REQUEST);

/**
 * 如果表单中既有get的值，又有post元素值，并且他们的键相同，会发生什么情况：
 *    以post的过来的值为准
 *    
 * 
 */