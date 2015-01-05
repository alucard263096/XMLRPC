<{include file="$smarty_root/header.tpl" }>
<script language="javascript"  type="text/javascript"   src="<{$rootpath}>/js/jquery.timers.js"></script>
<div id="waittimer"></div>
<input type="hidden" name="status" id="status" value="<{$status}>">
<input type="hidden" name="ref" id="ref" value="<{$ref}>">
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
				<div class="result"> <{$ref}> <{$LANG.payment.processing}>  </br></div>
			</td>
		</tr>		
		<{else}>
		<tr>
			<td align="center" style="font-weight: bold; font-size: 18px;">
				<div><{$LANG.payment.cancel}> </div> 
			</td>
		</tr>
		<{/if}>
	</table>
</td></tr>
</table>
<{include file="$smarty_root/payment/related_service.tpl" }>
<script>
$(document).ready(function()
{
	$("#waittimer").oneTime("2s", function() {
		if($('#status').val() == 0)
		{
			$.get('<{$rootpath}>/payment/asiapay_checkfeed.php',{ ref: $('#ref').val()} ,function(data) {
				  $('.result').html(data);			
				});
		}
	}); 

})
</script>

<{include file="$smarty_root/footer.tpl" }>