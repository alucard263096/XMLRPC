<?php

require 'include/common.inc.php';
 require ROOT.'/classes/mgr/webservice.cls.php';
 require ROOT.'/classes/mgr/web_service_client.cls.php';
 require ROOT.'/classes/datamgr/member.cls.php';
 require ROOT.'/classes/datamgr/show.cls.php';
 require ROOT.'/classes/datamgr/booking.cls.php';
 require ROOT.'/functions/booking.func.php';
 
 $xmlrpc_internalencoding='UTF-8';
 
 $signature=array(array('struct', 'struct'));
/*
 $args["trans_id"]=795;
 $args["result"]='Y';
$rs=setPaymentResult($args);
print_r($rs);
exit();
*/

/*
 //$args["trans_id"]=1;
 $args["show_id"]=817;
 $args["lang_id"]=1;
 $args["pt_code"]='DC';
 $args["ticket_group_id"]='1';
 $args["staff_id"]='-1';
 $args["seat_list"]="150";
 $args["ticket_type"]="1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,";
 $args["purchase_way"]="WB";
 $args["show_type"]="FS";
 $args["delivery_type_id"]="1";
 $rs=setTrans($args);
 print_r($rs);
 exit();
*/
 //registed methods
 $registed_method_arr=array(
		"getSeatTicketGroupTicketType" => array(
			"function" => "getSeatTicketGroupTicketType",
			"signature" =>$signature,
			"docstring" => ""
		),
		"getTicketGroupTicketType" => array(
			"function" => "getTicketGroupTicketType",
			"signature" =>$signature,
			"docstring" => ""
		),
		"setTrans" => array(
			"function" => "setTrans",
			"signature" =>$signature,
			"docstring" => ""
		),
		"setPaymentResult" => array(
			"function" => "setPaymentResult",
			"signature" =>$signature,
			"docstring" => ""
		),
		"setActivityAlert" => array(
			"function" => "setActivityAlert",
			"signature" =>$signature,
			"docstring" => ""
		));
		
				
 $s = new xmlrpc_server($registed_method_arr,0);
 $s->functions_parameters_type ='phpvals';
 $s->response_charset_encoding ="UTF-8";
 $s->service();
 
 //--------------------------------------------------functions -------------------------------------------------------

?>