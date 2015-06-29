<?php
namespace SqliteTest\Controller;

class ModelController extends CommonController
{

  public function index()
  {
    $this->display();
  }

  public function query()
  {
    $id = (int)$_REQUEST['id'];
    $map = array();
    if($id >= 1) $map['id'] = $id;
    $mod = M(CONTROLLER_NAME);
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
      $this->data = $dat;
    }
    $this->display();
  }

  public function save()
  {
    $id = (int)$_REQUEST['id'];
    $dat = I('post.');
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
        var_dump($dat);die($this->ret['msg']);
        //$id = (int)$mod->add($dat);
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
          $dat = array('item' => $dat);
          $this->data = $dat;
          $this->ret['msg'] = '操作成功';
        }
      }
    }
    $this->display();
  }

}