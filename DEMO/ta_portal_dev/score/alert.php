<?php

	require '../include/common.inc.php';
	require ROOT.'/classes/mgr/web_service_client.cls.php';
$params = array();
				$params['activity_id'] = $_REQUEST['activity_id'];
				$params['mobile_country_no'] = $_REQUEST['activity_id'];
				$params['mobile_no'] = $_REQUEST['mobile_no'];
				$params['email'] = $_REQUEST['email'];
				if (isset($_SESSION['member'])) {
					$params['member_id'] = $_SESSION['member']['member_id'];
				}
				subscribe($params);

// Subscribe
	function subscribe($params) {
		global $webServiceClient;
		
		$webServiceClient->resetClient('/booking.srv.php');
		$return = $webServiceClient->getResultFromServer($params, 'setActivityAlert');
		if ($return->faultcode() == 0) {
			$r = $return->value();
			echo $r['result_code'];
		} else {
			echo '-1';
		}
	}
?>