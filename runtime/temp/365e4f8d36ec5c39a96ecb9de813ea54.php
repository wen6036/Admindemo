<?php /*a:9:{s:78:"D:\phpStudy\PHPTutorial\WWW\AdminDemo\application\admin\view\generate\add.html";i:1567736791;s:77:"D:\phpStudy\PHPTutorial\WWW\AdminDemo\application\admin\view\public\base.html";i:1567736791;s:81:"D:\phpStudy\PHPTutorial\WWW\AdminDemo\application\admin\view\public\head_css.html";i:1567736791;s:80:"D:\phpStudy\PHPTutorial\WWW\AdminDemo\application\admin\view\public\head_js.html";i:1567736791;s:79:"D:\phpStudy\PHPTutorial\WWW\AdminDemo\application\admin\view\public\header.html";i:1567736791;s:80:"D:\phpStudy\PHPTutorial\WWW\AdminDemo\application\admin\view\public\sidebar.html";i:1567736791;s:87:"D:\phpStudy\PHPTutorial\WWW\AdminDemo\application\admin\view\public\content_header.html";i:1567736791;s:79:"D:\phpStudy\PHPTutorial\WWW\AdminDemo\application\admin\view\public\footer.html";i:1567736791;s:88:"D:\phpStudy\PHPTutorial\WWW\AdminDemo\application\admin\view\public\control_sidebar.html";i:1567736791;}*/ ?>
<?php if(!$admin['pjax']): ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit">
<?php endif; ?>

    
    <title><?php echo htmlentities((isset($admin['title']) && ($admin['title'] !== '')?$admin['title']:'Admin')); ?> | <?php echo htmlentities((isset($admin['name']) && ($admin['name'] !== '')?$admin['name']:'Admin')); ?></title>
    


<?php if(!$admin['pjax']): ?>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!--头部css-->
<link rel="stylesheet" type="text/css" href="/static/admin/plugins/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="/static/admin/plugins/bootstrap-switch/css/bootstrap-switch.min.css" />
<link rel="stylesheet" type="text/css" href="/static/admin/plugins/font-awesome/css/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="/static/admin/plugins/iconpicker/css/iconpicker.min.css" />
<link rel="stylesheet" type="text/css" href="/static/admin/plugins/select2/css/select2.min.css" />
<link rel="stylesheet" type="text/css" href="/static/admin/plugins/fileinput/css/fileinput.min.css" />
<link rel="stylesheet" type="text/css" href="/static/admin/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" />
<link rel="stylesheet" type="text/css" href="/static/admin/css/AdminLTE.min.css" />
<link rel="stylesheet" type="text/css" href="/static/admin/css/admin.css" />
<link rel="stylesheet" type="text/css" href="/static/admin/css/_all-skins.min.css" />
<link rel="stylesheet" type="text/css" href="/static/admin/css/skins.css" />

<link rel="stylesheet" type="text/css" href="/static/admin/plugins/nprogress/nprogress.css" />
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

    <!--头部js-->
<?php if(!$admin['pjax']): ?>
<script type="text/javascript" src="/static/admin/plugins/js-cookie/js.cookie-2.2.0.min.js"></script>
<script type="text/javascript" src="/static/admin/plugins/jquery/jquery.min.js"></script>
<script type="text/javascript" src="/static/admin/plugins/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="/static/admin/plugins/layer/layer.js"></script>
<script type="text/javascript" src="/static/admin/plugins/laydate/laydate.js"></script>
<script type="text/javascript" src="/static/admin/plugins/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/static/admin/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script type="text/javascript" src="/static/admin/plugins/jquery-validation/jquery.validate.min.js"></script>
<script type="text/javascript" src="/static/admin/plugins/jquery-validation/localization/messages_zh.min.js"></script>
<script type="text/javascript" src="/static/admin/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<script type="text/javascript" src="/static/admin/plugins/bootstrap-number/bootstrap-number.min.js"></script>
<script type="text/javascript" src="/static/admin/plugins/fastclick/fastclick.min.js"></script>
<script type="text/javascript" src="/static/admin/plugins/select2/js/select2.full.min.js"></script>
<script type="text/javascript" src="/static/admin/plugins/nprogress/nprogress.min.js"></script>
<script type="text/javascript" src="/static/admin/plugins/iconpicker/js/iconpicker.min.js"></script>
<script type="text/javascript" src="/static/admin/plugins/fileinput/js/plugins/piexif.min.js"></script>
<script type="text/javascript" src="/static/admin/plugins/fileinput/js/fileinput.min.js"></script>
<script type="text/javascript" src="/static/admin/plugins/fileinput/js/locales/zh.min.js"></script>
<script type="text/javascript" src="/static/admin/plugins/ueditor/ueditor.config.js"></script>
<script type="text/javascript" src="/static/admin/plugins/ueditor/ueditor.all.min.js"></script>
<script type="text/javascript" src="/static/admin/plugins/ueditor/lang/zh-cn/zh-cn.min.js"></script>
<script type="text/javascript" src="/static/admin/plugins/clipboard/clipboard.min.js"></script>
<script type="text/javascript" src="/static/admin/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<script type="text/javascript" src="/static/admin/plugins/viewer/viewer.min.js"></script>
<script type="text/javascript" src="/static/admin/plugins/viewer/jquery-viewer.min.js"></script>
<!--勿必把地图api key更换成自己的-->
<script type="text/javascript" src='//webapi.amap.com/maps?v=1.4.15&key=cccf8ea926e153be0a013d55edd47c11&plugin=AMap.ToolBar'></script>
<!-- UI组件库 1.0 -->
<script src="//webapi.amap.com/ui/1.0/main.js?v=1.0.11"></script>
<script>
    //是否为debug模式
    var adminDebug = <?php echo htmlentities($debug); ?>;
    //cookie前缀
    var cookiePrefix = '<?php echo htmlentities($cookie_prefix); ?>';
    //UEditor server地址
    var UEServer = "<?php echo url('editor/server'); ?>";
    //列表页当前选择的ID
    var dataSelectIds = [];
