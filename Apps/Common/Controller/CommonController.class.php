<?php
namespace Common\Controller;
use Think\Controller;

class CommonController extends Controller
{

  public function __construct()
  {
    call_user_func_array([__CLASS__,'parent::__construct'],func_get_args());
  }


  /*
   * 模板显示 兼容Ajax
   */
  protected function display($templateFile = '',$charset = '',$contentType = '',$content = '',$prefix = '')
  {
    if(trim($_REQUEST['ajax']) && $this->data)
    {
      $dat = $this->data;
      isset($this->navs) && $dat['navs'] = $this->navs;
      //$dat = array_merge((array)$dat,get_object_vars($this) ?: []);
      $this->success($dat);
    }
    else parent::display($templateFile,$charset,$contentType,$content,$prefix);
  }

  /*
   * 操作成功跳转的快捷方法 高级
   * $this->success('成功',U('index'));
   * $this->success(['key' => $val]);
   * $this->data = ['key' => $val];$this->success('成功');
   */
  protected function success($message = '',$jumpUrl = '',$ajax = false)
  {
    if(!is_string($message))
    {
      $dat = $message ?: [];
      unset($dat['_message']);
      if($ajax || IS_AJAX) $ajax = ['data' => $dat];
      $message = $message['_message'] ?: '';
    }
    elseif($this->data)
    {
      if($ajax || IS_AJAX) $ajax = ['data' => $this->data];
    }
    parent::success($message,$jumpUrl,$ajax);
  }

}