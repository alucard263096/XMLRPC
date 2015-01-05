<?php /* Smarty version 2.6.26, created on 2010-11-05 06:16:05
         compiled from E:/Apache2.2/htdocs/ta_portal_dev/templates/member/choose_seat_login.tpl */ ?>
<style>
	.waterEffect{color:#CCCCCC}
	.noWaterEffect{color:#000000}
	.tableCss {height:30px}
	.hidden1 {
		display:none;
	}
	.show1 {
		display:"";
	}
</style>
<div style="background-color:#FFFFFF">
<table width="820" border="0" align="center" cellpadding="0" cellspacing="5" bgcolor="#a3a3a3">
  <tr>
    <td align="right" valign="top" bgcolor="#FFFFFF"><table width="810" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="30">&nbsp;</td>
        <td width="50" height="50" align="right"><a href="#"><img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/movie/pop_close.gif" width="27" height="27" border="0" id="pop_close"></a></td>
        <td width="15"><img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/movie/spacer.gif" width="15" height="1"></td>
      </tr>
    </table>
      <table width="810" border="0" cellspacing="25" cellpadding="0">

      <tr>
        <td width="300" align="center" valign="top"><table width="300" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="75" height="35" valign="top"><img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/<?php echo $this->_tpl_vars['lang']; ?>
/movie/pop_login_chi.gif" width="52" height="26"></td>
            <td valign="top"><img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/<?php echo $this->_tpl_vars['lang']; ?>
/movie/pop_login_eng.gif" width="52" height="26"></td>
          </tr>
          <tr>
            <td height="40" class="text14"><?php echo $this->_tpl_vars['LANG']['choose_seat']['user_name']; ?>
：</td>
            <td style="background-color:#FFFFFF"><label>
            <input name="text" type="text" id="login_name"  style="background-color:#FFFFFF" class=" loginform" onblur="lostFocus()"  onfocus="getFocus()"  value="<?php echo $this->_tpl_vars['LANG']['choose_seat']['user_name_default']; ?>
"/>
            </label></td>
          </tr>
          <tr>
            <td height="40" class="text14"><?php echo $this->_tpl_vars['LANG']['choose_seat']['password']; ?>
：</td>
            <td><label><input name="password" type="password" id="login_pswd"  class="loginform"/></label></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><table width="150" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="20"><label>
                  <input type="checkbox" name="checkbox" id="checkbox">
                </label></td>
                <td height="25"><?php echo $this->_tpl_vars['LANG']['choose_seat']['save_login_name']; ?>
</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td height="25"><a href="#" class="blklink"><?php echo $this->_tpl_vars['LANG']['choose_seat']['forgot_password']; ?>
？</a></td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
		  <tr>
			<td align="center" colspan="2">
				<div id="loginErrorMessage">
				</div>
				<input id="login" type="button" class="button300"/>
			</td>
    	  </tr>
		  <tr>
			<td align="center" colspan="2">
				<br/>
				<span id="nologin"><a href="#"><?php echo $this->_tpl_vars['LANG']['choose_seat']['nonmember']; ?>
</a></span>
				<!--<input id="nologin" type="button" value="<?php echo $this->_tpl_vars['LANG']['choose_seat']['nonmember']; ?>
" />//-->
			</td>
		  </tr>
          <tr>
            <td>&nbsp;</td>
            <td height="60">&nbsp;</td>
          </tr>
        </table>
          <img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/<?php echo $this->_tpl_vars['lang']; ?>
/movie/pop_login_photo.jpg" width="223" height="213"></td>
        <td width="1" bgcolor="#a3a3a3"><img src="images/spacer.gif" width="1" height="1"></td>
        <td width="409" valign="top"><table width="409" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="75" height="35" valign="top"><img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/<?php echo $this->_tpl_vars['lang']; ?>
/movie/pop_reg_chi.gif"></td>
            <td width="320" valign="top"><img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/<?php echo $this->_tpl_vars['lang']; ?>
/movie/pop_reg_eng.gif"></td>
            <td valign="top">&nbsp;</td>
          </tr>
		  <tr>
			<td height="40" class="text14"><?php echo $this->_tpl_vars['LANG']['choose_seat']['user_name']; ?>
:</td>
			<td><input id="reg_name" type="text" class="loginform300" /></td>
			<td><span class="textbold"><img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/movie/login_highlight.gif" width="14" height="14" align="absmiddle"></span></td>
    	  </tr>
          <tr>
            <td height="40" class="text14"><?php echo $this->_tpl_vars['LANG']['choose_seat']['password']; ?>
:</td>
            <td><label><input name="password2" type="password" id="reg_pswd"  class="loginform300"/></label></td>
            <td><span class="textbold"><img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/movie/login_highlight.gif" width="14" height="14" align="absmiddle"></span></td>
          </tr>
          <tr>
            <td height="20">&nbsp;</td>
            <td valign="top"><?php echo $this->_tpl_vars['LANG']['choose_seat']['password_remark']; ?>
</td>
            <td valign="top">&nbsp;</td>
          </tr>
          <tr>
            <td height="40" class="text14"><?php echo $this->_tpl_vars['LANG']['choose_seat']['confirm_password']; ?>
:</td>
            <td><label><input name="password32" type="password" id="reg_pswd_2"  class="loginform300"/></label></td>
            <td><span class="textbold"><img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/movie/login_highlight.gif" width="14" height="14" align="absmiddle"></span></td>
          </tr>
          <tr>
            <td height="40" class="text14"><?php echo $this->_tpl_vars['LANG']['choose_seat']['email']; ?>
:</td>
            <td>
	            <label>
	            	<input name="text2" type="text" id="reg_email"  class="loginform300"/>
	            </label>
            </td>
            <td><span class="textbold"><img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/movie/login_highlight.gif" width="14" height="14" align="absmiddle"></span></td>
          </tr>
          <tr>
            <td height="20">&nbsp;</td>
            <td valign="top"><?php echo $this->_tpl_vars['LANG']['choose_seat']['email_remark']; ?>
</td>
            <td valign="top">&nbsp;</td>
          </tr>
          <tr>
            <td height="40" class="text14"><?php echo $this->_tpl_vars['LANG']['choose_seat']['nickname']; ?>
:</td>
            <td><label><input name="text3" type="text" id="nick_name"  class="loginform300"/></label></td>
            <td><span class="textbold"><img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/movie/login_highlight.gif" width="14" height="14" align="absmiddle"></span></td>
          </tr>
          <tr>
            <td height="40" class="text14"><?php echo $this->_tpl_vars['LANG']['choose_seat']['city']; ?>
:</td>
            <td>
				<select id='city' class='city'>
					<option value='-1'>--<?php echo $this->_tpl_vars['LANG']['delivery_client']['choice']; ?>
--</option>
					<?php $_from = $this->_tpl_vars['city']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['det']):
?>
						<?php $_from = $this->_tpl_vars['det']['details']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['rs']):
