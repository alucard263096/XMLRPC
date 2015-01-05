<{include file="$smarty_root/header.tpl" }>
<script type="text/javascript" src="<{$rootpath}>/js/common.js"></script>
<table width="960" border="0" align="center" cellpadding="0" cellspacing="0">
	<tr>
		<td width="110"  height="30"><img src="<{$rootpath}>/images/<{$lang}>/change_pwd_font.jpg" width="110" height="30"></td>
		<td><img src="<{$rootpath}>/images/login_line.jpg" width="850" height="30"></td>
	</tr>
	<tr>
		<td><img src="<{$rootpath}>/images/spacer.gif"  height="10"></td>
	</tr>
</table>
<table width="960" border="0" cellpadding="0" cellspacing="0" align="center" background="<{$rootpath}>/images/login_BG.jpg">
	<tr>
		<td align="center" valign="top">
			<form id="pswdForm" method="post" action="change_password.php" >
				<table border="0" cellspacing="0" cellpadding="0">
					<tr>
						<td colspan="3">
							<img src="<{$rootpath}>/images/spacer.gif" height="20">
						</td>
					</tr>
					<tr>
		            	<td height="40" class="text18_black"><{$LANG.password.old_password}>:</td>
		            	<td>
		            		<input type="password" id="old_password" name="old_password" class="loginforminput"/>
		            	</td>
		            	<td width="150" style="padding: 0px 5px;"><div id="old_password_msg" style="color:red"></div></td>
					</tr>
					<tr>
						<td height="40" class="text18_black"><{$LANG.password.new_password}>:</td>
						<td><input type="password" id="new_password" name="new_password" class="loginforminput" onKeyUp="pwStrength(this.value)" onBlur="pwStrength(this.value)"/></td>
						<td style="padding: 0px 5px;"><div id="new_password_msg" style="color:red"></div></td>
					</tr>
					<tr>
						<td></td>
						<td colspan="2">
							<table border="0" cellspacing="0" cellpadding="0" bordercolor="#cccccc"> 
							<tr align="center" >
								<td>
									<span>&nbsp;&nbsp;<{$LANG.register.cryptographic_strength}> :&nbsp;&nbsp;</span>
							    </td>
								<td bgcolor="#eeeeee" id="strength_L" style="border-right-style: solid;border-right-width: 1px;font-size:12px;width:60px;"><{$LANG.register.weak}></td>    
								<td bgcolor="#eeeeee" id="strength_M" style="border-right-style: solid;border-right-width: 1px;font-size:12px;width:60px;"><{$LANG.register.fine}></td>    
								<td bgcolor="#eeeeee" id="strength_H" style="font-size:12px;width:60px;"><{$LANG.register.strong}></td> 
							</tr> 
						</table>
						</td>
					</tr>
					<tr>
						<td height="40" class="text18_black"><{$LANG.password.confirm_password}>:</td>
						<td><input type="password" id="confirm_password" name="confirm_password" class="loginforminput"/></td>
						<td style="padding: 0px 5px;"><div id="confirm_password_msg" style="color:red"></div></td>
					</tr>
		          	<tr>
		            	<td>&nbsp;</td>
		            	<td colspan="2"><img src="<{$rootpath}>/images/spacer.gif" height="30"></td>
		          	</tr>
				  	<tr>
						<td align="right" colspan="2">
		    				<input id="change" type="button" class="value_gray" />
		    				<input type="hidden" name="action" value="changePassword" />
		    			</td>
		    			<td></td>
		    		</tr>
		          	<tr><td colspan="3" align="center">
		          	<div id="errorMessage" style="color:red"><{$result_status}><{$result_msg}></div>
		          	</td></tr>
				</table>
			</form>
		</td>
	</tr>
</table>
<{include file="$smarty_root/footer.tpl" }>

<script type="text/javascript">	
	$(document).ready(function(){
		$("#change").css({"background":"url(<{$rootpath}>/images/<{$lang}>/button_ok.gif) no-repeat","width": "134px","height": "50px","border": "0px","cursor":"pointer"});
		$("#old_password").val("");
		$('#change').click(function() {
			clearMsg();
			if($.trim($('#old_password').val())==''){
				$('#old_password_msg').show();
				$('#old_password_msg').append('<{$LANG.password.old_pwd_null}>');			
			} else if($.trim($('#new_password').val())=='') {
				$('#new_password_msg').show();
				$('#new_password_msg').append('<{$LANG.password.new_pwd_null}>');	
			} else if($.trim($('#new_password').val()).length < 8){
				$('#new_password_msg').show();
				$('#new_password_msg').append('<{$LANG.register.password_len_prompt}>');
			}else if($.trim($('#new_password').val()).search("<{$smarty.session.member.login_name}>") > -1){ 
				$('#new_password_msg').show();
				$('#new_password_msg').append('<{$LANG.register.password_name_prompt}>');
			}else if($.trim($('#confirm_password').val())=='') {
				$('#confirm_password_msg').show();
				$('#confirm_password_msg').append('<{$LANG.password.sec_pwd_null}>');	
			} else if($.trim($('#confirm_password').val())!=$.trim($('#new_password').val())) {
				$('#confirm_password_msg').show();
				$('#confirm_password_msg').append('<{$LANG.password.pwd_diff}>');	
			} else {
				$(".value_gray").attr({disabled:true});
				$('#pswdForm').submit();
			}
		});
	});
	
	function clearMsg() {
		$('#errorMessage').text("");
		$('#old_password_msg').text("");
		$('#new_password_msg').text("");
		$('#confirm_password_msg').text("");
	}
</script>