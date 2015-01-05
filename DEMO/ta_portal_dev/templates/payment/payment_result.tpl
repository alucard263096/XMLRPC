<{include file="$smarty_root/header.tpl" }>
<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0" class="payment_bg">
<tr>
<td>
   <table width="100%"  border="0" cellspacing="0" cellpadding="0">
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
    <td><img src="<{$rootpath}>/images/<{$lang}>/tab_2payment_blur.gif" border="0"></td>
    <td valign="bottom"><img src="<{$rootpath}>/images/<{$lang}>/tab_3completeorder.gif" border="0" ></td>
  </tr>
</table>
</td>
</tr>
<tr><td>
	<table border="0" cellpadding="0" cellspacing="0" id="table1" width="100%" style="height: 100px;">
		<{if $status == 0}>
		<tr>
			<td align="center" style="font-weight: bold; font-size: 18px;">
				<{$LANG.payment.success.1}> </br>
				<{$LANG.payment.success.2}> <{$param_list.ref_no}>
			</td>
		</tr>
		<tr>
			<td align="center" >
				<input type="button" value="<{$LANG.payment.save}>" />
				<input type="button" value="<{$LANG.payment.print}>" />
			</td>
		</tr>
		<{elseif $status == 1 }>
		<tr>
			<td align="center" style="font-weight: bold; font-size: 18px;">
				<{$LANG.payment.fail.1}> </br>
				<{$LANG.payment.fail.2}> <{$param_list.ref_no}>
			</td>
		</tr>
		<{else}>
		<tr>
			<td align="center" style="font-weight: bold; font-size: 18px;">
				<{$LANG.payment.cancel}> 
			</td>
		</tr>
		<{/if}>
	</table>
	<{include file="$smarty_root/payment/related_service.tpl" }>
</td></tr>
</table>
<{include file="$smarty_root/footer.tpl" }>