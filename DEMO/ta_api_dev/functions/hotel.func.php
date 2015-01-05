<?php

 defined('IN_TA') or exit('Access Denied');
 defined('IN_TA_HOTEL') or exit('Access Denied');
 
 $mgr=$hotelMgr;

 
 
 function getHotelDetail($args){
 	global $mgr; 	
 	global $CONFIG;
 	if(trim($args["lang_id"])=="")
 	{
 		$args["lang_id"]=$CONFIG["lang_id"];
 	}
 	$rsHotel=$mgr->getHotelDetail($args["hotel_id"],$args["lang_id"]); 	
 	$rsHotel["all_images"]=getHotelImage($args);
 	$rsHotel["hotel_attribute"]=getHotelAttribute($args);	
	
 	return $rsHotel;
 }
 
 function getRoomType($args){
 	global $mgr;  	
 	global $CONFIG;
 	if(trim($args["lang_id"])=="")
 	{
 		$args["lang_id"]=$CONFIG["lang_id"];
 	}
 	$getHotelRoomType=$mgr->getHotelRoomType(
							$args["hotel_id"],$args["check_in_date"],$args["check_out_date"],
							$args["purchase_way"],$args["lang_id"]);
	
 		for($i=0;$i<count($getHotelRoomType);$i++){			
 		 		
			$getHotelRoomType[$i]["room_type_show_date_detail"]=$mgr->getHotelRoomTypeByDate(
							$args["hotel_id"],$args["check_in_date"],$args["check_out_date"],
							$getHotelRoomType[$i]["room_type_id"],
							$args["purchase_way"],$args["lang_id"]);
			$getHotelRoomType[$i]["room_attribute"]=$mgr->getRoomAttribute($getHotelRoomType[$i]["room_type_id"],$args["lang_id"]);
			$getHotelRoomType[$i]["bed_type"]=$mgr->getHotelBedType($getHotelRoomType[$i]["room_type_id"],$args["lang_id"]);
			$getHotelRoomType[$i]["room_image"]=$mgr->getRoomImage($getHotelRoomType[$i]["room_type_id"],$args["lang_id"]);
 		}
 		
 		$arr=sortIdTopInArray($getHotelRoomType,$args["room_type_id"],"room_type_id");
 		return $arr;
 }
 
 
  function getHotelImage($args){
 	global $mgr;  	
	global $CONFIG;
 	if(trim($args["lang_id"])=="")
 	{
 		$args["lang_id"]=$CONFIG["lang_id"];
 	}
	$HotelImageType=$mgr->getHoteImageType($args["hotel_id"],$args["lang_id"]);
	
		 	
 		for($i=0;$i<count($HotelImageType);$i++){
 		
 			$HotelImageType[$i]["image_details"]=$mgr->getHoteImageId($args["hotel_id"],$HotelImageType[$i]["image_type_id"],$args["lang_id"]); 
 			 			
 		} 	
 		
 		return $HotelImageType;
 }
 
 
 function getHotelAttribute($args){
 	global $mgr;  	
 		
	global $CONFIG;
 	if(trim($args["lang_id"])=="")
 	{
 		$args["lang_id"]=$CONFIG["lang_id"];
 	} 
	$rsHotelAttributeType=$mgr->getHotelAttributeType($args["hotel_id"],$args["lang_id"]);
		$hotel_attr=array();
 
 		for($i=0;$i<count($rsHotelAttributeType);$i++){
			$rsHotelAttributeType[$i]["attribute_details"]=$mgr->getHotelAttrTypeAttr($args["hotel_id"],$rsHotelAttributeType[$i]["attribute_type_id"],$args["lang_id"]);
 		}
 		
 		return $rsHotelAttributeType;
 }  
 
 function searchHotelList($args){
 	global $mgr;  	
 	global $CONFIG;
 	if(trim($args["lang_id"])=="")
 	{
 		$args["lang_id"]=$CONFIG["lang_id"];
 	}
 	if(trim($args["min_price"])=="")
 	{
 		$min_price=-1;
 	}
 	else
 	{
 		$min_price=$args["min_price"];
 	}		
 	if(trim($args["max_price"])=="")
 	{
 		$max_price=-1;
 	}
 	else
 	{
 		$max_price=$args["max_price"];
 	}		
 	if(trim($args["star"])=="")
 	{
 		$star=-1;
 	}
 	else
 	{
 		$star=$args["star"];
 	}		
 	
 	if(trim($args["page_from"])=="")
 	{
 		$page_from=-1;
 	}
 	else
 	{
 		$page_from=$args["page_from"];
 	}	
 	//	$page_from=1;
 	if(trim($args["page_to"])=="")
 	{
 		$page_to=-1;
 	}
 	else
 	{
 		$page_to=$args["page_to"];
 	}	
 	//$page_to=1;
 	if(trim($args["page_count"])=="")
 	{
 		$page_count=-1;
 	}
 	else
 	{
 		$page_count=$args["page_count"];
 	}	
 	//$page_count=5;
 	
 	
 	
 	if(trim($args["district_id"])=="")
 	{
 		$district_id=-1;
 	}
 	else
 	{
 		$district_id=$args["district_id"];
 	}	
 	
 	if(trim($args["city_id"])=="")
 	{
 		$city_id=-1;
 	}
 	else
 	{
 		$city_id=$args["city_id"];
 	}


	$rs=$mgr->searchHotelList($city_id,$district_id,$min_price,$max_price,
	$star,$args["keyword"],$args["check_in_date"],$args["check_out_date"],
	$args["attribute"],'',$args["purchase_way"],$args["lang_id"]); 	
	
	
	$hotel_details=array();
	$hotel_id=0;
	logger_mgr::logInfo("result:".count($rs));
	for($i=0;$i<count($rs);$i++)
	{
		if($hotel_id!=$rs[$i]["hotel_id"])
		{
			$hotel=array();
			$hotel["hotel_id"]=$rs[$i]["hotel_id"];
			$hotel["code"]=$rs[$i]["code"];
			$hotel["symbol"]=$rs[$i]["symbol"];
			$hotel["district_id"]=$rs[$i]["district_id"];
			$hotel["city_id"]=$rs[$i]["city_id"];
			$hotel["phone"]=$rs[$i]["phone"];
			$hotel["rank"]=$rs[$i]["rank"];
			$hotel["room_qty"]=$rs[$i]["room_qty"];
			$hotel["score"]=$rs[$i]["score"];
			$hotel["star"]=$rs[$i]["star"];
			$hotel["address"]=$rs[$i]["address"];
			$hotel["name"]=$rs[$i]["name"];
			$hotel["website"]=$rs[$i]["website"];
			
			
			$room_type=array();
			for($j=0;$j<count($rs);$j++)
			{
				if($rs[$i]["hotel_id"]==$rs[$j]["hotel_id"])
				{
					if(checkIdInArray($room_type,"room_type_id",$rs[$j]["room_type_id"])==false)
					{
						$at=array();
						
						$at["room_type_id"]=$rs[$j]["room_type_id"];
						$at["base_price"]=$rs[$j]["base_price"];
						$at["qty"]=$rs[$j]["qty"];
						$at["room_type_id"]=$rs[$j]["room_type_id"];
						$at["max_head_count"]=$rs[$j]["max_head_count"];
						$at["name"]=$rs[$j]["room_type_name"];
						$at["price"]=$rs[$j]["price"];
						$at["member_price"]=$rs[$j]["member_price"];
						
						$room_type[]=$at;
					}
				}
			}
			$hotel["room_details"]=$room_type;
			$hotel_details[]=$hotel;
	  		$hotel_id=$rs[$i]["hotel_id"];
		}
	}
	
	if($page_from==-1||$page_count==-1||$page_to==-1)
	{
		$page_hotel=$hotel_details;
	}
	else
	{
		for($i=($page_from-1)*$page_count;$i<$page_to*$page_count;$i++)
		{
			if($i<count($hotel_details))
			{
				$page_hotel[]=$hotel_details[$i];
			}
			else
			{
				break;
			}
		}  
	}
	
	
	for($i=0;$i<count($page_hotel);$i++)
	{
		$rss=$mgr->getHotelRoomAttributeOption($page_hotel[$i]["hotel_id"],$args["lang_id"]);
		$page_hotel[$i]["room_attribute_option"]=$rss;
		
		$rss=$mgr->getHotelAttribute($page_hotel[$i]["hotel_id"],$args["lang_id"]);
		$page_hotel[$i]["hotel_attribute"]=$rss;
		
		for($j=0;$j<count($page_hotel[$i]["room_details"]);$j++)
		{
			$rss=$mgr->getRoomAttribute($page_hotel[$i]["room_details"][$j]["room_type_id"],$args["lang_id"]);
			$page_hotel[$i]["room_details"][$j]["room_type_attribute"]=$rss;
			$rss=$mgr->getHotelBedType($page_hotel[$i]["room_details"][$j]["room_type_id"],$args["lang_id"]);
			$page_hotel[$i]["room_details"][$j]["bed_type"]=$rss;
		}
	}
 		if($page_count>0)
 		{
 			$ret=array();
 			$ret["total_count"]=floor((count($hotel_details)-1)/$page_count+1);
 			$ret["hotel_list"]=$page_hotel;
 			logger_mgr::logInfo("result:"."aa:".count($ret));
 			return $ret;
 		}
 		else
 		{
 			foreach ( $page_hotel as $item ) 
 			{
       			logger_mgr::logInfo($item);
			}
 			logger_mgr::logInfo("result:"."bb:".count($page_hotel));
 			return $page_hotel;
 		}
	
 }

 
 
