<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{$title}</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="icon" type="image/png" href="{$respath}assets/i/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="{$respath}assets/i/app-icon72x72@2x.png">
    <meta name="apple-mobile-web-app-title" content="Amaze UI" />
    <link rel="stylesheet" href="{$respath}assets/css/amazeui.min.css" />
    <link rel="stylesheet" href="{$respath}assets/css/amazeui.datatables.min.css" />
    <link rel="stylesheet" href="{$respath}assets/css/app.css">
    <script src="{$respath}assets/js/jquery.min.js"></script>
	<script src="{$respath}assets/js/jquery.form.js"></script>
	<script src="{$respath}assets/js/login.js"></script>
</head>

<body data-type="login">
	<div id="info" class="am-alert am-animation-slide-top" data-am-alert style="width:100%;position:absolute;top:0;display:none;">
		<p id="note"></p>
	</div>
    <div class="am-g tpl-g">
	<script src="{$respath}assets/js/theme.js"></script>
        <div class="tpl-login">
            <div class="tpl-login-content">
                <div class="tpl-login-logo">
                </div>
                <form class="am-form tpl-form-line-form submit-form" action="{url('user/login/login')}">
                    <div class="am-form-group">
                        <input type="text" name="username" class="tpl-form-input" placeholder="请输入账号">

                    </div>

                    <div class="am-form-group">
                        <input type="password" name="password" class="tpl-form-input" placeholder="请输入密码">
                    </div>
                    <div class="am-form-group">
                        <button type="button" class="submit-btn am-btn am-btn-primary  am-btn-block tpl-btn-bg-color-success  tpl-login-btn">提交</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="{$respath}assets/js/amazeui.min.js"></script>
	<script src="{$respath}assets/js/app.js"></script>
</body>
</html>