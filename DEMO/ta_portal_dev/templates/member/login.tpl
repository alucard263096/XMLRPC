<{include file="$smarty_root/header.tpl" }>
<table width="960" border="0" align="center" cellpadding="0" cellspacing="0">
	<tr>
		<td height="30" valign="bottom" background="<{$rootpath}>/images/line_movie_bg.gif">
			<img src="<{$rootpath}>/images/<{$lang}>/login_font.jpg" height="30">
		</td>
	</tr>
	<tr>
		<td><img src="<{$rootpath}>/images/spacer.gif"  height="10"></td>
	</tr>
</table>
<table width="960" border="0" align="center" cellpadding="0" cellspacing="0"  background="<{$rootpath}>/images/login_BG.jpg">
	<tr>
		<td width="960" align="center" valign="top">
			<table width="960" border="0" cellspacing="0" cellpadding="0">
				<tr>
					<td colspan="3">
						<img src="<{$rootpath}>/images/spacer.gif"  height="50">
					</td>
				</tr>
				<tr>
					<td><img src="<{$rootpath}>/images/spacer.gif"  width="30"></td>
	            	<td width="80" height="50" class="text18_black"><{$LANG.login.user_name}>:</td>
	            	<td width="200">
	            		<input name="text" type="text" id="login_name" class="loginforminput4" value="<{$LANG.choose_seat.user_name_default}>"/>
	            	</td>
	            	<td>&nbsp;</td>
				</tr>
				<tr>
					<td height="70">&nbsp;</td>
					<td class="text18_black"><{$LANG.login.password}>:</td>
					<td width="200">
						<input name="password" type="password" id="login_pswd"  class="loginforminput3"/>
					</td>
					<td valign="top">
	    				&nbsp;&nbsp;&nbsp;<input id="login" type="button" class="login_button"/>
	    			</td>
				</tr>
				<tr>
					<td colspan="2" height="60">&nbsp;</td>
					<td colspan="2" valign="bottom">
						<table width="150" border="0" cellspacing="0" cellpadding="0">
							<tr>
								<td width="20">
									<input type="checkbox" name="checkbox" id="checkbox">
	                			</td>
	                			<td height="25"><{$LANG.login.save_login_name}></td>
	              			</tr>
	              			<tr>
	                			<td>&nbsp;</td>
	                			<td height="25"><a href="#" class="blklink"><{$LANG.login.forgot_password}></a></td>
	              			</tr>
	            		</table>
					</td>
				</tr>
	          	<tr>
	          		<td colspan="2">&nbsp;</td>
	          		<td height="30" colspan="2">&nbsp;</td>
	          	</tr>
			  	<tr>
			  		<td colspan="2">&nbsp;</td>
			  		<td colspan="2"><div id="loginErrorMessage" style="color:red"></div></td>
	    		</tr>
	          	
			</table>
		</td>
	</tr>
</table>

<script type="text/javascript">	
	var default_name = '<{$LANG.choose_seat.user_name_default}>';
	$(document).ready(function(){
		$("#login").css({"background":"url(<{$rootpath}>/images/<{$lang}>/button_login.gif) no-repeat","width": "134px","height": "50px","border": "0px","cursor":"pointer"});
		$('#login').click(function() {
			$('#loginErrorMessage').text("");
			if($($('#login_name').val()=='' || '#login_name').val()==default_name){
				$('#loginErrorMessage').show();
				$('#loginErrorMessage').append('<{$LANG.login.login_name_prompt}>');
			} else if($('#login_pswd').val()=='') {
				$('#loginErrorMessage').show();
				$('#loginErrorMessage').append('<{$LANG.login.password_prompt}>');
			} else {
				$(".value_gray").attr({disabled:true});
				$.post("<{$rootpath}>/member/login.php", {action:"login",login_name:$('#login_name').val(),password:$('#login_pswd').val(),saveUser:$("#checkbox").attr("checked")}, function(message) {
					if (parseInt(message.substring(0,1)) == parseInt(0)) {					
						$('#loginErrorMessage').hide();
						window.location.href = '<{$url}>';
					} else {
						errorMessage = message;
						$('#loginErrorMessage').show();
						$('#loginErrorMessage').text("");
						$('#loginErrorMessage').append(errorMessage);
						$(".value_gray").attr({disabled:false});
					}
				});
			}
		});
		
		$('#login_name').focus(function() {
			this.style.color='#000';
			if ($('#login_name').val()==default_name) {
				$('#login_name').val('');
			}
		});
		
		$('#login_name').blur(function() {
			if ($.trim($('#login_name').val())=='') {
				this.style.color='#999';
				$('#login_name').val(default_name);
			}
		});
	});
</script>

<{include file="$smarty_root/footer.tpl" }>
