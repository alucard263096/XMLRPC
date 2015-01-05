<?php 

	require '../include/common.inc.php';
	require ROOT.'/classes/mgr/smarty.cls.php';
	require ROOT.'/classes/mgr/web_service_client.cls.php';

	$param_list['keyword'] = $_REQUEST['str'];
	$param_list['category_id'] = $_REQUEST['category_id'];
	$param_list['city_id'] = $_REQUEST['city_id'];
	$param_list['lang_id'] = 3;
	$webServiceClient->resetClient('/activity.srv.php');
	$return = $webServiceClient->getResultFromServer($param_list, 'searchActivityByName');
	if ($return->faultcode() == 0) {
			$activitylist = $return->value();		
	}	
	
	$result = array();	
	foreach($activitylist as $a)
	{
		array_push($result, $a['name']);
	}
	

	echo json_encode($result);
	

?>