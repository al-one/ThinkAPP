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
        Blank Page
        <small>blank page</small>
      </h3>
      <div class="page-bar">
        <ul class="page-breadcrumb">
          <li>
            <i class="fa fa-home"></i>
            <a href="">Home</a>
            <i class="fa fa-angle-right"></i>
          </li>
          <li>
            <a href="#">Page Layouts</a>
            <i class="fa fa-angle-right"></i>
          </li>
          <li>
            <a href="#">Blank Page</a>
          </li>
        </ul>
        <div class="page-toolbar">
          <div class="btn-group pull-right">
            <button type="button" class="btn btn-fit-height default dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true">
            Actions <i class="fa fa-angle-down"></i>
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
      <!-- BEGIN PAGE CONTENT-->
      <div class="row">
        <div class="col-md-12">

          <div class="panel panel-default">
            <div class="panel-heading">
              <i class="fa fa-reorder"></i>
              统计报表
            </div>
            <div class="panel-body">
              <div id="hchart-1" class="highcharts"></div>
            </div>
          </div>

          <div class="panel panel-default">
            <div class="panel-heading">
              <i class="fa fa-reorder"></i>
              统计报表
            </div>
            <div class="panel-body">
              <div id="hchart-2" class="highcharts"></div>
            </div>
          </div>

        </div>
      </div>
      <!-- END PAGE CONTENT-->
    </div>
  </div>
  <!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
<include file="Public/foot"/>
<script>
require(['app','highcharts','moment'],function()
{
  var hco =
      {
        title:
        {
          text:'统计报表',
          x:-20 //center
        },
        subtitle:
        {
          text:'',
          x:-20
        },
        xAxis:
        {
          categories:[],
          dateTimeLabelFormats:
          {
            second:'%Y-%m-%d<br>%H:%M:%S',
            minute:'%Y-%m-%d<br>%H:%M',
            hour:'%Y-%m-%d<br>%H:%M',
            day:'%Y-%m-%d',
            week:'%Y-%m-%d',
            month:'%Y-%m',
            year:'%Y'
          }
        },
        yAxis:
        {
          title:
          {
            text:''
          },
          plotLines:
          [{
            value:0,
            width:1,
            color:'#808080'
          }]
        },
        series:[],
        tooltip:
        {
          valueSuffix:'次',
          crosshairs:[true,false],
          shared:true,
          formatter:function()
          {
            var s = '<b>' + this.x + '</b>';
            $.each(this.points,function(i,point)
            {
              s += '<br><span style="color:' + point.series.color + '">' + point.series.name + ': </span>';
              s += '<b>' + point.point.y + '</b>';
            });
            return s;
          }
        },
        legend:
        {
          //layout:'vertical',
          //align:'right',
          //verticalAlign:'middle',
          borderWidth:0
        },
        credits:
        {
          text:''
        }
      };

  // hchart-1
  $.ajax(
  {
    url:'/chujian/report/?c=AppCountData',
    data:{ajax:1},
    dataType:'json'
  })
  .done(function(data)
  {
    var dat = data.data || {},
        dtx = [],
        dty = {total_tag:[],day_reg:[],day_login:[],day_feed:[],day_chat:[]},
        cfg = hco;
    if(data.ret)
    {
      data.msg && alert(data.msg);
      return false;
    }
    $.each(dat.list,function(i,v)
    {
      dtx.unshift(moment((parseInt(v.create_time) || 0) * 1000).format('MM-DD'));
      dty.total_tag.unshift(parseInt(v.total_tag) || 0);
      dty.day_reg  .unshift(parseInt(v.day_reg)   || 0);
      dty.day_login.unshift(parseInt(v.day_login) || 0);
      dty.day_feed .unshift(parseInt(v.day_feed)  || 0);
      dty.day_chat .unshift(parseInt(v.day_chat)  || 0);
    });
    cfg.xAxis.categories = dtx;
    cfg.series = 
    [
      {
        name:'标签总量',
        data:dty.total_tag
      },
      {
        name:'注册数量',
        data:dty.day_reg
      },
      {
        name:'登录数量',
        data:dty.day_login
      },
      {
        name:'动态数量',
        data:dty.day_feed
      },
      {
        name:'聊天总量',
        data:dty.day_chat
      }
    ];
    console.log(cfg);
    $('#hchart-1').empty().highcharts(cfg);
  })
  .fail(function()
  {
    console.error('error');
  })
  .always(function()
  {
    console.info('complete');
  });

  // hchart-2
  $.ajax(
  {
    url:'/chujian/report/?c=Report',
    data:{ajax:1},
    dataType:'json'
  })
  .done(function(data)
  {
    var dat = data.data || {},
        dtx = [],
        dty = {cnt_surg:[],cnt_surg_user:[]},
        cfg = hco;
    if(data.ret)
    {
      data.msg && alert(data.msg);
      return false;
    }
    $.each(dat.list,function(i,v)
    {
      dtx.push(moment(v.ymd).format('MM-DD'));
      dty.cnt_surg     .push(parseInt(v.cnt_surg)      || 0);
      dty.cnt_surg_user.push(parseInt(v.cnt_surg_user) || 0);
    });
    cfg.xAxis.categories = dtx;
    cfg.series = 
    [
      {
        name:'动态数量',
        data:dty.cnt_surg
      },
      {
        name:'动态人数',
        data:dty.cnt_surg_user
      }
    ];
    console.log(cfg);
    $('#hchart-2').empty().highcharts(cfg);
  })
  .fail(function()
  {
    console.error('error');
  })
  .always(function()
  {
    console.info('complete');
  });

});
</script>
<!-- END JAVASCRIPTS -->
</body>
</html>