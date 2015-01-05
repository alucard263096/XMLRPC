<?php
/*
 * Created on Aug 12, 2010
 * Created by leolu
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
defined('IN_TA') or exit('Access Denied');

 class MemberMgr
 {
 	private static $instance = null;
	public static $dbmgr = null;
	public static function getInstance() {
		return self :: $instance != null ? self :: $instance : new MemberMgr();
	}

	private function __construct() {
		
	}
	
	public  function __destruct ()
	{
		
	}
	public function getMember($member_id,$login_name,$language_id)
	{ $arr = array("'" => "''");
		$login_name=strtr($login_name,$arr);
		$sql="usp_get_member $member_id,'$login_name',".$language_id;
		
		$query = $this->dbmgr->query($sql);
		$result = $this->dbmgr->fetch_array_all($query); 
		return $result;
	}	
	
	public function updateMemberDetails($member_id,$login_name,$password,$member_type_id,
	$client_type_id,$honorific_id,$first_name,$last_name,$nickname,$gender,$birthday,
	$mobile_country_code,$mobile_no,
	$home_country_code,$home_area_code,$home_no,
	$office_country_code,$office_area_code,$office_no,
	$email,$district_id,$address,$point,$status)
	{
		$arr = array("'" => "''");
		$login_name=(strtr($login_name,$arr));
		$password=(strtr($password,$arr));
		$last_name=(strtr($last_name,$arr));
		$nickname=(strtr($nickname,$arr));
		$gender=(strtr($gender,$arr));
		$birthday=(strtr($birthday,$arr));
		$mobile_country_code=(strtr($mobile_country_code,$arr));
		$mobile_no=(strtr($mobile_no,$arr));
		$home_country_code=(strtr($home_country_code,$arr));
		$home_area_code=(strtr($home_area_code,$arr));
		$home_no=(strtr($home_no,$arr));
		$office_country_code=(strtr($office_country_code,$arr));
		$office_area_code=(strtr($office_area_code,$arr));
		$office_no=(strtr($office_no,$arr));
		$email=(strtr($email,$arr));
		$address=(strtr($address,$arr));
		
		$sql="usp_update_member_details $member_id,'$login_name','$password',$member_type_id" .
				",$client_type_id,$honorific_id,'$first_name','$last_name','$nickname','$gender','$birthday'," .
				"'$mobile_country_code','$mobile_no'," .
				"'$home_country_code','$home_area_code','$home_no'," .
				"'$office_country_code','$office_area_code','$office_no'," .
				"'$email',$district_id,N'$address',$point,'$status'";
		
		logger_mgr::logDebug($sql);
		$query = $this->dbmgr->query($sql);
		$result = $this->dbmgr->fetch_array($query); 
		return $result;
	}
	
 	public function updateLastLoginTime($member_id)
	{
		$sql = "usp_update_member_last_login_time $member_id";
		logger_mgr::logDebug($sql);
		$query = $this->dbmgr->query($sql);
		$result = $this->dbmgr->fetch_array($query);
		return $result;
	}
	
	public function registerMember($login_name,$password,
	$honorific_id,$first_name,$last_name,$nickname,$gender,$birthday,
	$mobile_country_code,$mobile_no,
	$home_country_code,$home_area_code,$home_no,
	$office_country_code,$office_area_code,$office_no,
	$email,$district_id,$address,$point)
	{
		return $this->updateMemberDetails(0,$login_name,$password,2,1,$honorific_id,$first_name,$last_name,$nickname,$gender,$birthday,
	$mobile_country_code,$mobile_no,
	$home_country_code,$home_area_code,$home_no,
	$office_country_code,$office_area_code,$office_no,
	$email,$district_id,$address,$point,'A');
	}
	
	public function getHonorific($language_id)
	{
	
		$sql="usp_get_honorific ".$language_id;		
		$query = $this->dbmgr->query($sql);
		$result = $this->dbmgr->fetch_array_all($query); 
		return $result;
	}
	
	public function checkMemberAccount($account)
	{
		$sql="usp_check_member_account '$account'";
		logger_mgr::logDebug($sql);
		$query = $this->dbmgr->query($sql);
		$result = $this->dbmgr->fetch_array($query); 
		return $result;
	}
	
	public function changeMemberPassword($account,$old_password,$new_password)
	{
		$sql="usp_change_member_password '$account','$old_password','$new_password'";
		$query = $this->dbmgr->query($sql);
		$result = $this->dbmgr->fetch_array($query); 
		return $result;
	}
	
	
	public function getCountryListByDistrictId($district_id,$lang_id)
	{
		$sql="usp_get_country_by_district $district_id,$lang_id";
		$query = $this->dbmgr->query($sql);
		$result = $this->dbmgr->fetch_array_all($query); 
		return $result;
	}
	
	public function getCityListByDistrictId($district_id,$lang_id)
	{
		$sql="usp_get_city_by_district $district_id,$lang_id";
		$query = $this->dbmgr->query($sql);
		$result = $this->dbmgr->fetch_array_all($query); 
		return $result;
	}
	
	/*
	 * Function:get
	 */
	
   function modifyPoint($member_id,$point)
   {
		$sql="usp_get_modify_member_point $member_id,$point";
		$query = $this->dbmgr->query($sql);
		$result = $this->dbmgr->fetch_array($query); 
		return $result;	
   }
 }
 
 
 $memberMgr=MemberMgr::getInstance();
 $memberMgr->dbmgr=$dbmgr;
 define('IN_TA_MEMBER', TRUE);
 
?>
