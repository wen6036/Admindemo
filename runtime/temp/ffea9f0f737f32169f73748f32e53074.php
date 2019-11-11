<?php /*a:3:{s:76:"D:\phpStudy\PHPTutorial\WWW\AdminDemo\application\admin\view\auth\login.html";i:1569461366;s:78:"D:\phpStudy\PHPTutorial\WWW\AdminDemo\application\admin\view\auth\captcha.html";i:1567736791;s:79:"D:\phpStudy\PHPTutorial\WWW\AdminDemo\application\admin\view\auth\gee_test.html";i:1567736791;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit">
    <title><?php echo htmlentities($admin['title']); ?> | <?php echo htmlentities((isset($admin['name']) && ($admin['name'] !== '')?$admin['name']:'OneWeekBackend')); ?></title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" type="text/css" href="/static/admin/plugins/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="/static/admin/plugins/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="/static/admin/css/AdminLTE.min.css" />
    <link rel="stylesheet" type="text/css" href="/static/admin/css/admin.css" />

    <!-- 如果有登录背景 -->
    <?php if($login_config['background']): ?>
    <style>
        .login-page{
            background-color: #ececec;
            background-image: url(<?php echo htmlentities($login_config['background']); ?>);
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
            background-position: 50% 50%;
        }
    </style>
    <?php endif; ?>

    <script>
        var adminDebug = <?php echo htmlentities($debug); ?>;
    </script>

    <script type="text/javascript" src="/static/admin/plugins/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="/static/admin/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/static/admin/plugins/jquery-validation/jquery.validate.min.js"></script>
    <script type="text/javascript" src="/static/admin/plugins/jquery-validation/localization/messages_zh.min.js"></script>
    <script type="text/javascript" src="/static/admin/plugins/layer/layer.js"></script>
    <script type="text/javascript" src="/static/admin/js/admin.js"></script>

    <!--[if lt IE 9]>
    <script type="text/javascript" src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script type="text/javascript" src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <a><?php echo htmlentities((isset($admin['name']) && ($admin['name'] !== '')?$admin['name']:'')); ?></a>
    </div>
    <div class="login-box-body">
        <p class="login-box-msg">登录</p>
        <form class="dataForm" id="dataForm" action="" method="post">
            <div class="form-group has-feedback">
                <input name="username" id="username" type="text" class="form-control" placeholder="用户名">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input name="password" id="password" type="password" class="form-control" placeholder="密码">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>

            <?php if($login_config['token']): ?>
            <?php echo token(); ?>
            <?php endif; if($login_config['captcha']==1): ?>
            
<div class="row" style="margin-bottom: 15px;">
    <div class="col-sm-8">
        <input type="text" id="captcha" class=" form-control" name="captcha" placeholder="验证码" maxlength="6">
    </div>

    <div class="col-sm-4" style="padding-left: 0">
        <img style="width: 100%" src="<?php echo url('auth/captcha'); ?>" alt="图形验证码" id="captchaImg" height="34" onclick="refreshCaptcha('captchaImg')">
    </div>
</div>

<script>

    function refreshCaptcha(dom) {
        let $dom = $('#'+dom);
        $dom.attr('src','<?php echo url("auth/captcha"); ?>?'+img_name_random());
    }

    //图片后缀随机数
    function img_name_random() {
        var rand_one = parseInt(100 * Math.random());
        var rand_two = parseInt(100 * Math.random());
        return String(rand_one) + String(rand_two);
    }
</script>


            <?php else: if($login_config['captcha']==2): ?>
            <script type="text/javascript" src="/static/admin/plugins/gee-test/gee-test.min.js"></script>
<div id="wait" class="text-center"  style="height: 44px;font-size: 18px;">
    正在加载验证码...
</div>
<div class="row">
    <div class="col-xs-12">
        <div class="form-group text-center">
            <div id="embed-captcha" style="width: 300px;margin: 0 auto;;"></div>
        </div>
    </div>
</div>

<script>
    var handlerEmbed = function (captchaObj) {
        $("#loginButton").click(function (e) {
            var validate = captchaObj.getValidate();
            if (!validate) {
                layer.msg('请先完成验证',{icon:2});
                e.preventDefault();
            }
        });
        // 将验证码加到id为captcha的元素里，同时会有三个input的值：geetest_challenge, geetest_validate, geetest_seccode
        captchaObj.appendTo("#embed-captcha");
        captchaObj.onReady(function () {
            //$("#loginButton").attr("disabled",false);
            $("#wait").hide();
        });

    };

    $(function () {
        $.ajax({
            // 获取id，challenge，success（是否启用failback）
            url: "<?php echo url('auth/initGeeTest'); ?>",
            type: "POST",
            dataType: "JSON",
            success: function (result) {
                let data = result.data;
                // 使用initGeetest接口
                // 参数1：配置参数
                // 参数2：回调，回调的第一个参数验证码对象，之后可以使用它做appendTo之类的事件
                initGeetest({
                    with: '300px',
                    gt: data.gt,
                    challenge: data.challenge,
                    new_captcha: data.new_captcha,
                    product: "embed", // 产品形式，包括：float，embed，popup。注意只对PC版验证码有效
                    offline: !data.success // 表示用户后台检测极验服务器是否宕机，一般不需要关注
                }, handlerEmbed);
            }
        });
    });
</script>
            <?php endif; ?>
            <?php endif; ?>


            <div class="row">
                <div class="col-xs-8">
                    <div class="checkbox">
                        <label>
                            <input id="remember" name="remember" value="1" type="checkbox"> 记住我
                        </label>
                    </div>
                </div>
                <div class="col-xs-4">
                    <?php echo token(); ?>
                    <button type="submit" id="loginButton" class="btn btn-primary btn-block btn-flat">登录</button>
                </div>
            </div>
        </form>
    </div>
</div>
<div id="browser_warning" style="display: none">
    <div class=" margin text-center">
        <p class="text-red ">请使用现代浏览器(谷歌浏览器、360极速或其他国产浏览器极速模式)操作本后台！</p>
        <a class="btn btn-success" target="_blank" href="https://www.google.cn/chrome/" data-toggle="tooltip"
           title="点击去下载谷歌浏览器">谷歌浏览器</a>
        <a class="btn btn-success" target="_blank" href="https://browser.360.cn/ee/index.html" data-toggle="tooltip"
           title="点击去下载360极速浏览器">360极速浏览器</a>
        <a class="btn btn-success" target="_blank" href="https://browser.qq.com/" title="点击去下载QQ浏览器"
           data-toggle="tooltip">QQ浏览器</a>
    </div>
</div>


<script>

    $(document).ready(function () {
        $("#dataForm").validate({
            rules: {
                username: {
                    required: true,
                    minlength: 2
                },
                password: {
                    required: true,
                    minlength: 6
                },
            },
            messages: {
                username: {
                    required: "请输入用户名",
                    minlength: "用户名长度不能小于2"
                },
                password: {
                    required: "请输入密码",
                    minlength: "密码长度不能小于6"
                },
            }
        });
        $('#username').focus();
    });


    checkBrowser();

    /*检查浏览器*/
    function checkBrowser() {
        if (isIE()) {
            console.log('古代浏览器');
            layer.open({
                type: 1,
                content: $('#browser_warning').html(),
                icon: 5,
                title: '警告',
                area: ['500px', '300px'],
                closeBtn: 0,
                moveType: 1,
                resize: false
            });
        } else {
            console.log('现代浏览器');
        }
    }

    function isIE() {
        return !!window.ActiveXObject || "ActiveXObject" in window;
    }

</script>
</body>
</html>