function createBedTypeShowListString($bed_type_list,$show_list)
{
	$str="";
	$arr=explode(',',$bed_type_list);
	
	for($i=0;$i<count($arr);$i++)
	{
		$bed_type=$arr[$i];
		if(trim($bed_type)!="")
		{
			$brr=explode(',',$show_list);
			for($j=0;$j<count($brr);$j++)
			{
				$show=$brr[$j];
				if(trim($show)!="")
				{
					$str.="$show,$bed_type,;";
				}
			}
		}
	}
	return $str;
}

 function updateHotelBookingPage($args){ 
 	global $mgr;
	logger_mgr::logInfo("check in info :".$args["check_in_info"]);
 	$hotel_detail=createBedTypeShowListString($args["bed_type"],$args["hotel_show_id"]);
 		
 	$retrun["result_code"]=1;
 	$mgr->dbmgr->begin_trans();
 	
	$rs=$mgr->updateHotelTrans(
		$args["code"],
		$args["member_id"],
		$args["room_no"],
		$args["adult_count"],
		$args["children_count"],
		$args["pt_code"],
		$args["pw_code"],
		$args["client_name"],
		$args["honorific_id"],
		$args["email"],
		$args["country_id"],
		$args["contact_no"],
		$hotel_detail,
		$args["currency_id"],
		$args["staff_id"]);
		
			
	logger_mgr::logInfo("result:".$rs["result"]);
		
	
				
		if($rs["result"] == 'Y'){
			$retrun["result_code"]=0;
			$retrun["hotel_trans_id"]=$rs["hotel_trans_id"];
			$retrun["ref_no"]=$rs["ref_no"];
			$check_arr=explode("<!@-+@!>",$args["check_in_info"]);
			for($i=0;$i<count($check_arr);$i++)
			{
				if(trim($check_arr[$i])!="")
				{
					$client=explode("()^_^()",$check_arr[$i]);
					$mgr->insertHotelTransCheckInInfo($rs["hotel_trans_id"],$client[0],$client[1]);
				}
			}
		}		
 		$mgr->dbmgr->commit_trans();
		return $retrun;		
 }
 
 function getHotelByCityDistrict($args){
 	global $mgr;  	
 	global $CONFIG;
 	if(trim($args["lang_id"])=="")
 	{
 		$args["lang_id"]=$CONFIG["lang_id"];
 	}	
 	if(trim($args["district_id"])=="")
 	{
 		$district_id=-1;
 	}
 	else
 	{
 		$district_id=$args["district_id"];
 	}	
 	
 	if(trim($args["city_id"])=="")
 	{
 		$city_id=-1;
 	}
 	else
 	{
 		$city_id=$args["city_id"];
 	}	
 		
	 
	$rsHotelAttributeType=$mgr->getHotelByCityDistrict($city_id,$district_id,$args["lang_id"]);
		
 	return $rsHotelAttributeType;
 }
 
 function searchHotelOrderByCondition($args){
 	global $mgr; 
	global $CONFIG;
 	if(trim($args["lang_id"])=="")
 	{
 		$args["lang_id"]=$CONFIG["lang_id"];
 	}
	
	$rsHotelOrder=$mgr->searchHotelOrderByCondition($args["ref_no"],$args["hotel_name"],$args["status"],$args["cotact_no"],
						$args["trans_date_from"],$args["trans_date_to"],$args["client_name"],$args["lang_id"]);
	
	
	for($i=0;$i<count($rsHotelOrder);$i++){

			$rsHotelOrder[$i]["room_type"]=$mgr->searchRoomTypeByTrans($rsHotelOrder[$i]["hotel_trans_id"],$args["lang_id"]);
				
				
	}
 	return $rsHotelOrder;
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

function searchHotelListForCms($args)
{global $mgr;
	logger_mgr::logInfo($args);
	$district_id=isset($args['district_id'])==false?0:$args['district_id'];
	$name=isset($args['name'])==false?'':$args['name'];
	$star=isset($args['star'])==false?0:$args['star'];
	$status=isset($args['status'])==false?'':$args['status'];
	$code=isset($args['code'])==false?'':$args['code'];
	$phone=isset($args['phone'])==false?'':$args['phone'];
	$lang_id=isset($args['lang_id'])==false?1:$args['lang_id'];
	
	
	return $mgr->searchHotelListForCms($district_id,$name,$star,$status,$code,$phone,$lang_id);
}

function insertHotel($args)
{global $mgr;
	//$id=isset($args['id'])==false?0:$args['id'];
	$arr = array("'" => "''");
	/*for($i=0;$i<count($args);$i++)
	{
		$args[$i]=strtr($args[$i],$arr);
	}*/
	global $CONFIG;
 	if(trim($args["lang_id"])=="")
 	{
 		$args["lang_id"]=$CONFIG["lang_id"];
 	}
	 return $mgr->insertHotel($args['district_id'],$args['code'],$args['phone'],$args['star'],$args['room_qty'],$args['currency_id'],
	 $args['score'],$args['rank'],$args['status'],$args['name'],$args['description'],$args['address'],$args['website'],$args['internet'],$args['parking'],$args['policy_check_in'],
	 $args['policy_check_out'],$args['policy_cancel_booking'],$args['policy_add_bed'],$args['policy_pet'],$args['policy_credit_card'],
	 $args['remark'],$args['terms'],$args['created_by'],$args['lang_id']);
	
}
 
function updateHotel($args)
{global $mgr;
	
	$arr = array("'" => "''");
	/*for($i=0;$i<count($args);$i++)
	{
		$args[$i]=strtr($args[$i],$arr);
	}*/
	global $CONFIG;
 	if(trim($args["lang_id"])=="")
 	{
 		$args["lang_id"]=$CONFIG["lang_id"];
 	}
	$id=isset($args['id'])==false?0:$args['id'];
	 return $mgr->updateHotelDetails($id,$args['district_id'],$args['code'],$args['phone'],$args['star'],$args['room_qty'],$args['currency_id'],
	 $args['score'],$args['rank'],$args['status'],$args['name'],$args['description'],$args['address'],$args['website'],$args['internet'],$args['parking'],$args['policy_check_in'],
	 $args['policy_check_out'],$args['policy_cancel_booking'],$args['policy_add_bed'],$args['policy_pet'],$args['policy_credit_card'],
	 $args['remark'],$args['terms'],$args['created_by'],$args['lang_id']);
} 

/*
 * Function:getHotelAttribute
 * Param:$hotel_id int
 * Param:$lang_id int
 * Return:Array[][]
 */
function getHotelAttributeById($args)
{global $mgr;
	global $CONFIG;
 	if(trim($args["lang_id"])=="")
 	{
 		$args["lang_id"]=$CONFIG["lang_id"];
 	}
	return $mgr->getHotelAttributeById($args['hotel_id'],$args['lang_id']);
}

?>