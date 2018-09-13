<?php
/* Smarty version 3.1.32, created on 2018-09-13 15:07:39
  from 'C:\phpstudy\PHPTutorial\WWW\program\app\template\tpl\common\nav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b9a0cbbcfc855_99597367',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '27e77aba7c62aad1513527a8bbec0dd0937d798c' => 
    array (
      0 => 'C:\\phpstudy\\PHPTutorial\\WWW\\program\\app\\template\\tpl\\common\\nav.tpl',
      1 => 1536822450,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b9a0cbbcfc855_99597367 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="navbar navbar-default">
		  <div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
			  <a class="navbar-brand" href="#">Brand</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">			  
			  <form class="navbar-form navbar-left">
				<div class="form-group">
				  <input type="text" class="form-control" placeholder="Search">
				</div>
				<button type="submit" class="btn btn-default">Submit</button>
			  </form>
			  <ul class="nav navbar-nav navbar-right">
				<li><a href="<?php echo url('user/user/display');?>
">login</a></li>
				<li><a href="<?php echo url('user/user/register');?>
">sigin in</li>
			  </ul>
			</div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav><?php }
}
