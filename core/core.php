<?php 
defined('IN_SYS') or exit('Access Denied');
define('STARTTIME', microtime());
define("CORE_PATH", str_replace("\\", '/', dirname(__FILE__)));
define('SYS_PATH', str_replace("\\", '/', dirname(dirname(__FILE__))));
define('MAGIC_QUOTES_GPC', (function_exists('get_magic_quotes_gpc') && get_magic_quotes_gpc()) || @ini_get('magic_quotes_sybase'));
define('TIMESTAMP', time());

$_W = $_GPC = array();

require CORE_PATH . '/config.php';
require CORE_PATH . '/library/loader.class.php';

load()->func('global');
load()->func('pdo');
load()->func('template');
load()->func('image');


define('CLIENT_IP', getip());
$_W['config'] = $config;
$_W['timestamp'] = TIMESTAMP;
$_W['charset'] = $_W['config']['setting']['charset'];
$_W['clientip'] = CLIENT_IP;

if($_W['config']['setting']['debug']){
	error_reporting(1);
}else{
	error_reporting(0);
}


if(function_exists('date_default_timezone_set')) {
	date_default_timezone_set($_W['config']['setting']['timezone']);
}

$_W['ishttps'] = $_SERVER['SERVER_PORT'] == 443 ||
	(isset($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS']) != 'off') ||
	strtolower($_SERVER['HTTP_X_FORWARDED_PROTO']) == 'https' ||
	strtolower($_SERVER['HTTP_X_CLIENT_SCHEME']) == 'https' ? true : false;
$_W['isajax'] = isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';
$_W['ispost'] = $_SERVER['REQUEST_METHOD'] == 'POST';

$_W['sitescheme'] = $_W['ishttps'] ? 'https://' : 'http://';
$_W['script_name'] = htmlspecialchars(scriptname());
$sitepath = substr($_SERVER['PHP_SELF'], 0, strrpos($_SERVER['PHP_SELF'], '/'));
$_W['siteroot'] = htmlspecialchars($_W['sitescheme'] . $_SERVER['HTTP_HOST'] . $sitepath);

if(substr($_W['siteroot'], -1) != '/') {
	$_W['siteroot'] .= '/';
}

$urls = parse_url($_W['siteroot']);
$_W['siteroot'] = $urls['scheme'].'://'.$urls['host'].((!empty($urls['port']) && $urls['port']!='80') ? ':'.$urls['port'] : '').$urls['path'];

if(MAGIC_QUOTES_GPC) {
	$_GET = istripslashes($_GET);
	$_POST = istripslashes($_POST);
	$_COOKIE = istripslashes($_COOKIE);
}
foreach($_GET as $key => $value) {
	if (is_string($value) && !is_numeric($value)) {
		$value = safe_gpc_string($value);
	}
	$_GET[$key] = $_GPC[$key] = $value;
}

foreach($_POST as $key=>$value) {
	if(is_string($value) && !is_numeric($value)) {
		$value = safe_gpc_string($value);
	}
	$_POST[$key] = $value;
}

$cplen = strlen($_W['config']['cookie']['pre']);
foreach($_COOKIE as $key => $value) {
	if(substr($key, 0, $cplen) == $_W['config']['cookie']['pre']) {
		$_GPC[substr($key, $cplen)] = $value;
	}
}
unset($cplen, $key, $value);

$_GPC = array_merge($_GPC, $_POST);
$_GPC = ihtmlspecialchars($_GPC);

$_W['siteurl'] = $urls['scheme'].'://'.$urls['host'].((!empty($urls['port']) && $urls['port']!='80') ? ':'.$urls['port'] : '') . $_W['script_name'] . '?' . http_build_query($_GET, '', '&');


header('Content-Type: text/html; charset=utf-8');

?>