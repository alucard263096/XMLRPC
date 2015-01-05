<?php
/*
 * Created on Aug 12, 2010
 * Created by leolu
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 
 require 'include/common.inc.php';
 require ROOT.'/classes/datamgr/booking.cls.php';
 require ROOT.'/classes/datamgr/translog.cls.php';
 require ROOT.'/functions/translog.func.php';


 $action=$_REQUEST["action"];
 //$action='get_ticket_info';
 switch($action)
 {
 	case "get_ticket_info":
 		$validation_code=$_REQUEST["validation_code"];
 		//$validation_code='89483734';           
 		$rs=getOrderDetailsByTransId(-1,$validation_code,'');
 		printArray($rs);	
 	break;
 	case "update_print_ticket":
		$ticket_str=$_REQUEST["ticket_str"];
		//$ticket_str="1017,1018";
		printTicket($ticket_str);
 		echo "0";
 	break;
 	
 }





?>