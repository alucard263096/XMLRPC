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
 
 $xmlrpc_internalencoding='UTF-8';
 
 $signature=array(array('struct', 'struct')); 
/*
 $args["show_id"]=113;
 $args["kiosk"]="Y";
 $rs=getSeatplanByShowId($args);
 print_r($rs);
 exit();*/
 //registed methods
 $registed_method_arr=array(		
		"getSeatplanByShowId" => array(
			"function" => "getSeatplanByShowId",
			"signature" =>$signature,
			"docstring" => ""
		),"getSeatplanDetailByShowId" => array(
			"function" => "getSeatplanDetailByShowId",
			"signature" =>$signature,
			"docstring" => ""
		),"getAreaSeatplan" => array(
			"function" => "getAreaSeatplan",
			"signature" =>$signature,
			"docstring" => ""
		),"getSeatStyle" => array(
			"function" => "getSeatStyle",
			"signature" =>$signature,
			"docstring" => ""
		),"getAreaSeatplanDetail" => array(
			"function" => "getAreaSeatplanDetail",
			"signature" =>$signature,
			"docstring" => ""
		));
		
				
 $s = new xmlrpc_server($registed_method_arr,0);
 $s->functions_parameters_type ='phpvals';
 $s->response_charset_encoding ="UTF-8";
 $s->service();
 
 $dbmgr->close();
 
 //--------------------------------------------------functions -------------------------------------------------------

?>
