<?php
namespace SqliteTest\Controller;

class PageController extends CommonController
{

  public function index()
  {
    $this->display();
  }

  public function query()
  {
    $id  = req('id/d');
    $map = array();
    if($id >= 1) $map['id'] = $id;
    $mod = D(CONTROLLER_NAME);
    $arr = $mod->where($map)->select();
    if(!$arr)
    {
      $this->ret['msg'] = '未找到记录';
    }
    else
    {
      $arr = $this->attr2array_all($arr);
      $dat['list'] = $arr;
      $dat['item'] = $arr[0];
    }
    $this->data = $dat;
    $this->display();
  }

  public function save()
  {
    $id  = req('id/d');
    $dat = req('post.');
    $dat['name'] = trim($dat['name']);
    $dat['key']  = trim($dat['key']);
    $mod = D(CONTROLLER_NAME);
    if(!$dat = $mod->create($dat))
    {
      $this->ret['ret'] = 1;
      $this->ret['msg'] = $mod->getError();
    }
    else
    {
      $isadd = $id < 1;
      // add
      if($isadd)
      {
        //var_dump($dat);die("\n".$this->ret['msg']);
        $id = (int)$mod->add($dat);
      }
      // edit
      else
      {
        $num = $dat['key'] === '' ? 0 : (int)$mod->where(array('key' => $dat['key']))->count('id');
        $map = array('id' => $id);
        if(!$old = $mod->where($map)->find())
        {
          $this->ret['ret'] = 1;
          $this->ret['msg'] = '对象不存在';
        }
        elseif($dat['key'] != $old['key'] && $num > 0)
        {
          $this->ret['ret'] = 1;
          $this->ret['msg'] = 'key已存在';
        }
        elseif($mod->where($map)->save($dat) === false)
        {
          $this->ret['ret'] = 1;
          $this->ret['msg'] = '保存失败';
        }
      }
      if($this->ret['ret'] == 0)
      {
        if($id < 1)
        {
          $this->ret['ret'] = 1;
          $this->ret['msg'] = '操作失败';
        }
        else
        {
          $dat['id'] = $id;
          $sort = $mod->auto_sort_set($id);//自动排序
          if($sort !== false) $dat['sort'] = $sort;
          $dat = $this->attr2array_arr($dat);
          $dat['parent_tree'] = $this->save_tree($id,$dat['parent_id']);
          $dat = array('item' => $dat);
          $this->data = $dat;
          $this->ret['msg'] = '操作成功';
        }
      }
    }
    $this->display();
  }

  protected function save_tree($id,$pid)
  {
    $dat = array();
    $arr = $this->tree($pid);
    if($id >= 1 && is_array($arr) && $arr)
    {
      $mod = D('PageRel');
      $mod->where(array('page_id' => $id))->delete();
      foreach($arr as $vid)
      {
        $vid = (int)$vid;
        if($vid >= 1) $dat[] = array('page_id' => $id,'parent_id' => $vid);
      }
      if($dat)
      {
        $mod->addAll($dat);
      }
    }
    return $dat;
  }

  protected function tree($pid,$arr = array())
  {
    $pid = (int)$pid;
    if($pid > 0)
    {
      $row = D(CONTROLLER_NAME)->field('id,parent_id')->where(array('id' => $pid))->find();
      if($row)
      {
        $arr[] = $row['id'];
        return $this->tree($row['parent_id'],$arr);
      }
      else return $arr;
    }
    else return $arr;
  }

  public function tree_test()
  {
    print_r($this->tree(req('id/d')));die("\n");
  }

}