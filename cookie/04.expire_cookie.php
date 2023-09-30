<?php

// 让test 这个 cookie 过期
setcookie('test',null);//设置false 或 ''

// cookie过期
setcookie('hb', '', time()-10);

//通过设置cookie过期来删除cookie的时候，一定要注意设置路径，默认情况下，清空当前脚本所在的路径的cookie
// 如果设置cookie的时候写明了路径，并且和当前的脚本路径不一样的时候，要带上路径这个参数