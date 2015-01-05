<?php
 defined('IN_TA') or exit('Access Denied');
 defined('IN_TA_CITY') or exit('Access Denied');
 
 $mgr=$cityMgr;
 
 function getCountryCityDistrictArray($args){
 	global $mgr;
 	global $CONFIG;
 	if(trim($args["lang_id"])=="")
 	{
 		$args["lang_id"]=$CONFIG["lang_id"];
 	}
 	$rsCountry=$mgr->getCountry($args["status"],$args["lang_id"]);
 	$rsCity=$mgr->getCity($args["status"],$args["lang_id"]);
 	$rsDistrict=$mgr->getDistrict($args["status"],$args["lang_id"]);

 	for($i=0;$i<count($rsCountry);$i++)
 	{
 		for($j=0;$j<count($rsCity);$j++)
 		{
 			if($rsCountry[$i]["country_id"]==$rsCity[$j]["country_id"])
 			{
 				for($l=0;$l<count($rsCity[$j]["details"]);$l++)
 				{
	 				for($k=0;$k<count($rsDistrict);$k++)
	 				{
	 					if($rsDistrict[$k]["city_id"]==$rsCity[$j]["details"][$l]["city_id"])
	 					{
	 						$rsCity[$j]["details"][$l]["district_details"]=$rsDistrict[$k]["details"];
	 						break;	
	 					}
	 				}
 				}
 				
 				$rsCountry[$i]["city_details"]=$rsCity[$j]["details"];		
 				break;
 			}
 		}
 	}
 	
 	return $rsCountry;
 }



 function getCountryCityDistrictList($args){
 	$args["status"]='A';
 	
 	return getCountryCityDistrictArray($args);
 }
 
 function getAllCity($args){
 	global $mgr;
 	global $CONFIG;
 	if(trim($args["lang_id"])=="")
 	{
 		$args["lang_id"]=$CONFIG["lang_id"];
 	}
 	return $mgr->getCity("", $args["lang_id"]);
 }

function getDeliveryCountry($args){
 	global $mgr;
 	global $CONFIG;
 	if(trim($args["lang_id"])=="")
 	{
 		$args["lang_id"]=$CONFIG["lang_id"];
 	}
 	return $mgr->getCountry($args["status"],$args["lang_id"]);
 	
}
function getDeliveryCity($args){
 	global $mgr;
 	global $CONFIG;
 	if(trim($args["lang_id"])=="")
 	{
 		$args["lang_id"]=$CONFIG["lang_id"];
 	}
 	return $mgr->getCity($args["status"],$args["lang_id"]);
}

function getDeliveryDistrict($args){
 	global $mgr;
 	global $CONFIG;
 	if(trim($args["lang_id"])=="")
 	{
 		$args["lang_id"]=$CONFIG["lang_id"];
 	}
 	return $mgr->getDistrict($args["status"],$args["lang_id"]);
}



 function getDeliveryCountryCityDistrictList($args){
 	$args["status"]='';
 	
 	return getCountryCityDistrictArray($args);
 }













?>