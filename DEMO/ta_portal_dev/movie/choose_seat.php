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
	require ROOT.'/include/movie.inc.php';
	require ROOT.'/include/header.inc.php';

	// Parameter List
	$param_list = isset($_SESSION['choose_seat']['param_list'])?$_SESSION['choose_seat']['param_list']:array();
	
	$action = $_REQUEST['action'];

	if (isset($action)) {
		switch($action) {
			case "loadJs":
//				checkLogin();
				break;
			/*
			case "holdSeat":
				if (isset($_REQUEST['seat_ids'])) {
					$param_list['seat_ids'] = isset($_REQUEST['seat_ids']);
				} 
				echo holdSeat();
				exit();
				break;
			*/
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
			$smarty->display(ROOT.'/templates/seatplan/choose_seat_js.tpl');
		} 
	} else {
		$smarty->display(ROOT.'/templates/seatplan/choose_seat.tpl');
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
		setSeatPlan();
	}
	
	function initParams() {
		global $CONFIG;
		global $param_list;
		global $lang_id;
		
		$param_list = array();
		if (isset($_REQUEST['show_id'])) {
			$param_list['show_id'] = $_REQUEST['show_id'];
		}
		$param_list['category_id'] = $CONFIG['movie_category_id'];
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
		
		$webServiceClient->resetClient('/show.srv.php');
		$return = $webServiceClient->getResultFromServer($param_list, 'getShowDetails');
		if ($return->faultcode() == 0) {
			$show_detail = $return->value();
			//print_r($show_detail);
			$smarty->assign("show_detail", $show_detail);
		} else {
			//TODO handle error here
		}
	}
	
	// Set Seat Plan
	function setSeatPlan() {
		global $smarty;
		global $webServiceClient;
		global $param_list;
		
		$webServiceClient->resetClient('/seatplan.srv.php');
		$return = $webServiceClient->getResultFromServer($param_list, 'getSeatplanByShowId');
		if ($return->faultcode() == 0) {
			$seat_plan = $return->value();
			$smarty->assign("seat_plan", $seat_plan);
		} else {
			//TODO handle error here
		}
		
		$webServiceClient->resetClient('/seatplan.srv.php');
		$return = $webServiceClient->getResultFromServer($param_list, 'getSeatplanDetailByShowId');
		if ($return->faultcode() == 0) {
			$detail = $return->value();
			$size=30;
			$smarty->assign("seat_size",$size);
			$start_col=(1000-($detail["max_col"]-$detail["min_col"]+1)*$size)/2;
			$smarty->assign("start_col",$start_col);
			$smarty->assign("max_row", $detail["max_row"]);
		} else {
			//TODO handle error here
		}
	}
	
?>