<?php

/*
 * Created on 2010-5-11
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
function encode($str) {
	return mb_convert_encoding($str, 'UTF-8');
}
function parameter_filter($param) {
	$arr = array (
		"'" => "''"
	);
	$param = strtr($param, $arr);
	return $param;
}
function ParentRedirect($url) {
	//Header("Location: $url");
	echo "<script languate=\"javascript\">";
	echo "parent.location.href='" . $url . "'";
	echo "</script>";
	exit ();
}
function WindowRedirect($url) {
	//Header("Location: $url");
	echo "<script languate=\"javascript\">";
	echo "window.location.href='" . $url . "'";
	echo "</script>";
	exit ();
}

function convertDatetime($str, $date) {
	if ($str == "1") {
		return date("F j, Y (D) H:i", strtotime($date));
	} else
		if ($str == "3") {
			return date("Y&#24180;n&#26376;j&#26085; ", strtotime($date)) . getChineseI(date("w", strtotime($date))) . date(" H:i", strtotime($date));
		} else
			if ($str == "2") {
				return date("Y&#24180;n&#26376;j&#26085; ", strtotime($date)) . getChineseI(date("w", strtotime($date))) . date(" H:i", strtotime($date));
			} else {
				return $date;
			}
}

function convertDate($str, $date) {
	if ($str == "1") {
		return date("F j, Y (D)", strtotime($date));
	} else
		if ($str == "3") {
			return date("Y&#24180;n&#26376;j&#26085; ", strtotime($date)) . getChineseI(date("w", strtotime($date)));
		} else
			if ($str == "2") {
				return date("Y&#24180;n&#26376;j&#26085; ", strtotime($date)) . getChineseI(date("w", strtotime($date)));
			} else {
				return $date;
			}
}

function convertDateTime_v1($str, $date) {
	if ($str == "1") {
		return date("d/m H:i (D)", strtotime($date));
	} else
		if ($str == "3") {
			//return date("d/m H:i ",strtotime($date)).getChineseI(date("w",strtotime($date)));
			return date("d/m H:i (D)", strtotime($date));
		} else
			if ($str == "2") {
				//return date("d/m H:i ",strtotime($date)).getChineseI(date("w",strtotime($date)));
				return date("d/m H:i (D)", strtotime($date));
			} else {
				return $date;
			}
}

function convertYearMonth($str, $date) {
	if ($str == "1") {
		return date("F Y ", strtotime($date));
	} else
		if ($str == "3") {
			return date("n&#26376; Y&#24180;", strtotime($date));
		} else
			if ($str == "2") {
				return date("n&#26376; Y&#24180;", strtotime($date));
			} else {
				return $date;
			}
}
function getChineseI($str) {
	$str = trim($str);
	$rts = "";
	switch ($str) {
		case "1" :
			$rts = "星期一";
			break;
		case "2" :
			$rts = "星期二";
			break;
		case "3" :
			$rts = "星期三";
			break;
		case "4" :
			$rts = "星期四";
			break;
		case "5" :
			$rts = "星期五";
			break;
		case "6" :
			$rts = "星期六";
			break;
		case "0" :
			$rts = "星期日";
			break;
	}
	return $rts;
}

/*
 function name：remote_file_exists
 function：valid remote file is exists
 params： $url_file - remote file URL
 return：exists return true，else return false
 */
function remote_file_exists($url_file) {
	if (@ fclose(@ fopen($url_file, "r"))) {
		return true;
	} else {
		return false;
	}
}

/*
 * 
 */
function obj2xmlrpcval($obj) {
	$v = new xmlrpcval();

	if (is_array($obj)) {
		foreach ($obj as $key => $val) {
			$arr[$key] = obj2xmlrpcval($val);
		}
		$v->addStruct($arr);
	} else {
		$v->addScalar($obj);
	}

	return $v;
}


