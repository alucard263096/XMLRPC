<?php
/*
 * Created on Aug 12, 2010
 * Created by leolu
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 
 require 'include/common.inc.php';
 require ROOT.'/classes/mgr/webservice.cls.php';
 require ROOT.'/classes/datamgr/delivery.cls.php';
 require ROOT.'/functions/delivery.func.php';
 
 $xmlrpc_internalencoding='UTF-8';
 /*
 $signature=array(array('struct', 'struct'));
 $args["lang_id"]=2;
 $rs=getAllDelivery($args);
 print_r($rs);
 exit();
 */										
  $registed_method_arr=array(
		"getAllDelivery" => array(
			"function" => "getAllDelivery",
			"signature" =>$signature,
			"docstring" => ""
		));
		
 $s = new xmlrpc_server($registed_method_arr,0);
 $s->functions_parameters_type ='phpvals';
 $s->response_charset_encoding ="UTF-8";
 $s->service();
?>
