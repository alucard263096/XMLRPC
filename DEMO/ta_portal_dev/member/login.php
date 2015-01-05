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
	
	$url= $_SERVER['HTTP_REFERER'];
	$smarty->assign("url", $url);
	if (isset($_SESSION['member'])) {
		WindowRedirect('../index.php');
	} else {
		$action = $_REQUEST['action'];
		if (isset($action)) {
			switch($action) {
				case "login":
					$param_list['login_name'] = $_REQUEST['login_name'];
					$param_list['password'] = $_REQUEST['password'];
					$param_list['lang_id'] = $lang_id;
					login($param_list);
					exit();
					break;
				default:
					break;
			}
		} else {
			$smarty->display(ROOT.'/templates/member/login.tpl');
		}
	}

//------------------------------------- functions ------------------------------------

	// Login
	function login($param_list) {
		global $webServiceClient;
		global $LANG;
		$memberArr = array();
		
		$webServiceClient->resetClient('/member.srv.php');
		$return = $webServiceClient->getResultFromServer($param_list, 'checkMemberLogin');
		if ($return->faultcode() == 0) {
			$r = $return->value();
			// 0 - ok, >0 - failed
			if ($r['result_code'] == 0) {
				// TODO keep session?
				// P.S. Here will not call holdSeat(), please call it again in page by ajax.
				if($_REQUEST['saveUser'] == "true")
					if(!isset($_COOKIE['TicketAreaMember'])){
						$memberArr["login_name"] = $param_list['login_name'];
						$memberArr["password"] = $param_list['password'];
						$memberArr["lang_id"] = $param_list['lang_id'];
						setcookie("TicketAreaMember",serialize($memberArr),mktime()+8640000,"/");
					}
				$_SESSION['member'] = $r;
				$_SESSION['member']['password'] = '';
			}
			echo $r['result_code'].":".$LANG['login']['result'][$r['result_code']];
			//$smarty->assign("result_status", $r['result_code']);
			//$smarty->assign("result_msg", $LANG['choose_seat']['login_result'][$r['result_code']]);
		} else {
			//TODO handle error here
			echo "-1:".$LANG['login']['result'][-1];
			//$smarty->assign("result_status", -1);
			//$smarty->assign("result_msg", $LANG['choose_seat']['login_result'][-1]);
		}
	}

?>