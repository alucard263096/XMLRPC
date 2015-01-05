<?php
/*
 * Created on Aug 12, 2010
 * Created by leolu
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 
 class DeliveryMgr
 {
 	private static $instance = null;
	public static $dbmgr = null;
	public static function getInstance() {
		return self :: $instance != null ? self :: $instance : new DeliveryMgr();
	}

	private function __construct(){
		
	}
	
	public  function __destruct ()
	{
		
	}
	
	/*description:get delivery,when id=0,the function will return all delivery
	 * param:$id int,
	 * param:$lang_id int
	 * return:array[][]
	 */
	public function getDelivery($id,$lang_id)
	{
		$sql="usp_get_delivery_type $id,$lang_id";
		$query = $this->dbmgr->query($sql);
		$result = $this->dbmgr->fetch_array_all($query); 
		return $result;
	}
 }
 
 $deliveryMgr=DeliveryMgr::getInstance();
 $deliveryMgr->dbmgr=$dbmgr;
 define('IN_TA_DELIVERY', TRUE);
?>
