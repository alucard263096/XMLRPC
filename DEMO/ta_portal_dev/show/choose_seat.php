<?php
/*
 * Created on 2010-8-7
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
	require '../include/common.inc.php';
	require ROOT.'/classes/mgr/smarty.cls.php';
	require ROOT.'/classes/mgr/web_service_client.cls.php';
	require ROOT.'/include/show.inc.php';
	require ROOT.'/include/header.inc.php';
	
	//Check cross domain show
	if ($CONFIG['domain']=="ticketasia" && $_REQUEST["city_id"]==$CONFIG['gz_city_id'])
	{
		header('Location: http://www.ticketchina.net/show/choose_seat.php?show_id='.$_REQUEST["show_id"].'&city_id='.$_REQUEST["city_id"]);
	}
	else if ($CONFIG['domain']=="ticketchina" && $_REQUEST["city_id"]!=$CONFIG['gz_city_id'])
	{
		header('Location: http://www.ticketasia.net/show/choose_seat.php?show_id='.$_REQUEST["show_id"].'&city_id='.$_REQUEST["city_id"]);
	}

	// Parameter List
	$param_list = isset($_SESSION['choose_seat']['param_list'])?$_SESSION['choose_seat']['param_list']:array();
	$param_list['city_id'] = $_SESSION['city_id'];
	$action = $_REQUEST['action'];

	if (isset($action)) {
		switch($action) {
			case "loadJs":
//				checkLogin();
				break;
			
			case "getSeatPlan":
				$param_list["show_id"]=$_REQUEST["show_id"];
				$param_list["area_id"]=$_REQUEST["area_id"];
				$param_list["ticket_group_id"]=$_REQUEST["ticket_group_id"];
				$smarty->assign("ticket_group_id", $_REQUEST["ticket_group_id"]);
				$smarty->assign("area_id", $_REQUEST["area_id"]);
				
				getSeatPlan();
				
				break;
			case "getSeatName":
					$param_list["seat_list"]=$_REQUEST["seat_list"];
					getSeatName();
					exit();
				break;
			default:
				break;
		}
	} else {
		init();
	}
	
	$_SESSION['choose_seat']['param_list'] = $param_list;
	
	$smarty->assign("param_list", $param_list);
	
	if (isset($action)) {
		if ($action == 'loadJs') {
			$smarty->display(ROOT.'/templates/seatplan/freeseating_choose_seat_js.tpl');
		}
		else if($action=="getSeatPlan")
		{
			$smarty->display(ROOT.'/templates/seatplan/area_seat_plan.tpl');
		} 
	} else {
		if($param_list['st_code']=="SS")
		{
			$smarty->display(ROOT.'/templates/seatplan/multi_price_choose_seat.tpl');
		}
		else
		{
			$smarty->display(ROOT.'/templates/seatplan/freeseating_choose_seat.tpl');
		}
	}

//------------------------------------- functions ------------------------------------

	function init() {
		global $lang_id;
		global $ccd_list;
		global $param_list;
		global $webServiceClient;
		global $smarty;
		
		initParams();
		setShowDetail();
	}
	
	function initParams() {
		global $CONFIG;
		global $param_list;
		global $lang_id;
		
		$param_list = array();
		if (isset($_REQUEST['show_id'])) {
			$param_list['show_id'] = $_REQUEST['show_id'];
		}
		$param_list['category_id'] = $CONFIG['show_category_id'];
		$param_list['purchase_way'] = $CONFIG['purchase_way'];
		$param_list['lang_id'] = $lang_id;
	}
	
	// Check if is logined as member
	function checkLogin() {
		global $smarty;
		global $param_list;
		if (isset($_SESSION['member']) || $param_list['nonmember'] == "Y") {
			$smarty->assign("logined", "Y");
		} else {
			$smarty->assign("logined", "N");
		}
	}
	
	// Set Show Detail
	function setShowDetail() {
		global $smarty;
		global $webServiceClient;
		global $param_list;
		global $image_type;
		$param_list["image_type"]=$image_type["show_poster"];
		$webServiceClient->resetClient('/show.srv.php');
		$return = $webServiceClient->getResultFromServer($param_list, 'getShowDetails');
		if ($return->faultcode() == 0) {
			$show_detail = $return->value();
			
			$param_list['st_code'] = $show_detail['st_code'];
			//print_r($show_detail);
			//print_r($show_detail);
 			$smarty->register_function("getImagePathByHouse","getImagePathByHouse");
 			//print_r($show_detail);
 			//print_r($show_detail);
 			$_SESSION["city_id"]=$show_detail["city_id"];
			$smarty->assign("show_detail", $show_detail);
			$smarty->assign("movie", $show_detail["activity_detail"]);
		} else {
			//TODO handle error here
		}
	}
	// Set Show Detail
	function getSeatName() {
		global $smarty;
		global $webServiceClient;
		global $param_list;
		
		$webServiceClient->resetClient('/booking.srv.php');
		
		$return = $webServiceClient->getResultFromServer($param_list, 'getSeatTicketGroupTicketType');
		if ($return->faultcode() == 0) {
			
			$seat_ticket_group_ticket_type_list = $return->value();
			for($i=0;$i<count($seat_ticket_group_ticket_type_list);$i++)
			{
				echo $seat_ticket_group_ticket_type_list[$i]["row_name"]."-".$seat_ticket_group_ticket_type_list[$i]["col_name"]." ";
			}
		} else {
			//TODO handle error here
		}
	}
	
	
	function getImagePathByHouse($param)
	{global $CONFIG;
		extract($param);
		$house_id=0;
		$activity_id=0;
		$show_id=0;
		extract($param);
		$src="";
		
		if(remote_file_exists($CONFIG['resrouce_link']."/images/house/house_".$house_id."_".$activity_id."_".$show_id.".png"))
        {
        	$src="images/house/house_".$house_id."_".$activity_id."_".$show_id.".png";
        }
        else if(remote_file_exists($CONFIG['resrouce_link']."/images/house/house_".$house_id."_".$activity_id.".png"))
        {
        	$src="images/house/house_".$house_id."_".$activity_id.".png";
        }
        else if(remote_file_exists($CONFIG['resrouce_link']."/images/house/house_".$house_id.".png"))
        {
        	$src="images/house/house_".$house_id.".png";
        }
        
		return $CONFIG['resrouce_link']."/".$src;
		
	}
	function getSeatPlan()
	{global $smarty;
		global $webServiceClient;
		global $param_list;
		
		
		$webServiceClient->resetClient('/seatplan.srv.php');
		$return = $webServiceClient->getResultFromServer($param_list, 'getAreaSeatplan');
		if ($return->faultcode() == 0) {
			$seatplan_detail = $return->value();
			//print_r($seatplan_detail);
			//$smarty->assign("seat_plan", $seatplan_detail);
		} else {
			//TODO handle error here
			exit();
		}
		$webServiceClient->resetClient('/seatplan.srv.php');
		$returnC = $webServiceClient->getResultFromServer($param_list, 'getSeatStyle');
		if ($returnC->faultcode() == 0) {
			$seat_style = $returnC->value();
			$smarty->assign("seat_style", $seat_style);
		}
		else{
			//TODO handle error here
		}
		
		
		$webServiceClient->resetClient('/seatplan.srv.php');
		$return = $webServiceClient->getResultFromServer($param_list, 'getAreaSeatplanDetail');
		if ($return->faultcode() == 0) {
			$detail = $return->value();
			$size=30;
			$smarty->assign("seat_size",$size);
			$start_col=(800-($detail["max_col"]-$detail["min_col"]+1)*$size)/2;
			$smarty->assign("start_col",$start_col);
			$smarty->assign("max_row", $detail["max_row"]);
			$smarty->assign("min_col", $detail["min_col"]);
			$smarty->assign("min_row", $detail["min_row"]);
			$smarty->assign("max_col", $detail["max_col"]);
			$scr=array();
			$course=0;
			for($i=$detail["min_row"];$i<=$detail["max_row"];$i++)
			{
				$kr=array();
				for($j=$detail["min_col"];$j<=$detail["max_col"];$j++)
				{
					if($seatplan_detail[$course]["row"]==$i&&$seatplan_detail[$course]["col"]==$j)
					{
						$kr[]=$seatplan_detail[$course];
						$course++;
					}
					else
					{
						$arra=array();
						$arra["id"]=0;
						$kr[]=$arra;
					}
				}
				$scr[]=$kr;
			}
			//print_r($scr);
			$smarty->assign("seat_plan", $scr);
		} else {
			//TODO handle error here
		}
		
	}
	
?>