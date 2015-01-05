<?php



$payment_type=array();

$payment=array();
$payment["default"]='Y';
$payment["type"]='CreditCard';
$payment["logo"]='visa_master.gif';
$payment["name"]=$LANG["common"]["credit_card"];

$de=array();
$de[0]["id"]="1";
$de[0]["select"]="Y";
$de[1]["id"]="2";
$de[2]["id"]="3";
$de[3]["id"]="4";
$payment["delivery_type"]=$de;

$payment_type[]=$payment;


$payment=array();
$payment["default"]='N';
$payment["type"]='DebitCard';
$payment["logo"]='unionpay.gif';
$payment["name"]=$LANG["common"]["debit_card"];

$de=array();
$de[0]["id"]="1";
$de[0]["select"]="Y";
$de[1]["id"]="2";
$de[2]["id"]="3";
$de[3]["id"]="4";
$payment["delivery_type"]=$de;

$payment_type[]=$payment;
/*
$payment=array();
$payment["default"]='N';
$payment["type"]='Cash';
$payment["logo"]='spacer.gif';
$payment["name"]=$LANG["common"]["cash"];

$de=array();
$de[0]["id"]="1";
$de[0]["select"]="Y";
$de[1]["id"]="2";
$de[2]["id"]="3";
$payment["delivery_type"]=$de;

$payment_type[]=$payment;

$payment=array();
$payment["default"]='N';
$payment["type"]='MemberCard';
$payment["logo"]='spacer.gif';
$payment["name"]=$LANG["common"]["membership_card"];

$de=array();
$de[0]["id"]="1";
$de[0]["select"]="Y";
$de[1]["id"]="2";
$payment["delivery_type"]=$de;

$payment_type[]=$payment;
*/
$smarty->assign("payment_type",$payment_type);





?>