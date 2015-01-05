<?php

 defined('IN_TA') or exit('Access Denied');
 defined('IN_TA_SEATPLAN') or exit('Access Denied');
 
 $mgr=$seatplanMgr;
 
 
 function getSeatplanByShowId($args){
 	global $mgr,$webServiceClient;
 	
 	$showInfo=$mgr->showMgr->getShowInfoByid($args["show_id"],1);
 	$rs=array();
 		$rs=$mgr->getSeatplanDetailByShowId($args["show_id"]);
 		//$rs["seatplan"]=$mgr->getSeatplanByShowId($args["show_id"]);
 		//$rs=$mgr->getSeatplanByShowId($args["show_id"]);
 		$cr=$mgr->getSeatplanByShowId($args["show_id"]);
 		$array=array();
 		for($i=0;$i<count($cr);$i++)
 		{
 			$a=array();
 			$a["id"] = $cr[$i]["id"];
            $a["display_type"] =$cr[$i]["display_type"];
                    $a["row"] = $cr[$i]["row"];
                    $a["col"] = $cr[$i]["col"];
                    $a["row_name"] = $cr[$i]["row_name"];
                    $a["col_name"] = $cr[$i]["col_name"];
                    $a["seat_type"] =$cr[$i]["seat_type"];
                    $a["is_active"] =$cr[$i]["is_active"];
                    $a["status"] =$cr[$i]["status"]==""?"A":$cr[$i]["status"];
                    $a["price"] =$cr[$i]["price"];
                    $a["fee"] =$cr[$i]["fee"];
                    $a["ticket_name"] =$cr[$i]["long_name"];
                    $a["symbol"] =$cr[$i]["symbol"];
                    $a["ticket_id"] =$cr[$i]["ticket_id"];
 			$array[]=$a;
 		}
 		$rs["seatplan"]=$array;
 	
 	if($showInfo["fp_show_sign"]=="")
 	{
 		
 	}
 	else
 	{
 		//String CinemaId,String ShowDate,String FilmId,String ShowTime,String HallId,String SectionId,String LockUserId 
 		$rcs=$mgr->showMgr->getFpGetSeatplanParameterDataByShowId($args["show_id"]);
 		
 		$array=array(new xmlrpcval($rcs["CinemaId"], 'string'),
                               new xmlrpcval($rcs["ShowDate"], 'string'),
                               new xmlrpcval($rcs["FilmId"], 'string'),
                               new xmlrpcval($rcs["ShowTime"], 'string'),
                               new xmlrpcval($rcs["HallId"], 'string'),
                               new xmlrpcval($rcs["SectionId"], 'string'),
                               new xmlrpcval($rcs["LockUserId"], 'string'));
                               
                               
                               
		$webServiceClient->resetClient('/FPapi');
		$return = $webServiceClient->getResultFromServer($array, 'FPHandler.getSeats');
		if ($return->faultcode() == 0) {
			$data = $return->value();
			$array=array('<?xml version="1.0" encoding="GB2312" ?>'=>"");
			
			$data=strtr($data,$array);
			
//			print_r($data);
//			exit();
			$detail=xml2array($data);
			//print_r($detail);
			$car=$detail["soap:Envelope"]["soap:Body"];
			$SeatsResponse=$car["getSeatsResponse"];
			$SeatsResult=$SeatsResponse["getSeatsResult"];
			$Seats=$SeatsResult["data"]["seats"];
			$SeatsAttr=$SeatsResult["data"]["seats_attr"];
			
		//	$rs["max_row"]=$SeatsAttr["maxRowNum"];
		//	$rs["max_col"]=$SeatsAttr["maxColNum"];
			$rs["min_row"]=1;
			$rs["min_col"]=1;
			
			//$rs["seatplan"]=changeFpSeatplanDataForOurArray($Seats["seat"]);
			$crs=changeFpSeatplanDataForOurArray($Seats["seat"]);
			//print_r($crs);
			//print_r($rs["seatplan"]);
			$rs["seatplan"]=integrationFpStatus($crs,$rs["seatplan"]);
			//print_r($rs["seatplan"]);
			
		} else {
			//TODO handle error here
			return null;
		}
 	}
	if($args["kiosk"]=="Y")
	{
		$rs["seatplan"]=setSquareFullSeatplan($rs,$rs["seatplan"]);
		$str=$rs["max_row"].",".$rs["max_col"]."#";
		
		
		$str.=setArrayStr($rs["seatplan"]);
		$rs=$str;
	}
 	return $rs;
 }
 
 function integrationFpStatus($Seats,$ts)
 {
 	$j=0;
 	for($i=0;$i<count($Seats);$i++)
 	{
 		$row=$Seats[$i]["rowNum"];
 		$col=$Seats[$i]["colNum"];
 		$status='A';
 		if($Seats[$i]["available"]=="N")
 		{
 			$status='R';
 		}
 		else if($Seats[$i]["damagedFlag"]=="N")
 		{
 			$status='R';
 		}
 		else
 		{
 			if($Seats[$i]["status"]=="R")
 			{
 				$status='R';
 			}
 			else if($Seats[$i]["status"]=="B")
 			{
 				$status='S';
 			}
 			else if($Seats[$i]["status"]=="H")
 			{
 				$status='R';
 			}
 		}
 		
 		for(;$j<count($ts);$j++)
 		{
 			if($ts[$j]["row"]==$row&&$ts[$j]["col"]==$col)
 			{
 				$ts[$j]["status"]=$status;
 			}	 			
 		}		
 		
 	}
 	
 	return $ts;
 }
 
 function setSquareFullSeatplan($detail,$seatplan_detail)
 {
 	$scr=array();
	$course=0;
	for($i=$detail["min_row"];$i<=$detail["max_row"];$i++)
	{
		$kr=array();
		for($j=$detail["min_col"];$j<=$detail["max_col"];$j++)
		{
			if($seatplan_detail[$course]["row"]==$i&&$seatplan_detail[$course]["col"]==$j)
			{
				$scr[]=$seatplan_detail[$course];
				$course++;
			}
			else
			{
				$arra=array();
				$arra["id"]=0;
				$scr[]=$arra;
			}
		}
		//$scr[]=$kr;
	}
 	return $scr;
 }
 
 function changeFpSeatplanDataForOurArray($Seats)
 {
 	$sa=array();
 	foreach ($Seats as $v) 
 	{
 		if(count($v)>0)
 		{
 			$sa[]=$v;
 		}
 	}
 	return $sa;
 }
 
 function getAreaSeatplan($args){
 	global $mgr;
 	$rs=$mgr->getAreaSeatplan($args["show_id"],$args["area_id"],$args["ticket_group_id"]);
 	
 	return $rs;
 }
 function getSeatStyle($args){
 	global $mgr;
 	$rs=$mgr->getSeatStyle($args["show_id"]);
 	
 	return $rs;
 }
 function getAreaSeatplanDetail($args){
 	global $mgr;
 	$rs=$mgr->getAreaSeatplanDetail($args["area_id"]);
 	
 	return $rs;
 }
 
 function getSeatplanArray($args){ 	
 	for($k=0;$k<count($args);$k++){
 		$schedule_list["column"]=$args[$k]["col"];
 		$schedule_list["columnName"]=$args[$k]["col_name"];
 		$schedule_list["displayType"]=$args[$k]["display_type"];
 		$schedule_list["row"]=$args[$k]["row"];
 		$schedule_list["rowName"]=$args[$k]["row_name"];
 		$schedule_list["seatID"]=$args[$k]["id"];
 		if(trim($args[$k]["status"])==""){
 			$schedule_list["status"]="A";	
 		}else{
 			$schedule_list["status"]=$args[$k]["status"];
 		}
 		$schedule_list_temp[]=$schedule_list;
 	}
 	
 	return $schedule_list_temp;
 }
 
 
 function getSeatplanDetailByShowId($args){
 	global $mgr;
 	
 	$rs=$mgr->getSeatplanDetailByShowId($args["show_id"]);
 	
 	return $rs;
 }
 
?>