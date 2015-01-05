<?php
/*
 * Created on 2010-10-20
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
require 'include/common.inc.php';
require ROOT.'/include/api.inc.php';
require ROOT.'/classes/datamgr/activity.cls.php';
require ROOT.'/functions/activity.func.php';

 
 $action=$_REQUEST["action"];
 switch($action)
 {
 	case "get_Cinema":
 		$args["lang_id"]=1;
	 	$args['city_id'] = $CONFIG['city_id'];
	 	$args['category_id'] = $CONFIG['category_id'];
	 	$args["image_type"]=$CONFIG["venue_image"];
	 	$get_venue=searchHotVenue($args);
	 	$venue_list=getVenueListById($get_venue,$CONFIG['imagepath']);
	 	printArray($venue_list);
 	break;
 	case "get_cinema_movie":
 		$args["lang_id"]=1;
	 	$args['city_id'] = $CONFIG['city_id'];
	 	$args['category_id'] = $CONFIG['category_id'];
	 	$args["image_type"]=$CONFIG["venue_image"];
	 	$get_venue=searchHotVenue($args);
	 	$venue_list=getVenueMovieListById($get_venue);
	 	printArray($venue_list);
 	break;
 	case "get_cinema_movie_by_id":
 		$args["lang_id"]=1;
	 	$args['city_id'] = $CONFIG['city_id'];
	 	$args['category_id'] = $CONFIG['category_id'];
	 	$args["image_type"]=$CONFIG["venue_image"];
	 	$args['venue_id']=$_REQUEST["cinemaID"];
	 	$get_venue=searchHotVenue($args);
	 	$venue_list=getVenueMovieListById($get_venue);
	 	printArray($venue_list);
 	break;
 	
 	case "get_area_list":
 		$area_list = getAreaList();
 		printArray($area_list);
 }
 
?>
