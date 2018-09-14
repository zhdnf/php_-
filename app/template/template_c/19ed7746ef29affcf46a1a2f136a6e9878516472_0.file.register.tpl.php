<?php
/* Smarty version 3.1.32, created on 2018-09-14 20:25:35
  from 'C:\phpstudy\PHPTutorial\WWW\program\app\template\tpl\user\register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b9ba8bf2a13e3_73214735',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '19ed7746ef29affcf46a1a2f136a6e9878516472' => 
    array (
      0 => 'C:\\phpstudy\\PHPTutorial\\WWW\\program\\app\\template\\tpl\\user\\register.tpl',
      1 => 1536927933,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/top.tpl' => 1,
    'file:common/bottom.tpl' => 1,
  ),
),false)) {
function content_5b9ba8bf2a13e3_73214735 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:common/top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</br></br></br></br>
<div class="container" style="width:480px">
	<form class="form-horizontal">
	  <div class="form-group">
		<label for="username" class="col-sm-2 control-label">Username</label>
		<div class="col-sm-10">
		  <input type="email" class="form-control" id="inputEmail3" placeholder="Username">
		</div>
	  </div>
	  <div class="form-group">
		<label for="password" class="col-sm-2 control-label">Password</label>
		<div class="col-sm-10">
		  <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
		</div>
	  </div>
	  <br>
	   <div class="form-group">
		<div class="col-sm-offset-3 col-sm-6">
		  <input type="submit" class="form-control" value="submit">
		</div>
	  </div>
	</form>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:common/bottom.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
