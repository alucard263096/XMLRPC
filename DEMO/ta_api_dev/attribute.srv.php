<?php

require 'include/common.inc.php';
 require ROOT.'/classes/mgr/webservice.cls.php';
 require ROOT.'/classes/datamgr/attribute.cls.php';
 require ROOT.'/functions/attribute.func.php';
 
 $xmlrpc_internalencoding='UTF-8';
 
 $signature=array(array('struct', 'struct'));
 /*
 $args["lang_id"]=1;
 $rs=getPriceList($args);
 print_r($rs);
 exit();
 */
 //registed methods
 $registed_method_arr=array(
		"getAttributeList" => array(
			"function" => "getAttributeList",
			"signature" =>$signature,
			"docstring" => ""
		),
		"getPriceList" => array(
			"function" => "getPriceList",
			"signature" =>$signature,
			"docstring" => ""
		),
		"getAttributeDetails" => array(
			"function" => "getAttributeDetails",
			"signature" =>$signature,
			"docstring" => ""
		),
		"updateAttribute" => array(
			"function" => "updateAttribute",
			"signature" =>$signature,
			"docstring" => ""
		),
		"getAttributeTypeList" => array(
			"function" => "getAttributeTypeList",
			"signature" =>$signature,
			"docstring" => ""
		));
		
				
 $s = new xmlrpc_server($registed_method_arr,0);
 $s->functions_parameters_type ='phpvals';
 $s->response_charset_encoding ="UTF-8";
 $s->service();
 
 //--------------------------------------------------functions -------------------------------------------------------

?>