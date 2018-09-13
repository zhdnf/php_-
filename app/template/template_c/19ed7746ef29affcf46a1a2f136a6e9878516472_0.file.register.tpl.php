<?php
/* Smarty version 3.1.32, created on 2018-09-13 15:07:09
  from 'C:\phpstudy\PHPTutorial\WWW\program\app\template\tpl\user\register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b9a0c9d4efd48_83444345',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '19ed7746ef29affcf46a1a2f136a6e9878516472' => 
    array (
      0 => 'C:\\phpstudy\\PHPTutorial\\WWW\\program\\app\\template\\tpl\\user\\register.tpl',
      1 => 1536822319,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/top.tpl' => 1,
    'file:common/bottom.tpl' => 1,
  ),
),false)) {
function content_5b9a0c9d4efd48_83444345 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:common/top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<form class="form-horizontal">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label>
          <input type="checkbox"> Remember me
        </label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Sign in</button>
    </div>
  </div>
</form>
<?php $_smarty_tpl->_subTemplateRender("file:common/bottom.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
