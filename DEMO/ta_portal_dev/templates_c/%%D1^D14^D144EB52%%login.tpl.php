<?php /* Smarty version 2.6.26, created on 2010-11-11 08:10:24
         compiled from E:/Apache2.2/htdocs/ta_portal_dev/templates/member/login.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['smarty_root'])."/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<table width="960" border="0" align="center" cellpadding="0" cellspacing="0">
	<tr>
		<td height="30" valign="bottom" background="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/line_movie_bg.gif">
			<img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/<?php echo $this->_tpl_vars['lang']; ?>
/login_font.jpg" height="30">
		</td>
	</tr>
	<tr>
		<td><img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/spacer.gif"  height="10"></td>
	</tr>
</table>
<table width="960" border="0" align="center" cellpadding="0" cellspacing="0"  background="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/login_BG.jpg">
	<tr>
		<td width="960" align="center" valign="top">
			<table width="960" border="0" cellspacing="0" cellpadding="0">
				<tr>
					<td colspan="3">
						<img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/spacer.gif"  height="50">
					</td>
				</tr>
				<tr>
					<td><img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/spacer.gif"  width="30"></td>
	            	<td width="80" height="50" class="text18_black"><?php echo $this->_tpl_vars['LANG']['login']['user_name']; ?>
:</td>
	            	<td width="200">
	            		<input name="text" type="text" id="login_name" class="loginforminput4" value="<?php echo $this->_tpl_vars['LANG']['choose_seat']['user_name_default']; ?>
"/>
	            	</td>
	            	<td>&nbsp;</td>
				</tr>
				<tr>
					<td height="70">&nbsp;</td>
					<td class="text18_black"><?php echo $this->_tpl_vars['LANG']['login']['password']; ?>
:</td>
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
	                			<td height="25"><?php echo $this->_tpl_vars['LANG']['login']['save_login_name']; ?>
</td>
	              			</tr>
	              			<tr>
	                			<td>&nbsp;</td>
	                			<td height="25"><a href="#" class="blklink"><?php echo $this->_tpl_vars['LANG']['login']['forgot_password']; ?>
</a></td>
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
	var default_name = '<?php echo $this->_tpl_vars['LANG']['choose_seat']['user_name_default']; ?>
';
	$(document).ready(function(){
		$("#login").css({"background":"url(<?php echo $this->_tpl_vars['rootpath']; ?>
/images/<?php echo $this->_tpl_vars['lang']; ?>
/button_login.gif) no-repeat","width": "134px","height": "50px","border": "0px","cursor":"pointer"});
		$('#login').click(function() {
			$('#loginErrorMessage').text("");
			if($($('#login_name').val()=='' || '#login_name').val()==default_name){
				$('#loginErrorMessage').show();
				$('#loginErrorMessage').append('<?php echo $this->_tpl_vars['LANG']['login']['login_name_prompt']; ?>
');
			} else if($('#login_pswd').val()=='') {
				$('#loginErrorMessage').show();
				$('#loginErrorMessage').append('<?php echo $this->_tpl_vars['LANG']['login']['password_prompt']; ?>
');
			} else {
				$(".value_gray").attr({disabled:true});
				$.post("<?php echo $this->_tpl_vars['rootpath']; ?>
/member/login.php", {action:"login",login_name:$('#login_name').val(),password:$('#login_pswd').val(),saveUser:$("#checkbox").attr("checked")}, function(message) {
					if (parseInt(message.substring(0,1)) == parseInt(0)) {					
						$('#loginErrorMessage').hide();
						window.location.href = '<?php echo $this->_tpl_vars['url']; ?>
';
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

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['smarty_root'])."/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>