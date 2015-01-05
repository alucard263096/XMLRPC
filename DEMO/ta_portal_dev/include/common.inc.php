<?php
/*
 * Created on 2010-5-6
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
//set include path and config
define('IN_TA', TRUE);

define('ROOT', str_replace("\\", '/', substr(dirname(__FILE__), 0, -8)));	// -9 = 0-strlen('includes')-1;
require ROOT.'/config/config.inc.php';
@set_include_path(get_include_path().$CONFIG['rootpath']); 
define('PEAR_HOME',ROOT."/libs/PEAR/");


//~ set php global variable to NULL, for security
//unset( $_REQUEST, $HTTP_ENV_VARS, $HTTP_POST_VARS, $HTTP_GET_VARS, $HTTP_POST_FILES, $HTTP_COOKIE_VARS);



//~ session start
session_start();


//log start

require ROOT.'/classes/mgr/logger_mgr.cls.php';
define('LOGGER_INFO_FILE', ROOT."/".$CONFIG['logsavedir'] . "info/log_%y%m%d.txt");
define('LOGGER_ERROR_FILE', ROOT."/".$CONFIG['logsavedir'] . "error/log_%y%m%d.txt");
define('LOGGER_DEBUG_FILE', ROOT."/".$CONFIG['logsavedir'] . "debug/log_%y%m%d.txt");
define('LOGGER_IS_DEBUG', $CONFIG['solution_configuration']=="debug"?true:false);


set_error_handler('error_handler');//,$CONFIG['error_handler']
  
function error_handler($errno,$errmsg,$file,$line,$vars)
{
$errortype=array(1=>"Error",2=>"Warning",4=>"Parsing Error",8=>"Notice",
		16=>"Core Error",32=>"Core Warning",
		64=>"Compile Error",128=>"Compile Warning",
		256=>"User Error",512=>"User Warning",
		1024=>"User Notice",2048=>"Strict Notice");
		if($errno==1)
		{
			logger_mgr::logError("[".$errortype[$errno]."]".$errmsg ."in file ".$file ." line ".$line);
		}
}



//language
if(isset($_SESSION["lang"]))
{
	$lang=$_SESSION["lang"];
}
if(isset($_GET["lang"]))
{
	$lang=$_GET["lang"];
}
if(isset($_POST["lang"]))
{
	$lang=$_POST["lang"];
}
if(!($lang=="zh-tc"||$lang=="zh-sc"||$lang=="en-us"))
{
	$lang=$CONFIG["language"]["default"];
}
switch($lang)
{
	case "en-us":$lang_id=1;break;
	case "zh-tc":$lang_id=2;break;
	case "zh-sc":$lang_id=3;break;
	default: $lang_id=1;
}
$_SESSION["lang"]=$lang;
$_SESSION["lang_id"]=$lang_id;

require ROOT."/lang/".$lang."/lang.inc.php";
require ROOT.'/classes/mgr/common_function.php';

if($HTTP_SERVER_VARS["HTTP_X_FORWARDED_FOR"]) {
	$client_ip = $HTTP_SERVER_VARS["HTTP_X_FORWARDED_FOR"];
} elseif($HTTP_SERVER_VARS["HTTP_CLIENT_IP"]) {
	$client_ip = $HTTP_SERVER_VARS["HTTP_CLIENT_IP"];
} elseif ($HTTP_SERVER_VARS["REMOTE_ADDR"]) {
	$client_ip = $HTTP_SERVER_VARS["REMOTE_ADDR"];
} elseif (getenv("HTTP_X_FORWARDED_FOR")) {
	$client_ip = getenv("HTTP_X_FORWARDED_FOR");
} elseif (getenv("HTTP_CLIENT_IP")) {
	$client_ip = getenv("HTTP_CLIENT_IP");
} elseif (getenv("REMOTE_ADDR")) {
	$client_ip = getenv("REMOTE_ADDR");
} else {
	$client_ip = "Unknown";
}

if(isset($_SESSION["city_id"]))
{
	$city_id=$_SESSION["city_id"];
}
if(isset($_REQUEST["city_id"]))
{
	$city_id=$_REQUEST["city_id"];
}
if($city_id=="")
{
	$city_id=$CONFIG['default']['city_id'];
}
//echo $city_id;

$_SESSION["city_id"]=$city_id;
?>