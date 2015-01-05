<?php
/*
 * Created on Aug 12, 2010
 * Created by leolu
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 defined('IN_TA') or exit('Access Denied');
 defined('IN_TA_DELIVERY') or exit('Access Denied');
 $mgr=$deliveryMgr;
 /*
  * description: get all delivery
  * param:$lang_id
  * return:array[][]
  */
  function getAllDelivery($args)
  {global $mgr;
  	$lang_id=trim($args['lang_id'])==""?1:$args['lang_id'];
  	logger_mgr::logDebug("getAllDelivery:".$lang_id); 
  	return  $mgr->getDelivery(0,$lang_id);
  }
  
?>
