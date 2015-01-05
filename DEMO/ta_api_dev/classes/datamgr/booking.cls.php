<?php
 defined('IN_TA') or exit('Access Denied');
 
 require_once ROOT.'/classes/datamgr/ticket_type.cls.php';
 
 class BookingMgr {

	private static $instance = null;
	public static $dbmgr = null;
	public static $ticketTypeMgr = null;
	public static function getInstance() {
		return self :: $instance != null ? self :: $instance : new BookingMgr();
	}

	private function __construct() {
		
	}
	
	public function getTicketTypeByTicketGroup($ticket_group_id,$purchase_code,$language_id)
	{
		return $this->ticketTypeMgr->getTicketTypeByTicketGroup($ticket_group_id,$purchase_code,$language_id);
	}
	
	public function getSeatTicketGroup($show_id,$seat_list,$language_id)
	{
		$sql="usp_get_seat_ticket_group $show_id,'$seat_list',$language_id";
		$query = $this->dbmgr->query($sql);
		$result = $this->dbmgr->fetch_array_all($query); 
		return $result;
	}
	public function getTransByRefNo($ref_no)
	{
		$sql="usp_get_trans_by_ref_no '$ref_no'";
		$query = $this->dbmgr->query($sql);
		$result = $this->dbmgr->fetch_array_all($query); 
		return $result;
	}
	
	
	public function holdSeat($trans_id,$order_id,$show_id,$seat_list,$seat_type,$ticke_group_id,
	$member_id,$name,$email,$mobile_country_code,$mobile_no,$honorific_id,$purchase_way,$staff_id)
	{
		$staff_id=-1;
		
		$name=$name;
		$arr = array("'" => "''");
		$name=strtr($name,$arr);
		$email=strtr($email,$arr);
		$mobile_country_code=strtr($mobile_country_code,$arr);
		$mobile_no=strtr($mobile_no,$arr);
		
		$time=time();
 		$time=substr($time,2,strlen($time));
		
		
		if($seat_type!="SS")
		{
			if($trans_id==0||$order_id==0)
			{
				$sql="usp_set_trans_free $trans_id,$staff_id,'$purchase_way',$show_id,$seat_list,N'$name',$honorific_id,'$email','$mobile_country_code','$mobile_no',$member_id,$ticke_group_id,$time";
			}
			else
			{
				$sql="usp_set_trans_add_seat_free $trans_id,$order_id,$show_id,$seat_list,$staff_id,$ticke_group_id";
			}
		}
		else
		{
			if($trans_id==0||$order_id==0)
			{
				$sql="usp_set_trans $trans_id,$staff_id,'$purchase_way',$show_id,'$seat_list',N'$name',$honorific_id,'$email','$mobile_country_code','$mobile_no',$member_id,$time";
			}
			else
			{
				$sql="usp_set_trans_add_seat $trans_id,$order_id,$show_id,'$seat_list',$staff_id";
			}
		}
		
		$query = $this->dbmgr->query($sql);
		$result = $this->dbmgr->fetch_array_all($query); 
		
		return $result;
	}
	
	public function deleteSeat($trans_id,$order_id,$show_id,$seat_list,$seat_type,$ticke_group_id,$staff_id)
	{
		
		if($seat_type=="free")
		{
			$sql="usp_set_trans_delete_seat_free $trans_id,$order_id,$show_id,$seat_list,$staff_id,$ticke_group_id";
		}
		else
		{
			$sql="usp_set_trans_delete_seat $trans_id,$order_id,$show_id,'$seat_list',$staff_id";
		}
		
		$query = $this->dbmgr->query($sql);
		$result = $this->dbmgr->fetch_array_all($query); 
		
		return $result;
	}
	public function getOrderId($trans_id,$show_id)
	{
		$sql="usp_get_order_by_trans_show $trans_id,$show_id";
		$query = $this->dbmgr->query($sql);
		$result = $this->dbmgr->fetch_array_all($query); 
		
		if(count($result)==0)
		{
			return 0;
		}
		else
		{
			return $result[0]["order_id"];
		}
		
	}
	
	public function saveOrder($order_id)
	{
		
		
		$sql="usp_save_order $order_id";
		$query = $this->dbmgr->query($sql);
		
	}
	/*
	public function getOrderDetailsByTransId($trans_id,$language_id)
	{
		$sql="usp_get_trans_detail_by_id $trans_id,".$language_id;
		$query = $this->dbmgr->query($sql);
		$result = $this->dbmgr->fetch_array_all($query); 
		return $result;
	}
	*/
	public function deleteOrder($order_id)
	{
		$sql="usp_delete_order $order_id";
		$query = $this->dbmgr->query($sql);
		$result = $this->dbmgr->fetch_array($query); 
		return $result;
	}
	public function saveTicketType($ticket_type_list,$member_id,$staff_id)
	{
		
		$sql="usp_save_trans_ticket_type '$ticket_type_list',$member_id,$staff_id";
		$query = $this->dbmgr->query($sql);
		$result = $this->dbmgr->fetch_array($query); 
		
		return $result;
	}
	public function setPaymentResult($trans_id,$result,$fail_resulr)
	{
		$arr = array("'" => "''");
		$fail_resulr=strtr($fail_resulr,$arr);
		
		$sql="usp_payment $trans_id,'$result','$fail_resulr'";
		$query = $this->dbmgr->query($sql);
		$result = $this->dbmgr->fetch_array($query); 
		
		return $result;
	}
	public function cancelTrans($trans_id)
	{
		return $this->setPaymentResult($trans_id,'C','');
		/*$sql="usp_cancel_trans $trans_id";
		$query = $this->dbmgr->query($sql);
		$result = $this->dbmgr->fetch_array($query); 
		
		return $result;*/
	}
	
	public function getTransPaymentInfo($trans_id,$language_id){
		
		$sql="usp_get_trans_payment_info $trans_id,".$language_id;
		$query = $this->dbmgr->query($sql);
		return $result = $this->dbmgr->fetch_array($query); 
	}
	
	public function updateTransDelivery($trans_id,$delivery_type,$recipient_name
												,$mobile_country_code,$mobile_no,
												$home_country_code,$home_area_code,$home_no,
												$office_country_code,$office_area_code,$office_no,
												$address,$remark,$postal_code,$district_id
												)
	{
		
		
		$arr = array("'" => "''");
		$remark=strtr($remark,$arr);
		$mobile_country_code=strtr($mobile_country_code,$arr);
		$mobile_no=strtr($mobile_no,$arr);
		$home_country_code=strtr($home_country_code,$arr);
		$home_area_code=strtr($home_area_code,$arr);
		$home_no=strtr($home_no,$arr);
		$office_country_code=strtr($office_country_code,$arr);
		$office_area_code=strtr($office_area_code,$arr);
		$office_no=strtr($office_no,$arr);
		$recipient_name=strtr($recipient_name,$arr);
		$address=strtr($address,$arr);
		if(trim($postal_code)=="")
		{
			$postal_code=0;
		}
		$sql="usp_update_trans_delivery $trans_id,$delivery_type,N'$recipient_name','$mobile_country_code','$mobile_no','$home_country_code','$home_area_code','$home_no','$office_country_code'
,'$office_area_code','$office_no',N'$address',N'$remark',$postal_code,$district_id";

		$this->dbmgr->query($sql);
	}
	
	public function updatePaymentInfo($trans_id,$status,$return_code,$remark)
	{
		$return_code=parameter_filter($return_code);
		$remark=parameter_filter($remark);
		$sql="usp_update_payment_status $trans_id,'$status','$return_code','$remark'";
		$query=$this->dbmgr->query($sql);
		$result = $this->dbmgr->fetch_array($query); 
		return $result;
	}
	
	
	public function updateTransStatus($trans_id,$status)
	{
		$sql="usp_update_trans_status $trans_id,'$status'";
		$query=$this->dbmgr->query($sql);
		$result = $this->dbmgr->fetch_array($query); 
		return $result;
	}
	
	public function updateCreditCardInfo($trans_id,$card_no,$exp_date,$hkid_name,$pt_code)
	{
		$hkid_name=parameter_filter($hkid_name);
		$card_no=parameter_filter($card_no);
		$sql="usp_update_payment_info $trans_id,'$card_no','$exp_date','$hkid_name','$pt_code'";
		$query=$this->dbmgr->query($sql);
		$result = $this->dbmgr->fetch_array($query); 
		return $result;
	}
	public function updateTransCreditInfo($trans_id,$card_no,$exp_date,$hkid_name,$status,$seq_no,$return_code,$remark,$pt_code,$created_by)
	{
		$hkid_name=parameter_filter($hkid_name);
		$card_no=parameter_filter($card_no);
		$sql="usp_insert_payment_info $trans_id,'$card_no','$exp_date','$hkid_name','$status',$seq_no,'$return_code','$remark','$pt_code',$created_by";
		$query=$this->dbmgr->query($sql);
		$result = $this->dbmgr->fetch_array_all($query); 
		return $result;
	}
	public function setActivityAlert($activity_id,$mobile_country_code,$mobile_no,$email,$member_id){
		$mobile_country_code=parameter_filter($mobile_country_code);
		$mobile_no=parameter_filter($mobile_no);
		$email=parameter_filter($email);
		$sql="usp_create_activity_alert $activity_id,'$mobile_country_code','$mobile_no','$email',$member_id";
		$query=$this->dbmgr->query($sql);
		$result = $this->dbmgr->fetch_array($query); 
		return $result;
	}
	
	
	public function deleteSeatStatusByFP_ForceDelete($show_id,$seat_list){
		
		$sql="usp_fp_force_delete_seat_status $show_id,'$seat_list'";
		$query=$this->dbmgr->query($sql);
		$result = $this->dbmgr->fetch_array($query); 
		return $result;
		
	}
	public function getOrderDetailsByTransId($trans_id,$validation_code,$language_id)
	{
		$sql="usp_get_trans_detail_by_id $trans_id,'$validation_code',$language_id";
		$query = $this->dbmgr->query($sql);
		$result = $this->dbmgr->fetch_array_all($query); 
		return $result;
	}
 }
 
 $bookingMgr = BookingMgr::getInstance();
 $bookingMgr->dbmgr=$dbmgr;
 $bookingMgr->ticketTypeMgr=$ticketTypeMgr;
 $bookingMgr->memberMgr=$memberMgr;
 $bookingMgr->showMgr=$showMgr;
 define('IN_TA_BOOKING', TRUE);
?>
