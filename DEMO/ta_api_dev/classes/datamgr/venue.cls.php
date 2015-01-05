<?php
/*
 * Created on Jul 19, 2010
 * Created by leolu
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 * usp_web_get_venue_list_by_city_id
 */
  defined('IN_TA') or exit('Access Denied');
 class VenueMgr
 {
 	private static $instance = null;
	public static $dbmgr = null;
	public static function getInstance() {
		return self :: $instance != null ? self :: $instance : new VenueMgr();
	}

	private function __construct() {
		
	}
	
 	public function getOrganizerVenueList($city_id,$district_id,$organizer_id,$lang_id)
	{
		global $CONFIG;
		$sql="usp_get_organizer_venue $city_id,$district_id,$organizer_id," . $lang_id;
		
		$query = $this->dbmgr->query($sql);
		$result = $this->dbmgr->fetch_array_all($query); 
		return $result;
	}
	
	public function getVenueById($venue_id,$lang_id)
	{
		$sql="usp_get_venue_by_id $venue_id,$lang_id";
		$query = $this->dbmgr->query($sql);
		$result = $this->dbmgr->fetch_array($query); 
		return $result;
	}
	
	public function getVenueImage($venue_id,$image_type,$lang_id)
	{
		$sql="usp_get_venue_image $venue_id,'$image_type',$lang_id";
		$query = $this->dbmgr->query($sql);
		$result = $this->dbmgr->fetch_array_all($query); 
		return $result;
	}
	public function ratingVenue($venue_id ,$member_id,$ipaddress,$score)
	{
		$sql="usp_rating_venue $venue_id,'$ipaddress',$member_id,$score";
		$query = $this->dbmgr->query($sql);
		$result = $this->dbmgr->fetch_array($query); 
		return $result;
	}
	
 }
 $venueMgr = VenueMgr::getInstance();
 $venueMgr->dbmgr=$dbmgr;
 define('IN_TA_VENUE', TRUE);
?>
