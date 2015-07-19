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