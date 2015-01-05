<?php
require 'include/common.inc.php';
 require ROOT.'/classes/datamgr/member.cls.php';
 require ROOT.'/classes/datamgr/show.cls.php';
 require ROOT.'/classes/datamgr/booking.cls.php';
 require ROOT.'/functions/booking.func.php';

 $action=$_REQUEST["action"];
 switch($action)
 {
 	case "get_kiosk_print_ticket_info":
 		$ref_no=$_REQUEST["ref_no"];
 		
		printArray();
 	break;
 }

//echo md5("1375108256211");















?>