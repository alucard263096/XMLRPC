<?php
 defined('IN_TA') or exit('Access Denied'); 
	require ROOT.'/libs/smarty/Smarty.class.php';

$smarty = new Smarty;

$smarty->compile_check = $CONFIG['smarty']['compile_check'];
$smarty->debugging = $CONFIG['smarty']['debugging'];
$smarty->caching=$CONFIG['smarty']['caching'];
$smarty->cache_lifetime=$CONFIG['smarty']['cache_lifetime'];
$smarty->compile_dir=ROOT."/templates_c";
$smarty->cache_dir=ROOT."/cache";
$smarty->left_delimiter="<{";
$smarty->right_delimiter="}>";


 $smarty->assign('rootpath',$CONFIG['smarty']['rootpath']);
 $smarty->assign('httpsrootpath',$CONFIG['smarty']['https_rootpath']);
 $smarty->assign('smarty_root',ROOT."/templates");
 $smarty->assign('file_url',$_SERVER["PHP_SELF"]);
 $cqr=$_SERVER["QUERY_STRING"];
 
 $rep= array('&lang=en-us'=>'',
'&lang=zh-sc'=>'',
'&lang=zh-tc'=>'',
'&city_id=1'=>'',
'&city_id=2'=>'',
'&city_id=3'=>'',
'&city_id=4'=>'',
'&city_id=5'=>'');
 $cqr=strtr($_SERVER["QUERY_STRING"],$rep);
 
 $rep= array('lang=en-us'=>'',
'lang=zh-sc'=>'',
'lang=zh-tc'=>'',
'city_id=1'=>'',
'city_id=2'=>'',
'city_id=3'=>'',
'city_id=4'=>'',
'city_id=5'=>'');

 $cqr=strtr($_SERVER["QUERY_STRING"],$rep);
 if($cqr[0]=="&")
 {
 	$cqr=substr($cqr,1);
 }
 if($cqr[strlen($cqr)-1]=="&")
 {
 	$cqr=substr($cqr,0,strlen($cqr)-1);
 }
 $smarty->assign('file_url_parameter',$cqr);
 $rep=array($CONFIG['smarty']['rootpath']=>'');
 $smarty->assign('script_path',strtr($_SERVER["PHP_SELF"],$rep));
 $smarty->assign('resource_path',$CONFIG['resrouce_link']);
 $smarty->assign('movie_category_id',$CONFIG['movie_category_id']);
 $smarty->assign('show_category_id',$CONFIG['show_category_id']);
 $smarty->assign('gz_city_id',$CONFIG['gz_city_id']);
 $smarty->assign('hk_city_id',$CONFIG['hk_city_id']);
 $smarty->assign('mo_city_id',$CONFIG['mo_city_id']);
 $smarty->assign('LANG',$LANG);
 $smarty->assign('lang',$lang);
 $smarty->assign('domain',$CONFIG['domain']);
 
 $smarty->assign('charset',$CONFIG['charset']);
 $smarty->assign('google_key',$CONFIG['googlemap']["GOOGLE_MAPKEY"]);
 $smarty->assign('google_analytics_account',$CONFIG['google_analytics_account']);
 
 
 
 
 $smarty->register_function("convertDateTime","convertDateTimeSmarty");
 $smarty->register_function("rateFormat","rateFormatSmarty");
 $smarty->register_function("convertDate","convertDateSmarty");
 
?>