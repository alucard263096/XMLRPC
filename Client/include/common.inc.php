<?php
/*
 * Created on 2010-5-6
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
//set include path and config
define('ROOT', str_replace("\\", '/', substr(dirname(__FILE__), 0, -8)));	// -9 = 0-strlen('includes')-1;
require ROOT.'/config/config.inc.php';
@set_include_path(get_include_path().$CONFIG['rootpath']); 
define('PEAR_HOME',ROOT."/libs/PEAR/");


//~ set php global variable to NULL, for security
//unset( $_REQUEST, $HTTP_ENV_VARS, $HTTP_POST_VARS, $HTTP_GET_VARS, $HTTP_POST_FILES, $HTTP_COOKIE_VARS);



require ROOT.'/classes/mgr/common_function.php';


?>