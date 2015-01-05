<?php 

	require '../include/common.inc.php';
 	require ROOT.'/classes/mgr/smarty.cls.php';
 	//require ROOT.'/classes/datamgr/payment_mgr.cls.php';
 	require ROOT.'/classes/mgr/web_service_client.cls.php';
 	

	$param_list['src'] = $_REQUEST['src'];					//Return bank host status code (secondary)
	$param_list['prc'] = $_REQUEST['prc'];					//Return bank host status code (primary)
	$param_list['ord'] = $_REQUEST['Ord'];					//Bank Reference – Order id
	$param_list['holder'] = $_REQUEST['Holder'];			//The Holder Name of the Payment Account
	$param_list['successcode'] = $_REQUEST['successcode'];	//0- succeeded, 1- failure, Others - error
	$param_list['ref'] = $_REQUEST['Ref'];					//Merchant‘s Order Reference Number
	$param_list['payref'] = $_REQUEST['PayRef'];			//PayDollar Payment Reference Number
	$param_list['amt'] = $_REQUEST['Amt'];					//Transaction Amount
	$param_list['cur'] = $_REQUEST['Cur'];					//Transaction Currency i.e. “344” - HKD
	$param_list['remark'] = $_REQUEST['remark'];	
	$param_list['authid'] = $_REQUEST['AuthId'];			//Approval Code
	$param_list['eci'] = $_REQUEST['eci'];					//ECI value (for 3D enabled Merchants)
	$param_list['payerauth'] = $_REQUEST['payerAuth'];		//Payer Authentication Status 
															//	Y - Card is 3D-secure enrolled and authentication succeeds.
															//	N - Card is 3D-secure enrolled but authentication fails.
															//	P - 3D Secure check is pending
															//	A - Card is not 3D-secure enrolled yet
															//	U - 3D-secure check is not processed.
	$param_list['sourceIp'] = $_REQUEST['sourceIp'];		//IP address of payer
	$param_list['ipcountry'] = $_REQUEST['ipCountry'];		//Country of payer
	$param_list['paymethod'] = $_REQUEST['payMethod'];		//Payment method (e.g. VISA, Master, JCB, AMEX)
	
	//UpdateAsiaPayLog
	logger_mgr::logInfo("[Asiapay] >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> ");
	logger_mgr::logInfo("[Asiapay] Feed from payment gateway: ");
	logger_mgr::logInfo("[Asiapay] (src => ".$param_list['src'].")");
	logger_mgr::logInfo("[Asiapay] (prc => ".$param_list['prc'].")");
	logger_mgr::logInfo("[Asiapay] (ord => ".$param_list['ord'].")");
	logger_mgr::logInfo("[Asiapay] (successcode => ".$param_list['successcode'].")");
	logger_mgr::logInfo("[Asiapay] (ref => ".$param_list['ref'].")");
	logger_mgr::logInfo("[Asiapay] (payref => ".$param_list['payref'].")");
	logger_mgr::logInfo("[Asiapay] (amt => ".$param_list['amt'].")");
	logger_mgr::logInfo("[Asiapay] (cur => ".$param_list['cur'].")");
	logger_mgr::logInfo("[Asiapay] (remark => ".$param_list['remark'].")");
	logger_mgr::logInfo("[Asiapay] (authid => ".$param_list['authid'].")");
	logger_mgr::logInfo("[Asiapay] (eci => ".$param_list['eci'].")");
	logger_mgr::logInfo("[Asiapay] (payerauth => ".$param_list['payerauth'].")");
	logger_mgr::logInfo("[Asiapay] (sourceIp => ".$param_list['sourceIp'].")");
	logger_mgr::logInfo("[Asiapay] (ipcountry => ".$param_list['ipcountry'].")");
	logger_mgr::logInfo("[Asiapay] (paymethod => ".$param_list['paymethod'].")");
			
	$webServiceClient->resetClient('/payment.srv.php');
	$return = $webServiceClient->getResultFromServer($param_list, 'updateAsiapayAuthlog');	

	
	
?>