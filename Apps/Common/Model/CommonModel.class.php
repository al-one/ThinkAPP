<?php
namespace Common\Model;
use Think\Model;

class CommonModel extends Model
{

  public function __construct()
  {
    call_user_func_array([__CLASS__,'parent::__construct'],func_get_args());
  }

  public static function Instance()
  {
    static $_instances = [];
    $arg = func_get_args();
    $mod = get_called_class();
    $key = md5($mod.'|'.json_encode($arg));
    if(!isset($_instances[$key]) || !is_subclass_of($_instances[$key],$mod))
    {
      $obj = new \ReflectionClass($mod);
      $_instances[$key] = $obj->newInstanceArgs($arg);
    }
    return $_instances[$key];
  }


  public function getPager()
  {
    return $this->pager;
  }

  // 列表分页
  public function plist($page = 20,$map = [])
  {
    $map && $this->where($map);
    $opt = $this->options;
    if(isset($opt['group']) && $opt['group'])
    {
      $cnt = M('','',$this->connection)->table($this->buildSql())->alias('t')->count();
    }
    else
    {
      $alias = $this->options['alias'] ?: '';
      $alias = $alias ? ($alias.'.') : '';
      $cnt = $this->count($alias.($this->getPk() ?: ''));
    }
    $opt && $this->options = array_merge($opt,$this->options);
    $pag = is_object($page) ? $page : new \Think\Page($cnt,$page);
    $this->limit($pag->firstRow.','.$pag->listRows);
    $this->pager = $pag;
    return $this;
  }

  // 获取列表
  public function lists($map = [],$ord = [])
  {
    $map && $this->where($map);
    $ord && $this->order($ord);
    $arr = $this->select();
    return $arr;
  }

  // 获取列表 以某个字段(主键)为数组的键
  public function klist($key = true,$map = [],$ord = [])
  {
    $key === true && $key = $this->getPk() ?: 'id';
    $arr = $this->lists($map,$ord) ?: [];
    if($arr && $key) $arr = array_combine(array_column($arr,$key) ?: [],$arr);
    return $arr;
  }

  // 获取列表 以某个字段分组
  public function glist($gby,$map = array(),$ord = array())
  {
    $arr = $this->lists($map,$ord) ?: array();
    $lst = [];
    if($arr && $gby) foreach($arr as $v)
    {
      $lst[$v[$gby]][] = $v;
    }
    return $lst;
  }

  // 软删除
  public function softDel($map = [])
  {
    $ret = false;
    $_pk = $this->getPk() ?: 'id';
    if(is_numeric($map) && !is_array($pk)) $map = [$_pk => $map];
    if($map) $ret = $this->where($map)->setField('delete_at',NOW_TIME);
    return $ret;
  }

  // 自动完成 字符串
  public function autoStr($str = '')
  {
    return (string)$str;
  }

  // 自动完成 字串
  public function autoTrim($str = '')
  {
    return (string)trim($this->autoStr($str));
  }

  // 自动完成 整数
  public function autoInt($num = 0)
  {
    return (int)$num;
  }

  // 自动完成 时间
  public function autoTime($str = 0)
  {
    return is_numeric($str) ? (int)$str : strtotime($str);
  }


  // 自动完成 关联IDs
  public function autoJoinIds($ids = [])
  {
    if(!is_array($ids) && trim((string)$ids) === '') return '';
    $ids = (array)$ids;
    array_unshift($ids,'');
    array_push($ids,'');
    return implode(',',$ids);
  }

  public function getJoinIds($ids = '')
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


  // 自动完成 附加属性
  public function autoAttrs($attrs = [])
  {
    return $attrs && is_array($attrs) ? json_encode($attrs,JSON_UNESCAPED_UNICODE) : '';
  }

  public function getAttrs($attr = '')
  {
    return $attr && is_string($attr) ? json_decode($attr,true) : $attr;
  }

