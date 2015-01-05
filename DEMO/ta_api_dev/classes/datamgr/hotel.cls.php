<?php
/*
 * Created on May 12, 2010
 * Created by leolu
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
defined('IN_TA') or exit('Access Denied');

 class HotelMgr
 {
 	private static $instance = null;
	public static $dbmgr = null;
	public static function getInstance() {
		return self :: $instance != null ? self :: $instance : new HotelMgr();
	}

	private function __construct() {
		
	}
	
	public  function __destruct ()
	{
		
	}
	public function getHotelDetail($hotel_id,$language_id)
	{ 
		$sql="usp_get_hotel_detail_by_hotel_id ".$hotel_id.",".$language_id;
		
		$query = $this->dbmgr->query($sql);
		$result = $this->dbmgr->fetch_array($query); 
		return $result;
	}	
	
	
	public function getHotelImage($hotel_id,$language_id)
	{ 
		$sql="usp_get_hotel_image ".$hotel_id.",".$language_id;
		
		$query = $this->dbmgr->query($sql);
		$result = $this->dbmgr->fetch_array_all($query); 
		return $result;
	}
	
		public function getHoteImageType($hotel_id,$language_id)
	{ 
		$sql="usp_get_hotel_image_type ".$hotel_id.",".$language_id;
		
		$query = $this->dbmgr->query($sql);
		$result = $this->dbmgr->fetch_array_all($query); 
		return $result;
	}
	
	public function getHoteImageId($hotel_id,$image_type_id,$language_id)
	{ 
		$sql="usp_get_hotel_image_id ".$hotel_id.",".$image_type_id.",".$language_id;
		
		$query = $this->dbmgr->query($sql);
		$result = $this->dbmgr->fetch_array_all($query); 
		return $result;
	}
	
	public function getHotelAttrTypeAttr($hotel_id,$attribute_type_id,$language_id)
	{ 
		$sql="usp_get_hotel_attribute_type_attribute  ".$hotel_id.",".$attribute_type_id.",".$language_id;				
		$query = $this->dbmgr->query($sql);
		$result = $this->dbmgr->fetch_array_all($query); 
		
		return $result;
	}
	
	public function getHotelAttributeType($hotel_id,$language_id)
	{ 
		$sql="usp_get_hotel_attribute_type ".$hotel_id.",".$language_id;
		
		$query = $this->dbmgr->query($sql);
		$result = $this->dbmgr->fetch_array_all($query); 
		return $result;
	}	
	
	public function getHotelRoomType($hotel_id,$start_date,$end_date,$purchase_way,$language_id)
	{ 
		$sql="usp_get_hotel_room_type $hotel_id,'$start_date','$end_date','$purchase_way',$language_id";
		
		$query = $this->dbmgr->query($sql);
		$result = $this->dbmgr->fetch_array_all($query); 
		return $result;
	}
	
	public function getHotelBedType($room_type_id,$language_id)
	{ 
		$sql="usp_get_room_bed_type ".$room_type_id.",".$language_id;
		
		$query = $this->dbmgr->query($sql);
		$result = $this->dbmgr->fetch_array_all($query); 
		return $result;
	}
	
		public function getRoomImage($room_type_id,$language_id)
	{ 
		$sql="usp_get_room_image ".$room_type_id.",".$language_id;
		
		$query = $this->dbmgr->query($sql);
		$result = $this->dbmgr->fetch_array_all($query); 
		return $result;
	}
	
	
	public function getHotelRoomTypeByDate($hotel_id,$check_in_date,$check_out_date,$room_type_id,$purchase_way,$language_id)
	{ 
		$sql="usp_get_hotel_room_type_by_date $hotel_id,'$check_in_date','$check_out_date',$room_type_id,'$purchase_way',$language_id";
		
		$query = $this->dbmgr->query($sql);
		$result = $this->dbmgr->fetch_array_all($query); 
		return $result;
	}
	
	public function getHotelRoomAttributeOption($hotel_id,$language_id)
	{ 
		$sql="usp_get_hotel_room_attribute_option ".$hotel_id.",".$language_id;
		
		$query = $this->dbmgr->query($sql);
		$result = $this->dbmgr->fetch_array_all($query); 
		return $result;
	}
	public function getRoomAttribute($room_type_id,$language_id)
	{ 
		$sql="usp_get_room_attribute  ".$room_type_id.",".$language_id;				
		$query = $this->dbmgr->query($sql);
		$result = $this->dbmgr->fetch_array_all($query); 
		
		return $result;
	}
	public function getHotelAttribute($hotel_id,$language_id)
	{ 
		$sql="usp_get_hotel_attribute  ".$hotel_id.",".$language_id;
		
		$query = $this->dbmgr->query($sql);
		$result = $this->dbmgr->fetch_array_all($query); 
		return $result;
	}
	public function searchHotelList($city_id,$district_id,$min_price,$max_price,
	$star,$keyword,$check_in_date,$check_out_date,
	$hotel_attribute,$room_attribute,$purchase_way,$language_id)
	{ 
		$arr = array("'" => "''");
		$keyword=strtr($keyword,$arr);
		$sql="usp_search_hotel $city_id,$district_id,$min_price,$max_price,$star,N'$keyword'," .
				"'$check_in_date','$check_out_date','$hotel_attribute','$room_attribute','$purchase_way',$language_id";
		
		$query = $this->dbmgr->query($sql);
		$result = $this->dbmgr->fetch_array_all($query); 
		return $result;
	}	
	public function insertHotelTransCheckInInfo($hotel_trans_id,$client_name,$country_id)
	{ 
		$arr = array("'" => "''");
		$client_name=strtr($client_name,$arr);
		
		$sql="usp_insert_hotel_trans_check_in_info $hotel_trans_id,N'$client_name',$country_id";
		
		$query = $this->dbmgr->query($sql);
		$result = $this->dbmgr->fetch_array_all($query); 
		return $result;
	}
	
	public function updateHotelTrans($code,$member_id,$room_no,$adult_count,$children_count,$pt_code,$pw_code,
					$client_name,$honorific_id,$email,$country_id,$contact_no,$hotel_show_id,
					$currency_id,$staff_id)
	{		
		
		$arr = array("'" => "''");
		$code=strtr($code,$arr);
		$pt_code=strtr($pt_code,$arr);
		$mobile_no=strtr($mobile_no,$arr);
		$pw_code=strtr($pw_code,$arr);
		$client_name=strtr($client_name,$arr);
		$email=strtr($email,$arr);
		$contact_no=strtr($contact_no,$arr);
		
		
		
		$sql="usp_update_hotel_trans '$code',$member_id,$room_no,$adult_count,$children_count,'$pt_code','$pw_code'," .
				" N'$client_name',$honorific_id,'$email',$country_id,'$contact_no',N'$hotel_show_id',$currency_id,$staff_id";

		$query = $this->dbmgr->query($sql);
		$result = $this->dbmgr->fetch_array($query); 
		return $result;
	}	


	public function searchHotelOrderByCondition($ref_no,$hotel_name,$status,$cotact_no,
									$trans_date_from,$trans_date_to,$client_name,$lang_id)
	{		
		
		$arr = array("'" => "''");
		$ref_no=strtr($ref_no,$arr);
		$hotel_name=strtr($hotel_name,$arr);
		$status=strtr($status,$arr);
		$cotact_no=strtr($cotact_no,$arr);
		$client_name=strtr($client_name,$arr);
		$trans_date_from=strtr($trans_date_from,$arr);
		$trans_date_to=strtr($trans_date_to,$arr);		
		
		$sql="usp_search_hotel_order_by_condition '$ref_no','$hotel_name','$status','$cotact_no','$trans_date_from','$trans_date_to', N'$client_name',$lang_id";
		$query = $this->dbmgr->query($sql);
		$result = $this->dbmgr->fetch_array_all($query); 
		return $result;
	}		
	
	public function searchRoomTypeByTrans($hotel_trans_id,$language_id)
	{ 
		$arr = array("'" => "''");
		$sql="usp_search_room_type_by_trans $hotel_trans_id,$language_id";
		
		$query = $this->dbmgr->query($sql);
		$result = $this->dbmgr->fetch_array_all($query); 
		return $result;
	}
	
	public function getHotelByCityDistrict($city_id,$district_id,$language_id)
	{ 
		$arr = array("'" => "''");
		$sql="usp_get_house_by_city_district $city_id,$district_id,$language_id";
		
		$query = $this->dbmgr->query($sql);
		$result = $this->dbmgr->fetch_array_all($query); 
		return $result;
	}
	
	/*
	 * Description:searh hotel list for cms
	 * Param:$district_id int
	 * Param:$name string64
	 * Param:$start int
	 * Param:$status char
	 * Param:$code string
	 * Param:$phone string
	 * Param:$lang_id int
	 * Return:array[][]
	 */
	public function searchHotelListForCms($district_id,$name,$star,$status,$code,$phone,$lang_id)
	{
		$sql="usp_cms_search_hotel $district_id,'$name',$star,'$status','$code','$phone',$lang_id";
		$query = $this->dbmgr->query($sql);
		$result = $this->dbmgr->fetch_array_all($query); 
		return $result;
	}
	
	/*
	 * Function Name:updateHotelDetails
	 * Description:update hotel details
	 * Param:$id int,
	 * Param:$district_id int,
	 * Param:$code varchar(8),
	 * Param:$phone varchar(32),
	 * Param:$star int,
	 * Param:$room_qty int,
	 * Param:$currency_id int,
	 * Param:$score decimal,
	 * Param:$rank int,
	 * Param:$status char(1),
	 * Param:$name nvarchar(128),
	 * Param:$description nvarchar(max),
	 * Param:$address nvarchar(256),
	 * Param:$website varchar(256),
	 * Param:$internet nvarchar(256),
	 * Param:$parking nvarchar(256),
	 * Param:$policy_check_in nvarchar(64),
	 * Param:$policy_check_out nvarchar(64),
	 * Param:$policy_cancel_booking nvarchar(1024),
	 * Param:$policy_add_bed nvarchar(2048),
	 * Param:$policy_pet nvarchar(256),
	 * Param:$policy_credit_card nvarchar(512),
	 * Param:$remark nvarchar(2048),
	 * Param:$terms nvarchar(2048),
	 * Param:$created_by int,
	 * Param:$language_id int
	 * Return:array[]
	 */
	 
	 public function updateHotelDetails($id,$district_id,$code,$phone,$star,$room_qty,$currency_id,
	 $score,$rank,$status,$name,$description,$address,$website,$internet,$parking,$policy_check_in,
	 $policy_check_out,$policy_cancel_booking,$policy_add_bed,$policy_pet,$policy_credit_card,
	 $remark,$terms,$created_by,$language_id)
	 {
	 	$code=parameter_filter($code);
	 	$name=parameter_filter($name);
	 	$description=parameter_filter($description);
	 	$address=parameter_filter($address);
	 	$website=parameter_filter($website);
	 	$internet=parameter_filter($internet);
	 	$parking=parameter_filter($parking);
	 	$policy_check_in=parameter_filter($policy_check_in);
	 	$policy_check_out=parameter_filter($policy_check_out);
	 	$policy_cancel_booking=parameter_filter($policy_cancel_booking);
	 	$policy_add_bed=parameter_filter($policy_add_bed);
	 	$policy_pet=parameter_filter($policy_pet);
	 	$policy_credit_card=parameter_filter($policy_credit_card);
	 	$remark=parameter_filter($remark);
	 	$terms=parameter_filter($terms);
	 	
	 	$sql="usp_cms_update_hotel $id,$district_id,'$code','$phone',$star,$room_qty,$currency_id,
	 		$score,$rank,'$status','$name','$description','$address','$website','$internet','$parking','$policy_check_in',
	 		'$policy_check_out','$policy_cancel_booking','$policy_add_bed','$policy_pet','$policy_credit_card',
		 	'$remark','$terms',$created_by,$language_id";
		 
		$query = $this->dbmgr->query($sql);
		$result = $this->dbmgr->fetch_array($query); 
		return $result;
	 }
	 
	 public function insertHotel($district_id,$code,$phone,$star,$room_qty,$currency_id,
	 $score,$rank,$status,$name,$description,$address,$website,$internet,$parking,$policy_check_in,
	 $policy_check_out,$policy_cancel_booking,$policy_add_bed,$policy_pet,$policy_credit_card,
	 $remark,$terms,$created_by,$language_id)
	 {
	   return	$this->updateHotelDetails(0,$district_id,$code,$phone,$star,$room_qty,$currency_id,
	 	$score,$rank,$status,$name,$description,$address,$website,$internet,$parking,$policy_check_in,
	 	$policy_check_out,$policy_cancel_booking,$policy_add_bed,$policy_pet,$policy_credit_card,
	 	$remark,$terms,$created_by,$language_id);
	 }
	 
	 /*
	  * Description:get all attribute with selected attribute for hotel
	  * Param:$hotel_id int
	  * Param:$lang_id int
	  */
	  
	  public function getHotelAttributeById($hotel_id,$lang_id)
	  {
	  	$sql="usp_get_attribute_by_hotel $hotel_id,$lang_id";
	  	$query = $this->dbmgr->query($sql);
		$result = $this->dbmgr->fetch_array_all($query); 
		return $result;
	  }
	 
 }
 
 $hotelMgr=HotelMgr::getInstance();
 $hotelMgr->dbmgr=$dbmgr;
 define('IN_TA_HOTEL', TRUE);
?>