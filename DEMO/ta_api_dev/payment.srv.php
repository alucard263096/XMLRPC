<?php
/*
 * Created on Aug 7, 2010
 * Created by leolu
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 require 'include/common.inc.php';
 require ROOT.'/classes/mgr/webservice.cls.php';
 require ROOT.'/classes/datamgr/payment.cls.php';
 require ROOT.'/functions/payment.func.php';
 
 $xmlrpc_internalencoding='UTF-8';
 
 $signature=array(array('struct', 'struct')); 
/*
 $args["trans_id"]=259;
 $args["orderRef"]='C2';
 $args["amount"]='10';
 $args["merchantId"]="8822";
 $args["purchase_way"]="WB";
 $rs=insertAsiapayAuthlog($args);
 print_r($rs);
 exit();
*/


 /*$args["Ref"]=259;
 $args["ref"]='C2';
 $args["amount"]='10';
 $args["merchantId"]="8822";
 $args["src"]="1";
 $args["prc"]="2";
 $args["Ord"]="3";
 $args["Amt"]="1";
 $args["purchase_way"]="1";
 $args["successcode"]="1";
 $args["AuthId"]="1";
 $args["PayRef"]="259";
 $rs=getAsiapayAuthlog($args);
 print_r($rs);
 exit();
 
 $args['lang_id']=1;
 $rs=getPaymentType($args);
 print_r($rs);
 exit();
 */
 //registed methods
 
 $registed_method_arr=array(		
		"getPaymentType" => array(
			"function" => "getPaymentType",
			"signature" =>$signature,
			"docstring" => ""
		),
		"updatePayeaseLog" => array(
			"function" => "savePayeaseLog",
			"signature" =>$signature,
			"docstring" => ""
		),
		"insertPayeaseLog" => array(
			"function" => "insertPayeaseLog",
			"signature" =>$signature,
			"docstring" => ""
		),
		"insertAsiapayAuthlog" => array(
			"function" => "insertAsiapayAuthlog",
			"signature" =>$signature,
			"docstring" => ""
		),
		"updateAsiapayAuthlog" => array(
			"function" => "updateAsiapayAuthlog",
			"signature" =>$signature,
			"docstring" => ""
		),
		"getAsiapayAuthlog" => array(
			"function" => "getAsiapayAuthlog",
			"signature" =>$signature,
			"docstring" => ""
		),
		"updatePaymentResult" => array(
			"function" => "updatePaymentStatus",
			"signature" =>$signature,
			"docstring" => ""
		));
		
				
 $s = new xmlrpc_server($registed_method_arr,0);
 $s->functions_parameters_type ='phpvals';
 $s->response_charset_encoding ="UTF-8";
 $s->service();
 
 $dbmgr->close();
 
 //--------------------------------------------------functions -------------------------------------------------------

?>
