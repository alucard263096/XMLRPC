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
	require ROOT.'/include/hotel.inc.php';

	// Country - City - District List
	$ccd_list = isset($_SESSION['hotel_detail']['ccd_list'])?$_SESSION['hotel_detail']['ccd_list']:array();
	// Parameter List
	$param_list = isset($_SESSION['hotel_detail']['param_list'])?$_SESSION['hotel_detail']['param_list']:array();
	$param_list['city_id'] = $_SESSION['city_id'];
	$action = $_REQUEST['action'];

	if (isset($action)) {
		switch($action) {
			case "changeDate":
				if (isset($_REQUEST['check_in_date'])) {
					$param_list['check_in_date'] = $_REQUEST['check_in_date'];
				}
				if (isset($_REQUEST['check_out_date'])) {
					$param_list['check_out_date'] = $_REQUEST['check_out_date'];
				}
				setCCDList();
				setRoomTypeList();
				break;
			case "booking":
				$param_list['code'] = 'B';
				$param_list['member_id'] = 2;
				$param_list['adult_count'] = $_REQUEST['adult_count'];
				$param_list['children_count'] = $_REQUEST['child_count'];
				$param_list['pt_code'] = 'B';
				$param_list['pw_code'] = $CONFIG['purchase_way'];
				$param_list['client_name'] = $_REQUEST['client_name'];
				$param_list['honorific_id'] = $_REQUEST['honorific_id'];
				$param_list['email'] = $_REQUEST['email'];
				$param_list['country_id'] = 1;
				$param_list['contact_no'] = $_REQUEST['phone'];
				$param_list['hotel_show_id'] = $_REQUEST['hotel_show_id'];
				$param_list['bed_type'] = $_REQUEST['bed_types'];
				$param_list['currency_id'] = 1;
				$param_list['check_id'] = 0;
				$param_list['check_in_info'] = $_REQUEST['check_client_name'];
				$param_list['chack_country_id'] = 1;
				$param_list['staff_id'] = $CONFIG['staff_id'];
				
	
				$param_list['room_no'] = $_REQUEST['room_no'];
				$param_list['remarks'] = $_REQUEST['remarks'];
				booking();
				exit();
				break;
				
			default:
				break;
		}
	} else {
		init();
	}
	
	$_SESSION['hotel_detail']['ccd_list'] = $ccd_list;
	$_SESSION['hotel_detail']['param_list'] = $param_list;
	
	$nums = range(1,20,1);
	$smarty->assign("nums",$nums);	
	$smarty->assign("param_list", $param_list);
	
	if (isset($action)) {
		$smarty->display(ROOT.'/templates/hotel/hotel_detail_room.tpl');
	} else {
		$smarty->display(ROOT.'/templates/hotel/hotel_detail.tpl');
	}

