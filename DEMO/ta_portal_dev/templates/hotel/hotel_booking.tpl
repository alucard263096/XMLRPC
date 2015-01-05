<{include file="$smarty_root/header.tpl" }>
<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
<tr><td>
	<table border="1" cellpadding="1" cellspacing="1" id="table1" width="100%" style="height: 300px;">
		<tr>
			<td align="center" style="font-weight: bold; font-size: 18px;">
				<{$LANG.hotel_booking.thx_user}> </br>
				<{$LANG.hotel_booking.order_number}>: <{$param_list.ref_no}>
			</td>
		</tr>
		<tr>
			<td align="center" >
				<input type="button" value="<{$LANG.hotel_booking.save}>" />
				<input type="button" value="<{$LANG.hotel_booking.print}>" />
			</td>
		</tr>
	</table>
</td></tr>
</table>
<{include file="$smarty_root/footer.tpl" }>