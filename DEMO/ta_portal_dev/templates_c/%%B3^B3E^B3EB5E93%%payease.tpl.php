<?php /* Smarty version 2.6.26, created on 2010-11-05 06:19:01
         compiled from E:/Apache2.2/htdocs/ta_portal_dev/templates/payment/payease.tpl */ ?>
<?php echo '<?xml'; ?>
 version="1.0" encoding="UTF-8" <?php echo '?>'; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="hidden/html; charset=UTF-8" />
<title>Ta callcenter payment gateway</title>
</head>
<!--onload="document.getElementById('form').submit()"-->
<body onload="document.getElementById('form').submit()">
<div>
	<form name="form" id="form" method=post action="<?php echo $this->_tpl_vars['payease_url']; ?>
">
 		<input type="hidden" name="v_mid" value="<?php echo $this->_tpl_vars['v_mid']; ?>
">
 		<input type="hidden" name="v_oid" value="<?php echo $this->_tpl_vars['v_oid']; ?>
">
 		<input type="hidden" name="v_rcvname" value="<?php echo $this->_tpl_vars['v_rcvname']; ?>
">
 		<input type="hidden" name="v_rcvaddr" value="<?php echo $this->_tpl_vars['v_rcvaddr']; ?>
">
 		<input type="hidden" name="v_rcvtel" value="<?php echo $this->_tpl_vars['v_rcvtel']; ?>
">
 		<input type="hidden" name="v_rcvpost" value="<?php echo $this->_tpl_vars['v_rcvpost']; ?>
">
		<input type="hidden" name="v_amount" value="<?php echo $this->_tpl_vars['v_amount']; ?>
">
 		<input type="hidden" name="v_ymd" value="<?php echo $this->_tpl_vars['v_ymd']; ?>
">
 		<input type="hidden" name="v_orderstatus" value="<?php echo $this->_tpl_vars['v_orderstatus']; ?>
">
 		<input type="hidden" name="v_ordername" value="<?php echo $this->_tpl_vars['v_ordername']; ?>
">
 		<input type="hidden" name="v_moneytype" value="<?php echo $this->_tpl_vars['v_moneytype']; ?>
">
 		<input type="hidden" name="v_url" value="<?php echo $this->_tpl_vars['v_url']; ?>
">
 		<input type="hidden" name="v_md5info" value="<?php echo $this->_tpl_vars['v_md5info']; ?>
">
 		<!--<input type="submit" value="Submit" width="150" height="30" />-->
	</form>
</div>
</body>
</html>