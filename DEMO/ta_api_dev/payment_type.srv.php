<?php
/*
 * Created on Aug 7, 2010
 * Created by leolu
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */

 require 'include/common.inc.php';
 require ROOT.'/classes/mgr/webservice.cls.php';
 require ROOT.'/classes/datamgr/payment_type.cls.php';
 require ROOT.'/functions/payment_type.func.php';
 
 $xmlrpc_internalencoding='UTF-8';
 
 $signature=array(array('struct', 'struct')); 

 
 //registed methods
 $registed_method_arr=array(		
		"getPaymentType" => array(
			"function" => "getPaymentType",
			"signature" =>$signature,
			"docstring" => ""
		)
		
		);
		
				
 $s = new xmlrpc_server($registed_method_arr,0);
 $s->functions_parameters_type ='phpvals';
 $s->response_charset_encoding ="UTF-8";
 $s->service();
 
 $dbmgr->close();
 
 //--------------------------------------------------functions -------------------------------------------------------

?>
