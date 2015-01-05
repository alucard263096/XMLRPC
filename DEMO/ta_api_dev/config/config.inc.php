<?php
/*
 * Created on 2010-5-6
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 defined('IN_TA') or exit('Access Denied'); 
#[Root]
$CONFIG['rootpath']		= '\ta_api_dev';
$CONFIG['charset']		= 'utf-8'; 
$CONFIG['purchase_way']		= 'PR';
$CONFIG['solution_configuration']='debug';

#[Root]
$CONFIG['imagepath']="http://202.82.149.247:8111/ta_callcentre_dev";

#[Smarty config]
$CONFIG['smarty']['compile_check']=true;
$CONFIG['smarty']['debugging']=false; 
$CONFIG['smarty']['caching']=false; 
$CONFIG['smarty']['cache_lifetime']=3600; //second,-1 is always on 
$CONFIG['smarty']['rootpath']		= 'http://localhost/ta_api_dev/';  


#[Database]
$CONFIG['database']['provider']		= 'sqlsrv';  //mssql,sqlsrv
$CONFIG['database']['host']		= '5c52404b59594f53585c5b5c564549595c5757';  
$CONFIG['database']['database']	= '3a232d21243d﻿';  
$CONFIG['database']['user']		= '1d03';  
$CONFIG['database']['psw']		= '1a0b170b020314560a091a0110'; 
 
#[log]
$CONFIG['logsavedir'] 		= 'logs/';	
$CONFIG['error_handler'] ="E_ALL";

#[lang]
$CONFIG['language']['default']='zh-sc';
$CONFIG['lang_id']=3;

#[api]
$CONFIG['category_id']=7;
$CONFIG["movie_poster"]="MO_P";
$CONFIG["movie_poster_s"]="MO_SP";
$CONFIG["venue_image"]="V_DP";
$CONFIG['city_id']=1;


$CONFIG['api']['LINE_SPLIT'] = "#";
$CONFIG['api']['SEPARATOR'] = ',';

$CONFIG['validation_code']="ticketasia";


#['Web Service']
$CONFIG['web_service']['server'] = "192.168.1.106";
$CONFIG['web_service']['port'] = "8888";
$CONFIG['web_service']['path'] = "/httpxmlrpc";

#['fp']
$CONFIG['fp']['LockUserId']="ta_001";



#['sms']
$CONFIG['sms']['xp']="/httpxmlrpc/e862smsapi";
$CONFIG['sms']['xs']="58.248.253.252";
$CONFIG['sms']['port']="80";
$CONFIG['sms']['path']="E862SmsHandler.addSMSApp";
$CONFIG['sms']['USERNAME']="ticketchina";
$CONFIG['sms']['PASSWORD']="123456";
$CONFIG['sms']['MSG_FMT']="15";
$CONFIG['sms']['TP_pId']="";
$CONFIG['sms']['TP_udhi']="";
$CONFIG['sms']['charset']="UTF-8";


?>