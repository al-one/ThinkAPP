<?php

$GLOBALS['comm_default'] =
[
  'DB_TYPE'   => 'sqlite',//mysql
  'DB_HOST'   => 'localhost',
  //'DB_NAME'   => 'chuchai',
  'DB_NAME'   => DATA_PATH.'chuchai.sqlite',
  'DB_USER'   => 'root',
  'DB_PWD'    => '123456',
  'DB_PORT'   => '3306',
  'DB_PREFIX' => 'bd_',
];

$config_dbs = require(APP_PATH.'ChuChai/Conf/database.dev.php');
//$config_dbs = require(APP_PATH.'ChuChai/Conf/database.onl.php');

return array_merge($GLOBALS['comm_default'] ?: [],$config_dbs ?: []);