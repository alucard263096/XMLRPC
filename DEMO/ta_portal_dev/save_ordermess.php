<?php

 	 
require 'include/common.inc.php';
require ROOT.'/classes/mgr/smarty.cls.php';
	  
	$action=$_REQUEST["action"];
	
	switch($action)
	{
		case "diao":
		$smarty->display("diao.tpl");
		break;
		default:
		$smarty->display("test.tpl");
	}
		 
  
?>