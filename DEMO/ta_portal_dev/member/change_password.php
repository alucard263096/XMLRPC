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
	require ROOT.'/include/member.inc.php';
	
	if (isset($_SESSION['member'])) {
		$action = $_REQUEST['action'];
		if (isset($action)) {
			switch($action) {
				case "changePassword":
					$param_list['old_password'] = $_REQUEST['old_password'];
					$param_list['new_password'] = $_REQUEST['new_password'];
					$param_list['login_name'] = $_SESSION['member']['login_name'];
					changePassword($param_list);
					break;
				default:
					break;
			}
		}
		$smarty->display(ROOT.'/templates/member/change_password.tpl');
	} else {
		WindowRedirect('login.php');
	}

//------------------------------------- functions ------------------------------------
	
	function changePassword($param_list) {
		global $webServiceClient;
		global $LANG;
		global $smarty;
		
		$webServiceClient->resetClient('/member.srv.php');
		$return = $webServiceClient->getResultFromServer($param_list, 'changeMemberPassword');
		if ($return->faultcode() == 0) {
			$r = $return->value();
			$smarty->assign("result_status", $r['result_code']);
			$smarty->assign("result_msg", $LANG['password']['result'][$r['result_code']]);
		} else {
			//TODO handle error here
			$smarty->assign("result_status", -1);
			$smarty->assign("result_msg", $LANG['password']['result'][-1]);
		}
	}

?>