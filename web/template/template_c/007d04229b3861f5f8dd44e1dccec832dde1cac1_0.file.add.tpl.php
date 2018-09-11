<?php
/* Smarty version 3.1.32, created on 2018-09-11 21:53:36
  from 'C:\phpstudy\PHPTutorial\WWW\program\web\template\tpl\notice\add.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b97c8e08f9388_29667453',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '007d04229b3861f5f8dd44e1dccec832dde1cac1' => 
    array (
      0 => 'C:\\phpstudy\\PHPTutorial\\WWW\\program\\web\\template\\tpl\\notice\\add.tpl',
      1 => 1536674012,
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
function content_5b97c8e08f9388_29667453 (Smarty_Internal_Template $_smarty_tpl) {
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

                                <form class="am-form tpl-form-border-form tpl-form-border-br submit-form" action= <?php if (!$_smarty_tpl->tpl_vars['n']->value) {?>
								<?php echo url('site/notice/add');?>

								<?php }?>
								<?php echo url('site/notice/edit');?>
 method="post">
                                    <div class="am-form-group">
                                        <label class="am-u-sm-3 am-form-label">公告名称</label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="tpl-form-input" name="title" 
											<?php if ($_smarty_tpl->tpl_vars['n']->value) {?>
												value = "<?php echo $_smarty_tpl->tpl_vars['n']->value;?>
" readonly="readonly"
											<?php }?>											
											placeholder="请输入公告名称">
                                        </div>
                                    </div>
									<div class="am-form-group">
                                        <label class="am-u-sm-3 am-form-label">公告内容</label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="tpl-form-input" name="content" placeholder="请输入公告内容">                                          
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
