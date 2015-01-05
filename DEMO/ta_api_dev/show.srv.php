<?php

require 'include/common.inc.php';
 require ROOT.'/classes/mgr/webservice.cls.php';
 require ROOT.'/classes/datamgr/show.cls.php';
 require ROOT.'/functions/show.func.php';
 logger_mgr::logInfo("==============>IncOMeIng");
 $xmlrpc_internalencoding='UTF-8';
 
 $signature=array(array('struct', 'struct'));
 /*
 $args["city_id"]=1;
 $args["district_id"]=1;
 $args["venue_id"]=149;
 $rs=searchHotShow($args);
 print_r($rs);
 exit();
 */
 //registed methods
 $registed_method_arr=array(
		"searchHotShow" => array(
			"function" => "searchHotShow",
			"signature" =>$signature,
			"docstring" => ""
		),
		"getShowByActivity" => array(
			"function" => "getHotShowByActivity",
			"signature" =>$signature,
			"docstring" => ""
		),
		"getShowDetails" => array(
			"function" => "getShowDetails",
			"signature" =>$signature,
			"docstring" => ""
		),
		"test" => array(
			"function" => "test",
			"signature" =>$signature,
			"docstring" => ""
		));
		
				
 $s = new xmlrpc_server($registed_method_arr,0);
 $s->functions_parameters_type ='phpvals';
 $s->response_charset_encoding ="UTF-8";
 $s->service();
 
 //--------------------------------------------------functions -------------------------------------------------------

?>