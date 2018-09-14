<?php
defined('IN_SYS') or exit('Access Denied');

header("Content-Type:text/html;charset=utf-8");

class Image{
	
	private $strings;
	private $str;
	private $len;
	
	function __construct($string="1234567890"){
		$this->strings = $string;
		$this->len = strlen($string);
	}
	
	function rand_number(){
		for($i=0;$i<6;$i++){
			$pos = rand(0,$this->len);
			$this->str .= $this->strings[$pos];
		}
		return $this->str;
	}
	
	function create_image($x="90", $y="30"){
		$img_handle = Imagecreate($x, $y);
		$back_color = ImageColorAllocate($img_handle, rand(0,255), rand(0,255), rand(0,255));
		$txt_color = ImageColorAllocate($img_handle, 0, 0, 0);
		
		/*
		for($i=0; $i<5; $i++){
			$line = ImageColorAllocate($img_handle, rand(0,255), rand(0,255), rand(0,255));
			Imageline($Imageline($img_handle,rand{0,15),rand(0,15),rand(100));
		} 
		*/
	
		for($i=0; $i<200; $i++){
			$randcolor = ImageColorAllocate($img_handle,rand(0,255),rand(0,255),rand(0,255));
			Imagesetpixel($img_handle, rand()%100,rand()%50,$randcolor);
		} 
		
		
		Imagefill($img_handle, 0, 0, $back_color);
		ImageString($img_handle, 28, 10, 0, $this->str,$txt_color);
		
		Imagepng($img_handle);
		}
	}
	

?>