<?php
/* Smarty version 3.1.32, created on 2018-09-14 22:11:36
  from 'C:\phpstudy\PHPTutorial\WWW\program\app\template\tpl\news\news.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b9bc198e7ea48_95583156',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3843d6c003a1b85f3f57cda740adbff31cfadf4c' => 
    array (
      0 => 'C:\\phpstudy\\PHPTutorial\\WWW\\program\\app\\template\\tpl\\news\\news.tpl',
      1 => 1536934294,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/top.tpl' => 1,
    'file:common/bottom.tpl' => 1,
  ),
),false)) {
function content_5b9bc198e7ea48_95583156 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:common/top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

NEWS
<br><br>
<textarea class="form-control" rows="10"><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</textarea>

<br><br><br><br>
MESSAGE
<br><br>
<form>
<textarea class="form-control" rows="10"></textarea>
<input type="submit" value="submit">
</form>
<?php $_smarty_tpl->_subTemplateRender("file:common/bottom.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>





<?php }
}
