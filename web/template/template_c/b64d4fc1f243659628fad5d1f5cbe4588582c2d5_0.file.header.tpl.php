<?php
/* Smarty version 3.1.32, created on 2018-09-11 19:04:30
  from 'C:\phpstudy\PHPTutorial\WWW\program\web\template\tpl\common\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b97a13e3dcc79_57983890',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b64d4fc1f243659628fad5d1f5cbe4588582c2d5' => 
    array (
      0 => 'C:\\phpstudy\\PHPTutorial\\WWW\\program\\web\\template\\tpl\\common\\header.tpl',
      1 => 1536219398,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b97a13e3dcc79_57983890 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
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
    <link rel="icon" type="image/png" href="<?php echo $_smarty_tpl->tpl_vars['respath']->value;?>
assets/i/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo $_smarty_tpl->tpl_vars['respath']->value;?>
assets/i/app-icon72x72@2x.png">
    <meta name="apple-mobile-web-app-title" content="Amaze UI" />
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['respath']->value;?>
assets/js/echarts.min.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['respath']->value;?>
assets/css/amazeui.min.css" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['respath']->value;?>
assets/css/amazeui.datatables.min.css" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['respath']->value;?>
assets/css/app.css">
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['respath']->value;?>
assets/js/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['respath']->value;?>
assets/js/jquery.form.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['respath']->value;?>
assets/js/login.js"><?php echo '</script'; ?>
>
</head>

<body data-type="index">
	<div id="info" class="am-alert am-animation-slide-top" data-am-alert style="width:100%;position:absolute;top:0;display:none;z-index:9999">
		<p id="note"></p>
	</div>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['respath']->value;?>
assets/js/theme.js"><?php echo '</script'; ?>
>
    <div class="am-g tpl-g">
        <!-- 头部 -->
        <header>
            <!-- logo -->
            <div class="am-fl tpl-header-logo">
                <a href="javascript:;"><img src="<?php echo $_smarty_tpl->tpl_vars['respath']->value;?>
assets/img/logo.png" alt=""></a>
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
                            <a href="javascript:;">欢迎你, <span><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</span> </a>
                        </li>

                        <!-- 退出 -->
                        <li class="am-text-sm">
                            <a href="<?php echo url('user/login/loginout');?>
">
                                <span class="am-icon-sign-out"></span> 退出
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </header><?php }
}
