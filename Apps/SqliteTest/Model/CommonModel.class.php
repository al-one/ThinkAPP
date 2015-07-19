<?php
namespace SqliteTest\Model;
use Think\Model\RelationModel;

class CommonModel extends RelationModel
{

  public function auto_bool($str = 0)
  {
    return trim($str) == 1 ? 1 : 0;
  }

  public function auto_status($str = 0)
  {
    return $this->auto_bool($str);
  }

  public function auto_sort($str = 0)
  {
    return (int)$str;
  }

  public function auto_time($str = 0)
  {
    return is_numeric($str) ? (int)$str : strtotime($str);
  }

  public function auto_attrs($attrs = array())
  {
    return $attrs && is_array($attrs) ? json_encode($attrs) : '';
  }

  public function auto_sort_set($id = 0,$field = 'sort')
  {
    if($id >= 1 && $field && trim($_REQUEST[$field]) === '')
    {
      $sort = $id * 10;
      $this->where(array('id' => $id))->setField($field,$sort);
      return $sort;
    }
    else return false;
  }

}