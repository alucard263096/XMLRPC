<?php
/*
 * Created on 2010-7-27
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
  require 'include/common.inc.php';
  require ROOT.'/classes/mgr/sqlsrv.cls.php';
  require ROOT.'/classes/datamgr/booking.cls.php';

 $action=$_POST["action"];
 
 if($action=="remove_order")
 {
 	$rs=$bookingMgr->deleteOrder($_POST["order_id"]);
 	echo $rs[0];
 }
 else if($action=="save_ticket_type")
 {
 	$rs=$bookingMgr->saveTicketType($_POST["ticket_list"]);
 	echo $rs[0];
 }
 else if($action=="clear_shoppingcart")
 {
 	$rs=$bookingMgr->cancelTrans($_SESSION["shoppingcart"]["trans_id"]);
 	unset($_SESSION["shoppingcart"]);
 	echo $rs[0];
 }
 $dbmgr->close();
 
?>