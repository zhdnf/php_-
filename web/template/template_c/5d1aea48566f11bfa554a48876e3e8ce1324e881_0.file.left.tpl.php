<?php
/* Smarty version 3.1.32, created on 2018-09-11 19:04:30
  from 'C:\phpstudy\PHPTutorial\WWW\program\web\template\tpl\common\left.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b97a13e4a1f89_42495023',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5d1aea48566f11bfa554a48876e3e8ce1324e881' => 
    array (
      0 => 'C:\\phpstudy\\PHPTutorial\\WWW\\program\\web\\template\\tpl\\common\\left.tpl',
      1 => 1536220043,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b97a13e4a1f89_42495023 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="left-sidebar">
            <!-- 用户信息 -->
            <div class="tpl-sidebar-user-panel">
                <div class="tpl-user-panel-slide-toggleable">
                    <div class="tpl-user-panel-profile-picture">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['respath']->value;?>
assets/img/user04.png" alt="">
                    </div>
                    <span class="user-panel-logged-in-text">
              <i class="am-icon-circle-o am-text-success tpl-user-panel-status-icon"></i>
              <?php echo $_smarty_tpl->tpl_vars['username']->value;?>

			  </span>
                  
                </div>
            </div>

            <!-- 菜单 -->
            <ul class="sidebar-nav">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menus_top']->value, 'value', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>
                <li class="sidebar-nav-link">
                    <a href="javascript:;" class="sidebar-nav-sub-title">
                        <i class="am-icon-table sidebar-nav-link-logo"></i> <?php echo $_smarty_tpl->tpl_vars['value']->value;?>

                        <span class="am-icon-chevron-down am-fr am-margin-right-sm sidebar-nav-sub-ico"></span>
                    </a>
					<ul class="sidebar-nav sidebar-nav-sub">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menus']->value[$_smarty_tpl->tpl_vars['key']->value], 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
                        <li class="sidebar-nav-link">
                            <a href="<?php echo url($_smarty_tpl->tpl_vars['k']->value);?>
">
                                <span class="am-icon-angle-right sidebar-nav-link-logo"></span> <?php echo $_smarty_tpl->tpl_vars['v']->value;?>

                            </a>
                        </li>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</ul>
                </li>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
        </div><?php }
}
