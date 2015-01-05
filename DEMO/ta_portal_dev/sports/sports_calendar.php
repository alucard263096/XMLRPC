<?php
/*
 * Created on 2010-8-7
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
	require '../include/common.inc.php';
	require ROOT.'/classes/mgr/smarty.cls.php';
	require ROOT.'/classes/mgr/web_service_client.cls.php';
	require ROOT.'/include/header.inc.php';
	require ROOT.'/include/banner.inc.php';	
	$csspaths	= array (
			'stylesheet_movie.css',
			'stylesheet_movie_'.$lang.'.css',
			'movie_core.css',
			'star.css',
			'movie_index.css'
	);
	$smarty->assign('csspaths', $csspaths);
	$param_list = isset($_SESSION['sports']['param_list'])?$_SESSION['sports']['param_list']:array();
	$param_list['city_id'] = $_SESSION['city_id'];
	$param_list['district_id'] ="-1";
	$param_list["image_type"]=$image_type["movie_poster"];
	$param_list['lang_id'] = $lang_id;
	setBannerList();
	setRightBannerList();
	setCCDList();
	$imageList=array();
	if($param_list["city_id"]==1){
			$imageList[0]["id"] ="0";
			$imageList[0]["path"] ="/img_concer_520px.jpg";
			$imageList[0]["alt_text"] ="Good Show";
			$imageList[0]["lang"] =$_SESSION["lang"];
			$imageList[0]["city_id"] ="1";
			$imageList[0]["url"] ="http://www.google.com";
			
			$imageList[1]["id"] ="1";
			$imageList[1]["path"] ="/img_730x260.jpg";
			$imageList[1]["alt_text"] ="Good Show";
			$imageList[1]["lang"] =$_SESSION["lang"];
			$imageList[1]["city_id"] ="1";
			$imageList[1]["url"] ="http://www.google.com";
			
			$imageList[2]["id"] ="2";
			$imageList[2]["path"] ="/img_730x260.jpg";
			$imageList[2]["alt_text"] ="Good Show";
			$imageList[2]["lang"] =$_SESSION["lang"];
			$imageList[2]["city_id"] ="1";
			$imageList[2]["url"] ="http://www.google.com";
			
			$imageList[3]["id"] ="3";
			$imageList[3]["path"] ="/movie1play.jpg";
			$imageList[3]["alt_text"] ="Good Show";
			$imageList[3]["lang"] =$_SESSION["lang"];
			$imageList[3]["city_id"] ="1";
			$imageList[3]["url"] ="http://www.google.com";
			
			$imageList[4]["id"] ="4";
			$imageList[4]["path"] ="/movie_select.jpg";
			$imageList[4]["alt_text"] ="Good Show";
			$imageList[4]["lang"] =$_SESSION["lang"];
			$imageList[4]["city_id"] ="1";
			$imageList[4]["url"] ="http://www.google.com";		
		}else if($param_list["city_id"]==2){
			
			$imageList[0]["id"] ="0";
			$imageList[0]["path"] ="/movie_select.jpg";
			$imageList[0]["alt_text"] ="Good Show";
			$imageList[0]["lang"] =$_SESSION["lang"];
			$imageList[0]["city_id"] ="1";
			$imageList[0]["url"] ="http://www.google.com";
			
			$imageList[1]["id"] ="1";
			$imageList[1]["path"] ="/movie1play.jpg";
			$imageList[1]["alt_text"] ="Good Show";
			$imageList[1]["lang"] =$_SESSION["lang"];
			$imageList[1]["city_id"] ="1";
			$imageList[1]["url"] ="http://www.google.com";
		}else{
			$imageList[0]["id"] ="0";
			$imageList[0]["path"] ="/movie_select.jpg";
			$imageList[0]["alt_text"] ="Good Show";
			$imageList[0]["lang"] =$_SESSION["lang"];
			$imageList[0]["city_id"] ="1";
			$imageList[0]["url"] ="http://www.google.com";
			
			$imageList[1]["id"] ="1";
			$imageList[1]["path"] ="/movie_select.jpg";
			$imageList[1]["alt_text"] ="Good Show";
			$imageList[1]["lang"] =$_SESSION["lang"];
			$imageList[1]["city_id"] ="1";
			$imageList[1]["url"] ="http://www.google.com";
			
			$imageList[2]["id"] ="2";
			$imageList[2]["path"] ="/img_concer_520px.jpg";
			$imageList[2]["alt_text"] ="Good Show";
			$imageList[2]["lang"] =$_SESSION["lang"];
			$imageList[2]["city_id"] ="1";
			$imageList[2]["url"] ="http://www.google.com";
			
			$imageList[3]["id"] ="3";
			$imageList[3]["path"] ="/movie1play.jpg";
			$imageList[3]["alt_text"] ="Good Show";
			$imageList[3]["lang"] =$_SESSION["lang"];
			$imageList[3]["city_id"] ="3";
			$imageList[3]["url"] ="http://www.google.com";
			
			$imageList[4]["id"] ="4";
			$imageList[4]["path"] ="/img_730x260.jpg";
			$imageList[4]["alt_text"] ="Good Show";
			$imageList[4]["lang"] =$_SESSION["lang"];
			$imageList[4]["city_id"] ="1";
			$imageList[4]["url"] ="http://www.google.com";
		}
		
		$numsetbanner=range(0,count($imageList)-1);
		shuffle($numsetbanner);
		if(count($imageList)>3){
			$imageListTemp=array();
		  	$imageListTemp[0]=$imageList[$numsetbanner[0]];
		  	$imageListTemp[1]=$imageList[$numsetbanner[1]];
		  	$imageListTemp[2]=$imageList[$numsetbanner[2]];
			$smarty->assign("imageList", $imageListTemp);
		}else{			
			$smarty->assign("imageList", $imageList);
		}
	$_SESSION['sports']['param_list'] = $param_list;
	if(!empty($_GET['s'])){
		$dd = ( $_GET ['s'] );
		//echo $dd;
	$smarty->assign("param_list", $param_list);
		$smarty->assign("dd", $dd);
	$smarty->display(ROOT.'/templates/sports/sports_calendar.tpl');
	
	}else{
			$smarty->assign("param_list", $param_list);
		
	$smarty->display(ROOT.'/templates/sports/sports.tpl');
		
	}
	
	
	
	
	

//------------------------------------- functions ------------------------------------


?>