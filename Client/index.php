<?php
/*
 * Created on 2010-9-3
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
	require 'include/common.inc.php';
	require ROOT.'/classes/mgr/web_service_client.cls.php';
	$webServiceClient->resetClient('/test.srv.php');
	$arr=Array();
	$arr["a"]="a";
	$return = $webServiceClient->getResultFromServer($arr, 'GetMyName');
	echo $return->value();
?>