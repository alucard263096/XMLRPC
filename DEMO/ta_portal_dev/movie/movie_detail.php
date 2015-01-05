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

	// Country - City - District List
	//$ccd_list = isset($_SESSION['movie_detail']['ccd_list'])?$_SESSION['movie_detail']['ccd_list']:array();
	// Parameter List
	$param_list = isset($_SESSION['movie_detail']['param_list'])?$_SESSION['movie_detail']['param_list']:array();
	
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
				setActivityDetail();
				break;
			case "vote":
				$params = array();
				$params['activity_id'] = $_REQUEST['activity_id'];
				$params['score'] = $_REQUEST['score'];
				$params['ipaddress'] = $client_ip;
				if (isset($_SESSION['member'])) {
					$params['member_id'] = $_SESSION['member']['member_id'];
				} else {
					$params['member_id'] = -1;
				}
				vote($params);
				exit();
				break;
			default:
				break;
		}
	} else {
		init();
	}
	
	//$_SESSION['movie_detail']['ccd_list'] = $ccd_list;
	$_SESSION['movie_detail']['param_list'] = $param_list;
	
	$smarty->assign("param_list", $param_list);
	
	if (isset($action)) {
		switch($action) {
			case 'changeActivity':
				$smarty->display(ROOT.'/templates/movie/movie_detail_movie.tpl');
				break;
			case 'resetCriteria':
				$smarty->display(ROOT.'/templates/movie/movie_detail_show.tpl');
				break;
			default:
				break;
		}
	} else {
		$smarty->display(ROOT.'/templates/movie/movie_detail.tpl');
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
		setCCDList();
		setActivityDetail();
		setMVList();
		setRankMVList();
	}
	
	function initParams() {
		global $CONFIG;
		global $param_list;
		global $lang_id;
		
		if (isset($_REQUEST['city_id'])) {
			$param_list['city_id'] = $_REQUEST['city_id'];
		}
		if (isset($_REQUEST['activity_id'])) {
			$param_list['activity_id'] = $_REQUEST['activity_id'];
		}
		if (!isset($_SESSION['movie_detail']['param_list'])) {
			$param_list['district_id'] = -1;
			$param_list['organizer_id'] = -1;
			$param_list['venue_id'] = -1;
			$param_list['category_id'] = $CONFIG['movie_category_id'];
			$param_list['lang_id'] = $lang_id;
			$param_list['image_type'] = 'MO_SP';
			$param_list['purchase_way'] = $CONFIG['purchase_way'];
		}
	}
	
	// Set Activity Detail
	function setActivityDetail() {
		global $smarty;
		global $webServiceClient;
		global $param_list;
		// Get detail
		$webServiceClient->resetClient('/activity.srv.php');
		$return = $webServiceClient->getResultFromServer($param_list, 'getActivityDetails');
		if ($return->faultcode() == 0) {
			$activity_detail = $return->value();
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
		
		$webServiceClient->resetClient('/show.srv.php');
		$return = $webServiceClient->getResultFromServer($param_list, 'getShowByActivity');
		if ($return->faultcode() == 0) {
			$show_list = $return->value();
			$smarty->assign("lang", $_SESSION["lang"]);
			$smarty->assign("show_list", $show_list);
		} else {
			//TODO handle error here
		}
	}

?>