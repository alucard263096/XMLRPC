<?php

	require '../include/common.inc.php';
	require ROOT.'/classes/mgr/web_service_client.cls.php';
	$params = array();
				$params['activity_id'] = $_REQUEST['activity_id'];
				$params['venue_id'] = $_REQUEST['venue_id'];
				$params['score'] = $_REQUEST['score'];
				$params['ipaddress'] = $client_ip;
				if (isset($_SESSION['member'])) {
					$params['member_id'] = $_SESSION['member']['member_id'];
				} else {
					$params['member_id'] = -1;
				}
	if (isset($_REQUEST['activity_id'])) {
		$webServiceClient->resetClient('/activity.srv.php');
		$return = $webServiceClient->getResultFromServer($params, 'ratingActivity');
	} else if (isset($_REQUEST['venue_id'])) {
		$webServiceClient->resetClient('/venue.srv.php');
		$return = $webServiceClient->getResultFromServer($params, 'ratingVenue');
	} else {
	}

?>