<{include file="$smarty_root/header.tpl" }>
<style>
	.tableCss {height:30px}
	.hidden1 {
		display:none;
	}
	.show1 {
		display:"";
	}
</style>
<table width="960" border="0" cellpadding="0" cellspacing="0" align="center">
	<tr>
		<td><img src="<{$rootpath}>/images/<{$lang}>/modify_font.jpg" width="155" height="30"></td>
		<td><img src="<{$rootpath}>/images/login_line.jpg" width="805" height="30"></td>
	</tr>
	<tr>
		<td colspan="2"><img src="<{$rootpath}>/images/spacer.gif"  height="10"></td>
	</tr>
</table>
<table width="960" border="0" cellpadding="0" cellspacing="0" align="center" background="<{$rootpath}>/images/sign_up_BG.jpg">
	<tr>
		<td align="center">
			<table width="720" border="0" align="center" cellpadding="0" cellspacing="0">
				<tr>
					<td>
						<td colspan="3"><img src="<{$rootpath}>/images/spacer.gif" height="20"></td>
					</td>
				</tr>
				<tr>
					<td width="5"></td>
					<td class="text16_1" width="110">
						<{$LANG.register.login_name}>:
					</td>
					<td class="tableCss">
						<input type=text id="login_name" readonly maxlength=32 style="background-color:#DDDDDD;">
					</td>
				</tr>
				
				<tr>
					<td width="5"></td>
					<td class="text16_1">
						<{$LANG.register.honorific}>:
					</td>
					<td>
					<select id="honorific">
						<{foreach key=k from=$honorific_list item=hl}>	
							<{if $hl.honorific_id eq $infoList.honorific_id}>					
								<option value="<{$hl.honorific_id}>" selected><{$hl.name}></option>
							<{else}>
								<option value="<{$hl.honorific_id}>"><{$hl.name}></option>
							<{/if}>
						<{/foreach}>
					</select>
					</td>
				</tr>
				<tr>
					<td class="text16" width="5"><img src="<{$rootpath}>/images/movie/login_highlight.gif"></td>
					<td class="text16_1">
						<{$LANG.register.last_name}>:
					</td>
					<td class="tableCss">
						<input type=text id="last_name" maxlength=32><span id="checkSpan3" style='color:red'></span>
					</td>
				</tr>
				<tr>
					<td class="text16" width="5"><img src="<{$rootpath}>/images/movie/login_highlight.gif"></td>
					<td class="text16_1">
						<{$LANG.register.first_name}>:
					</td>
					<td class="tableCss">
						<input type=text id="first_name" maxlength=32><span id="checkSpan4" style='color:red'></span>
					</td>
				</tr>
				<tr>
					<td width="5"></td>
					<td class="text16_1">
						<{$LANG.register.nickname}>:
					</td>
					<td class="tableCss">
						<input type=text id="nickname" maxlength=64>
					</td>
				</tr>
				<tr>
					<td width="5"></td>
					<td class="text16_1">
						</span><{$LANG.register.gender}>:
					</td>
					<td class="tableCss">
						<select id="gender">
							<option value="M"><{$LANG.register.male}></option>
							<option value="F"><{$LANG.register.female}></option>
						</select>
					</td>
				</tr>
				<tr>
					<td width="5"></td>
					<td class="text16_1">
						<{$LANG.register.birthday}>:
					</td>
					<td class="tableCss">
						<select id="birthday_year" style="width:55;">
							
						</select><{$LANG.register.year}>
						<select id="birthday_month" style="width:45;">
							
						</select><{$LANG.register.month}>
						<select id="birthday_day" style="width:45;">
							
						</select><{$LANG.register.day}>
					</td>
				</tr>
				<tr>
					<td class="text16" width="5"><img src="<{$rootpath}>/images/movie/login_highlight.gif"></td>
					<td class="text16_1">
						<{$LANG.register.district}>:
					</td>
					<td class="tableCss">
						<select id='country_id' class='country'>
							<option value='-1'>--<{$LANG.delivery_client.choice}>--</option>
							<{foreach from=$country item=rs }>
							<option value='<{$rs.id}>'><{$rs.long_name}></option>
							<{/foreach}>
						</select>
						<select id='city_-1' class='city show1'>
							<option value='-1'>--<{$LANG.delivery_client.choice}>--</option>
						</select>
						<{foreach from=$city item=det}>
							<select id='city_<{$det.country_id}>' class='city hidden1'>
								<option value='-1'>--<{$LANG.delivery_client.choice}>--</option>
								<{foreach from=$det.details item=rs}>
								<option value='<{$rs.id}>'><{$rs.long_name}></option>
								<{/foreach}>
							</select>
						<{/foreach}>
			    		<select id='district_-1'  class='district show1'>
							<option value='-1'>--<{$LANG.delivery_client.choice}>--</option>
						</select>
						<{foreach from=$district item=det}>
							<select id='district_<{$det.city_id}>'  class='district hidden1'>
								<option value='-1'>--<{$LANG.delivery_client.choice}>--</option>
								<{foreach from=$det.details item=rs}>
									<option value='<{$rs.id}>'><{$rs.long_name}></option>
								<{/foreach}>
							</select>
						<{/foreach}>
						<span id="checkSpan5" style='color:red'></span>
					</td>
				</tr>
				<tr>
					<td class="text16" width="5"><img src="<{$rootpath}>/images/movie/login_highlight.gif"></td>
					<td class="text16_1">
						<{$LANG.register.mobile_no}>:
					</td>
					<td class="tableCss">
						<input type=text style="width:40px;background-color:#DDDDDD;" readonly id=mobile_country_code  maxlength=3>-<input type=text id=mobile_no  maxlength=16><span id="checkSpan6" style='color:red'></span>
					</td>
				</tr>
				<tr>
					<td width="5"></td>
					<td class="text16_1">
						<{$LANG.register.home_tel_no}>:
					</td>
					<td class="tableCss">
						<input type=text style="width:40px;background-color:#DDDDDD;" readonly id=home_country_code maxlength=3> <input type=text readonly style="width:40px;background-color:#DDDDDD;" id=home_area_code maxlength=3>-<input type=text id=home_no maxlength=16><span id="checkSpan10" style='color:red'>
					</td>
				</tr>
				<tr>
					<td width="5"></td>
					<td class="text16_1">
						<{$LANG.register.office_tel_no}>:
					</td>
					<td class="tableCss">
						<input type=text style="width:40px;background-color:#DDDDDD;" readonly id=office_country_code maxlength=3> <input type=text readonly style="width:40px;background-color:#DDDDDD;" id=office_area_code maxlength=3>-<input type=text id=office_no maxlength=16><span id="checkSpan11" style='color:red'>
					</td>
				</tr>
				<tr>
					<td class="text16" width="5"><img src="<{$rootpath}>/images/movie/login_highlight.gif"></td>
					<td class="text16_1">
						<{$LANG.register.email}>:
					</td>
					<td class="tableCss">
						<input type=text id="email"  maxlength=128><span id="checkSpan7" style='color:red'></span>
					</td>
				</tr>
				<tr>
					<td width="5"></td>
					<td class="text16_1">
						</span><{$LANG.register.address}>:
					</td>
					<td class="tableCss">
						<input type=text id="address" maxlength=512 style="width:300px;">
					</td>
				</tr>
				<tr>
					<td class="tableCss"　cols="3">&nbsp;</td>
				</tr>
				<tr>
					<td colspan="2" class="text14_red"><{$LANG.login.required1}><img src="<{$rootpath}>/images/movie/login_highlight.gif"><{$LANG.login.required2}></td>
					<td valign="top">
						<img src="<{$rootpath}>/images/spacer.gif" width="162" height="1"/>
						<input type=button id="modifyInfo">
						<span id="registerImg" style='display:none;'><{$LANG.register.modify_msg}><img src='<{$rootpath}>/images/loading.gif' width='20' height='20'/></span>
					</td>
				</tr>
				<tr>
					<td>
						<td colspan="2"><img src="<{$rootpath}>/images/spacer.gif" height="20"></td>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>

