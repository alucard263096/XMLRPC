<?php

 defined('IN_TA') or exit('Access Denied');
 defined('IN_TA_PAYMENT_TYPE') or exit('Access Denied');
 
 $mgr=$paymentMgr;

 
 function getPaymentType($args){
 	global $mgr;  	
 	global $CONFIG;
 	if(trim($args["lang_id"])=="")
 	{
 		$args["lang_id"]=$CONFIG["lang_id"];
 	}	
	$rspaymenttype=$mgr->getPaymentType($args["hotel_id"],$args["lang_id"]); 	
 	
 	return $rspaymenttype;
 }


















?>