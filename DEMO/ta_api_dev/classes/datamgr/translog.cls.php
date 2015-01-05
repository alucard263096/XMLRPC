<?php
/*
 * Created on Aug 12, 2010
 * Created by leolu
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 
 class RanslogMgr
 {
 	private static $instance = null;
	public static $dbmgr = null;
	public static function getInstance() {
		return self :: $instance != null ? self :: $instance : new RanslogMgr();
	}

	private function __construct(){
		
	}
	
	public  function __destruct ()
	{
		
	}
	
	public function search($order_no,$mobile_country_code,$country_code,$mobile_no,$area_code,$home_no,$email,$from_date,$to_date,$order_status,$ticket_status,$languge_id,$client_name,$member_id)
	{
		/*if(isset($order_no)==false ||!is_numeric($order_no))
		{
			$order_no=0;
		}*/
		if(!is_numeric($ticket_status) || !is_numeric($languge_id))
		{
			return;
		}
		$sql="usp_search_order '".parameter_filter($order_no)."','".parameter_filter($mobile_country_code)."','".parameter_filter($country_code)."','".parameter_filter($mobile_no)."','".parameter_filter($area_code)."','".
		$home_no."','".parameter_filter($email)."','".parameter_filter($from_date)."','".parameter_filter($to_date)."','".
		parameter_filter($order_status)."',".parameter_filter($ticket_status).",".
		$languge_id.",N'".parameter_filter($client_name)."',$member_id";
		$query = $this->dbmgr->query($sql);
		$result = $this->dbmgr->fetch_array_all($query); 
		return $result;
	}
	public function printTicket($ticket_str)
	{
		$sql="usp_print_ticket '$ticket_str'";
		$query = $this->dbmgr->query($sql);
		$result = $this->dbmgr->fetch_array_all($query); 
		return $result;
	}
 }
 
 $deliveryMgr=RanslogMgr::getInstance();
 $deliveryMgr->dbmgr=$dbmgr;
 $deliveryMgr->bookingMgr=$bookingMgr;
 define('IN_TA_TRANSLOG', TRUE);
?>
