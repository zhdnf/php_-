<?php

defined('IN_SYS') or exit('Access Denied');

function image() {
	static $image;
	if(empty($image)) {
		load()->classes('image');
		$image = new Image();
	}
	return $image;
}


?>