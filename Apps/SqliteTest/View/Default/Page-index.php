<include file="Public:top"/>
</head>
<body ng-controller="bodyCtrl">
<div id="doc">
<include file="Public:head"/>

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
                <th>上级页面</th>
                <th>所属模型</th>
                <th>状态</th>
                <th>最后更新</th>
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
                <td>{{item.parent_id}}</td>
                <td>{{item.model_id}}</td>
                <td>{{item.status}}</td>
                <td title="更新时间：{{item.utime * 1000 | date:'yyyy-MM-dd HH:mm:ss'}}
添加时间：{{item.atime * 1000 | date:'yyyy-MM-dd HH:mm:ss'}}">{{item.utime * 1000 | date:'yyyy-MM-dd'}}</td>
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
          <input type="text" name="name" value="" ng-model="item.name" placeholder="必填" class="form-control">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">标识</label>
        <div class="col-sm-10">
          <input type="text" name="key" value="" ng-model="item.key" placeholder="必填" class="form-control">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">上级页面</label>
        <div class="col-sm-10">
          <input type="number" name="parent_id" value="" ng-model="item.parent_id" placeholder="选填" class="form-control" str-int>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">所属模型</label>
        <div class="col-sm-10">
          <input type="number" name="model_id" value="" ng-model="item.model_id" placeholder="选填" class="form-control" str-int>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">排序号</label>
        <div class="col-sm-10">
          <input type="number" name="sort" value="" ng-model="item.sort" step="10" placeholder="选填" class="form-control" str-int>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">状态</label>
        <div class="col-sm-10">
          <label class="checkbox checkbox-inline"><input type="checkbox" name="status" value="1" ng-checked="item.status == 1"> 启用</label>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">备注</label>
        <div class="col-sm-10">
          <textarea name="remark" ng-model="item.remark" placeholder="选填" class="form-control"></textarea>
        </div>
      </div>
    </form>
  </div>
  <div class="modal-footer">
    <button class="btn btn-default" ng-click="modalSelectClass()">打开{{ selected }}</button>
    <button class="btn btn-primary" ng-click="submit('<{:url_query('save')}>')">保存</button>
    <button class="btn btn-warning" ng-click="cancel()">取消</button>
  </div>
</script>


<script type="text/ng-template" id="modal-select.html">
  <div class="modal-header">
    <h3 class="modal-title">I am a modal!</h3>
  </div>
  <div class="modal-body">
    <ul>
      <li ng-repeat="item in items">
        <a ng-click="selected.item = item">{{ item }}</a>
      </li>
    </ul>
    Selected: <b>{{ selected.item }}</b>
  </div>
  <div class="modal-footer">
    <button class="btn btn-primary" ng-click="ok()">OK</button>
    <button class="btn btn-warning" ng-click="cancel()">Cancel</button>
  </div>
</script>

<include file="Public:foot"/>
</body>
</html>