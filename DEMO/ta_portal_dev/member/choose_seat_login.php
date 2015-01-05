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
	

	// Parameter List
	$param_list = isset($_SESSION['choose_seat']['param_list'])?$_SESSION['choose_seat']['param_list']:array();
	
	$action = $_REQUEST['action'];

	if (isset($action)) {
		switch($action) {
			case "login":
				$param_list['login_name'] = $_REQUEST['login_name'];
				$param_list['password'] = $_REQUEST['password'];
				$param_list['lang_id'] = $lang_id;
				echo login();
				exit();
				break;
			case "register": 
				$param_list['login_name'] = $_REQUEST['login_name'];
				$param_list['email'] = $_REQUEST['email'];
				$param_list['password'] = $_REQUEST['password'];
				$param_list['nick_name'] = $_REQUEST['nick_name'];
				$param_list['mobile_no'] = $_REQUEST['mobile_no'];
				echo register();
				exit();
				break;
			case "loginAsNonMember":
				$param_list['nonmember'] = $_REQUEST['nonmember'];
				$_SESSION['choose_seat']['param_list'] = $param_list;
				exit();
				break;
			/*
			case "holdSeat":
				if (isset($_REQUEST['seat_ids'])) {
					$param_list['seat_ids'] = isset($_REQUEST['seat_ids']);
				} 
				echo holdSeat();
				exit();
				break;
			*/
			default:
				break;
		}
	} else {
		init();
	}
	
	$_SESSION['choose_seat']['param_list'] = $param_list;
	getAllCity();
	getDistrict();
	$smarty->assign("param_list", $param_list);
	$smarty->display(ROOT.'/templates/member/choose_seat_login.tpl');

//------------------------------------- functions ------------------------------------

	function init() {
		global $lang_id;
		global $ccd_list;
		global $param_list;
		global $webServiceClient;
		global $smarty;
		
		initParams();
	}
	
	function initParams() {
		global $CONFIG;
		global $param_list;
		global $lang_id;
		
		$param_list = array();
		if (isset($_REQUEST['show_id'])) {
			$param_list['show_id'] = $_REQUEST['show_id'];
		}
		$param_list['category_id'] = $CONFIG['movie_category_id'];
		$param_list['purchase_way'] = $CONFIG['purchase_way'];
		$param_list['lang_id'] = $lang_id;		
	}
	
	// Check if is logined as member
	function checkLogin() {
		global $smarty;
		global $param_list;
		if (isset($_SESSION['member']) || $param_list['nonmember'] == "Y") {
			$smarty->assign("logined", "Y");
		} else {
			$smarty->assign("logined", "N");
		}
	}
	
	function getAllCity(){
		global $smarty;
		global $lang_id;
		global $param_list;
		global $webServiceClient;
		$webServiceClient->resetClient('/city.srv.php');
		
		if ($param_list['lang_id'] != $lang_id) {
			$param_list['lang_id'] = $lang_id;
			$return = $webServiceClient->getResultFromServer($param_list, 'getAllCity');
			if ($return->faultcode() == 0) {
				$list = $return->value();
				$smarty->assign("city", $list);
			} else {
				//TODO handle error here
			}
		}else{
			$return = $webServiceClient->getResultFromServer($param_list, 'getAllCity');
			if ($return->faultcode() == 0) {
				$list = $return->value();
				$smarty->assign("city", $list);
			} else {
				//TODO handle error here
			}
			
		}
	}
	function getDistrict(){
		global $smarty;
		global $lang_id;
		global $param_list;
		global $webServiceClient;
		
		$webServiceClient->resetClient('/city.srv.php');
		if ($param_list['lang_id'] != $lang_id) {
			$param_list['lang_id'] = $lang_id;
			$returnDistrict = $webServiceClient->getResultFromServer($param_list, 'getDeliveryDistrict');
				if ($returnDistrict->faultcode() == 0) {
					$rs = $returnDistrict->value();
					$smarty->assign("district",$rs);
				} else {
					//TODO handle error here
				}
		}else{
			$returnDistrict = $webServiceClient->getResultFromServer($param_list, 'getDeliveryDistrict');
			if ($returnDistrict->faultcode() == 0) {
				$rs = $returnDistrict->value();
				$smarty->assign("district",$rs);
			} else {
				//TODO handle error here
			}
		}
	}
	// Login
	function login() {
		global $webServiceClient;
		global $param_list;
		global $LANG;
		global $smarty;
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
			$param_list['nonmember']="Y";
			checkLogin();
			echo $r['result_code'].":".$LANG['choose_seat']['login_result'][$r['result_code']];
		} else {
			echo "-1:".$LANG['choose_seat']['login_result'][-1];
		}
	}
	
	// Register
	function register() {
		global $webServiceClient;
		global $param_list;
		global $LANG;
		
		$webServiceClient->resetClient('/member.srv.php');
		$return = $webServiceClient->getResultFromServer($param_list, 'registerMember');
		if ($return->faultcode() == 0) {
			$r = $return->value();
			// 0 - ok, >0 - failed
			if ($r['result_code'] == 0) {
				// TODO auto login? keep session?
				// P.S. Here will not call holdSeat(), please call it again in page by ajax.
				$_SESSION['member'] = $r;
				$_SESSION['member']['password'] = '';
				echo $r['result_code'].":".$r['result'];
			}else
				echo "-1".":".$r['result'];
			$param_list['nonmember']="Y";
			checkLogin();
			//$smarty->assign("result_status", $r['result_code']);
			//$smarty->assign("result_msg", $LANG['choose_seat']['reg_result'][$r['result_code']]);
		} else {
			//TODO handle error here
			echo "-1:".$LANG['choose_seat']['reg_result'][-1];
			//$smarty->assign("result_status", -1);
			//$smarty->assign("result_msg", $LANG['choose_seat']['result'][-1]);
		}
	}
	
?>