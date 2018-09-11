<?php

//后台入口文件
define("IN_SYS", true);
require "../core/core.php";
require "web.config.php";
require "web.func.php";
require "web.permission.php";

define("IN_WEB", true);
$_W['config']['web'] = $web_config;
//ip白名单管理
if(!in_array(CLIENT_IP, $_W['config']['web']['ip'])){
	exit();
}

//URL规则 路由规则 MVC架构 www.exec.com/web/index.php?m=user&c=login&a=display
$controller = $_GPC['m'];
$action = $_GPC['c'];
$do = $_GPC['a'];


$controllers = array();
$handle = opendir(SYS_PATH . '/web/controller/');
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
$handle = opendir(SYS_PATH . '/web/controller/'. $controller);
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
session_start();
$user_group = $_SESSION['admin_group'];
if(intval($user_group)>0){
	$tos = $controller . '/' . $action;
	if(!in_array($tos, $roles['common'])){
		//不在common权限数组里
		if(!in_array($tos, array_keys($roles[$user_group]))){
			exit("您没有访问的权限，请联系管理员。");
		}
	}
	//显示菜单
	$menus =  array();
	$menus_top = array(); //一级菜单
	foreach($roles['menu'] as $k => $value){
		if(is_array($value['child'])){
			foreach($value['child'] as $key => $v){
				if(in_array($key, array_keys($roles[$user_group])) || $roles['founder'] == $_SESSION['admin_id']){
					$menus[$k][$key] = $v;
					$menus_top[$k] = $value['name'];
				}
			}
		}
	} 
	$menus_top = array_unique($menus_top);
	$smarty->assign("menus_top", $menus_top, true);
	$smarty->assign("menus", $menus, true);
	$username = $_SESSION['admin_username'];
	$smarty->assign("username", $username,true); 
}


require _forward($controller, $action);

function _forward($m, $c){
	$file = SYS_PATH . '/web/controller/' . $m . '/' .  $c . '.ctrl.php';
	return $file;
}

?>