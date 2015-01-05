<?php

require 'include/common.inc.php';
 require ROOT.'/classes/mgr/webservice.cls.php';
 require ROOT.'/functions/test.func.php';
 
 
 $signature=array(array('struct', 'struct'));

 //echo getMyName();
 //exit;

 //registed methods
 $registed_method_arr=array(
		"GetMyName" => array(
			"function" => "getMyName",
			"signature" =>$signature,
			"docstring" => ""
		),
	    "AddAB" => array(
			"function" => "addAB",
			"signature" =>$signature,
			"docstring" => ""
		),
		"GetArray" => array(
			"function" => "getArray",
			"signature" =>$signature,
			"docstring" => ""
		));
		
				
 $s = new xmlrpc_server($registed_method_arr,0);
 $s->functions_parameters_type =$CONFIG['parameter_type'];
 $s->response_charset_encoding =$CONFIG['charset'];
 $s->service();
 
 
?>