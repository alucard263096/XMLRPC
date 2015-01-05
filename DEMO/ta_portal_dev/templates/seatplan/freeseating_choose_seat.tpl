<{include file="$smarty_root/header.tpl" }>
<link type="text/css" href="<{$rootpath}>/css/accordion_customer_theme.css" rel="stylesheet" />
<link type="text/css" href="<{$rootpath}>/css/seat_plan_style.css" rel="stylesheet" />
<script language="javascript"  type="text/javascript"   src="<{$rootpath}>/js/showcase.js"></script>
<script language="javascript"  type="text/javascript"   src="<{$rootpath}>/js/popup_layer.js"></script>
<script language="javascript"  type="text/javascript"   src="<{$rootpath}>/js/jquery.watermark.js"></script>
<link href="<{$rootpath}>/css/startcss.css" rel="stylesheet" type="text/css" />
<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
<tr><td align='center'>
<div>
	<table width="960" height='311' border="0" cellspacing="0" cellpadding="0" class='choose_bg'>
			<tr >
				<td width='30px'></td>
				<td width="300"  valign="middle" >
					<table width="300" border="0" cellspacing="0" cellpadding="0">
						<tr>
							<td >
								<{if $movie.poster <>''}>
									<div class='choose_img_bg'>
										<img src="<{$resource_path}><{$movie.poster}>" border="0"/>
									</div>
						  	 	<{/if}>  
							</td>
							<td width="20"><img src="<{$rootpath}>/images/spacer.gif" width="20" height="1"></td>
							<td width="93" valign="top">
								
							</td>
						</tr>
					</table>
				</td>
				<td width="630" valign="middle" align='left' >
				<table width="630" border="0" cellspacing="0" cellpadding="0">
					<tr>
						<td width="80"  ><img src="<{$rootpath}>/images/spacer.gif" width="80" height="1"></td>
						<td width="180" ><img src="<{$rootpath}>/images/spacer.gif" width="180" height="1"></td>
						<td width="370" ><img src="<{$rootpath}>/images/spacer.gif" width="370" height="1"></td>
					</tr>
					<tr>
						<td colspan="3">
						<a href="detail.php?city_id=<{$movie.city_id}>&activity_id=<{$movie.activity_id}>" ><span  class="showname_20px"><{$movie.name}></span></a>
						</td>
					</tr>
					<tr class="labelFont">
						<td >
							<{$LANG.hot_movie.city}>
						</td>
						<td colspan="2">
							<{foreach from=$movie.venue_details item=venue_item}>
								<{$venue_item.city_name}>
							<{/foreach}>
						</td>
					</tr>
					<tr class="labelFont">
						<td >
							<{$LANG.hot_movie.venue}>
						</td>
						<td colspan="2">
							<{foreach from=$movie.venue_details item=venue_item}>
								<{$venue_item.venue_name}>
							<{/foreach}>
						</td>
					</tr>
					<tr class="labelFont">
						<td class='result_showdate' id='movie_s_<{$movie.activity_id}>'>
							<{$LANG.show_detail.show_date}>
						</td>
						<td colspan="2">
							<select name='show_id'  id='movie_d_<{$movie.activity_id}>' class='show_ddl' >
							<{foreach from=$movie.venue_details item=venue_item}>
							 <{foreach from=$venue_item.schedule_details item=schedule_details}>
			                       <option <{if $schedule_details.show_id==$param_list.show_id}>selected<{/if}> value='<{$schedule_details.show_id}>'><{convertDateTime lang=$lang date=$schedule_details.show_date}></option>
			                  <{/foreach}>
			                <{/foreach}>
			                </select>
						</td>
					</tr>
					<tr>
						<td colspan="3">
							<img src="<{$rootpath}>/images/spacer.gif" width='1'  height="5">
						</td>
					</tr>
					<tr class="labelFont">
						<td colspan="2">
						</td>
						
					</tr>
					
					<tr class="cpf_show">
						<td>
						<{$LANG.choose_seat.price}>:
						</td>
						<td id='price_td' colspan='2'>
							<table border="0" cellspacing="0" cellpadding="0">
								<tr>
									<{foreach item=rs from=$show_detail.ticket_type_details}>
									<{if $rs.remain_ticket >0 }>
									<td>
										<input type='radio' name='taggcc' class='on_active' value='<{$rs.ticket_group_id}>' />
									</td>
									<td>
										<{ $rs.symbol }><{ $rs.price }>
									</td>
									<{else}>
									<td>
										<input type='radio' name='taggcc' disabled=disabled />
									</td>
									<td>
										<span style='text-decoration:line-through;color:red;'><{ $rs.symbol }><{ $rs.price }></span>
									</td>
									<{/if}>
									<{/foreach}>
								</tr>
							</table>
						</td>
					<tr class="cpf_show">
						<td>
						<{$LANG.choose_seat.ticket_num}>:
						</td>
						<td>
						<input class='quantity' style='width:30px' maxlength=2 type='text' id='ticket_count' value='1' />
						</td>
					</tr>
					<tr height='5px'>
						<td></td>
					</tr>
					<tr class="cpf_show">
						<td colspan='2'>
						<input id="submit_seat" type="button" class="confirm_button value_gray" />	
						</td>
					</tr>
					<tr id='how_to_get_more_ticket'>
						<td class='showname_20px' colspan='3'>
							<{$LANG.how_to_get_more_ticket}>
						</td>
					</tr>
					<tr >
						<td colspan='3'>
							<span id="errorMsg" class="errorMsg"></span>
						</td>
					</tr>
				</table>
				</td>
			</tr>
		</table>
	</div>
</td>
</tr>
</table>

<{include file="$smarty_root/seatplan/login_js.tpl" }>
	
<script>
var module='free';
$(document).ready(function(){
	$("#how_to_get_more_ticket").hide();
	//alert($(".on_active").length);
	if($(".on_active").length<=0)
	{
		$(".cpf_show").hide();
		$("#how_to_get_more_ticket").show();
		$("#seat_tr").hide();
	}
	else
	{
		$("#seat_tr").show();
	}
	$('#javascripts').load("choose_seat.php", {action:"loadJs"});
	$(".on_active").click(function(){
		$(".on_active").attr("bordercolor","black");
		$("#ticket_group_id").val($(this).val());
		$(this).attr("bordercolor","blue");
	});
	$("#price_td .on_active:first").click();
	$(".show_ddl").change(function(){
		var show_id=$(this).val();
		var str='choose_seat.php?show_id='+show_id;
		window.location.href=str;
	});
});
</script>
<{include file="$smarty_root/footer.tpl" }>