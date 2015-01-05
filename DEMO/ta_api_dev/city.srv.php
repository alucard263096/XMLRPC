<?php
/*
 * Created on Aug 7, 2010
 * Created by leolu
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */

 require 'include/common.inc.php';
 require ROOT.'/classes/mgr/webservice.cls.php';
 require ROOT.'/classes/datamgr/city.cls.php';
 require ROOT.'/functions/city.func.php';
 
 $xmlrpc_internalencoding='UTF-8';
 
 $signature=array(array('struct', 'struct'));
 /*
 $args["lang_id"]=3;
 $args["show_id"]=122;
 $rs=getDeliveryDistrict($args);
 print_r($rs);
 exit();
 */
 
 //registed methods
 $registed_method_arr=array(
 		"getAllCity" => array(
			"function" => "getAllCity",
			"signature" =>$signature,
			"docstring" => ""
		),
		"getCountryCityDistrictList" => array(
			"function" => "getCountryCityDistrictList",
			"signature" =>$signature,
			"docstring" => ""
		),
		"getDeliveryCountryCityDistrictList" => array(
			"function" => "getDeliveryCountryCityDistrictList",
			"signature" =>$signature,
			"docstring" => ""
		),
		"getDeliveryCountry" => array(
			"function" => "getDeliveryCountry",
			"signature" =>$signature,
			"docstring" => ""
		),
		"getDeliveryCity" => array(
			"function" => "getDeliveryCity",
			"signature" =>$signature,
			"docstring" => ""
		),
		"getDeliveryDistrict" => array(
			"function" => "getDeliveryDistrict",
			"signature" =>$signature,
			"docstring" => ""
		));
		
				
 $s = new xmlrpc_server($registed_method_arr,0);
 $s->functions_parameters_type ='phpvals';
 $s->response_charset_encoding ="UTF-8";
 $s->service();
 
 //--------------------------------------------------functions -------------------------------------------------------

?>