</script>
<script type="text/javascript" src="/static/admin/js/adminlte.min.js"></script>
<script type="text/javascript" src="/static/admin/js/jquery.pjax.js"></script>
<script type="text/javascript" src="/static/admin/js/admin.js"></script>
<script type="text/javascript" src="/static/admin/js/demo.js"></script>
<script type="text/javascript" src="/static/admin/js/app.js"></script>

<?php endif; ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<?php endif; ?>

    <!-- 顶部 -->
    
    <!--网页头部-->
<?php if(!$admin['pjax']): ?>
<header class="main-header">
    <a class="logo">
        <span class="logo-mini"><?php echo htmlentities((isset($admin['short_name']) && ($admin['short_name'] !== '')?$admin['short_name']:'Backend')); ?></span>
        <span class="logo-lg"><?php echo htmlentities((isset($admin['name']) && ($admin['name'] !== '')?$admin['name']:'Backend')); ?></span>
    </a>
    <nav class="navbar navbar-static-top">
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </a>
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">

                <li class="dropdown messages-menu">
                    <a href="#" class="dropdown-toggle ReloadButton" title="刷新页面" data-toggle="dropdown">
                        <i class="fa fa-refresh"></i>
                    </a>
                </li>

                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="<?php echo htmlentities((isset($admin['user']['avatar']) && ($admin['user']['avatar'] !== '')?$admin['user']['avatar']:'/static/admin/images/avatar.png')); ?>" class="user-image" alt="用户头像">
                        <span class="hidden-xs"><?php echo htmlentities((isset($admin['user']['nickname']) && ($admin['user']['nickname'] !== '')?$admin['user']['nickname']:'')); ?></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="user-header">
                            <img src="<?php echo htmlentities((isset($admin['user']['avatar']) && ($admin['user']['avatar'] !== '')?$admin['user']['avatar']:'/static/admin/images/avatar.png')); ?>" class="img-circle" alt="用户头像">
                            <p>
                                <?php echo htmlentities((isset($admin['user']['nickname']) && ($admin['user']['nickname'] !== '')?$admin['user']['nickname']:'')); ?>
                                <small><?php echo htmlentities((isset($admin['user']['username']) && ($admin['user']['username'] !== '')?$admin['user']['username']:'')); ?></small>
                            </p>
                        </li>
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="<?php echo url('admin_user/profile'); ?>" class="btn btn-default btn-flat">个人资料</a>
                            </div>
                            <div class="pull-right">
                                <a href="<?php echo url('auth/logout'); ?>" class="btn btn-default btn-flat">退出</a>
                            </div>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                </li>
            </ul>
        </div>
    </nav>
</header>
<?php endif; ?>

    
    <!-- 左侧 -->
    
    <!--左侧菜单-->
<?php if(!$admin['pjax']): ?>
<aside class="main-sidebar">
    <section class="sidebar">
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo htmlentities((isset($admin['user']['avatar']) && ($admin['user']['avatar'] !== '')?$admin['user']['avatar']:'__BACKEND_IMAGES__/avatar.png')); ?>" class="img-circle" alt="用户头像">
            </div>
            <div class="pull-left info">
                <p><?php echo htmlentities((isset($admin['user']['nickname']) && ($admin['user']['nickname'] !== '')?$admin['user']['nickname']:'')); ?></p>
                <a><i class="fa fa-circle text-success"></i> 在线</a>
            </div>
        </div>
        <form method="get" class="sidebar-form" id="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="搜索菜单" id="search-input">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                        <i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form>
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">导航菜单</li>
            <?php echo (isset($admin['menu']) && ($admin['menu'] !== '')?$admin['menu']:''); ?>
        </ul>
    </section>
