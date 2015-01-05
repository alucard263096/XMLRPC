<?php
/*
 * Created on 2010-5-11
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */ 
 defined('IN_TA') or exit('Access Denied');
 
 class ShowMgr {

	private static $instance = null;
	public static $dbmgr = null;
	public static function getInstance() {
		return self :: $instance != null ? self :: $instance : new ShowMgr();
	}

	private function __construct() {
		
	}
	
	public function searchHotShow($category_id,$pw_code,
	$city_id,$district_id,$circuit_id,$venue_id,$activity_id,
	$keyword,$image_type,$language_id,$ipaddress)
	{
		$arr = array("'" => "''");
		$keyword=strtr($keyword,$arr);
		$select_city=strtr($select_city,$arr);
		$sql="usp_search_hot_show $category_id,'$pw_code',$city_id,$district_id,$circuit_id,$venue_id,$activity_id,N'$keyword','$image_type',$language_id,'$ipaddress'";
		$query = $this->dbmgr->query($sql);
		$result = $this->dbmgr->fetch_array_all($query); 
		
		return $result;
	}
	
	public function searchHotVenue($category_id,$pw_code,
	$city_id,$district_id,$circuit_id,$venue_id,$activity_id,
	$keyword,$image_type,$language_id)
	{
		$arr = array("'" => "''");
		$keyword=strtr($keyword,$arr);
		$sql="usp_search_hot_venue $category_id,'$pw_code',$city_id,$district_id,$circuit_id,$venue_id,$activity_id,N'$keyword','$image_type',$language_id";
		$query = $this->dbmgr->query($sql);
		$result = $this->dbmgr->fetch_array_all($query); 
		
		return $result;
	}
	public function getShowDetails($show_id,$language_id)
	{
		$sql="usp_get_show_by_id $show_id,$language_id";
		$query = $this->dbmgr->query($sql);
		$result = $this->dbmgr->fetch_array($query); 
		
		return $result;
	}
	public function getShowTicketType($show_id,$language_id)
	{
		$sql="usp_get_ticket_group_by_show_id $show_id,$language_id";
		$query = $this->dbmgr->query($sql);
		$result = $this->dbmgr->fetch_array_all($query); 
		
		return $result;
	}
	
	public function getAreaByShow($show_id,$language_id)
	{
		$sql="usp_get_area_ticket_group_by_show $show_id,$language_id";
		$query = $this->dbmgr->query($sql);
		$result = $this->dbmgr->fetch_array_all($query); 
		
		return $result;
	}
	public function getActivityStartEndDate($activity_id,$city_id )
	{
		$sql="usp_get_activity_start_end_date $activity_id,$city_id";
		$query = $this->dbmgr->query($sql);
		$result = $this->dbmgr->fetch_array($query); 
		return $result;
	}
	public function getShowInfoByid($showid, $language_id)
	{
		$sql = "usp_get_show_info_by_id ".$showid.",".$language_id;
		$query = $this->dbmgr->query($sql);
		$result = $this->dbmgr->fetch_array($query);		
		return $result;			
	}
	public function getFpGetSeatplanParameterDataByShowId($showid)
	{
		$sql = "usp_fp_get_seatplan_parameter_data_by_show_id ".$showid;
		$query = $this->dbmgr->query($sql);
		$result = $this->dbmgr->fetch_array($query);		
		return $result;			
	}
	
 }
 
 $showMgr = ShowMgr::getInstance();
 $showMgr->dbmgr=$dbmgr;
 define('IN_TA_SHOW', TRUE);
?>
