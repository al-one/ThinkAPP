<div class="leftpanel">
  <div class="logopanel">
      <h1><span>[</span> 资信宝 <span>]</span></h1>
  </div>
  <div class="leftpanelinner">
    <div class="visible-xs hidden-sm hidden-md hidden-lg">
      <div class="media userlogged">
        <img src="__TMPL__images/photos/loggeduser.png" class="media-object">
        <div class="media-body">
          <h4>John Doe</h4>
          <span>"Life is so..."</span>
        </div>
      </div>
      <h5 class="sidebartitle actitle">账号管理</h5>
      <ul class="nav nav-pills nav-stacked nav-bracket mb30">
        <li><a href=""><i class="fa fa-user"></i> <span>基本信息</span></a></li>
        <li><a href=""><i class="fa fa-cog"></i> <span>安全设置</span></a></li>
        <li><a href=""><i class="fa fa-question-circle"></i> <span>修改密码</span></a></li>
        <li><a href=""><i class="fa fa-question-circle"></i> <span>登陆日志</span></a></li>
        <li><a href=""><i class="fa fa-sign-out"></i> <span>退出登陆</span></a></li>
      </ul>
    </div>

    <h5 class="sidebartitle">Navigation</h5>
    <ul class="nav nav-pills nav-stacked nav-bracket">
      <li<php>echo CONTROLLER_NAME == 'Index' ? ' class="active"' : ''</php>><a href="<{:U('Index/index')}>"><i class="fa fa-home"></i> <span>管理中心</span></a></li>
      <li class="nav-parent<php>echo CONTROLLER_NAME == 'News' ? ' active' : ''</php>"><a href="#"><i class="fa fa-edit"></i> <span>资讯管理</span></a>
        <ul class="children">
          <li><a href="<{:U('News/index')}>"><i class="fa fa-caret-right"></i> 机构新闻</a></li>
          <li><a href="<{:U('News/index')}>"><i class="fa fa-caret-right"></i> 行业资讯</a></li>
          <li><a href="<{:U('News/index')}>"><i class="fa fa-caret-right"></i> 通知公告</a></li>
        </ul>
      </li>
      <li class="nav-parent<php>echo CONTROLLER_NAME == 'Service' ? ' active' : ''</php>"><a href="#"><i class="fa fa-suitcase"></i> <span>服务项目</span></a>
        <ul class="children">
          <li><a href="<{:U('Service/index')}>"><i class="fa fa-caret-right"></i> 项目列表</a></li>
          <li><a href="<{:U('Service/index')}>"><i class="fa fa-caret-right"></i> 增加项目</a></li>
        </ul>
      </li>
      <li><a href=""><i class="fa fa-th-list"></i> <span>委托管理</span></a></li>
      <li class="nav-parent"><a href=""><i class="fa fa-bug"></i> <span>模板管理</span></a>
        <ul class="children">
          <li><a href=""><i class="fa fa-caret-right"></i> 模板列表</a></li>
          <li><a href=""><i class="fa fa-caret-right"></i> 增加模板</a></li>
        </ul>
      </li>
      <li><a href=""><i class="fa fa-weixin"></i> <span>微信接口</span></a></li>
      <li><a href=""><i class="fa fa-laptop"></i> <span>日志查询</span></a></li>
    </ul>

    <div class="infosummary">
      <h5 class="sidebartitle">信息概况</h5>
      <ul>
        <li>
          <div class="datainfo">
            <span class="text-muted">Daily Traffic</span>
            <h4>630, 201</h4>
          </div>
          <div id="sidebar-chart" class="chart"></div>
        </li>
        <li>
          <div class="datainfo">
            <span class="text-muted">Average Users</span>
            <h4>1, 332, 801</h4>
          </div>
          <div id="sidebar-chart2" class="chart"></div>
        </li>
        <li>
          <div class="datainfo">
            <span class="text-muted">Disk Usage</span>
            <h4>82.2%</h4>
          </div>
          <div id="sidebar-chart3" class="chart"></div>
        </li>
        <li>
          <div class="datainfo">
            <span class="text-muted">CPU Usage</span>
            <h4>140.05 - 32</h4>
          </div>
          <div id="sidebar-chart4" class="chart"></div>
        </li>
        <li>
          <div class="datainfo">
            <span class="text-muted">Memory Usage</span>
            <h4>32.2%</h4>
          </div>
          <div id="sidebar-chart5" class="chart"></div>
        </li>
      </ul>
    </div>
  </div>
</div>