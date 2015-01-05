<?php
/*
 * Created on Jul 30, 2010
 * Created by leolu
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 require '/include/common.inc.php';
 require ROOT.'/classes/mgr/sqlsrv.cls.php';
 require ROOT.'/classes/mgr/smarty.cls.php';
 require ROOT.'/classes/datamgr/payment_mgr.cls.php';
 
  $key =$CONFIG['payease_key'];
 
 //paramers returned by pay ease
 $v_oid=$_GET['v_oid'];
 $v_pmode=$_GET['v_pmode'];//payment type
 $v_pstatus=$_GET['v_pstatus'];//1=已提交,2=支付成功,30=支付失败
 $v_pstring=$_GET['v_pstring'];
 $v_md5info=$_GET['v_md5info'];//v_oid+v_pstatus+v_pstring+v_pmode
 $v_amount=$_GET['v_amount'];
 $v_moneytype=$_GET['v_moneytype'];
 $v_md5money=$_GET['v_md5money'];
 $v_sign=$_GET['v_sign'];
 
 $v_oid_arr=explode("-",$v_oid);
 $v_md5_str=$v_oid.$v_pstatus.$v_pstring.$v_pmode;
 $v_money_str=$v_amount.$v_moneytype;
 
exec(dirname(__FILE__)."/payment_gateway/md5win32 $v_md5_str $payease_key",$result_,$res);
exec(dirname(__FILE__)."/payment_gateway/md5win32 $v_money_str $payease_key",$result_money,$res);
 
 $is_md5_passed="Y";
 if($result_[0]!=$v_md5info)
	$is_md5_passed="N";
 if($result_money[0]!=$v_md5money)
	$is_md5_passed="N";
 
 $result=$paymentMgr-> savePayEasePaymentResult(
				$_SESSION['shoppingcart']['trans_id'],
				$_SESSION['trans_details']['trans_time'],
				$CONFIG['payease_id'],
				$v_oid,
				$_SESSION['trans_details']['rcvname'],
				$_SESSION['trans_details']['rcvaddr'],
				$_SESSION['trans_details']['rcvpost'],
				$_SESSION['trans_details']['ymd'],
				$_SESSION['trans_details']['orderstatus'],
				$_SESSION['trans_details']['ordername'],
				$_SESSION['trans_details']['moneytype'],
				$v_pstatus,
				$v_pstring,
				$v_pmode,
				$v_md5info,
				$v_amount,
				$v_moneytype,
				$v_md5money,
				$v_sign,
				$is_md5_passed
				);
				


if(isset($v_oid)==false || $_SESSION["trans_id"]!=$v_oid_arr[2])
{
	//error
}
else if($result_[0]!=$v_md5info)
{
	//error
}

else if($result_money[0]!=$v_md5money)
{
	//error
}
else
{
	//success
}



?>
