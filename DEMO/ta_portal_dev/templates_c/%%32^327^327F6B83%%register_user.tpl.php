<?php /* Smarty version 2.6.26, created on 2010-11-11 08:27:49
         compiled from E:/Apache2.2/htdocs/ta_portal_dev/templates/member/register_user.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['smarty_root'])."/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['rootpath']; ?>
/js/common.js"></script>
<style>
	.tableCss {height:30px}
	.hidden1 {
		display:none;
	}
	.show1 {
		display:"";
	}
</style>
<table width="960" align="center" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td height="25" valign="bottom" background="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/line_movie_bg.gif">
			<img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/<?php echo $this->_tpl_vars['lang']; ?>
/new_login.jpg">
		</td>
	</tr>
	<tr>
		<td colspan="2"><img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/spacer.gif"  height="10"></td>
	</tr>
</table>
<table width="960" align="center" border="0" cellpadding="0" cellspacing="0"  background="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/sign_up_BG.jpg">
	<tr>
		<td>
			<table width="720" border="0" align="center" cellpadding="0" cellspacing="0">
				<tr>
					<td>
						<td colspan="3"><img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/spacer.gif" height="20"></td>
					</td>
				</tr>
				<tr>
					<td class="text16" width="5"><img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/movie/login_highlight.gif"></td>
					<td class="text16_1" width="120">
						<?php echo $this->_tpl_vars['LANG']['register']['login_name']; ?>
:
					</td>
					<td class="tableCss">
						<input type=text id="login_name" maxlength=30>&nbsp;&nbsp;<input type=button id=checkName></input>&nbsp;&nbsp;<span id="checkSpan0"  style='color:red'></span><span id="checkSpan1" style='display:none;'><img src='<?php echo $this->_tpl_vars['rootpath']; ?>
/images/loading.gif' width='20' height='20'/></span>
					</td>
				</tr>
				<tr>
					<td class="text16" width="5"><img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/movie/login_highlight.gif"></td>
					<td  class="text16_1">
						<?php echo $this->_tpl_vars['LANG']['register']['password1']; ?>
:
					</td>
					<td class="tableCss">
						<table border="0" cellspacing="0" cellpadding="0" bordercolor="#cccccc"> 
							<tr align="center" >
								<td>
									<input type=password  id="password1" maxlength=128 onKeyUp="pwStrength(this.value)" onBlur="pwStrength(this.value)">
								</td>
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
					<td class="text16" width="5"><img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/movie/login_highlight.gif"></td>
					<td class="text16_1">
						<?php echo $this->_tpl_vars['LANG']['register']['password2']; ?>
:
					</td>
					<td class="tableCss">
						<input type=password  id="password2" maxlength=128>&nbsp;&nbsp;<span id="checkSpan2" style='color:red'></span>
					</td>
				</tr>
				<tr>
					<td width="5"></td>
					<td class="text16_1">
						<?php echo $this->_tpl_vars['LANG']['register']['honorific']; ?>
:
					</td>
					<td>
					<select id="honorific">
						<?php $_from = $this->_tpl_vars['honorific_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['hl']):
?>							
							<option value="<?php echo $this->_tpl_vars['hl']['honorific_id']; ?>
"><?php echo $this->_tpl_vars['hl']['name']; ?>
</option>
						<?php endforeach; endif; unset($_from); ?>
					</select>
					</td>
				</tr>
				<tr>
					<td class="text16" width="5"><img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/movie/login_highlight.gif"></td>
					<td class="text16_1">
						</span><?php echo $this->_tpl_vars['LANG']['register']['last_name']; ?>
:
					</td>
					<td class="tableCss">
						<input type=text id="last_name" maxlength=32>&nbsp;&nbsp;<span id="checkSpan3" style='color:red'></span>
					</td>
				</tr>
				<tr>
					<td class="text16" width="5"><img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/movie/login_highlight.gif"></td>
					<td class="text16_1">
						<?php echo $this->_tpl_vars['LANG']['register']['first_name']; ?>
:
					</td>
					<td class="tableCss">
						<input type=text id="first_name" maxlength=32>&nbsp;&nbsp;<span id="checkSpan4" style='color:red'></span>
					</td>
				</tr>
				<tr>
					<td width="5"></td>
					<td class="text16_1">
						</span><?php echo $this->_tpl_vars['LANG']['register']['nickname']; ?>
:
					</td>
					<td class="tableCss">
						<input type=text id="nickname" maxlength=64>
					</td>
				</tr>
				<tr>
					<td width="5"></td>
					<td class="text16_1">
						</span><?php echo $this->_tpl_vars['LANG']['register']['gender']; ?>
:
					</td>
					<td class="tableCss">
						<select id="gender">
							<option value="M"><?php echo $this->_tpl_vars['LANG']['register']['male']; ?>
</option>
							<option value="F"><?php echo $this->_tpl_vars['LANG']['register']['female']; ?>
</option>
						</select>
					</td>
				</tr>
				<tr>
					<td width="5"></td>
					<td class="text16_1">
						<?php echo $this->_tpl_vars['LANG']['register']['birthday']; ?>
:
					</td>
					<td class="tableCss">
						<select id="birthday_year">
						</select><?php echo $this->_tpl_vars['LANG']['register']['year']; ?>

						<select id="birthday_month" style="width:45;">
						</select><?php echo $this->_tpl_vars['LANG']['register']['month']; ?>

						<select id="birthday_day" style="width:45;">
						</select><?php echo $this->_tpl_vars['LANG']['register']['day']; ?>

					</td>
				</tr>
				<tr>
					<td class="text16">
						<img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/movie/login_highlight.gif">
					</td>
					<td class="text16_1">
						<?php echo $this->_tpl_vars['LANG']['register']['district']; ?>
:
					</td>
					<td class="tableCss">
						<select id='country_id' class='country'>
							<option value='-1'>--<?php echo $this->_tpl_vars['LANG']['delivery_client']['choice']; ?>
--</option>
							<?php $_from = $this->_tpl_vars['country']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['rs']):
?>
							<option value='<?php echo $this->_tpl_vars['rs']['id']; ?>
'><?php echo $this->_tpl_vars['rs']['long_name']; ?>
</option>
							<?php endforeach; endif; unset($_from); ?>
						</select>
						<select id='city_-1' class='city show1'>
							<option value='-1'>--<?php echo $this->_tpl_vars['LANG']['delivery_client']['choice']; ?>
--</option>
						</select>
						<?php $_from = $this->_tpl_vars['city']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['det']):
?>
							<select id='city_<?php echo $this->_tpl_vars['det']['country_id']; ?>
' class='city hidden1'>
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
						&nbsp;&nbsp;<span id="checkSpan5" style='color:red'></span>
					</td>
				</tr>
				<tr>
					<td class="text16" width="5"><img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/movie/login_highlight.gif"></td>
					<td class="text16_1">
						<?php echo $this->_tpl_vars['LANG']['register']['mobile_no']; ?>
:
					</td>
					<td class="tableCss">
						<input type=text style="width:40px;background-color:#DDDDDD;" readonly id=mobile_country_code  maxlength=3>-<input type=text id=mobile_no  maxlength=16>&nbsp;&nbsp;<span id="checkSpan6" style='color:red'></span>
					</td>
				</tr>
				<tr>
					<td width="5"></td>
					<td class="text16_1">
						</span><?php echo $this->_tpl_vars['LANG']['register']['home_tel_no']; ?>
:
					</td>
					<td class="tableCss">
						<input type=text style="width:40px;background-color:#DDDDDD;" readonly id=home_country_code maxlength=3> <input type=text readonly style="width:40px;background-color:#DDDDDD;" id=home_area_code maxlength=3>-<input type=text id=home_no maxlength=16>&nbsp;&nbsp;<span id="checkSpan10" style='color:red'>
					</td>
				</tr>
				<tr>
					<td width="5"></td>
					<td class="text16_1">
						</span><?php echo $this->_tpl_vars['LANG']['register']['office_tel_no']; ?>
:
					</td>
					<td class="tableCss">
						<input type=text style="width:40px;background-color:#DDDDDD;" readonly id=office_country_code maxlength=3> <input type=text readonly style="width:40px;background-color:#DDDDDD;" id=office_area_code maxlength=3>-<input type=text id=office_no maxlength=16>&nbsp;&nbsp;<span id="checkSpan11" style='color:red'>
					</td>
				</tr>
				<tr>
					<td class="text16" width="5"><img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/movie/login_highlight.gif"></td>
					<td class="text16_1">
						<?php echo $this->_tpl_vars['LANG']['register']['email']; ?>
:
					</td>
					<td class="tableCss">
						<input type=text id="email"  maxlength=128>&nbsp;&nbsp;<span id="checkSpan7" style='color:red'></span>
					</td>
				</tr>
				<tr>
					<td width="5"></td>
					<td class="text16_1">
						</span><?php echo $this->_tpl_vars['LANG']['register']['address']; ?>
:
					</td>
					<td class="tableCss">
						<input type=text id="address" maxlength=512 style="width:300px;">
					</td>
				</tr>
				<tr>
					<td class="tableCss"　colspan="3">&nbsp;</td>
				</tr>
				<tr>
					<td colspan="2" class="text14_red"><?php echo $this->_tpl_vars['LANG']['login']['required1']; ?>
<img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/movie/login_highlight.gif"><?php echo $this->_tpl_vars['LANG']['login']['required2']; ?>
</td>
					<td>
						<img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/spacer.gif" width="162" height="1"/>
						<input type=button id="register">
						&nbsp;&nbsp;<span id="registerImg" class="text16" style='display:none;'><?php echo $this->_tpl_vars['LANG']['register']['register_msg']; ?>
<img src='<?php echo $this->_tpl_vars['rootpath']; ?>
/images/loading.gif' width='20' height='20'/></span>
					</td>
				</tr>
				<tr>
					<td>
						<td colspan="3"><img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/spacer.gif" height="20"></td>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>

<script type="text/javascript">	
	flag = true;
	$(document).ready(function() {
		$("#register").css({"background":"url(<?php echo $this->_tpl_vars['rootpath']; ?>
/images/<?php echo $this->_tpl_vars['lang']; ?>
/button_register.gif) no-repeat","width": "134px","height": "50px","border": "0px","cursor":"pointer"});
		$("#checkName").css({"background":"url(<?php echo $this->_tpl_vars['rootpath']; ?>
/images/<?php echo $this->_tpl_vars['lang']; ?>
/check_button.jpg) no-repeat","width": "91px","height": "22px","border": "0px","cursor":"pointer"});		
		$("#login_name").focus();
		var year = new Date().getFullYear();
		for(var i = 1900;i <= year;i++)
			$("#birthday_year").append("<option value='" + i + "'>" + i + "</option>");
		
		for(var j = 1;j <= 12;j++)
			$("#birthday_month").append("<option value='" + j + "'>" + j + "</option>");
		
		for(var k = 1;k <= 31;k++)
			$("#birthday_day").append("<option value='" + k + "'>" + k + "</option>");
		
		$("#country_id").change(function(){
			var country_id=$(this).val();
			$(".city").removeClass("show1").addClass("hidden1");
			$("#city_"+country_id).removeClass("hidden1").addClass("show1").val(-1);
			
			var city_id=$("#city_"+country_id).val();
			$(".district").removeClass("show1").addClass("hidden1");
			$("#district_"+city_id).removeClass("hidden1").addClass("show1");
			
			getAddress();
		 });
			
		 $(".city").change(function(){
			var city_id=$(this).val();
			$(".district").removeClass("show1").addClass("hidden1");
			$("#district_"+city_id).removeClass("hidden1").addClass("show1").val(-1);
			
			getAddress();
		 });
		 $(".district").change(function(){
			getAddress();
		 });	
	});
	function getAddress(){
		var country_id=$("#country_id").val();
		if(country_id != -1){
			<?php $_from = $this->_tpl_vars['country']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['rs']):
?>
					if(<?php echo $this->_tpl_vars['rs']['id']; ?>
==$("#country_id").find("option:selected").val()){
						$("#home_country_code").val(<?php echo $this->_tpl_vars['rs']['code']; ?>
);
						$("#office_country_code").val(<?php echo $this->_tpl_vars['rs']['code']; ?>
);
						$("#mobile_country_code").val(<?php echo $this->_tpl_vars['rs']['code']; ?>
);
						$("#home_area_code").val("");
						$("#office_area_code").val("");
					}
			<?php endforeach; endif; unset($_from); ?>
		}
		var city_id=$("#city_"+country_id).val();
		if(city_id != -1){
			<?php $_from = $this->_tpl_vars['city']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['det']):
?>
					<?php $_from = $this->_tpl_vars['det']['details']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['rs']):
?>
						if(<?php echo $this->_tpl_vars['rs']['id']; ?>
==$("#city_"+country_id).find("option:selected").val()){
							$("#home_area_code").val("<?php echo $this->_tpl_vars['rs']['code']; ?>
");
							$("#office_area_code").val("<?php echo $this->_tpl_vars['rs']['code']; ?>
");
						}						
					<?php endforeach; endif; unset($_from); ?>
			<?php endforeach; endif; unset($_from); ?>
		}
	}
	$("#login_name").blur(function(){
		var str = /^([a-zA-Z0-9._])+$/;
		if($.trim(this.value) != "" && this.value != null){
			flag = true;
			$("#checkSpan0").text("");
			if($.trim($("#password1").val()) != "" && $("#password1").val().search(this.value) > -1){
				$("#checkSpan2").text("<?php echo $this->_tpl_vars['LANG']['register']['password_name_prompt']; ?>
");
				$("#password1").focus();
				flag = false;
			}
			if($.trim($("#login_name").val()).length < 6 || $.trim($("#login_name").val()).length > 30){
				$("#checkSpan0").text("<?php echo $this->_tpl_vars['LANG']['register']['login_name_length']; ?>
");
				flag = false;
			}
			if(!str.test($.trim($("#login_name").val()))){
				$("#checkSpan0").text("<?php echo $this->_tpl_vars['LANG']['register']['login_name_format']; ?>
");
				flag = false;
			}
		}else{
			flag = false;
			$("#checkSpan0").text("<?php echo $this->_tpl_vars['LANG']['register']['login_name_empty']; ?>
");
		}
	});
	
	$("#checkName").click(function(){
		var str = /^([a-zA-Z0-9._])+$/;
		$("#checkSpan0").text("");
		$("#checkSpan1").show();
		if( str.test($.trim($("#login_name").val())) && $.trim($("#login_name").val()).length >=6 && $.trim($("#login_name").val()).length <= 30){
			$.post("register_user.php", {action:"checkLoginName",login_name:$("#login_name").val()}, function(data) {
				$("#checkSpan1").hide();
				if($.trim(data) == "Y"){
					flag = true;
					$("#checkSpan0").append("<img src='<?php echo $this->_tpl_vars['rootpath']; ?>
/images/red-tick.gif' />");
				}else{
					flag = false;
					$("#checkSpan0").text("<?php echo $this->_tpl_vars['LANG']['register']['login_name_exist']; ?>
");
					$("#login_name").focus();
				}
			});
		}else {
			flag = false;
			$("#checkSpan1").hide();
			if($.trim($("#login_name").val()).length == 0)
				$("#checkSpan0").text("<?php echo $this->_tpl_vars['LANG']['register']['login_name_empty']; ?>
");
			else if(!str.test($.trim($("#login_name").val()))){
				$("#checkSpan0").text("<?php echo $this->_tpl_vars['LANG']['register']['login_name_format']; ?>
");
			}
			else if($.trim($("#login_name").val()).length < 6 || $.trim($("#login_name").val()).length > 30){
				$("#checkSpan0").text("<?php echo $this->_tpl_vars['LANG']['register']['login_name_length']; ?>
");
			}
			$("#login_name").focus();
			}
	});
	
	$("#password1").blur(function(){
		$("#checkSpan2").text("");
		if($.trim($("#password1").val()) != "" && $.trim($("#password1").val()) != null){
			if(this.value.length < 8){
				$("#checkSpan2").text("<?php echo $this->_tpl_vars['LANG']['register']['password_len_prompt']; ?>
");
				$("#password1").focus();
				flag = false;
			}else if($.trim($("#login_name").val()) != "" && this.value.search($("#login_name").val()) > -1){
				$("#checkSpan2").text("<?php echo $this->_tpl_vars['LANG']['register']['password_name_prompt']; ?>
");
				$("#password1").focus();
				flag = false;
			}
		}else{
			flag = false;
			$("#checkSpan2").text("<?php echo $this->_tpl_vars['LANG']['register']['password_prompt']; ?>
");
		}
	});
	
	$("#password2").blur(function(){
		$("#checkSpan2").text("");
		if($.trim($("#password1").val()) != "" && $.trim($("#password2").val()) !="" && $("#password1").val() != null && $("#password2").val() !=null){
			if($.trim($("#password1").val()) != $.trim($("#password2").val())){
				flag = false;
				$("#checkSpan2").text("<?php echo $this->_tpl_vars['LANG']['register']['password_not_same']; ?>
");
			}
		}else{
			flag = false;
			$("#checkSpan2").text("<?php echo $this->_tpl_vars['LANG']['register']['password_integral']; ?>
");
		}
	});
	
	$("#last_name").blur(function(){
		if($.trim(this.value) != "" && this.value != null){
			$("#checkSpan3").text("");
			flag = true;
		}else{
			flag = false;
			$("#checkSpan3").text("<?php echo $this->_tpl_vars['LANG']['register']['last_name_prompt']; ?>
");
		}
	});
	
	$("#first_name").blur(function(){
		if($.trim(this.value) != "" && this.value != null){
			$("#checkSpan4").text("");
			flag = true;
		}else{
			flag = false;
			$("#checkSpan4").text("<?php echo $this->_tpl_vars['LANG']['register']['first_name_prompt']; ?>
");
		}
	});
	
	$(".district").change(function(){
		if(this.value != -1){
			$("#checkSpan5").text("");
			flag = true;
			if($.trim($("#mobile_no").val()) != "" && $("#mobile_no").val() != null)
				$("#checkSpan6").text("");
		}
		else{
			flag = false;
			$("#checkSpan5").text("<?php echo $this->_tpl_vars['LANG']['register']['district_prompt']; ?>
");
		}
	});

	$("#email").blur(function(){
		$("#checkSpan7").text("");
		var str =  /^([a-zA-Z0-9-_])+@([a-zA-Z0-9-_])+[\.]{1}(com|net|bta|cn|org|edu|mil|asia|gov|int|cc)$/;
		if($.trim($("#email").val()) != "" && $("#email").val() != null){
			if(!str.test($.trim(this.value))){
				flag = false;
				$("#checkSpan7").text("<?php echo $this->_tpl_vars['LANG']['register']['email_format_prompt']; ?>
");
				}else 
				flag = true;
		}else{
			flag = false;
			$("#checkSpan7").text("<?php echo $this->_tpl_vars['LANG']['register']['email_prompt']; ?>
");
		}
	});
	
	$("#mobile_no").blur(function(){
		if($.trim(this.value) != "" && this.value != null){
			$("#checkSpan6").text("");
			if(isNaN($.trim(this.value))){
				flag = false;
				$("#checkSpan6").text("<?php echo $this->_tpl_vars['LANG']['register']['mobile_format_prompt']; ?>
");
			}else 
			flag = true;
		}else {
			$("#checkSpan6").text("<?php echo $this->_tpl_vars['LANG']['register']['mobile_prompt']; ?>
");
		}
	});
	
	$("#home_no").blur(function(){
		$("#checkSpan10").text("");
		if(isNaN($.trim(this.value))){
			flag = false;
			$("#checkSpan10").text("<?php echo $this->_tpl_vars['LANG']['register']['tel_prompt']; ?>
");
		}else 
		flag = true;
	});
	
	$("#office_no").blur(function(){
		$("#checkSpan11").text("");
		if($.trim(isNaN(this.value))){
			flag = false;
			$("#checkSpan11").text("<?php echo $this->_tpl_vars['LANG']['register']['tel_prompt']; ?>
");
		}else 
		flag = true;
	});
	
	$("#honorific").change(function(){
		if($.trim(this.value) != 1){
			$("#gender").val("F");
		}else{
			$("#gender").val("M");
		}
	});
	
	$("#gender").change(function(){
		if(this.value == "M" && $.trim($("#honorific").val()) != 1){
			$("#honorific").val("1");
		}else if(this.value == "F" && $.trim($("#honorific").val()) == 1){
			$("#honorific").val("2");
		}
	});
	
	$("#register").click(function(){
		var login_name = $.trim($("#login_name").val());
		var password = $.trim($("#password1").val());
		var password2 = $.trim($("#password2").val());
		var honorific_id = $.trim($("#honorific").val());
		var last_name = $.trim($("#last_name").val());
		var first_name = $.trim($("#first_name").val());
		var nickname = $.trim($("#nickname").val());
		var gender = $.trim($("#gender").val());
		var mobile_country_code = $.trim($("#mobile_country_code").val());
		var mobile_no = $.trim($("#mobile_no").val());
		var home_country_code = $.trim($("#home_country_code").val());
		var home_area_code = $.trim($("#home_area_code").val());
		var home_no = $.trim($("#home_no").val());
		var office_country_code = $.trim($("#office_country_code").val());
		var office_area_code = $.trim($("#office_area_code").val());
		var office_no = $.trim($("#office_no").val());
		var email = $.trim($("#email").val());
		var address = $.trim($("#address").val());
		var birthday = $.trim($("#birthday_year").val())+"-"+$.trim($("#birthday_month").val())+"-"+$.trim($("#birthday_day").val());
		var country_id = $.trim($("#country_id").val());
		var city_id = $.trim($("#city_"+country_id).val());
		var district_id = $.trim($("#district_"+city_id).val());
		
		if(login_name == "" || login_name == null){
			flag = false;
			$("#checkSpan0").text("<?php echo $this->_tpl_vars['LANG']['register']['login_name_empty']; ?>
");
		}else if(login_name.length < 6 || login_name.length > 30){
			$("#checkSpan0").text("<?php echo $this->_tpl_vars['LANG']['register']['login_name_length']; ?>
");
		}if(flag == true){
			$("#checkSpan0").text("");
		}
		if(password == "" || password == null || password2 == "" || password2 == null){
			flag = false;
			$("#checkSpan2").text("<?php echo $this->_tpl_vars['LANG']['register']['password_prompt']; ?>
");
		}else if(flag == true){
			$("#checkSpan2").text("");
		}
		if(last_name =="" || last_name == null){
			flag = false;
			$("#checkSpan3").text("<?php echo $this->_tpl_vars['LANG']['register']['last_name_prompt']; ?>
");
		}else if(flag == true){
			$("#checkSpan3").text("");
		}
		if(first_name =="" || first_name == null){
			flag = false;
			$("#checkSpan4").text("<?php echo $this->_tpl_vars['LANG']['register']['first_name_prompt']; ?>
");
		}else if(flag == true){
			$("#checkSpan4").text("");
		}
		if(district_id == -1){
			flag = false;
			$("#checkSpan5").text("<?php echo $this->_tpl_vars['LANG']['register']['district_prompt']; ?>
");
		}else if(flag == true){
			$("#checkSpan5").text("");
		}
		if(mobile_country_code == "" || mobile_country_code == null || mobile_no == "" || mobile_no == null){
			flag = false;
			$("#checkSpan6").text("<?php echo $this->_tpl_vars['LANG']['register']['mobile_prompt']; ?>
");
		}else if(flag == true){
			$("#checkSpan6").text("");
		}
		if(email == "" || email == null){
			flag = false;
			$("#checkSpan7").text("<?php echo $this->_tpl_vars['LANG']['register']['email_prompt']; ?>
");
		}else if(flag == true){
			$("#checkSpan7").text("");
		}
		if(flag){
			$("#registerImg").show();
			$.post("register_user.php", {
				action:"register",
				login_name:login_name,
				password:password,
				honorific_id:honorific_id,
				last_name:last_name,
				first_name:first_name,
				nickname:nickname,
				gender:gender,
				mobile_country_code:mobile_country_code,
				mobile_no:mobile_no,
				home_country_code:home_country_code,
				home_area_code:home_area_code,
				home_no:home_no,
				office_country_code:office_country_code,
				office_area_code:office_area_code,
				office_no:office_no,
				email:email,
				address:address,
				district_id:district_id,
				birthday:birthday
				},
				
				function(message) {
				alert(message);
					$("#registerImg").hide();
					msg_arr = message.split(':');
					if (parseInt(msg_arr[0]) == parseInt(0)){
						window.location.href = '<?php echo $this->_tpl_vars['rootpath']; ?>
/member/admin.php';
					} else {
						if(msg_arr[1] == "member_already_exists")
							$("#checkSpan0").text("<?php echo $this->_tpl_vars['LANG']['register']['login_name_exist']; ?>
");
						else
							alert("<?php echo $this->_tpl_vars['LANG']['register']['register_fail_prompt']; ?>
");
					}
				});
		}
	});
</script>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['smarty_root'])."/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>






