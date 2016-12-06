<?php
// 应用入口文件
@header('Content-Type: text/html; charset=utf-8');

// 检测PHP环境
version_compare(PHP_VERSION,'5.3.0','<') && die('require PHP >= 5.3.0 !');

// 开启调试模式
define('APP_DEBUG',true);

// 定义应用目录
define('APP_ROOT',__DIR__.'/');
define('APP_PATH',APP_ROOT.'Apps/');
define('RUNTIME_PATH',APP_ROOT.'Runtime/');
define('BIND_MODULE','ChuChai');

// 引入ThinkPHP入口文件
require '../ThinkPHP/3.2.3/ThinkPHP.php';