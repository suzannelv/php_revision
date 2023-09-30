<?php

session_start();

$_SESSION['hb'] ='humanbooster';
$_SESSION['test'] ='testvalue';
$_SESSION['age'] =12;

echo $_SESSION['hb'], '<hr/>';
print_r($_SESSION);
echo '<br/>';

// 删除session变量
unset($_SESSION['age']);
print_r($_SESSION);

var_dump(isset($_SESSION['test']));//true
var_dump(isset($_SESSION['age']));//false

// modifier

$_SESSION['test'] = 'newValue';
print_r($_SESSION['test']);
