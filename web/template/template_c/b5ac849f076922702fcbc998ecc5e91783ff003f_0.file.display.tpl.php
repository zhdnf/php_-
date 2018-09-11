<?php
/* Smarty version 3.1.32, created on 2018-09-07 14:22:30
  from 'C:\phpstudy\PHPTutorial\WWW\progame\web\template\tpl\user\display.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b9219266d0e76_60175642',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b5ac849f076922702fcbc998ecc5e91783ff003f' => 
    array (
      0 => 'C:\\phpstudy\\PHPTutorial\\WWW\\progame\\web\\template\\tpl\\user\\display.tpl',
      1 => 1536113848,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b9219266d0e76_60175642 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
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

<body data-type="login">
	<div id="info" class="am-alert am-animation-slide-top" data-am-alert style="width:100%;position:absolute;top:0;display:none;">
		<p id="note"></p>
	</div>
    <div class="am-g tpl-g">
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['respath']->value;?>
assets/js/theme.js"><?php echo '</script'; ?>
>
        <div class="tpl-login">
            <div class="tpl-login-content">
                <div class="tpl-login-logo">
                </div>
                <form class="am-form tpl-form-line-form submit-form" action="<?php echo url('user/login/login');?>
">
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
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['respath']->value;?>
assets/js/amazeui.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['respath']->value;?>
assets/js/app.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
