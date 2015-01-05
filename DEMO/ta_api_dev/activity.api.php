<?php
/*
 * Created on 2010-10-20
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
require 'include/common.inc.php';
require ROOT.'/classes/datamgr/activity.cls.php';
require ROOT.'/functions/activity.func.php';

 
  $action=$_REQUEST["action"];
 switch($action)
 {
 	case "get_activity":
 		$args["lang_id"]=3;
	 	$args['city_id'] = $CONFIG['city_id'];
	 	//$args['category_id'] = $CONFIG['category_id'];
	 	$args["image_type"]=$CONFIG["movie_poster"];
	 	$get_movie=getHotEvent($args);
	 	//$get_coming=searchComingActivity($args);
		$activity_list=getActivityListById($get_movie,$CONFIG['imagepath'],$CONFIG['city_id']);
		printArray($activity_list);
 	break;
 	case "get_movie_story":	 	
		$get_movie_story=getMovieStory($_REQUEST["movieId"]);
		printArray($get_movie_story);		
		break;
 }
?>