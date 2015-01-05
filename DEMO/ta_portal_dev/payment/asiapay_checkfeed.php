<?php 
	require '../include/common.inc.php';
 	require ROOT.'/classes/mgr/smarty.cls.php';
	require ROOT.'/classes/mgr/web_service_client.cls.php';
	
	$param_list['ref'] = $_GET['ref'];
	$param_list['ref_no'] = $_GET['ref'];
	$ref = $param_list['ref'];
 	set_time_limit(40);
 	$stime = time();
 	$etime = $stime + 30;
	$feedarrive = false; 	
	$feedfail = true;
	$param_list['result'] = "C";
	$param_list['fail_remark'] = "";
	
 	while(time() < $etime)
 	{ 	
		$webServiceClient->resetClient('/payment.srv.php');
		$return = $webServiceClient->getResultFromServer($param_list, 'getAsiapayAuthlog');		
		if ($return->faultcode() == 0) {
			$cv_list = $return->value();			
			if($cv_list['feed_time']){
				$feedarrive = true;				
				if($cv_list['success_code'] == 0)
				{
					$param_list['result'] = "Y";
					$feedfail = false;									
				}
				break;
			}
		}		
			
		sleep(3);	
		$feedarrive = true;		
		$param_list['result'] = "Y";
		$feedfail = false;	
		break;								
 	}
 	
 	
 	logger_mgr::logInfo("[Asiapay] >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> ");
	logger_mgr::logInfo("[Asiapay] Checking feed: ");
	logger_mgr::logInfo("[Asiapay] Set Payment Result ");
	logger_mgr::logInfo("[Asiapay] <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< ");
 	
 	setPaymentResult();
 	if($feedarrive && !$feedfail)	
 		echo $LANG["payment"]["success"]["1"].$LANG["payment"]["success"]["2"].$ref;
	elseif($feedarrive && $feedfail)
		echo $LANG["payment"]["fail"]["1"].$LANG["payment"]["fail"]["2"].$ref;
	else 
		echo "(".$ref.")".$LANG["payment"]["cancel"];
		

	
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