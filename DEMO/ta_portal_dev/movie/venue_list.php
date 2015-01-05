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
	require ROOT.'/include/banner.inc.php';
	// Country - City - District List
	//$ccd_list = isset($_SESSION['venue_list']['ccd_list'])?$_SESSION['venue_list']['ccd_list']:array();
	// Parameter List
	$param_list = isset($_SESSION['venue_list']['param_list'])?$_SESSION['venue_list']['param_list']:array();
	$param_list['city_id'] = $_SESSION['city_id'];
	$param_list['district_id'] ="-1";
	$action = $_REQUEST['action'];
	
	if (isset($action)) {
		switch($action) {
			case "resetLocation":
				if (isset($_REQUEST['city_id'])) {
					$param_list['district_id'] = '';
					$param_list['city_id'] = $_REQUEST['city_id'];
				}
				if (isset($_REQUEST['district_id'])) {
					$param_list['district_id'] = $_REQUEST['district_id'];
				}
				$param_list['page_from'] = 1;
				$param_list['page_to'] = 1;
				$param_list['organizer_id'] = -1;
				$param_list['venue_id'] = -1;
				$param_list['keyword'] = '';
				$param_list['activity_id'] = -1;
				$param_list['score_type'] = "venue_id";
				setCCDList();
				setCVList();
				setMVList();
				break;
			case "resetCriteria":
				if (isset($_REQUEST['city_id'])) {
					$param_list['district_id'] = -1;
					$param_list['city_id'] = $_REQUEST['city_id'];
				}
				if (isset($_REQUEST['district_id'])) {
					$param_list['district_id'] = $_REQUEST['district_id'];
				}
				if (isset($_REQUEST['organizer_id'])) {
					$param_list['venue_id'] = -1;
					$param_list['activity_id'] = -1;
					$param_list['organizer_id'] = $_REQUEST['organizer_id'];
				}
				if (isset($_REQUEST['venue_id'])) {
					$param_list['organizer_id'] = -1;
					$param_list['activity_id'] = -1;
					$param_list['venue_id'] = $_REQUEST['venue_id'];
				}
				if (isset($_REQUEST['activity_id'])) {
					$param_list['organizer_id'] = -1;
					$param_list['venue_id'] = -1;
					$param_list['activity_id'] = $_REQUEST['activity_id'];
				}
				if (isset($_REQUEST['keyword'])) {
					$param_list['keyword'] = $_REQUEST['keyword'];
				}
				$param_list['page_from'] = 1;
				$param_list['page_to'] = 1;
				if (isset($_REQUEST['page_no'])) {
					$param_list['page_from'] = $_REQUEST['page_no'];
					$param_list['page_to'] = $_REQUEST['page_no'];
				}
				setVenueFullList();
				setCVList();
				setCCDList();
				break;
			case "vote":
				$params = array();
				$params['venue_id'] = $_REQUEST['venue_id'];
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
	
	$_SESSION['venue_list']['ccd_list'] = $ccd_list;
	$_SESSION['venue_list']['param_list'] = $param_list;
	
	$smarty->assign("param_list", $param_list);
	
	if (isset($action)) {
		switch($action) {
			case 'resetLocation':
				$smarty->display(ROOT.'/templates/movie/venue_list_search.tpl');
				break;
			case 'resetCriteria':
				$smarty->display(ROOT.'/templates/movie/venue_list_result.tpl');
				break;
			default:
				break;
		}
	} else {
		$smarty->display(ROOT.'/templates/movie/venue_list.tpl');
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
		setBannerList();
		setRightBannerList();
		setRankMVList();
	}
	
	function initParams() {
		global $CONFIG;
		global $param_list;
		global $lang_id;
		
		if (isset($_REQUEST['cs']) && $_REQUEST['cs'] = 'cs') {
			$param_list['city_id'] = $_SESSION['city_id'];
			$param_list['district_id'] = -1;
			$param_list['organizer_id'] = -1;
			$param_list['venue_id'] = -1;
			$param_list['activity_id'] = -1;
			$param_list['category_id'] = $CONFIG['movie_category_id'];
			$param_list['keyword'] = '';
			$param_list['page_from'] = 1;
			$param_list['page_to'] = 1;
			$param_list['page_count'] = $CONFIG['default']['page_count'];
			$param_list['purchase_way'] = $CONFIG['purchase_way'];
		} else {
			if (!isset($_SESSION['venue_list']['param_list'])) {
				$param_list['city_id'] = $_SESSION['city_id'];
				$param_list['district_id'] = -1;
				$param_list['organizer_id'] = -1;
				$param_list['venue_id'] = -1;
				$param_list['activity_id'] = -1;
				$param_list['category_id'] = $CONFIG['movie_category_id'];
				$param_list['keyword'] = '';
				$param_list['lang_id'] = $lang_id;
				$param_list['page_from'] = 1;
				$param_list['page_to'] = 1;
				$param_list['page_count'] = $CONFIG['default']['page_count'];
				$param_list['purchase_way'] = $CONFIG['purchase_way'];
			}
		}
	}
	
	// Set Search Result : Venue List with all info
	function setVenueFullList() {
		global $param_list;
		global $smarty;
		global $webServiceClient;
		global $image_type;
		$param_list["image_type"]=$image_type["venue_image"];
		
		$webServiceClient->resetClient('/activity.srv.php');
		$return = $webServiceClient->getResultFromServer($param_list, 'searchHotVenue');
		if ($return->faultcode() == 0) {
			$venue_full_list = $return->value();
			$total_page = $venue_full_list['total_count'];
			$venue_full_list = $venue_full_list['venue_details'];
			$smarty->assign("lang", $_SESSION["lang"]);
			$smarty->assign("venue_full_list", $venue_full_list);
			$smarty->assign("total_page", $total_page);
		} else {
			//TODO handle error here
		}
	}

?>