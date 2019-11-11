<?php /*a:9:{s:77:"D:\phpStudy\PHPTutorial\WWW\AdminDemo\application\admin\view\index\index.html";i:1567736791;s:77:"D:\phpStudy\PHPTutorial\WWW\AdminDemo\application\admin\view\public\base.html";i:1567736791;s:81:"D:\phpStudy\PHPTutorial\WWW\AdminDemo\application\admin\view\public\head_css.html";i:1567736791;s:80:"D:\phpStudy\PHPTutorial\WWW\AdminDemo\application\admin\view\public\head_js.html";i:1567736791;s:79:"D:\phpStudy\PHPTutorial\WWW\AdminDemo\application\admin\view\public\header.html";i:1567736791;s:80:"D:\phpStudy\PHPTutorial\WWW\AdminDemo\application\admin\view\public\sidebar.html";i:1567736791;s:87:"D:\phpStudy\PHPTutorial\WWW\AdminDemo\application\admin\view\public\content_header.html";i:1567736791;s:79:"D:\phpStudy\PHPTutorial\WWW\AdminDemo\application\admin\view\public\footer.html";i:1567736791;s:88:"D:\phpStudy\PHPTutorial\WWW\AdminDemo\application\admin\view\public\control_sidebar.html";i:1567736791;}*/ ?>
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




<section class="content">

    <?php if($welcome_info): ?>
    <div class="row">
        <div class="pad margin no-print">
            <div class="callout callout-info">
                <h4><i class="fa fa-info"></i> 你好,<?php echo htmlentities((isset($user['nickname']) && ($user['nickname'] !== '')?$user['nickname']:'管理员')); ?>:</h4>
                欢迎来到<?php echo htmlentities((isset($admin['name']) && ($admin['name'] !== '')?$admin['name']:'后台管理系统')); ?>，左侧为菜单区域，右侧为功能区。
            </div>
        </div>
    </div>
    <?php endif; ?>


    <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-aqua">
                    <i class="fa fa-user"></i>
                </span>
                <div class="info-box-content">
                    <span class="info-box-text">后台用户</span>
                    <span class="info-box-number"><?php echo htmlentities((isset($admin_user_count) && ($admin_user_count !== '')?$admin_user_count:'0')); ?></span>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-red">
                    <i class="fa fa-users"></i>
                </span>
                <div class="info-box-content">
                    <span class="info-box-text">后台角色</span>
                    <span class="info-box-number"><?php echo htmlentities((isset($admin_role_count) && ($admin_role_count !== '')?$admin_role_count:'0')); ?></span>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-green">
                    <i class="fa fa-list"></i>
                </span>
                <div class="info-box-content">
                    <span class="info-box-text">后台菜单</span>
                    <span class="info-box-number"><?php echo htmlentities((isset($admin_menu_count) && ($admin_menu_count !== '')?$admin_menu_count:'0')); ?></span>
                </div>
            </div>
        </div>

        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-yellow">
                    <i class="fa fa-keyboard-o"></i>
                </span>

                <div class="info-box-content">
                    <span class="info-box-text">操作日志</span>
                    <span class="info-box-number"><?php echo htmlentities((isset($admin_log_count) && ($admin_log_count !== '')?$admin_log_count:'0')); ?></span>
                </div>
            </div>
        </div>

    </div>


    <div class="row">
        <section class="col-lg-7 connectedSortable" id="sortable1">

            <div class="box sortable-widget" id="user_info">
                <div class="box-header with-border">
                    <h3 class="box-title">访问信息</h3>
                </div>
                <div class="box-body">
                    <table class="table table-bordered table-striped">
                        <tbody>
                        <tr>
                            <th>用户系统</th>
                            <td><?php echo htmlentities($system_info['user_os']); ?></td>
                            <th>用户IP</th>
                            <td><?php echo htmlentities($system_info['user_ip']); ?></td>
                        </tr>

                        <tr>
                            <th>浏览器</th>
                            <td><?php echo htmlentities($system_info['user_browser']); ?></td>
                            <th>所在城市</th>
                            <td><?php echo htmlentities($system_info['user_ip_address']); ?></td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>

            <div class="box sortable-widget" id="system_info">
                <div class="box-header with-border">
                    <h3 class="box-title">系统信息</h3>
                </div>
                <div class="box-body">
                    <table class="table table-bordered table-striped">
                        <tbody>
                        <tr>
                            <th>服务器系统</th>
                            <td><?php echo htmlentities($system_info['server_os']); ?></td>
                            <th>服务器IP</th>
                            <td><?php echo htmlentities($system_info['server_ip']); ?></td>
                        </tr>

                        <tr>
                            <th>PHP版本</th>
                            <td><?php echo htmlentities($system_info['php_version']); ?></td>
                            <th>运行内存限制</th>
                            <td><?php echo htmlentities($system_info['memory_limit']); ?></td>
                        </tr>

                        <tr>
                            <th>最大文件上传限制</th>
                            <td><?php echo htmlentities($system_info['upload_max_filesize']); ?></td>
                            <th>单次上传数量限制</th>
                            <td><?php echo htmlentities($system_info['max_file_uploads']); ?></td>
                        </tr>

                        <tr>
                            <th>最大POST限制</th>
                            <td><?php echo htmlentities($system_info['post_max_size']); ?></td>
                            <th>项目磁盘剩余容量</th>
                            <td><?php echo htmlentities($system_info['disk_free']); ?></td>
                        </tr>

                        <tr>
                            <th>ThinkPHP版本</th>
                            <td><?php echo htmlentities($system_info['think_version']); ?></td>
                            <th>后台系统版本</th>
                            <td><?php echo htmlentities($system_info['admin_version']); ?></td>
                        </tr>

                        <tr>
                            <th>MySql版本</th>
                            <td><?php echo htmlentities($system_info['db_version']); ?></td>
                            <th>PHP当前运行模式</th>
                            <td><?php echo htmlentities($system_info['php_sapi_name']); ?></td>
                        </tr>

                        <tr>
                            <th>PHP当前时区</th>
                            <td><?php echo htmlentities($system_info['timezone']); ?></td>
                            <th>PHP当前时间</th>
                            <td><?php echo htmlentities($system_info['date_time']); ?></td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>

        </section>


        <section class="col-lg-5 connectedSortable" id="composer_info">
            <div class="box sortable-widget" id="widget2">
                <div class="box-header with-border">
                    <h3 class="box-title">依赖关系</h3>
                </div>
                <div class="box-body">
                    <table class="table table-bordered table-striped">
                        <tbody>
                        <?php if(is_array($system_info['require_list']) || $system_info['require_list'] instanceof \think\Collection || $system_info['require_list'] instanceof \think\Paginator): if( count($system_info['require_list'])==0 ) : echo "" ;else: foreach($system_info['require_list'] as $key=>$item): ?>
                        <tr>
                            <th><?php echo htmlentities($key); ?></th>
                            <td><?php echo htmlentities($item); ?></td>
                        </tr>
                        <?php endforeach; endif; else: echo "" ;endif; if(is_array($system_info['require_dev_list']) || $system_info['require_dev_list'] instanceof \think\Collection || $system_info['require_dev_list'] instanceof \think\Paginator): if( count($system_info['require_dev_list'])==0 ) : echo "" ;else: foreach($system_info['require_dev_list'] as $key=>$item): ?>
                        <tr>
                            <th><?php echo htmlentities($key); ?></th>
                            <td><?php echo htmlentities($item); ?></td>
                        </tr>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>

