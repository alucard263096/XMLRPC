<?php
 defined('IN_TA') or exit('Access Denied');
 defined('IN_TA_SHOW') or exit('Access Denied');
 
 $mgr=$showMgr;
 
 function test()
 {logger_mgr::logInfo("----->a");
 	return "test";
 }
 function searchHotShow($args){
 	global $mgr;
 	global $CONFIG;
 	if(trim($args["lang_id"])=="")
 	{
 		$args["lang_id"]=$CONFIG["lang_id"];
 	}		
 	if(trim($args["category_id"])=="")
 	{
 		$category_id=-1;
 	}
 	else
 	{
 		$category_id=$args["category_id"];
 	}		
 	if(trim($args["organizer_id"])=="")
 	{
 		$organizer_id=-1;
 	}
 	else
 	{
 		$organizer_id=$args["organizer_id"];
 	}		
 	if(trim($args["venue_id"])=="")
 	{
 		$venue_id=-1;
 	}
 	else
 	{
 		$venue_id=$args["venue_id"];
 	}		
 	if(trim($args["activity_id"])=="")
 	{
 		$aactivity_id=-1;
 	}
 	else
 	{
 		$aactivity_id=$args["activity_id"];
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
 	
 	//hard code activity_id == -1 get all activity
 	$rs=$mgr->searchHotShow($category_id,$args["purchase_way"],
	$city_id,$district_id,$organizer_id,$venue_id,-1,
	$args["keyword"],$args["image_type"],$args["lang_id"],$args["ipaddress"]);

	

	
	$activity= compareShow($rs,$args);

	  
	$page_activity=array();
	if($page_from==-1||$page_count==-1||$page_to==-1)
	{
		
		if($aactivity_id>0)
		{
			for($i=0;$i<count($activity);$i++)
			{
				if($activity[$i]["activity_id"]==$aactivity_id)
				{
					$page_activity=$activity[$i];
					break;
				}
			}  
		}
		else
		{
			$page_activity=$activity;
		}
	}
	else
	{
		if($aactivity_id==-1)
		{
			for($i=($page_from-1)*$page_count;$i<$page_to*$page_count;$i++)
			{
				if($i<count($activity))
				{
					$page_activity[]=$activity[$i];
				}
				else
				{
					break;
				}
			}  
		}
		else
		{
			$new_arr=array();
			$have=0;
			for($i=0;$i<count($activity);$i++)
			{
				if($aactivity_id==$activity[$i]["activity_id"])
				{
					$page_activity[]=$activity[$i];
					$have=1;
				}	
				else
				{
					$new_arr[]=$activity[$i];
				}	
			}
			for($i=($page_from-1)*$page_count;$i<$page_to*$page_count-$have;$i++)
			{
				if($i<count($new_arr))
				{
					$page_activity[]=$new_arr[$i];
				}
				else
				{
					break;
				}
			} 
			
		}
	}
 		if($page_count>0)
 		{
 			$ret=array();
 			$ret["total_count"]=floor((count($activity)-1)/$page_count+1);
 			$ret["activity_details"]=$page_activity;
 			return $ret;
 		}
 		else
 		{
 			return $page_activity;
 		}
 }
 
 /*Description:get show list by city id,activity id,district id
  * return:array[][]
  */
   function getHotShowByActivity($args){
 	global $mgr;
 	global $CONFIG;
 	if(trim($args["lang_id"])=="")
 	{
 		$args["lang_id"]=$CONFIG["lang_id"];
 	}		
 	if(trim($args["category_id"])=="")
 	{
 		$category_id=-1;
 	}
 	else
 	{
 		$category_id=$args["category_id"];
 	}		
 	if(trim($args["organizer_id"])=="")
 	{
 		$organizer_id=-1;
 	}
 	else
 	{
 		$organizer_id=$args["organizer_id"];
 	}		
 	if(trim($args["venue_id"])=="")
 	{
 		$venue_id=-1;
 	}
 	else
 	{
 		$venue_id=$args["venue_id"];
 	}		
 	if(trim($args["activity_id"])=="")
 	{
 		$aactivity_id=-1;
 	}
 	else
 	{
 		$aactivity_id=$args["activity_id"];
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
 		
 	//hard code activity_id == -1 get all activity
 	$rs=$mgr->searchHotShow($category_id,$args["purchase_way"],
	$city_id,$district_id,$organizer_id,$venue_id,$aactivity_id,
	$args["keyword"],$args["image_type"],$args["lang_id"]);
	 $activity= compareShow($rs);
	  
	  return $activity;
   }
 	function getShowDetails($args){
 	global $mgr;
 	global $CONFIG;
 	if(trim($args["lang_id"])=="")
 	{
 		$args["lang_id"]=$CONFIG["lang_id"];
 	}
 		$rs= $mgr->getShowDetails($args["show_id"],$args["lang_id"]);
 		$args["activity_id"]=$rs["activity_id"];
 		$args["city_id"]=$rs["city_id"];
 		$rs["activity_detail"]=searchHotShow($args);
 		
 		$rs["show_date_str"]=convertDatetime($args["lang_id"],$rs["show_date_str"]);
 		$rs["ticket_type_details"]=$mgr->getShowTicketType($args["show_id"],$args["lang_id"]);
 		$rs["area_coords"]=$mgr->getAreaByShow($args["show_id"],$args["lang_id"]);
 		return $rs;
 	} 
 	
    function getCinemaMovieDetailById($args,$activity_id){
		global $mgr;
		//print_r($args);
		if(count($args["venue_details"])>0){
			
			for($i=0;$i<count($args["venue_details"]);$i++)
				{
					for($p=0;$p<count($args["venue_details"][$i]["schedule_details"]);$p++){
						
						if(1==1||$args["venue_details"][$i]["schedule_details"][$p]["st_code"]!="TS"){
							$array_temp=array();
							$array_temp["scheduleID"]=$args["venue_details"][$i]["schedule_details"][$p]["show_id"];
							$array_temp["movieID"]=$activity_id;
							$array_temp["remain_ticket"]=$args["venue_details"][$i]["schedule_details"][$p]["remain_ticket"];
							$array_temp["cinemaID"]=$args["venue_details"][$i]["venue_id"];
							$array_temp["cinamaName"]=$args["venue_details"][$i]["venue_name"];
							$array_temp["houseName"]=$args["venue_details"][$i]["schedule_details"][$p]["house_name"];
							$array_temp["price"]=$args["venue_details"][$i]["schedule_details"][$p]["price"];
							$array_temp["priceDisplay"]=$args["venue_details"][$i]["schedule_details"][$p]["symbol"];
							$array_temp["serviceChargeDisplay"]=$args["venue_details"][$i]["schedule_details"][$p]["fee"];
							$array_temp["showDate"]=$args["venue_details"][$i]["schedule_details"][$p]["show_date"];
							$array[]=$array_temp;
						}
					}
				}
		}else{
			for($o=0;$o<count($args);$o++)
			{
				for($i=0;$i<count($args[$o]["venue_details"]);$i++)
				{
					for($p=0;$p<count($args[$o]["venue_details"][$i]["schedule_details"]);$p++){
						
						if(1==1||$args[$o]["venue_details"][$i]["schedule_details"][$p]["st_code"]!="TS"){
							$array_temp=array();
							$array_temp["scheduleID"]=$args[$o]["venue_details"][$i]["schedule_details"][$p]["show_id"];
							$array_temp["movieID"]=$args[$o]["activity_id"];
							$array_temp["remain_ticket"]=$args[$o]["venue_details"][$i]["schedule_details"][$p]["remain_ticket"];
							$array_temp["cinemaID"]=$args[$o]["venue_details"][$i]["venue_id"];
							$array_temp["cinemaName"]=$args[$o]["venue_details"][$i]["venue_name"];
							$array_temp["houseName"]=$args[$o]["venue_details"][$i]["schedule_details"][$p]["house_name"];
							$array_temp["price"]=$args[$o]["venue_details"][$i]["schedule_details"][$p]["price"];
							$array_temp["symbol"]=$args[$o]["venue_details"][$i]["schedule_details"][$p]["symbol"];
							$array_temp["fee"]=$args[$o]["venue_details"][$i]["schedule_details"][$p]["fee"];
							$array_temp["showDate"]=$args[$o]["venue_details"][$i]["schedule_details"][$p]["show_date"];
							$array_temp["fp_show_sign"]=$args[$o]["venue_details"][$i]["schedule_details"][$p]["fp_show_sign"];
							$array[]=$array_temp;
						}
					}
				}
			}
		}
		return $array;
	 }	
	 
	  function getCinemaMovieDetailAll($args){
	 	global $mgr;
		for($o=0;$o<count($args);$o++)
		{
			for($i=0;$i<count($args[$o]["venue_details"]);$i++)
			{
				for($p=0;$p<count($args[$o]["venue_details"][$i]["schedule_details"]);$p++){
					$array_temp=array();
					if($args[$o]["venue_details"][$i]["schedule_details"][$p]["remain_ticket"]>0){
						$array_temp["allowTicketing"]=1;
						
					}else{
						$array_temp["allowTicketing"]=0;
					}
					$array_temp["cinemaID"]=$args[$o]["venue_details"][$i]["venue_id"];
					$array_temp["freeSeating"]=$args[$o]["venue_details"][$i]["schedule_details"][$p]["st_code"];//
					$array_temp["houseName"]=$args[$o]["venue_details"][$i]["schedule_details"][$p]["house_name"];
					$array_temp["movieID"]=$args[$o]["activity_id"];
					$array_temp["price"]=$args[$o]["venue_details"][$i]["schedule_details"][$p]["price"];
					$array_temp["symbol"]=$args[$o]["venue_details"][$i]["schedule_details"][$p]["symbol"];
					$array_temp["scheduleID"]=$args[$o]["venue_details"][$i]["schedule_details"][$p]["show_id"];
					$array_temp["fee"]=$args[$o]["venue_details"][$i]["schedule_details"][$p]["fee"];
					$array_temp["showDate"]=$args[$o]["venue_details"][$i]["schedule_details"][$p]["show_date"];
					$array_temp["fp_show_sign"]=$args[$o]["venue_details"][$i]["schedule_details"][$p]["fp_show_sign"];
					$array[]=$array_temp;
				}
			}
		}
		return $array;
	 }		
 
    function compareShow($rs,$args)
    {global $mgr; 
     global $CONFIG;
    	 $activity=array();
	  $activity_id=0;
	 
	 	if(trim($args["lang_id"])=="")
	 	{
	 		$args["lang_id"]=$CONFIG["lang_id"];
	 	}
	  
		if(trim($args["city_id"])=="")
		{
			$city_id=-1;
		}
		else
		{
			$city_id=$args["city_id"];
		}	
	  
	  for($i=0;$i<count($rs);$i++)
	  {
	  	if($activity_id!=$rs[$i]["activity_id"])
	  	{
	  		$v=array();
	  		$v["duration"]=$rs[$i]["duration"];
	  		$v["rank"]=$rs[$i]["rank"];
	  		$v["ticket_date"]=$rs[$i]["ticket_date"];
	  		$v["score"]=$rs[$i]["score"];
	  		$v["activity_id"]=$rs[$i]["activity_id"];
	  		$v["name"]=$rs[$i]["name"];
	  		$v["discount"]=$rs[$i]["discount"];
	  		$v["website"]=$rs[$i]["website"];
	  		$v["name"]=$rs[$i]["name"];
	  		$v["introduction"]=$rs[$i]["introduction"];
	  		$v["artist"]=$rs[$i]["artist"];
	  		$v["director"]=$rs[$i]["director"];
	  		if($args["is_details"]=="1")
	  		{
	  			$v["description"]=$rs[$i]["description"];
	  		}
	  		$v["category_id"]=$rs[$i]["category_id"];
	  		$v["organizer_id"]=$rs[$i]["organizer_id"];
	  		$v["origanizer_name"]=$rs[$i]["origanizer_name"];
	  		$v["poster"]=$rs[$i]["poster"];
	  		$v["score_enabled"]=$rs[$i]["score_enabled"];
	  		$crs=$mgr->getActivityStartEndDate($v["activity_id"],$city_id);
	  		$v["start_date"]=$crs["start_date"];
	  		$v["end_date"]=$crs["end_date"];
	  		/*
	  		$schedult=array();
	  		for($j=0;$j<count($rs);$j++)
	  		{
	  			if($rs[$i]["activity_id"]==$rs[$j]["activity_id"])
	  			{
	  				$s=array();
	  				$s["show_id"]=$rs[$j]["show_id"];
	  				$s["show_date"]=$rs[$j]["show_date"];
	  				$s["price"]=$rs[$j]["price"];
	  				$s["member_price"]=$rs[$j]["member_price"];
	  				$s["fee"]=$rs[$j]["fee"];
	  				$s["symbol"]=$rs[$j]["symbol"];
	  				$s["house_id"]=$rs[$j]["house_id"];
	  				$s["house_name"]=$rs[$j]["house_name"];
	  				$s["venue_id"]=$rs[$j]["venue_id"];
	  				$s["venue_name"]=$rs[$j]["venue_name"];
	  				$s["district_id"]=$rs[$j]["district_id"];
	  				$s["district_name"]=$rs[$j]["district_name"];
	  				$s["ticket_type_id"]=$rs[$j]["ticket_type_id"];
	  				$s["ticket_type_name"]=$rs[$j]["ticket_type_name"];
	  				$s["remain_ticket"]=$rs[$j]["remain_ticket"];
	  				$schedult[]=$s;
	  			}
	  		}
			$v["schedult_details"]=$schedult;
			*/
			
	  		$venue=array();
	  		$district=array();
	  		$venue_id=0;
	  		for($j=0;$j<count($rs);$j++)
	  		{
	  			if($rs[$i]["activity_id"]==$rs[$j]["activity_id"])
	  			{
	  				if($venue_id!=$rs[$j]["venue_id"])
	  				{
	  				$s=array();
	  				
	  				$s["venue_id"]=$rs[$j]["venue_id"];
	  				$s["venue_name"]=$rs[$j]["venue_name"];
	  				$s["venue_address"]=$rs[$j]["venue_address"];
	  				$s["district_id"]=$rs[$j]["district_id"];
	  				$s["district_name"]=$rs[$j]["district_name"];
	  				$s["city_name"]=$rs[$j]["city_name"];
	  				$v["city_id"]=$rs[$j]["city_id"];
	  				$s["organizer_icon_path"]=$rs[$j]["organizer_icon_path"];
	  				$s["organizer_icon_alt"]=$rs[$j]["organizer_icon_alt"];
	  				
	  				$is_not_in=1;
	  				
	  				for($k=0;$k<count($district);$k++)
	  				{
	  					if($district[$k]["district_id"]==$rs[$j]["district_id"])
	  					{
	  						$is_not_in=0;
	  						break;
	  					}
	  				}
	  				
	  				if($is_not_in==1)
	  				{
	  					$d=array();
	  					$d["district_id"]=$rs[$j]["district_id"];
	  					$d["district_name"]=$rs[$j]["district_name"];
	  					$district[]=$d;
	  				}
	  				
	  				$schedule=array();
	  				$c_show_id=0;
	  				for($k=0;$k<count($rs);$k++)
	  				{
	  					if($rs[$j]["venue_id"]==$rs[$k]["venue_id"]&&$rs[$k]["activity_id"]==$rs[$j]["activity_id"])
	  					{
	  						if($c_show_id!=$rs[$k]["show_id"])
	  						{
		  						$cv=array();
		  						$crv=array();
		  						$cv["show_id"]=$rs[$k]["show_id"];
		  						if($args["get_area"]=="Y"&&$rs[$k]["st_code"]=="SS")
		  						{
		  							$cv["area_details"]=$mgr->getAreaByShow($rs[$k]["show_id"],$args["lang_id"]);
		  						}
				  				$cv["show_date"]=$rs[$k]["show_date"];
				  				$cv["fp_show_sign"]=$rs[$k]["fp_show_sign"]!=""?1:0;
				  				$cv["price"]=$rs[$k]["price"];
				  				$cv["member_price"]=$rs[$k]["member_price"];
				  				$cv["fee"]=$rs[$k]["fee"];
				  				$cv["symbol"]=$rs[$k]["symbol"];
				  				$cv["st_code"]=$rs[$k]["st_code"];
				  				$cv["house_id"]=$rs[$k]["house_id"];
				  				$cv["house_name"]=$rs[$k]["house_name"];
				  				$cv["ticket_type_id"]=$rs[$k]["ticket_type_id"];
				  				$cv["ticket_type_name"]=$rs[$k]["ticket_type_name"];
				  				$cv["remain_ticket"]=0+$rs[$k]["remain_ticket"];
				  				
				  				$crv["price"]=$rs[$k]["price"];
				  				$crv["member_price"]=$rs[$k]["member_price"];
				  				$crv["remain_ticket"]=0+$rs[$k]["remain_ticket"];
				  				$crv["symbol"]=$rs[$k]["symbol"];
				  				$crv["ticket_group_id"]=$rs[$k]["ticket_group_id"];
				  				$cv["price_list"][]=$crv;
				  				
		  						$schedule[]=$cv;
		  						$c_show_id=$rs[$k]["show_id"];
	  						}
	  						else
	  						{
				  				$schedule[count($schedule)-1]["price"].="/".$rs[$k]["price"];
				  				$schedule[count($schedule)-1]["member_price"].="/".$rs[$k]["member_price"];
				  				$schedule[count($schedule)-1]["remain_ticket"]+=$rs[$k]["remain_ticket"];
				  				
		  						$crv=array();
				  				$crv["price"]=$rs[$k]["price"];
				  				$crv["member_price"]=$rs[$k]["member_price"];
				  				$crv["remain_ticket"]=$rs[$k]["remain_ticket"];
				  				$crv["ticket_group_id"]=$rs[$k]["ticket_group_id"];
				  				$crv["symbol"]=$rs[$k]["symbol"];
				  				$schedule[count($schedule)-1]["price_list"][]=$crv;
				  				
	  						}
	  					}
	  				}
	  				$s["schedule_details"]=$schedule;
	  				$venue[]=$s;
	  				$venue_id=$rs[$j]["venue_id"];
	  				}
	  			}
	  		}
			$v["venue_details"]=$venue;
			$v["district_details"]=$district;
			
			
	  		$str="";
	  		$activity[]=$v;
	  		
	  		$activity_id=$rs[$i]["activity_id"];
	  		
	  	}
	  }
	  return $activity;
    }
 
?>