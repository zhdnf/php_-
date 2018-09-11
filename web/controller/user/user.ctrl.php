<?php

defined('IN_SYS') or exit('Access Denied');

global $smarty;

//管理员管理

$do = ($do == '') ? 'list' : $do;

if($do == 'list'){
	
	$pindex = max(1,intval($_GPC['page']));
	$psize = 5;
	$users = pdo_getall("user", array(), array(), '', array(), array($pindex, 	$psize));
	$total = pdo_count("user", array());
	$pager = pagination($total, $pindex, $psize);
	$smarty->assign("users", $users);
	$smarty->assign("pager", $pager);
	$smarty->display("user/ulist.tpl");
}

if($do == 'add'){
	if($_W['ispost']){
		$username = (empty($_GPC['username'])) ? "" : $_GPC['username'];
		$password = (empty($_GPC['password'])) ? "" : $_GPC['password'];
		
		if($username == "" ||  $password == ""){
			exit(toast("请填写普通用户名称密码"));
		}
		
		pdo_insert("user", array(
			"username" => $username,
			"password" => $password,
			//"password" => password_hash($password, PASSWORD_DEFAULT),
			"create_time" => TIMESTAMP,
			"last_login_time" => TIMESTAMP,
			"last_login_ip" => CLIENT_IP
		));
		
		exit(toast("用户添加成功",200, url('user/user')));
	}else{
		
		$smarty->display("user/uadd.tpl");
	}
}

if($do == 'edit'){
	if($_W['ispost']){
		$username = (empty($_GPC['username'])) ? "" : $_GPC['username'];
		$password = (empty($_GPC['password'])) ? "" : $_GPC['password'];

		if($username == "" ||  $password == ""){
			exit(toast("请填写普通用户名称密码"));
		}

		pdo_update("user", array(
				"username" => $username,
				"password" => $password,
				//"password" => password_hash($password, PASSWORD_DEFAULT),
				"create_time" => TIMESTAMP,
				"last_login_time" => TIMESTAMP,
				"last_login_ip" => CLIENT_IP
		),array("username"=>$username));
		
		exit(toast("用户修改成功",200, url('user/user')));
	}
	else{
		$smarty->assign("u",$_GET['u']);
		$smarty->display("user/uadd.tpl");
	}
}

?>