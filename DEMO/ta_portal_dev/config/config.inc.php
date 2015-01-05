<?php
/*
 * Created on 2010-5-6
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 defined('IN_TA') or exit('Access Denied'); 
#[Root]
$CONFIG['rootpath']		= '\ta_portal_dev';  
$CONFIG['charset']		= 'utf-8'; 
$CONFIG['purchase_way']		= 'WB'; 
$CONFIG['staff_id']		= '-1'; 
$CONFIG['resrouce_link']='http://202.82.149.247:8111/ta_callcentre_dev';
$CONFIG['solution_configuration']='debug';
$CONFIG['domain']		= 'localhost';

#[Smarty config]
$CONFIG['smarty']['compile_check']=true;
$CONFIG['smarty']['debugging']=false; 
$CONFIG['smarty']['caching']=false; 
$CONFIG['smarty']['cache_lifetime']=3600; //second,-1 is always on 
$CONFIG['smarty']['rootpath']		= 'http://localhost/ta_portal_dev';  
$CONFIG['smarty']['https_rootpath']		= 'http://localhost/ta_portal_dev';  


#[log]
$CONFIG['logsavedir'] 		= 'logs/';	
$CONFIG['error_handler'] ="E_ALL";

#[Google maps]
//$CONFIG['googlemap']["GOOGLE_MAPKEY"]= "ABQIAAAA0RMaQtlC_-ikp0Q7RCxG6BT2yXp_ZAY8_ufC3CFXhHIE1NvwkxSPlebxT9CDp6ZbuKktzgc3pbBGOg";
#[202.82.149.247:8111]
//$CONFIG['googlemap']["GOOGLE_MAPKEY"]= "ABQIAAAA0RMaQtlC_-ikp0Q7RCxG6BRixai54ZgfZK03gxKHyl0EhjmCgxRaq-Pw5H4pxiBaR7trVM_Tg8I0dg";
#[TicketAsia]
$CONFIG['googlemap']["GOOGLE_MAPKEY"]= "ABQIAAAA0RMaQtlC_-ikp0Q7RCxG6BTxepvYwvnpaOV9U4OSpkQEGV7GqRQsc6GuZ5Cq8l6tqmuuT3ZPiwSUFA";
$CONFIG['google_analytics_account']		= 'UA-18906323-1';
#[TicketChina]
//$CONFIG['googlemap']["GOOGLE_MAPKEY"]= "ABQIAAAA0RMaQtlC_-ikp0Q7RCxG6BSrE0vwZQRLzi783X-ZzF5-hvN6chTKp-XDtboEM3qqXRU0FdNh1dKZkw";
//$CONFIG['google_analytics_account']		= 'UA-18905730-1';


#[lang]
$CONFIG['language']['default']='zh-tc';

#[Movie_category_id]
$CONFIG['movie_category_id']=7;

#[Show_category_id]
$CONFIG['show_category_id']=5;

#[City_id]
$CONFIG['gz_city_id']=1;
$CONFIG['hk_city_id']=2;
$CONFIG['mo_city_id']=3;

#[paging]
$CONFIG['paging']['page_size']=4;
$CONFIG['paging']['show_pages_num']=5;

#['Payease']
$CONFIG['payease']['payease_id']="4441";//6328  4441
$CONFIG['payease']['e_payease_id']="6328";
$CONFIG['payease']['payease_key']="maipiaolaiplwang";
$CONFIG['payease']['e_payease_key']="o94n9sd4nxc9432w";

$CONFIG['payease']['payease_url']="http://pay.beijing.com.cn/prs/user_payment.checkit";
$CONFIG['payease']['e_payease_url']="http://pay.beijing.com.cn/prs/e_user_payment.checkit";

#['Web Service']
$CONFIG['web_service']['server'] = "localhost";
$CONFIG['web_service']['port'] = "80";
$CONFIG['web_service']['path'] = "/ta_api_dev";

#['default']
$CONFIG['default']['city_id'] = 2;
$CONFIG['default']['page_count'] = 5;
$CONFIG['default']['hotel_page_count'] = 15;

#['Payment']
$CONFIG['payment']['payment_gateway_type'] = 'asiapay'; // 'payease' or 'asiapay'
$CONFIG['payment']['payment_return_url']='http://localhost/ta_portal_dev/payment/payment_result.php';
$CONFIG['payment']['payment_cancel_url']='http://localhost/ta_portal_dev/payment/payment_cancel.php';


#['ASIAPAY']
$CONFIG['asiapay']['merchantID'] = '88103054';
$CONFIG['asiapay']['currCode'] = '344';
$CONFIG['asiapay']['CP_payMethod'] = 'CHINAPAY';
$CONFIG['asiapay']['CP_payType'] = 'N';
$CONFIG['asiapay']['CC_payType'] = 'H';
$CONFIG['asiapay']['CP_actionUrl'] = 'https://test.paydollar.com/b2cDemo/eng/payment/payForm.jsp';
$CONFIG['asiapay']['CC_actionUrl'] = 'https://test.paydollar.com/b2cDemo/eng/dPayment/payComp.jsp';
//$CONFIG['asiapay']['merchantID'] = '88062474';
//$CONFIG['asiapay']['CP_actionUrl'] = 'https://www.paydollar.com/b2c2/eng/payment/payForm.jsp';
//$CONFIG['asiapay']['CC_actionUrl'] = 'https://www.paydollar.com/b2c2/eng/dPayment/payComp.jsp';

?>