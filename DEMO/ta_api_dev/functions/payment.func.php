<?php

 defined('IN_TA') or exit('Access Denied');
 defined('IN_TA_PAYMENT') or exit('Access Denied');
 
 $mgr=$paymentMgr;

 /*
  * description:
  * param:$hotel_id int
  * param:$lang_id int
  * return:array[][]
  */
 function getPaymentType($args){
 	global $mgr;  	
 	$lang_id=trim($args['lang_id'])==""?-1:$args['lang_id'];	
	$rspaymenttype=$mgr->getPaymentType($lang_id); 	
 	return $rspaymenttype;
 }
 
 /*
  * description:save payment result for payease
  * return:array[result] value->1 success,value->-1 fail
  */
  function insertPayeaseLog($args)
  {global $mgr;
  	
  	$trans_id=$args['trans_id'];
  	$trans_time= parameter_filter($args['trans_time']);
  	$mid= parameter_filter($args['mid']);
  	$oid= parameter_filter($args['oid']);
  	$rcvname= parameter_filter($args['rcvname']);
  	$rcvaddr= parameter_filter($args['rcvaddr']);
  	$rcvtel= parameter_filter($args['rcvtel']);
  	$rcvpost= parameter_filter($args['rcvpost']);
  	$amount= parameter_filter($args['amount']);
  	$ymd= parameter_filter($args['ymd']);
	$orderstatus= parameter_filter($args['orderstatus']);
	$ordername= parameter_filter($args['ordername']);
	$moneytype= parameter_filter($args['moneytype']);
	
	/*
	$pstatus= parameter_filter($args['pstatus']);
	$pstring= parameter_filter($args['pstring']);
	$pmode= parameter_filter($args['pmode']);
	$md5info= parameter_filter($args['md5info']);
	$pamount= parameter_filter($args['pamount']);
	$pmoneytype= parameter_filter($args['pmoneytype']);
	$md5money= parameter_filter($args['md5money']);
	$sign= parameter_filter($args['sign']);
	$is_md5_passed= parameter_filter($args['is_md5_passed']);
	*/
	
	logger_mgr::logDebug("trans_id:".$trans_id);
	logger_mgr::logDebug("trans_time:".$trans_time);
	logger_mgr::logDebug("mid:".$mid);
	logger_mgr::logDebug("oid:".$oid);
	logger_mgr::logDebug("rcvname:".$rcvname);
	logger_mgr::logDebug("rcvaddr:".$rcvaddr);
	logger_mgr::logDebug("rcvtel:".$rcvtel);
	logger_mgr::logDebug("rcvpost:".$rcvpost);
	logger_mgr::logDebug("amount:".$amount);
	logger_mgr::logDebug("ymd:".$ymd);
	logger_mgr::logDebug("orderstatus:".$orderstatus);
	logger_mgr::logDebug("ordername:".$ordername);
	logger_mgr::logDebug("moneytype:".$moneytype);
	
	/*
	logger_mgr::logDebug("pstatus:".$pstatus);
	logger_mgr::logDebug("pstring:".$pstring);
	logger_mgr::logDebug("pmode:".$pmode);
	logger_mgr::logDebug("md5info:".$md5info);
	logger_mgr::logDebug("pamount:".$pamount);
	logger_mgr::logDebug("pmoneytype:".$pmoneytype);
	logger_mgr::logDebug("sign:".$sign);
	logger_mgr::logDebug("is_md5_passed:".$is_md5_passed);
	*/
	
	$result=$mgr->savePayEasePaymentResult($trans_id,$trans_time,$mid,$oid,$rcvname,$rcvaddr,$rcvtel,$rcvpost,$amount,$ymd,
	$orderstatus,$ordername,$moneytype,"","","","","","","","","","n");
	
	return $result;
	
  }
  
  function savePayeaseLog($args)
  {global $mgr;
  	$trans_id=$args['trans_id'];
  	
	$pstatus= parameter_filter($args['pstatus']);
	$pstring= parameter_filter($args['pstring']);
	$pmode= parameter_filter($args['pmode']);
	$md5info= parameter_filter($args['md5info']);
	$pamount= parameter_filter($args['pamount']);
	$pmoneytype= parameter_filter($args['pmoneytype']);
	$md5money= parameter_filter($args['md5money']);
	$sign= parameter_filter($args['sign']);
	$is_md5_passed= parameter_filter($args['is_md5_passed']);
	
	logger_mgr::logDebug("trans_id:".$trans_id);
	/*
	logger_mgr::logDebug("trans_time:".$trans_time);
	logger_mgr::logDebug("mid:".$mid);
	logger_mgr::logDebug("oid:".$oid);
	logger_mgr::logDebug("rcvname:".$rcvname);
	logger_mgr::logDebug("rcvaddr:".$rcvaddr);
	logger_mgr::logDebug("rcvtel:".$rcvtel);
	logger_mgr::logDebug("rcvpost:".$rcvpost);
	logger_mgr::logDebug("amount:".$amount);
	logger_mgr::logDebug("ymd:".$ymd);
	logger_mgr::logDebug("orderstatus:".$orderstatus);
	logger_mgr::logDebug("ordername:".$ordername);
	logger_mgr::logDebug("moneytype:".$moneytype);
	*/
	logger_mgr::logDebug("pstatus:".$pstatus);
	logger_mgr::logDebug("pstring:".$pstring);
	logger_mgr::logDebug("pmode:".$pmode);
	logger_mgr::logDebug("md5info:".$md5info);
	logger_mgr::logDebug("pamount:".$pamount);
	logger_mgr::logDebug("pmoneytype:".$pmoneytype);
	logger_mgr::logDebug("sign:".$sign);
	logger_mgr::logDebug("is_md5_passed:".$is_md5_passed);
	
	$result=$mgr->savePayEasePaymentResult($trans_id,"","","","","","","",0,"",
	"","","",$pstatus,$pstring,$pmode,$md5info,$pamount,$pmoneytype,$md5money,$sign,$is_md5_passed,"u");
	
	//$result=$mgr->savePayEasePaymentResult($trans_id,"","","","","","","",0,"",
	////"","","","","","","","","","","","","n");
	return $result;
	
  }
 
  function insertAsiapayAuthlog($args)
  {global $mgr;
  	
  	$trans_id= parameter_filter($args['transid']);
  	$orderRef = parameter_filter($args['orderRef']);
	$amount =  parameter_filter($args['amount']);
	$payMethod =  parameter_filter($args['payMethod']);
	$payType =  parameter_filter($args['payType']);
	$cardNo =  parameter_filter($args['cardNo']);
	$securityCode =  parameter_filter($args['securityCode']);
	$epMonth =  parameter_filter($args['epMonth']);
	$epYear =  parameter_filter($args['epYear']);
	$cardHolder =  parameter_filter($args['cardHolder']);
	$merchantId =  parameter_filter($args['merchantID']);
	$currCode = parameter_filter( $args['currCode']);
	$lang =  parameter_filter($args['lang']);
  	
	
	return $mgr->insertAsiapayAuthlog($trans_id,$orderRef,$amount,$currCode, $lang,
	 $merchantId, $payMethod, $epMonth,$epYear,$cardNo,$securityCode,$cardHolder,$payType);
	
  }
 
  function updateAsiapayAuthlog($args)
  {global $mgr;
  	
  	$src =parameter_filter( $args['src']);
	$prc =parameter_filter( $args['prc']);
	$ord =parameter_filter( $args['ord']);
	$holder =parameter_filter( $args['holder']);
	$successcode =parameter_filter( $args['successcode']);
	$ref =parameter_filter( $args['ref']);
	$payref =parameter_filter( $args['payref']);
	$amt =parameter_filter( $args['amt']);
	$cur =parameter_filter( $args['cur']);
	$authid =parameter_filter( $args['authid']);
	$eci =parameter_filter( $args['eci']);
	$payerauth =parameter_filter( $args['payerauth']);
	$sourceIp =parameter_filter( $args['sourceIp']);
	$ipcountry =parameter_filter( $args['ipcountry']);
	$paymethod =parameter_filter( $args['paymethod']);
	
  	
	return $mgr->updateAsiapayAuthlog($ref, $src, $prc, $ord, $holder, $successcode, $ref, $payref, $amt, $cur, $authid, $eci, $payerauth, $sourceIp, $paymethod);
	
  }
  
  function getAsiapayAuthlog($args)
  {global $mgr;
  	
	return $mgr->getAsiapayAuthlog($args["ref"]);
	
  }
  
  /*
   * description:update  the status of tb_trans and tb_trans_payment after payment
   * param:args array
   * return 1 or -1
   */
   
  function updatePaymentStatus($args)
  {global $mgr;
    $trans_id=$args['trans_id'];
    $status=$args['status'];
    $return_code=$args['return_code'];
    $remark=$args['remark'];
    $mgr->updateTransStatus($trans_id,$status);
    return $mgr->updateTransPaymentStatus($trans_id,$status=="PS"?"S":"F",$return_code,$remark);
  }



















?>