  public function getAttrsByItem($arr = [],$fields = ['attrs'])
  {
    if(!$fields) return $arr;
    if(!is_array($arr)) return [];
    $fields = is_array($fields) ? $fields : preg_split('/\s*,\s*/',$fields);
    foreach($fields as $f)
    {
      $arr[$f] = $this->getAttrs($arr[$f]);
    }
    return $arr;
  }

  public function getAttrsByList($arr = [],$fields = ['attrs'])
  {
    if(!$fields) return $arr;
    if(!is_array($arr)) return [];
    $nar = [];
    foreach($arr as $k => $v)
    {
      $nar[$k] = $this->getAttrsByItem($v,$fields);
    }
    return $nar;
  }

  public function completeItem($arr = [])
  {
    isset($arr['attrs']) && $arr = $this->getAttrsByItem($arr);
    return $arr;
  }

  public function completeList($arr = [])
  {
    return array_map(function($v)
    {
      return $this->completeItem($v);
    },$arr ?: []);
  }

  // 自动处理并验证某个字段
  public function autoField($field = '',$data = '',$type = self::MODEL_BOTH)
  {
    if(!trim($field)) return false;
    if(is_object($data)) $data = get_object_vars($data);
    $dat = array($field => $data);
    $dat = $this->autoFields($dat,$type);
    if(!$this->autoValidation($dat,$type)) return false;
    return $dat[$field];
  }

  // ThinkPHP 自动完成 public
  public function autoFields($data = [],$type = self::MODEL_BOTH)
  {
    if(!empty($this->options['auto']))
    {
      $_auto = $this->options['auto'];
      unset($this->options['auto']);
    }
    elseif(!empty($this->_auto))
    {
      $_auto = $this->_auto;
    }
    // 自动填充
    if(isset($_auto))
    {
      foreach($_auto as $auto)
      {
        // 填充因子定义格式
        // array('field','填充内容','填充条件','附加规则',[额外参数])
        if(empty($auto[2])) $auto[2] = self::MODEL_INSERT; // 默认为新增的时候自动填充
        if($type == $auto[2] || $auto[2] == self::MODEL_BOTH)
        {
          if(empty($auto[3])) $auto[3] = 'string';
          switch(trim($auto[3]))
          {
            case 'function': // 使用函数进行填充 字段的值作为参数
            case 'callback': // 使用回调方法
              $args = isset($auto[4])?(array)$auto[4]:array();
              if(isset($data[$auto[0]]))
              {
                array_unshift($args,$data[$auto[0]]);
              }
              if('function'==$auto[3])
              {
                $data[$auto[0]] = call_user_func_array($auto[1], $args);
              }
              else
              {
                $data[$auto[0]] = call_user_func_array(array(&$this,$auto[1]), $args);
              }
              break;
            case 'field':  // 用其它字段的值进行填充
              $data[$auto[0]] = $data[$auto[1]];
              break;
            case 'ignore': // 为空忽略
              if($auto[1]===$data[$auto[0]]) unset($data[$auto[0]]);
              break;
            case 'string':
            default: // 默认作为字符串填充
              $data[$auto[0]] = $auto[1];
          }
          if(isset($data[$auto[0]]) && false === $data[$auto[0]]) unset($data[$auto[0]]);
        }
      }
    }
    return $data;
  }

  public function getFieldsInfo()
  {
    $ret = $this->fields ?: [];
    if(!isset($ret['_type']))
    {
      $tab = $this->options['table'] ?: $this->getTableName();
      if(C('DB_FIELDS_CACHE'))
      {
        $ret = F('_fields/'.strtolower(($this->dbName ?: C('DB_NAME')).'.'.$tab)) ?: [];
      }
      if(!isset($ret['_type']) && $tab)
      {
        $ret = $this->db->getFields($tab);
      }
    }
    $ret && $this->fields = $ret;
    return $ret;
  }

}