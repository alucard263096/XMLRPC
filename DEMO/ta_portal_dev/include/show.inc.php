<?php

	$image_type=array();
	$image_type["banner"]="CO_RB";
	$image_type["show_poster"]="CO_P";
	$image_type["venue_image"]="V_DP";
	$image_type["thumbnail_activity_image_type"]="CO_P";
	
	define("module","show");
	
	$csspaths	= array (
				'stylesheet_show.css',
				'show_core.css',
				'star.css'
			);
		
	$smarty->assign('csspaths', $csspaths);
	$smarty->assign('event_type', "show");

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
		$param_list["image_type"]=$image_type["show_poster"];
		
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
	
	/*// Set Banner List
	function setBannerList() {
		global $param_list;
		global $webServiceClient;
		global $smarty;
		global $image_type;
		$param_list["image_type"]=$image_type["banner"];
		$webServiceClient->resetClient('/activity.srv.php');
		$return = $webServiceClient->getResultFromServer($param_list, 'getHotEventBanner');
		if ($return->faultcode() == 0) {
			$banner_list = $return->value();
			//print_r($banner_list);
			$smarty->assign("banner_count", count($banner_list));
			$smarty->assign("banner_list", $banner_list);
		} else {
			//TODO handle error here
		}
		$bannerList=array();
		$hotShowList=array();
		if($param_list["city_id"]==1){
			$hotShowList[0]["id"] ="0";
			$hotShowList[0]["path"] ="/hot_show2.jpg";
			$hotShowList[0]["alt_text"] ="Good Show";
			$hotShowList[0]["lang"] =$_SESSION["lang"];
			$hotShowList[0]["city_id"] ="1";
			$hotShowList[0]["url"] ="http://www.google.com";
			
			
			$hotShowList[1]["id"] ="1";
			$hotShowList[1]["path"] ="/hot_show1.jpg";
			$hotShowList[1]["alt_text"] ="Good Show";
			$hotShowList[1]["lang"] =$_SESSION["lang"];
			$hotShowList[1]["city_id"] ="1";
			$hotShowList[1]["url"] ="http://www.google.com";
			
			
			$bannerList[0]["id"] ="0";
			$bannerList[0]["path"] ="/hotel_money1.jpg";
			$bannerList[0]["alt_text"] ="Good Show";
			$bannerList[0]["lang"] =$_SESSION["lang"];
			$bannerList[0]["city_id"] ="1";
			$bannerList[0]["url"] ="http://www.google.com";
			
			$bannerList[1]["id"] ="1";
			$bannerList[1]["path"] ="/hotel_money2.jpg";
			$bannerList[1]["alt_text"] ="Good Show";
			$bannerList[1]["lang"] =$_SESSION["lang"];
			$bannerList[1]["city_id"] ="1";
			$bannerList[1]["url"] ="http://www.google.com";
			
			$bannerList[2]["id"] ="2";
			$bannerList[2]["path"] ="/hotel_money3.jpg";
			$bannerList[2]["alt_text"] ="Good Show";
			$bannerList[2]["lang"] =$_SESSION["lang"];
			$bannerList[2]["city_id"] ="1";
			$bannerList[2]["url"] ="http://www.google.com";
			
			$bannerList[3]["id"] ="3";
			$bannerList[3]["path"] ="/hotel_money1.jpg";
			$bannerList[3]["alt_text"] ="Good Show";
			$bannerList[3]["lang"] =$_SESSION["lang"];
			$bannerList[3]["city_id"] ="1";
			$bannerList[3]["url"] ="http://www.google.com";
			
			$bannerList[4]["id"] ="4";
			$bannerList[4]["path"] ="/hotel_money2.jpg";
			$bannerList[4]["alt_text"] ="Good Show";
			$bannerList[4]["lang"] =$_SESSION["lang"];
			$bannerList[4]["city_id"] ="1";
			$bannerList[4]["url"] ="http://www.google.com";		
		}else if($param_list["city_id"]==2){
			
			$hotShowList[0]["id"] ="0";
			$hotShowList[0]["path"] ="/hot_show1.jpg";
			$hotShowList[0]["alt_text"] ="Good Show";
			$hotShowList[0]["lang"] =$_SESSION["lang"];
			$hotShowList[0]["city_id"] ="1";
			$hotShowList[0]["url"] ="http://www.google.com";
			
			
			$hotShowList[1]["id"] ="1";
			$hotShowList[1]["path"] ="/hot_show2.jpg";
			$hotShowList[1]["alt_text"] ="Good Show";
			$hotShowList[1]["lang"] =$_SESSION["lang"];
			$hotShowList[1]["city_id"] ="1";
			$hotShowList[1]["url"] ="http://www.google.com";
			
			
			$bannerList[0]["id"] ="0";
			$bannerList[0]["path"] ="/hotel_money1.jpg";
			$bannerList[0]["alt_text"] ="Good Show";
			$bannerList[0]["lang"] =$_SESSION["lang"];
			$bannerList[0]["city_id"] ="1";
			$bannerList[0]["url"] ="http://www.google.com";
			
			$bannerList[1]["id"] ="1";
			$bannerList[1]["path"] ="/hotel_money2.jpg";
			$bannerList[1]["alt_text"] ="Good Show";
			$bannerList[1]["lang"] =$_SESSION["lang"];
			$bannerList[1]["city_id"] ="1";
			$bannerList[1]["url"] ="http://www.google.com";
		}else{
			$hotShowList[0]["id"] ="0";
			$hotShowList[0]["path"] ="/hot_show1.jpg";
			$hotShowList[0]["alt_text"] ="Good Show";
			$hotShowList[0]["lang"] =$_SESSION["lang"];
			$hotShowList[0]["city_id"] ="1";
			$hotShowList[0]["url"] ="http://www.google.com";
			
			
			
			$bannerList[0]["id"] ="0";
			$bannerList[0]["path"] ="/hotel_money1.jpg";
			$bannerList[0]["alt_text"] ="Good Show";
			$bannerList[0]["lang"] =$_SESSION["lang"];
			$bannerList[0]["city_id"] ="1";
			$bannerList[0]["url"] ="http://www.google.com";
			
			$bannerList[1]["id"] ="1";
			$bannerList[1]["path"] ="/hotel_money2.jpg";
			$bannerList[1]["alt_text"] ="Good Show";
			$bannerList[1]["lang"] =$_SESSION["lang"];
			$bannerList[1]["city_id"] ="1";
			$bannerList[1]["url"] ="http://www.google.com";
			
			$bannerList[2]["id"] ="2";
			$bannerList[2]["path"] ="/hotel_money3.jpg";
			$bannerList[2]["alt_text"] ="Good Show";
			$bannerList[2]["lang"] =$_SESSION["lang"];
			$bannerList[2]["city_id"] ="1";
			$bannerList[2]["url"] ="http://www.google.com";
		}
		
		
		
		
		
		
		$numsetbanner=range(0,count($bannerList)-1);
		shuffle($numsetbanner);
//		print_r(count($hotShowList));
		if(count($bannerList)>3){
			$bannerListTemp=array();
		  	$bannerListTemp[0]=$bannerList[$numsetbanner[0]];
		  	$bannerListTemp[1]=$bannerList[$numsetbanner[1]];
		  	$bannerListTemp[2]=$bannerList[$numsetbanner[2]];
			$smarty->assign("bannerList", $bannerListTemp);
		}else{			
			$smarty->assign("bannerList", $bannerList);
		}
		
		
		$numsethotel=range(0,count($hotShowList)-1);
		shuffle($numsethotel);
		if(count($hotShowList)>3){
			$hotShowListTemp=array();
		  	$hotShowListTemp[0]=$hotShowList[$numsethotel[0]];
		  	$hotShowListTemp[1]=$hotShowList[$numsethotel[1]];
		  	$hotShowListTemp[2]=$hotShowList[$numsethotel[2]];
			$smarty->assign("hotShowList", $hotShowListTemp);
		}else{
			$smarty->assign("hotShowList", $hotShowList);
		}
	}
	*/
	// Set Movie Name List
	function setRankMVList() {
		global $param_list;
		global $webServiceClient;
		global $smarty;
		global $image_type;
		//$param_list["image_type"]=$image_type["movie_poster"];
		
		$param_listc=$param_list;
		if($param_listc["select_city"]=="0")
		{
			$param_listc["city_id"]=-1;
		}
		$param_listc["district_id"]=-1;
		$param_listc["rank"]=1;
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