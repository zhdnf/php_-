<?php

defined('IN_SYS') or exit('Access Denied');

function template() {
	static $smarty;
	if(!$smarty) {
		load()->classes("Smarty", "smarty");
		$smarty = new Smarty();
	}
	if(defined("IN_WEB")){	
		//模板文件的路径
		$smarty->template_dir = SYS_PATH .'/web/template/tpl';
		//模板文件编译后得到的文件的路径
		$smarty->compile_dir = SYS_PATH .'/web/template/template_c';
		//缓冲文件的路径
		$smarty->cache_dir = SYS_PATH .'/web/template/cache';
		//开启缓冲，缓冲默认是关闭的
		$smarty->caching = false;
		//缓冲的保留时间
		//$smarty->cache_lifetime = 120;
		$smarty->setCompileCheck(true);
	}
	elseif(defined("IN_APP")){
		//模板文件的路径
		$smarty->template_dir = SYS_PATH .'/app/template/tpl';
		//模板文件编译后得到的文件的路径
		$smarty->compile_dir = SYS_PATH .'/app/template/template_c';
		//缓冲文件的路径
		$smarty->cache_dir = SYS_PATH .'/app/template/cache';
		//开启缓冲，缓冲默认是关闭的
		$smarty->caching = false;
		//缓冲的保留时间
		//$smarty->cache_lifetime = 120;
		$smarty->setCompileCheck(true);
	}

	return $smarty;
}




