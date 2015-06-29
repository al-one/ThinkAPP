<?php
namespace SqliteTest\Controller;

class IndexController extends CommonController
{

  public function index()
  {
    //$arr = M()->query('SELECT * FROM sqlite_master WHERE type = \'table\' ORDER BY name');
    //$arr = M('SqliteMaster')->field('name,type')->where('type = \'table\'')->limit(10)->select();
    //$arr = M('SqliteMaster')->getDbFields();
    $arr = M('SqliteMaster')->where(array('type' => 'table'))->limit(10)->strict(true)->select();//
    //$arr = M()->query('PRAGMA table_info( sqlite_master )');
    echo '<pre>';print_r($arr);echo '</pre>';
    //$this->show(CONTROLLER_NAME);
    //$this->display();
  }

  public function getTables()
  {
    $limit = ($limit = I('limit')) == '' ? 100 : (int)$limit;
    $sql = 'select t.*,f.count_index 
            from (select * from sqlite_master union all select * from sqlite_temp_master) t
            left join (
              select count(name) as count_index,tbl_name 
              from (select * from sqlite_master union all select * from sqlite_temp_master) 
              where type = \'index\' 
              group by tbl_name
            ) f on f.tbl_name = t.name 
            where t.type = \'table\' 
            order by t.name 
            limit '.$limit;
    $dat['list'] = M()->query($sql);
    $this->data = $dat['list'];
    echo '<pre>';print_r($this->data);echo '</pre>';
  }

  public function query()
  {
    $table = I('table','sqlite_master','trim');
    $limit = ($limit = I('limit')) == '' ? 100 : (int)$limit;
    $mod = M();
    if($table) $mod = $mod->table($table);
    $mod = $mod->limit($limit);
    $this->data = $mod->select();
    echo '<pre>';print_r($this->data);echo '</pre>';
  }

}