?>
							<option value='<?php echo $this->_tpl_vars['rs']['id']; ?>
'><?php echo $this->_tpl_vars['rs']['long_name']; ?>
</option>
						<?php endforeach; endif; unset($_from); ?>
					<?php endforeach; endif; unset($_from); ?>
				</select>
				<select id='district_-1'  class='district show1'>
					<option value='-1'>--<?php echo $this->_tpl_vars['LANG']['delivery_client']['choice']; ?>
--</option>
				</select>
				<?php $_from = $this->_tpl_vars['district']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['det']):
?>
					<select id='district_<?php echo $this->_tpl_vars['det']['city_id']; ?>
'  class='district hidden1'>
						<option value='-1'>--<?php echo $this->_tpl_vars['LANG']['delivery_client']['choice']; ?>
--</option>
						<?php $_from = $this->_tpl_vars['det']['details']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['rs']):
?>
							<option value='<?php echo $this->_tpl_vars['rs']['id']; ?>
'><?php echo $this->_tpl_vars['rs']['long_name']; ?>
</option>
						<?php endforeach; endif; unset($_from); ?>
					</select>
				<?php endforeach; endif; unset($_from); ?>
			</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td height="40" class="text14"><?php echo $this->_tpl_vars['LANG']['choose_seat']['mobile_phone']; ?>
:</td>
            <td>
        		<input type="text" id="mobile_country_code" class="loginform30"/>-
        		<input type="text" id="mobile_no" class="loginform270" />
            </td>
            <td><span class="textbold"><img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/movie/login_highlight.gif" width="14" height="14" align="absmiddle"></span></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><table width="320" border="0" cellspacing="0" cellpadding="0">
                <!--<tr>
                  <td width="20" valign="top"><label>
                    <input type="checkbox" name="checkbox2" id="checkbox2">
                  </label></td>
                  <td height="25"><?php echo $this->_tpl_vars['LANG']['choose_seat']['description']; ?>
</td>
                </tr>//-->
                <tr>
                  <td><input type="checkbox" name="checkbox3" id="checkbox3"></td>
				  <td height="25"><?php echo $this->_tpl_vars['LANG']['choose_seat']['accept']; ?>
	<a href="#" class="purplelink"><?php echo $this->_tpl_vars['LANG']['choose_seat']['service_agreement']; ?>
</a> <?php echo $this->_tpl_vars['LANG']['choose_seat']['and']; ?>
 <a href="#" class="purplelink"><?php echo $this->_tpl_vars['LANG']['choose_seat']['Privacy_statement']; ?>
