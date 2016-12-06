<?php
namespace ChuChai\Controller;
use Common\Controller\CommonController;

class PublicController extends CommonController
{

  public function __construct()
  {
    parent::__construct();
    $this->setThemePath();

    // 每页显示条数
    $this->page_size = (int)C('ITEMS_PER_PAGE') ?: 50;
    if($pgs = (int)$_REQUEST['page_size']) $this->page_size = $pgs;
    if($_REQUEST['page_size'] == 'export') $this->page_size = 5000;
  }

  // 替换模板路径
  protected function setThemePath()
  {
    $cfg = (array)C('TMPL_PARSE_STRING');
    $dft = C('DEFAULT_THEME');
    $tpl = __ROOT__.'/'.(defined('THEME_PATH') ? THEME_PATH : (APP_PATH.MODULE_NAME.'/'.C('DEFAULT_V_LAYER').'/'.($dft ? ($dft.'/') : '')));
    defined('__TMPL__') || define('__TMPL__',$tpl);
    if(!isset($cfg['__TMPL__']))
    {
      $cfg += array('__TMPL__' => $tpl);
      C('TMPL_PARSE_STRING',$cfg);
    }
    return $tpl;
  }

}