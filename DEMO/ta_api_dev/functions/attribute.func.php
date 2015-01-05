<?php
 defined('IN_TA') or exit('Access Denied');
 defined('IN_TA_ATTRIBUTE') or exit('Access Denied');
 
 $mgr=$attributeMgr;
 /*
  * Function Name:getAttributeList
  * Description:Get Attribute List
  * Param:$category_id
  * Param:$attribute_type_id
  * Param:$lang_id
  * Return:array[][]
  */
 function getAttributeList($args){
 	global $mgr;
 	global $CONFIG;
 	if(trim($args["category_id"])=="")
 	{
 		$category_id=-1;
 	}
 	else
 	{
 		$category_id=$args["category_id"];
 	}	
 	if(trim($args["attribute_type_id"])=="")
 	{
 		$attribute_type_id=-1;
 	}
 	else
 	{
 		$attribute_type_id=$args["attribute_type_id"];
 	}
 	if(trim($args["lang_id"])=="")
 	{
 		$args["lang_id"]=$CONFIG["lang_id"];
 	}		
 	
 	$rs=$mgr->getAttribute($category_id,$attribute_type_id,$args["lang_id"]);
 	
 	return $rs;
 	
 } 
 
 function getPriceList($args){
 	global $mgr;
 	$ar1=array();
 	$ar1["min_price"]=0;
 	$ar1["max_price"]=500;
 	$ar2=array();
 	$ar2["min_price"]=500;
 	$ar2["max_price"]=1000;
 	$ar3=array();
 	$ar3["min_price"]=1000;
 	$ar3["max_price"]=-1;
 	
 	$arr=array();
 	$arr["symbol"]='$';
 	$a[]=$ar1;
 	$a[]=$ar2;
 	$a[]=$ar3;
 	
 	$arr["list"]=$a;
 	
 	
 	return $arr;
 	
 }
 
 
 /*
  * Function Name:getAttributeDetails
  * Param:$id
  * Param:$lang_id
  * Return:array[]
  */
  function getAttributeDetails($args)
  {global $mgr;
  	return $mgr->getAttributeById($args['id'],$args['lang_id']);
  }
  
  /*
   * Function Name:updateAttribute
   * Param:$id int
   * Param:$attribute_type_id int
   * Param:$image_id int
   * Param:$name string,
   * Param:$lang_id int
   * Return:array[]
   */

   function updateAttribute($args)
   {global $mgr;
   		return $mgr->updateAttribute($args['id'],$args['attribute_type_id'],$args['image_id'],$args['name'],$args['lang_id']);
   }
   
   /*
    * Function:getAttributeTypeList
    * Param:$category_id int
    * Param:$lang_id int
    * Return:array[][]
    */
    function getAttributeTypeList($args)
    {global $mgr;
    	return $mgr->getAttributeTypeList($args['category_id'],$args['lang_id']);
    }

?>