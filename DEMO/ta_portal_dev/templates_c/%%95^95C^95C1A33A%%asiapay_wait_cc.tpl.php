<?php /* Smarty version 2.6.26, created on 2010-11-09 09:15:00
         compiled from E:/Apache2.2/htdocs/ta_portal_dev/templates/payment/asiapay_wait_cc.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['smarty_root'])."/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<input type="hidden" name="status" id="status" value="<?php echo $this->_tpl_vars['status']; ?>
">
<input type="hidden" name="ref" id="ref" value="<?php echo $this->_tpl_vars['ref']; ?>
">
<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0" class="payment_bg">
<tr>
<td>
   <table width="100%" border="0" cellspacing="0" cellpadding="0">
     <tr align="center">
       <td height="41">
           <img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/<?php echo $this->_tpl_vars['lang']; ?>
/titlebar_myorder.gif">
       </td>
     </tr>
   </table>           </td>
</tr>
<tr>
<td>&nbsp;</td>
</tr>
<tr>
<td>
<table width="960" border="0" cellspacing="0" cellpadding="0" align="center">
          <tr align="center">
            
            <td><img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/<?php echo $this->_tpl_vars['lang']; ?>
/tab_1orderdetail_blur.gif" border="0"></td>
            <td><img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/<?php echo $this->_tpl_vars['lang']; ?>
/tab_2payment.gif" border="0"></td>
            <td valign="bottom"><img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/<?php echo $this->_tpl_vars['lang']; ?>
/tab_3completeorder_blur.gif" border="0" ></td>
          </tr>
        </table>
</td>
</tr>
<tr><td>
	<table border="0" cellpadding="0" cellspacing="0" id="table1" width="100%" style="height: 300px;">
		<tr>
			<td align="center" style="font-weight: bold; font-size: 18px;">
				<div><?php echo $this->_tpl_vars['LANG']['payment']['wait']['1']; ?>
<br><br><?php echo $this->_tpl_vars['LANG']['payment']['wait']['2']; ?>
<br><br><?php echo $this->_tpl_vars['LANG']['payment']['wait']['3']; ?>
 </div> 
			</td>
		</tr>
		
	</table>
</td></tr>
</table>

<FORM name="asiapay_cc" method="POST" action="<?php echo $this->_tpl_vars['action_url']; ?>
">
	<input type="hidden" name="merchantId" value="<?php echo $this->_tpl_vars['merchantId']; ?>
">
	<input type="hidden" name="amount" value="<?php echo $this->_tpl_vars['amount']; ?>
" >
	<input type="hidden" name="orderRef" value="<?php echo $this->_tpl_vars['orderRef']; ?>
">
	<input type="hidden" name="currCode" value="<?php echo $this->_tpl_vars['currCode']; ?>
" >
	<input type="hidden" name="pMethod" value="<?php echo $this->_tpl_vars['pMethod']; ?>
" >
	<input type="hidden" name="cardNo" value="<?php echo $this->_tpl_vars['cardNo']; ?>
" >
	<input type="hidden" name="securityCode" value="<?php echo $this->_tpl_vars['securityCode']; ?>
" >
	<input type="hidden" name="epMonth" value="<?php echo $this->_tpl_vars['epMonth']; ?>
" >
	<input type="hidden" name="epYear" value="<?php echo $this->_tpl_vars['epYear']; ?>
" >
	<input type="hidden" name="cardHolder" value="<?php echo $this->_tpl_vars['cardHolder']; ?>
" >
	<input type="hidden" name="payType" value="<?php echo $this->_tpl_vars['payType']; ?>
" >
	<input type="hidden" name="successUrl" value="<?php echo $this->_tpl_vars['successUrl']; ?>
">
	<input type="hidden" name="failUrl" value="<?php echo $this->_tpl_vars['failUrl']; ?>
">
	<input type="hidden" name="errorUrl" value="<?php echo $this->_tpl_vars['errorUrl']; ?>
">
	<input type="hidden" name="lang" VALUE="<?php echo $this->_tpl_vars['pg_lang']; ?>
">
</FORM>
</table>

<script>	
	displayTime = 1; 
	countDown = function(message) {
					displayTime--; 
					if (displayTime == 0) {
						clearInterval(timer); 
					}
					document.asiapay_cc.submit();
				}; 
	timer = setInterval(countDown, 5000);	
</script>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['smarty_root'])."/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>