<?php

 defined('IN_TA') or exit('Access Denied');
 defined('IN_TA_MEMBER') or exit('Access Denied');
 
 $mgr=$memberMgr;
 
 
 function checkMemberLogin($args){
 	global $mgr;
 	global $CONFIG;
 	if(trim($args["lang_id"])=="")
 	{
 		$args["lang_id"]=$CONFIG["lang_id"];
 	}
 	if(trim($args["member_id"])=="")
 	{
 		$member_id=-1;
 	}
 	else
 	{
 		$member_id=$args["member_id"];
 	}
 	
 
 	$rs=$mgr->getMember($member_id,$args["login_name"],$args["lang_id"]);	
 	$return_str="right";
 	$return_code="1";
 	$member=array();
 	if(count($rs)>0)
 	{
 		$member=$rs[0];
 		if(md5($args["password"])!=$member["password"])
 		{
 			$return_str="password_error";
 		}
 		else if($member["status"]=="I")
 		{
 			$return_str="inactive_user";
 		}
 		else if($member["status"]=="D")
 		{
 			$return_str="not_exist";
 		}
 		else
 		{
 			$return_str="right";
 			$return_code=0;
 			$mgr->updateLastLoginTime($member["id"]);
 		}
 	}
 	else
 	{
 		$return_str="not_exist";
 	}
 	
 	$member["result"]=$return_str;
 	$member["result_code"]=$return_code;
 	
 	return $member;
 }
 
 function registerMember($args){
 	global $mgr;
 	logger_mgr::logDebug('!!!!!!!!!!!!!!!!!!!!!!!!!!');
 	global $CONFIG;
 	if(trim($args["lang_id"])=="")
 	{
 		$args["lang_id"]=$CONFIG["lang_id"];
 	}
 	if(trim($args["honorific_id"])=="")
 	{
 		$honorific_id=1;
 	}
 	else
 	{
 		$honorific_id=$args["honorific_id"];
 	}
 	
 	if(trim($args["district_id"])=="")
 	{
 		$district_id=1;
 	}
 	else
 	{
 		$district_id=$args["district_id"];
 	}
 	if(trim($args["point"])=="")
 	{
 		$point=0;
 	}
 	else
 	{
 		$point=$args["point"];
 	}
 	
  $rs=$mgr->registerMember(
  			$args["login_name"],
  			md5($args["password"]),
  			$honorific_id,
 			$args["first_name"],
 			$args["last_name"],
 			$args["nickname"],
 			$args["gender"],
 			$args["birthday"],
			$args["mobile_country_code"],
			$args["mobile_no"],
			$args["home_country_code"],
			$args["home_area_code"],
			$args["home_no"],
			$args["office_country_code"],
			$args["office_area_code"],
			$args["office_no"],
			$args["email"],
			$district_id,
			$args["address"],
			$point);
	
	if($rs["result"]=='register_success')
	{
		$rs["lang_id"]=$args["lang_id"];
		$rss= checkMemberLogin($rs);
		$rss["result"]=$rs["result"];
		$rss['result_code']=0;
		
		return $rss;
	}
	else
	{
		return $rs;
	}
	
 }
 
 function getHonorific($args){
 	global $mgr;
 	 	
 	$lang_id=trim($args['lang_id'])==""?-1:$args['lang_id'];
 	
	$rshonorific=$mgr->getHonorific($lang_id); 
	
 	return $rshonorific;
 }
 
 /*
  *Description:check member account
  *Param:account string
  *return:result int
  */
  function checkMemberAccount($args)
  {global $mgr;
  	$account=$args['login_name'];
  	logger_mgr::logDebug('asdfasdfasdfasdfsadfsadfasdfsadf'.$account);
  	return $mgr->checkMemberAccount($account);
  }
  
  /*
   * Function:changeMemberPassword
   * Description:change member password
   * Param:$account string
   * Param:$old_password string
   * Param:$new_password string
   * Return:result int -1:account is not exit,0:password is wrong,1:updated successfully 
   */
  function changeMemberPassword($args)
  {global $mgr;
  	return $mgr->changeMemberPassword($args['login_name'],md5($args['old_password']),md5($args['new_password']));
  }
  
  /*
   * Function:updateMember
   * Description:update member info
   * Param:$args array
   * Return:result array
   */
 
 function updateMember($args)
 {global $mgr;
 
 	$password=setSpecialNull();
 	$login_name=setSpecialNull();
 	logger_mgr::logDebug('!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!');
 	if(trim($args["point"])=="")
 	{
 		$point=0;
 	}
 	else
 	{
 		$point=$args["point"];
 	}
 	$rs=$mgr->updateMemberDetails(
 	 	$args['member_id'],
 	 	$login_name,
 	 	$password,
 	 	0,
		0,   
		$args['honorific_id'],
		$args['first_name'],
		$args['last_name'],
		$args['nickname'],
		$args['gender'],
		$args['birthday'],
		$args['mobile_country_code'],
		$args['mobile_no'],
		$args['home_country_code'],
		$args['home_area_code'],
		$args['home_no'],
		$args['office_country_code'],
		$args['office_area_code'],
		$args['office_no'],
		$args['email'],
		$args['district_id'],
		$args['address'],
		$point,
		0);
	return $rs;
 }
 
 /*
  * Function:getMemberInfo
  * Descriotion:get member details
  * Param:$member_id int
  * Param:$lang_id int
  * Return:Array
  */
  
  function getMemberInfo($args)
  {global $mgr;
  	global $CONFIG;
 	if(trim($args["lang_id"])=="")
 	{
 		$args["lang_id"]=$CONFIG["lang_id"];
 	}
  	return $mgr->getMember($args['member_id'],'',$args['lang_id']);
  }
  
  /*Function:getCountryListByDistrictId
   *Description:get all country list with selected country
   *Param:$district_id int
   *Param:$lang_id int
   *Return:Array
   */
   
   function getCountryListByDistrictId($args)
   {global $mgr;
   	global $CONFIG;
 	if(trim($args["lang_id"])=="")
 	{
 		$args["lang_id"]=$CONFIG["lang_id"];
 	}
   		return $mgr->getCountryListByDistrictId($args['district_id'],$args['lang_id']);
   }
   
   /*Function:getCityListByDistrictId
   *Description:get all country list with selected city
   *Param:$district_id int
   *Param:$lang_id int
   *Return:Array
   */
   function getCityListByDistrictId($args)
   {global $mgr;
   	global $CONFIG;
 	if(trim($args["lang_id"])=="")
 	{
 		$args["lang_id"]=$CONFIG["lang_id"];
 	}
   		return $mgr->getCityListByDistrictId($args['district_id'],$args['lang_id']);
   } 
   
   function modifyPoint($args)
   {
   		global $mgr;
        return $mgr->modifyPoint($args["member_id"],$args["point"]);   	
   }
   
?>