<?php
// error_reporting(E_ALL);

// setcookie之前不能有任何输出
// echo '-------';//在PHP中，设置cookie之前不能有任何的输出，包括BOM头还有空格
setcookie('hb', 'humainbooster');
setcookie('test', 'testval', time() + 3600);
// echo $_COOKIE['hb'];//设置完后第一次访问