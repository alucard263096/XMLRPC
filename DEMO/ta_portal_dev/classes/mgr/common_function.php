<?php
/*
 * Created on 2010-5-11
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */

$weekday_str_c=array("日","一","二","三","四","五","六");

function encode($str)
{
	return mb_convert_encoding($str,'UTF-8');
}
function parameter_filter($param)
{
	$arr=array("'"=>"''");
	$param = strtr($param,$arr);
	return $param;
}
function ParentRedirect($url)
{
	//Header("Location: $url");
	echo "<script languate=\"javascript\">";
	echo "parent.location.href='".$url."'";
	echo "</script>";
	exit();
}
function WindowRedirect($url)
{
	//Header("Location: $url");
	echo "<script language=\"javascript\">";
	echo "window.location.href='".$url."'";
	echo "</script>";
	exit();
}

function convertDateTimeSmarty($param)
{
	global $weekday_str_c;
	extract($param);
	if ($lang=="zh-sc" || $lang=="zh-tc")
	{
		return date("m",strtotime($date))."月".date("d",strtotime($date))."日 ".(date("a",strtotime($date))=="am"?"上午":"下午").date("h:i",strtotime($date))." (星期".$weekday_str_c[date("w",strtotime($date))].")";
	}
	else
	{
		return date("d/m h:iA (D)",strtotime($date));
	}
	return date("d/m h:iA (D)",strtotime($date));
}

function convertDateSmarty($param)
{
	global $weekday_str_c;
	extract($param);
	if ($lang=="zh-sc" || $lang=="zh-tc")
	{
		return date("Y",strtotime($date))."年".date("m",strtotime($date))."月".date("d",strtotime($date))."日";
	}
	else
	{
		return date("Y/m/d",strtotime($date));
	}
}
function rateFormatSmarty($param)
{
	extract($param);
	$ratec=explode(".",$rate);
	if($ratec[1]>0)
	{
		return $rate;
	}
	else
	{
		return $ratec[0];
	}
}
function convertDatetime($lang,$date)
{
	if ($lang=="zh-sc" || $lang=="zh-tc")
	{
		return date("m",strtotime($date))."月".date("d",strtotime($date))."日 (星期".$weekday_str_c[date("w",strtotime($date))]+") ".(date("a",strtotime($date))=="am"?"上午":"下午").date("h:i",strtotime($date));
	}
	else
	{
		return date("d/m (D) h:iA",strtotime($date));
	}
	/*if($str=="en-us")
	{
		return date("F j, Y (D) H:i",strtotime($date));
	}
	else  if($str=="zh-sc")
	{
		return date("Y&#24180;n&#26376;j&#26085; ",strtotime($date)).getChineseI(date("w",strtotime($date))).date(" H:i",strtotime($date));
	}
	else  if($str=="zh-tc")
	{
		return date("Y&#24180;n&#26376;j&#26085; ",strtotime($date)).getChineseI(date("w",strtotime($date))).date(" H:i",strtotime($date));
	}
	else
	{
		return $date;
	}*/
}


function convertDate($str,$date)
{
	if($str=="en-us")
	{
		return date("F j, Y (D)",strtotime($date));
	}
	else  if($str=="zh-sc")
	{
		return date("Y&#24180;n&#26376;j&#26085; ",strtotime($date)).getChineseI(date("w",strtotime($date)));
	}
	else  if($str=="zh-tc")
	{
		return date("Y&#24180;n&#26376;j&#26085; ",strtotime($date)).getChineseI(date("w",strtotime($date)));
	}
	else
	{
		return $date;
	}
}

function convertDateTime_v1($str,$date)
{
	if($str=="en-us")
	{
		return date("d/m H:i (D)",strtotime($date));
	}
	else  if($str=="zh-sc")
	{
		//return date("d/m H:i ",strtotime($date)).getChineseI(date("w",strtotime($date)));
		return date("d/m H:i (D)",strtotime($date));
	}
	else  if($str=="zh-tc")
	{
		//return date("d/m H:i ",strtotime($date)).getChineseI(date("w",strtotime($date)));
		return date("d/m H:i (D)",strtotime($date));
	}
	else
	{
		return $date;
	}
}


function convertYearMonth($str,$date)
{
	if($str=="en-us")
	{
		return date("F Y ",strtotime($date));
	}
	else  if($str=="zh-sc")
	{
		return date("n&#26376; Y&#24180;",strtotime($date));
	}
	else  if($str=="zh-tc")
	{
		return date("n&#26376; Y&#24180;",strtotime($date));
	}
	else
	{
		return $date;
	}
}
function getChineseI($str)
{
	$str=trim($str);
	$rts="";
	switch($str)
	{
		case "1":$rts="星期一";break;
		case "2":$rts= "星期二";break;
		case "3":$rts= "星期三";break;
		case "4":$rts= "星期四";break;
		case "5":$rts= "星期五";break;
		case "6":$rts= "星期六";break;
		case "0":$rts= "星期日";break;
	}
	return $rts;
}

/*
 function name：remote_file_exists
 function：valid remote file is exists
 params： $url_file - remote file URL
 return：exists return true，else return false
 */
function remote_file_exists($url_file){
	if(@fclose(@fopen($url_file,"r")))
	{
		return true;
	}
	else
	{
		return false;
	}
}


?>