</section>

<script>

    var passwordDanger = <?php echo htmlentities($password_danger); ?>;
    var sortableChanged = false;

    var sortableIds = [];

    $(function () {

        $('.connectedSortable').sortable({
            placeholder: 'sort-highlight',
            connectWith: '.connectedSortable',
            handle: '.box-header',
            forcePlaceholderSize: true,
            zIndex: 999999,
            update: function (event, ui) {
                sortableChanged = true;
                let ids1 = $('#sortable1').sortable('toArray');
                let ids2 = $('#sortable2').sortable('toArray');
                $.each(ids2, function (index, item) {
                    ids1.push(item);
                });

                sortableIds = ids1;
                console.log(sortableIds);

                /* $.ajax({
                     type: "post",
                     url: "",
                     data: {image_ids},
                     dataType: "json",
                     success: function(result) {
                         window.location.reload(); //后台获取到数据刷新页面
                     }
                 });*/
            }


        });
        $('.connectedSortable .box-header, .connectedSortable .nav-tabs-custom').css('cursor', 'move');

        //密码修改检查
        if(parseInt(passwordDanger)===1){
            layer.confirm('系统检测到超级管理员默认密码未修改，是否马上去修改？',{title:'风险提示',closeBtn:1,icon:7},function(){
                $.pjax({
                    url: '/admin/admin_user/profile.html#privacy',
                    container: '#pjax-container'
                });
                layer.closeAll();
            });
        }
    });


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