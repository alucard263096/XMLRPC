<?php
/*
 * Created on 2010-9-17
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
	require '../include/common.inc.php';
	require ROOT.'/classes/mgr/smarty.cls.php';
	require ROOT.'/classes/mgr/web_service_client.cls.php';
	require ROOT.'/include/movie.inc.php';
	require ROOT.'/include/header.inc.php';
	require ROOT.'/include/member.inc.php';

	// Parameter List
	$param_list = isset($_SESSION['modify_user_info']['param_list'])?$_SESSION['modify_user_info']['param_list']:array();

	if (isset($_SESSION['member'])) {
		$action = $_REQUEST['action'];
		if (isset($action)) {
			switch($action) {
				case "modifyInfo":
					$param_list['lang_id'] = $lang_id;
					$param_list['member_id'] = $_SESSION['member']['id'];
					$param_list['login_name'] = $_REQUEST['login_name'];
					$param_list['honorific_id'] = $_REQUEST['honorific_id'];
					$param_list['last_name'] = $_REQUEST['last_name'];
					$param_list['first_name'] = $_REQUEST['first_name'];
					$param_list['nickname'] = $_REQUEST['nickname'];
					$param_list['gender'] = $_REQUEST['gender'];
					$param_list['birthday'] = $_REQUEST['birthday'];
					$param_list['mobile_country_code'] = $_REQUEST['mobile_country_code'];
					$param_list['mobile_no'] = $_REQUEST['mobile_no'];
					$param_list['home_country_code'] = $_REQUEST['home_country_code'];
					$param_list['home_area_code'] = $_REQUEST['home_area_code'];
					$param_list['home_no'] = $_REQUEST['home_no'];
					$param_list['office_country_code'] = $_REQUEST['office_country_code'];
					$param_list['office_area_code'] = $_REQUEST['office_area_code'];
					$param_list['office_no'] = $_REQUEST['office_no'];
					$param_list['email'] = $_REQUEST['email'];
					$param_list['address'] = $_REQUEST['address'];
					$param_list['district_id'] = $_REQUEST['district_id'];
					modifyInfo();
					exit();
					break;
				
				default:
					break;
			}
		}else{
			init();
			$param_list['district_id'] = $_SESSION['member']['district_id'];
			setHonorificList();
			getCountryListByDistrictId($param_list);
			getCityListByDistrictId($param_list);
			$smarty->assign("infoList",$_SESSION['member']);
		}
		$smarty->display(ROOT.'/templates/member/modify_user_info.tpl');
	} else {
		WindowRedirect('login.php');
	}
	
	//*************  function *********************//
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
	function getCountryListByDistrictId($param_list){
		global $smarty;
		global $webServiceClient;
		
		$webServiceClient->resetClient('/member.srv.php');
		$return = $webServiceClient->getResultFromServer($param_list, 'getCountryListByDistrictId');
		if ($return->faultcode() == 0) {
			$list = $return->value();
		} else {
			//TODO handle error here
		}
		$smarty->assign("countryList", $list);
	}
	function getCityListByDistrictId($param_list){
		global $smarty;
		global $webServiceClient;
		
		$webServiceClient->resetClient('/member.srv.php');
		$return = $webServiceClient->getResultFromServer($param_list, 'getCityListByDistrictId');
		if ($return->faultcode() == 0) {
			$list = $return->value();
		} else {
			//TODO handle error here
		}
		$smarty->assign("cityList", $list);
	}
	function init() {
		global $lang_id;
		global $ccd_list;
		global $param_list;
		global $webServiceClient;
		global $smarty;
		
		if ($param_list['lang_id'] != $lang_id) {
			$param_list['lang_id'] = $lang_id;
			// get Country-City-District List
			$webServiceClient->resetClient('/city.srv.php');
			$returnCountry = $webServiceClient->getResultFromServer($param_list, 'getDeliveryCountry');
			if ($returnCountry->faultcode() == 0) {
				$rs = $returnCountry->value();
				$smarty->assign("country",$rs);
			} else {
				//TODO handle error here
			}
			
			$returnDeliveryCity = $webServiceClient->getResultFromServer($param_list, 'getDeliveryCity');
			if ($returnDeliveryCity->faultcode() == 0) {
				$rs = $returnDeliveryCity->value();
				$smarty->assign("city",$rs);
			} else {
				//TODO handle error here
			}
			
			$returnDistrict = $webServiceClient->getResultFromServer($param_list, 'getDeliveryDistrict');
			if ($returnDistrict->faultcode() == 0) {
				$rs = $returnDistrict->value();
				$smarty->assign("district",$rs);
			} else {
				//TODO handle error here
			}
			
		} else {
			// get Country-City-District List
				$webServiceClient->resetClient('/city.srv.php');
				$returnCountry = $webServiceClient->getResultFromServer($param_list, 'getDeliveryCountry');
				if ($returnCountry->faultcode() == 0) {
					$rs = $returnCountry->value();
					$smarty->assign("country",$rs);
				} else {
					//TODO handle error here
				}
				
				$returnDeliveryCity = $webServiceClient->getResultFromServer($param_list, 'getDeliveryCity');
				if ($returnDeliveryCity->faultcode() == 0) {
					$rs = $returnDeliveryCity->value();
					$smarty->assign("city",$rs);
				} else {
					//TODO handle error here
				}
				
				$returnDistrict = $webServiceClient->getResultFromServer($param_list, 'getDeliveryDistrict');
				if ($returnDistrict->faultcode() == 0) {
					$rs = $returnDistrict->value();
					$smarty->assign("district",$rs);
				} else {
					//TODO handle error here
				}
			$param_list = array();
		}	 
	}

	function modifyInfo(){
		global $smarty;
		global $param_list;
		global $webServiceClient;

		$webServiceClient->resetClient('/member.srv.php');
		$return = $webServiceClient->getResultFromServer($param_list, 'updateMember');
		if ($return->faultcode() == 0){
			$r = $return->value();
			if ($r['result_code'] == 0){
				$_SESSION['member'] = $r;
				$_SESSION['member']['password'] = '';
				echo "0".":".$r['result'];
			}else{
				echo "-1".":".$r['result'];
			}
		}else{
			echo "-12".":".$return->faultcode();
		}
	}
	
?>








