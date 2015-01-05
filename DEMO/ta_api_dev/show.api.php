<?php
/*
 * Created on 2010-10-20
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
require 'include/common.inc.php';
require ROOT.'/include/api.inc.php';
require ROOT.'/classes/datamgr/show.cls.php';
require ROOT.'/functions/show.func.php';

 
 $action=$_REQUEST["action"];
 //$action='get_movie';
 switch($action)
 {	
 	case "get_activity_show":
		$args["lang_id"]=3;
	 	$args['city_id'] = $CONFIG['city_id'];
	 	$args['category_id'] = $CONFIG['category_id'];
	 	$args['activity_id']=$_REQUEST["activity_id"];
	 	//$args['venue_id']=$_REQUEST["cinemaID"];
		$get_movie_detail=searchHotShow($args);
		//print_r($get_movie_detail);
		$cinemaMovieList=getCinemaMovieDetailById($get_movie_detail);
		//print_r($cinemaMovieList);
		printArray($cinemaMovieList);
 	break;
 	case "get_activity_show_all":
		$args["lang_id"]=3;
	 	$args['city_id'] = $CONFIG['city_id'];
	 	$args['category_id'] = $CONFIG['category_id'];
		$get_movie_detail=searchHotShow($args);
		$cinemaMovieList=getCinemaMovieDetailById($get_movie_detail);
		printArray($cinemaMovieList);
 	break;
 }
 
?>