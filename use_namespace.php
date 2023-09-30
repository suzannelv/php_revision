<?php
include '14_命名空间.php';
// 使用 use 语句创建了两个命名空间的别名
use \hello\Person as Person1;
use \world\test\Person as Person2;

// méthode 1:
$p = new Person2();
$p->eat();
// méthode 2:
$p1 = new \hello\Person();
$p1->eat();