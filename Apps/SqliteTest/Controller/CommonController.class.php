<?php
namespace SqliteTest\Controller;
use Think\Controller;

class CommonController extends Controller
{

  public $ret = array('ret' => 0,'msg' => '');

  public function display($templateFile='',$charset='',$contentType='',$content='',$prefix='')
  {
    $ret = is_array($this->ret) ? $this->ret : array('ret' => 0,'msg' => '');
    $arr = array(
      'ret'   => $ret['ret'],
      'msg'   => $ret['msg'],
      'data'  => $this->data,
      'trace' => trace(),
    );
    if(IS_AJAX) $this->ajaxReturn($arr,'JSON');
    else $this->view->display($templateFile,$charset,$contentType,$content,$prefix);
  }

  public function attr2array($attr)
  {
    return $attr && is_string($attr) ? json_decode($attr,true) : $attr;
  }

  public function attr2array_arr($arr = array(),$fields = array('attrs'))
  {
    if(!$fields) return $arr;
    if(!is_array($arr)) return array();
    $fields = is_array($fields) ? $fields : preg_split('/\s*,\s*/',$fields);
    foreach($fields as $f)
    {
      $arr[$f] = $this->attr2array($arr[$f]);
    }
    return $arr;
  }

  public function attr2array_all($arr = array(),$fields = array('attrs'))
  {
    if(!$fields) return $arr;
    if(!is_array($arr)) return array();
    $nar = array();
    foreach($arr as $k => $v)
    {
      $nar[$k] = $this->attr2array_arr($v,$fields);
    }
    return $nar;
  }

}