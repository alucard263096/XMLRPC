<?php
/*
 * Created on 2010-8-7
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
	require '../include/common.inc.php';
	require ROOT.'/classes/mgr/smarty.cls.php';
	require ROOT.'/classes/mgr/web_service_client.cls.php';
	require ROOT.'/include/payment.inc.php';
	
	// Parameter List
	$param_list = isset($_SESSION['order_pay']['param_list'])?$_SESSION['order_pay']['param_list']:array();
	
	$action = $_REQUEST['action'];
	
	$param_list['category_id'] = 0; 

	if (isset($action)) {
		switch($action) {		
			case "setTrans":
				$ticket_type_id_temp=explode(",",$_REQUEST['ticket_type_id']);		
				$id="";			
				foreach ($ticket_type_id_temp as $ticket_type_number_id){							
					if($ticket_type_number_id!=null || $ticket_type_number_id!='') {
						$ticket_type_id_list=explode("n",$ticket_type_number_id);
						//print_r($ticket_type_id_list);
						for($i=0;$i<$ticket_type_id_list[0];$i++) {						
							$id=$id.$ticket_type_id_list[1].",";
						}
					}
				}
				$param_list['ticket_type'] = $id;
				
				$param_list['name'] = $_REQUEST['name'];
				$param_list['phone_no'] = $_REQUEST['phone'];
				$param_list['phone_country_code'] = $_REQUEST['phone_code'];
				$param_list['email'] = $_REQUEST['email'];
				$param_list['delivery_type_id'] = $_REQUEST['delivery_type_id'];
				
				
				if (isset($_REQUEST['cc_no'])) {
					$param_list['cc_no'] = $_REQUEST['cc_no'];
				}
				if (isset($_REQUEST['exp_date'])) {
					$param_list['exp_date'] = $_REQUEST['exp_date'];
				}
				if (isset($_REQUEST['holder_name'])) {
					$param_list['holder_name'] = $_REQUEST['holder_name'];
				}
				if (isset($_REQUEST['pt_code'])) {
					$param_list['pt_code'] = $_REQUEST['pt_code'];
				}
				if (isset($_REQUEST['recipient_name'])) {
					$param_list['recipient_name'] = $_REQUEST['recipient_name'];
				}
				if (isset($_REQUEST['mobile_country_code'])) {
					$param_list['mobile_country_code'] = $_REQUEST['mobile_country_code'];
				}
				if (isset($_REQUEST['mobile_no'])) {
					$param_list['mobile_no'] = $_REQUEST['mobile_no'];
				}
				if (isset($_REQUEST['home_country_code'])) {
					$param_list['home_country_code'] = $_REQUEST['home_country_code'];
				}
				if (isset($_REQUEST['home_area_code'])) {
					$param_list['home_area_code'] = $_REQUEST['home_area_code'];
				}
				if (isset($_REQUEST['home_no'])) {
					$param_list['home_no'] = $_REQUEST['home_no'];
				}				
				if (isset($_REQUEST['address'])) {
					$param_list['address'] = $_REQUEST['address'];
				}
				if (isset($_REQUEST['remark'])) {
					$param_list['remark'] = $_REQUEST['remark'];
				}
				if (isset($_REQUEST['postal_code'])) {
					$param_list['postal_code'] = $_REQUEST['postal_code'];
				}
				if (isset($_REQUEST['district_id'])) {
					$param_list['district_id'] = $_REQUEST['district_id'];
				}
				
				$_SESSION['order_pay']['param_list'] = $param_list;
				setTrans();
				exit();
				break;			
			default:
				break;
		}
	} else {
		init();
	}
	
	$_SESSION['order_pay']['param_list'] = $param_list;
	$smarty->assign("param_list", $param_list);
	$smarty->assign("module", $_REQUEST["module"]);
	
	if (isset($action)) {
		if ($action == 'loadJs') {
			$smarty->display(ROOT.'/templates/movie/choose_seat_js.tpl');
		} else {
			$smarty->display(ROOT.'/templates/member/choose_seat_login.tpl');
		}
	} else {
		$smarty->display(ROOT.'/templates/payment/order_pay.tpl');
	}

//------------------------------------- functions ------------------------------------

	function init() {
		global $lang_id;
		global $ccd_list;
		global $param_list;
		global $webServiceClient;
		global $smarty;
		
		
		if ($param_list['lang_id'] != $lang_id) {
			$param_list['lang_id'] = $lang_id;
			// get Country-City-District List
			$webServiceClient->resetClient('/city.srv.php');
			$returnCountry = $webServiceClient->getResultFromServer($param_list, 'getDeliveryCountry');
			if ($returnCountry->faultcode() == 0) {
				$rs = $returnCountry->value();
				$smarty->assign("country",$rs);
				
			} else {
				//TODO handle error here
			}
			
			$returnDeliveryCity = $webServiceClient->getResultFromServer($param_list, 'getDeliveryCity');
			if ($returnDeliveryCity->faultcode() == 0) {
				$rs = $returnDeliveryCity->value();
				$smarty->assign("city",$rs);
			} else {
				//TODO handle error here
			}
			
			$returnDistrict = $webServiceClient->getResultFromServer($param_list, 'getDeliveryDistrict');
			if ($returnDistrict->faultcode() == 0) {
				$rs = $returnDistrict->value();
				$smarty->assign("district",$rs);
			} else {
				//TODO handle error here
			}
			
		} else {
			// get Country-City-District List
				$webServiceClient->resetClient('/city.srv.php');
				$returnCountry = $webServiceClient->getResultFromServer($param_list, 'getDeliveryCountry');
				if ($returnCountry->faultcode() == 0) {
					$rs = $returnCountry->value();
					$smarty->assign("country",$rs);
				} else {
					//TODO handle error here
				}
				
				$returnDeliveryCity = $webServiceClient->getResultFromServer($param_list, 'getDeliveryCity');
				if ($returnDeliveryCity->faultcode() == 0) {
					$rs = $returnDeliveryCity->value();
					$smarty->assign("city",$rs);
				} else {
					//TODO handle error here
				}
				
				$returnDistrict = $webServiceClient->getResultFromServer($param_list, 'getDeliveryDistrict');
				if ($returnDistrict->faultcode() == 0) {
					$rs = $returnDistrict->value();
					$smarty->assign("district",$rs);
				} else {
					//TODO handle error here
				}
			$param_list = array();
		}
		
		initParams();
		setShowDetail();
		setSeatTicketGroupTicketType();
		getTicketGroupTicketType();
		getAllDelivery();
	}
	
	function initParams() {
		global $CONFIG;
		global $param_list;
		global $lang_id;
		
		if (isset($_REQUEST['show_id'])) {
			$param_list['show_id'] = $_REQUEST['show_id'];
		}
		if (isset($_REQUEST['seat_list'])) {			
			$param_list['seat_list'] = $_REQUEST['seat_list'];
		}
		if (isset($_REQUEST['ticket_group_id'])) {			
			$param_list['ticket_group_id'] = $_REQUEST['ticket_group_id'];
		}
		$param_list['purchase_way'] = $CONFIG['purchase_way'];
		$param_list['staff_id'] = $CONFIG['staff_id'];
		if (isset($_SESSION['member'])) {
			$param_list['member_id'] = $_SESSION['member']['id'];
		} else {
			$param_list['member_id'] = 0;
		}
		$param_list['lang_id'] = $lang_id;
		$param_list['payment_gateway_type'] = $CONFIG['payment']['payment_gateway_type'];
	}	
	
	// Set Show Detail
	function setShowDetail() {
		global $smarty;
		global $webServiceClient;
		global $param_list;
		
		$webServiceClient->resetClient('/show.srv.php');
		$return = $webServiceClient->getResultFromServer($param_list, 'getShowDetails');
		if ($return->faultcode() == 0) {
			$show_detail = $return->value();
			$param_list['show_type'] = $show_detail['st_code'];
			$smarty->assign("show_detail", $show_detail);
		} else {
			//TODO handle error here
		}
	}
	// Set SeatTicketGroupTicketType
	function setSeatTicketGroupTicketType(){
		global $smarty;
		global $webServiceClient;
		global $param_list;
		
		$webServiceClient->resetClient('/booking.srv.php');
		
		$return = $webServiceClient->getResultFromServer($param_list, 'getSeatTicketGroupTicketType');
		if ($return->faultcode() == 0) {
			
			$seat_ticket_group_ticket_type_list = $return->value();
			if($seat_ticket_group_ticket_type_list[0][0]=="FS"||$seat_ticket_group_ticket_type_list[0][0]=="TS")
			{
				$seat_count=$param_list["seat_list"];
			}
			else
			{
				$seat_count=count($seat_ticket_group_ticket_type_list);
			}
			$smarty->assign("seat_ticket_group_ticket_type_list", $seat_ticket_group_ticket_type_list);
			
			$smarty->assign("seat_count", $seat_count);
		} else {
			//TODO handle error here
		}
	}
	
	function getTicketGroupTicketType(){
		global $smarty;
		global $webServiceClient;
		global $param_list;
		
		$webServiceClient->resetClient('/booking.srv.php');
		$return = $webServiceClient->getResultFromServer($param_list, 'getTicketGroupTicketType');
		if ($return->faultcode() == 0) {			
			$ticket_group_ticket_type_list = $return->value();
			$param_list['ticket_group_id'] = $ticket_group_ticket_type_list[0][ticket_group_id];	
			$ticket_count=count($ticket_group_ticket_type_list[0]["ticket_type_details"]);
			$symbol=$ticket_group_ticket_type_list[0]["ticket_type_details"][0][symbol];
			
			$smarty->assign("symbol", $symbol);
			$smarty->assign("ticket_count", $ticket_count+1);
			$smarty->assign("ticket_type_count", $ticket_count);
			$smarty->assign("ticket_group_ticket_type_list", $ticket_group_ticket_type_list);
		} else {
			//TODO handle error here
		}
		
	}
	
	function getAllDelivery(){
		global $smarty;
		global $webServiceClient;
		global $param_list;
		
		$webServiceClient->resetClient('/delivery.srv.php');
		$return = $webServiceClient->getResultFromServer($param_list, 'getAllDelivery');
		if ($return->faultcode() == 0) {			
			$all_delivery_list = $return->value();
			$smarty->assign("all_delivery_list", $all_delivery_list);
		} else {
			//TODO handle error here
		}
	}
	
	function setTrans(){
		global $smarty;
		global $webServiceClient;
		global $param_list;
		global $LANG;
		
		$webServiceClient->resetClient('/booking.srv.php');
		$return = $webServiceClient->getResultFromServer($param_list, 'setTrans');
		if ($return->faultcode() == 0) {	
			$r = $return->value();
			if ($r['result_code'] == 0) {
				$_SESSION['payment']['ref_no'] = $r['ref_no'];
				$_SESSION['payment']['trans_id'] = $r['trans_id'];
				echo $r['result_code'].":".$r['trans_id']."_".$r['total_amount']."_".$r['ref_no']."_".$r['currency_id']."_".$r['payease_moneytype'];
			} else {
				echo $r['result_code'].":".$LANG['order_pay']['result'][$r['result_code']];
			}
		} else {
			//TODO handle error here
			echo '-1:'.$LANG['order_pay']['result'][-1];
		}
	}
	
?>