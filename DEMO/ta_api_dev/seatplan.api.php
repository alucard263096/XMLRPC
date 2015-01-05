<?php
/*
 * Created on Aug 7, 2010
 * Created by leolu
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */

require 'include/common.inc.php';
 require ROOT.'/classes/mgr/webservice.cls.php';
 require ROOT.'/classes/mgr/web_service_client.cls.php';
 require ROOT.'/classes/datamgr/show.cls.php';
 require ROOT.'/classes/datamgr/seatplan.cls.php';
 require ROOT.'/functions/seatplan.func.php';
 
  $action=$_REQUEST["action"];

 switch($action)
 {
 	case "get_seatplan":
	 	if (isset($_REQUEST['scheduleId'])) {
			$param_list['show_id'] = $_REQUEST['scheduleId'];
		}
		$param_list['category_id'] = $CONFIG['movie_category_id'];
		$param_list['purchase_way'] = $CONFIG['purchase_way'];
		$param_list['lang_id'] = $lang_id;
 		$seatList=getSeatplanByShowId($param_list);
 		$seatList_new=getSeatplanArray($seatList);
 		printArray($seatList_new);
 		break;
 	case "get_kiosk_seat_plan":
		$param_list['show_id'] = $_REQUEST['show_id'];
		$param_list['kiosk'] = "Y";
 		$seatList=getSeatplanByShowId($param_list);
 		echo $seatList;
	break;
 }
				

 
 $dbmgr->close();
 
 //--------------------------------------------------functions -------------------------------------------------------

?>
