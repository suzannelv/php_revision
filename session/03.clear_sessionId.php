<?php

// 删除会话
session_start();

// 删除会话变量，不会删除session文件和session_id
// session_unset();
// echo session_id(), '<br/>';

// $_SESSION = array();// 等同于session_unset()
// echo session_id();


// 删除会话ID和会话文件
// session_destroy();
// print_r($_SESSION);

// 如果要删除会话ID和文件，并且清空会话变量，需要配合session_unset()
session_unset();
session_destroy();
// 清空cookie会话id的key,值得注意的是, 路径必须写上
setcookie(session_name(), session_id(), time()-10, '/' );
