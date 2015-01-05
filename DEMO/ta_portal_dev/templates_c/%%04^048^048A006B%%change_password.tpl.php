<?php /* Smarty version 2.6.26, created on 2010-11-11 08:26:04
         compiled from E:/Apache2.2/htdocs/ta_portal_dev/templates/member/change_password.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['smarty_root'])."/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['rootpath']; ?>
/js/common.js"></script>
<table width="960" border="0" align="center" cellpadding="0" cellspacing="0">
	<tr>
		<td width="110"  height="30"><img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/<?php echo $this->_tpl_vars['lang']; ?>
/change_pwd_font.jpg" width="110" height="30"></td>
		<td><img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/login_line.jpg" width="850" height="30"></td>
	</tr>
	<tr>
		<td><img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/spacer.gif"  height="10"></td>
	</tr>
</table>
<table width="960" border="0" cellpadding="0" cellspacing="0" align="center" background="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/login_BG.jpg">
	<tr>
		<td align="center" valign="top">
			<form id="pswdForm" method="post" action="change_password.php" >
				<table border="0" cellspacing="0" cellpadding="0">
					<tr>
						<td colspan="3">
							<img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/spacer.gif" height="20">
						</td>
					</tr>
					<tr>
		            	<td height="40" class="text18_black"><?php echo $this->_tpl_vars['LANG']['password']['old_password']; ?>
:</td>
		            	<td>
		            		<input type="password" id="old_password" name="old_password" class="loginforminput"/>
		            	</td>
		            	<td width="150" style="padding: 0px 5px;"><div id="old_password_msg" style="color:red"></div></td>
					</tr>
					<tr>
						<td height="40" class="text18_black"><?php echo $this->_tpl_vars['LANG']['password']['new_password']; ?>
:</td>
						<td><input type="password" id="new_password" name="new_password" class="loginforminput" onKeyUp="pwStrength(this.value)" onBlur="pwStrength(this.value)"/></td>
						<td style="padding: 0px 5px;"><div id="new_password_msg" style="color:red"></div></td>
					</tr>
					<tr>
						<td></td>
						<td colspan="2">
							<table border="0" cellspacing="0" cellpadding="0" bordercolor="#cccccc"> 
							<tr align="center" >
								<td>
									<span>&nbsp;&nbsp;<?php echo $this->_tpl_vars['LANG']['register']['cryptographic_strength']; ?>
 :&nbsp;&nbsp;</span>
							    </td>
								<td bgcolor="#eeeeee" id="strength_L" style="border-right-style: solid;border-right-width: 1px;font-size:12px;width:60px;"><?php echo $this->_tpl_vars['LANG']['register']['weak']; ?>
</td>    
								<td bgcolor="#eeeeee" id="strength_M" style="border-right-style: solid;border-right-width: 1px;font-size:12px;width:60px;"><?php echo $this->_tpl_vars['LANG']['register']['fine']; ?>
</td>    
								<td bgcolor="#eeeeee" id="strength_H" style="font-size:12px;width:60px;"><?php echo $this->_tpl_vars['LANG']['register']['strong']; ?>
</td> 
							</tr> 
						</table>
						</td>
					</tr>
					<tr>
						<td height="40" class="text18_black"><?php echo $this->_tpl_vars['LANG']['password']['confirm_password']; ?>
:</td>
						<td><input type="password" id="confirm_password" name="confirm_password" class="loginforminput"/></td>
						<td style="padding: 0px 5px;"><div id="confirm_password_msg" style="color:red"></div></td>
					</tr>
		          	<tr>
		            	<td>&nbsp;</td>
		            	<td colspan="2"><img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/spacer.gif" height="30"></td>
		          	</tr>
				  	<tr>
						<td align="right" colspan="2">
		    				<input id="change" type="button" class="value_gray" />
		    				<input type="hidden" name="action" value="changePassword" />
		    			</td>
		    			<td></td>
		    		</tr>
		          	<tr><td colspan="3" align="center">
		          	<div id="errorMessage" style="color:red"><?php echo $this->_tpl_vars['result_status']; ?>
<?php echo $this->_tpl_vars['result_msg']; ?>
</div>
		          	</td></tr>
				</table>
			</form>
		</td>
	</tr>
</table>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['smarty_root'])."/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<script type="text/javascript">	
	$(document).ready(function(){
		$("#change").css({"background":"url(<?php echo $this->_tpl_vars['rootpath']; ?>
/images/<?php echo $this->_tpl_vars['lang']; ?>
/button_ok.gif) no-repeat","width": "134px","height": "50px","border": "0px","cursor":"pointer"});
		$("#old_password").val("");
		$('#change').click(function() {
			clearMsg();
			if($.trim($('#old_password').val())==''){
				$('#old_password_msg').show();
				$('#old_password_msg').append('<?php echo $this->_tpl_vars['LANG']['password']['old_pwd_null']; ?>
');			
			} else if($.trim($('#new_password').val())=='') {
				$('#new_password_msg').show();
				$('#new_password_msg').append('<?php echo $this->_tpl_vars['LANG']['password']['new_pwd_null']; ?>
');	
			} else if($.trim($('#new_password').val()).length < 8){
				$('#new_password_msg').show();
				$('#new_password_msg').append('<?php echo $this->_tpl_vars['LANG']['register']['password_len_prompt']; ?>
');
			}else if($.trim($('#new_password').val()).search("<?php echo $_SESSION['member']['login_name']; ?>
") > -1){ 
				$('#new_password_msg').show();
				$('#new_password_msg').append('<?php echo $this->_tpl_vars['LANG']['register']['password_name_prompt']; ?>
');
			}else if($.trim($('#confirm_password').val())=='') {
				$('#confirm_password_msg').show();
				$('#confirm_password_msg').append('<?php echo $this->_tpl_vars['LANG']['password']['sec_pwd_null']; ?>
');	
			} else if($.trim($('#confirm_password').val())!=$.trim($('#new_password').val())) {
				$('#confirm_password_msg').show();
				$('#confirm_password_msg').append('<?php echo $this->_tpl_vars['LANG']['password']['pwd_diff']; ?>
');	
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