<?php
/* Smarty version 3.1.32, created on 2018-09-07 08:58:19
  from 'D:\phpStudy\WWW\progame\web\template\tpl\user\list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b91cd2b216861_20119072',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0f33e7fc61fd51b84f5f0a0f51f9a3508f4c48a4' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\progame\\web\\template\\tpl\\user\\list.tpl',
      1 => 1536281891,
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
function content_5b91cd2b216861_20119072 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:common/left.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="tpl-content-wrapper">
	<div class="row-content am-cf">
                <div class="row">
                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                        <div class="widget am-cf">
                            <div class="widget-head am-cf">
                                <div class="widget-title  am-cf">管理员列表</div>
                            </div>
                            <div class="widget-body  am-fr">
                                <div class="am-u-sm-12 am-u-md-6 am-u-lg-6">
                                    <div class="am-form-group">
                                        <div class="am-btn-toolbar">
                                            <div class="am-btn-group am-btn-group-xs">
                                                <a href="<?php echo url('user/manage/add');?>
" class="am-btn am-btn-default am-btn-success"><span class="am-icon-plus"></span> 新增</a>                                      
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="am-u-sm-12">
                                    <table width="100%" class="am-table am-table-compact am-table-striped tpl-table-black ">
                                        <thead>
                                            <tr>
                                                <th>管理员名称</th>
												<th>所属管理组</th>
                                                <th>状态</th>
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
												<td><?php echo $_smarty_tpl->tpl_vars['roles']->value['groups'][$_smarty_tpl->tpl_vars['value']->value['groupid']];?>
</td>
												<?php if ($_smarty_tpl->tpl_vars['value']->value['status'] == 1) {?>
                                                <td>启用</td>
												<?php } else { ?>
												<td>禁用</td>
												<?php }?>
                                                <td><?php echo date('Y-m-d H:i:s',$_smarty_tpl->tpl_vars['value']->value['create_time']);?>
</td>
												<td><?php echo date('Y-m-d H:i:s',$_smarty_tpl->tpl_vars['value']->value['last_login_time']);?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['value']->value['last_login_ip'];?>
</td>
												<td>
                                                    <div class="tpl-table-black-operation">
                                                        <a href="javascript:;">
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