</a>。</td>
                </tr>
            </table></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td height="50">
				<input id="register" type="button"/>    
				<div id="registerErrorMessage">&nbsp;</div>        
			</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>

        </table>
          <table width="409" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td class="textbold"><?php echo $this->_tpl_vars['LANG']['choose_seat']['Above_with']; ?>
"<img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/movie/login_highlight.gif" width="14" height="14" align="absmiddle">"<?php echo $this->_tpl_vars['LANG']['choose_seat']['required_fields']; ?>
<?php echo $this->_tpl_vars['LANG']['choose_seat']['remark']; ?>
</td>
            </tr>
          </table></td>
      </tr>
    </table></td>
  </tr>
</table>
</div>
<script type="text/javascript">	
	var accountTip="<?php echo $this->_tpl_vars['LANG']['choose_seat']['user_name_default']; ?>
";
	$(document).ready(function(){
		$("#register").css({"background":"url(<?php echo $this->_tpl_vars['rootpath']; ?>
/images/<?php echo $this->_tpl_vars['lang']; ?>
/button_submit_registry_msg.gif) no-repeat","width": "134px","height": "50px","border": "0px","cursor":"pointer"});
		$("#login_name").addClass('waterEffect');
		$('#registerErrorMessage').hide().css("color","red");
		$('#loginErrorMessage').hide();
		$('#login').click(function() {
			$('#loginErrorMessage').text("");
			if($('#login_name').val()==null || $('#login_name').val()==''){
				$('#loginErrorMessage').show();
				$('#loginErrorMessage').append('<?php echo $this->_tpl_vars['LANG']['choose_seat']['login_num_prompt']; ?>
');			
			}else if($('#login_pswd').val()==null || $('#login_pswd').val()==''){
				$('#loginErrorMessage').show();
				$('#loginErrorMessage').append('<?php echo $this->_tpl_vars['LANG']['choose_seat']['login_pwd_prompt']; ?>
');	
			}else{		
				$(".value_gray").attr({disabled:true});
				$.post("<?php echo $this->_tpl_vars['rootpath']; ?>
/member/choose_seat_login.php", {action:"login",login_name:$('#login_name').val(),password:$('#login_pswd').val(),saveUser:$("#checkbox").attr("checked")}, function(message) {
					if (parseInt(message.substring(0,1)) == parseInt(0)) {		
						$('#loginErrorMessage').hide();
						$('#javascripts').load("choose_seat.php", {action:"loadJs"},function(){$("#submit_seat").click();});
						popup.close();
						$("#submit_seat").click();	
					}else{
						errorMessage = message.substring(2);
						$('#loginErrorMessage').show();						
						$('#loginErrorMessage').text("");
						$('#loginErrorMessage').append(errorMessage);
					} 				
				});
			}
		});
		$("#city").change(function(){
			var city_id= $(this).val();
			$(".district").removeClass("show1").addClass("hidden1");
			$("#district_"+city_id).removeClass("hidden1").addClass("show1").val(-1);
			
			//auto input mobile_country_code
			if(city_id != -1){
				<?php $_from = $this->_tpl_vars['city']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['rs']):
?>
					<?php $_from = $this->_tpl_vars['rs']['details']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['det']):
?>
						if(<?php echo $this->_tpl_vars['det']['id']; ?>
==$("#city").find("option:selected").val()){	
							if('<?php echo $this->_tpl_vars['det']['country_id']; ?>
' == '1'){
								$("#mobile_country_code").val('86');
							}else if('<?php echo $this->_tpl_vars['det']['country_id']; ?>
' == '2'){
								$("#mobile_country_code").val('852');
							}else if('<?php echo $this->_tpl_vars['det']['country_id']; ?>
' == '3'){
								$("#mobile_country_code").val('853');
							}			
						}
					<?php endforeach; endif; unset($_from); ?>
				<?php endforeach; endif; unset($_from); ?>
			}
		});
	
		$('#nologin').click(function() {
			$(".value_gray").attr({disabled:true});
			$.post("<?php echo $this->_tpl_vars['rootpath']; ?>
/member/choose_seat_login.php", {action:"loginAsNonMember",nonmember:'Y'}, function() {	
				$('#javascripts').load("choose_seat.php", {action:"loadJs"},function(){
					$("#submit_seat").click();	
				});
				popup.close();
			});			
		});
	});

	$('#register').click(function() {
		$('#registerErrorMessage').text("");
		var emailRegExp = new RegExp("[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?");
		var pwdRegExp = /^([a-zA-Z0-9]){6,}$/;
		if($('#reg_name').val()==null || $('#reg_name').val()==''){
			$('#registerErrorMessage').show();
			$('#registerErrorMessage').append('<?php echo $this->_tpl_vars['LANG']['choose_seat']['login_num_prompt']; ?>
');			
		}else if($('#reg_pswd').val()==null || $('#reg_pswd').val()==''){
			$('#registerErrorMessage').show();
			$('#registerErrorMessage').append('<?php echo $this->_tpl_vars['LANG']['choose_seat']['login_pwd_prompt']; ?>
');			
		}else if(!pwdRegExp.test($.trim($('#reg_pswd').val()))){
			$('#registerErrorMessage').show();
			$('#registerErrorMessage').append('<?php echo $this->_tpl_vars['LANG']['choose_seat']['pwd_len_prompt']; ?>
');
		}else if($('#reg_pswd_2').val()==null || $('#reg_pswd_2').val()==''){
			$('#registerErrorMessage').show();
			$('#registerErrorMessage').append('<?php echo $this->_tpl_vars['LANG']['choose_seat']['confirm_pwd_prompt']; ?>
');		
		}else if($('#reg_pswd').val()!=$('#reg_pswd_2').val()){
			$('#registerErrorMessage').show();
			$('#registerErrorMessage').append('<?php echo $this->_tpl_vars['LANG']['choose_seat']['twice_pwd_prompt']; ?>
');			
		}else if($('#reg_email').val()==null || $('#reg_email').val()==''){
			$('#registerErrorMessage').show();
			$('#registerErrorMessage').append('<?php echo $this->_tpl_vars['LANG']['choose_seat']['email_prompt']; ?>
');		
		}else if (!emailRegExp.test($('#reg_email').val())||$('#reg_email').val().indexOf('.')==-1){
			$('#registerErrorMessage').show();
			$('#registerErrorMessage').append('<?php echo $this->_tpl_vars['LANG']['choose_seat']['wrong_email']; ?>
');	
		}else if($('#nick_name').val()==null || $('#nick_name').val()==''){
			$('#registerErrorMessage').show();
			$('#registerErrorMessage').append('<?php echo $this->_tpl_vars['LANG']['choose_seat']['nickname_prompt']; ?>
');		
		}else if($('#mobile_country_code').val()==null || $('#mobile_country_code').val()==''){
			$('#registerErrorMessage').show();
			$('#registerErrorMessage').append('<?php echo $this->_tpl_vars['LANG']['choose_seat']['mobile_country_code_prompt']; ?>
');		
		}else if($('#mobile_no').val()==null || $('#mobile_no').val()==''){
			$('#registerErrorMessage').show();
			$('#registerErrorMessage').append('<?php echo $this->_tpl_vars['LANG']['choose_seat']['mobile_phone_prompt']; ?>
');	
		}else if(isNaN($('#mobile_no').val())){
			$('#registerErrorMessage').show();
			$('#registerErrorMessage').append('<?php echo $this->_tpl_vars['LANG']['choose_seat']['wrong_mobile_phone']; ?>
');
		}else if(!$("#checkbox3").attr("checked")){
			$('#registerErrorMessage').show();
			$('#registerErrorMessage').append('<?php echo $this->_tpl_vars['LANG']['choose_seat']['server_declaration']; ?>
');
		}else{
			$(".value_gray").attr({disabled:true});
			$.post("<?php echo $this->_tpl_vars['rootpath']; ?>
/member/choose_seat_login.php", {action:"register",login_name:$('#reg_name').val(),password:$('#reg_pswd').val(),email:$('#reg_email').val(),nick_name:$('#nick_name').val(),mobile_no:$('#mobile_no').val(),mobile_country_code:$('#mobile_country_code').val(),district_id:$("#district_"+$("#city").val()).val()}, function(message) {	
				errorMessage = "<?php echo $this->_tpl_vars['LANG']['register']['register_prompt']; ?>
";
				msg_arr = message.split(':');
				if (parseInt(msg_arr[0]) == parseInt(0)) {					
					$('#registerErrorMessage').hide();
					$('#javascripts').load("choose_seat.php", {action:"loadJs"},function(){$("#submit_seat").click();});
					popup.close();	
				}else{
					if(msg_arr[1] == "member_already_exists")
						errorMessage += "<?php echo $this->_tpl_vars['LANG']['register']['login_name_exist']; ?>
";
					else
						errorMessage += "<?php echo $this->_tpl_vars['LANG']['register']['register_fail_prompt']; ?>
";
					$('#registerErrorMessage').show();
					$('#registerErrorMessage').text("");
					$('#registerErrorMessage').append(errorMessage);
				} 				
			});
		}
	});
	
	$('#pop_close').click(function() {
				popup.close();		
	});
	
	function lostFocus()
	{
	   var loginName=$('#login_name').val();
	   if(loginName=="")
	   {
		 $("#login_name").addClass('waterEffect');
		 $("#login_name").val(accountTip);
	    }
	}   
   
   	function getFocus()
   	{
   	   $("#login_name").removeClass('waterEffect');
	   if( $('#login_name').val()==accountTip)
	   	$('#login_name').val("");
  	}
</script>