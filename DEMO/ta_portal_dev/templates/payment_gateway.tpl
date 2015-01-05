<?xml version="1.0" encoding="ISO-8859-1" ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Ta callcenter payment gateway</title>
</head>
<!--onload="document.getElementById('form').submit()"-->
<body>
<div >
	<form name="form" id="form" method=post action="<{$payment_gateway_url}>">
 		<input type="text" name="v_mid" value="<{$v_mid}>">                           <{$LANG.payment.merchant_code}><br/>
 		<input type="text" name="v_oid" value="<{$v_oid}>">           <{$LANG.payment.order_number}><br/>
 		<input type="text" name="v_rcvname" value="<{$v_rcvname}>">                       <{$LANG.payment.consignee_name}><br/>
 		<input type="text" name="v_rcvaddr" value="<{$v_rcvaddr}>">                 <{$LANG.payment.consignee_address}><br/>
 		<input type="text" name="v_rcvtel" value="<{$v_rcvtel}>">                     <{$LANG.payment.consignee_phone}><br/>
 		<input type="text" name="v_rcvpost" value="<{$v_rcvpost}>">	                <{$LANG.payment.consignee_postalcode}><br/>
		 <input type="text" name="v_amount" value="<{$v_amount}>">                     <{$LANG.payment.order_total_money}><br/>
 		<input type="text" name="v_ymd" value="<{$v_ymd}>">	              <{$LANG.payment.order_production_date}><br/>
 		<input type="text" name="v_orderstatus" value="<{$v_orderstatus}>">                       <{$LANG.payment.order_status}><br/>
 		<input type="text" name="v_ordername" value="<{$v_ordername}>">                   <{$LANG.payment.merchant_code}><br/>
 		<input type="text" name="v_moneytype" value="<{$v_moneytype}>">         <{$LANG.payment.currency}><br/>
 		<input type="text" name="v_url" value="<{$v_url}>"> <{$LANG.payment.order_return}><br/>
 		<input type="text" name="v_md5info" value="<{$v_md5info}>"> <{$LANG.payment.order_numeral_fingerprint}><br/>
 		<input type="button"onClick="document.form.submit();" value="Submit" width="150" height="30">
 </form>
</div>
</body>
</html>