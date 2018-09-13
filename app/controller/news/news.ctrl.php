<?php


defined('IN_SYS') or exit('Access Denied');

global $smarty;

$do = ($do == '') ? 'list' : $do;

//title = $_GET[title];
//查询title内容
if($do == 'list'){
	$content = "hahah";	
	$smarty->assign("content",$content);
	$smarty->display('news/news.tpl');
}




?>