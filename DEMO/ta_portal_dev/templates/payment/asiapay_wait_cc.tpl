<{include file="$smarty_root/header.tpl" }>
<input type="hidden" name="status" id="status" value="<{$status}>">
<input type="hidden" name="ref" id="ref" value="<{$ref}>">
<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0" class="payment_bg">
<tr>
<td>
   <table width="100%" border="0" cellspacing="0" cellpadding="0">
     <tr align="center">
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
<table width="960" border="0" cellspacing="0" cellpadding="0" align="center">
          <tr align="center">
            
            <td><img src="<{$rootpath}>/images/<{$lang}>/tab_1orderdetail_blur.gif" border="0"></td>
            <td><img src="<{$rootpath}>/images/<{$lang}>/tab_2payment.gif" border="0"></td>
            <td valign="bottom"><img src="<{$rootpath}>/images/<{$lang}>/tab_3completeorder_blur.gif" border="0" ></td>
          </tr>
        </table>
</td>
</tr>
<tr><td>
	<table border="0" cellpadding="0" cellspacing="0" id="table1" width="100%" style="height: 300px;">
		<tr>
			<td align="center" style="font-weight: bold; font-size: 18px;">
				<div><{$LANG.payment.wait.1}><br><br><{$LANG.payment.wait.2}><br><br><{$LANG.payment.wait.3}> </div> 
			</td>
		</tr>
		
	</table>
</td></tr>
</table>

<FORM name="asiapay_cc" method="POST" action="<{$action_url}>">
	<input type="hidden" name="merchantId" value="<{$merchantId}>">
	<input type="hidden" name="amount" value="<{$amount}>" >
	<input type="hidden" name="orderRef" value="<{$orderRef}>">
	<input type="hidden" name="currCode" value="<{$currCode}>" >
	<input type="hidden" name="pMethod" value="<{$pMethod}>" >
	<input type="hidden" name="cardNo" value="<{$cardNo}>" >
	<input type="hidden" name="securityCode" value="<{$securityCode}>" >
	<input type="hidden" name="epMonth" value="<{$epMonth}>" >
	<input type="hidden" name="epYear" value="<{$epYear}>" >
	<input type="hidden" name="cardHolder" value="<{$cardHolder}>" >
	<input type="hidden" name="payType" value="<{$payType}>" >
	<input type="hidden" name="successUrl" value="<{$successUrl}>">
	<input type="hidden" name="failUrl" value="<{$failUrl}>">
	<input type="hidden" name="errorUrl" value="<{$errorUrl}>">
	<input type="hidden" name="lang" VALUE="<{$pg_lang}>">
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
<{include file="$smarty_root/footer.tpl" }>
