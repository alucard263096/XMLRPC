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
	$param_list = isset($_SESSION['register_user']['param_list'])?$_SESSION['register_user']['param_list']:array();
	
	$action = $_REQUEST['action'];
	if (isset($_SESSION['member'])) {
		WindowRedirect('../index.php');
	}else if (isset($action)) {
		switch($action) {
			case "checkLoginName":
				$param_list['login_name'] = $_REQUEST['login_name'];
				checkLoginName();
				exit();
				break;
				
			case "register":
				$param_list['lang_id'] = $lang_id;
				$param_list['login_name'] = $_REQUEST['login_name'];
				$param_list['password'] = $_REQUEST['password'];
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
				register();
				exit();
				break;
		
			default:
				break;
		}
	} else {
		init();
	}
	
	$smarty->display(ROOT.'/templates/member/register_user.tpl');
	
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
		//print_r($list);
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
				//print_r($rs);
			} else {
				//TODO handle error here
			}
			
			$returnDeliveryCity = $webServiceClient->getResultFromServer($param_list, 'getDeliveryCity');
			if ($returnDeliveryCity->faultcode() == 0) {
				$rs = $returnDeliveryCity->value();
				$smarty->assign("city",$rs);
				//print_r($rs);
			} else {
				//TODO handle error here
			}
			
			$returnDistrict = $webServiceClient->getResultFromServer($param_list, 'getDeliveryDistrict');
			if ($returnDistrict->faultcode() == 0) {
				$rs = $returnDistrict->value();
				$smarty->assign("district",$rs);
				//print_r($rs);
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
					//print_r($rs);
				} else {
					//TODO handle error here
				}
				
				$returnDeliveryCity = $webServiceClient->getResultFromServer($param_list, 'getDeliveryCity');
				if ($returnDeliveryCity->faultcode() == 0) {
					$rs = $returnDeliveryCity->value();
					$smarty->assign("city",$rs);
					//print_r($rs);
				} else {
					//TODO handle error here
				}
				
				$returnDistrict = $webServiceClient->getResultFromServer($param_list, 'getDeliveryDistrict');
				if ($returnDistrict->faultcode() == 0) {
					$rs = $returnDistrict->value();
					$smarty->assign("district",$rs);
					//print_r($rs);
				} else {
					//TODO handle error here
				}
			$param_list = array();
		}	 
		setHonorificList();
	}
	
	function register(){
		global $smarty;
		global $param_list;
		global $webServiceClient;
		
		$webServiceClient->resetClient('/member.srv.php');
		$return = $webServiceClient->getResultFromServer($param_list, 'registerMember');
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
			echo "-1".":".$return->faultcode();
		}
	}
	
	function checkLoginName(){
		global $smarty;
		global $param_list;
		global $webServiceClient;
		
		$webServiceClient->resetClient('/member.srv.php');
		$returnNameFlag = $webServiceClient->getResultFromServer($param_list, 'checkMemberAccount');
		if ($returnNameFlag->faultcode() == 0) {
			$return = $returnNameFlag->value();
			if ($return['result'] == 0) {
				echo 'Y';
			}else{
				echo 'N1';
			}
		} else {
			echo 'N2';
			
		}
	}
?>








