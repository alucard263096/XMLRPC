<?php
/*
 * Created on 2010-8-21
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
	require '../include/common.inc.php';
	require ROOT.'/classes/mgr/smarty.cls.php';
	require ROOT.'/classes/mgr/web_service_client.cls.php';
	
	$param_list = array();
	
	$card_type=$_POST['card_type'];
	//echo $card_type;
	if($card_type==1)
	{
		$param_list['payease_url'] =$CONFIG['payease']['e_payease_url'];
		$param_list['mid'] = $CONFIG['payease']['e_payease_id'];
		$key =$CONFIG['payease']['e_payease_key'];
	}
	else
	{
		$param_list['payease_url'] = $CONFIG['payease']['payease_url'];
		$param_list['mid'] = $CONFIG['payease']['payease_id'];
		$key =$CONFIG['payease']['payease_key'];
	}
	$_SESSION['card_type']=$card_type;
	
	$param_list['ymd'] = date("Ymd");
	$param_list['trans_time']=date("Ymd");
	$param_list['trans_id'] = $_SESSION['payment']['trans_id'];
	//$param_list['trans_id'] = $_REQUEST['ref_no'];
	$param_list['oid'] = $param_list['ymd'].'-'.$param_list['mid'].'-'.$_REQUEST['ref_no'];
	$param_list['rcvname'] = $_REQUEST['name'];
	$param_list['rcvaddr'] = $_REQUEST['address'];
	if($_REQUEST['mobile_no'] != "") {
	 	$param_list['rcvtel'] = $_REQUEST['mobile_no'];
	} else if($_REQUEST['home_no'] != "") {
	 	$param_list['rcvtel'] = $_REQUEST['home_no'];
	} else if($_REQUEST['office_no'] != "") {
	 	$param_list['rcvtel'] = $_REQUEST['office_no'];
	} else {
	 	$param_list['rcvtel'] = 0;
	}
 	
 	$param_list['v_rcvpost'] = $_REQUEST['postal_code'];
 	$param_list['amount'] = $_REQUEST['total_amount'];
 	//$param_list['amount'] = "0.1";
 	$param_list['orderstatus'] = '0';
 	$param_list['ordername'] = $_REQUEST['name'];
 	$param_list['moneytype'] = 0;
 	$param_list['url'] = $CONFIG['payment']['payment_return_url'];
 	
 	$info = $param_list['moneytype'].$param_list['ymd'].$param_list['amount'].$param_list['rcvname'].$param_list['oid'].$param_list['mid'].$param_list['url'];
 	//for windows
 	exec(ROOT."/payment_gateway/md5win32 $info $key", $result, $res);
 	$param_list['md5info'] = $result[0];
 	//for linux
 	//$param_list['md5info']=bin2hex(mhash(MHASH_MD5,$info,$key));
 	//print_r($param_list);
 	insertLog();
	$smarty->assign('payease_url', $param_list['payease_url']);
	$smarty->assign('v_mid', $param_list['mid']);
	$smarty->assign('v_oid', $param_list['oid']);
	$smarty->assign('v_rcvname', $param_list['rcvname']);
	$smarty->assign('v_rcvaddr', $param_list['rcvaddr']);
	$smarty->assign('v_rcvtel', $param_list['rcvtel']);
	$smarty->assign('v_rcvpost', $param_list['v_rcvpost']);
	$smarty->assign('v_amount', $param_list['amount']);
	$smarty->assign('v_ymd', $param_list['ymd']);
	$smarty->assign('v_orderstatus', $param_list['orderstatus']);
	$smarty->assign('v_ordername', $param_list['ordername']);
	$smarty->assign('v_moneytype', $param_list['moneytype']);
	$smarty->assign('v_url', $param_list['url']);
	$smarty->assign('v_md5info', $param_list['md5info']);
	$smarty->display(ROOT.'/templates/payment/payease.tpl');
	
//------------------------------------- functions ------------------------------------

function insertLog() 
{
	global $param_list;
	global $webServiceClient;
		
	$webServiceClient->resetClient('/payment.srv.php');
	$return = $webServiceClient->getResultFromServer($param_list, 'insertPayeaseLog');
	if ($return->faultcode() == 0) 
	{
			// TODO nothing
	} else 
	{
		logger_mgr::logError('[Payment] insert payment log error!');
	}
}

?>
