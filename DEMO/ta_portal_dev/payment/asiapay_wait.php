<?php 

	require '../include/common.inc.php';
	require ROOT.'/classes/mgr/smarty.cls.php';
	//require ROOT.'/classes/datamgr/payment_mgr.cls.php';
	require ROOT.'/classes/mgr/web_service_client.cls.php';

	$pMtd = $_POST['pMtd'];
	
	$param_list['merchantID'] = $CONFIG['asiapay']['merchantID'];
	$param_list['currCode'] = $CONFIG['asiapay']['currCode'];
	$param_list['successUrl'] = $CONFIG['payment']['payment_return_url'];
	$param_list['failUrl'] = $CONFIG['payment']['payment_return_url'];
	$param_list['cancelUrl'] = $CONFIG['payment']['payment_cancel_url'];
	$param_list['errorUrl'] = $CONFIG['payment']['payment_return_url'];
		
	$param_list['lang'] = 'C';
	$lang = $session['lang_id'];
	if($lang == 1)	
		$param_list['lang'] = 'E';		
	elseif($lang == 2)
		$param_list['lang'] = 'C';
	elseif($lang == 3)
		$param_list['lang'] = 'X';
	
	if($pMtd == "CP")
	{	
		$param_list['actionUrl'] = $CONFIG['asiapay']['CP_actionUrl'];
		$param_list['transid'] = $_POST['transid'];
		$param_list['orderRef'] = $_POST['orderRef'];		
		$param_list['amount'] = $_POST['amount'];	
		$param_list['payMethod'] = $CONFIG['asiapay']['CP_payMethod'];	
		$param_list['payType'] = $CONFIG['asiapay']['CP_payType'];		
		$param_list['cardNo'] = '';
		$param_list['securityCode'] = '';
		$param_list['epMonth'] = '';
		$param_list['epYear'] = '';
		$param_list['cardHolder'] = '';
					
		$_SESSION['payment']['orderRef'] = $param_list['orderRef'];
		$webServiceClient->resetClient('/payment.srv.php');
		$webServiceClient->getResultFromServer($param_list, 'insertAsiapayAuthlog');					
		
		$smarty->assign("orderRef", $param_list['orderRef']);		
		$smarty->assign("merchantId", $param_list['merchantID']);
		$smarty->assign("amount", $param_list['amount']);
		$smarty->assign("currCode", $param_list['currCode']);
		$smarty->assign("payMethod", $param_list['payMethod']);
		$smarty->assign("payType", $param_list['payType']);
		$smarty->assign("successUrl", $param_list['successUrl']);
		$smarty->assign("failUrl", $param_list['failUrl']);
		$smarty->assign("cancelUrl", $param_list['cancelUrl']);
		$smarty->assign("pg_lang", $param_list['lang']);
		$smarty->assign("action_url", $CONFIG['asiapay']['CP_actionUrl']);			
		$smarty->display(ROOT.'/templates/payment/asiapay_wait_cp.tpl');	
	}
	elseif($pMtd = 'CC')
	{		
		$param_list['actionUrl'] = $CONFIG['asiapay']['CC_actionUrl'];
		$param_list['transid'] = $_POST['transid'];
		$param_list['orderRef'] = $_POST['orderRef'];
		$param_list['amount'] = $_POST['amount'];
		if($_POST['pMethod'] == "VS")
			$param_list['payMethod'] = "VISA";
		elseif($_POST['pMethod'] == "MS")
			$param_list['payMethod'] = "Master";
		$param_list['payType'] = $CONFIG['asiapay']['CC_payType'];		
		$param_list['cardNo'] = $_POST['cardNo'];
		$param_list['securityCode'] = $_POST['securityCode'];
		$param_list['epMonth'] = $_POST['epMonth'];
		$param_list['epYear'] = $_POST['epYear'];
		$param_list['cardHolder'] = 'NO NAME';
		
		$_SESSION['payment']['orderRef'] = $param_list['orderRef'];
		$webServiceClient->resetClient('/payment.srv.php');
		$webServiceClient->getResultFromServer($param_list, 'insertAsiapayAuthlog');
		
		$smarty->assign("pg_lang", $param_list['lang']);
		$smarty->assign('orderRef', $param_list['orderRef']);
		$smarty->assign("merchantId", $param_list['merchantID']);
		$smarty->assign('amount', $param_list['amount']);
		$smarty->assign('currCode', $param_list['currCode']);
		$smarty->assign('pMethod',$param_list['payMethod']);
		$smarty->assign('cardNo', $param_list['cardNo']);
		$smarty->assign('seurityCode', $param_list['securityCode']);
		$smarty->assign('epMonth',$param_list['epMonth']);
		$smarty->assign('epYear',$param_list['epYear']);
		$smarty->assign('cardHolder','NO NAME');
		$smarty->assign('payType', $param_list['payType']);
		$smarty->assign('successUrl', $param_list['successUrl']);
		$smarty->assign('failUrl',$param_list['failUrl']);
		$smarty->assign('errorUrl', $param_list['errorUrl']);
		$smarty->assign('action_url', $CONFIG['asiapay']['CC_actionUrl']);
		$smarty->display(ROOT.'/templates/payment/asiapay_wait_cc.tpl');
		
	}

?>
