<?php
/*
 * Created on Aug 12, 2010
 * Created by leolu
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
defined('IN_TA') or exit('Access Denied');

 class SeatplanMgr
 {
 	private static $instance = null;
	public static $dbmgr = null;
	public static function getInstance() {
		return self :: $instance != null ? self :: $instance : new SeatplanMgr();
	}

	private function __construct() {
		
	}
	
	public  function __destruct ()
	{
		
	}
	public function getSeatplanByShowId($show_id)
	{
		$sql="usp_get_seatplan_by_show $show_id,0";
		$query = $this->dbmgr->query($sql);
		$result = $this->dbmgr->fetch_array_all($query); 
		
		return $result;		
	}
	public function getSeatStyle($show_id)
	{
		$sql="usp_get_seat_style_by_show $show_id";
		$query = $this->dbmgr->query($sql);
		$result = $this->dbmgr->fetch_array_all($query); 
		
		return $result;		
	}
	public function getSeatplanDetailByShowId($show_id)
	{
		$sql="usp_get_floor_seat_plan_detail_by_show_id $show_id";
		$query = $this->dbmgr->query($sql);
		$result = $this->dbmgr->fetch_array($query); 
		
		return $result;		
	}
	public function getAreaSeatplan($show_id,$area_id,$ticket_group_id)
	{
		$sql="usp_get_area_seatplan_by_show $show_id,$area_id,$ticket_group_id";
		$query = $this->dbmgr->query($sql);
		$result = $this->dbmgr->fetch_array_all($query); 
		
		return $result;		
	}
	
	public function getAreaSeatplanDetail($area_id)
	{
		$sql="usp_get_area_seatplan_detail $area_id";
		$query = $this->dbmgr->query($sql);
		$result = $this->dbmgr->fetch_array($query); 
		
		return $result;		
	}
	
	
 }
 
 $seatplanMgr=SeatplanMgr::getInstance();
 $seatplanMgr->dbmgr=$dbmgr;
 $seatplanMgr->showMgr=$showMgr;
 define('IN_TA_SEATPLAN', TRUE);
?>
