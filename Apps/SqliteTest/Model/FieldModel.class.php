<?php
namespace SqliteTest\Model;

class FieldModel extends CommonModel
{

  protected $_validate = array(
    array('name','require','名称不能为空'),
    array('key','','key已存在',self::VALUE_VALIDATE,'unique',self::MODEL_INSERT),
  );

  protected $_auto = array(
    array('status',1),
    array('sort','auto_sort',self::MODEL_BOTH,'callback'),
    array('name','trim',self::MODEL_BOTH,'function'),
    array('attrs','auto_attrs',self::MODEL_BOTH,'callback'),
  );

  public $field_types = array(
    'text'     => array(
      'name'   => '字串',
      'tag'    => 'input',
    ),
    'number'   => array(
      'name'   => '数字',
      'tag'    => 'input',
    ),
    'textarea' => array(
      'name'   => '长文本',
      'tag'    => 'textarea',
      'attr'   => array('type' => ''),
    ),
    'url'      => array(
      'name'   => '超级链接',
      'tag'    => 'input',
    ),
    'select'   => array(
      'name'   => '下拉选择',
      'tag'    => 'select',
      'attr'   => array('type' => ''),
    ),
    'radio'    => array(
      'name'   => '单选框',
      'tag'    => 'input',
    ),
    'checkbox' => array(
      'name'   => '多选框',
      'tag'    => 'input',
    ),
    'email'    => array(
      'name'   => '电子邮件',
      'tag'    => 'input',
    ),
    'image'    => array(
      'name'   => '上传图片',
      'tag'    => 'input',
      'attr'   => array('type' => 'file'),
    ),
    'date' => array(
      'name'   => '日期',
      'tag'    => 'input',
    ),
    'datetime' => array(
      'name'   => '日期时间',
      'tag'    => 'input',
    ),
    'range'    => array(
      'name'   => '范围',
      'tag'    => 'input',
    ),
  );


  public function get_choices_data($str = '')
  {
    $dat = array();
    if($str && preg_match_all('/([\d.]+)[ \t]*=[ \t]*([^\r\n]+)/isu',$str,$tmp))
    {
      $choices = array();
      if($tmp[0] && is_array($tmp[0])) foreach($tmp[0] as $i => $v)
      {
        $choices[$tmp[1][$i]] = $tmp[2][$i];
      }
      $dat['data'] = $choices;
      $dat['tree'] = $this->get_choices_tree($choices);
    }
    return $dat;
  }

  public function get_choices_tree($arr = array(),$key = '')
  {
    $dat = array();
    if($arr && is_array($arr)) foreach($arr as $k => $v)
    {
      $reg = $key ? '/^'.$key.'\.[^.\s]+$/i' : '/^[^.\s]+$/i';
      if(preg_match($reg,$k)) $dat[$k] = $this->get_choices_tree($arr,$k);
    }
    return $dat;
  }

}