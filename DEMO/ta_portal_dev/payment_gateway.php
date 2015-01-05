<?php
/*
 * Created on May 18, 2010
 * Created by leolu
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 
require 'include/common.inc.php';
require ROOT.'/classes/mgr/sqlsrv.cls.php';
require ROOT.'/classes/mgr/smarty.cls.php';
require ROOT.'/classes/datamgr/delivery.cls.php';
require ROOT.'/classes/datamgr/booking.cls.php';

/*if(!isset($_SESSION["shoppingcart"]["trans_id"]))
 {
 	$smarty->display(ROOT.'/templates/shoppingcart_clear.tpl');
 	exit();
 }
 	
 $trans_id=	$_SESSION["shoppingcart"]["trans_id"];
 $trans_detail=$bookingMgr->getOrderDetailsByTransId($trans_id);
 if(count($trans_detail)==0)
 {
 	$smarty->display(ROOT.'/templates/shoppingcart_clear.tpl');
 	exit();
 }
*/
	
 $trans_arr= $bookingMgr->getTransPaymentInfo($_SESSION["shoppingcart"]["trans_id"],$_SEESION['lang_id']);	
 
 $todayCode = date("Ymd");
 $key =$CONFIG['payease_key'];
 $payment_gateway_url=$CONFIG['payment_gateway_url'];
 $v_mid=$CONFIG['payease_id'];
 $v_oid=$todayCode.'-'.$CONFIG['payease_id'].'-'.$_SESSION["shoppingcart"]["trans_id"];
 $v_rcvname=$trans_arr['recipient_name'];
 $v_rcvaddr=$trans_arr['address'];
 
 if($trans_arr['mobile_no']!="")
 	$v_rcvtel=$trans_arr['mobile_no'];
 else if($trans_arr['home_no']!="")
 	$v_rcvtel=$trans_arr['home_no'];
 else if($trans_arr['office_no'])
 	$v_rcvtel=$trans_arr['office_no'];
 else
 	$v_rcvtel=0;
 		
 $v_rcvpost=$trans_arr['postal_code'];
 $v_amount=$trans_arr['total_amount'];
 $v_ymd=$todayCode;
 $v_orderstatus='0';
 $v_ordername=$trans_arr['recipient_name'];
 $v_moneytype=$trans_arr['currency_id']==1?0:2;
 $v_url=$CONFIG['payment_gateway_return_url'];
 
  /*$v_rcvname='张三';
 $v_rcvaddr='北京海淀';
 $v_rcvtel='68475566';
 $v_rcvpost='100036';
 $v_amount='0.01';
 $v_ymd=$todayCode;
 $v_orderstatus='0';
 $v_ordername='张三';
 $v_moneytype='0';
 */

 $v_md5info=$v_moneytype.$v_ymd.$v_amount.$v_rcvname.$v_oid.$v_mid.$v_url;
 exec(dirname(__FILE__)."/payment_gateway/md5win32 $v_md5info $key",$result,$res);
 
 $smarty->assign('payment_gateway_url',$payment_gateway_url);
 $smarty->assign('v_mid',$v_mid);
 $smarty->assign('v_oid',$v_oid);
 $smarty->assign('v_rcvname',$v_rcvname);
 $smarty->assign('v_rcvaddr',$v_rcvaddr);
 $smarty->assign('v_rcvtel', $v_rcvtel);
 $smarty->assign('v_rcvpost',$v_rcvpost);
 $smarty->assign('v_amount', $v_amount);
 $smarty->assign('v_ymd', $v_ymd);
 $smarty->assign('v_orderstatus',$v_orderstatus);
 $smarty->assign('v_ordername',$v_ordername);
 $smarty->assign('v_moneytype',$v_moneytype);
 $smarty->assign('v_url',$v_url);
 $smarty->assign('v_md5info',$result[0]);
 
 $smarty->display('payment_gateway.tpl');
 
?>
