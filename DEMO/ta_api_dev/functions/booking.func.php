<?php
 defined('IN_TA') or exit('Access Denied');
 defined('IN_TA_BOOKING') or exit('Access Denied');
 
 $mgr=$bookingMgr;
 
 function getSeatTicketGroupTicketType($args){
 	global $mgr;
 	global $CONFIG;
 	if(trim($args["lang_id"])=="")
 	{
 		$args["lang_id"]=$CONFIG["lang_id"];
 	}		
 	
 	$rs=$mgr->getSeatTicketGroup($args["show_id"],$args["seat_list"],$args["lang_id"]);
 	return $rs;
 	/*
 	$ticket_group_array=array();
 	
 	for($i=0;$i<count($rs);$i++)
 	{
 		$array_has_ticket_group=0;
 		for($j=0;$j<count($ticket_group_array);$j++)
 		{
 			if($rs[$i]["ticket_group_id"]==$ticket_group_array[$j]["ticket_group_id"])
 			{
 				$rs[$i]["ticket_type_details"]=$ticket_group_array[$j]["ticket_type_details"];
 				$array_has_ticket_group=1;
 				break;
 			}
 			
 		}	
		if($array_has_ticket_group==0)
		{
			$rss=$mgr->getTicketTypeByTicketGroup($rs[$i]["ticket_group_id"],$args["purchase_code"],$args["lang_id"]);
			$ticket_group=array();
			$ticket_group["ticket_group_id"]=$rs[$i]["ticket_group_id"];
			$ticket_group["ticket_type_details"]=$rss;
			
			$ticket_group_array[]=$ticket_group;
			
			$rs[$i]["ticket_type_details"]=$rss;
		}	
 	}
 	*/
 }
 
 
 function getTicketGroupTicketType($args)
 {global $mgr;
 	global $CONFIG;
 	if(trim($args["lang_id"])=="")
 	{
 		$args["lang_id"]=$CONFIG["lang_id"];
 	}
 	$rs=$mgr->getSeatTicketGroup($args["show_id"],$args["seat_list"],$args["lang_id"]);
 	$ticket_group_array=array();
 	if($rs[0][0]=="FS"||$rs[0][0]=="TS")
 	{
 		$rss=$mgr->getTicketTypeByTicketGroup($args["ticket_group_id"],$args["purchase_way"],$args["lang_id"]);
		$ticket_group=array();
		$ticket_group["ticket_group_id"]=$args["ticket_group_id"];
		$ticket_group["ticket_type_details"]=$rss;
		
		$ticket_group_array[]=$ticket_group;
 	}
 	else
 	{
	 	for($i=0;$i<count($rs);$i++)
	 	{
	 		$array_has_ticket_group=0;
	 		for($j=0;$j<count($ticket_group_array);$j++)
	 		{
	 			if($rs[$i]["ticket_group_id"]==$ticket_group_array[$j]["ticket_group_id"])
	 			{
	 				$rs[$i]["ticket_type_details"]=$ticket_group_array[$j]["ticket_type_details"];
	 				$array_has_ticket_group=1;
	 				break;
	 			}
	 			
	 		}	
			if($array_has_ticket_group==0)
			{
				$rss=$mgr->getTicketTypeByTicketGroup($rs[$i]["ticket_group_id"],$args["purchase_way"],$args["lang_id"]);
				$ticket_group=array();
				$ticket_group["ticket_group_id"]=$rs[$i]["ticket_group_id"];
				$ticket_group["ticket_type_details"]=$rss;
				
				$ticket_group_array[]=$ticket_group;
				
				$rs[$i]["ticket_type_details"]=$rss;
			}	
	 	}
 	}
 	return $ticket_group_array;
 	
 }
 
 function setPaymentResult($args)
 {global $mgr,$webServiceClient,$CONFIG;
 	
		
	$pw_a["CB"]="BO";
	$pw_a["KB"]="KIOSK";
	$pw_a["PR"]="IVRS";
	$pw_a["WB"]="WEB";
	$pw_a["WP"]="WAP";
	
	
 	if(trim($args["lang_id"])=="")
 	{
 		$args["lang_id"]=$CONFIG["lang_id"];
 	}
	
 	if($args["trans_id"]=="")
 	{
 		$rs=$mgr->getTransByRefNo($args["ref_no"]);
 		if(count($rs)>0)
 		{
 			$trans_id=$rs[0]["trans_id"];
 		}
 		else
 		{
 			$arr["result_code"]="1";
			return $arr;
 		}
 	}
 	else
 	{
 		$trans_id=$args["trans_id"];
 	}
 	
 	
 	$mgr->dbmgr->begin_trans();
	if($args["result"]=="Y")
	{
	$ckrs=$mgr->updatePaymentInfo($trans_id,'S','','');
	
	
		
	$rs=$mgr->getOrderDetailsByTransId($trans_id,'',$args["lang_id"]);
	
	
	$rcs=$mgr->showMgr->getFpGetSeatplanParameterDataByShowId($rs[0]["show_id"]);
	if($rcs["fp_show_sign"]!="")
	{
	
	$seat_num=count($rs);
	$seat_str="";
	$ticket_type="";
	$fee=0;
	 		
	for($i=0;$i<count($rs);$i++)
	{
		if($i==0)
		{
			$seat_str=$rs[$i]["row"].$rs[$i]["col"];
			$ticket_type=$rs[$i]["ticket_name"];
			$fee=$rs[$i]["fee"];
		}
		else
		{
			$seat_str.="|".$rs[$i]["row"].$rs[$i]["col"];
			$ticket_type.="|".$rs[$i]["ticket_name"];
		}
	}
	
	
	$array=array(new xmlrpcval($args["ref_no"], 'string'),
								   new xmlrpcval($rcs["CinemaId"], 'string'),
	                               new xmlrpcval($rcs["ShowDate"], 'string'),
	                               new xmlrpcval($rcs["FilmId"], 'string'),
	                               new xmlrpcval($rcs["ShowTime"], 'string'),
	                               new xmlrpcval($rcs["HallId"], 'string'),
	                               new xmlrpcval($rcs["SectionId"], 'string'),
	                               new xmlrpcval($CONFIG['fp']['LockUserId'], 'string'),
	                               new xmlrpcval($seat_num, 'string'),
	                               new xmlrpcval($seat_str, 'string'),
	                               new xmlrpcval($ticket_type, 'string'),
	                               new xmlrpcval(0, 'string'),
	                               new xmlrpcval('', 'string'),
	                               new xmlrpcval($fee, 'string'),
	                               new xmlrpcval("T", 'string'),
	                               new xmlrpcval($pw_a[$rs[0]["pw_code"]], 'string'),
	                               new xmlrpcval($CONFIG['fp']['LockUserId'], 'string'),
	                               new xmlrpcval("N", 'string'),
	                               new xmlrpcval("1", 'string'));
	                               
	                            
	                               
			$webServiceClient->resetClient('/FPapi');
			$return = $webServiceClient->getResultFromServer($array, 'FPHandler.setBuyTickets ');
			if ($return->faultcode() == 0) {
				
				$lockSeatSucc= $return->value();
				
			} else {
				//TODO handle error here
			}
	 		
	}
	
	
	sendSms($ckrs);
	
	}
	else if($args["result"]=="N")
	{
		$mgr->updatePaymentInfo($trans_id,'F','',$args["fail_remark"]);
		
		
		$rs=$mgr->getOrderDetailsByTransId($trans_id,'',$args["lang_id"]);
		$rcs=$mgr->showMgr->getFpGetSeatplanParameterDataByShowId($rs[0]["show_id"]);
		if($rcs["fp_show_sign"]!="")
		{
		
		$seat_num=count($rs);
		$seat_str="";
		 		
		for($i=0;$i<count($rs);$i++)
		{
			if($i==0)
			{
				$seat_str=$rs[$i]["row"].$rs[$i]["col"];
			}
			else
			{
				$seat_str.="|".$rs[$i]["row"].$rs[$i]["col"];
			}
		}
		
		
		$array=array(new xmlrpcval($args["ref_no"], 'string'),
									   new xmlrpcval($rcs["CinemaId"], 'string'),
		                               new xmlrpcval($rcs["ShowDate"], 'string'),
		                               new xmlrpcval($rcs["FilmId"], 'string'),
		                               new xmlrpcval($rcs["ShowTime"], 'string'),
		                               new xmlrpcval($rcs["HallId"], 'string'),
		                               new xmlrpcval($rcs["SectionId"], 'string'),
		                               new xmlrpcval($CONFIG['fp']['LockUserId'], 'string'),
		                               new xmlrpcval($seat_str, 'string'));
		                               
		                            
		                               
				$webServiceClient->resetClient('/FPapi');
				$return = $webServiceClient->getResultFromServer($array, 'FPHandler.unlockSeats ');
				if ($return->faultcode() == 0) {
					
					$lockSeatSucc= $return->value();
					
				} else {
					//TODO handle error here
				}
		 		
		}
		
		
		
	}	
	else if($args["result"]=="C")
	{
		$rs=$mgr->updatePaymentInfo($trans_id,'C','',$args["fail_remark"]);
		$rs=$mgr->updateTransStatus($trans_id,'CC');
		
		
		$rs=$mgr->getOrderDetailsByTransId($trans_id,'',$args["lang_id"]);
		$rcs=$mgr->showMgr->getFpGetSeatplanParameterDataByShowId($rs[0]["show_id"]);
		if($rcs["fp_show_sign"]!="")
		{
		
		$seat_num=count($rs);
		$seat_str="";
		 		
		for($i=0;$i<count($rs);$i++)
		{
			if($i==0)
			{
				$seat_str=$rs[$i]["row"].$rs[$i]["col"];
			}
			else
			{
				$seat_str.="|".$rs[$i]["row"].$rs[$i]["col"];
			}
		}
		
		
		$array=array(new xmlrpcval($args["ref_no"], 'string'),
									   new xmlrpcval($rcs["CinemaId"], 'string'),
		                               new xmlrpcval($rcs["ShowDate"], 'string'),
		                               new xmlrpcval($rcs["FilmId"], 'string'),
		                               new xmlrpcval($rcs["ShowTime"], 'string'),
		                               new xmlrpcval($rcs["HallId"], 'string'),
		                               new xmlrpcval($rcs["SectionId"], 'string'),
		                               new xmlrpcval($CONFIG['fp']['LockUserId'], 'string'),
		                               new xmlrpcval($seat_str, 'string'));
		                               
		                            
		                               
				$webServiceClient->resetClient('/FPapi');
				$return = $webServiceClient->getResultFromServer($array, 'FPHandler.unlockSeats ');
				if ($return->faultcode() == 0) {
					
					$lockSeatSucc= $return->value();
					
				} else {
					//TODO handle error here
				}
		 		
		}
		
		
	}
	$mgr->setPaymentResult($trans_id,$args["result"],$args["fail_remark"]);
	$mgr->dbmgr->commit_trans();
	
	$arr["result_code"]="0";
	return $arr;
 }
 
 function setTrans($args)
 {global $mgr;
 	global $CONFIG,$webServiceClient;
 	
 	if(trim($args["lang_id"])=="")
 	{
 		$args["lang_id"]=$CONFIG["lang_id"];
 	}
 	if(trim($args["trans_id"])=="")
 	{
 		$trans_id=0;
 	}
 	else
 	{
 		$trans_id=$args["trans_id"];
 	}	
 	if(trim($args["order_id"])=="")
 	{
 		$order_id=0;
 	}
 	else
 	{
 		$order_id=$args["order_id"];
 	}		
 	if(trim($args["honorific_id"])=="")
 	{
 		$honorific_id=1;
 	}
 	else
 	{
 		$honorific_id=$args["honorific_id"];
 	}	
 	if(trim($args["member_id"])=="")
 	{
 		$member_id=0;
 	}
 	else
 	{
 		$member_id=$args["member_id"];
 	}
 	
 	if(trim($args["district_id"])=="")
 	{
 		$district_id=1;
 	}
 	else
 	{
 		$district_id=$args["district_id"];
 	}
 	if($args["show_type"]=="SS")
 	{
 		$args["seat_list"]=cutLastSymbol($args["seat_list"],",");
 	}
 	$fp_show=false;
 	$result=array();
 	$rsFpShow=$mgr->getSeatTicketGroup($args["show_id"],$args["seat_list"],$args["lang_id"]);
 	
 	
 	$mgr->dbmgr->begin_trans();
 	
 	
 	if($rsFpShow[0]["fp_show_sign"]!="")
 	{
 		$mgr->deleteSeatStatusByFP_ForceDelete($args["show_id"],$args["seat_list"]);
 	}
 	
 	$rs=$mgr->holdSeat($trans_id,$order_id,$args["show_id"],$args["seat_list"],$args["show_type"],$args["ticket_group_id"],
	$member_id,$args["name"],$args["email"],$args["phone_country_code"],
	$args["phone_no"],$honorific_id,$args["purchase_way"],$args["staff_id"]);
	
 	if($rs[0][0]=="")//no trans data return
 	{
 		$result["result"]="hold_seat_fail";
 		$result["result_code"]="1";
 	}
 	else
 	{
 		$amount=0;
 		$trans_id=0;
 		$trans_id=0;
 		$order_id=0;
 		$member_type=0;
 		$ref_no=0;
 		
 		$ticket_type_str="";
 		
 		$ticket_type_list=explode(',',$args["ticket_type"]);
 		$ticket_group=$args["ticket_group_id"];
 		
 		for($i=0;$i<count($rs);$i++)
 		{
 			$ticket_type_str.=$rs[$i]["trans_id"].","
 			.$rs[$i]["order_id"].","
 			.$rs[$i]["show_id"].","
 			.$rs[$i]["seat_id"].","
 			.$rs[$i]["ticket_group_id"].","
 			.$ticket_type_list[$i].","
 			.$rs[$i]["ticket_id"].";";
 			
 			$trans_id=$rs[$i]["trans_id"];
 			$order_id=$rs[$i]["order_id"];
 		}
 		
 		//$mgr->updateCreditCardInfo($trans_id,$args["cc_no"],$args["exp_date"],$args["holder_name"],$args["pt_code"]);
 		$mgr->updateTransCreditInfo($trans_id,$args["cc_no"],$args["exp_date"],$args["holder_name"],'P',0,'','',$args["pt_code"],$args["staff_id"]);
 		$mgr->saveOrder($order_id);
 		
 		$mgr->saveTicketType($ticket_type_str,$member_id,$args["staff_id"]);
 		
 		$query=$mgr->updateTransDelivery($trans_id,
 		$args["delivery_type_id"],
 		$args["recipient_name"],
 		$args["mobile_country_code"],
 		$args["mobile_no"]
,$args["home_country_code"],$args["home_area_code"],$args["home_no"]
,$args["office_country_code"],$args["office_area_code"],$args["office_no"]
,$args["address"],$args["remark"],$args["postal_code"],$district_id);
		
 		$cs=$mgr->getTransPaymentInfo($trans_id,$args["lang_id"]);
 		
 		$result["total_amount"]=$cs["total_amount"];
 		$result["trans_id"]=$cs["trans_id"];
 		$result["ref_no"]=$cs["ref_no"];
 		$result["currency_id"]=$cs["currency_id"];
 		$result["payease_moneytype"]=$cs["payease_moneytype"];
 		$result["result"]="succ";
 		$result["result_code"]="0";
 		
 		
 		if($rsFpShow[0]["fp_show_sign"]!="")
	 	{
	 		$fp_show=true;
	 		
	 		$seat_num=count($rsFpShow);
	 		$seat_str="";
	 		
	 		for($i=0;$i<count($rsFpShow);$i++)
	 		{
	 			if($i==0)
	 			{
	 				$seat_str=$rsFpShow[$i]["row"].$rsFpShow[$i]["col"];
	 			}
	 			else
	 			{
	 				$seat_str.="|".$rsFpShow[$i]["row"].$rsFpShow[$i]["col"];
	 			}
	 		}
	 		
	 		$rcs=$mgr->showMgr->getFpGetSeatplanParameterDataByShowId($args["show_id"]);
	 		$array=array(new xmlrpcval($rcs["CinemaId"], 'string'),
	                               new xmlrpcval($rcs["ShowDate"], 'string'),
	                               new xmlrpcval($rcs["FilmId"], 'string'),
	                               new xmlrpcval($rcs["ShowTime"], 'string'),
	                               new xmlrpcval($rcs["HallId"], 'string'),
	                               new xmlrpcval($rcs["SectionId"], 'string'),
	                               new xmlrpcval($CONFIG['fp']['LockUserId'], 'string'),
	                               new xmlrpcval($seat_num, 'string'),
	                               new xmlrpcval($seat_str, 'string'),
	                               new xmlrpcval($result["ref_no"], 'string'));
	                               
	                           
	 		$lockSeatSucc=1;    
	                               
			$webServiceClient->resetClient('/FPapi');
			$return = $webServiceClient->getResultFromServer($array, 'FPHandler.lockSeats ');
			if ($return->faultcode() == 0) {
				$lockSeatSucc= $return->value();
			} else {
				//TODO handle error here
			}
	 		
	 		 if($lockSeatSucc==0)
	 		 {
	 		 	
	 		 }
	 		 else
	 		 {
	 		 	$result["result"]="hold_seat_fail";
	 			$result["result_code"]="1";
			 	$mgr->dbmgr->rollback_trans();
			 	return $result;
	 		 }
	 	}
 	}
 		
 	$mgr->dbmgr->commit_trans();
 	
 	
 	return $result;
 	
 }
 
 function setActivityAlert($args)
 {
 	global $mgr;
 	
 	if($args["member_id"]=="")
 	{
 		$member_id=0;
 	}
 	else
 	{
 		$member_id=$args["member_id"];
 	}
 	
 	return $mgr->setActivityAlert($args["activity_id"],$args["mobile_country_no"],$args["mobile_no"],
 	$args["email"],$member_id);
 }
 
 
 function sendSms($args)
 {global $CONFIG;
 	
	$validation_code=$args["validation_code"];
	$phone_no=$args["phone_no"];
	
	$doSms=false;
	for($i=0;$i<10;$i++)
	{
		if($doSms==false)
		{
			$XP=$CONFIG['sms']['xp']; $XS=$CONFIG['sms']['xs'];
			$f=new xmlrpcmsg($CONFIG['sms']['path']);
			$f->addParam(new xmlrpcval($CONFIG['sms']["USERNAME"]));
			$f->addParam(new xmlrpcval($CONFIG['sms']["PASSWORD"]));
			$f->addParam(new xmlrpcval($phone_no));
			$f->addParam(new xmlrpcval($CONFIG['sms']["MSG_FMT"]));
			$f->addParam(new xmlrpcval($CONFIG['sms']["TP_pId"]));
			$f->addParam(new xmlrpcval($CONFIG['sms']["TP_udhi"]));
			$f->addParam(new xmlrpcval(base64_encode($validation_code)));
			
		
			//$f->addParam(new xmlrpcval("text/plain"));
			$f->serialize($CONFIG['sms']['charset']);
			
			$c=new xmlrpc_client($XP, $XS, $CONFIG['sms']['port']);
			//$c->setDebug(2);
			$r=&$c->send($f);
			if (!$r->faultCode()) {
				$doSms=true;
				logger_mgr::logInfo("Send ".$args["ref_no"]." SMS $validation_code   $phone_no success");	
				break;
			}
			
			logger_mgr::logInfo("Send ".$args["ref_no"]." SMS $validation_code  $phone_no error");	
		}		
	}
 }
 
?>