<?php
namespace Template\Controller;
use Think\Controller;

class CommonController extends Controller
{

  public function _initialize()
  {
    $this->getTemplateTheme();
    $this->setThemePath();
  }

  // 切换模板主题
  protected function getTemplateTheme()
  {
    $tpl = C('TMPL_DETECT_THEME')
         ? I('get.'.C('VAR_TEMPLATE'),I('session.think_template',''),'strip_tags')
         : C('DEFAULT_THEME');
    if($tpl && !in_array($theme,explode(',',C('THEME_LIST'))))
    {
      session('think_template',$tpl);
      C('DEFAULT_THEME',$tpl);
    }
    return $tpl;
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