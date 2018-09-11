<?php

define("IN_SYS", true);
require "core/core.php";

$admin_pwd = "dasiwoyebushuo";

pdo_insert('admin', array(
	"username"=>"admin", 
	"password"=>password_hash($admin_pwd, PASSWORD_DEFAULT), 
	"status"=>1, 
	"create_time"=>time(),
	"groupid" => 1,
	"last_login_time"=>time(),
	"last_login_ip" => getip()
));




?>