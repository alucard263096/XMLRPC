<?php
/*
 * Created on May 12, 2010
 * Created by leolu
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
defined('IN_TA') or exit('Access Denied');

 class TicketTypeMgr
 {
 	private static $instance = null;
	public static $dbmgr = null;
	public static function getInstance() {
		return self :: $instance != null ? self :: $instance : new TicketTypeMgr();
	}

	private function __construct() {
		
	}
	
	public  function __destruct ()
	{
		
	}
	public function getTicketTypeByTicketGroup($ticket_group_id,$purchase_code,$language_id)
	{
		$sql="usp_get_ticket_type_by_ticket_group_2 $ticket_group_id,'$purchase_code',$language_id";
		
		$query = $this->dbmgr->query($sql);
		$result = $this->dbmgr->fetch_array_all($query); 
		return $result;
	}
	
 }
 
 $ticketTypeMgr=TicketTypeMgr::getInstance();
 $ticketTypeMgr->dbmgr=$dbmgr;
 define('IN_TA_TICKET_TYPE', TRUE);
?>
