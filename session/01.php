<?php
// session_start之前不要有任何的输出
session_start();
/**
 * 1.服务器端要生成一个文件
 * 2.客户端要保存session_id(会话ID)
 * 
 */
// 获取要保存到cookie中会话key
 echo session_name(), '<br/>';

 // 获取会话ID 
 echo session_id(), '<br/>';
 print_r($_SESSION);