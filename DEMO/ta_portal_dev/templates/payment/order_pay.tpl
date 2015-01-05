<{include file="$smarty_root/header.tpl" }>
<script type="text/javascript" language="JavaScript" src="<{$rootpath}>/js/credit_card_checker.js"> </script>
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
	               <img src="<{$rootpath}>/images/<{$lang}>/titlebar_myorder.gif">
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
            
            <td><img src="<{$rootpath}>/images/<{$lang}>/tab_1orderdetail.gif" border="0"></td>
            <td><img src="<{$rootpath}>/images/<{$lang}>/tab_2payment_blur.gif" border="0"></td>
            <td valign="bottom"><img src="<{$rootpath}>/images/<{$lang}>/tab_3completeorder_blur.gif" border="0" ></td>
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
               <{include file="$smarty_root/payment/order_pay_show_info.tpl" }>
            </td>
          </tr>
        </table>
      </tr>
     <tr>
     	<td class="shoppingcartable_top shoppingcartable_nornal">
     		<{include file="$smarty_root/payment/order_pay_client_info.tpl" }>
     		<hr>
     		<{include file="$smarty_root/payment/order_pay_payment_info.tpl" }>
     	</td>
     </tr>
     <tr>
     	<td class="shoppingcartable_top shoppingcartable_nornal">
     		<{include file="$smarty_root/payment/order_pay_delivery_type.tpl" }>
     	</td>
     </tr>
     <tr>
     	<td class="shoppingcartable_top shoppingcartable_nornal">
     		<{include file="$smarty_root/payment/order_pay_delivery_info.tpl" }>
     	</td>
     </tr>
</table> 
</td>
<td width='20'></td>
</tr>
</table>
    <form id="form1" action="<{$rootpath}>/payment/payease.php" method="post" >
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

<form id="form2" action="<{$rootpath}>/payment/asiapay_wait.php" method="post" >
	<input type="hidden" name="transid" id="dc_transid" />
	<input type="hidden" name="amount" id="dc_amount" />
	<input type="hidden" name="orderRef" id="dc_orderRef" />
	<input type="hidden" name="pMtd" id="dc_pMtd" value="CP" />
</form>

<form id="form3" action="<{$rootpath}>/payment/asiapay_wait.php" method="post" >
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
<{include file="$smarty_root/payment/order_pay_script.tpl" }>

<{include file="$smarty_root/footer.tpl" }>