<?php
/*
 * Created on 2010-9-3
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
	require 'include/common.inc.php';
	require ROOT.'/classes/mgr/smarty.cls.php';
	require ROOT.'/classes/mgr/web_service_client.cls.php';
	require ROOT.'/include/header.inc.php';
	require ROOT.'/include/banner.inc.php';
	/*$csspaths	= array (
			'core.css',
			'star.css'
	);
	$smarty->assign('csspaths', $csspaths);
	$action = $_REQUEST['action'];
	$tab_action = $_REQUEST['tab_action'];
	$activity_id = $_REQUEST['activity_id'];
	$param_list = isset($_SESSION['index']['param_list'])?$_SESSION['index']['param_list']:array();
	$param_list['city_id'] = $_SESSION['city_id'];
	$tab_data = isset($_SESSION['index']['tab_data'])?$_SESSION['index']['tab_data']:array();
	$param_list['city_id'] = $_SESSION['city_id'];
	$param_list['district_id'] ="-1";
	$is_cicy_guangzhou="no";
	$smarty->assign("is_cicy_guangzhou", $is_cicy_guangzhou);
	if(!isset($param_list['tab'])){
//		if($_SESSION["city_id"]==2)
		{
			$param_list['tab'] = 'showTab';
			$param_list['lang_id'] = $lang_id;
			$param_list["image_type"]='co_hrb';
			$tab_data = getTabData($CONFIG['show_category_id']);
		}
//		else
//		{
//			$param_list["image_type"]='mo_hrb';
//			$param_list['lang_id'] = $lang_id;
//			$param_list['tab'] = 'movieTab';
//			$tab_data = getTabData($CONFIG['movie_category_id']);
//		}
		$_SESSION['index']['tab_data'] = $tab_data;
	}
	if($param_list['tab']=="movieTab"&&$_SESSION["city_id"]=="2")
	{
			$param_list['tab'] = 'showTab';
	}
	
	if (isset($action)) {
		if ($action == "resetLocation")
		{
			if (isset($_REQUEST['city_id'])) {
						$param_list['city_id'] = $_REQUEST['city_id'];
						$param_list['district_id'] = -1;
			}
			setCCDList();
			
		}
	} else {
		init();
	}
	
	if (isset($tab_action)) {
//		if($param_list['tab'] != $tab_action){
			$param_list['tab'] = $tab_action;
			$param_list['lang_id'] = $lang_id;
			switch($tab_action) {
				case "movieTab":
					if($_SESSION["city_id"]!=2)
					{
						$param_list["image_type"]='mo_hrb';
						$tab_data = getTabData($CONFIG['movie_category_id']);
						break;
					}
					else
					{
						$param_list['tab']="showTab";
					}
				case "showTab":
					$param_list["image_type"]='co_hrb';
					$tab_data = getTabData($CONFIG['show_category_id']);
					break;
				case "transportTab":
					
					break;
				case "hotelTab":
					
					break;
				case "packageTab":
					
					break;
				case "newsTab":
					
					break;
				default:
					break;
			}
			$_SESSION['index']['tab_data'] = $tab_data;
//		}
	}
	//print_r($tab_data);
	$param_list['category_id'] = '';
	$_SESSION['index']['param_list'] = $param_list;
	$smarty->assign("lang",$_SESSION["lang"]);
	$smarty->assign("param_list", $param_list);
	$smarty->assign("tab_data",$tab_data);
	if(isset($activity_id)){
		
		$smarty->assign("detail_data",getOneDetailData($tab_data, $activity_id));
		$smarty->assign("activity_id",$activity_id);
	}else{
//		print_r($tab_data[0]);
		$smarty->assign("detail_data",$tab_data[0]);
	}
	//print_r($tab_data[0]);
//	print_r( $param_list);
	if (isset($tab_action)) {
		if(isset($activity_id)){
			switch($tab_action) {
				case "movieTab":
					//$smarty->display(ROOT.'/templates/index/index_movie_detail.tpl');
					$smarty->display(ROOT.'/templates/index/index_movie_comment.tpl');
					break;
				case "showTab":
					$smarty->display(ROOT.'/templates/index/index_show_detail.tpl');
					break;
				case "transportTab":
					$smarty->display(ROOT.'/templates/index/index_transport_detail.tpl');
					break;
				case "hotelTab":
					$smarty->display(ROOT.'/template/indexs/index_hotel_detail.tpl');
					break;
				case "packageTab":
					$smarty->display(ROOT.'/templates/index/index_package_detail.tpl');
					break;
				case "newsTab":
					$smarty->display(ROOT.'/templates/index/index_news_detail.tpl');
					break;
				default:
					$smarty->display(ROOT.'/templates/index/index_show_detail.tpl');
					break;
			}
		}else{
			switch($tab_action) {
				case "movieTab":
					//$smarty->display(ROOT.'/templates/index/index_movie.tpl');
					break;
				case "showTab":
					$smarty->display(ROOT.'/templates/index/index_show.tpl');
					break;
				case "transportTab":
					$smarty->display(ROOT.'/templates/index/index_transport.tpl');
					break;
				case "hotelTab":
					$smarty->display(ROOT.'/templates/index/index_hotel.tpl');
					break;
				case "packageTab":
					$smarty->display(ROOT.'/templates/index/index_sports.tpl');
					break;
				case "newsTab":
					$smarty->display(ROOT.'/templates/index/index_package.tpl');
					break;
				default:
					$smarty->display(ROOT.'/templates/index/index_show.tpl');
					break;
			}
		}
	} else {
		$smarty->display(ROOT.'/templates/index/index.tpl');
	}

//------------------------------------- functions ------------------------------------

	function init() {
		global $CONFIG;
		global $ccd_list;
		global $param_list;
		global $webServiceClient;
		global $lang_id;
		
		initParams();
		if ($param_list['lang_id'] != $lang_id) {
			$param_list['lang_id'] = $lang_id;
			// get Country-City-District List
			$webServiceClient->resetClient('/city.srv.php');
			$return = $webServiceClient->getResultFromServer($param_list, 'getCountryCityDistrictList');
			if ($return->faultcode() == 0) {
				$ccd_list = $return->value();
			} else {
				//TODO handle error here
			}
		} else {
			// get Country-City-District List
			if (!isset($_SESSION['header']['ccd_list']) || count($ccd_list) == 0) {
				$webServiceClient->resetClient('/city.srv.php');
				$return = $webServiceClient->getResultFromServer($param_list, 'getCountryCityDistrictList');
				if ($return->faultcode() == 0) {
					$ccd_list = $return->value();
				} else {
					//TODO handle error here
				}
			}
		}
		$param_list['lang_id'] = $lang_id;
		setCCDList();
		setBannerList();
		setRightBannerList();
	}
	
	function initParams() {
		global $CONFIG;
		global $param_list;
		global $lang_id;
		
		if (isset($_REQUEST['cs']) && $_REQUEST['cs'] = 'cs') {
			$param_list['city_id'] = $_SESSION['city_id'];
			$param_list['district_id'] = -1;
			$param_list['organizer_id'] = -1;
			$param_list['venue_id'] = -1;
			$param_list['activity_id'] = -1;
			//$param_list['category_id'] = $CONFIG['movie_category_id'];
			$param_list['keyword'] = '';
			//$param_list['lang_id'] = $lang_id;
			$param_list['purchase_way'] = $CONFIG['purchase_way'];
		} else {
			if (!isset($_SESSION['index']['param_list'])) {
				$param_list['city_id'] = $_SESSION['city_id'];
				$param_list['district_id'] = -1;
				$param_list['organizer_id'] = -1;
				$param_list['venue_id'] = -1;
				$param_list['activity_id'] = -1;
				//$param_list['category_id'] = $CONFIG['movie_category_id'];
				$param_list['keyword'] = '';
				$param_list['lang_id'] = $lang_id;
				$param_list['purchase_way'] = $CONFIG['purchase_way'];
			}
		}
	}
	
	function getTabData($category){
		global $param_list;
		global $webServiceClient;
		global $CONFIG;
		global $tab_action;
		if(isset($category)){
			$param_list['category_id'] = $category;
		}else{
			$param_list['category_id'] = $CONFIG['movie_category_id'];
		}
		$param_list['page_count'] = 4;
		$param_list['page_from'] = 1;
		$param_list['page_to'] = 1;
		//print_r($param_list);
		$webServiceClient->resetClient('/show.srv.php');
		$return = $webServiceClient->getResultFromServer($param_list, 'searchHotShow');
		if ($return->faultcode() == 0) {
			$tab_data = $return->value();
			$total_count = count($tab_data['activity_details']);
			$tab_data = $tab_data['activity_details'];
			//print_r($tab_data);
			$result_array = array();
			for($i=0; $i < $total_count && $i < 4; $i++){
				$result_array[$i] = getDetailData($tab_data[$i]['activity_id']);
				$result_array[$i] = $result_array[$i][0];
				$result_array[$i]['poster'] = $tab_data[$i]['poster'];
				$result_array[$i]['origanizer_name'] = $tab_data[$i]['origanizer_name'];
			}

			//print_r($result_array);
			return $result_array;
		} else {
			//TODO handle error here
			return array();
		}
	}
	
	function getDetailData($activity_id){
		global $webServiceClient;
		global $param_list;
		
		$param = array('lang_id'=>$param_list['lang_id'], 'activity_id'=>$activity_id);
		$webServiceClient->resetClient('/activity.srv.php');
		$return = $webServiceClient->getResultFromServer($param, 'getActivityDetails');
		if ($return->faultcode() == 0) {
			$detail = $return->value();
			return $detail;
		} else {
			//TODO handle error here
			return array();
		}
	}
	
	function getOneDetailData($from_array, $activity_id){
		foreach( $from_array as $detail){
			if($detail['id'] == $activity_id){
				return $detail;
			}
		}
		return $from_array[0];
	}*/
	$param_list=array();
	
	$webServiceClient->resetClient('/show.srv.php');
				$return = $webServiceClient->getResultFromServer($param_list, 'test');
				if ($return->faultcode() == 0) {
					$ccd_list = $return->value();
					print_r($ccd_list);
				} else {
					//TODO handle error here
				}
				
				exit();
	
	$banner_array=array();
	$adv_banner="";
	if($_SESSION["city_id"]==1)
	{
		$a=array();
		$a["name"]="Twins人人彈起演唱會2010澳門站";
		$a["link_url"]="show/detail.php?city_id=3&activity_id=208";
		$a["image_url"]="images/index/gz/01.jpg";
		$banner_array[]=$a;
		$a=array();
		$a["name"]="黃子華楝篤笑「娛樂圈血肉史II」";
		$a["link_url"]="show/detail.php?city_id=2&activity_id=207";
		$a["image_url"]="images/index/gz/02.jpg";
		$banner_array[]=$a;
		$a=array();
		$a["name"]="2010亞洲音樂節";
		$a["link_url"]="show/detail.php?city_id=1&activity_id=211";
		$a["image_url"]="images/index/gz/04.jpg";
		$banner_array[]=$a;
		$a=array();
		$a["name"]="第16屆廣州亞運會";
		$a["link_url"]="sports/sports.php";
		$a["image_url"]="images/index/gz/05.jpg";
		$banner_array[]=$a;
		$a=array();
		$a["name"]="電影實時訂座";
		$a["link_url"]="movie/hot_movie.php";
		$a["image_url"]="images/index/gz/06.jpg";
		$banner_array[]=$a;
		
		
		$adv_banner="index_222.gif";
	}
	else
	{
		
		$a=array();
		$a["name"]="Twins人人彈起演唱會2010澳門站";
		$a["link_url"]="show/detail.php?city_id=3&activity_id=208";
		$a["image_url"]="images/index/hk/01.jpg";
		$banner_array[]=$a;
		$a=array();
		$a["name"]="羅志祥舞法舞天 3D SHOW演唱會";
		$a["link_url"]="show/detail.php?city_id=3&activity_id=204";
		$a["image_url"]="images/index/hk/02.jpg";
		$banner_array[]=$a;
		$a=array();
		$a["name"]="2010亞洲音樂節";
		$a["link_url"]="show/detail.php?city_id=1&activity_id=211";
		$a["image_url"]="images/index/hk/03.jpg";
		$banner_array[]=$a;
		$a=array();
		$a["name"]="香港星級酒店";
		$a["link_url"]="hotel/hotel_list.php";
		$a["image_url"]="images/index/hk/04.jpg";
		$banner_array[]=$a;
		$a=array();
		$a["name"]="票量生活";
		$a["link_url"]="#";
		$a["image_url"]="images/index/hk/05.jpg";
		$banner_array[]=$a;
		
		$adv_banner="index_22.gif";
	}
	
	$smarty->assign("banner_count",count($banner_array));
	$smarty->assign("banner_list",$banner_array);
	$smarty->assign("adv_banner",$adv_banner);
	
	
	
	$action = $_REQUEST['action'];
	$param_list = isset($_SESSION['index']['param_list'])?$_SESSION['index']['param_list']:array();
	$param_list['city_id'] = $_SESSION['city_id'];
	if (isset($action)) {
		if ($action == "resetLocation")
		{
			if (isset($_REQUEST['city_id'])) {
						$param_list['city_id'] = $_REQUEST['city_id'];
						$param_list['district_id'] = -1;
			}
			setCCDList();
			
		}
	} else {
		init();
	}
	
	$_SESSION['index']['param_list'] = $param_list;
	
	function init() {
		global $CONFIG;
		global $ccd_list;
		global $param_list;
		global $webServiceClient;
		global $lang_id;
		
		//initParams();
		if ($param_list['lang_id'] != $lang_id) {
			$param_list['lang_id'] = $lang_id;
			// get Country-City-District List
			$webServiceClient->resetClient('/city.srv.php');
			$return = $webServiceClient->getResultFromServer($param_list, 'getCountryCityDistrictList');
			if ($return->faultcode() == 0) {
				$ccd_list = $return->value();
			} else {
				//TODO handle error here
			}
		} else {
			// get Country-City-District List
			if (!isset($_SESSION['header']['ccd_list']) || count($ccd_list) == 0) {
				$webServiceClient->resetClient('/city.srv.php');
				$return = $webServiceClient->getResultFromServer($param_list, 'getCountryCityDistrictList');
				if ($return->faultcode() == 0) {
					$ccd_list = $return->value();
				} else {
					//TODO handle error here
				}
			}
		}
		$param_list['lang_id'] = $lang_id;
		setCCDList();
	}
	$smarty->assign("lang",$_SESSION["lang"]);
	$smarty->assign("param_list", $param_list);
	
	$smarty->display(ROOT.'/templates/index/index_new_'.$_SESSION["lang"].'.tpl');
?>