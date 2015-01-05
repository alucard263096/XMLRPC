<?php
/*
 * Created on Aug 12, 2010
 * Created by leolu
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 
 require 'include/common.inc.php';
 require ROOT.'/classes/mgr/webservice.cls.php';
 require ROOT.'/classes/datamgr/booking.cls.php';
 require ROOT.'/classes/datamgr/translog.cls.php';
 require ROOT.'/functions/translog.func.php';
 
 $xmlrpc_internalencoding='UTF-8';
 $signature=array(array('struct', 'struct'));
 /*
 $args["member_id"]=84;
 $rs=search($args);
 print_r($rs);
 exit();
 */
  $registed_method_arr=array(
		"search" => array(
			"function" => "search",
			"signature" =>$signature,
			"docstring" => ""
		));
		
 $s = new xmlrpc_server($registed_method_arr,0);
 $s->functions_parameters_type ='phpvals';
 $s->response_charset_encoding ="UTF-8";
 $s->service();
?>