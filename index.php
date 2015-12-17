<?php
// 应用入口文件
header('Content-Type:text/html;charset=utf-8');

// 检测PHP环境
if(version_compare(PHP_VERSION,'5.3.0','<')) die('Require PHP > 5.3.0 !');

// 开启调试模式 建议开发阶段开启 部署阶段注释或者设为false
define('APP_DEBUG',true);

// 定义应用目录
define('APP_PATH','./Apps/');

// 绑定模块到当前入口文件
//define('BIND_MODULE','App');

// 定义运行时目录
define('RUNTIME_PATH','./Runtime/');

// 引入ThinkPHP入口文件
require '../ThinkPHP/3.2.3-alone/ThinkPHP.php';