<?php
 defined('IN_TA') or exit('Access Denied');
 defined('IN_TA_VENUE') or exit('Access Denied');
 
 $mgr=$venueMgr;
 
 function getOrganizerVenueList($args){
 	global $mgr;
 	global $CONFIG;
 	if(trim($args["lang_id"])=="")
 	{
 		$args["lang_id"]=$CONFIG["lang_id"];
 	}	
 	if(trim($args["orgainzer_id"])=="")
 	{
 		$orgainzer_id=-1;
 	}
 	else
 	{
 		$orgainzer_id=$args["orgainzer_id"];
 	}	
 	if(trim($args["city_id"])=="")
 	{
 		$city_id=-1;
 	}
 	else
 	{
 		$city_id=$args["city_id"];
 	}
 	if(trim($args["district_id"])=="")
 	{
 		$district_id=-1;
 	}
 	else
 	{
 		$district_id=$args["district_id"];
 	}
 		
 		
 	$result=$mgr->getOrganizerVenueList($city_id,$district_id,$orgainzer_id,$args["lang_id"]);
 	
 	$ds=array();
	$organizer_id=0;
	$c=-1;
	for($i=0;$i<count($result);$i++)
	{
		if($organizer_id!=$result[$i]["organizer_id"])
		{
			$organizer_id=$result[$i]["organizer_id"];
			$c++;
		}
		$dr=array();
		$dr["organizer_id"]=$result[$i]["organizer_id"];
		$dr["name"]=$result[$i]["name"];
		$dr["venue_id"]=$result[$i]["venue_id"];
		$dr["district_name"]=$result[$i]["district_name"];
		$dr["score"]=$result[$i]["score"];
		$dr["address"]=$result[$i]["address"];
		$dr["website"]=$result[$i]["website"];
		$dr["description"]=$result[$i]["description"];
		$dt=$ds[$c]["venue_details"];
		$dt[]=$dr;
		$ds[$c]["venue_details"]=$dt;
		$ds[$c]["organizer_id"]=$organizer_id;
		$ds[$c]["name"]=$result[$i]["organizer_name"];
		
		
	}
 	
 	
 	return $ds;
 }
 
 /*
  * description:get venue details 
  * param:$venue_id int
  * param:$lang_id int
  * return: array[]
  * server:venue.srv.php
  */
  function getVenueDetails($args)
  {global $mgr;
  	$venue_id=trim($args["venue_id"])==""?-1:$args["venue_id"];
  	$lang_id=trim($args["lang_id"])==""?1:$args["lang_id"];
  	$image_type=trim($args['image_type'])==""?"":$args['image_type'];
  	$venue=$mgr->getVenueById($venue_id,$lang_id);
  	$image=$mgr->getVenueImage($venue_id,$image_type,$lang_id);
  	
  	return array("image"=>$image,"detail"=>$venue);
  	
  }

  function ratingVenue($args)
  {global $mgr;
  	$member_id=isset($args['member_id'])==false?0:$args['member_id'];
  	
  	$rs=$mgr->ratingVenue($args["venue_id"] ,$member_id,$args["ipaddress"],$args["score"]);
  	
 	return $rs;
  }
















?>