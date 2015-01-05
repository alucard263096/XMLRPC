<?php /* Smarty version 2.6.26, created on 2010-11-05 06:18:49
         compiled from E:/Apache2.2/htdocs/ta_portal_dev/templates/payment/order_pay.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['smarty_root'])."/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script type="text/javascript" language="JavaScript" src="<?php echo $this->_tpl_vars['rootpath']; ?>
/js/credit_card_checker.js"> </script>
<table width="1000" cellspacing="0" cellpadding="0" >
<tr>
<td width='20'></td>
<td align="center" class='payment_bg'>
<table width="960" align="center" cellspacing="0" cellpadding="0"  border="0" bordercolor='#000000' >
      <tr>
        <td>
           <table width="960" border="0" cellspacing="0" cellpadding="0">
             <tr>
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
        <table width="960" border="0" cellspacing="0" cellpadding="0">
          <tr>
            
            <td><img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/<?php echo $this->_tpl_vars['lang']; ?>
/tab_1orderdetail.gif" border="0"></td>
            <td><img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/<?php echo $this->_tpl_vars['lang']; ?>
/tab_2payment_blur.gif" border="0"></td>
            <td valign="bottom"><img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/<?php echo $this->_tpl_vars['lang']; ?>
/tab_3completeorder_blur.gif" border="0" ></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>
        <!--==============//////    Start information Table  \\\\\\=========== -->
        <table width="960" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td class="shoppingcartable_top">
               <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['smarty_root'])."/payment/order_pay_show_info.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            </td>
          </tr>
        </table>
      </tr>
     <tr>
     	<td class="shoppingcartable_top shoppingcartable_nornal">
     		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['smarty_root'])."/payment/order_pay_client_info.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
     		<hr>
     		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['smarty_root'])."/payment/order_pay_payment_info.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
     	</td>
     </tr>
     <tr>
     	<td class="shoppingcartable_top shoppingcartable_nornal">
     		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['smarty_root'])."/payment/order_pay_delivery_type.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
     	</td>
     </tr>
     <tr>
     	<td class="shoppingcartable_top shoppingcartable_nornal">
     		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['smarty_root'])."/payment/order_pay_delivery_info.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
     	</td>
     </tr>
</table> 
</td>
<td width='20'></td>
</tr>
</table>
    <form id="form1" action="<?php echo $this->_tpl_vars['rootpath']; ?>
/payment/payease.php" method="post" >
	<input type="hidden" name="trans_id" id="payment_trans_id" />
	<input type="hidden" name="name" id="payment_name" />
	<input type="hidden" name="address" id="payment_address" />
	<input type="hidden" name="mobile_no" id="payment_mobile_no" />
	<input type="hidden" name="postal_code" id="payment_postal_code" />
	<input type="hidden" name="total_amount" id="payment_total_amount" />
	<input type="hidden" name="currency_id" id="payment_currency_id" />
	<input type="hidden" name="ref_no" id="payment_ref_no" />
	<input type="hidden" name="card_type" id="card_type" />
</form>

<form id="form2" action="<?php echo $this->_tpl_vars['rootpath']; ?>
/payment/asiapay_wait.php" method="post" >
	<input type="hidden" name="transid" id="dc_transid" />
	<input type="hidden" name="amount" id="dc_amount" />
	<input type="hidden" name="orderRef" id="dc_orderRef" />
	<input type="hidden" name="pMtd" id="dc_pMtd" value="CP" />
</form>

<form id="form3" action="<?php echo $this->_tpl_vars['rootpath']; ?>
/payment/asiapay_wait.php" method="post" >
	<input type="hidden" name="transid" id="cc_transid" />
	<input type="hidden" name="amount" id="cc_amount" />
	<input type="hidden" name="orderRef" id="cc_orderRef" />
	<input type="hidden" name="pMethod" id="cc_pMethod" />
	<input type="hidden" name="cardNo" id="cc_cardNo" />
	<input type="hidden" name="securitycode" id="cc_securitycode" />
	<input type="hidden" name="epMonth" id="cc_epMonth" />
	<input type="hidden" name="epYear" id="cc_epYear" />
	<input type="hidden" name="pMtd" id="payment_pMtd" value="CC" />
</form>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['smarty_root'])."/payment/order_pay_script.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['smarty_root'])."/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>