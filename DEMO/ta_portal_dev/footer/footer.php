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
	require ROOT.'/include/header.inc.php';
	require ROOT.'/include/banner.inc.php';	
	
	$param_list = isset($_SESSION['footer']['param_list'])?$_SESSION['footer']['param_list']:array();
	$param_list['city_id'] = $_SESSION['city_id'];
	$param_list['district_id'] ="-1";
	$action = $_REQUEST['action'];
	$param_list['lang_id'] = $lang_id;
	$lang=$_SESSION["lang"];
	setBannerList();
	setRightBannerList();
	setCCDList();
	if (isset($action)) {
	switch($action) {
			case "contact_us":	
				$smarty->display(ROOT."/templates/footer/".$lang."_contact_us.tpl");
				break;
			case "service_terms":	
				$smarty->display(ROOT."/templates/footer/".$lang."_service_terms.tpl");			
				break;
			case "privacy":				
				$smarty->display(ROOT."/templates/footer/".$lang."_privacy.tpl");
				break;
			case "qna":				
				$smarty->display(ROOT."/templates/footer/".$lang."_qna.tpl");
				break;
			case "pay_take":				
				$smarty->display(ROOT."/templates/footer/".$lang."_pay_take.tpl");
				break;
			default:
				break;
		}
	}	
	$_SESSION['sports']['param_list'] = $param_list;

//------------------------------------- functions ------------------------------------

?>