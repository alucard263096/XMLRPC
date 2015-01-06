<?php
 
 function getMyName(){
 	return "My name is Steve";
 }

 function addAB($args){
	$a=$args["a"];
	$b=$args["b"];
	return $a+$b;
 }

 function getArray(){
	$arr=Array();
	$arr[]="a";
	$arr[]="b";
	$arr[]="c";
	$arr[]="d";
	$arr[]=$arr;
	return $arr;
 }
 
 
?>