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

  .directive('strInt',function()
  {
    return {
      require: 'ngModel',
      link: function(scope,element,attrs,ngModel)
      {
        ngModel.$parsers.push(function(val)
        {
          return val == null ? '' : (val + '');
        });
        ngModel.$formatters.push(function(val)
        {
          var num = parseInt(val);
          return !isNaN(num) ? num : '';
        });
      }
    };
  })

  .factory('commServ',function($http,$modal,$log)
  {
    return {
    };
  })

  .controller('bodyCtrl',function($rootScope,$scope,$http,$modal,$log)
  {
    $rootScope.comm = $rootScope.comm || {};
    $rootScope.modalSelectClass = function(size)
    {
      var items = ['item1','item2','item3'];
      var modalI = $modal.open(
      {
        animation:true,
        templateUrl:'modal-select.html',
        controller:'ModalSelectCtrl',
        size:size,
        resolve:
        {
          items : function(){ return items; }
        }
      });
      modalI.result.then(
      function(selectedItem)
      {
        $scope.selected = selectedItem;
        console.log($scope);
      },
      function()
      {
        console.log('Modal dismissed at: ' + new Date());
      });
    }
  })

  .controller('listCtrl',function($scope,$http,$modal,$log)
  {
    $scope.data = {};
    $scope.data.list = [];
    $scope.query = function(url)
    {
      $scope.ajax = url;
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
      var modalForm = $modal.open(
      {
        templateUrl:'modal-form.html',
        controller:'ModalFormCtrl',
        scope:$scope,
        size:'lg',
        resolve:
        {
          data : function(){ return $scope.data; }
        }
      });
      modalForm.result.then(function()
      {
        $scope.query($scope.ajax);
      },
      function()
      {
        $log.info('Modal dismissed at: ' + new Date());
      });
    };
  })

  .controller('ModalFormCtrl',function($scope,$http,$modalInstance,commServ,data)
  {
    $scope.comm = commServ;
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
          $modalInstance.close();
        }
        else if(ret.msg) alert(ret.msg);
        console.log($scope);
      });
    };
    $scope.cancel = function()
    {
      $modalInstance.dismiss('cancel');
    };
    console.log($scope);
  })

  .controller('ModalSelectCtrl',function($scope,$modalInstance,items)
  {
    $scope.items = items;
    $scope.selected = {
      item: $scope.items[0]
    };
    $scope.ok = function ()
    {
      $modalInstance.close($scope.selected.item);
    };
    $scope.cancel = function()
    {
      $modalInstance.dismiss('cancel');
    };
    console.log($scope);
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