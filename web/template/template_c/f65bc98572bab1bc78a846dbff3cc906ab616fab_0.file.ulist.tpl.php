<?php
/* Smarty version 3.1.32, created on 2018-09-07 19:25:11
  from 'C:\phpstudy\PHPTutorial\WWW\progame\web\template\tpl\user\ulist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b926017a381c8_23043514',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f65bc98572bab1bc78a846dbff3cc906ab616fab' => 
    array (
      0 => 'C:\\phpstudy\\PHPTutorial\\WWW\\progame\\web\\template\\tpl\\user\\ulist.tpl',
      1 => 1536319508,
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
function content_5b926017a381c8_23043514 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:common/left.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="tpl-content-wrapper">
	<div class="row-content am-cf">
                <div class="row">
                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                        <div class="widget am-cf">
                            <div class="widget-head am-cf">
                                <div class="widget-title  am-cf">普通用户列表</div>
                            </div>
                            <div class="widget-body  am-fr">
                                <div class="am-u-sm-12 am-u-md-6 am-u-lg-6">
                                    <div class="am-form-group">
                                        <div class="am-btn-toolbar">
                                            <div class="am-btn-group am-btn-group-xs">
                                                <a href="<?php echo url('user/user/add');?>
" class="am-btn am-btn-default am-btn-success"><span class="am-icon-plus"></span> 新增</a>                                      
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="am-u-sm-12">
                                    <table width="100%" class="am-table am-table-compact am-table-striped tpl-table-black ">
                                        <thead>
                                            <tr>
                                                <th>普通用户名称</th>											
												<th>创建时间</th>
                                                <th>最后登录时间</th>
												<th>最后登录ip</th>
                                                <th>操作</th>
                                            </tr>
                                        </thead>
                                        <tbody>
											<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'value', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>
                                            <tr class="gradeX">
                                                <td><?php echo $_smarty_tpl->tpl_vars['value']->value['username'];?>
</td>
                                                <td><?php echo date('Y-m-d H:i:s',$_smarty_tpl->tpl_vars['value']->value['create_time']);?>
</td>
												<td><?php echo date('Y-m-d H:i:s',$_smarty_tpl->tpl_vars['value']->value['last_login_time']);?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['value']->value['last_login_ip'];?>
</td>
												<td>
                                                    <div class="tpl-table-black-operation">
                                                        <a href="http://www.test.com/web/index.php?m=user&c=user&a=edit&u=<?php echo $_smarty_tpl->tpl_vars['value']->value['username'];?>
">
                                                            <i class="am-icon-pencil"></i> 编辑
                                                        </a>
                                                        <a href="javascript:;" class="tpl-table-black-operation-del">
                                                            <i class="am-icon-trash"></i> 删除
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
											<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </tbody>
                                    </table>
                                </div>
                                <?php echo $_smarty_tpl->tpl_vars['pager']->value;?>

                            </div>
                        </div>
                    </div>
                </div>
           </div>
</div>


<?php $_smarty_tpl->_subTemplateRender("file:common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
