<?php /*a:9:{s:77:"D:\phpStudy\PHPTutorial\WWW\AdminDemo\application\admin\view\article\add.html";i:1567736791;s:77:"D:\phpStudy\PHPTutorial\WWW\AdminDemo\application\admin\view\public\base.html";i:1567736791;s:81:"D:\phpStudy\PHPTutorial\WWW\AdminDemo\application\admin\view\public\head_css.html";i:1567736791;s:80:"D:\phpStudy\PHPTutorial\WWW\AdminDemo\application\admin\view\public\head_js.html";i:1567736791;s:79:"D:\phpStudy\PHPTutorial\WWW\AdminDemo\application\admin\view\public\header.html";i:1567736791;s:80:"D:\phpStudy\PHPTutorial\WWW\AdminDemo\application\admin\view\public\sidebar.html";i:1567736791;s:87:"D:\phpStudy\PHPTutorial\WWW\AdminDemo\application\admin\view\public\content_header.html";i:1567736791;s:79:"D:\phpStudy\PHPTutorial\WWW\AdminDemo\application\admin\view\public\footer.html";i:1567736791;s:88:"D:\phpStudy\PHPTutorial\WWW\AdminDemo\application\admin\view\public\control_sidebar.html";i:1567736791;}*/ ?>
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
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <!-- 表单头部 -->
                <div class="box-header with-border">
                    <div class="btn-group">
                        <a class="btn flat btn-sm btn-default BackButton">
                            <i class="fa fa-arrow-left"></i>
                            返回
                        </a>
                    </div>
                </div>
                <!-- 表单 -->
                <form id="dataForm" class="form-horizontal dataForm" action="" method="post"
                      enctype="multipart/form-data">
                    <!-- 表单字段区域 -->
                    <div class="box-body">
                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">标题</label>
                            <div class="col-sm-10 col-md-4">
                                <input id="name" name="name" value="<?php echo htmlentities((isset($data['name']) && ($data['name'] !== '')?$data['name']:'')); ?>" placeholder="请输入标题"
                                       type="text" class="form-control field-text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="user_id" class="col-sm-2 control-label">发布人</label>
                            <div class="col-sm-10 col-md-4">
                                <select name="user_id" id="user_id" class="form-control field-select"
                                        data-placeholder="请选择发布人">
                                    <option value=""></option>
                                    <?php if(is_array($user_list) || $user_list instanceof \think\Collection || $user_list instanceof \think\Paginator): if( count($user_list)==0 ) : echo "" ;else: foreach($user_list as $key=>$item): ?>
                                    <option value="<?php echo htmlentities($item['id']); ?>" <?php if(isset($data) &&  $data['user_id']==$item['id']): ?>selected<?php endif; ?>>
                                        <?php echo htmlentities($item['nickname']); ?>
                                    </option>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </select>
                            </div>
                        </div>
                        <script>
                            $('#user_id').select2();
                        </script>
                        <div class="form-group">
                            <label for="article_category_id" class="col-sm-2 control-label">所属分类</label>
                            <div class="col-sm-10 col-md-4">
                                <select name="article_category_id" id="article_category_id"
                                        class="form-control field-select" data-placeholder="请选择所属分类">
                                    <option value=""></option>
                                   <?php echo $article_category_list; ?>
                                </select>
                            </div>
                        </div>
                        <script>
                            $('#article_category_id').select2();
                        </script>


                        <div class="form-group">
                            <label for="article_category_id" class="col-sm-2 control-label">标签</label>
                            <div class="col-sm-10 col-md-4">
                                <select name="tag[]" id="tag"
                                        class="form-control field-select" multiple="multiple" data-placeholder="请选择标签">
                                    <option value=""></option>
                                    <?php if(is_array($tag_list) || $tag_list instanceof \think\Collection || $tag_list instanceof \think\Paginator): if( count($tag_list)==0 ) : echo "" ;else: foreach($tag_list as $key=>$item): ?>
                                    <option value="<?php echo htmlentities($item['id']); ?>"

                                            <?php if(isset($data)): if(is_array($data['tag']) || $data['tag'] instanceof \think\Collection || $data['tag'] instanceof \think\Paginator): if( count($data['tag'])==0 ) : echo "" ;else: foreach($data['tag'] as $key=>$item_tag): if($item_tag['id']==$item['id']): ?>
                                            selected
                                            <?php endif; ?>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                            <?php endif; ?>

                                    >
                                        <?php echo htmlentities($item['name']); ?>
                                    </option>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </select>
                            </div>
                        </div>
                        <script>
                            $('#tag').select2({tag:true});
                        </script>

                        <div class="form-group">
                            <label for="description" class="col-sm-2 control-label">简介</label>
                            <div class="col-sm-10 col-md-4">
                                <input id="description" name="description" value="<?php echo htmlentities((isset($data['description']) && ($data['description'] !== '')?$data['description']:'')); ?>"
                                       placeholder="请输入简介" type="text" class="form-control field-text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="content" class="col-sm-2 control-label">内容</label>
                            <div class="col-sm-10">
                                <script id="content" name="content" type="text/plain"><?php echo (isset($data['content']) && ($data['content'] !== '')?$data['content']:''); ?>
                                </script>
                            </div>
                        </div>
                        <script>
                            UE.delEditor('content');
                            var UE_content = UE.getEditor('content', {
                                serverUrl: UEServer
                            });
                        </script>
                        <div class="form-group">
                            <label for="is_top" class="col-sm-2 control-label">是否置顶</label>
                            <div class="col-sm-10 col-md-4">
                                <input class="input-switch" id="is_top" value="1" <?php if((!isset($data)
                                       ||$data['is_top']==1)): ?>checked<?php endif; ?> type="checkbox"/>
                                <input class="switch field-switch" placeholder="是否置顶" name="is_top"
                                       value="<?php echo htmlentities((isset($data['is_top']) && ($data['is_top'] !== '')?$data['is_top']:'1')); ?>" hidden/>
                            </div>
                        </div>

                        <script>
                            $('#is_top').bootstrapSwitch({
                                onText: "是",
                                offText: "否",
                                onColor: "success",
                                offColor: "danger",
                                onSwitchChange: function (event, state) {
                                    $(event.target).closest('.bootstrap-switch').next().val(state ? '1' : '0').change();
                                }
                            });
                        </script>
                        <div class="form-group">
                            <label for="is_hot" class="col-sm-2 control-label">是否热门</label>
                            <div class="col-sm-10 col-md-4">
                                <input class="input-switch" id="is_hot" value="1" <?php if((!isset($data)
                                       ||$data['is_hot']==1)): ?>checked<?php endif; ?> type="checkbox"/>
                                <input class="switch field-switch" placeholder="是否热门" name="is_hot"
                                       value="<?php echo htmlentities((isset($data['is_hot']) && ($data['is_hot'] !== '')?$data['is_hot']:'1')); ?>" hidden/>
                            </div>
                        </div>

                        <script>
                            $('#is_hot').bootstrapSwitch({
                                onText: "是",
                                offText: "否",
                                onColor: "success",
                                offColor: "danger",
                                onSwitchChange: function (event, state) {
                                    $(event.target).closest('.bootstrap-switch').next().val(state ? '1' : '0').change();
                                }
                            });
                        </script>
                        <div class="form-group">
                            <label for="img" class="col-sm-2 control-label">缩略图</label>
                            <div class="col-sm-10 col-md-4">
                                <input id="img" name="img" placeholder="请上传缩略图" <?php if(isset($data['img'])): ?>data-initial-preview="<?php echo htmlentities($data['img']); ?>" <?php endif; ?> type="file"
                                class="form-control field-image" >
                            </div>
                        </div>
                        <script>
                            $('#img').fileinput({
                                language: 'zh',
                                overwriteInitial: true,
                                browseLabel: '浏览',
                                initialPreviewAsData: true,
                                dropZoneEnabled: false,
                                showUpload: false,
                                showRemove: false,
                                allowedFileTypes: ['image'],
                                maxFileSize: 10240,
                            });
                        </script>
                        <div class="form-group">
                            <label for="sort_number" class="col-sm-2 control-label">排序</label>
                            <div class="col-sm-10 col-md-4">
                                <input id="sort_number" name="sort_number" value="<?php echo htmlentities((isset($data['sort_number']) && ($data['sort_number'] !== '')?$data['sort_number']:'1000')); ?>"
                                       placeholder="请输入排序" type="text" class="form-control field-text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="view_count" class="col-sm-2 control-label">浏览数</label>
                            <div class="col-sm-10 col-md-4">
                                <div class="input-group">
                                    <input id="view_count" name="view_count" value="<?php echo htmlentities((isset($data['view_count']) && ($data['view_count'] !== '')?$data['view_count']:'0')); ?>"
                                           placeholder="请输入浏览数" type="number" class="form-control field-number">
                                </div>
                            </div>
                        </div>
                        <script>
                            $('#view_count')
                                .bootstrapNumber({
                                    upClass: 'success',
                                    downClass: 'primary',
                                    center: true
                                });
                        </script>

                    </div>
                    <!-- 表单底部 -->
                    <div class="box-footer">
                        <?php echo token(); ?>
                        <div class="col-sm-2">
                        </div>
                        <div class="col-sm-10 col-md-4">
                            <?php if(!isset($data)): ?>
                            <div class="btn-group pull-right">
                                <label class="createContinue">
                                    <input type="checkbox" value="1" id="_create" name="_create"
                                           title="继续添加数据">继续添加</label>
                            </div>
                            <?php endif; ?>
                            <div class="btn-group">
                                <button type="submit" class="btn flat btn-info dataFormSubmit">
                                    保存
                                </button>
                            </div>
                            <div class="btn-group">
                                <button type="reset" class="btn flat btn-default dataFormReset">
                                    重置
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<script>
    /** 表单验证 **/
    $('#dataForm').validate({
        rules: {
            'name': {
                required: true,
            },
            'user_id': {
                required: true,
            },
            'article_category_id': {
                required: true,
            },
            'description': {
                required: true,
            },
            'content': {
                required: true,
            },
            'is_top': {
                required: true,
            },
            'is_hot': {
                required: true,
            },
            'sort_number': {
                required: true,
            },
            'view_count': {
                required: true,
            },

        },
        messages: {
            'name': {
                required: "标题不能为空",
            },
            'user_id': {
                required: "发布人不能为空",
            },
            'article_category_id': {
                required: "所属分类不能为空",
            },
            'description': {
                required: "简介不能为空",
            },
            'content': {
                required: "内容不能为空",
            },
            'is_top': {
                required: "是否置顶不能为空",
            },
            'is_hot': {
                required: "是否热门不能为空",
            },
            'sort_number': {
                required: "排序不能为空",
            },
            'view_count': {
                required: "浏览数不能为空",
            },

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