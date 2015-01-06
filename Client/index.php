<?php
/*
 * Created on 2010-9-3
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
	require 'include/common.inc.php';
	require ROOT.'/classes/mgr/web_service_client.cls.php';


	//this sample for call api directly
	$webServiceClient->resetClient('/test.srv.php');
	$arr=Array();
	$arr["a"]="a";
	$return = $webServiceClient->getResult($arr, 'GetMyName');
	echo $return->value();
	
	
	//this sample for call api with paramater
	$arr=Array();
	$arr["a"]=1;
	$arr["b"]=99;
	$return = $webServiceClient->getResult($arr, 'AddAB');
	echo $return->value();

	
	
	//this sample for call api return array
	$arr=Array();
	$return = $webServiceClient->getResult($arr, 'GetArray');
	print_r( $return->value());

?>