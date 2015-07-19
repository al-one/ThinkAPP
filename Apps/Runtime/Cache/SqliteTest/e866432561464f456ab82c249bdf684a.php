<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cmn-Hans" xmlns:ng="http://angularjs.org">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="renderer" content="webkit">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="Alone,Alone@an56.net">
<title>Require Bootstrap {{'Angular' + 'JS'}}</title>
<style>
body { margin:0; padding-top:70px; font-family:微软雅黑; }
.cf {*zoom:1;}
.cf:before,.cf:after {display:table;line-height:0;content:"";}
.cf:after {clear:both;}
.cl { clear:both; }
.fl { float:left; }
.fr { float:right; }
.btn-group.btn-inline { font-size:0; }
.btn-group.btn-inline > .btn,
.btn-group.btn-inline > .btn-group { float:none; }
td:last-child .dropdown-menu { left:auto; right:0; min-width:inherit; }
.panel .pagination { margin:0; }
input.date-range { min-width:200px; }
.daterangepicker .ranges li { float:left; width:75px; margin-right:5px; }
.an-loading { position:fixed; top:10px; right:10px; float:left; display-:none; color:#888; opacity:.6; }

.navbar-fixed-top,#nav-side { display:none; }
</style>
<script>var isIE = 0;</script>
<!--[if IE 9]><script>isIE = 9;</script><![endif]-->
<!--[if IE 8]><script>isIE = 8;</script><![endif]-->
<!--[if IE 7]><script>isIE = 7;</script><![endif]-->
<!--[if lt IE 7]><script>isIE = 6;</script><![endif]-->
<!--[if lte IE 8]>
<script>
document.createElement('ng-include');document.createElement('ng-pluralize');document.createElement('ng-view');
document.createElement('ng:include');document.createElement('ng:pluralize');document.createElement('ng:view');
</script>
<![endif]-->
<!--[if lte IE 9]><script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js" charset="utf-8"></script><![endif]-->
<script>
window['App'] =
{
  module:'<?php echo MODULE_NAME; ?>',
  controller:'<?php echo CONTROLLER_NAME; ?>',
  action:'<?php echo ACTION_NAME; ?>',
  path:{
    root:'/ThinkAPP/' || '/',
    app:'/ThinkAPP/index.php',
    module:'/ThinkAPP/index.php/SqliteTest',
    controller:'/ThinkAPP/index.php/SqliteTest/Field',
    url:'/ThinkAPP/index.php/SqliteTest/Field',
    action:'/ThinkAPP/index.php/SqliteTest/Field/index',
    safe:'/ThinkAPP/?m=SqliteTest&c=Field',
    public:'/ThinkAPP/Public/',
    tmpl:'<?php echo THEME_PATH; ?>'
  },
  data:{},
  name:'App'
};
</script>
</head>
<body>
<div id="doc">
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle Navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a href="" class="navbar-brand"><i class="fa fa-home"></i></a>
      </div>
      <nav class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li class="active"><a href="./"><i class="fa fa-home"></i> 首页</a></li>
          <li><a href="./">Link</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="./">Action</a></li>
              <li class="divider"></li>
              <li><a href="#">Separated link</a></li>
            </ul>
          </li>
        </ul>
        <form class="navbar-form navbar-left" role="search">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
          </div>
          <button type="submit" class="btn btn-default">Submit</button>
        </form>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="./">Link</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="./">Action</a></li>
            </ul>
          </li>
          <li><a href="{:U('Login/logout')}">退出登录</a></li>
        </ul>
      </nav>
    </div>
  </nav>

  <div class="container-fluid">
    <div class="row">

      <div id="nav-side" class="col-md-3">
        <nav class="panel panel-default affix-">
          <div class="panel-heading">
            <h3 class="panel-title">导航</h3>
          </div>
          <div class="nav list-group">
            <a href="" class="list-group-item">链接链接</a>
            <div class="nav list-group-item">
              <a href="">链接2</a>
              <a href="">链接2</a>
            </div>
            <a href="" class="list-group-item">链接</a>
            <ul class="nav nav-pills nav-stacked list-group-item">
              <li><a href="" class="btn btn-default">链接2</a></li>
              <li><a href="" class="btn btn-default">链接2</a></li>
            </ul>
            <a href="" class="list-group-item">链接</a>
            <div class="nav list-group-item">
              <div class="btn-group-vertical">
                <button type="button" class="btn btn-default">1</button>
                <button type="button" class="btn btn-default">2</button>
                <div class="btn-group" role="group">
                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    Dropdown
                    <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Dropdown link</a></li>
                    <li><a href="#">Dropdown link</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </nav>
      </div>

      <div id="main" class="col-md-9">
        <div class="panel panel-default list-class" ng-controller="listCtrl">
          <div class="panel-heading clearfix">
            <div class="btn-group btn-group-xs pull-right">
              <a href="#renew" class="btn btn-default act-renew"><i class="fa fa-refresh"></i></a>
              <a ng-click="add()" class="btn btn-default"><i class="icon-plus"></i> 添加</a>
            </div>
            <h3 class="panel-title pull-left">列表</h3>
          </div>
          <div class="panel-body">
            <div class="pull-right">
              <div class="btn-group" role="group">
                <a href="" class="btn btn-default">正常</a>
                <a href="" class="btn btn-default">未启用</a>
                <a href="" class="btn btn-primary">不限</a>
              </div>
            </div>
            <div class="pull-left">
              <div class="input-prepend input-group">
                <span class="add-on input-group-addon">数据日期</span>
                <input type="text" name="date_range" value="" class="form-control date-range" data-stime="" data-etime="">
              </div>
            </div>
          </div>
          <table class="table table-striped table-hover">
            <col width="15">
            <col width="60">
            <col width="60">
            <thead>
              <tr>
                <th><input type="checkbox" class="check-all" data-target="[name='id[]']"></th>
                <th>ID</th>
                <th>排序</th>
                <th>字段名称</th>
                <th>变量名</th>
                <th>类型</th>
                <th>状态</th>
                <th width="100">操作</th>
              </tr>
            </thead>
            <tbody ng-init="query('<?php echo url_query('query');?>')">
              <tr class="item an-tree-item" ng-repeat="item in list" data-id="{{item.id}}">
                <th scope="row"><input type="checkbox" name="id[]" value="{{item.id}}"></th>
                <td>{{item.id}}</td>
                <td>{{item.sort}}</td>
                <td>{{item.name}}</td>
                <td>{{item.key}}</td>
                <td>{{data.field_types[item.type].name}}({{item.type}})</td>
                <td>{{item.status}}</td>
                <td>
                  <div class="btn-group btn-group-xs">
                    <a ng-click="edit('<?php echo url_query('query?id={{item.id}}');?>')" class="btn btn-default">修改</a>
                    <div class="btn-group btn-group-xs">
                      <button class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span class="caret"></span></button>
                      <ul class="dropdown-menu" role="menu">
                        <li><a class="btn">删除</a></li>
                      </ul>
                    </div>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
          <div class="panel-footer clearfix">
            <div class="pull-right">
              <nav>
                <ul class="pagination pagination-sm">
                  <li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
                  <li class="active"><a href="">1</a></li>
                  <li><a href="">2</a></li>
                  <li><a href="">3</a></li>
                  <li><a href="">4</a></li>
                  <li><a href="">5</a></li>
                  <li><a href="" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
<script type="text/ng-template" id="modal-form.html">
  <div class="modal-header">
    <h3 class="modal-title">编辑表单</h3>
  </div>
  <div class="modal-body">
    <form action="#" class="form-horizontal form-class">
      <input type="hidden" name="id" value="{{item.id}}" ng-model="item.id">
      <div class="form-group">
        <label class="col-sm-2 control-label">名称</label>
        <div class="col-sm-10">
          <input type="text" name="name" value="" ng-model="item.name" placeholder="必填" class="form-control">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">变量名</label>
        <div class="col-sm-10">
          <input type="text" name="key" value="" ng-model="item.key" placeholder="必填" class="form-control">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">字段类型</label>
        <div class="col-sm-4">
          <select ng-model="item.type" ng-options="v.type as (v.name + '(' + v.type + ')') for v in data.field_types_arr" class="form-control">
            <option value="">-- 请选择 --</option>
          </select>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">排序号</label>
        <div class="col-sm-10">
          <input type="text" name="sort" value="" ng-model="item.sort" placeholder="选填" class="form-control">
        </div>
      </div>
      <div class="fields-comm">
        <div class="form-group">
          <label class="col-sm-2 control-label">默认值</label>
          <div class="col-sm-10">
            <input type="text" name="attrs[data-default]" value="" ng-model="item.attrs['data-default']" placeholder="选填" class="form-control">
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label">显示长度 Size</label>
          <div class="col-sm-10">
            <input type="text" name="attrs[size]" value="" ng-model="item.attrs.size" placeholder="选填" class="form-control">
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label">HTML Class属性</label>
          <div class="col-sm-10">
            <input type="text" name="attrs[class]" value="" ng-model="item.attrs.class" placeholder="选填" class="form-control">
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label">占位提示</label>
          <div class="col-sm-10">
            <input type="text" name="attrs[placeholder]" value="" ng-model="item.attrs.placeholder" placeholder="我就是“占位提示”" class="form-control">
          </div>
        </div>
      </div>
      <div class="fields-text" ng-show="item.type == 'text'">
        <div class="form-group">
          <label class="col-sm-2 control-label">内容最大长度</label>
          <div class="col-sm-10">
            <input type="text" name="attrs[maxlength]" value="" ng-model="item.attrs.maxlength" placeholder="选填" class="form-control">
          </div>
        </div>
      </div>
      <div class="fields-number" ng-show="item.type == 'number' || item.type == 'range'">
        <div class="form-group">
          <label class="col-sm-2 control-label">数值最大值</label>
          <div class="col-sm-10">
            <input type="number" name="attrs[max]" value="" ng-model="item.attrs.max" placeholder="选填" class="form-control">
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label">数值最小值</label>
          <div class="col-sm-10">
            <input type="number" name="attrs[min]" value="" ng-model="item.attrs.min" placeholder="选填" class="form-control">
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label">步长</label>
          <div class="col-sm-10">
            <input type="number" name="attrs[step]" value="" ng-model="item.attrs.step" placeholder="选填" class="form-control">
          </div>
        </div>
      </div>
      <div class="fields-textarea" ng-show="item.type == 'textarea'">
        <div class="form-group">
          <label class="col-sm-2 control-label">行数/高度</label>
          <div class="col-sm-10">
            <input type="number" name="attrs[rows]" value="" ng-model="item.attrs.rows" min="0" placeholder="选填" class="form-control">
          </div>
        </div>
      </div>
      <div class="fields-select" ng-show="item.type == 'select' || item.type == 'radio' || item.type == 'checkbox'">
        <div class="form-group">
          <label class="col-sm-2 control-label">字段内容</label>
          <div class="col-sm-4">
            <textarea name="attrs[choices]" ng-model="item.attrs.choices" class="form-control" style="min-width:100%;min-height:150px;"></textarea>
          </div>
          <div class="col-sm-6 help-block" ng-show="item.type == 'select'">
            只在项目为可选时有效，每行一个字段，等号前面为字段索引(建议用数字)，后面为内容，例如: <br>
            <i>1 = 光电鼠标<br>2 = 机械鼠标<br>3 = 没有鼠标</i><br>
            <i>1.1 = 黑色光电鼠标</i><br><i>1.2 = 红色光电鼠标</i><br>
            <i>1.2.1 = 蓝牙红色光电鼠标</i><br>
            注意: <br>
            1、 "1.2.1 = 蓝牙红色光电鼠标"必须有"1.2 = 红色光电鼠标"和"1 = 光电鼠标"这两项<br>
            2、 "1.2.1"之间不能有空格<br>
            3、 字段确定后请勿修改索引和内容的对应关系，但仍可以新增字段。如需调换显示顺序，可以通过移动整行的上下位置来实现
          </div>
          <div class="col-sm-6 help-block" ng-show="item.type == 'radio' || item.type == 'checkbox'">
            只在项目为可选时有效，每行一个字段，等号前面为字段索引(建议用数字)，后面为内容，例如: <br>
            <i>1 = 光电鼠标<br>2 = 机械鼠标<br>3 = 没有鼠标</i><br>
            注意: 字段确定后请勿修改索引和内容的对应关系，但仍可以新增字段。如需调换显示顺序，可以通过移动整行的上下位置来实现
          </div>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label"></label>
        <div class="col-sm-10">
          <ul>
            <li ng-repeat="(k,v) in item.attrs.choices_tree">
              {{k + ' = ' + item.attrs.choices_data[k]}}
              <ul>
                <li ng-repeat="(k2,v2) in v">
                  {{k2 + ' = ' + item.attrs.choices_data[k2]}}
                  <ul>
                    <li ng-repeat="(k3,v3) in v2">
                      {{k3 + ' = ' + item.attrs.choices_data[k3]}}
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">状态</label>
        <div class="col-sm-10">
          <label class="checkbox checkbox-inline"><input type="checkbox" name="status" value="1" ng-checked="item.status == 1"> 启用</label>
        </div>
      </div>
    </form>
  </div>
  <div class="modal-footer">
    <button class="btn btn-primary" ng-click="submit('<?php echo url_query('save');?>')">保存</button>
    <button class="btn btn-warning" ng-click="cancel()">取消</button>
  </div>
</script>

<div class="an-loading"><i class="fa fa-spinner fa-spin fa-3x"></i></div>
<script>window.require || document.write('<script src="http://cdn.bootcss.com/require.js/2.1.11/require.min.js" charset="utf-8"><\/script>');</script>
<script>//window.jQuery || document.write('<script src="http://apps.bdimg.com/libs/jquery/1.11.1/jquery.min.js" charset="utf-8"><\/script>');</script>
<script>//window.angular || document.write('<script src="http://cdn.bootcss.com/angular.js/1.3.15/angular.min.js" charset="utf-8"><\/script>');</script>
<script>
(function(ready,ngcbk)
{

  var cdn = 'http://cdn.bootcss.com/';

  require.config(
  {
    waitSeconds:60 * 10,
    paths:
    {
      'jquery'               : [cdn + 'jquery/1.11.1/jquery.min','http://apps.bdimg.com/libs/jquery/1.11.1/jquery.min'],
      'json2'                : cdn + 'json2/20140204/json2.min',
      'require-css'          : cdn + 'require-css/0.1.8/css.min',
      'bootstrap'            : cdn + 'twitter-bootstrap/3.3.4/js/bootstrap.min',
      'bootstrap-css'        : cdn + 'twitter-bootstrap/3.3.4/css/bootstrap.min',
      'angular'              : cdn + 'angular.js/1.3.15/angular.min',
      'angular-route'        : cdn + 'angular.js/1.3.15/angular-route.min',
      'angular-touch'        : cdn + 'angular.js/1.3.15/angular-touch.min',
      'angular-animate'      : cdn + 'angular.js/1.3.15/angular-animate.min',
      'angular-ui-bootstrap' : cdn + 'angular-ui-bootstrap/0.13.0/ui-bootstrap-tpls.min',
      'animate-css'          : cdn + 'animate.css/3.3.0/animate.min',
      'font-awesome'         : cdn + 'font-awesome/4.3.0/css/font-awesome.min'
    },
    shim:
    {
      'json2'                : {exports:'JSON'},
      'angular'              : {deps:[window.JSON ? '' : 'json2'],exports:'angular'},
      'angular-route'        : {deps:['angular'],exports:'ngRoute'},
      'angular-touch'        : {deps:['angular'],exports:'ngTouch'},
      'angular-animate'      : {deps:['angular'],exports:'ngAnimate'},
      'angular-ui-bootstrap' : {deps:['angular','angular-touch','angular-animate','bootstrap','css!bootstrap-css']}
    },
    map:
    {
      '*' : {'css' : 'require-css'}
    }
  });

  // - jQuery
  require(['jquery'],function($)
  {
    $(ready);

    // - Angular
    $(function($)
    {
      require(['angular-ui-bootstrap','angular-route'],ngcbk);
      require(['css!animate-css','css!font-awesome']);
    });
  });

})

// - jQuery
(function($)
{
  window.body = $('body:first');
  window.loader = $('.an-loading');

  return $;
},

// - Angular
function()
{

  var app = angular.module('App',['ui.bootstrap','ngTouch','ngAnimate'])

  .filter('str2jso',function()
  {
    return function(jss)
    {
      return angular.fromJson(jss);
    };
  })

  .controller('listCtrl',function($scope,$http,$modal,$log)
  {
    $scope.data = {};
    $scope.data.list = [];
    $scope.query = function(url)
    {
      $scope.list = [];
      $http({method:'GET',url:url,params:{ajax:1}})
      .success(function(ret)
      {
        if(ret.ret == 0)
        {
          var data = ret.data;
          $scope.data = data;
          $scope.list = data.list || [];
          $scope.item = data.item || $scope.list[0] || {};
        }
      });
    }
    $scope.add = function()
    {
      $scope.edit(false);
    }
    $scope.edit = function(url)
    {
      $scope.data.type = 'item';
      $scope.data.url  = '';
      if(url)
      {
        $scope.data.type = 'ajax';
        $scope.data.url  = url;
      }
      var modalInstance = $modal.open(
      {
        templateUrl:'modal-form.html',
        controller:'ModalFormCtrl',
        size:'lg',
        resolve:
        {
          data : function(){ return $scope.data; }
        }
      });
      modalInstance.result.then(function(selectedItem)
      {
        $scope.selected = selectedItem;
        console.log(selectedItem);
      },
      function()
      {
        $log.info('Modal dismissed at: ' + new Date());
      });
    };
  })

  .controller('ModalFormCtrl',function($scope,$http,$modalInstance,data)
  {
    console.log(data);
    $scope.data = data;
    $scope.list = data.list || [];
    $scope.item = data.item || $scope.list[0] || {};
    if(data.type == 'ajax')
    {
      var url = data.url;
      $http({method:'GET',url:url,params:{ajax:1}})
      .success(function(ret)
      {
        if(ret.ret == 0)
        {
          var data = ret.data || {};
          $scope.data = data;
          $scope.list = data.list || [];
          $scope.item = data.item || $scope.list[0] || {};
        }
      });
    }
    $scope.submit = function(url)
    {
      $http(
      {
        method:'POST',
        url:url,
        params:{ajax:1},
        data:$.param($scope.item),
        headers:{'Content-Type':'application/x-www-form-urlencoded; charset=UTF-8'}
      })
      .success(function(ret)
      {
        if(ret.ret == 0)
        {
          var data = ret.data || {};
          $scope.list = data.list || [];
          $scope.item = data.item || $scope.list[0] || {};
          alert(ret.msg);
        }
        else if(ret.msg) alert(ret.msg);
      });
    };
    $scope.cancel = function()
    {
      $modalInstance.dismiss('cancel');
    };
  });

  // - Angular Start
  angular.bootstrap(document,[app.name]);
  window.angular_app = app;
  $(document).trigger('angular.ready');
  loader.hide(1000);

  return app;
});

require(['jquery'],function($)
{
  $(document)
  .on('angular.ready',function()
  {
    console.log(angular_app);
  });
});
</script>
</body>
</html>