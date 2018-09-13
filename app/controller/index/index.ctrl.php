<?php

defined('IN_SYS') or exit('Access Denied');

global $smarty;

$do = ($do == '') ? 'index' : $do;

if($do = 'index') {
	/*if(!checklogin()){
		header("location:".url("user/login/display"));
	}*/	
	$smarty->display("index/index.tpl");
}



?>