<?php
/*
 * Created on Aug 6, 2010
 * Created by leolu
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */

 if ($_SERVER['REQUEST_METHOD'] != 'POST' && isset($_GET['showSource']))
 {
	highlight_file(__FILE__);
	die();
 }

 require 'include/common.inc.php';
 require "libs/xml_rpc/xmlrpc.inc";
 require "libs/xml_rpc/xmlrpcs.inc";
 require "libs/xml_rpc/xmlrpc_wrappers.inc";
 require ROOT.'/classes/datamgr/activity.cls.php';
 
 $xmlrpc_internalencoding='UTF-8';
 
 $signature=array(array('struct', 'struct'));
 $findstate_doc="asdasfdsadf";
 
 //registed methods
 $registed_method_arr=array(
		"test" => array(
			"function" => "test",
			"signature" =>$signature,
			"docstring" => $findstate_doc
		));
				
 $s = new xmlrpc_server($registed_method_arr,0);
 $s->functions_parameters_type ='phpvals';
 $s->response_charset_encoding ="UTF-8";
 $s->service();
 
 //--------------------------------------------------functions -------------------------------------------------------
 function test($msg)
 {global $activityMgr;
 	/*
 	foreach ($msg as $key => $value) 
 	{
		logger_mgr::logDebug("key: ".$key.'=> value: '.$value);
	}
	*/
	$result=$activityMgr->getActivity(1);
 	
 	$arr=array();
 	$v=obj2xmlrpcval($result);
 	return new xmlrpcresp($v);
 }
?>
