<?php

//前台入口文件
define("IN_SYS", true);
require "../core/core.php";
require "app.config.php";
require "app.func.php";

define("IN_APP", true);
$_W['config']['app'] = $app_config;

//ip白名单管理
/*if(!in_array(CLIENT_IP, $_W['config']['app']['ip'])){
	exit();
}*/

//URL规则 路由规则 MVC架构 www.exec.com/web/index.php?m=user&c=login&a=display
$controller = $_GPC['m'];
$action = $_GPC['c'];
$do = $_GPC['a'];

$controllers = array();
$handle = opendir(SYS_PATH . '/app/controller/');
if(!empty($handle)){
	while($dir = readdir($handle)){
		if($dir !='.' && $dir !='..'){
			$controllers[] = $dir;
		}
	}	
}

if(!in_array($controller, $controllers)){
	$controller = "index";
}

$actions = array();
$handle = opendir(SYS_PATH . '/app/controller/'. $controller);
if(!empty($handle)){
	while($dir = readdir($handle)){
		if($dir !='.' && $dir !='..' && strexists($dir, '.ctrl.php')){
			$dir = str_replace('.ctrl.php', '', $dir);
			$actions[] =  $dir;
		}
	}	
}

if(!in_array($action, $actions)){
	$controller = "index";
	$action = "index";
}

define("RES_PATH", $_W['siteroot']);
$smarty = template();

$smarty->assign("respath", RES_PATH);

require _forward($controller, $action);

function _forward($m, $c){
	$file = SYS_PATH . '/app/controller/' . $m . '/' .  $c . '.ctrl.php';
	return $file;
}

?>