<script type="text/javascript">	
	flag = true;
	$(document).ready(function() {
		$("#modifyInfo").css({"background":"url(<{$rootpath}>/images/<{$lang}>/button_ok.gif) no-repeat","width": "134px","height": "50px","border": "0px","cursor":"pointer"});
		$("#login_name").focus();
		var infoDate = new Date("<{$infoList.birth_day}>");
		var year = new Date().getFullYear();	

		for(var i = 1900;i <= year;i++){
			if(i == parseInt(infoDate.getFullYear()))
				$("#birthday_year").append("<option value='" + i + "' selected>" + i + "</option>");
			else
				$("#birthday_year").append("<option value='" + i + "'>" + i + "</option>");
		}
		for(var j = 1;j <= 12;j++){
			if(j == parseInt(infoDate.getMonth()+1))
				$("#birthday_month").append("<option value='" + j + "' selected>" + j + "</option>");
			else
				$("#birthday_month").append("<option value='" + j + "'>" + j + "</option>");
		}
		
		for(var k = 1;k <= 31;k++){
			if(k == parseInt(infoDate.getDate()))
				$("#birthday_day").append("<option value='" + k + "' selected>" + k + "</option>");
			else
				$("#birthday_day").append("<option value='" + k + "'>" + k + "</option>");
		}
		
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
		 $("#login_name").val("<{$infoList.login_name}>");
		 $("#last_name").val("<{$infoList.last_name}>");
		 $("#first_name").val("<{$infoList.first_name}>");
		 $("#nickname").val("<{$infoList.nickname}>");
		 if("<{$infoList.gender}>" == "M")
		 	$("#gender").val("M");
		 else
		 	$("#gender").val("F");
		 $("#mobile_country_code").val("<{$infoList.mobile_country_code}>");
		 $("#mobile_no").val("<{$infoList.mobile_no}>");
		 $("#home_country_code").val("<{$infoList.home_country_code}>");
		 $("#home_area_code").val("<{$infoList.home_area_code}>");
		 $("#home_no").val("<{$infoList.home_no}>");
		 $("#office_country_code").val("<{$infoList.office_country_code}>");
		 $("#office_area_code").val("<{$infoList.office_area_code}>");
		 $("#office_no").val("<{$infoList.office_no}>");
		 $("#email").val("<{$infoList.email}>");
		 $("#address").val("<{$infoList.address}>");
		 
		 <{foreach item=list from=$countryList}>
		 	if("<{$list.selected_id|strip}>" != "")
		 		$("#country_id").val("<{$list.id}>");
		 <{/foreach}>
		 $("#country_id").change();

		 <{foreach item=list from=$cityList}>
		 	if("<{$list.selected_id|strip}>" != "")
		 		$("#city_"+$("#country_id").val()).val("<{$list.id}>");
		 <{/foreach}>
		 $(".city").change();
		
		 $(".district").removeClass("show1").addClass("hidden1");
		 $("#district_"+ $("#city_"+$("#country_id").val()).val()).removeClass("hidden1").addClass("show1").val(-1);
		 $("#district_"+ $("#city_"+$("#country_id").val()).val()).val("<{$infoList.district_id}>");
		 $(".district").change();
		 		
		 
	});
	function getAddress(){
		var country_id=$("#country_id").val();
		if(country_id != -1){
			<{foreach from=$country item=rs }>
					if(<{$rs.id}>==$("#country_id").find("option:selected").val()){
						$("#home_country_code").val(<{$rs.code}>);
						$("#office_country_code").val(<{$rs.code}>);
						$("#mobile_country_code").val(<{$rs.code}>);
						$("#home_area_code").val("");
						$("#office_area_code").val("");
					}
			<{/foreach}>
		}
		var city_id=$("#city_"+country_id).val();
		if(city_id != -1){
			<{foreach from=$city item=det}>
					<{foreach from=$det.details item=rs}>
						if(<{$rs.id}>==$("#city_"+country_id).find("option:selected").val()){
							$("#home_area_code").val("<{$rs.code}>");
							$("#office_area_code").val("<{$rs.code}>");
						}						
					<{/foreach}>
			<{/foreach}>
		}
	}
	
	$("#last_name").blur(function(){
		if($.trim(this.value) != "" && this.value != null){
			$("#checkSpan3").text("");
			flag = true;
		}else{
			flag = false;
			$("#checkSpan3").text("<{$LANG.register.last_name_prompt}>");
		}
	});
	
	$("#first_name").blur(function(){
		if($.trim(this.value) != "" && this.value != null){
			$("#checkSpan4").text("");
			flag = true;
		}else{
			flag = false;
			$("#checkSpan4").text("<{$LANG.register.first_name_prompt}>");
		}
	});
	
	$(".district").change(function(){
		if(this.value != -1){
			$("#checkSpan5").text("");
			flag = true;
			if($.trim($("#mobile_no").val()) != "" && $("#mobile_no").val() != null)
				$("#checkSpan6").text("");
		}
		
	});
	
	$("#email").blur(function(){
		$("#checkSpan7").text("");
		var str =  /^([a-zA-Z0-9-_])+@([a-zA-Z0-9-_])+[\.]{1}(com|net|bta|cn|org|edu|mil|asia|gov|int|cc)$/;
		if($.trim($("#email").val()) != "" && $("#email").val() != null){
			if(!str.test($.trim(this.value))){
				flag = false;
				$("#checkSpan7").text("<{$LANG.register.email_format_prompt}>");
				}else 
				flag = true;
		}else{
			flag = false;
			$("#checkSpan7").text("<{$LANG.register.email_prompt}>");
		}
	});
	
	$("#mobile_no").blur(function(){
		if($.trim(this.value) != "" && this.value != null){
			$("#checkSpan6").text("");
			if(isNaN($.trim(this.value))){
				flag = false;
				$("#checkSpan6").text("<{$LANG.register.mobile_format_prompt}>");
			}else 
			flag = true;
		}else {
			$("#checkSpan6").text("<{$LANG.register.mobile_prompt}>");
		}
	});
	
	$("#home_no").blur(function(){
		$("#checkSpan10").text("");
		if(isNaN($.trim(this.value))){
			flag = false;
			$("#checkSpan10").text("<{$LANG.register.tel_prompt}>");
		}else 
		flag = true;
	});
	
	$("#office_no").blur(function(){
		$("#checkSpan11").text("");
		if($.trim(isNaN(this.value))){
			flag = false;
			$("#checkSpan11").text("<{$LANG.register.tel_prompt}>");
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

	$("#modifyInfo").click(function(){
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
			$("#checkSpan0").text("<{$LANG.register.login_name_prompt}>");
		}else if(flag == true){
			$("#checkSpan0").text("");
		}
		if(last_name =="" || last_name == null){
			flag = false;
			$("#checkSpan3").text("<{$LANG.register.last_name_prompt}>");
		}else if(flag == true){
			$("#checkSpan3").text("");
		}
		if(first_name =="" || first_name == null){
			flag = false;
			$("#checkSpan4").text("<{$LANG.register.first_name_prompt}>");
		}else if(flag == true){
			$("#checkSpan4").text("");
		}
		if(district_id == -1){
			flag = false;
			$("#checkSpan5").text("<{$LANG.register.district_prompt}>");
		}else if(flag == true){
			$("#checkSpan5").text("");
		}
		if(mobile_country_code == "" || mobile_country_code == null || mobile_no == "" || mobile_no == null){
			flag = false;
			$("#checkSpan6").text("<{$LANG.register.mobile_prompt}>");
		}else if(flag == true){
			$("#checkSpan6").text("");
		}
		if(email == "" || email == null){
			flag = false;
			$("#checkSpan7").text("<{$LANG.register.email_prompt}>");
		}else if(flag == true){
			$("#checkSpan7").text("");
		}

		if(flag){
			$("#registerImg").show();
			$.post("modify_user_info.php", {
				action:"modifyInfo",
				login_name:login_name,
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
					$("#registerImg").hide();
					msg_arr = message.split(':');
					if (parseInt(msg_arr[0]) == parseInt(0)){
						window.location.href = '<{$rootpath}>/member/admin.php';
					} else {
						alert(msg_arr[1]);
					}
				});
		}
	});
	
</script>
<{include file="$smarty_root/footer.tpl" }>