</aside>
<?php endif; ?>
    
    <!-- 内容 -->
    <div class="content-wrapper" id="pjax-container">
        
<!--内容头部-->
<section class="content-header">
    <h1>
        <?php echo (isset($admin['title']) && ($admin['title'] !== '')?$admin['title']:'admin'); ?>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo url('index/index'); ?>"><i class="fa fa-dashboard"></i> 主页</a></li>
        <li class="active"><?php echo (isset($admin['title']) && ($admin['title'] !== '')?$admin['title']:'Admin'); ?></li>
    </ol>
</section>

<?php if(app('session')->get('error_message')): ?>
<!--如果有错误或者成功的消息-->
<script>
    layer.msg('<?php echo htmlentities(app('session')->get('error_message')); ?>',{icon:2});
    $.pjax({
        url: "<?php echo htmlentities(app('session')->get('url')); ?>",
        container: '#pjax-container'
    });
</script>
<?php endif; if(app('session')->get('success_message')): ?>
<script>
    layer.msg('<?php echo htmlentities(app('session')->get('success_message')); ?>',{icon:1});
    $.pjax({
        url: '<?php echo htmlentities(app('session')->get('url')); ?>',
        container: '#pjax-container'
    });
</script>
<?php endif; ?>



<script>
    //收起左侧菜单，留出更大空间
    if (!$('body').hasClass('sidebar-collapse')) {
        $('body').addClass('sidebar-collapse');
    }

