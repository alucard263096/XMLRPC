<?php

require 'include/common.inc.php';
 require ROOT.'/classes/mgr/webservice.cls.php';
 require ROOT.'/classes/datamgr/venue.cls.php';
 require ROOT.'/functions/venue.func.php';
 
 $xmlrpc_internalencoding='UTF-8';
 
 $signature=array(array('struct', 'struct'));
 /*
 $rs=getOrganizerVenueList($args);
 print_r($rs);
 exit();
 */
 //registed methods
 $registed_method_arr=array(
		"getOrganizerVenueList" => array(
			"function" => "getOrganizerVenueList",
			"signature" =>$signature,
			"docstring" => ""
		),
		"getVenueDetails" => array(
			"function" => "getVenueDetails",
			"signature" =>$signature,
			"docstring" => ""
		),
		"ratingVenue" => array(
			"function" => "ratingVenue",
			"signature" =>$signature,
			"docstring" => ""
		));
		
				
 $s = new xmlrpc_server($registed_method_arr,0);
 $s->functions_parameters_type ='phpvals';
 $s->response_charset_encoding ="UTF-8";
 $s->service();
 
 //--------------------------------------------------functions -------------------------------------------------------

?>