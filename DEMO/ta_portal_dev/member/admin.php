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
		$smarty->assign('login_name', $_SESSION['member']['login_name']);
		$smarty->display(ROOT.'/templates/member/admin.tpl');
	} else {
		WindowRedirect('login.php');
	}

//------------------------------------- functions ------------------------------------

?>