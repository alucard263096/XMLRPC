<?php
/*
 * Created on Aug 12, 2010
 * Created by leolu
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 defined('IN_TA') or exit('Access Denied');
 defined('IN_TA_TRANSLOG') or exit('Access Denied');
 $mgr=$deliveryMgr;
 /*
  * description: get all delivery
  * param:$lang_id
  * return:array[][]
  */
  function search($args)
  {
  	global $mgr;
  	if($args["member_id"]=="")
  	{
  		$args["member_id"]=-1;
  	}
  	if($args["ticket_status"]=="")
  	{
 		$args["ticket_status"]=-1;
  	}
  	if($args["lang_id"]=="")
  	{
 		$args["lang_id"]=3;
  	}
  	if($args["order_status"]=="")
  	{
 		$args["order_status"]="--";
  	}
  	
  	$rs=  $mgr->search($args["order_no"],$args["mobile_country_code"],$args["country_code"],
  	$args["mobile_no"],$args["area_code"],$args["home_no"],$args["email"],
  	$args["from_date"],$args["to_date"],$args["order_status"],$args["ticket_status"],
  	$args["lang_id"],$args["client_name"],$args["member_id"]);
  	
  	
  	for($i=0;$i<count($rs);$i++)
  	{
  		$rs[$i]["details"]=$mgr->bookingMgr->getOrderDetailsByTransId($rs[$i]["order_no"],'',$args["lang_id"]);
  	}
  	return $rs;
  	
  }
  function getOrderDetailsByTransId($trans_id,$validation_code,$lang_id)
  {global $mgr,$CONFIG;
  	
 	if($lang_id=="")
 	{
 		$lang_id=$CONFIG["lang_id"];
 	}
 	
 	$rs=$mgr->bookingMgr->getOrderDetailsByTransId($trans_id,$validation_code,$lang_id);
 	
 	$array=array();
 	
 	for($i=0;$i<count($rs);$i++)
 	{
 		if($rs[$i]["status"]=='PS')
 		{
	 		$a=array();
	 		$a["trans_id"]=$rs[$i]["trans_id"];
	 		$a["member_id"]=$rs[$i]["member_id"];
	 		$a["trans_date"]=$rs[$i]["trans_date"];
	 		$a["status"]=$rs[$i]["status"];
	 		$a["print_date"]=$rs[$i]["print_date"];
	 		$a["staff_id"]=$rs[$i]["staff_id"];
	 		$a["pt_code"]=$rs[$i]["pt_code"];
	 		$a["pw_code"]=$rs[$i]["pw_code"];
	 		$a["order_id"]=$rs[$i]["order_id"];
	 		$a["show_id"]=$rs[$i]["show_id"];
	 		$a["st_code"]=$rs[$i]["st_code"];
	 		$a["show_type_name"]=$rs[$i]["show_type_name"];
	 		$a["show_date_str"]=$rs[$i]["show_date_str"];
	 		$a["house_id"]=$rs[$i]["house_id"];
	 		$a["house_name"]=$rs[$i]["house_name"];
	 		$a["venue_id"]=$rs[$i]["venue_id"];
	 		$a["venue_name"]=$rs[$i]["venue_name"];
	 		$a["activity_id"]=$rs[$i]["activity_id"];
	 		$a["activity_name"]=$rs[$i]["activity_name"];
	 		$a["row"]=$rs[$i]["row"];
	 		$a["col"]=$rs[$i]["col"];
	 		$a["row_name"]=$rs[$i]["row_name"];
	 		$a["col_name"]=$rs[$i]["col_name"];
	 		$a["ticket_name"]=$rs[$i]["ticket_name"];
	 		$a["ticket_type_id"]=$rs[$i]["ticket_type_id"];
	 		$a["ticket_group_id"]=$rs[$i]["ticket_group_id"];
	 		$a["ticket_id"]=$rs[$i]["ticket_id"];
	 		$a["price"]=$rs[$i]["price"];
	 		$a["fee"]=$rs[$i]["fee"];
	 		$a["symbol"]=$rs[$i]["symbol"];
	 		$a["group_price"]=$rs[$i]["group_price"];
	 		$a["group_fee"]=$rs[$i]["group_fee"];
	 		$a["group_symbol"]=$rs[$i]["group_symbol"];
	 		
	 		$array[]=$a;
 		}
 		
 	}
 	return $array;
 	
 	
  }
  function printTicket($trans_str)
  {global $mgr,$CONFIG;
  	$mgr->printTicket($trans_str);
  	
  }
  
?>
