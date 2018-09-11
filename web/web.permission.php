<?php

defined('IN_SYS') or exit('Access Denied');


$roles = array();
$roles['founder'] = 1; //创始者 adminid
$roles['groups'] = array(
	"1"=>"超级管理员",
	"2"=>"管理员",
	"3"=>"普通管理员",

);

$roles["common"] = array("index/index", "user/login");
$roles["1"] = array("site/notice"=>"公告设置", "site/content"=>"内容管理", "user/manage"=>"管理员管理","user/user"=>"普通用户管理");
$roles["2"] = array("site/notice"=>"公告设置", "site/content"=>"内容管理", "user/user"=>"普通用户管理");
$roles["3"] = array("site/notice"=>"公告设置");


$roles['menu'] = array(
		"1"=>array(
			"name"=>"系统设置",
			"child"=>array(
				"user/manage"=>"管理员管理"
			)
		),
					
		"2"=>array(
			"name"=>"站点设置", 
			"child"=>array(
				"site/notice"=>"公告设置", 
				"site/content"=>"内容管理",
				"user/user"=>"普通用户管理"
			)
		)
);

?>