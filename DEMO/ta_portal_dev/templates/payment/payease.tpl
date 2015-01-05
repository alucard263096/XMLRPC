<?xml version="1.0" encoding="UTF-8" ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="hidden/html; charset=UTF-8" />
<title>Ta callcenter payment gateway</title>
</head>
<!--onload="document.getElementById('form').submit()"-->
<body onload="document.getElementById('form').submit()">
<div>
	<form name="form" id="form" method=post action="<{$payease_url}>">
 		<input type="hidden" name="v_mid" value="<{$v_mid}>">
 		<input type="hidden" name="v_oid" value="<{$v_oid}>">
 		<input type="hidden" name="v_rcvname" value="<{$v_rcvname}>">
 		<input type="hidden" name="v_rcvaddr" value="<{$v_rcvaddr}>">
 		<input type="hidden" name="v_rcvtel" value="<{$v_rcvtel}>">
 		<input type="hidden" name="v_rcvpost" value="<{$v_rcvpost}>">
		<input type="hidden" name="v_amount" value="<{$v_amount}>">
 		<input type="hidden" name="v_ymd" value="<{$v_ymd}>">
 		<input type="hidden" name="v_orderstatus" value="<{$v_orderstatus}>">
 		<input type="hidden" name="v_ordername" value="<{$v_ordername}>">
 		<input type="hidden" name="v_moneytype" value="<{$v_moneytype}>">
 		<input type="hidden" name="v_url" value="<{$v_url}>">
 		<input type="hidden" name="v_md5info" value="<{$v_md5info}>">
 		<!--<input type="submit" value="Submit" width="150" height="30" />-->
	</form>
</div>
</body>
</html>