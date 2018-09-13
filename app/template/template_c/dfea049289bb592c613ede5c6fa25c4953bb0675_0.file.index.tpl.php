<?php
/* Smarty version 3.1.32, created on 2018-09-13 15:31:18
  from 'C:\phpstudy\PHPTutorial\WWW\program\app\template\tpl\index\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b9a12461e76f9_15708720',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dfea049289bb592c613ede5c6fa25c4953bb0675' => 
    array (
      0 => 'C:\\phpstudy\\PHPTutorial\\WWW\\program\\app\\template\\tpl\\index\\index.tpl',
      1 => 1536823861,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/top.tpl' => 1,
    'file:common/nav.tpl' => 1,
    'file:common/bottom.tpl' => 1,
  ),
),false)) {
function content_5b9a12461e76f9_15708720 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:common/top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:common/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<ul class="list-group">
	<li class="list-group-item"><a href="http://www.test.com/app/index.php?m=news&c=news&title=aa">Cras justo odio</a></li>
	<li class="list-group-item">Dapibus ac facilisis in</li>
	<li class="list-group-item">Morbi leo risus</li>
	<li class="list-group-item">Porta ac consectetur ac</li>
	<li class="list-group-item">Vestibulum at eros</li>
</ul>
	
<?php $_smarty_tpl->_subTemplateRender("file:common/bottom.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>










<?php }
}
