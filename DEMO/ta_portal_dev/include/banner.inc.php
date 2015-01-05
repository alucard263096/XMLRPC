<?php
// Set Banner List
	function setBannerList() {
		global $param_list;
		global $webServiceClient;
		global $smarty;
		global $image_type;
		$param_listc=$param_list;
		if($param_listc["select_city"]=="0")
		{
			$param_listc["city_id"]=-1;
		}
		$param_listc["image_type"]=$image_type["banner"];
		$param_listc["district_id"]=-1;
		$param_listc["banner"]="1";
		$webServiceClient->resetClient('/activity.srv.php');
		$return = $webServiceClient->getResultFromServer($param_listc, 'getHotEventBanner');
		if ($return->faultcode() == 0) {
			$banner_list = $return->value();
			$smarty->assign("banner_count", count($banner_list));
			$smarty->assign("banner_list", $banner_list);
		} else {
			//TODO handle error here
		}
	}
	
	function setRightBannerList(){
		global $param_list;
		global $webServiceClient;
		global $smarty;
		global $image_type;
		global $CONFIG;
		$bannerList=array();
		$hotShowList=array();
//		print_r($smarty);
		if($param_list["city_id"]==1){
//			$hotShowList[0]["id"] ="0";
			$hotShowList[0]["path"] ="/law_222x216.jpg";
			$hotShowList[0]["alt_text"] ="";
			$hotShowList[0]["lang"] =$_SESSION["lang"];
			$hotShowList[0]["city_id"] ="2";
			$hotShowList[0]["url"] ="/".$CONFIG['smarty']['rootpath']."show/detail.php?city_id=2&activity_id=204";

			
			$hotShowList[1]["id"] ="1";
			$hotShowList[1]["path"] ="/twins_222x330.jpg";
			$hotShowList[1]["alt_text"] ="";
			$hotShowList[1]["lang"] =$_SESSION["lang"];
			$hotShowList[1]["city_id"] ="2";
			$hotShowList[1]["url"] ="/".$CONFIG['smarty']['rootpath']."show/detail.php?city_id=2&activity_id=208";
			
			
			$bannerList[0]["id"] ="0";
			$bannerList[0]["path"] ="/bus_222x216.jpg";
			$bannerList[0]["alt_text"] ="";
			$bannerList[0]["lang"] =$_SESSION["lang"];
			$bannerList[0]["city_id"] ="2";
			$bannerList[0]["url"] ="/".$CONFIG['smarty']['rootpath']."promotion/promotion.php";
			
			$bannerList[1]["id"] ="1";
			$bannerList[1]["path"] ="/hkh_222x216 2.jpg";
			$bannerList[1]["alt_text"] ="";
			$bannerList[1]["lang"] =$_SESSION["lang"];
			$bannerList[1]["city_id"] ="2";
			$bannerList[1]["url"] ="/".$CONFIG['smarty']['rootpath']."promotion/promotion.php";	
		}else if($param_list["city_id"]==2){
			
			$hotShowList[0]["id"] ="0";
			$hotShowList[0]["path"] ="/law_222x216.jpg";
			$hotShowList[0]["alt_text"] ="";
			$hotShowList[0]["lang"] =$_SESSION["lang"];
			$hotShowList[0]["city_id"] ="2";
			$hotShowList[0]["url"] ="/".$CONFIG['smarty']['rootpath']."show/detail.php?city_id=2&activity_id=204";

			
			$hotShowList[1]["id"] ="1";
			$hotShowList[1]["path"] ="/twins_222x330.jpg";
			$hotShowList[1]["alt_text"] ="";
			$hotShowList[1]["lang"] =$_SESSION["lang"];
			$hotShowList[1]["city_id"] ="2";
			$hotShowList[1]["url"] ="/".$CONFIG['smarty']['rootpath']."show/detail.php?city_id=2&activity_id=208";
			
			
			$bannerList[0]["id"] ="0";
			$bannerList[0]["path"] ="/macau_hotel_222x216.jpg";
			$bannerList[0]["alt_text"] ="";
			$bannerList[0]["lang"] =$_SESSION["lang"];
			$bannerList[0]["city_id"] ="2";
			$bannerList[0]["url"] ="/".$CONFIG['smarty']['rootpath']."promotion/promotion.php";
			
			$bannerList[1]["id"] ="1";
			$bannerList[1]["path"] ="/macau_buffet_222x330.jpg";
			$bannerList[1]["alt_text"] ="";
			$bannerList[1]["lang"] =$_SESSION["lang"];
			$bannerList[1]["city_id"] ="2";
			$bannerList[1]["url"] ="/".$CONFIG['smarty']['rootpath']."promotion/promotion.php";
		}else{
			$hotShowList[0]["id"] ="0";
			$hotShowList[0]["path"] ="/law_222x216.jpg";
			$hotShowList[0]["alt_text"] ="";
			$hotShowList[0]["lang"] =$_SESSION["lang"];
			$hotShowList[0]["city_id"] ="1";
			$hotShowList[0]["url"] ="/".$CONFIG['smarty']['rootpath']."show/detail.php?city_id=3&activity_id=204";
			
			$hotShowList[1]["id"] ="1";
			$hotShowList[1]["path"] ="/twins_222x330.jpg";
			$hotShowList[1]["alt_text"] ="";
			$hotShowList[1]["lang"] =$_SESSION["lang"];
			$hotShowList[1]["city_id"] ="1";
			$hotShowList[1]["url"] ="/".$CONFIG['smarty']['rootpath']."show/detail.php?city_id=3&activity_id=208";
			
			
			
			$bannerList[0]["id"] ="0";
			$bannerList[0]["path"] ="/hk_hotel_222216.jpg";
			$bannerList[0]["alt_text"] ="";
			$bannerList[0]["lang"] =$_SESSION["lang"];
			$bannerList[0]["city_id"] ="1";
			$bannerList[0]["url"] ="/".$CONFIG['smarty']['rootpath']."promotion/promotion.php";
			
			$bannerList[1]["id"] ="1";
			$bannerList[1]["path"] ="/ocean_park_222x216.jpg";
			$bannerList[1]["alt_text"] ="";
			$bannerList[1]["lang"] =$_SESSION["lang"];
			$bannerList[1]["city_id"] ="1";
			$bannerList[1]["url"] ="";
			
		}
		
		
		
		
		
//		print_r($bannerList);
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
?>