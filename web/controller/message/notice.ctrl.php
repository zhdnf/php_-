<?php

defined('IN_SYS') or exit('Access Denied');

//公告管理
global $smarty;


$do = ($do == '') ? 'list' : $do;

if($do == 'list'){
	$pindex = max(1,intval($_GPC['page']));
	$psize = 5;
	$notice = pdo_getall("notice", array(), array(), '', array(), array($pindex, $psize));
	$total = pdo_count("notice", array());
	$pager = pagination($total, $pindex, $psize);
	$smarty->assign("notice", $notice);
	$smarty->assign("pager", $pager);
	$smarty->display("notice/list.tpl");
}


if($do == 'add'){
	if($_W['ispost']){
		$title = (empty($_GPC['title'])) ? "" : $_GPC['title'];
		$content = (empty($_GPC['content'])) ? "" : $_GPC['content'];
		
		if($title == "" || $content == ""){
			exit(toast("请填写公告名称和公告内容"));
		}
		
		pdo_insert("notice", array(
			"title" => $title,
			"content" => $content,
			"create_time" => TIMESTAMP
		));
		
		exit(toast("公告添加成功",200, url('site/notice')));
	}else{
		
		$smarty->display("notice/add.tpl");
	}
}

if($do == 'edit'){
	if($_W['ispost']){
		$title = (empty($_GPC['title'])) ? "" : $_GPC['title'];
		$content = (empty($_GPC['content'])) ? "" : $_GPC['content'];
		
		if($title == "" || $content == ""){
			exit(toast("请填写公告名称和公告内容"));
		}

		pdo_update("notice", array(
				"title" => $title,
				"content" => $content,
				"create_time" => TIMESTAMP
		),array("title"=>$title));
		
		exit(toast("公告修改成功",200, url('site/notice')));
	}
	else{
		$smarty->assign("n",$_GET['n']);
		$smarty->display("site/add.tpl");
	}
}

?>