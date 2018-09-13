<?php
/* Smarty version 3.1.32, created on 2018-09-13 11:09:57
  from 'C:\phpstudy\PHPTutorial\WWW\program\app\template\tpl\user\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b99d505cc1124_60268751',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2bf0d911bcce64024d5edac59e72331eea1cb847' => 
    array (
      0 => 'C:\\phpstudy\\PHPTutorial\\WWW\\program\\app\\template\\tpl\\user\\login.tpl',
      1 => 1536808194,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/top.tpl' => 1,
    'file:common/bottom.tpl' => 1,
  ),
),false)) {
function content_5b99d505cc1124_60268751 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:common/top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 
 <br><br><br><br><br><br><br>
 <div class="container" style="width:350px">
      <form class="form-signin">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="" type="email">
        <label for="inputPassword" class="sr-only">Password</label>
        <input id="inputPassword" class="form-control" placeholder="Password" required="" type="password">
        <div class="checkbox">
          <label>
            <input value="remember-me" type="checkbox"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>
</div>
	  
<?php $_smarty_tpl->_subTemplateRender("file:common/bottom.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
