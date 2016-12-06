<?php
namespace ChuChai\Model;
use Common\Model\CommonModel;

class PublicModel extends CommonModel
{

  protected $connection  = 'conn_chuchai';
  protected $tablePrefix = 'bd_';


  // 自动完成 字符串
  public function auto_str($str = '')
  {
    return (string)$str;
  }

  // 自动完成 字串
  public function auto_trim($str = '')
  {
    return (string)trim($this->auto_str($str));
  }

  // 自动完成 整数
  public function auto_int($num = 0)
  {
    return (int)$num;
  }

  // 自动完成 时间
  public function auto_time($str = 0)
  {
    return is_numeric($str) ? (int)$str : strtotime($str);
  }

  // 自动完成 附加属性
  public function auto_attrs($attrs = array())
  {
    return $attrs && is_array($attrs) ? json_encode($attrs,JSON_UNESCAPED_UNICODE) : '';
  }

  public function attr2array($attr)
  {
    return (is_string($attr) ? json_decode($attr,true) : $attr) ?: [];
  }

  public function attr2array_row($arr = array(),$fields = array('attrs'))
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
      $nar[$k] = $this->attr2array_row($v,$fields);
    }
    return $nar;
  }

  // 自动完成 关联IDs
  public function auto_join_ids($ids = [])
  {
    if(!is_array($ids) && trim((string)$ids) === '') return '';
    $ids = (array)$ids;
    array_unshift($ids,'');
    array_push($ids,'');
    return implode(',',$ids);
  }

  public function get_join_ids($ids = '')
  {
    $ret = [];
    if(is_array($ids)) $ret = $ids;
    elseif(is_string($ids))
    {
      $ids = trim($ids,', \t\n\r\0\x0B');
      $ret = $ids == '' ? [] : explode(',',$ids);
    }
    return $ret;
  }

  // 自动设置排序
  public function auto_sort_set($id = 0,$field = 'sort')
  {
    if($id >= 1 && $field && trim($_REQUEST[$field]) === '')
    {
      $sort = $id * 10;
      $this->where(['id' => $id])->setField($field,$sort);
      return $sort;
    }
    else return false;
  }

}