<!-- BEGIN FOOTER -->
<div class="footer">
  <div class="footer-inner">
     2013 &copy; Conquer by keenthemes.
  </div>
  <div class="footer-tools">
    <span class="go-top">
    <i class="fa fa-angle-up"></i>
    </span>
  </div>
</div>
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<script>window.require || document.write('<script src="http://cdn.bootcss.com/require.js/2.1.11/require.min.js" charset="utf-8"><\/script>');</script>
<script>window.jQuery || document.write('<script src="__TMPL__assets/plugins/jquery-1.11.0.min.js" charset="utf-8"><\/script>');</script>
<!-- END CORE PLUGINS -->
<script>
(function(ready)
{

  var cdn = '//cdn.bootcss.com/';

  require.config(
  {
    waitSeconds:60 * 10,
    paths:
    {
      'jquery'               : ['__TMPL__assets/plugins/jquery-1.11.0.min',cdn + 'jquery/1.11.1/jquery.min','http://apps.bdimg.com/libs/jquery/1.11.1/jquery.min'],
      'json2'                : cdn + 'json2/20150503/json2.min',
      'require-css'          : cdn + 'require-css/0.1.8/css.min',
      'bootstrap'            : cdn + 'twitter-bootstrap/3.3.4/js/bootstrap.min',
      'bootstrap-css'        : cdn + 'twitter-bootstrap/3.3.4/css/bootstrap.min',
      'highcharts'           : cdn + 'highcharts/4.1.7/highcharts',
      'animate-css'          : cdn + 'animate.css/3.3.0/animate.min',
      'font-awesome'         : cdn + 'font-awesome/4.3.0/css/font-awesome.min',
      'nprogress'            : cdn + 'nprogress/0.2.0/nprogress.min',
      'moment'               : '__TMPL__assets/plugins/moment.min',
      'jquery-migrate'       : '__TMPL__assets/plugins/bootstrap/js/bootstrap.min',
      'jquery-ui'            : '__TMPL__assets/plugins/jquery-ui/jquery-ui-1.10.3.custom.min',
      'jquery-slimscroll'    : '__TMPL__assets/plugins/jquery-slimscroll/jquery.slimscroll.min',
      'jquery-blockui'       : '__TMPL__assets/plugins/jquery.blockui.min',
      'jquery-uniform'       : '__TMPL__assets/plugins/uniform/jquery.uniform.min',
      'bs-hover-dropdown'    : '__TMPL__assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min',
      'app'                  : '__TMPL__assets/scripts/app'
    },
    shim:
    {
      'json2'                : {exports:'JSON'},
      'bootstrap'            : {deps:['jquery'],exports:'jQuery.fn.dropdown'},
      'highcharts'           : {deps:['jquery'],exports:'jQuery.fn.highcharts'},
      'nprogress'            : {deps:['css!nprogress'],exports:'NProgress'},
      'jquery-migrate'       : {deps:['jquery'],exports:'jQuery.fn.live'},
      'jquery-ui'            : {deps:['jquery'],exports:'jQuery.ui'},
      'jquery-slimscroll'    : {deps:['jquery'],exports:'jQuery.fn.slimscroll'},
      'jquery-blockui'       : {deps:['jquery'],exports:'jQuery.blockUI'},
      'jquery-uniform'       : {deps:['jquery'],exports:'jQuery.uniform'},
      'bs-hover-dropdown'    : {deps:['bootstrap'],exports:'jQuery.fn.highcharts'},
      'app'                  :
      {
        deps:['jquery-migrate','jquery-ui','jquery-slimscroll','jquery-blockui','jquery-uniform','bs-hover-dropdown'],
        exports:'App'
      }
    },
    map:
    {
      '*' : {'css' : 'require-css'}
    }
  });

  // - jQuery
  require(['jquery','app'],function($)
  {
    $(ready);
  });

})

// - jQuery
(function($)
{
  window.body = $('body:first');

  require(['nprogress'],function(NProgress)
  {
    window.nprogress = NProgress.configure({trickleRate:.1}).start();
    $(document)
    .on('ajaxStart',function()
    {
      NProgress.start();
    })
    .on('ajaxComplete',function()
    {
      NProgress.done();
    });
    nprogress.done();
  });

  window.App = App;
  App.init();

  return $;
});
</script>