function getLanguageResult($rs,$language_id)
{
	$cr=array();
	for($i=0;$i<count($rs);$i++)
	{
		if($rs[$i]["language_id"]==$language_id)
		{
			$cr[]=$rs[$i];
		}
	}
	return $cr;
}

 
 function checkIdInArray($array,$str_name,$id)
 {
 	for($i=0;$i<count($array);$i++)
 	{
 		if($array[$i][$str_name]==$id)
 		{
 			return true;
 		}
 	}
 	return false;
 }
 function setSpecialNull()
 {
 	$value='ta_null_special_remark';
 	return $value;
 }
 function sortIdTopInArray($array,$id,$name){
	$rs =array();
	for($i=0;$i<count($array);$i++){
		
		if($array[$i][$name]==$id){
			$rs[] = $array[$i];
		}
		
	}	
	//print_r($rs);
	for($j=0;$j<count($array);$j++){
		if($array[$j][$name] != $id){
			$rs[] = $array[$j];
		}
		
	}
	return $rs;
}

	function cutLastSymbol($str,$symbol)
	{
		if($str[strlen($str)-1]==$symbol)
		{
			return substr($str,0,strlen($str)-1);
		}
		return $str;
	}
	
	function sortByMinMax($rs,$field)
	{
		//print_r($rs);
		$array=array();
		$while= count($rs);
		$cour=1;
		for($i=0;$i<$while;$i++)
		{
			$value=0;
			$k=0;
			//print_r($rs);
			/*
			for($j=0;$j<count($rs);$j++)
			{
				if($value<$rs[$j][$field])	
				{
					$value=$rs[$j][$field];
					$k=$j;
				}
			}*/
			foreach($rs as $j=>$rss)
			{
				//echo $j.",";
				if($value<=$rs[$j][$field])	
				{
					$value=$rs[$j][$field];
					$k=$j;
				}
			}
			//echo $k."<br>";
			$rs[$k]["index"]=$cour++;
			$array[]=$rs[$k];
			unset($rs[$k]);
		}
		return $array;
	}
	function printArray($rs){
		
		echo setArrayStr($rs);
	}
	function setArrayStr($rs){
		global $CONFIG;
		$str="";
		$rep= array(","=>"%2C","\n"=>"%10");
		for($i=0;$i<count($rs);$i++)
		{/*
			for($j=0;$j<count($rs[$i]);$j++)
			{
				if($j>0)
				{
					$str.=",";
				}
				$str.=strtr($rs[$i][$j],$rep);
			}
			*/
			$k=0;
			foreach($rs[$i] as $key=>$value)
			{
				if($k>0)
				{
					$str.=$CONFIG['api']['SEPARATOR'];
				}
				$k++;
				$str.=strtr($value,$rep);
			}
			$str.=$CONFIG['api']['LINE_SPLIT'];
		}
		return $str;
	}
	
	/** 
* xml2array() will convert the given XML text to an array in the XML structure. 
* Link: http://www.bin-co.com/php/scripts/xml2array/ 
* Arguments : $contents - The XML text 
*                 $get_attributes - 1 or 0. If this is 1 the function will get the attributes as well as the tag values - this results in a different array structure in the return value. 
*                 $priority - Can be 'tag' or 'attribute'. This will change the way the resulting array sturcture. For 'tag', the tags are given more importance. 
* Return: The parsed XML in an array form. Use print_r() to see the resulting array structure. 
* Examples: $array =   xml2array(file_get_contents('feed.xml')); 
*               $array =   xml2array(file_get_contents('feed.xml', 1, 'attribute')); 
*/ 
function xml2array($contents, $get_attributes=1, $priority = 'tag') { 
     if(!$contents) return array(); 

     if(!function_exists('xml_parser_create')) { 
        //print "'xml_parser_create()' function not found!"; 
        return array(); 
     } 

    //Get the XML parser of PHP - PHP must have this module for the parser to work 
    $parser = xml_parser_create(''); 
    xml_parser_set_option($parser, XML_OPTION_TARGET_ENCODING, "UTF-8"); # http://minutillo.com/steve/weblog/2004/6/17/php-xml-and-character-encodings-a-tale-of-sadness-rage-and-data-loss 
    xml_parser_set_option($parser, XML_OPTION_CASE_FOLDING, 0); 
    xml_parser_set_option($parser, XML_OPTION_SKIP_WHITE, 1); 
    xml_parse_into_struct($parser, trim($contents), $xml_values); 
    xml_parser_free($parser); 

     if(!$xml_values) return;//Hmm... 

     //Initializations 
    $xml_array = array(); 
    $parents = array(); 
    $opened_tags = array(); 
    $arr = array(); 

    $current = &$xml_array; //Refference 

     //Go through the tags. 
    $repeated_tag_index = array();//Multiple tags with same name will be turned into an array 
    foreach($xml_values as $data) { 
         unset($attributes,$value);//Remove existing values, or there will be trouble 

         //This command will extract these variables into the foreach scope 
         // tag(string), type(string), level(int), attributes(array). 
        extract($data);//We could use the array by itself, but this cooler. 

        $result = array(); 
        $attributes_data = array(); 
         
         if(isset($value)) { 
             if($priority == 'tag') $result = $value; 
             else $result['value'] = $value; //Put the value in a assoc array if we are in the 'Attribute' mode 
        } 

        //Set the attributes too. 
        if(isset($attributes) and $get_attributes) { 
             foreach($attributes as $attr => $val) { 
                 if($priority == 'tag') $attributes_data[$attr] = $val; 
                 else $result['attr'][$attr] = $val; //Set all the attributes in a array called 'attr' 
            } 
         } 

        //See tag status and do the needed. 
        if($type == "open") {//The starting of the tag '<tag>' 
            $parent[$level-1] = &$current; 
             if(!is_array($current) or (!in_array($tag, array_keys($current)))) { //Insert New tag 
                $current[$tag] = $result; 
                 if($attributes_data) $current[$tag. '_attr'] = $attributes_data; 
                $repeated_tag_index[$tag.'_'.$level] = 1; 

                $current = &$current[$tag]; 

             } else { //There was another element with the same tag name 

                if(isset($current[$tag][0])) {//If there is a 0th element it is already an array 
                    $current[$tag][$repeated_tag_index[$tag.'_'.$level]] = $result;
                    $repeated_tag_index[$tag.'_'.$level]++; 
                 } else {//This section will make the value an array if multiple tags with the same name appear together 
                    $current[$tag] = array($current[$tag],$result);//This will combine the existing item and the new item together to make an array 
                    $repeated_tag_index[$tag.'_'.$level] = 2; 
                     
                     if(isset($current[$tag.'_attr'])) { //The attribute of the last(0th) tag must be moved as well 
                        $current[$tag]['0_attr'] = $current[$tag.'_attr']; 
                         unset($current[$tag.'_attr']); 
                     } 

                 } 
                $last_item_index = $repeated_tag_index[$tag.'_'.$level]-1; 
                $current = &$current[$tag][$last_item_index]; 
             } 

         } elseif($type == "complete") { //Tags that ends in 1 line '<tag />' 
             //See if the key is already taken. 
            if(!isset($current[$tag])) { //New Key 
                $current[$tag] = $result; 
                $repeated_tag_index[$tag.'_'.$level] = 1; 
                 if($priority == 'tag' and $attributes_data) $current[$tag. '_attr'] = $attributes_data; 

             } else { //If taken, put all things inside a list(array) 
                if(isset($current[$tag][0]) and is_array($current[$tag])) {//If it is already an array... 

                     // ...push the new element into that array. 
                    $current[$tag][$repeated_tag_index[$tag.'_'.$level]] = $result;
                     
                     if($priority == 'tag' and $get_attributes and $attributes_data) { 
                        $current[$tag][$repeated_tag_index[$tag.'_'.$level] . '_attr'] = $attributes_data; 
                     } 
                    $repeated_tag_index[$tag.'_'.$level]++; 

                 } else { //If it is not an array... 
                    $current[$tag] = array($current[$tag],$result); //...Make it an array using using the existing value and the new value 
                    $repeated_tag_index[$tag.'_'.$level] = 1; 
                     if($priority == 'tag' and $get_attributes) { 
                         if(isset($current[$tag.'_attr'])) { //The attribute of the last(0th) tag must be moved as well 
                             
                            $current[$tag]['0_attr'] = $current[$tag.'_attr']; 
                             unset($current[$tag.'_attr']); 
                         } 
                         
                         if($attributes_data) { 
                            $current[$tag][$repeated_tag_index[$tag.'_'.$level] . '_attr'] = $attributes_data; 
                         } 
                     } 
                    $repeated_tag_index[$tag.'_'.$level]++; //0 and 1 index is already taken 
                } 
             } 

         } elseif($type == 'close') { //End of tag '</tag>' 
            $current = &$parent[$level-1]; 
         } 
     } 
     
     return($xml_array); 
}

?>