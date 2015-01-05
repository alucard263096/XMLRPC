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
	
	if ($CONFIG['payment']['payment_gateway_type'] == 'payease') {
		if (isset($_REQUEST['v_oid'])) {
			$param_list['oid'] = $_REQUEST['v_oid'];
			$param_list['pmode'] = $_REQUEST['v_pmode'];
			$param_list['pstatus'] = $_REQUEST['v_pstatus'];
			$param_list['pstring'] = $_REQUEST['v_pstring'];
			$param_list['md5info'] = $_REQUEST['v_md5info'];
			$param_list['amount'] = $_REQUEST['v_amount'];
			$param_list['moneytype'] = $_REQUEST['v_moneytype'];
			$param_list['md5money'] = $_REQUEST['v_md5money'];
			$param_list['sign'] = $_REQUEST['v_sign'];
			$param_list['trans_id'] = $_SESSION['payment']['trans_id'];
			
			
			/*
			echo $param_list['oid'].'<br/>';
			echo $param_list['pmode'].'<br/>';
			echo $param_list['pstatus'].'<br/>';
			echo $param_list['pstring'].'</br>';
			echo $param_list['md5info'].'<br/>';
			echo $param_list['amount'].'<br/>';
			echo $param_list['moneytype'].'<br/>';
			echo $param_list['md5money'].'<br/>';
			echo $param_list['sign'].'<br/>';
		    */
		    
			$arr=explode('-',$param_list['oid']);
			$param_list['ref_no'] = $arr[2];
			
			/*
			if ($_SESSION['payment']['ref_no'] == $param_list['ref_no']) {
				;
				updatePayeaseLog();
			}*/
			
			if(isset($_SESSION['card_type'])==true && $_SESSION['card_type']==1)
				$key =$CONFIG['payease']['e_payease_key'];
			else
				$key =$CONFIG['payease']['payease_key'];
					
			$info = $param_list['oid'].$param_list['pstatus'].$param_list['pstring'].$param_list['pmode'];
			$md5info=bin2hex(mhash(MHASH_MD5,$info,$key));
			$money = $param_list['amount'].$param_list['moneytype'];
			$md5money=bin2hex(mhash(MHASH_MD5,$money,$key));
		
			$is_md5_passed = "N";
			if ($md5info == $param_list['md5info'] && $md5money == $param_list['md5money']) 
			{
				$is_md5_passed = "Y";
			}
			$param_list['is_md5_passed'] = $is_md5_passed;
			
			updatePayeaseLog();
			
			if ($_SESSION['payment']['ref_no'] == $param_list['ref_no'] && $is_md5_passed == "Y") {
				if (isset($param_list['pstatus']) && ($param_list['pstatus'] == 1 || $param_list['pstatus'] == 20)) {
					$param_list['result'] = 'Y';
					$param_list['fail_remark'] = '';
					$smarty->assign('status', 0);
				} else {
					$param_list['result'] = 'C';
					$param_list['fail_remark'] = $param_list['pstring'];
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
			$smarty->assign('status', -1);
		}
		
		$smarty->assign('param_list', $param_list);
		$smarty->display(ROOT.'/templates/payment/payment_result.tpl');
	} else {
								
		if (isset($_REQUEST['Ref'])){
			$param_list['ref'] = $_REQUEST['Ref'];
			if($_SESSION['payment']['orderRef'] == $param_list['ref']){						
				$smarty->assign('status', 0);}
			else{
				$smarty->assign('status', -1);}							
		}
		else		
			$smarty->assign('status', -1);
		
		$smarty->assign('ref', $param_list['ref']);
		$smarty->display(ROOT.'/templates/payment/payment_asiapay_result.tpl');
	}
	
	
//------------------------------------- functions ------------------------------------
	
	function updatePayeaseLog() {
		global $param_list;
		global $webServiceClient;
		
		$webServiceClient->resetClient('/payment.srv.php');
		$return = $webServiceClient->getResultFromServer($param_list, 'updatePayeaseLog');
		if ($return->faultcode() == 0) {
			//TODO nothing
		} else {
			logger_mgr::logError('[Payment] update payease log error!');
		}
	}	
	
 function updatePaymentResult($param_list)
 {
 	global $webServiceClient;	
	$webServiceClient->resetClient('/payment.srv.php');
	$return = $webServiceClient->getResultFromServer($param_list, 'updatePaymentResult');
	$rlist=$return->value();
	return $rlist["result"];
 }

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
