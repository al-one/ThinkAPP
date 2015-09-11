<?php
namespace Template\Controller;
use Think\Controller;

class EmptyController extends CommonController
{
  public function _empty()
  {
    $this->display();
  }
}