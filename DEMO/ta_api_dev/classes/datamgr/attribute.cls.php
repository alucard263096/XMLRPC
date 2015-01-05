<?php

defined('IN_TA') or exit('Access Denied');

 class AttributeMgr
 {
 	private static $instance = null;
	public static $dbmgr = null;
	public static function getInstance() {
		return self :: $instance != null ? self :: $instance : new AttributeMgr();
	}

	private function __construct() {
		
	}
	
	public  function __destruct ()
	{
		
	}
	
	public function getAttribute($category_id,$attribute_type,$language_id)
	{
		$sql="usp_get_attribute $category_id,$attribute_type,".$language_id;
		
		$query = $this->dbmgr->query($sql);
		$result = $this->dbmgr->fetch_array_all($query); 
		return $result;
	}
	
	public function getAttributeById($id,$language_id)
	{
		$sql="usp_get_attribute_by_id $id,$language_id";
		$query = $this->dbmgr->query($sql);
		$result = $this->dbmgr->fetch_array($query); 
		return $result;
	}
	
	public function updateAttribute($id,$attribute_type_id,$image_id,$name,$language_id)
	{
		$sql="usp_update_attribute $id,$attribute_type_id,$image_id,N'$name',$language_id";
		$query = $this->dbmgr->query($sql);
		$result = $this->dbmgr->fetch_array($query); 
		return $result;
	}
	
	public function getAttributeTypeList($category_id,$lang_id)
	{
		$sql="usp_get_attribute_type_list $category_id,$lang_id";
		$query = $this->dbmgr->query($sql);
		$result = $this->dbmgr->fetch_array_all($query); 
		return $result;
	}
 }
 
 $attributeMgr=AttributeMgr::getInstance();
 $attributeMgr->dbmgr=$dbmgr;
 define('IN_TA_ATTRIBUTE', TRUE);
?>
