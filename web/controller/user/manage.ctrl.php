<?php

defined('IN_SYS') or exit('Access Denied');

global $smarty;

//管理员管理

$do = ($do == '') ? 'list' : $do;

if($do == 'list'){
	
	$pindex = max(1,intval($_GPC['page']));
	$psize = 5;
	$users = pdo_getall("admin", array(), array(), '', array(), array($pindex, 	$psize));
	$total = pdo_count("admin", array());
	$pager = pagination($total, $pindex, $psize);
	$smarty->assign("roles", $roles);
	$smarty->assign("users", $users);
	$smarty->assign("pager", $pager);
	$smarty->display("user/list.tpl");
}

if($do == 'add'){
	if($_W['ispost']){
		$username = (empty($_GPC['username'])) ? "" : $_GPC['username'];
		$password = (empty($_GPC['password'])) ? "" : $_GPC['password'];
		$status = (intval($_GPC['status'])>0) ? 1 : 0;
		$groupid = (intval($_GPC['groupid'])>0) ? intval($_GPC['groupid']) : -1;
		
		if($username == "" || $groupid == -1 || $password == ""){
			exit(toast("请填写管理员名称密码或者请选择所属管理组"));
		}
		
		pdo_insert("admin", array(
			"username" => $username,
			//"password" => password_hash($password, PASSWORD_DEFAULT),
			"password" => $password,
			"status" => $status,
			"groupid" => $groupid,
			"create_time" => TIMESTAMP,
			"last_login_time" => TIMESTAMP,
			"last_login_ip" => CLIENT_IP
		));
		
		exit(toast("管理员添加成功",200, url('user/manage')));
	}else{
		
		$smarty->assign("groups", $roles['groups'], true);
		$smarty->display("user/add.tpl");
	}
}

if($do == 'edit'){
	if($_W['ispost']){
		$username = (empty($_GPC['username'])) ? "" : $_GPC['username'];
		$password = (empty($_GPC['password'])) ? "" : $_GPC['password'];
		$status = (intval($_GPC['status'])>0) ? 1 : 0;
		$groupid = (intval($_GPC['groupid'])>0) ? intval($_GPC['groupid']) : -1;
		
		if($username == "" || $groupid == -1 || $password == ""){
			exit(toast("请填写管理员名称密码或者请选择所属管理组"));
		}

		pdo_update("user", array(
				"username" => $username,
				//"password" => password_hash($password, PASSWORD_DEFAULT),
				"password" => $password,
				"status" => $status,
				"groupid" => $groupid,
				"create_time" => TIMESTAMP,
				"last_login_time" => TIMESTAMP,
				"last_login_ip" => CLIENT_IP
		),array("username"=>$username));
		
		exit(toast("用户修改成功",200, url('user/manage')));
	}
	else{
		$smarty->assign("groups", $roles['groups'], true);
		$smarty->assign("u",$_GET['u']);
		$smarty->display("user/add.tpl");
	}
}

?>