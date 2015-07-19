<!DOCTYPE html>
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
  module:'<php>echo MODULE_NAME;</php>',
  controller:'<php>echo CONTROLLER_NAME;</php>',
  action:'<php>echo ACTION_NAME;</php>',
  path:{
    root:'__ROOT__/' || '/',
    app:'__APP__',
    module:'__MODULE__',
    controller:'__CONTROLLER__',
    url:'__URL__',
    action:'__ACTION__',
    safe:'__SELF__',
    public:'__PUBLIC__/',
    tmpl:'<php>echo THEME_PATH;</php>'
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

      <div class="col-md-3">
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
                <th>分类名称</th>
                <th>分类代码</th>
                <th>状态</th>
                <th width="100">操作</th>
              </tr>
            </thead>
            <tbody ng-init="query('<{:url_query('query')}>')">
              <tr class="item an-tree-item" ng-repeat="item in list" data-id="{{item.id}}">
                <th scope="row"><input type="checkbox" name="id[]" value="{{item.id}}"></th>
                <td>{{item.id}}</td>
                <td>{{item.sort}}</td>
                <td>{{item.name}}</td>
                <td>{{item.key}}</td>
                <td>{{item.status}}</td>
                <td>
                  <div class="btn-group btn-group-xs">
                    <a ng-click="edit('<{:url_query('query?id={{item.id}}')}>')" class="btn btn-default">修改</a>
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
          <input type="text" name="name" value="" ng-model="item.name" class="form-control" placeholder="必填">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">分类代码</label>
        <div class="col-sm-10">
          <input type="text" name="key" value="" ng-model="item.key" class="form-control" placeholder="选填">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">排序号</label>
        <div class="col-sm-10">
          <input type="text" name="sort" value="" ng-model="item.sort" class="form-control" placeholder="选填">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">属性1</label>
        <div class="col-sm-10">
          <input type="text" name="attrs['a1']" value="" ng-model="item.attrs.a1" class="form-control">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">属性2</label>
        <div class="col-sm-10">
          <input type="text" name="attrs['a2']" value="" ng-model="item.attrs.a2" class="form-control">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">状态</label>
        <div class="col-sm-10">
          <label class="checkbox checkbox-inline"><input type="checkbox" name="c_open" value="1"> 启用</label>
        </div>
      </div>
    </form>
  </div>
  <div class="modal-footer">
    <button class="btn btn-primary" ng-click="submit('<{:url_query('save')}>')">保存</button>
    <button class="btn btn-warning" ng-click="cancel()">取消</button>
  </div>
</script>


<div ng-controller="AccordionDemoCtrl">
  <p>
    <button class="btn btn-default btn-sm" ng-click="status.open = !status.open">Toggle last panel</button>
    <button class="btn btn-default btn-sm" ng-click="status.isFirstDisabled = ! status.isFirstDisabled">Enable / Disable first panel</button>
  </p>
  <label class="checkbox">
    <input type="checkbox" ng-model="oneAtATime">
    Open only one at a time
  </label>
  <accordion close-others="oneAtATime">
    <accordion-group heading="Static Header, initially expanded" is-open="status.isFirstOpen" is-disabled="status.isFirstDisabled">
      This content is straight in the template.
    </accordion-group>
    <accordion-group heading="{{group.title}}" ng-repeat="group in groups">
      {{group.content}}
    </accordion-group>
    <accordion-group heading="Dynamic Body Content">
      <p>The body of the accordion group grows to fit the contents</p>
        <button class="btn btn-default btn-sm" ng-click="addItem()">Add Item</button>
        <div ng-repeat="item in items">{{item}}</div>
    </accordion-group>
    <accordion-group is-open="status.open">
        <accordion-heading>
            I can have markup, too! <i class="pull-right glyphicon" ng-class="{'glyphicon-chevron-down': status.open, 'glyphicon-chevron-right': !status.open}"></i>
        </accordion-heading>
        This is just some content to illustrate fancy headings.
    </accordion-group>
  </accordion>
</div>


<div ng-controller="ModalDemoCtrl">
  <button class="btn btn-default" ng-click="open()">Open me!</button>
  <button class="btn btn-default" ng-click="open('lg')">Large modal</button>
  <button class="btn btn-default" ng-click="open('sm')">Small modal</button>
  <button class="btn btn-default" ng-click="toggleAnimation()">Toggle Animation ({{ animationsEnabled }})</button>
  <div ng-show="selected">Selection from a modal: {{ selected }}</div>
</div>
<script type="text/ng-template" id="myModalContent.html">
  <div class="modal-header">
    <h3 class="modal-title">I am a modal!</h3>
  </div>
  <div class="modal-body">
    <ul>
      <li ng-repeat="item in items">
        <a ng-click="selected.item = item">{{item}}</a>
      </li>
    </ul>
    Selected:
    <b>{{ selected.item }}</b>
  </div>
  <div class="modal-footer">
    <button class="btn btn-primary" ng-click="submit()">OK</button>
    <button class="btn btn-warning" ng-click="cancel()">Cancel</button>
  </div>
</script>


<div ng-controller="CarouselDemoCtrl">
  <div style="height-:350px">
    <carousel interval="myInterval">
      <slide ng-repeat="slide in slides" active="slide.active">
        <img ng-src="{{slide.image}}" style="margin:auto;">
        <div class="carousel-caption">
          <h4>Slide {{$index}}</h4>
          <p>{{slide.text}}</p>
        </div>
      </slide>
    </carousel>
  </div>
  <div class="row">
    <div class="col-md-6">
      <button type="button" class="btn btn-info" ng-click="addSlide()">Add Slide</button>
    </div>
    <div class="col-md-6">
      Interval, in milliseconds: <input type="number" class="form-control" ng-model="myInterval">
      <br>Enter a negative number or 0 to stop the interval.
    </div>
  </div>
</div>


<table class="table">
  <tr><th>row number</th></tr>
  <tr ng-repeat="i in [0, 1, 2]">
    <td>{{i + 1}}</td>
  </tr>
</table>


<div ng-init="list = ['Chrome','Safari','Firefox','IE']">
  <input ng-model="list" ng-list><br>
  <pre>list = {{list}}</pre>
  <ol>
    <li ng-repeat="item in list">
      {{item}}
    </li>
  </ol>
</div>

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

  var app = angular.module('App',['ui.bootstrap','ngTouch','ngAnimate','app.controller'])

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
          $scope.list = data.list || data || [];
          $scope.item = data.item || $scope.list[0] || data || {};
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
    $scope.list = data.list || data || [];
    $scope.item = data.item || $scope.list[0] || data || {};
    if(data.type == 'ajax')
    {
      var url = data.url;
      $http({method:'GET',url:url,params:{ajax:1}})
      .success(function(ret)
      {
        if(ret.ret == 0)
        {
          var data = ret.data || {};
          $scope.list = data.list || data || [];
          $scope.item = data.item || $scope.list[0] || data || {};
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
          $scope.list = data.list || data || [];
          $scope.item = data.item || $scope.list[0] || data || {};
          alert(ret.msg);
        }
        else if(ret.msg) alert(ret.msg);
      });
    };
    $scope.cancel = function()
    {
      $modalInstance.dismiss('cancel');
    };
  })

  .controller('CarouselDemoCtrl',function($scope)
  {
    $scope.myInterval = 5000;
    var slides = $scope.slides = [];
    $scope.addSlide = function()
    {
      var newWidth = 1600 + slides.length + 1;
      slides.push(
      {
        image: 'http://placekitten.com/' + newWidth + '/500',
        text: ['More','Extra','Lots of','Surplus'][slides.length % 4] + ' ' + ['Cats', 'Kittys', 'Felines', 'Cutes'][slides.length % 4]
      });
    };
    for(var i=0; i<4; i++)
    {
      $scope.addSlide();
    }
  })

  .controller('AccordionDemoCtrl',function($scope)
  {
    $scope.oneAtATime = true;
    $scope.groups = [
      {
        title: 'Dynamic Group Header - 1',
        content: 'Dynamic Group Body - 1'
      },
      {
        title: 'Dynamic Group Header - 2',
        content: 'Dynamic Group Body - 2'
      }
    ];

    $scope.items = ['Item 1','Item 2','Item 3'];
    $scope.addItem = function()
    {
      var newItemNo = $scope.items.length + 1;
      $scope.items.push('Item ' + newItemNo);
    };

    $scope.status = {
      isFirstOpen: true,
      isFirstDisabled: false
    };
  })

  .controller('ModalDemoCtrl',function($scope,$modal,$log)
  {
    $scope.items = ['item1','item2','item3'];
    $scope.animationsEnabled = true;
    $scope.open = function(size)
    {
      var modalInstance = $modal.open(
      {
        animation: $scope.animationsEnabled,
        templateUrl: 'myModalContent.html',
        controller: 'ModalInstanceCtrl',
        size: size,
        resolve: {
          items: function()
          {
            return $scope.items;
          }
        }
      });
      modalInstance.result.then(function(selectedItem)
      {
        $scope.selected = selectedItem;
      },
      function()
      {
        $log.info('Modal dismissed at: ' + new Date());
      });
    };
    $scope.toggleAnimation = function()
    {
      $scope.animationsEnabled = !$scope.animationsEnabled;
    };
  })

  .controller('ModalInstanceCtrl',function($scope,$modalInstance,items)
  {
    $scope.items = items;
    $scope.selected = {
      item: $scope.items[0]
    };
    $scope.ok = function()
    {
      $modalInstance.close($scope.selected.item);
    };
    $scope.cancel = function()
    {
      $modalInstance.dismiss('cancel');
    };
  });

  angular.module('app.controller',[]);

  // - Angular Start
  //angular.bootstrap(document,[app.name]);
  window.angular_app = app;
  $(document).trigger('angular.ready');
  loader.hide(1000);

  return app;
});

require(['jquery'],function($)
{
  $(function()
  {
    $(document)
    .on('angular.ready',function()
    {
      var app = window.angular_app || {};
      angular.bootstrap(document,[app.name]);
      console.log(app);
      return false;
    });
  });
});
</script>
</body>
</html>