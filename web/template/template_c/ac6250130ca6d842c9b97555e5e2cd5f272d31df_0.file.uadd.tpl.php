<?php
/* Smarty version 3.1.32, created on 2018-09-11 21:14:39
  from 'C:\phpstudy\PHPTutorial\WWW\program\web\template\tpl\user\uadd.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b97bfbf1d3d84_45860292',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ac6250130ca6d842c9b97555e5e2cd5f272d31df' => 
    array (
      0 => 'C:\\phpstudy\\PHPTutorial\\WWW\\program\\web\\template\\tpl\\user\\uadd.tpl',
      1 => 1536671597,
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
function content_5b97bfbf1d3d84_45860292 (Smarty_Internal_Template $_smarty_tpl) {
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

                                <form class="am-form tpl-form-border-form tpl-form-border-br submit-form" action= <?php if (!$_smarty_tpl->tpl_vars['u']->value) {?>
								<?php echo url('user/user/add');?>

								<?php }?>
								<?php echo url('user/user/edit');?>

								method="post">
                                    <div class="am-form-group">
                                        <label class="am-u-sm-3 am-form-label">普通用户名称</label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="tpl-form-input" name="username" 
											<?php if ($_smarty_tpl->tpl_vars['u']->value) {?>
												value = "<?php echo $_smarty_tpl->tpl_vars['u']->value;?>
" readonly="readonly"
											<?php }?>
											placeholder="请输入普通用户名称">
                                        </div>
                                    </div>
									<div class="am-form-group">
                                        <label class="am-u-sm-3 am-form-label">普通用户密码</label>
                                        <div class="am-u-sm-9">
                                            <input type="password" class="tpl-form-input" name="password" placeholder="请输入普通用户密码">                                          
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
