<table width="730" border="0" cellspacing="0" cellpadding="0">
	<tr>	
		<td height="35" background="<{$rootpath}>/images/bg_bar_yellow.gif" style="color: #ffffff; padding-left: 5px">
			<span><{$LANG.hotel_list.choose}>:&nbsp;&nbsp;</span>        			        			
			<select id="location_code">
				<option value="-1"><{$LANG.hotel_list.location_code}></optionm>
				<option value="HK"><{$LANG.hotel_list.HK}></option>
				<option value="GZ"><{$LANG.hotel_list.GZ}></option>
				<option value="MO"><{$LANG.hotel_list.MO}></option>
			</select>&nbsp;
		<!--<select id="city_id" >
			<option value="-1">city</option>
			<{foreach item=city from=$city_list}>
    			<option value="<{$city.city_id}>"> <{$city.long_name}> </option>
    		<{/foreach}>  
        
			<select id="district_id" >
            	<option value="-1"><{$LANG.hotel_list.district}></option>
            	<{foreach item=district from=$district_list}>
					<option value="<{$district.district_id}>"><{$district.long_name}></option>
				<{/foreach}>
			</select>
		-->
			<select id="star">
				<option value="-1"><{$LANG.hotel_list.star}></option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
			</select>&nbsp;
				
			<select id="price">
            	<option value="-1"><{$LANG.hotel_list.price}></option>
            	<option value="0_500">
            	<{if $param_list.lang neq "en-us"}>
            		<{$currency}> 500<{$LANG.hotel_list.below}>
            	<{else}>
            		<{$LANG.hotel_list.below}>  <{$currency}> 500
            	<{/if}>
            	</option>
				<option value="500_800"><{$currency}> 500-800</option>
				<option value="800_1500"><{$currency}> 800-1500</option>
				<option value="1500_-1">
				<{if $param_list.lang neq "en-us"}>
				<{$currency}> 1500<{$LANG.hotel_list.above}>
				<{else}>
				<{$LANG.hotel_list.above}>  <{$currency}> 1500
				<{/if}>
				</option>
			</select>&nbsp;
			
			<input type="text" value="<{$LANG.hotel_list.keyword}>" style="color:#999" id=keyword class="isNull">
			
			<input type="button" value="<{$LANG.hotel_list.search}>" id="search" style="background:url(<{$rootpath}>/images/button_bg_gary.gif) no-repeat;border:0px;width:66;height:23;" />
		</td>
	</tr>
</table>
<script>
	$("#search").click(function(){
		var location_code=$('#location_code').val();
		var price=$('#price').val();
		var star=$('#star').val();
	
		var keyword=$('#keyword').val();
		if($("#keyword").attr("class") == "isNull")
			keyword = "";
//		var check_in_date=$('#check_in_date').val();
//		var check_out_date=$('#check_out_date').val();
		
		$('#div3').css('display','none');
		$('#div3_load').css('display','');
		var url = "hotel_list.php";
		$('#div3').load(url, {"action":"resetCriteria","location_code":location_code,
		"price":price,"star":star,"keyword":keyword}, function() {
			$('#div3').css('display','');
			$('#div3_load').css('display','none');
		});
	});
	
	$("#keyword").focus(function(){
		this.style.color='#000';
		if($("#keyword").attr("class") == "isNull"){
			this.value="";
			$("#keyword").attr("class","notNull");
		}
	});
	
	$("#keyword").blur(function(){
		if($.trim(this.value) == ""){
			this.style.color='#999';
			$("#keyword").attr("class","isNull");
			$("#keyword").val("<{$LANG.hotel_list.keyword}>");	
		}
	});
</script>
