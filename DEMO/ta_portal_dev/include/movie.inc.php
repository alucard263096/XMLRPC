<?php

	$image_type=array();
	$image_type["banner"]="MO_MHRB";
	$image_type["movie_poster"]="MO_P";
	$image_type["venue_image"]="V_DP";
	
	$csspaths	= array (
				'stylesheet_movie.css',
				'stylesheet_movie_'.$lang.'.css',
				'movie_core.css',
				'star.css'
			);
		
	$smarty->assign('csspaths', $csspaths);
	$smarty->assign('movie_head', "movie_");
	$smarty->assign('event_type', "movie");

	// Set Country List, City List & District List
	/*function setCCDList() {
		global $smarty;
		global $ccd_list;
		global $param_list;
		global $LANG;
		
		$country_name = $LANG['country_name'];
		$city_name = $LANG['city_name'];
		$district_name = $LANG['district_name'];
		$country_list = array();
		$city_list = array();
		$district_list = array();
		foreach ($ccd_list as $country) {
			$country_list[] = array("country_id" => $country['country_id'], "long_name" => $country['long_name']);
			if ($param_list['country_id'] == $country['country_id']) {
				$country_name = $country['long_name'];
				
			}
			if ($param_list['country_id'] == '' or $param_list['country_id'] == -1 or $param_list['country_id'] == $country['country_id']) {
				$cities = $country['city_details'];
				foreach ($cities as $city) {
					$city_list[] = array("city_id" => $city['city_id'], "long_name" => $city['long_name']);
					if ($param_list['city_id'] == $city['city_id']) {
						$city_name = $city['long_name'];
						$country_code=$country['code'];
					}
					if ($param_list['city_id'] == '' or $param_list['city_id'] == -1 or $param_list['city_id'] == $city['city_id']) {
						$districts = $city['district_details'];
						foreach ($districts as $district) {
							$district_list[] = array("district_id" => $district['district_id'], "long_name" => $district['long_name']);
							if ($param_list['district_id'] == $district['district_id']) {
								$district_name = $district['long_name'];
							}
						}
					}
				}
			}
		}
		
		$smarty->assign("country_name", $country_name);
		$smarty->assign("city_name", $city_name);
		$smarty->assign("country_code", $country_code);
		$smarty->assign("district_name", $district_name);
		$smarty->assign("country_list", $country_list);
		$smarty->assign("city_list", $city_list);
		$smarty->assign("district_list", $district_list);
	}*/
	
	// Set Circuit-Venue List
	function setCVList() {
		global $param_list;
		global $webServiceClient;
		global $smarty;
		
		$webServiceClient->resetClient('/venue.srv.php');
		$return = $webServiceClient->getResultFromServer($param_list, 'getOrganizerVenueList');
		if ($return->faultcode() == 0) {
			$cv_list = $return->value();
			$smarty->assign("circuit_venue_list", $cv_list);
		} else {
			//TODO handle error here
		}
	}
	
	// Set Movie Name List
	function setMVList() {
		global $param_list;
		global $webServiceClient;
		global $smarty;
		global $image_type;
		$param_list["image_type"]=$image_type["movie_poster"];
		
		$webServiceClient->resetClient('/activity.srv.php');
		$return = $webServiceClient->getResultFromServer($param_list, 'getHotEvent');
		if ($return->faultcode() == 0) {
			$mv_list = $return->value();
			$smarty->assign("movie_list", $mv_list);
		} else {
			//TODO handle error here
		}
	}
	// Set Movie Name List
	function setCMVList() {
		global $param_list;
		global $smarty;
		global $webServiceClient;
		$arr=$param_list;
		$arr['page_from'] = -1;
		$arr['page_to'] = -1;
		$arr['page_count'] = -1;
		$webServiceClient->resetClient('/activity.srv.php');
		$return = $webServiceClient->getResultFromServer($arr, 'searchComingActivity');
		if ($return->faultcode() == 0) {
			$mv_full_list = $return->value();
			$smarty->assign("movie_list", $mv_full_list);
		} else {
			//TODO handle error here
		}
	}
	
	
	// Set Movie Name List
	function setRankMVList() {
		global $param_list;
		global $webServiceClient;
		global $smarty;
		global $image_type;
		//$param_list["image_type"]=$image_type["movie_poster"];
		$param_listc=$param_list;
		$param_listc["district_id"]=-1;
		$webServiceClient->resetClient('/activity.srv.php');
		$return = $webServiceClient->getResultFromServer($param_listc, 'getHotEventSortAttendance');
		if ($return->faultcode() == 0) {
			$mv_list = $return->value();
			//print_r($mv_list);
			$smarty->assign("movie_rank_list", $mv_list);
		} else {
			//TODO handle error here
		}
	}

	
?>