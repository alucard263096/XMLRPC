<{include file="$smarty_root/header.tpl" }>
<table width="960" border="0" align="center" cellpadding="0" cellspacing="0">
	<tr>
		<td height='70px;'></td>
	</tr>
	<tr>
		<td align="center" valign="top" class="text14">
			 <{$login_name}><{$LANG.admin.welcome.1}>
		</td>
	</tr>
	<tr>
		<td align="center" valign="top" class="text14">
			<{$LANG.admin.welcome.2}>
		</td>
	</tr>
	<tr>
		<td height='40px;'></td>
	</tr>
	<tr>
		<td align="center" valign="top" class="text14">
			<{$LANG.admin.welcome.3}>
		</td>
	</tr>
	<tr>
		<td height='70px;'></td>
	</tr>
</table>
<script>
var t=5;
var timerid;
$(document).ready(function(){

	timerid = setInterval("timerc()",1000); 
		
});
function timerc()
{
	t=t-1;
	$("#member_admin_return").text(t);
	if(t<=0)
	{	
		clearInterval(timerid);
		window.location.href='<{$rootpath}>/<{$index_page}>';
		$("#update_id").click();
	}
}
</script>
<{include file="$smarty_root/footer.tpl" }>
