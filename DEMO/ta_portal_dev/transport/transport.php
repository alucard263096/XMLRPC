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
			'star.css'
	);
		
	$smarty->assign('csspaths', $csspaths);
	$param_list = isset($_SESSION['transport']['param_list'])?$_SESSION['transport']['param_list']:array();
	$param_list['city_id'] = $_SESSION['city_id'];
	$param_list['district_id'] ="-1";
	setBannerList();
	setRightBannerList();
	setCCDList();
	$imageList=array();
	if($param_list["city_id"]==1){
		$imageList[0]["id"] ="0";
		$imageList[0]["path"] ="/transport/transportation_gz.jpg";
		$imageList[0]["alt_text"] ="";
		$imageList[0]["lang"] ="zh-tc";
		$imageList[0]["city_id"] ="2";
		$imageList[0]["url"] ="";
		
		$imageList[0]["id"] ="0";
		$imageList[0]["path"] ="/transport/transportation_gz.jpg";
		$imageList[0]["alt_text"] ="";
		$imageList[0]["lang"] ="zh-sc";
		$imageList[0]["city_id"] ="2";
		$imageList[0]["url"] ="";
		
		$imageList[0]["id"] ="0";
		$imageList[0]["path"] ="/transport/transportation_gz.jpg";
		$imageList[0]["alt_text"] ="";
		$imageList[0]["lang"] ="en-us";
		$imageList[0]["city_id"] ="2";
		$imageList[0]["url"] ="";	
	}else if($param_list["city_id"]==2){
		
		$imageList[0]["id"] ="0";
		$imageList[0]["path"] ="/transport/transportation_hk.jpg";
		$imageList[0]["alt_text"] ="";
		$imageList[0]["lang"] ="zh-tc";
		$imageList[0]["city_id"] ="2";
		$imageList[0]["url"] ="";
		
		$imageList[0]["id"] ="0";
		$imageList[0]["path"] ="/transport/transportation_hk.jpg";
		$imageList[0]["alt_text"] ="";
		$imageList[0]["lang"] ="zh-sc";
		$imageList[0]["city_id"] ="2";
		$imageList[0]["url"] ="";
		
		$imageList[0]["id"] ="0";
		$imageList[0]["path"] ="/transport/transportation_hk.jpg";
		$imageList[0]["alt_text"] ="";
		$imageList[0]["lang"] ="en-us";
		$imageList[0]["city_id"] ="2";
		$imageList[0]["url"] ="";
	}else{
		$imageList[0]["id"] ="0";
		$imageList[0]["path"] ="/transport/transportation_mo.jpg";
		$imageList[0]["alt_text"] ="";
		$imageList[0]["lang"] ="zh-tc";
		$imageList[0]["city_id"] ="2";
		$imageList[0]["url"] ="";
		
		$imageList[0]["id"] ="0";
		$imageList[0]["path"] ="/transport/transportation_mo.jpg";
		$imageList[0]["alt_text"] ="";
		$imageList[0]["lang"] ="zh-sc";
		$imageList[0]["city_id"] ="2";
		$imageList[0]["url"] ="";
		
		$imageList[0]["id"] ="0";
		$imageList[0]["path"] ="/transport/transportation_mo.jpg";
		$imageList[0]["alt_text"] ="";
		$imageList[0]["lang"] ="en-us";
		$imageList[0]["city_id"] ="2";
		$imageList[0]["url"] ="";
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
	$_SESSION['transport']['param_list'] = $param_list;
	$smarty->assign("lang",$_SESSION["lang"]);
	$smarty->assign("param_list", $param_list);
	$smarty->display(ROOT.'/templates/transport/transport.tpl');
	

//------------------------------------- functions ------------------------------------


?>