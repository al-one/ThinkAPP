<include file="Public/top"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="page-header-fixed">
<include file="Public/head"/>
<!-- BEGIN CONTAINER -->
<div class="page-container">
  <!-- BEGIN SIDEBAR -->
  <div class="page-sidebar-wrapper">
<include file="Public/sidebar"/>
  </div>
  <!-- END SIDEBAR -->
  <!-- BEGIN CONTENT -->
  <div class="page-content-wrapper">
    <div class="page-content">
      <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
      <div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
              <h4 class="modal-title">Modal title</h4>
            </div>
            <div class="modal-body">
               Widget settings form goes here
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-success">Save changes</button>
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
<include file="Public/theme"/>
      <!-- BEGIN PAGE HEADER-->
      <h3 class="page-title">
        报表
        <small>visual charts & graphs</small>
      </h3>
      <div class="page-bar">
        <ul class="page-breadcrumb">
          <li>
            <i class="fa fa-home"></i>
            <a href="./">首页</a>
            <i class="fa fa-angle-right"></i>
          </li>
          <li>
            <a href="./">报表</a>
          </li>
        </ul>
        <div class="page-toolbar">
          <div class="btn-group pull-right">
            <button type="button" class="btn btn-fit-height default dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true">
              操作
              <i class="fa fa-angle-down"></i>
            </button>
            <ul class="dropdown-menu pull-right" role="menu">
              <li>
                <a href="#">Action</a>
              </li>
              <li>
                <a href="#">Another action</a>
              </li>
              <li>
                <a href="#">Something else here</a>
              </li>
              <li class="divider">
              </li>
              <li>
                <a href="#">Separated link</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- END PAGE HEADER-->

      <!-- BEGIN CHART PORTLETS-->
      <div class="row">
        <div class="col-md-12">

          <!-- BEGIN BASIC CHART PORTLET-->
          <div class="portlet">
            <div class="portlet-title">
              <div class="caption">
                <i class="fa fa-reorder"></i>Basic Chart
              </div>
              <div class="tools">
                <a href="javascript:;" class="collapse"></a>
                <a href="#portlet-config" data-toggle="modal" class="config"></a>
                <a href="javascript:;" class="reload"></a>
                <a href="javascript:;" class="remove"></a>
              </div>
            </div>
            <div class="portlet-body">
              <div id="chart_1" class="chart">
              </div>
            </div>
          </div>
          <!-- END BASIC CHART PORTLET-->

          <!-- BEGIN TRACKING CURVES PORTLET-->
          <div class="portlet">
            <div class="portlet-title">
              <div class="caption">
                <i class="fa fa-reorder"></i>Tracking Curves
              </div>
              <div class="tools">
                <a href="javascript:;" class="collapse"></a>
                <a href="#portlet-config" data-toggle="modal" class="config"></a>
                <a href="javascript:;" class="reload"></a>
                <a href="javascript:;" class="remove"></a>
              </div>
            </div>
            <div class="portlet-body">
              <div id="chart_3" class="chart">
              </div>
            </div>
          </div>
          <!-- END TRACKING CURVES PORTLET-->

          <!-- BEGIN DYNAMIC CHART PORTLET-->
          <div class="portlet">
            <div class="portlet-title">
              <div class="caption">
                <i class="fa fa-reorder"></i>Dynamic Chart
              </div>
              <div class="tools">
                <a href="javascript:;" class="collapse"></a>
                <a href="#portlet-config" data-toggle="modal" class="config"></a>
                <a href="javascript:;" class="reload"></a>
                <a href="javascript:;" class="remove"></a>
              </div>
            </div>
            <div class="portlet-body">
              <div id="chart_4" class="chart">
              </div>
            </div>
          </div>
          <!-- END DYNAMIC CHART PORTLET-->

          <!-- BEGIN STACK CHART CONTROLS PORTLET-->
          <div class="portlet">
            <div class="portlet-title">
              <div class="caption">
                <i class="fa fa-reorder"></i>Stack Chart Controls
              </div>
              <div class="tools">
                <a href="javascript:;" class="collapse"></a>
                <a href="#portlet-config" data-toggle="modal" class="config"></a>
                <a href="javascript:;" class="reload"></a>
                <a href="javascript:;" class="remove"></a>
              </div>
            </div>
            <div class="portlet-body">
              <div id="chart_5" style="height:350px;">
              </div>
              <div class="btn-toolbar">
                <div class="btn-group stackControls">
                  <input type="button" class="btn btn-info" value="With stacking"/>
                  <input type="button" class="btn btn-danger" value="Without stacking"/>
                </div>
                <div class="space5">
                </div>
                <div class="btn-group graphControls">
                  <input type="button" class="btn" value="Bars"/>
                  <input type="button" class="btn" value="Lines"/>
                  <input type="button" class="btn" value="Lines with steps"/>
                </div>
              </div>
            </div>
          </div>
          <!-- END STACK CHART CONTROLS PORTLET-->

          <!-- BEGIN INTERACTIVE CHART PORTLET-->
          <div class="portlet">
            <div class="portlet-title">
              <div class="caption">
                <i class="fa fa-reorder"></i>Interactive Chart
              </div>
              <div class="tools">
                <a href="javascript:;" class="collapse"></a>
                <a href="#portlet-config" data-toggle="modal" class="config"></a>
                <a href="javascript:;" class="reload"></a>
                <a href="javascript:;" class="remove"></a>
              </div>
            </div>
            <div class="portlet-body">
              <div id="chart_2" class="chart">
              </div>
            </div>
          </div>
          <!-- END INTERACTIVE CHART PORTLET-->
        </div>
      </div>
      <!-- END CHART PORTLETS-->

      <!-- BEGIN PIE CHART PORTLET-->
      <div class="row">
        <div class="col-md-6">
          <div class="portlet">
            <div class="portlet-title">
              <div class="caption">
                <i class="fa fa-reorder"></i>Default
              </div>
              <div class="tools">
                <a href="#portlet-config" data-toggle="modal" class="config"></a>
                <a href="javascript:;" class="reload"></a>
              </div>
            </div>
            <div class="portlet-body">
              <h4>Default Pie with Legend.</h4>
              <div id="pie_chart" class="chart">
              </div>
            </div>
          </div>
          <div class="portlet">
            <div class="portlet-title">
              <div class="caption">
                <i class="fa fa-reorder"></i>Graph1
              </div>
              <div class="tools">
                <a href="#portlet-config" data-toggle="modal" class="config"></a>
                <a href="javascript:;" class="reload"></a>
              </div>
            </div>
            <div class="portlet-body">
              <h4>Default Pie without Legend</h4>
              <div id="pie_chart_1" class="chart">
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="portlet">
            <div class="portlet-title">
              <div class="caption">
                <i class="fa fa-reorder"></i>Graph2
              </div>
              <div class="tools">
                <a href="#portlet-config" data-toggle="modal" class="config"></a>
                <a href="javascript:;" class="reload"></a>
              </div>
            </div>
            <div class="portlet-body">
              <h4>Added a semi-transparent background to the labels and a custom labelFormatter function.</h4>
              <div id="pie_chart_2" class="chart">
              </div>
            </div>
          </div>
          <div class="portlet">
            <div class="portlet-title">
              <div class="caption">
                <i class="fa fa-reorder"></i>Graph3
              </div>
              <div class="tools">
                <a href="#portlet-config" data-toggle="modal" class="config"></a>
                <a href="javascript:;" class="reload"></a>
              </div>
            </div>
            <div class="portlet-body">
              <h4>Slightly more transparent label backgrounds and adjusted the radius values to place them within the pie.</h4>
              <div id="pie_chart_3" class="chart">
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- END PIE CHART PORTLET-->
      <!-- BEGIN PIE CHART PORTLET-->
      <div class="row">
        <div class="col-md-6">
          <div class="portlet">
            <div class="portlet-title">
              <div class="caption">
                <i class="fa fa-reorder"></i>Graph4
              </div>
              <div class="tools">
                <a href="#portlet-config" data-toggle="modal" class="config"></a>
                <a href="javascript:;" class="reload"></a>
              </div>
            </div>
            <div class="portlet-body">
              <h4>Semi-transparent, black-colored label background.</h4>
              <div id="pie_chart_4" class="chart">
              </div>
            </div>
          </div>
          <div class="portlet">
            <div class="portlet-title">
              <div class="caption">
                <i class="fa fa-reorder"></i>Graph5
              </div>
              <div class="tools">
                <a href="#portlet-config" data-toggle="modal" class="config"></a>
                <a href="javascript:;" class="reload"></a>
              </div>
            </div>
            <div class="portlet-body">
              <h4>Semi-transparent, black-colored label background placed at pie edge.</h4>
              <div id="pie_chart_5" class="chart">
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="portlet">
            <div class="portlet-title">
              <div class="caption">
                <i class="fa fa-reorder"></i>Graph6
              </div>
              <div class="tools">
                <a href="#portlet-config" data-toggle="modal" class="config"></a>
                <a href="javascript:;" class="reload"></a>
              </div>
            </div>
            <div class="portlet-body">
              <h4>Added a semi-transparent background to the labels and a custom labelFormatter function.</h4>
              <div id="pie_chart_6" class="chart">
              </div>
            </div>
          </div>
          <div class="portlet">
            <div class="portlet-title">
              <div class="caption">
                <i class="fa fa-reorder"></i>Graph7
              </div>
              <div class="tools">
                <a href="#portlet-config" data-toggle="modal" class="config"></a>
                <a href="javascript:;" class="reload"></a>
              </div>
            </div>
            <div class="portlet-body">
              <h4>Labels can be hidden if the slice is less than a given percentage of the pie (10% in this case).</h4>
              <div id="pie_chart_7" class="chart">
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- END PIE CHART PORTLET-->
      <!-- BEGIN PIE CHART PORTLET-->
      <div class="row">
        <div class="col-md-6">
          <div class="portlet">
            <div class="portlet-title">
              <div class="caption">
                <i class="fa fa-reorder"></i>Graph8
              </div>
              <div class="tools">
                <a href="#portlet-config" data-toggle="modal" class="config"></a>
                <a href="javascript:;" class="reload"></a>
              </div>
            </div>
            <div class="portlet-body">
              <h4>The radius can also be set to a specific size (even larger than the container itself).</h4>
              <div id="pie_chart_8" class="chart">
              </div>
            </div>
          </div>
          <div class="portlet">
            <div class="portlet-title">
              <div class="caption">
                <i class="fa fa-reorder"></i>Graph9
              </div>
              <div class="tools">
                <a href="#portlet-config" data-toggle="modal" class="config"></a>
                <a href="javascript:;" class="reload"></a>
              </div>
            </div>
            <div class="portlet-body">
              <h4>The pie can be tilted at an angle.</h4>
              <div id="pie_chart_9" class="chart">
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="portlet">
            <div class="portlet-title">
              <div class="caption">
                <i class="fa fa-reorder"></i>Graph10
              </div>
              <div class="tools">
                <a href="#portlet-config" data-toggle="modal" class="config"></a>
                <a href="javascript:;" class="reload"></a>
              </div>
            </div>
            <div class="portlet-body">
              <h4>A donut hole can be added.</h4>
              <div id="donut" class="chart">
              </div>
            </div>
          </div>
          <div class="portlet">
            <div class="portlet-title">
              <div class="caption">
                <i class="fa fa-reorder"></i>Graph11
              </div>
              <div class="tools">
                <a href="#portlet-config" data-toggle="modal" class="config"></a>
                <a href="javascript:;" class="reload"></a>
              </div>
            </div>
            <div class="portlet-body">
              <h4>The pie can be made interactive with hover and click events.</h4>
              <div id="interactive" class="chart">
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- END PIE CHART PORTLET-->
      <!-- END PAGE CONTENT-->
    </div>
  </div>
  <!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
<include file="Public/foot"/>
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="__TMPL__assets/plugins/flot/jquery.flot.js"></script>
<script src="__TMPL__assets/plugins/flot/jquery.flot.resize.js"></script>
<script src="__TMPL__assets/plugins/flot/jquery.flot.pie.js"></script>
<script src="__TMPL__assets/plugins/flot/jquery.flot.stack.js"></script>
<script src="__TMPL__assets/plugins/flot/jquery.flot.crosshair.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="__TMPL__assets/scripts/charts.js"></script>
<script>
jQuery(document).ready(function()
{
   // initiate layout and plugins
   Charts.init();
   Charts.initCharts();
   Charts.initPieCharts();
});
</script>
<!-- END PAGE LEVEL SCRIPTS -->
</body>
</html>