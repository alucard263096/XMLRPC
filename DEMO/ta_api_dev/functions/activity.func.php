<?php
 defined('IN_TA') or exit('Access Denied');
 defined('IN_TA_ACTIVITY') or exit('Access Denied');
 
 $mgr=$activityMgr;
 function searchActivityByName($args){
 	global $mgr;
 	global $CONFIG;
 	if(trim($args["lang_id"])=="")
 	{
 		$args["lang_id"]=$CONFIG["lang_id"];
 	}
 	if($args["city_id"]=="")
 	{
 		$args["city_id"]=-1;
 	}
 	if($args["category_id"]=="")
 	{
 		$args["category_id"]=-1;
 	}
 	return $mgr->searchActivityByName($args["keyword"],$args["city_id"],$args["category_id"],$args["lang_id"]);
 }
 
 function test()
 {
 	return "test";
 }
 
 function getHotEvent($args){
 	global $mgr;
 	global $CONFIG;
 	if(trim($args["category_id"])=="")
 	{
 		$category_id=-1;
 	}
 	else
 	{
 		$category_id=$args["category_id"];
 	}	
 	if(trim($args["lang_id"])=="")
 	{
 		$args["lang_id"]=$CONFIG["lang_id"];
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
 		$activity_id=-1;
 	}
 	else
 	{
 		$activity_id=$args["activity_id"];
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
 		
 	$rs=$mgr->getHotEvent($category_id,$args["purchase_way"],
	$city_id,$district_id,$args["image_type"],$args["lang_id"]);
	  $activity=array();
	  $activity_id=0;
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
	  		$v["category_id"]=$rs[$i]["category_id"];
	  		$v["organizer_id"]=$rs[$i]["organizer_id"];
	  		$v["origanizer_name"]=$rs[$i]["origanizer_name"];
	  		$v["poster"]=$rs[$i]["poster"];
	  		$v["attendance"]=$rs[$i]["attendance"];
	  		$v["city_id"]=$rs[$i]["city_id"];
	  		$v["district_id"]=$rs[$i]["district_id"];
	  		$activity[]=$v;
	  		
	  		$activity_id=$rs[$i]["activity_id"];
	  	}
	  }
 	return $activity;
 }
 function getHotEventSortAttendance($args)
 {
 	$rs=getHotEvent($args);
 	
 	//print_r($rs);attendance
 	$rs=sortByMinMax($rs,"attendance");
 	$rss=array();
 	$c=0;
 	for($i=0;$i<count($rs)&&$i<9;$i++)
 	{
 		$rss[]=$rs[$i];
 	}
 	return $rss;
 }
 function getHotEventBanner($args)
 {
 	$rs=getHotEvent($args);
 	//print_r($rs);
 	$rss=array();
 	$c=0;
 	for($i=0;$i<count($rs);$i++)
 	{
 		if($c<=10&&trim($rs[$i]["poster"])!="")
 		{
 			$rss[]=$rs[$i];
 			$c++;
 		}
 		if($c>10)
 		{
 			break;
 		}
 	}
 	return $rss;
 }
 
  /*
  * Description:search venue list which have shows
  * param:$args array,search condition
  * return:array
  * author:leolu
  */
  
  function searchHotVenue($args){
 	global $mgr;
 	global $CONFIG;
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
 	if(trim($args["lang_id"])=="")
 	{
 		$args["lang_id"]=$CONFIG["lang_id"];
 	}	
 	if(trim($args["venue_id"])=="")
 	{
 		$venue_id=-1;
 		$filter_venue_id=-1;
 	}
 	else
 	{
 		$venue_id=$args["venue_id"];
 		$filter_venue_id=$venue_id;
 	}		
 	if(trim($args["activity_id"])=="")
 	{
 		$activity_id=-1;
 	}
 	else
 	{
 		$activity_id=$args["activity_id"];
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
 		
 	$rs=$mgr->getHotVenue($category_id,$args["purchase_way"],
	$city_id,$district_id,-1,$venue_id,$activity_id,
	$args["keyword"],$args["image_type"],$args["lang_id"]);
	 
	logger_mgr::logDebug("finished got data from databse"); 
	$venue=array();
	$venue_id=0; 
	$has_venue=false;
	 	
	for($i=0;$i<count($rs);$i++)
	{
		foreach($venue as $exist_venue)
		{
			if($exist_venue['venue_id']==$rs[$i]["venue_id"])
			{
				$has_venue=true;
			}
		}
	
		if($has_venue==false)
		{
			logger_mgr::logDebug("venue_id:".$rs[$i]["venue_id"]);
			$s=array();
	  		$s["venue_id"]=$rs[$i]["venue_id"];
	  		$s["venue_name"]=$rs[$i]["venue_name"];
	  		$s["district_id"]=$rs[$i]["district_id"];
	  		$s["district_name"]=$rs[$i]["district_name"];
	  		$s['organizer_id']=$rs[$i]['organizer_id'];
	  		$s['organizer_name']=$rs[$i]['organizer_name'];
	  		$s['poster']=$rs[$i]['poster'];
	  		$s['score']=$rs[$i]['score'];
	  		$s['rank']=$rs[$i]['rank'];
	  		
	  		$activity=array();
	  		for($j=0;$j<count($rs);$j++)
	  		{
	  			$exist_activity=false;
	  			foreach($activity as $item)
	  			{
	  				if($item['activity_id']==$rs[$j]["activity_id"])
	  					$exist_activity=true;
	  			}
	  			
	  			if($rs[$i]["venue_id"]==$rs[$j]['venue_id']&&$exist_activity==false)
	  			{
	  				$v=array();
	  				$v["duration"]=$rs[$j]["duration"];
	  				$v["rank"]=$rs[$j]["rank"];
	  				$v["ticket_date"]=$rs[$j]["ticket_date"];
	  				$v["score"]=$rs[$j]["score"];
	  				$v["activity_id"]=$rs[$j]["activity_id"];
	  				$v["name"]=$rs[$j]["name"];
	  				$v["discount"]=$rs[$j]["discount"];
	  				$v["website"]=$rs[$j]["website"];
	  				$v["name"]=$rs[$j]["name"];
	  				$v["category_id"]=$rs[$j]["category_id"];
	  				
	  				$schedule=array();
	  				$c_show_id=0;
	  				for($k=0;$k<count($rs);$k++)
	  				{
	  					if($rs[$i]["venue_id"]==$rs[$k]["venue_id"]&&$rs[$k]["activity_id"]==$rs[$j]["activity_id"])
	  					{
	  						
	  						if($c_show_id!=$rs[$k]["show_id"])
	  						{
		  						$cv=array();
		  						$cv["show_id"]=$rs[$k]["show_id"];
				  				$cv["show_date"]=$rs[$k]["show_date"];
				  				$cv["price"]=$rs[$k]["price"];
				  				$cv["member_price"]=$rs[$k]["member_price"];
				  				$cv["fee"]=$rs[$k]["fee"];
				  				$cv["symbol"]=$rs[$k]["symbol"];
				  				$cv["house_id"]=$rs[$k]["house_id"];
				  				$cv["house_name"]=$rs[$k]["house_name"];
				  				$cv["ticket_type_id"]=$rs[$k]["ticket_type_id"];
				  				$cv["ticket_type_name"]=$rs[$k]["ticket_type_name"];
				  				$cv["remain_ticket"]=$rs[$k]["remain_ticket"];
		  						$schedule[]=$cv;
		  						$c_show_id=$rs[$k]["show_id"];
	  						}
	  						else
	  						{
				  				$schedule[count($schedule)-1]["price"].="/".$rs[$k]["price"];
				  				$schedule[count($schedule)-1]["member_price"].="/".$rs[$k]["member_price"];
	  						}
	  					}
	  				}
	  				$v["schedule_details"]=$schedule;
	  				$activity[]=$v;
	  			}
	  			$exist_activity=false;
	  		}
	  		$s["activity_details"]=$activity;
			
			
	  		$str="";
	  		$venue[]=$s;
	  		
	  		$venue_id=$rs[$i]["venue_id"];
		}
		$has_venue=false;
	}
	
	$page_venue=array();
	$filter_array=array();
	logger_mgr::logDebug("organizer id".$organizer_id);
	
	if($organizer_id!=-1)
	{
		for($i=0;$i<count($venue);$i++)
		{
			if($venue[$i]['organizer_id']==$organizer_id)
			{
				array_unshift($filter_array,$venue[$i]);
			}
			/*else
			{
				$filter_array[]=$venue[$i];
			}*/
		}
	}
	else if($filter_venue_id!=-1)
	{
		$filter_array=array();
		for($i=0;$i<count($venue);$i++)
		{
			logger_mgr::logDebug($venue[$i]['venue_id'].":".$filter_venue_id); 
			
			if($venue[$i]['venue_id']==$filter_venue_id)
			{
				array_unshift($filter_array,$venue[$i]);
			}
			else
			{
				$filter_array[]=$venue[$i];
			}
		}
	}
	else
	{
		$filter_array=array();
		for($i=0;$i<count($venue);$i++)
		{
			$filter_array[]=$venue[$i];
		}
	}
	
	if($page_from==-1||$page_count==-1||$page_to==-1)
	{
		return array("total_count"=>ceil(count($filter_array)/$page_count),"venue_details"=>$filter_array);
	}
	else
	{
		for($i=($page_from-1)*$page_count;$i<$page_to*$page_count;$i++)
		{
			if($i<count($filter_array))
			{
				$page_venue[]=$filter_array[$i];
			}
		}  
	}
	return array("total_count"=>ceil(count($filter_array)/$page_count),"venue_details"=>$page_venue);
 }
 
  /*
  * Description:search activity list which have shows by venue
  * param:$args array,search condition
  * return:array
  * author:leolu
  */
  
  function searchActivityByVenue($args){
 	global $mgr;
 	global $CONFIG;
 	$category_id=trim($args["category_id"])==""?-1:$args["category_id"];
 	$organizer_id=trim($args["organizer_id"])==""?-1:$args["organizer_id"];
 	$venue_id=trim($args["venue_id"])==""?-1:$args["venue_id"];
 	$activity_id=trim($args["activity_id"])==""?-1:$args["activity_id"];
 	$page_from=trim($args["page_from"])==""?-1:$args["page_from"];
 	$page_to=trim($args["page_to"])==""?-1:$args["page_to"];
 	$page_count=trim($args["page_count"])==""?-1:$args["page_count"];
 	$district_id=trim($args["district_id"])==""?-1:$args["district_id"];
 	$city_id=trim($args["city_id"])==""?-1:$args["city_id"];
 	if(trim($args["lang_id"])=="")
 	{
 		$args["lang_id"]=$CONFIG["lang_id"];
 	}
 	$rs=$mgr->getHotVenue($category_id,$args["purchase_way"],
	$city_id,$district_id,-1,$venue_id,-1,
	$args["keyword"],$args["image_type"],$args["lang_id"]);
	 
	logger_mgr::logDebug("finished got data from databse"); 
	$venue=array();
	$venue_id=0; 
	$has_venue=false;
	 	
	for($i=0;$i<count($rs);$i++)
	{
		foreach($venue as $exist_venue)
		{
			if($exist_venue['venue_id']==$rs[$i]["venue_id"])
			{
				$has_venue=true;
			}
		}
	
		if($has_venue==false)
		{
			logger_mgr::logDebug("venue_id:".$rs[$i]["venue_id"]);
			$s=array();
	  		$s["venue_id"]=$rs[$i]["venue_id"];
	  		$s["venue_name"]=$rs[$i]["venue_name"];
	  		$s["district_id"]=$rs[$i]["district_id"];
	  		$s["district_name"]=$rs[$i]["district_name"];
	  		$s['organizer_id']=$rs[$i]['organizer_id'];
	  		$s['organizer_name']=$rs[$i]['organizer_name'];
	  		$s['poster']=$rs[$i]['poster'];
	  		$s['score']=$rs[$i]['score'];
	  		$s['rank']=$rs[$i]['rank'];
	  		
	  		$activity=array();
	  		for($j=0;$j<count($rs);$j++)
	  		{
	  			$exist_activity=false;
	  			foreach($activity as $item)
	  			{
	  				if($item['activity_id']==$rs[$j]["activity_id"])
	  					$exist_activity=true;
	  			}
	  			
	  			if($rs[$i]["venue_id"]==$rs[$j]['venue_id']&&$exist_activity==false)
	  			{
	  				$v=array();
	  				$v["duration"]=$rs[$j]["duration"];
	  				$v["rank"]=$rs[$j]["rank"];
	  				$v["ticket_date"]=$rs[$j]["ticket_date"];
	  				$v["score"]=$rs[$j]["score"];
	  				$v["activity_id"]=$rs[$j]["activity_id"];
	  				$v["name"]=$rs[$j]["name"];
	  				$v["discount"]=$rs[$j]["discount"];
	  				$v["website"]=$rs[$j]["website"];
	  				$v["name"]=$rs[$j]["name"];
	  				$v["category_id"]=$rs[$j]["category_id"];
	  				$v['activity_poster']=$rs[$j]['activity_poster'];
	  				
	  				$schedule=array();
	  				for($k=0;$k<count($rs);$k++)
	  				{
	  					if($rs[$i]["venue_id"]==$rs[$k]["venue_id"]&&$rs[$k]["activity_id"]==$rs[$j]["activity_id"])
	  					{
	  						$cv=array();
	  						
	  						$cv["show_id"]=$rs[$k]["show_id"];
			  				$cv["show_date"]=$rs[$k]["show_date"];
			  				$cv["price"]=$rs[$k]["price"];
			  				$cv["member_price"]=$rs[$k]["member_price"];
			  				$cv["fee"]=$rs[$k]["fee"];
			  				$cv["symbol"]=$rs[$k]["symbol"];
			  				$cv["house_id"]=$rs[$k]["house_id"];
			  				$cv["house_name"]=$rs[$k]["house_name"];
			  				$cv["ticket_type_id"]=$rs[$k]["ticket_type_id"];
			  				$cv["ticket_type_name"]=$rs[$k]["ticket_type_name"];
			  				$cv["remain_ticket"]=$rs[$k]["remain_ticket"];
	  						
	  						$schedule[]=$cv;
	  					}
	  				}
	  				$v["schedule_details"]=$schedule;
	  				$activity[]=$v;
	  			}
	  			$exist_activity=false;
	  		}
	  		$s["activity_details"]=$activity;
			
			
	  		$str="";
	  		$venue[]=$s;
	  		
	  		$venue_id=$rs[$i]["venue_id"];
		}
		$has_venue=false;
	}
	
	$page_venue=array();
	/*$filter_array=array();
	logger_mgr::logDebug("organizer id".$organizer_id);
	
	if($organizer_id!=-1)
	{
		for($i=0;$i<count($venue);$i++)
		{
			if($venue[$i]['organizer_id']==$organizer_id)
			{
				array_unshift($filter_array,$venue[$i]);
			}
		}
	}
	else if($filter_venue_id!=-1)
	{
		$filter_array=array();
		for($i=0;$i<count($venue);$i++)
		{
			logger_mgr::logDebug($venue[$i]['venue_id'].":".$filter_venue_id); 
			
			if($venue[$i]['venue_id']==$filter_venue_id)
			{
				array_unshift($filter_array,$venue[$i]);
			}
			else
			{
				$filter_array[]=$venue[$i];
			}
		}
	}
	else
	{
		$filter_array=array();
		for($i=0;$i<count($venue);$i++)
		{
			$filter_array[]=$venue[$i];
		}
	}
	*/
	if($page_from==-1||$page_count==-1||$page_to==-1)
	{
		return array("total_count"=>ceil(count($venue)/$page_count),"venue_details"=>$venue);
	}
	else
	{
		for($i=($page_from-1)*$page_count;$i<$page_to*$page_count;$i++)
		{
			if($i<count($venue))
			{
				$page_venue[]=$venue[$i];
			}
		}  
	}
	return array("total_count"=>ceil(count($venue)/$page_count),"venue_details"=>$page_venue);
 }
 
 /*
  * description:Get activity details info
  * param:$activity_id int
  * param:$language_id int
  * return:array[][]
  */
  function getActivityDetails($args)
  {
  	global $mgr;
  	
  	if(trim($args["city_id"])=="")
	{
		$city_id=-1;
	}
	else
	{
		$city_id=$args["city_id"];
	}	
  	
  	$activity_id=isset($args['activity_id'])==false?0:$args['activity_id'];
  	$language_id=isset($args['lang_id'])==false?1:$args['lang_id'];
  	logger_mgr::logDebug("shit p getActivityDetails $activity_id,$language_id");
  	$rs=$mgr->getActivityDetails($activity_id,$args['image_type'],$language_id);
  	logger_mgr::logInfo($rs[0]["description"]);
  	if($args["module"]=="hot_show_detail")
  	{
	  	for($i=0;$i<count($rs);$i++)
	  	{
	  		$crs=$mgr->showMgr->getActivityStartEndDate($rs[$i]["id"],$city_id);
	  		$rs[$i]["start_date"]=$crs["start_date"];
	  		$rs[$i]["end_date"]=$crs["end_date"];
	  		
	  		$pcr=$mgr->getHotActivityVenue($rs[$i]["id"],$city_id,$language_id);
	  		for($j=0;$j<count($pcr);$j++)
	  		{
		  		$krs=compareShow($mgr->getHotEventCityVenue($args["category_id"],$args["purchase_way"],
						$city_id,$pcr[$j]["venue_id"],$args["thumbnail_activity_image_type"],$args["lang_id"]),$args);
				$pcr[$j]["other_activity_count"]=count($krs);		
				$pcr[$j]["other_activity"]=$krs;
	  		}
	  		$rs[$i]["venue"]=$pcr;
	  	}
  	}
  	logger_mgr::logInfo($rs[0]["description"]);
 	return $rs;
  }
  
  /*
   * description:Get activity images by acitivity id、image type、language id
   * param:$activity_id int
   * param:$image_type String
   * param:$language_id int
   * return:array[][]
   */
  function getActivityImages($args)
  {global $mgr;
  	$activity_id=isset($args['activity_id'])==false?0:$args['activity_id'];
  	$language_id=isset($args['lang_id'])==false?1:$args['lang_id'];
  	$image_type=isset($args['image_type'])==false?'':$args['image_type'];
  	
  	$rs=$mgr->getActivityImages($activity_id ,$image_type,$language_id);
  	
 	return $rs;
  }
  function ratingActivity($args)
  {global $mgr;
  	$member_id=isset($args['member_id'])==false?0:$args['member_id'];
  	
  	$rs=$mgr->ratingActivity($args["activity_id"] ,$member_id,$args["ipaddress"],$args["score"]);
  	
 	return $rs;
  }
  
  function searchComingActivity($args){
 	global $mgr;
 				
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
 	$activity=$mgr->searchComingActivity($category_id,
	$city_id,$district_id,$organizer_id,$venue_id,-1,
	$args["keyword"],$args["image_type"],$args["lang_id"]);
	
	for($i=0;$i<count($activity);$i++)
	{
		$activity[$i]["venue"]=$mgr->getActivityVenue($activity[$i]["activity_id"],$city_id,$args["lang_id"]);
	}
	  
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
		//$page_activity=$activity;
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
 function getActivityListById($movie_args,$imagepath,$city_id){
 	global $mgr;
	for($i=0;$i<count($movie_args);$i++)
	{
		$id=$movie_args[$i]["activity_id"];
		$poster=$imagepath.$movie_args[$i]["poster"];
		$array2=$mgr->getActivityListById($id,$movie_args[$i]["ticket_date"],$poster,$city_id);
		$array[]=$array2;
	}
	return $array;
 }
  function getMovieStory($activity_id){
  	global $mgr;
  	return $mgr->getMovieStory($activity_id);
  }		 
  function getVenueListById($cenue_args,$imagepath){
 	global $mgr;
// 	print_r($cenue_args);
	for($i=0;$i<count($cenue_args["venue_details"]);$i++)
	{
		$id=$cenue_args["venue_details"][$i]["venue_id"];
		$poster=$imagepath.$cenue_args["venue_details"][$i]["poster"];
		$array1=$mgr->getVenueListById($id,$poster);
		$array[]=$array1;
	}
	return $array;
 }
	 	
 
   function getVenueMovieListById($venue_args){
 	global $mgr; 
// 	print_r($cenue_args);
	for($i=0;$i<count($venue_args["venue_details"]);$i++)
	{
		$array_temp=array();
		$array_temp["cinemaID"]=$venue_args["venue_details"][$i]["venue_id"];
		for($o=0;$o<count($venue_args["venue_details"][$i]["activity_details"]);$o++){
			$array_temp["movieID"]=$venue_args["venue_details"][$i]["activity_details"][$o]["activity_id"];
			$array[]=$array_temp;
		}
	}
	return $array;
 }
 
 

 
  function compareShow($rs,$args)
    {global $mgr;
    	 $activity=array();
	  	 $activity_id=0;
	  
	  
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
	  		$crs=$mgr->showMgr->getActivityStartEndDate($v["activity_id"],$city_id);
	  		$v["start_date"]=$crs["start_date"];
	  		$v["end_date"]=$crs["end_date"];
	  		
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
				  				$cv["show_date"]=$rs[$k]["show_date"];
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
 	function getAreaList(){
		$areaList[0]["area_id"]=1;
		$areaList[0]["areaNameUs"]="Guangzhou";
		$areaList[0]["areaNameTc"]="廣州";
		$areaList[0]["areaNameSc"]="广州";
		
		$areaList[1]["area_id"]=2;
		$areaList[1]["areaNameUs"]="Hong Kong";
		$areaList[1]["areaNameTc"]="香港";
		$areaList[1]["areaNameSc"]="广州";
		
		$areaList[2]["area_id"]=3;
		$areaList[2]["areaNameUs"]="Macau";
		$areaList[2]["areaNameTc"]="澳門";
		$areaList[2]["areaNameSc"]="澳门";
 		return $areaList;
 	}
?>