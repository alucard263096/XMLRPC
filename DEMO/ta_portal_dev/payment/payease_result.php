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
	
	if (isset($_REQUEST['v_oid'])) {
		$param_list['v_oid'] = $_REQUEST['v_oid'];
		$param_list['v_pmode'] = $_REQUEST['v_pmode'];
		$param_list['v_pstatus'] = $_REQUEST['v_pstatus'];
		$param_list['v_pstring'] = $_REQUEST['v_pstring'];
		$param_list['v_md5info'] = $_REQUEST['v_md5info'];
		$param_list['v_amount'] = $_REQUEST['v_amount'];
		$param_list['v_moneytype'] = $_REQUEST['v_moneytype'];
		$param_list['v_md5money'] = $_REQUEST['v_md5money'];
		$param_list['v_sign'] = $_REQUEST['v_sign'];
		
		$arr=explode('-',$param_list['v_oid']);
		$param_list['ref_no'] = $arr[2];
		if ($_SESSION['payment']['ref_no'] == $param_list['ref_no']) {
			if ($param_list['v_pstatus'] == 1 || $param_list['v_pstatus'] == 20) {
				$param_list['result'] = 'Y';
				$param_list['fail_remark'] = '';
				$smarty->assign('status', 0);
			} else {
				$param_list['result'] = 'C';
				$param_list['fail_remark'] = $param_list['v_pstring'];
				$smarty->assign('status', 1);
			}
			unset($_SESSION['payment']);
			setPaymentResult();
		} else {
			//TODO handle error here
			$smarty->assign('status', -1);
		}
	} else {
		//TODO handle error here
	}
	
	$smarty->assign('param_list', $param_list);
	$smarty->display(ROOT.'/templates/payment/payease_result.tpl');
	
//------------------------------------- functions ------------------------------------

	function setPaymentResult() {
		global $param_list;
		global $webServiceClient;
		
		logger_mgr::logInfo("[Payment] >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> ");
		logger_mgr::logInfo("[Payment] Result from bank: ");
		logger_mgr::logInfo("[Payment] (v_oid => ".$param_list['v_oid'].")");
		logger_mgr::logInfo("[Payment] (v_pmode => ".$param_list['v_pmode'].")");
		logger_mgr::logInfo("[Payment] (v_pstatus => ".$param_list['v_pstatus'].")");
		logger_mgr::logInfo("[Payment] (v_pstring => ".$param_list['v_pstring'].")");
		logger_mgr::logInfo("[Payment] (v_amount => ".$param_list['v_amount'].")");
		logger_mgr::logInfo("[Payment] (v_moneytype => ".$param_list['v_moneytype'].")");
		logger_mgr::logInfo("[Payment] Param to booking server: ");
		logger_mgr::logInfo("[Payment] (ref_no => ".$param_list['ref_no'].")");
		logger_mgr::logInfo("[Payment] (result => ".$param_list['result'].")");
		logger_mgr::logInfo("[Payment] (fail_remark => ".$param_list['fail_remark'].")");
		$webServiceClient->resetClient('/booking.srv.php');
		$return = $webServiceClient->getResultFromServer($param_list, 'setPaymentResult');
		if ($return->faultcode() == 0) {
			$r = $return->value();
			logger_mgr::logInfo("[Payment] Result from booking server: ");
			foreach ($r as $key => $value) {
				logger_mgr::logInfo("[Payment] (".$key." => ".$value.")");
			}
		} else {
			//TODO handle error here
			logger_mgr::logInfo("[Payment] Result from booking server: "."Error: ".$return->faultCode()." Message: ".$return->faultString());
		}
		logger_mgr::logInfo("[Payment] <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< ");
	}
?>
