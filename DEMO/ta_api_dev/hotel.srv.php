<?php
/*
 * Created on Aug 7, 2010
 * Created by leolu
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */

 require 'include/common.inc.php';
 require ROOT.'/classes/mgr/webservice.cls.php';
 require ROOT.'/classes/datamgr/hotel.cls.php';
 require ROOT.'/functions/hotel.func.php';

 $xmlrpc_internalencoding='UTF-8';
 
 $signature=array(array('struct', 'struct'));

/*
 $args["hotel_id"]=3;
 $args["start_date"]='2010-08-11';
 $args["end_date"]='2010-09-01'; 
 $args["room_type_id"]=3;
 $args["lang_id"]=1;
 
 $rs=getRoomType($args);
 print_r($rs);
 exit();
 */
 /*
 $args["hotel_id"]=3;
 $args["lang_id"]=1;
 
 $rs= getHotelDetail($args);
 print_r($rs);
 exit();
 */
 
/*
 $args["code"]='ss';
 $args["member_id"]= 3;
  $args["room_no"]=2;
 $args["adult_count"]=2; 
 $args["children_count"]=3;
 $args["pt_code"]='d'; 
 $args["pw_code"]='d';
 $args["client_name"]='dd';
 $args["honorific_id"]=1; 
 $args["email"]='dd@163.com';
 $args["country_id"]=1; 	
 $args["contact_no"]='17896325874';
 $args["hotel_show_id"]='55,66';
 $args["bed_type"]='1,2';
 $args["currency_id"]=1;
 $args["staff_id"]=1; 	
 $rs=updateHotelBookingPage($args);
 print_r($rs);
 exit();
 */

/*
 $args["city_id"]='';
 $args["district_id"]='';
 $args["min_price"]='';
 $args["max_price"]='';
 $args["star"]='';
 $args["keyword"]='';
 $args["check_in_date"]='2010/09/07';
 $args["check_out_date"]='2010/09/08'; 
  $args["hotel_attribute"]='';
 $args["room_attribute"]='';
 $args["purchase_way"]='';
 $args["lang_id"]=1;
 $rs=searchHotelList($args);
 print_r($rs);
 exit();
 */
 /*
 $args['district_id']=0;
 $args['name']='';
 $args['start']=0;
 $args['status']='';
 $args['code']='';
 $args['phone']='';
 $args['lang_id']=1;
 $rs=searchHotelListForCms($args);
 print_r($rs);
 exit();
*/

 //registed methods
 $registed_method_arr=array(
		"getHotelDetail" => array(
			"function" => "getHotelDetail",
			"signature" =>$signature,
			"docstring" => ""
		),		
		"getRoomType" => array(
			"function" => "getRoomType",
			"signature" =>$signature,
			"docstring" => ""
		),
		"updateHotelBookingPage" => array(
			"function" => "updateHotelBookingPage",
			"signature" =>$signature,
			"docstring" => ""
		),		
		"searchHotelList" => array(
			"function" => "searchHotelList",
			"signature" =>$signature,
			"docstring" => ""
		),
		"getHotelByCityDistrict" => array(
			"function" => "getHotelByCityDistrict",
			"signature" =>$signature,
			"docstring" => ""
		),
		"searchHotelOrderByCondition" => array( 
			"function" => "searchHotelOrderByCondition",
			"signature" =>$signature,
			"docstring" => ""
		),		
		"searchHotelListForCms" => array( 
			"function" => "searchHotelListForCms",
			"signature" =>$signature,
			"docstring" => ""
		),		
		"insertHotel" => array( 
			"function" => "insertHotel",
			"signature" =>$signature,
			"docstring" => ""
		),		
		"updateHotel" => array( 
			"function" => "updateHotel",
			"signature" =>$signature,
			"docstring" => ""
		),		
		"getHotelAttributeById" => array( 
			"function" => "getHotelAttributeById",
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