</script>
<section class="content">
    <style scoped>
        #dataBody th, #dataBody td {
            min-width: 60px;
        }

        td label {
            font-weight: normal;
        }

        .box-header .select2 {
            min-width: 130px;
        }

        .form-type-th {
            min-width: 150px;
        }

        .form-validate-th {
            min-width: 200px;
        }

        .form-validate-label, .form-validate-select, .form-type-label, .form-type-select {
            width: 100%;
        }

        #create_menu_list {
            min-width: 400px;
        }

        #controller_action_list {
            min-width: 400px;
        }

        .form-inline .form-group {
            margin-right: 20px;
        }

        .extend-div {
            display: none;
            position: absolute;
            z-index: 2;
        }

        #model_relation .form-group {
            margin-bottom: 10px;
        }

        .more-setting .extend-div {
            width: 570px;
            margin-right: 0;
            margin-left: -500px;
        }

        .more-setting .more-from {
            margin-bottom: 20px;
        }

        .modelRelationDiv .form-group .form-control {
            margin-right: 20px;
        }
    </style>

    <form id="dataForm" class="dataForm" action="create" method="post">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">代码自动生成</h3>
                    </div>

                    <!-- 表和菜单 -->
                    <div class="box-header with-border">
                        <div class="form-inline">
                            <div class="form-group">
                                <label for="table_name">选择表</label>
                                <select data-id="table_name" name="table_name" class="select2 form-control input-sm"
                                        id="table_name" data-placeholder="请选择表">
                                    <option value=""></option>
                                    <?php if(is_array($table) || $table instanceof \think\Collection || $table instanceof \think\Paginator): if( count($table)==0 ) : echo "" ;else: foreach($table as $key=>$item): ?>
                                    <option value="<?php echo htmlentities($item); ?>"><?php echo htmlentities($item); ?></option>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </select>
                                <button onclick="refreshTable()" type="button" class="btn btn-flat btn-success"
                                        data-toggle="tooltip" title="刷新表数据">
                                    <i class="fa fa-refresh"></i>
                                </button>
                            </div>

                            <div class="form-group">
                                <label for="cn_name">中文名</label>
                                <input name="cn_name" id="cn_name" class="form-control input-sm" placeholder="请填写中文名"
                                       title="表及功能的中文名字，例如用户表，就填写[用户]" data-toggle="tooltip">
                            </div>

                            <div class="form-group checkbox">
                                <label><input checked type="checkbox" value="1" id="auto_class_name"
                                              name="auto_class_name"
                                              title="自动生成控制器|模型|验证器类名" data-toggle="tooltip">自动生成类名</label>

                            </div>

                            <div class="form-group checkbox">
                                <label><input checked type="checkbox" value="1" id="list_delete"
                                              name="list_delete"
                                              title="列表删除功能" data-toggle="tooltip">列表删除</label>
                            </div>
                            <div class="form-group checkbox">
                                <label><input checked type="checkbox" value="1" id="list_create"
                                              name="list_create"
                                              title="列表添加功能" data-toggle="tooltip">列表添加</label>
                            </div>

                            <div class="form-group checkbox">
                                <label><input checked type="checkbox" value="1" id="list_refresh"
                                              name="list_refresh"
                                              title="列表刷新功能" data-toggle="tooltip">列表刷新</label>
                            </div>

                            <div class="form-group checkbox">
                                <label><input type="checkbox" value="1" id="list_export"
                                              name="list_export"
                                              title="列表导出功能" data-toggle="tooltip">列表导出</label>
                            </div>

                            <div class="form-group checkbox">
                                <label><input type="checkbox" value="1" id="list_enable"
                                              name="list_enable"
                                              title="列表启用/禁用功能" data-toggle="tooltip">列表启用/禁用</label>
                            </div>

                        </div>
                    </div>

                    <!-- 控制器 -->
                    <div class="box-header with-border">
                        <div class="form-inline">

                            <div class="form-group">
                                <label for="create_menu">菜 单</label>
                                <select data-id="create_menu" name="create_menu" class="select2 form-control input-sm"
                                        id="create_menu" data-placeholder="不选择为不生成菜单">
                                    <option value="-1">不生成</option>
                                    <option value="0">顶级菜单</option>
                                    <?php echo $menus; ?>
                                </select>
                                <button onclick="refreshMenu()" type="button" class="btn btn-flat btn-success"
                                        data-toggle="tooltip" title="刷新菜单">
                                    <i class="fa fa-refresh"></i>
                                </button>
                            </div>


                            <div class="form-group">
                                <label for="create_menu_list">菜单选择</label>
                                <select name="create_menu_list[]" class="select2 form-control input-sm"
                                        id="create_menu_list" multiple="multiple" data-placeholder="默认生成增删改菜单">
                                    <option value="1" disabled selected>列表</option>
                                    <option value="2" selected>添加</option>
                                    <option value="3" selected>修改</option>
                                    <option value="4" selected>删除</option>
                                    <option value="5">启用/禁用</option>
                                </select>
                            </div>

                        </div>
                    </div>


                    <div class="box-header with-border">
                        <div class="form-inline">

                            <div class="form-group">
                                <label for="create_controller">控制器</label>
                                <select data-id="create_controller" name="create_controller"
                                        class="select2 form-control input-sm"
                                        id="create_controller" data-placeholder="默认生成">
                                    <option value="1">生成</option>
                                    <option value="0">不生成</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="controller_name">控制器名</label>
                                <input name="controller_name" id="controller_name"
                                       class="form-control input-sm" title="默认会根据表名自动生成" placeholder="请填写控制器名"
                                       data-toggle="tooltip">
                            </div>

                            <div class="form-group">
                                <label for="controller_action_list">控制器方法</label>
                                <select name="controller_action_list[]" class="select2 form-control input-sm"
                                        id="controller_action_list" multiple="multiple" data-placeholder="默认生成增删改方法">
                                    <option value="1" selected>列表</option>
                                    <option value="2" selected>添加</option>
                                    <option value="3" selected>修改</option>
                                    <option value="4" selected>删除</option>
                                    <option value="5">启用/禁用</option>
                                </select>
                            </div>
                        </div>
                    </div>


                    <div class="box-header with-border">
                        <div class="form-inline">
                            <div class="form-group">
                                <label for="create_model">模 型</label>
                                <select data-id="create_model" name="create_model" class="select2 form-control input-sm"
                                        id="create_model" data-placeholder="默认生成">
                                    <option value="1">生成</option>
                                    <option value="0">不生成</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="model_name">模型名</label>
                                <input name="model_name" id="model_name" class="form-control input-sm"
                                       placeholder="模型名" title="默认会根据表名自动生成" data-toggle="tooltip">
                            </div>

                            <div class="form-group checkbox">
                                <label><input checked type="checkbox" value="1" name="auto_timestamp"
                                              title="自动添加create_time和update_time字段" data-toggle="tooltip">自动时间戳</label>

                            </div>

                            <div class="form-group checkbox">
                                <label><input checked type="checkbox" value="1" name="soft_delete"
                                              title="自动添加delete_time字段，默认为0" data-toggle="tooltip">软删除</label>
                            </div>

                            <div>

                            </div>
                        </div>
                    </div>


                    <div class="box-header with-border">
                        <div class="form-inline">
                            <div class="form-group">
                                <label for="create_validate">验证器</label>
                                <select data-id="create_validate" name="create_validate"
                                        class="select2 form-control input-sm"
                                        id="create_validate" data-placeholder="默认生成">
                                    <option value="1">生成</option>
                                    <option value="0">不生成</option>
                                </select>
                            </div>


                            <div class="form-group">
                                <label for="validate_name">验证器名</label>
                                <input name="validate_name" id="validate_name" class="form-control input-sm"
                                       placeholder="验证器名" title="默认会根据表名自动生成" data-toggle="tooltip">
                            </div>
                        </div>


                    </div>


                    <div class="box-body table-responsive">
                        <table id="dataList" class="table table-hover table-bordered datatable" width="100%">
                            <thead>
                            <tr class="input-type">
                                <th>操作</th>
                                <th title="字段名为小写下划线形式">字段</th>
                                <th title="字段类型，例如varchar(255),int(10),decimal(12,2)">类型</th>
                                <th title="中文名称，例如username为用户名">名称</th>
                                <th title="是否在列表页显示">列表</th>
                                <th title="是否为列表页搜索字段">搜索</th>
                                <th title="是否为添加/修改页字段">表单</th>
                                <th class="form-type-th" title="表单类型">表单类型</th>
                                <th class="form-validate-th" title="表单验证">表单验证</th>
                                <th title="字段更多设置">更多</th>
                            </tr>
                            </thead>
                            <tbody id="dataBody">
                            </tbody>
                        </table>
                    </div>
                    <div class="box-footer">
                        <a class="btn btn-primary btn-sm btn-success" onclick="addNewField(null,2)">添加一行</a>
                        <button class="btn btn-primary btn-sm pull-right" type="submit">提交</button>
                    </div>
                </div>
            </div>
        </div>

    </form>
    <table>
        <tbody id="data-template" style="display: none">
        <tr>
            <td>
                <a class="btn btn-xs btn-primary" onclick="addNewField(this,1)">插入</a>
                <a class="btn btn-xs btn-success" onclick="addNewField(this,2)">追加</a>
                <a class="btn btn-xs btn-danger" onclick="delThisField(this,1)">删除</a>
            </td>

            <td>
                <label>
                    <input class="form-control" name="field_nameFORM_INDEX[]" value="" placeholder="字段"
                    >
                </label>
            </td>
            <td>
                <label>
                    <input class="form-control field-type" value="" name="field_typeFORM_INDEX[]"

                           placeholder="字段类型，例如varchar(255),int(10),decimal(12,2)">
                </label>
            </td>
            <td>
                <label>
                    <input class="form-control" name="form_nameFORM_INDEX[]" placeholder="名称">
                </label>
            </td>

            <td>
                <label class="bodyFormCheckbox">
                    <input type="checkbox" value="1" id="is_listFORM_INDEX[]" name="is_listFORM_INDEX[]">列表
                </label>
            </td>

            <td>
                <label class="bodyFormCheckbox">
                    <input type="checkbox" value="1" id="is_searchFORM_INDEX[]" name="is_searchFORM_INDEX[]">搜索
                </label>
            </td>
            <td>
                <label class="bodyFormCheckbox">
                    <input type="checkbox" value="1" id="is_formFORM_INDEX[]" name="is_formFORM_INDEX[]">表单
                </label>
            </td>

            <td>
                <label class="form-type-label">
                    <select class="form-control select2 form-type-select" name="form_typeFORM_INDEX[]"
                            onchange="selectField(this)">
                        <option value="text">文本[text]</option>
                        <option value="number">数字[number]</option>
                        <option value="password">密码[password]</option>
                        <option value="mobile">手机号[mobile]</option>
                        <option value="email">邮箱[email]</option>
                        <option value="id_card">身份证号[id_card]</option>
                        <option value="url">网址[url]</option>
                        <option value="ip">IP地址[ip]</option>
                        <option value="textarea">文本域[textarea]</option>
                        <option value="checkbox">复选[checkbox]</option>
                        <option value="switch">开关[switch]</option>
                        <option value="radio">单选[radio]</option>
                        <option value="select">选择列表[select]</option>
                        <option value="multi_select">多项选择列表[multi-select]</option>
                        <option value="image">图片上传[image]</option>
                        <option value="multi_image">多图上传[multi-image]</option>
                        <option value="file">文件上传[file]</option>
                        <option value="multi_file">多文件上传[multi-file]</option>
                        <option value="date">日期[date]</option>
                        <option value="date_range">日期范围[date-range]</option>
                        <option value="datetime">日期时间[datetime]</option>
                        <option value="datetime_range">日期时间范围[datetime-range]</option>
                        <option value="year">年[year]</option>
                        <option value="year_range">年范围[year-range]</option>
                        <option value="year_month">年月[year-month]</option>
                        <option value="year_month_range">年月范围[year-month-range]</option>
                        <option value="map">地图选点[map]</option>
                        <option value="color">颜色选择[color]</option>
                        <option value="icon">图标选择[icon]</option>
                        <option value="editor">富文本编辑器[editor]</option>
                    </select>
                </label>
            </td>

            <td class="form-validate-td">
                <label class="form-validate-label">
                    <select class="form-control form-validate-select select2" multiple="multiple"
                            name="form_validateFORM_INDEX[]">
                        <option value="required">非空</option>
                        <!--当前采用微信号的规则6至20位，以字母开头，字母，数字，减号，下划线 /^[a-zA-Z]([-_a-zA-Z0-9]{5,19})+$/-->
                        <option value="account">账号</option>
                        <!--验证简单中文名字2-4个汉字， /[\u4E00-\u9FA5]{2,4}/如有特殊名字请手动更改规则长度-->
                        <option value="cn_name">中文姓名</option>
                        <!--/^[京津沪渝冀豫云辽黑湘皖鲁新苏浙赣鄂桂甘晋蒙陕吉闽贵粤青藏川宁琼使领A-Z]{1}[A-Z]{1}[A-Z0-9]{4}[A-Z0-9挂学警港澳]{1}$/-->
                        <option value="car_number">车牌号</option>
                    </select>
                </label>
            </td>
            <td class="more-setting" data-id="INDEX_ID">
                <!-- 这里放更多设置
                 例如：date，date_time类型的自动加时间转换功能
                 is_xxx同时是switch的字段自动加is_xxx_text功能
                 -->

                <a class="btn btn-default btn-sm setting-more" data-id="INDEX_ID">更多设置</a>

                <div class="extend-div" id="field_setting_div_INDEX_ID" data-id="INDEX_ID">
                    <div class="box box-warning box-solid">
                        <div class="box-header with-border">
                            <h3 class="box-title">字段更多设置</h3>
                        </div>
                        <div class="box-body" id="field_setting_INDEX_ID">


                            <div class="more-from">
                                <div class="form-inline">
                                    <div class="form-group">
                                        <label for="field_defaultINEDEX_ID">默认值</label>
                                        <input name="field_defaultFORM_INDEX[]"
                                               class="form-control input-sm"
                                               id="field_defaultINEDEX_ID" placeholder="请填写默认值">
                                    </div>

                                    <div class="form-group">
                                        <label for="getter_setterFORM_INDEX">获取/修改器</label>
                                        <select name="getter_setterFORM_INDEX[]"
                                                class="select2 form-control input-sm"
                                                id="getter_setterFORM_INDEX" data-placeholder="获取/修改器">
                                            <option value="">无</option>
                                            <option value="datetime">datetime</option>
                                            <option value="switch">switch</option>
                                            <option value="date">date</option>
                                        </select>
                                    </div>

                                    <div class="form-group checkbox">
                                        <label><input type="checkbox" value="1" name="list_sortFORM_INDEX[]"
                                                      title="是否参与列表排序" data-toggle="tooltip">列表排序</label>
                                    </div>

                                </div>
                            </div>

                            <hr/>
                            <div class="more-from">
                                <div class="form-inline">
                                    <div class="form-group">
                                        <label for="is_relationFORM_INDEX">关联设置</label>
                                        <select name="is_relationFORM_INDEX[]"
                                                class="select2 form-control input-sm"
                                                id="is_relationFORM_INDEX" data-placeholder="是否关联字段"
                                                onchange="selectRelation(this)"
                                                data-relation-table="relation_tableFORM_INDEX[]"
                                                data-relation-show="relation_showFORM_INDEX[]">
                                            <option value="0">非关联字段</option>
                                            <option value="1">关联外键</option>
                                            <option value="2">关联主键</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <select name="relation_typeFORM_INDEX[]"
                                                class="select2 form-control input-sm"
                                                id="relation_typeFORM_INDEX" title="暂时只支持一对一和一对多" data-toggle="tooltip"
                                                data-placeholder="关联方式">
                                            <option value="1">一对多</option>
                                            <option value="2">一对一</option>

                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <input readonly name="relation_showFORM_INDEX[]"
                                               class="form-control input-sm"
                                               id="relation_showINEDEX_ID"
                                               title="belongsTo填写，例如文章发布人user_id要显示成User模型的nickname，填写nickname即可"
                                               data-toggle="tooltip" placeholder="关联显示字段">
                                    </div>

                                    <div class="form-group">
                                        <input readonly name="relation_tableFORM_INDEX[]"
                                               class="form-control input-sm"
                                               id="relation_tableINEDEX_ID"
                                               title="一般此字段为id，belongsTo的无须填写，hasOne/hasMany填写此字段，关联多个模型务必使用英文逗号隔开，例如用户关联多篇文章，多个积分记录，可以写成article,integral_log"
                                               data-toggle="tooltip" placeholder="关联表/模型,用英文逗号隔开">
                                    </div>

                                </div>
                            </div>

                            <hr/>
                            <div class="more-from">
                                <div class="form-inline">
                                    <div class="form-group">
                                        <label for="field_sceneINEDEX_ID">验证场景</label>
                                        <select style="min-width: 380px;width: 420px;" name="field_sceneFORM_INDEX[]"
                                                class="select2 form-control input-sm"
                                                id="field_sceneINEDEX_ID" multiple="multiple"
                                                data-placeholder="默认选择三大模块">
                                            <option value="admin_add" selected>admin_add</option>
                                            <option value="admin_edit" selected>admin_edit</option>
                                            <option value="api_add" selected>api_add</option>
                                            <option value="api_edit" selected>api_edit</option>
                                            <option value="index_add" selected>index_add</option>
                                            <option value="index_edit" selected>index_edit</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </td>
        </tr>
        </tbody>

    </table>


