<?php
namespace SqliteTest\Model;

class PageModel extends CommonModel
{

  protected $_validate = array(
    array('name','require','名称不能为空'),
    array('key','','key已存在',2,'unique',1),
  );

  protected $_auto = array(
    array('status',1),
    array('sort','auto_sort',3,'callback'),
    array('name','trim',3,'function'),
    array('attrs','auto_attrs',3,'callback'),
    array('utime','time',3,'function'),
    array('atime','time',1,'function'),
  );

}