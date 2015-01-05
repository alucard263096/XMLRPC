<?php
/*
 * Created on 2010-5-6
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
//set include path and config
define('IN_TA', TRUE);


 if ($_SERVER['REQUEST_METHOD'] != 'POST' && isset($_GET['showSource']))
 {
	highlight_file(__FILE__);
	die();
 }

define('ROOT', str_replace("\\", '/', substr(dirname(__FILE__), 0, -8)));	// -9 = 0-strlen('includes')-1;
require ROOT.'/config/config.inc.php';
@set_include_path(get_include_path().$CONFIG['rootpath']); 
define('PEAR_HOME',ROOT."/libs/PEAR/");


//~ set php global variable to NULL, for security
unset(  $HTTP_ENV_VARS, $HTTP_POST_VARS, $HTTP_GET_VARS, $HTTP_POST_FILES, $HTTP_COOKIE_VARS);

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

require ROOT.'/classes/mgr/common_function.php';

require ROOT.'/classes/mgr/'.$CONFIG['database']['provider'].'.cls.php';
//require ROOT.'/classes/mgr/mssql.cls.php';

$_Object=array();


?>