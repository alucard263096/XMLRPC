<?php

require 'include/common.inc.php';
 require ROOT.'/classes/mgr/webservice.cls.php';
 require ROOT.'/classes/datamgr/activity.cls.php';
 require ROOT.'/functions/activity.func.php';
 
 $xmlrpc_internalencoding='UTF-8';
 
 $signature=array(array('struct', 'struct'));
 
 /*
$args["lang_id"]=1;
 $rs=searchHotVenue($args);
 print_r($rs);
 exit();
 */
 //registed methods
 $registed_method_arr=array(
		"getHotEvent" => array(
			"function" => "getHotEvent",
			"signature" =>$signature,
			"docstring" => ""
		),
		"getHotEventBanner" => array(
			"function" => "getHotEventBanner",
			"signature" =>$signature,
			"docstring" => ""
		),
	    "searchHotVenue" => array(
			"function" => "searchHotVenue",
			"signature" =>$signature,
			"docstring" => ""
		),
		"getActivityDetails" => array(
			"function" => "getActivityDetails",
			"signature" =>$signature,
			"docstring" => ""
		),
		"getActivityImages" => array(
			"function" => "getActivityImages",
			"signature" =>$signature,
			"docstring" => ""
		),
		"getActivityListByVenue" => array(
			"function" => "searchActivityByVenue",
			"signature" =>$signature,
			"docstring" => ""
		),
		"searchComingActivity" => array(
			"function" => "searchComingActivity",
			"signature" =>$signature,
			"docstring" => ""
		),
		"getHotEventSortAttendance" => array(
			"function" => "getHotEventSortAttendance",
			"signature" =>$signature,
			"docstring" => ""
		),
		"searchActivityByName" => array(
			"function" => "searchActivityByName",
			"signature" =>$signature,
			"docstring" => ""
		),
		"ratingActivity" => array(
			"function" => "ratingActivity",
			"signature" =>$signature,
			"docstring" => ""
		));
		
				
 $s = new xmlrpc_server($registed_method_arr,0);
 $s->functions_parameters_type ='phpvals';
 $s->response_charset_encoding ="UTF-8";
 $s->service();
 
 //--------------------------------------------------functions -------------------------------------------------------

?>