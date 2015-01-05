<?php
/*
 * Created on May 12, 2010
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
	
	public  function __destruct ()
	{
		
	}	
	
	public function getPaymentType($language_id)
	{ 
		$sql="usp_get_all_payment_type ".$language_id;
		
		$query = $this->dbmgr->query($sql);
		$result = $this->dbmgr->fetch_array_all($query); 
		return $result;
	}
		
	
 }
 
 $paymentMgr=PaymentMgr::getInstance();
 $paymentMgr->dbmgr=$dbmgr;
 define('IN_TA_PAYMENT_TYPE', TRUE);
?>
