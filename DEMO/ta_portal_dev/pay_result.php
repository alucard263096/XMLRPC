<?php
/*
 * Created on Jul 30, 2010
 * Created by leolu
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 
 //paramers returned by pay ease
 $v_oid=$_GET['v_oid'];
 $v_pmode=$_GET['v_pmode'];//payment type
 $v_pstatus=$_GET['v_pstatus'];//1=已提交,2=支付成功,30=支付失败
 $v_pstring=$_GET['v_pstring'];
 $v_md5info=$_GET['v_md5info'];//v_oid+v_pstatus+v_pstring+v_pmode
 
 
 
?>
