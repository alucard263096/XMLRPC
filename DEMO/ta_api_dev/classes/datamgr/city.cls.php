<?php
/*
 * Created on May 12, 2010
 * Created by leolu
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
defined('IN_TA') or exit('Access Denied');

 class CityMgr
 {
 	private static $instance = null;
	public static $dbmgr = null;
	public static function getInstance() {
		return self :: $instance != null ? self :: $instance : new CityMgr();
	}

	private function __construct() {
		
	}
	
	public  function __destruct ()
	{
		
	}
	public function getCountry($status,$language_id)
	{
		$sql="usp_get_country '$status',".$language_id;
		
		$query = $this->dbmgr->query($sql);
		$result = $this->dbmgr->fetch_array_all($query); 
		return $result;
	}
	
	public function getCity($status,$language_id)
	{
		$sql="usp_get_all_city '$status',".$language_id;
		
		$query = $this->dbmgr->query($sql);
		$result = $this->dbmgr->fetch_array_all($query); 
		
		$ds=array();
		$country_id=0;
		$c=-1;
		for($i=0;$i<count($result);$i++)
		{
			if($country_id!=$result[$i]["country_id"])
			{
				$country_id=$result[$i]["country_id"];
				$c++;
			}
			$dr=$result[$i];
			$dt=$ds[$c]["details"];
			$dt[]=$dr;
			$ds[$c]["details"]=$dt;
			$ds[$c]["country_id"]=$country_id;
		}
		
		
		return $ds;
		
		
	}
	
	public function getDistrict($status,$language_id)
	{
		$sql="usp_get_district '$status',".$language_id;
		
		$query = $this->dbmgr->query($sql);
		$result = $this->dbmgr->fetch_array_all($query); 
		
		$ds=array();
		$city_id=0;
		$c=-1;
		for($i=0;$i<count($result);$i++)
		{
			if($city_id!=$result[$i]["city_id"])
			{
				$city_id=$result[$i]["city_id"];
				$c++;
			}
			$dr=$result[$i];
			$dt=$ds[$c]["details"];
			$dt[]=$dr;
			$ds[$c]["details"]=$dt;
			$ds[$c]["city_id"]=$city_id;
		}
		
		return $ds;
	}
 }
 
 $cityMgr=CityMgr::getInstance();
 $cityMgr->dbmgr=$dbmgr;
 define('IN_TA_CITY', TRUE);
?>
