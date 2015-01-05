<?php
/*
 * Created on 2010-8-21
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
	require '../include/common.inc.php';
	require ROOT.'/classes/mgr/smarty.cls.php';
	require ROOT.'/classes/mgr/web_service_client.cls.php';
	require ROOT.'/include/hotel.inc.php';
	
	if (isset($_REQUEST['ref_no'])) {
		$param_list['ref_no'] = $_REQUEST['ref_no'];
	} else {
		//TODO handle error here
	}
	
	$smarty->assign('param_list', $param_list);
	$smarty->display(ROOT.'/templates/hotel/hotel_booking.tpl');
	
//------------------------------------- functions ------------------------------------

	
?>
