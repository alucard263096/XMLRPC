<?php
/*
 * Created on 2010-5-11
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */ 
 defined('IN_TA') or exit('Access Denied');
 
 require_once ROOT.'/classes/datamgr/show.cls.php';
 
 class ActivityMgr {

	private static $instance = null;
	public static $dbmgr = null;
	public static $showMgr = null;
	public static function getInstance() {
		return self :: $instance != null ? self :: $instance : new ActivityMgr();
	}

	private function __construct() {
		
	}
	
	public function getHotEvent($category_id,$pw_code,$city_id,$district_id,$image_type,$language_id)
	{
		return $this->showMgr->searchHotShow($category_id,$pw_code,$city_id,$district_id,-1,-1,-1,'',$image_type,$language_id,'');
	}
	public function getHotEventCityVenue($category_id,$pw_code,$city_id,$venue_id,$image_type,$language_id)
	{
		return $this->showMgr->searchHotShow($category_id,$pw_code,$city_id,-1,-1,$venue_id,-1,'',$image_type,$language_id,'');
	}
	
	public function getHotVenue($category_id,$pw_code,$city_id,$district_id,$circuit_id,$venue_id,$activity_id,$keyword,$image_type,$language_id)
	{
		return $this->showMgr->searchHotVenue($category_id,$pw_code,$city_id,$district_id,$circuit_id,$venue_id,$activity_id,$keyword,$image_type,$language_id);
	}
	
	public function getActivityDetails($activity_id,$image_type,$language_id)
	{
		$sql="usp_get_activity $activity_id,'$image_type',$language_id";
		$query = $this->dbmgr->query($sql);
		$result = $this->dbmgr->fetch_array_all($query); 
		return $result;
	}
	public function searchActivityByName($keyword,$city_id,$category_id,$language_id)
	{
		$arr = array("'" => "''");
		$keyword=strtr($keyword,$arr);
		$sql="usp_search_hot_show_by_name N'$keyword',$city_id,$category_id,$language_id";
		$query = $this->dbmgr->query($sql);
		$result = $this->dbmgr->fetch_array_all($query); 
		return $result;
	}
	public function searchComingActivity($category_id,
	$city_id,$district_id,$circuit_id,$venue_id,$activity_id,
	$keyword,$image_type,$language_id)
	{
		$arr = array("'" => "''");
		$keyword=strtr($keyword,$arr);
		$sql="usp_search_coming_activity $category_id,$city_id,$district_id,$circuit_id,$venue_id,$activity_id,N'$keyword','$image_type',$language_id";
		$query = $this->dbmgr->query($sql);
		$result = $this->dbmgr->fetch_array_all($query); 
		
		return $result;
	}
	
	public function getActivityListById($id,$ticket_dat,$poster,$city_id){
		$array_temp=array();
		$sql="usp_search_activity_by_id $id";
		$query = $this->dbmgr->query($sql);
		$result = $this->dbmgr->fetch_array($query);
		$array_temp["movieID"]=$result["movieID"];
		$array_temp["ticket_date"]=$ticket_dat;
		$array_temp["artistsUs"]=$result["artistsUs"];
		$array_temp["artistsTc"]=$result["artistsTc"];
		$array_temp["artistsSc"]=$result["artistsSc"];
		$array_temp["category"]=$result["category"];
		$array_temp["directorUs"]=$result["directorUs"];
		$array_temp["directorTc"]=$result["directorTc"];
		$array_temp["directorSc"]=$result["directorSc"];
		$array_temp["duration"]=$result["duration"];
		$array_temp["groupUs"]=$result["groupUs"];
		$array_temp["groupTc"]=$result["groupTc"];
		$array_temp["groupSc"]=$result["groupSc"];		
		$array_temp["languageUs"]=$result["languageUs"];
		$array_temp["languageTc"]=$result["languageTc"];
		$array_temp["languageSc"]=$result["languageSc"];
		$array_temp["nameUs"]=$result["nameUs"];
		$array_temp["nameTc"]=$result["nameTc"];
		$array_temp["nameSc"]=$result["nameSc"];
		$array_temp["posterUrl"]=$poster;
		$array_temp["ranking"]=$result["ranking"];
		$array_temp["storyUs"]=$result["storyUs"];
		$array_temp["storyTc"]=$result["storyTc"];	
		$array_temp["storySc"]=$result["storySc"];	
		$array_temp["subtitleUs"]=$result["subtitleUs"];	
		$array_temp["subtitleTc"]=$result["subtitleTc"];	
		$array_temp["subtitleSc"]=$result["subtitleSc"];	
		$array_temp["areaID"]=$city_id;
		return $array_temp;
	}
	
	public function getMovieStory($activity_id){
		$array_temp=array();
		$sql="usp_get_movie_story_by_id $activity_id";
		$query = $this->dbmgr->query($sql);
		$result = $this->dbmgr->fetch_array($query);
		$array_temp[0]["descriptionUs"]=strip_tags($result["descriptionUs"]);
		$array_temp[0]["descriptionTc"]=strip_tags($result["descriptionTc"]);
		$array_temp[0]["descriptionSc"]=strip_tags($result["descriptionSc"]);
		
		return $array_temp;
	}
	
	public function getVenueListById($id,$poster){
		$array_temp=array();
		$sql="usp_search_venue_by_id $id";
		$query = $this->dbmgr->query($sql);
		$result = $this->dbmgr->fetch_array($query);
		$array_temp["addressUs"]=$result["addressUs"];
		$array_temp["addressTc"]=$result["addressTc"];
		$array_temp["addressSc"]=$result["addressSc"];
		$array_temp["cinemaID"]=$result["cinemaID"];
		$array_temp["imageUrl"]=$poster;
		$array_temp["map_x"]=$result["map_x"];
		$array_temp["map_y"]=$result["map_y"];
		$array_temp["nameUs"]=$result["nameUs"];
		$array_temp["nameTc"]=$result["nameTc"];
		$array_temp["nameSc"]=$result["nameSc"];
		$array_temp["sequence"]=$result["sequence"];
		$array_temp["area_id"]=$result["city_id"];
		return $array_temp;
	}
	
	
	public function getActivityImages($activity_id ,$image_type,$language_id)
	{
		$sql="usp_get_activity_image $activity_id,'$image_type',$language_id";
		$query = $this->dbmgr->query($sql);
		$result = $this->dbmgr->fetch_array_all($query); 
		return $result;
	}
	public function ratingActivity($activity_id ,$member_id,$ipaddress,$score)
	{
		$sql="usp_rating_activity $activity_id,'$ipaddress',$member_id,$score";
		$query = $this->dbmgr->query($sql);
		$result = $this->dbmgr->fetch_array($query); 
		return $result;
	}
	public function getActivityVenue($activity_id ,$city_id,$language_id)
	{
		$sql="usp_get_activity_venue $activity_id,$city_id,$language_id";
		$query = $this->dbmgr->query($sql);
		$result = $this->dbmgr->fetch_array_all($query); 
		return $result;
	}
	public function getHotActivityVenue($activity_id ,$city_id,$language_id)
	{
		$sql="usp_get_hot_activity_venue $activity_id,$city_id,$language_id";
		$query = $this->dbmgr->query($sql);
		$result = $this->dbmgr->fetch_array_all($query); 
		return $result;
	}
	public function test($category_id,$pw_code,$city_id,$district_id,$image_type,$language_id)
	{
		$sql="usp_soon_test -1,'',-1,-1,-1,-1,-1,N'','',1,'' ";
		$query = $this->dbmgr->query($sql);
		$result = $this->dbmgr->fetch_array_all($query); 
		return $result;
	}
	public function getAreaList(){
		$arr = array();
		$sql="usp_get_area_list";
		$query = $this->dbmgr->query($sql);
		$result = $this->dbmgr->fetch_array_all($query);
		foreach($result as $rs){
			$array_temp = array();
			$array_temp["area_id"]=$rs["area_id"];
			$array_temp["areaNameUs"]=$rs["areaNameUs"];
			$array_temp["areaNameTc"]=$rs["areaNameTc"];
			$array_temp["areaNameSc"]=$rs["areaNameSc"];
			$arr[] = $array_temp;
		}
		return $arr;
	}
 }
 
 $activityMgr = ActivityMgr::getInstance();
 $activityMgr->dbmgr=$dbmgr;
 $activityMgr->showMgr=$showMgr;
 define('IN_TA_ACTIVITY', TRUE);
?>