//------------------------------------- functions ------------------------------------

	function init() {
		global $lang_id;
		global $ccd_list;
		global $attribute_list;
		global $param_list;
		global $webServiceClient;
		
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
			if (!isset($_SESSION['hotel_detail']['ccd_list']) || count($ccd_list) == 0) {
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
		setHonorificList();
		setHotelDetail();
	}
	
	function initParams() {
		global $CONFIG;
		global $param_list;
		global $lang_id;
		
		$param_list = array();
		$param_list['city_id'] = $_SESSION['city_id'];
		$param_list['hotel_id'] = $_REQUEST['hotel_id'];
		
		if (isset($_REQUEST['check_in_date'])) {
			$param_list['check_in_date'] = $_REQUEST['check_in_date'];
		} else {
			$param_list['check_in_date'] = date('Y-m-d', time() + 24*60*60);
		}
		if (isset($_REQUEST['check_out_date'])) {
			$param_list['check_out_date'] = $_REQUEST['check_out_date'];
		} else {
			$param_list['check_out_date'] = date('Y-m-d', time() + 2*24*60*60);
		}
		if (isset($_REQUEST['room_type_id'])) {
			$param_list['room_type_id'] = $_REQUEST['room_type_id'];
		} else {
			$param_list['room_type_id'] = 0;
		}
		
	}
	
	// Set Country List, City List & District List
	/*function setCCDList() {
		global $smarty;
		global $ccd_list;
		global $param_list;
		global $LANG;
		
		$country_name = $LANG['country_name'];
		$city_name = $LANG['city_name'];
		$district_name = $LANG['district_name'];
		$country_list = array();
		$city_list = array();
		$district_list = array();
		foreach ($ccd_list as $country) {
			$country_list[] = array("country_id" => $country['country_id'], "long_name" => $country['long_name']);
			if ($param_list['country_id'] == $country['country_id']) {
				$country_name = $country['long_name'];
			}
			if ($param_list['country_id'] == '' or $param_list['country_id'] == -1 or $param_list['country_id'] == $country['country_id']) {
				$cities = $country['city_details'];
				foreach ($cities as $city) {
					$city_list[] = array("city_id" => $city['city_id'], "long_name" => $city['long_name']);
					if ($param_list['city_id'] == $city['city_id']) {
						$city_name = $city['long_name'];
					}
					if ($param_list['city_id'] == '' or $param_list['city_id'] == -1 or $param_list['city_id'] == $city['city_id']) {
						$districts = $city['district_details'];
						foreach ($districts as $district) {
							$district_list[] = array("district_id" => $district['district_id'], "long_name" => $district['long_name']);
							if ($param_list['district_id'] == $district['district_id']) {
								$district_name = $district['long_name'];
							}
						}
					}
				}
			}
		}
		
		$smarty->assign("country_name", $country_name);
		$smarty->assign("city_name", $city_name);
		$smarty->assign("district_name", $district_name);
		$smarty->assign("country_list", $country_list);
		$smarty->assign("city_list", $city_list);
		$smarty->assign("district_list", $district_list);
	}*/
	
	// Set Country List, City List & District List
	function setHonorificList() {
		global $smarty;
		global $param_list;
		global $webServiceClient;
		$webServiceClient->resetClient('/member.srv.php');
				$return = $webServiceClient->getResultFromServer($param_list, 'getHonorific');
				if ($return->faultcode() == 0) {
					$list = $return->value();
				} else {
					//TODO handle error here
				}
		$smarty->assign("honorific_list", $list);
	}
	
	
	
	
	
	
	
	
	// Set Hotel Detail
	function setHotelDetail() {
		global $param_list;
		global $webServiceClient;
		global $smarty;
		
		$webServiceClient->resetClient('/hotel.srv.php');
		$return = $webServiceClient->getResultFromServer($param_list, 'getHotelDetail');
		if ($return->faultcode() == 0) {
			$hotel_detail = $return->value();
			$smarty->assign('hotel_detail', $hotel_detail);
			//print_r($hotel_detail);
		} else {
			//TODO handle error here
		}
	}
	
	// Set Hotel Room Type List
	function setRoomTypeList() {
		global $param_list;
		global $webServiceClient;
		global $smarty;
		
		$webServiceClient->resetClient('/hotel.srv.php');
		$return = $webServiceClient->getResultFromServer($param_list, 'getRoomType');
		if ($return->faultcode() == 0) {
			$room_type_list = $return->value();
			$smarty->assign('room_type_list', $room_type_list);
			//print_r($room_type_list);
		} else {
			//TODO handle error here
		}
	}
	
	// Call booking
	function booking() {
		global $param_list;
		global $webServiceClient;
		global $smarty;
		global $LANG;
		
		$webServiceClient->resetClient('/hotel.srv.php');
		$return = $webServiceClient->getResultFromServer($param_list, 'updateHotelBookingPage');
		if ($return->faultcode() == 0) {
			$r = $return->value();
			if ($r['result_code'] == 0) {
				echo $r['result_code'].":".$r['ref_no'];
			} else {
				echo $r['result_code'].":".$LANG['hotel_detail']['book_result'][$r['result_code']];
			}
		} else {
			//TODO handle error here
			echo "-1:".$LANG['hotel_detail']['book_result']["-1"];
		}
	}
	
?>
