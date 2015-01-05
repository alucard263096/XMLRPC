<?php
/*
 * Created on Aug 7, 2010
 * Created by leolu
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */

 require 'include/common.inc.php';
 require ROOT.'/classes/mgr/webservice.cls.php';
 require ROOT.'/classes/datamgr/member.cls.php';
 require ROOT.'/functions/member.func.php';
 
 $xmlrpc_internalencoding='UTF-8';
 $signature=array(array('struct', 'struct')); 
 /*
 $args['member_id']=304;
 $args['lang_id']=1;
 $rs=getMemberInfo($args);
 print_r($rs);
 exit();
 */
  /*$args['member_id']=0;
 $args['login_name']='aa';
 $args['password']='aa';
 $args['lang_id']=1;
 $rs=checkMemberLogin($args);
 print_r($rs);
 exit();
*/
/*
 $args["login_name"]="tedgeco10";
 $args["password"]="abcd12347";
 $args["lang_id"]="1";
 $rs=registerMember($args);
 print_r($rs);
 exit();
 */
/* 
 $args["lang_id"]=1; 
 $rs= getHonorific($args);
 print_r($rs);
 exit();
 */
 /*
 $args['account']='aa';
 $rs=checkMemberAccount($args);
 print_r($rs);
 exit();
 */
 /*
 $args['account']="aa";
 $args['old_password']="bb";
 $args['new_password']="cc";
 $rs=changeMemberPassword($args);
 print_r($rs);
 exit();
 */
 //registed methods
 $registed_method_arr=array(		
		"checkMemberLogin" => array(
			"function" => "checkMemberLogin",
			"signature" =>$signature,
			"docstring" => ""
		),		
		"registerMember" => array(
			"function" => "registerMember",
			"signature" =>$signature,
			"docstring" => ""
		),
		"getHonorific" => array(
			"function" => "getHonorific",
			"signature" =>$signature,
			"docstring" => ""
		),
		"checkMemberAccount" => array(
			"function" => "checkMemberAccount",
			"signature" =>$signature,
			"docstring" => ""
		),
		"changeMemberPassword" => array(
			"function" => "changeMemberPassword",
			"signature" =>$signature,
			"docstring" => ""
		),
		"updateMember" => array(
			"function" => "updateMember",
			"signature" =>$signature,
			"docstring" => ""
		),
		"getMemberInfo" => array(
			"function" => "getMemberInfo",
			"signature" =>$signature,
			"docstring" => ""
		),
		"getCountryListByDistrictId" => array(
			"function" => "getCountryListByDistrictId",
			"signature" =>$signature,
			"docstring" => ""
		),
		"getCityListByDistrictId" => array(
			"function" => "getCityListByDistrictId",
			"signature" =>$signature,
			"docstring" => ""
		),
		"modifyPoint" => array(
			"function" => "modifyPoint",
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
