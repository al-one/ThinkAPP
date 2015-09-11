<php>defined('THINK_PATH') or exit();</php>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
<title><?php echo CONTROLLER_NAME; ?> / <?php echo ACTION_NAME; ?> - <?php echo MODULE_NAME; ?></title>
<meta name="description" content="">
<meta name="author" content="">
<link rel="shortcut icon" href="__TMPL__images/favicon.png" type="image/png">
<link rel="stylesheet" href="__TMPL__css/style.default.css">
<link rel="stylesheet" href="__TMPL__css/comm.css">
<!--[if lt IE 9]>
<script src="__TMPL__js/html5shiv.js"></script>
<script src="__TMPL__js/respond.min.js"></script>
<![endif]-->
<script>var isIE = 0;</script>
<!--[if IE 9]><script>isIE = 9;</script><![endif]-->
<!--[if IE 8]><script>isIE = 8;</script><![endif]-->
<!--[if IE 7]><script>isIE = 7;</script><![endif]-->
<!--[if lt IE 7]><script>isIE = 6;</script><![endif]-->
<script>
window['App'] = {
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
  name:'CECNP User Andmin'
};
</script>