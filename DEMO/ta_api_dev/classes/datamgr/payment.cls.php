<?php
/*
 * Created on Aug 2, 2010
 * Created by leolu
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 defined('IN_TA') or exit('Access Denied');
 

 class PaymentMgr
 {
 	private static $instance = null;
	public static $dbmgr = null;
	public static function getInstance() {
		return self :: $instance != null ? self :: $instance : new PaymentMgr();
	}

	private function __construct() {

	}
	
	/*
	 * description:get all payment type
	 * param:$language_id int
	 * return array[][]
	 */	
	public function getPaymentType($language_id)
	{ 
		$sql="usp_get_all_payment_type ".$language_id;
		
		$query = $this->dbmgr->query($sql);
		$result = $this->dbmgr->fetch_array_all($query); 
		return $result;
	}
		
	public function savePayEasePaymentResult($trans_id,$trans_time,$mid,$oid,$rcvname,$rcvaddr,$rcvtel,$rcvpost,$amount,$ymd,
	$orderstatus,$ordername,$moneytype,$pstatus,$pstring,$pmode,$md5info,$pamount,$pmoneytype,$md5money,$sign,$is_md5_passed,$action
	)
	{
		logger_mgr::logDebug("sql:asdfasdf");
		$trans_time=parameter_filter($trans_time);
		$mid=parameter_filter($mid);
		$oid=parameter_filter($oid);
		$rcvname=parameter_filter($rcvname);
		$rcvaddr=parameter_filter($rcvaddr);
		$rcvtel=parameter_filter($rcvtel);
		$rcvpost=parameter_filter($rcvpost);
		$ymd=parameter_filter($ymd);
		$orderstatus=parameter_filter($orderstatus);
		$ordername=parameter_filter($ordername);
		$moneytype=parameter_filter($moneytype);
		$pstatus=parameter_filter($pstatus);
		$pstring=parameter_filter($pstring);
		$pmode=parameter_filter($pmode);
		$md5info=parameter_filter($md5info);
		$pamount=parameter_filter($pamount);
		$pmoneytype=parameter_filter($pmoneytype);
		$md5money=parameter_filter($md5money);
		$sign=parameter_filter($sign);
		
		$sql="usp_update_payease_log '$trans_id','$trans_time','$mid','$oid','$rcvname','$rcvaddr','$rcvtel','$rcvpost',$amount,'$ymd','$orderstatus','$ordername'" .

				",'$moneytype','$pstatus','$pstring',N'$pmode','$md5info','$pamount','$pmoneytype','$md5money','$sign','$action','$is_md5_passed'";
		
		logger_mgr::logDebug("sql:".$sql);
		

	//			",'$moneytype','$pstatus','$pstring','$pmode','$md5info','$pamount','$pmoneytype','$md5money','$sign','n','$is_md5_passed'";
		//echo $sql;

		$query = $this->dbmgr->query($sql);
		$result = $this->dbmgr->fetch_array($query); 
 		return $result;
	}
	
	public function insertAsiapayAuthlog(
		$trans_id, $orderRef, $amount, $curr_code, $lang, $merchant_id, $p_method, $ep_month, $ep_year, $card_no, $security_code, $card_holder, $pay_type
	)
	{
		$sql="usp_insert_asiapay_auth_log '$trans_id','$orderRef','$amount','$curr_code','$lang',".
				"'$merchant_id','$p_method','$ep_month','$ep_year','$card_no','$security_code'" .
				",'$card_holder','$pay_type'";
		//echo $sql;
		$query = $this->dbmgr->query($sql);
		$result = $this->dbmgr->fetch_array($query); 
		
		return $result;
 		
	}
	
	public function updateAsiapayAuthlog(
		$trans_id, $src, $prc, $ord, $holder, $successcode, $ref, $payref, $amt, $cur, $authid, $eci, $payerauth, $sourceIp, $ipcountry, $paymethod
	)
	{
		$sql = "usp_update_asiapay_auth_log '$src','$prc','$ord','$holder'" .
				",'$successcode','$ref','$payref','$amt','$cur',''" .
				",'$authid','$eci','$payerauth','$sourceIp', '$ipcountry'" .
				",'$paymethod' ";
		
		$query = $this->dbmgr->query($sql);
		$result = $this->dbmgr->fetch_array($query); 
		
		return $result;
		
	}
	public function getAsiapayAuthlog($ref)
	{
		$sql = "usp_get_asiapay_auth_log_by_order_ref '$ref'";
		
		$query = $this->dbmgr->query($sql);
		$result = $this->dbmgr->fetch_array($query); 
		
		return $result;
		
	}
	
	public function updateTransStatus($trans_id,$status)
	{
		$sql="usp_update_trans_status $trans_id,'$status'";
		$query = $this->dbmgr->query($sql);
		$result = $this->dbmgr->fetch_array($query); 
		return $result;
	}
	
	public function updateTransPaymentStatus($trans_id,$status,$return_code,$remark)
	{
		$sql="usp_update_payment_status $trans_id,'$status','$return_code','$remark'";
		$query = $this->dbmgr->query($sql);
		$result = $this->dbmgr->fetch_array($query); 
		return $result;
	}
	
 }
 
$paymentMgr = PaymentMgr::getInstance();
$paymentMgr->dbmgr = $dbmgr;
define('IN_TA_PAYMENT', TRUE);
?>
