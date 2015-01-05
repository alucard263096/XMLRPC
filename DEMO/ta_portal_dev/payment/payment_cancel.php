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
	
	$param_list['result'] = "C";
	$param_list['fail_remark'] = "";					
	
	if (isset($_REQUEST['Ref'])){
		$param_list['ref'] = $_REQUEST['Ref'];
		$param_list['ref_no'] = $_REQUEST['Ref'];
		if($_SESSION['payment']['orderRef'] == $param_list['ref'])												
			setPaymentResult();			
			$smarty->assign('status', -1);
	}								
	else		
		$smarty->assign('status', -1);
	
		

	$smarty->assign('ref', $param_list['ref']);
	$smarty->display(ROOT.'/templates/payment/payment_asiapay_result.tpl');
	
	
	
//------------------------------------- functions ------------------------------------
	
	function setPaymentResult() {
		global $param_list;
		global $webServiceClient;
		
		$log_str = "[Payment] >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> \n";
		$log_str .= "[Payment] Param to booking server: \n";
		$log_str .= "[Payment] (ref_no => ".$param_list['ref_no'].")\n";
		$log_str .= "[Payment] (result => ".$param_list['result'].")\n";
		$log_str .= "[Payment] (fail_remark => ".$param_list['fail_remark'].")\n";
		$webServiceClient->resetClient('/booking.srv.php');
		$return = $webServiceClient->getResultFromServer($param_list, 'setPaymentResult');
		if ($return->faultcode() == 0) {
			$r = $return->value();
			$log_str .= "[Payment] Result from booking server: \n";
			foreach ($r as $key => $value) {
				$log_str .= "[Payment] (".$key." => ".$value.")\n";
			}
		} else {
			//TODO handle error here
			$log_str .= "[Payment] Result from booking server: "."Error: ".$return->faultCode()." Message: ".$return->faultString()."\n";
		}
		$log_str .= "[Payment] <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< ";
		logger_mgr::logInfo($log_str);
	}
?>
