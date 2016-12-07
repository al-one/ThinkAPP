<?php

return [

  // 模块化
  'DEFAULT_MODULE' => 'ChuChai',
  'URL_MODEL'      => 0,// 0:普通模式 1:PATHINFO 2:REWRITE 3:兼容模式

  // 模板主题
  'DEFAULT_THEME'  => 'Default',
  'TMPL_FILE_DEPR' => '-',
  'TMPL_TEMPLATE_SUFFIX' => '.html',
  'TMPL_L_DELIM'   => '{',
  'TMPL_R_DELIM'   => '}',
  'LAYOUT_ON'      => false,
  'TMPL_PARSE_STRING' =>
  [
    '__PUBLIC__' => '/ThinkAPP/Apps/ChuChai/View/Default/static',
  ],

  'SHOW_PAGE_TRACE' => defined('APP_DEBUG') && APP_DEBUG,
  'LOAD_EXT_CONFIG' => 'database',

];