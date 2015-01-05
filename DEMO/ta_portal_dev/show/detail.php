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

	// Country - City - District List
	//$ccd_list = isset($_SESSION['show_detail']['ccd_list'])?$_SESSION['show_detail']['ccd_list']:array();
	// Parameter List
	$param_list = isset($_SESSION['show_detail']['param_list'])?$_SESSION['show_detail']['param_list']:array();
	$param_list['city_id'] = $_SESSION['city_id'];
	$action = $_REQUEST['action'];

	if (isset($action)) {
		switch($action) {
			case "changeActivity":
				if (isset($_REQUEST['activity_id'])) {
					$param_list['district_id'] = -1;
					$param_list['activity_id'] = $_REQUEST['activity_id'];
				}
				setActivityDetail();
				setMVList();
			case "resetCriteria":
				if (isset($_REQUEST['district_id'])) {
					$param_list['district_id'] = $_REQUEST['district_id'];
				}
				if (isset($_REQUEST['activity_id'])) {
					$param_list['activity_id'] = $_REQUEST['activity_id'];
				}
				setShowList();
				break;
			default:
				break;
		}
	} else {
		init();
	}
	
	//$_SESSION['show_detail']['ccd_list'] = $ccd_list;
	$_SESSION['show_detail']['param_list'] = $param_list;
	$smarty->assign("lang",$_SESSION["lang"]);
	$smarty->assign("param_list", $param_list);
	
	if (isset($action)) {
		switch($action) {
			case 'changeActivity':
				$smarty->display(ROOT.'/templates/show/detail_activity.tpl');
				break;
			case 'resetCriteria':
				$smarty->display(ROOT.'/templates/show/detail_show.tpl');
				break;
			default:
				break;
		}
	} else {
		$smarty->display(ROOT.'/templates/show/detail.tpl');
	}

//------------------------------------- functions ------------------------------------

	function init() {
		global $lang_id;
		global $ccd_list;
		global $param_list;
		global $webServiceClient;
		global $smarty;
		
		initParams();
		if ($param_list['lang_id'] != $lang_id) {
			$param_list['lang_id'] = $lang_id;
			// get Country-City-District List
			$webServiceClient->resetClient('/city.srv.php');
			$return = $webServiceClient->getResultFromServer($param_list, 'getCountryCityDistrictList');
			if ($return->faultcode() == 0) {
				$ccd_list = $return->value();
			} else {
				//TODO handle error here
			}
		} else {
			// get Country-City-District List
			if (!isset($_SESSION['header']['ccd_list']) || count($ccd_list) == 0) {
				$webServiceClient->resetClient('/city.srv.php');
				$return = $webServiceClient->getResultFromServer($param_list, 'getCountryCityDistrictList');
				if ($return->faultcode() == 0) {
					$ccd_list = $return->value();
				} else {
					//TODO handle error here
				}
			}
		}
		$param_list['lang_id'] = $lang_id;
		//setCCDList();
		setActivityDetail();
		setMVList();
		setRankMVList();
		setShowList();
	}
	
	function initParams() {
		global $CONFIG;
		global $param_list;
		global $lang_id;
		global $image_type;
		
		if (isset($_REQUEST['city_id'])) {
			$param_list['city_id'] = $_REQUEST['city_id'];
		}
		if (isset($_REQUEST['activity_id'])) {
			$param_list['activity_id'] = $_REQUEST['activity_id'];
		}
		if (!isset($_SESSION['show_detail']['param_list'])) {
			$param_list['district_id'] = -1;
			$param_list['organizer_id'] = -1;
			$param_list['venue_id'] = -1;
			$param_list['category_id'] = $CONFIG['show_category_id'];
			$param_list['lang_id'] = $lang_id;
			$param_list['module'] = "hot_show_detail";
			$param_list['image_type'] = $image_type["show_poster"];
			$param_list['purchase_way'] = $CONFIG['purchase_way'];
		}
	}
	
	// Set Activity Detail
	function setActivityDetail() {
		global $smarty;
		global $webServiceClient;
		global $param_list;
		global $image_type;
		// Get detail
		//print_r($param_list);
		$param_list["image_type"]='CO_HRB';
		$param_list["thumbnail_activity_image_type"]=$image_type["thumbnail_activity_image_type"];
		$webServiceClient->resetClient('/activity.srv.php');
		$return = $webServiceClient->getResultFromServer($param_list, 'getActivityDetails');
		if ($return->faultcode() == 0) {
			$activity_detail = $return->value();
			//print_r($activity_detail);
			$smarty->assign("activity_detail", $activity_detail);
		} else {
			//TODO handle error here
		}
		// Get image list
		$webServiceClient->resetClient('/activity.srv.php');
		$return = $webServiceClient->getResultFromServer($param_list, 'getActivityImages');
		if ($return->faultcode() == 0) {
			$image_list = $return->value();
			$smarty->assign("image_list", $image_list);
		} else {
			//TODO handle error here
		}
	}
	
	// Set Show List
	function setShowList() {
		global $smarty;
		global $webServiceClient;
		global $param_list;
		//$param_list["get_area"]="Y";
		$webServiceClient->resetClient('/show.srv.php');
		$return = $webServiceClient->getResultFromServer($param_list, 'getShowByActivity');
		if ($return->faultcode() == 0) {
			$show_list = $return->value();
			$smarty->assign("lang", $_SESSION["lang"]);
			//print_r($show_list);
			$smarty->assign("show_list", $show_list);
		} else {
			//TODO handle error here
		}
	}
	
	

?>