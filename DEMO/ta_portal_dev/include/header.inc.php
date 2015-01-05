<?php
	global $webServiceClient;
	global $smarty;
	global $param_list;
	//if exist cookie ,check user then set session
	if(!empty($_COOKIE['TicketAreaMember'])){
		$param_list=unserialize($_COOKIE['TicketAreaMember']);
		$webServiceClient->resetClient('/member.srv.php');
		$return = $webServiceClient->getResultFromServer($param_list, 'checkMemberLogin');
		if ($return->faultcode() == 0) {
			$r = $return->value();
			if ($r['result_code'] == 0) {
				$_SESSION['member'] = $r;
				$_SESSION['member']['password'] = '';
			}
		}
	}
	//check logined
	if (isset($_SESSION['member']) || $param_list['nonmember'] == "Y") {
		$smarty->assign("logined", "Y");
	} else {
		$smarty->assign("logined", "N");
	}
		
$ccd_list = isset($_SESSION['header']['ccd_list'])?$_SESSION['header']['ccd_list']:array();
// Set Country List, City List & District List
function setCCDList() {
	
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
					$country_code=$country['code'];
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
	$smarty->assign("country_code", $country_code);
	$smarty->assign("district_name", $district_name);
	$smarty->assign("country_list", $country_list);
	$smarty->assign("city_list", $city_list);
	$smarty->assign("district_list", $district_list);
	$_SESSION['header']['ccd_list'] = $ccd_list;
}
?>