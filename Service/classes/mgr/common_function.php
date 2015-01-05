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


?>