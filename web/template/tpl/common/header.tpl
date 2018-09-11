<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="icon" type="image/png" href="{$respath}assets/i/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="{$respath}assets/i/app-icon72x72@2x.png">
    <meta name="apple-mobile-web-app-title" content="Amaze UI" />
    <script src="{$respath}assets/js/echarts.min.js"></script>
    <link rel="stylesheet" href="{$respath}assets/css/amazeui.min.css" />
    <link rel="stylesheet" href="{$respath}assets/css/amazeui.datatables.min.css" />
    <link rel="stylesheet" href="{$respath}assets/css/app.css">
    <script src="{$respath}assets/js/jquery.min.js"></script>
    <script src="{$respath}assets/js/jquery.form.js"></script>
	<script src="{$respath}assets/js/login.js"></script>
</head>

<body data-type="index">
	<div id="info" class="am-alert am-animation-slide-top" data-am-alert style="width:100%;position:absolute;top:0;display:none;z-index:9999">
		<p id="note"></p>
	</div>
    <script src="{$respath}assets/js/theme.js"></script>
    <div class="am-g tpl-g">
        <!-- 头部 -->
        <header>
            <!-- logo -->
            <div class="am-fl tpl-header-logo">
                <a href="javascript:;"><img src="{$respath}assets/img/logo.png" alt=""></a>
            </div>
            <!-- 右侧内容 -->
            <div class="tpl-header-fluid">
                <!-- 侧边切换 -->
                <div class="am-fl tpl-header-switch-button am-icon-list">
                    <span>

                </span>
                </div>
                <div class="am-fr tpl-header-navbar">
                    <ul>
                        <!-- 欢迎语 -->
                        <li class="am-text-sm tpl-header-navbar-welcome">
                            <a href="javascript:;">欢迎你, <span>{$username}</span> </a>
                        </li>

                        <!-- 退出 -->
                        <li class="am-text-sm">
                            <a href="{url('user/login/loginout')}">
                                <span class="am-icon-sign-out"></span> 退出
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </header>