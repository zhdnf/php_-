<?php

defined('IN_SYS') or exit('Access Denied');

global $smarty;

$do = ($do == '') ? 'display' : $do;

if($do == 'display') {
	
	//登录页面
	$smarty->assign("title", "管理登录");
	$smarty->display("user/display.tpl");	
}


if($do == 'login') {
	//登录逻辑 跨站攻击csrf
	$time = $_W['config']['web']['login']['time'];
	$count = $_W['config']['web']['login']['count'];
	//$allow_ips =  $_W['config']['web']['ip'];
	$time = intval($time) * 60;
	//验证
	$username = $_GPC['username'];
	$password = $_GPC['password'];
	if(empty($username) || empty($password)) {
		exit(toast("请输入用户名或者密码"));
	}
	$isvaliate = true;
	//验证通过
	if($isvaliate) {
		//过期数据清空
		pdo_query("DELETE FROM `ex_admin_failed_login` WHERE `lastupdate` < :nowtime", array(":nowtime"=>TIMESTAMP-$time));

		$failed = pdo_get("admin_failed_login", array("username"=> $username, "ip"=>CLIENT_IP));
		
		//防止密码爆破
		if(!empty($failed) && $failed['count'] >= $count) {
			//错误提示
			exit(toast("输入密码错误次数超过{$count}次，请在{$_W['config']['web']['login']['time']}分钟后再登录"));
		}
		
		$admin_user = pdo_get("admin",array("username"=>$username));
		if(!empty($admin_user)) {
			if($password != $admin_user['password']){
				//密码错误
				if(empty($failed)){
					pdo_insert("admin_failed_login", array(
						"ip" => CLIENT_IP,
						"username" => $username,
						"count" => 1,
						"lastupdate" => TIMESTAMP
					));
				}else{
					pdo_update("admin_failed_login", array(
						"count" => $failed['count']+1,
						"lastupdate" => TIMESTAMP
					), array("username"=> $username, "ip"=>CLIENT_IP));
				}
				exit(toast("用户名密码错误"));		
			}
			if($admin_user['status'] != 1){
				//被禁用
				exit(toast("用户已被禁用,请联系管理员"));
			}
			//密码正确
			session_start();
			$_SESSION['admin_id'] = $admin_user['id'];
			$_SESSION['admin_username'] = $admin_user['username'];
			$_SESSION['admin_group'] = $admin_user['groupid'];
			//用户所属权限组
			pdo_update("admin", array(
						"last_login_time" => TIMESTAMP,
						"last_login_ip" => CLIENT_IP
					), array("id" => $admin_user['id']));
			pdo_delete('admin_failed_login', array("username"=> $username, "ip"=>CLIENT_IP));
			//提示登录成功
			exit(toast("登录成功", 200, url('index/index/index')));			
		}else{
			//提示登录失败
			exit(toast("用户名密码错误"));
		}
	}
}


if($do == 'loginout') {
	//退出功能
	session_start();
	unset($_SESSION['admin_id']);
	unset($_SESSION['admin_username']);
	header("location:".url("user/login/display"));
}

?>