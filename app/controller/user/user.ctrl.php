<?php

defined('IN_SYS') or exit('Access Denied');

global $smarty;

$do = ($do == '') ? 'display' : $do;

if($do == 'display') {
	//首页
	$smarty->display("user/login.tpl");	
}


if($do == 'login') {
	//登录逻辑 跨站攻击csrf
	$time = $_W['config']['app']['login']['time'];
	$count = $_W['config']['app']['login']['count'];

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
		pdo_query("DELETE FROM `ex_user_failed_login` WHERE `lastupdate` < :nowtime", array(":nowtime"=>TIMESTAMP-$time));

		$failed = pdo_get("user_failed_login", array("username"=> $username, "ip"=>CLIENT_IP));
		
		//防止密码爆破
		if(!empty($failed) && $failed['count'] >= $count) {
			//错误提示
			exit(toast("输入密码错误次数超过{$count}次，请在{$_W['config']['app']['login']['time']}分钟后再登录"));
		}
		
		$admin_user = pdo_get("user",array("username"=>$username));
		if(!empty($admin_user)) {
			if($password != $admin_user['password']){
				//密码错误
				if(empty($failed)){
					pdo_insert("user_failed_login", array(
						"ip" => CLIENT_IP,
						"username" => $username,
						"count" => 1,
						"lastupdate" => TIMESTAMP
					));
				}else{
					pdo_update("user_failed_login", array(
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
			pdo_update("user", array(
						"last_login_time" => TIMESTAMP,
						"last_login_ip" => CLIENT_IP
					), array("id" => $admin_user['id']));
			pdo_delete('user_failed_login', array("username"=> $username, "ip"=>CLIENT_IP));
			//提示登录成功
			exit(toast("登录成功", 200, url('index/index')));			
		}else{
			//提示登录失败
			exit(toast("用户名密码错误"));
		}
	}
}

if($do == 'register') {
	
	//注册
	$smarty->display("user/register.tpl");
}


if($do == 'loginout') {
	//退出功能
	session_start();
	unset($_SESSION['user_id']);
	unset($_SESSION['user_username']);
	header("location:".url("index/index"));
}