</section>
<script>

    //刷新数据库表
    function refreshTable() {
        $.post('<?php echo url("admin/generate/getTable"); ?>', function (result) {
            let html = '<option value=""></option>';
            $.each(result.data, function (index, item) {
                html += '<option value="' + item + '">' + item + '</option>';
            });
            $('#table_name').html(html).select2();
        });
    }

    //表单索引
    var formIndex = 0;

    $(function () {

        //获取表信息和字段等，进行页面填充
        $("#table_name").on('change', function () {
            getField($(this).val());
        });

        //列表启用/禁止关联菜单和控制器
        $('#list_enable').change(function () {
            console.log('启用/禁止选项');
            let checked = $(this).is(':checked');
            let $menu_list = $('#create_menu_list');
            let $action_list = $('#controller_action_list');
            $menu_list.find("option[value='5']").attr("selected", checked);
            $action_list.find("option[value='5']").attr("selected", checked);
            $menu_list.select2();
            $action_list.select2();
        });

        //默认添加一行空的字段
        addNewField(null, 1);

    });


    //添加新的字段
    function addNewField(obj, type) {

        formIndex++;
        let template = $("#data-template").html().replace(/FORM_INDEX/g, '[' + formIndex + ']').replace(/INDEX_ID/g, formIndex);

        if (obj == null) {
            $("#dataBody").append(template);
        } else {
            if (type === 1) {
                $(obj).parent().parent().before(template);
            } else {
                $(obj).parent().parent().after(template);
            }
        }

        //刷新 dataBody DOM后的操作
        dataBodyRefreshed();
    }


    //删除当前字段
    function delThisField(obj) {
        layer.confirm('您确认删除本行吗？', {title: '删除确认', closeBtn: 1, icon: 3}, function () {
            $(obj).parent().parent().remove();
            layer.closeAll();
        });
    }

    //提交验证
    $("#dataForm").validate({
        rules: {
            table_name: {
                required: true,
            },
            cn_name: {
                required: true,
            },
        },
        messages: {
            table_name: {
                required: "表名不能为空",
            },
            cn_name: {
                required: "中文名不能为空",
            },
        },
    });

    //选择表
    $('#table_name').select2();
    //生成菜单列表
    $('#create_menu_list').select2();
    //是否生成控制器
    $('#create_controller').select2();
    //是否生成模型
    $('#create_model').select2();
    //是否生成验证器
    $('#create_validate').select2();
    //控制器方法表
    $('#controller_action_list').select2();
    //选择父级菜单
    $('#create_menu').select2();

    //获取表信息
    function getField(name) {
        $.post('getField', {name: name}, function (result) {
            if (result.code === 1) {

                let $dataBody = $("#dataBody");

                if (adminDebug) {
                    console.time('表信息与相关DOM操作耗时');
                }
                let controller = result.data.controller;
                let model = result.data.model;
                let validate = result.data.validate;
                let field = result.data.field;
                if (adminDebug) {
                    console.log('字段数量：' + field.length);
                }
                let table = result.data.table;
                //中文名
                $('#cn_name').val(table.cn_name);
                //如果是自动生成类名
                if ($('#auto_class_name').is(':checked')) {
                    $("#controller_name").val(controller.name);
                    $("#model_name").val(model.name);
                    $("#validate_name").val(validate.name);
                }
                $dataBody.html('');
                //字段名
                let field_name = "#data-template input[name='field_nameFORM_INDEX[]']";
                //字段类型
                let field_type = "#data-template input[name='field_typeFORM_INDEX[]']";
                //是否为列表字段
                let field_list = "#data-template [name='is_listFORM_INDEX[]']";
                //是否为搜索字段
                let field_search = "#data-template [name='is_searchFORM_INDEX[]']";
                //是否为表单字段
                let field_form = "#data-template [name='is_formFORM_INDEX[]']";
                //中文名称
                let form_name = "#data-template [name='form_nameFORM_INDEX[]']";
                //表单类型
                let form_type = "#data-template [name='form_typeFORM_INDEX[]']";
                //表单验证
                let form_validate = "#data-template [name='form_validateFORM_INDEX[]']";
                //字段默认值
                let field_form_default = "#data-template [name='field_defaultFORM_INDEX[]']";
                //获取器/修改器
                let getter_setter = "#data-template [name='getter_setterFORM_INDEX[]']";
                //列表排序
                let list_sort = "#data-template [name='list_sortFORM_INDEX[]']";

                //
                let listHtml = '';
                $.each(field, function (index, item) {
                    //字段名
                    $(field_name).attr('value', item.name);
                    //字段类型
                    $(field_type).attr('value', item.field_type);
                    //中文名称
                    $(form_name).attr('value', item.cn_name);
                    //默认值
                    $(field_form_default).attr('value', item.default);
                    //表单类型
                    $(form_type).val(item.form_type);

                    //是否为列表字段
                    if (item.is_list === 1) {
                        $(field_list).attr('checked', true);
                    } else {
                        $(field_list).attr('checked', false);
                    }

                    //是否为搜索字段
                    if (item.is_search === 1) {
                        $(field_search).attr('checked', true);
                    } else {
                        $(field_search).attr('checked', false);
                    }

                    //是否为表单字段
                    if (item.is_form === 1) {
                        $(field_form).attr('checked', true);
                    } else {
                        $(field_form).attr('checked', false);
                    }

                    //表单类型
                    $(form_type).find("option[value='" + item.form_type + "']").attr("selected", true);
                    //表单验证内容
                    $(form_validate).html(item.validate_html);
                    //表单选项
                    $(form_validate).find("option[value='required']").attr("selected", true);

                    //获取器/修改器
                    if (item.getter_setter !== false) {
                        $(getter_setter).find("option[value='" + item.getter_setter + "']").attr("selected", true);
                    }

                    //优化生成DOM慢的问题
                    formIndex++;
                    listHtml += $("#data-template").html().replace(/FORM_INDEX/g, '[' + formIndex + ']').replace(/INDEX_ID/g, formIndex);

                    if (getter_setter !== false) {
                        $(getter_setter).find("option[value='" + item.getter_setter + "']").attr("selected", false);
                    }
                    $(form_type).find("option[value='" + item.form_type + "']").attr("selected", false);
                    $(field_name).attr('value', '');
                    $(field_type).attr('value', '');
                    $(form_validate).empty();

                });

                $dataBody.append(listHtml);
                dataBodyRefreshed();

                if (adminDebug) {
                    console.timeEnd('表信息与相关DOM操作耗时');
                }
            }

        });
    }


    //表单元素类型改变
    function selectField(field) {
        let $field = $(field);
        let form_type = $field.val();
        console.log(form_type);
        let $validate_select = $field.parent().parent().next().find('.form-validate-select');

        $.post('getValidateSelect', {form_type: form_type}, function (result) {
            if (1 === result.code) {
                $validate_select.html(result.data);
                $validate_select.select2();
            } else {
                layer.msg(result.msg);
            }
        });

    }


    //刷新菜单
    function refreshMenu() {
        //目前还没写，争取尽快完善
    }


    //字段更多设置
    $("#pjax-container").off('click').on('click', '.setting-more', function () {
        let $dom = $('#field_setting_div_' + $(this).data('id'));
        $dom.is(":hidden") ? $dom.show() : $dom.hide();
    });

    //选择关联类型防呆设计
    function selectRelation(obj) {
        let $obj = $(obj);
        let relation_type = parseInt($obj.val());
        let relation_show = $obj.data('relationShow');
        let relation_table = $obj.data('relationTable');

        if (relation_type === 1) {
            $('input[name="' + relation_table + '"]').attr('readonly', 'readonly');
            $('input[name="' + relation_show + '"]').removeAttr('readonly');
        } else if (relation_type === 2) {
            $('input[name="' + relation_show + '"]').attr('readonly', 'readonly');
            $('input[name="' + relation_table + '"]').removeAttr('readonly');
        } else {
            $('input[name="' + relation_table + '"]').attr('readonly', 'readonly');
            $('input[name="' + relation_show + '"]').attr('readonly', 'readonly');
        }
    }

    //列表刷新后的操作
    function dataBodyRefreshed() {
        $('[data-toggle="tooltip"]').tooltip();
        $('#dataBody .select2').select2();
    }

</script>


    </div>
    
    <!--页面底部-->
<?php if(!$admin['pjax']): ?>
<footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b>Version</b> <?php echo htmlentities((isset($admin['version']) && ($admin['version'] !== '')?$admin['version']:'1.0')); ?>
    </div>
    <strong>Copyright &copy; 2019 <a href="<?php echo htmlentities((isset($admin['link']) && ($admin['link'] !== '')?$admin['link']:'#')); ?>"><?php echo htmlentities((isset($admin['author']) && ($admin['author'] !== '')?$admin['author']:'admin')); ?></a>.</strong> All rights
    reserved.
</footer>
<?php endif; ?>
    

    
    <!--侧边栏-->
<?php if(!$admin['pjax']): ?>
<aside class="control-sidebar control-sidebar-dark">
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
    </ul>
    <div class="tab-content">
        <div class="tab-pane" id="control-sidebar-home-tab">
        </div>
    </div>
</aside>
<div class="control-sidebar-bg"></div>
<?php endif; if(!$admin['pjax']): ?>
</div>
<?php endif; if(!$admin['pjax']): ?>
</body>
</html>
<?php endif; ?>