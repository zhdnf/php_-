<?php
/* Smarty version 3.1.32, created on 2018-09-11 21:31:15
  from 'C:\phpstudy\PHPTutorial\WWW\program\web\template\tpl\user\add.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b97c3a3bbc752_76516330',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a0182b807ed2be3915a369751a7e2974b4952a0c' => 
    array (
      0 => 'C:\\phpstudy\\PHPTutorial\\WWW\\program\\web\\template\\tpl\\user\\add.tpl',
      1 => 1536672663,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/header.tpl' => 1,
    'file:common/left.tpl' => 1,
    'file:common/footer.tpl' => 1,
  ),
),false)) {
function content_5b97c3a3bbc752_76516330 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:common/left.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="tpl-content-wrapper">
	<div class="row">
                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                        <div class="widget am-cf">
                            <div class="widget-head am-cf">
     
                                <div class="widget-function am-fr">
                                    <a href="javascript:;" class="am-icon-cog"></a>
                                </div>
                            </div>
                            <div class="widget-body am-fr">

                                <form class="am-form tpl-form-border-form tpl-form-border-br submit-form" action=<?php if (!$_smarty_tpl->tpl_vars['u']->value) {?>
								<?php echo url('user/manage/add');?>

								<?php }?>
								<?php echo url('user/manage/edit');?>
 method="post">
                                    <div class="am-form-group">
                                        <label class="am-u-sm-3 am-form-label">管理员名称</label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="tpl-form-input" name="username" 
											<?php if ($_smarty_tpl->tpl_vars['u']->value) {?>
												value = "<?php echo $_smarty_tpl->tpl_vars['u']->value;?>
" readonly="readonly"
											<?php }?>
											placeholder="请输入管理名称">
                                        </div>
                                    </div>
									<div class="am-form-group">
                                        <label class="am-u-sm-3 am-form-label">管理员密码</label>
                                        <div class="am-u-sm-9">
                                            <input type="password" class="tpl-form-input" name="password" placeholder="请输入管理员密码">                                          
                                        </div>
                                    </div>
									<div class="am-form-group">
                                        <label for="user-intro" class="am-u-sm-3 am-form-label">启用/禁用</label>
                                        <div class="am-u-sm-9">
                                            <div class="tpl-switch">
                                                <input type="checkbox" name="status[]" class="ios-switch bigswitch tpl-switch-btn" value="1">
                                                <div class="tpl-switch-btn-view">
                                                    <div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label class="am-u-sm-3 am-form-label">所属管理组</label>
                                        <div class="am-u-sm-9">
                                            	<select name="groupid" data-am-selected="" style="display: none;">
													<option value=-1>请选择</option>
													<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['groups']->value, 'value', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>
													<option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</option>
													<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
												</select>									
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <div class="am-u-sm-9 am-u-sm-push-3">
                                            <button type="button" class="submit-btn am-btn am-btn-primary tpl-btn-bg-color-success">提交</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                 </div>
          </div>
</div>


<?php $_smarty_tpl->_subTemplateRender("file:common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
