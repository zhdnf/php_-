<?php
define("IN_SYS",true);
require "../../core/core.php";

	session_start();
	$str = image()->rand_number();
	$_SESSION['img_number'] = $str;
	ob_clean();
	header("Content-type:image/png");
	image()->create_image();
	
?>