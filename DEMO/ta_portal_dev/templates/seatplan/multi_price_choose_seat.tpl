<{include file="$smarty_root/header.tpl" }>
<link type="text/css" href="<{$rootpath}>/css/accordion_customer_theme.css" rel="stylesheet" />
<link type="text/css" href="<{$rootpath}>/css/seat_plan_style.css" rel="stylesheet" />
<script language="javascript"  type="text/javascript"   src="<{$rootpath}>/js/showcase.js"></script>
<script language="javascript"  type="text/javascript"   src="<{$rootpath}>/js/popup_layer.js"></script>
<script language="javascript"  type="text/javascript"   src="<{$rootpath}>/js/jquery.watermark.js"></script>
<script language="javascript"  type="text/javascript"   src="<{$rootpath}>/js/jquery.maphilight.min.js"></script>
<link href="<{$rootpath}>/css/startcss.css" rel="stylesheet" type="text/css" />

<input type='hidden' id='max_order_qty' value='<{$show_detail.max_order_qty}>' />
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
						
							<{foreach item=rs from=$show_detail.ticket_type_details}>
								<{foreach item=rrs from=$show_detail.area_coords}>
								<input id='st_<{$rs.ticket_group_id}>_<{$rrs.area_id}>' type='hidden' value='' class='area_seat' />
								<{/foreach}>
							<{/foreach}>
							<table border="0" cellspacing="0" cellpadding="0">
								<tr>
									<{foreach item=rs from=$show_detail.ticket_type_details}>
									<{if $rs.remain_ticket >0 }>
									<td>
										<input type='radio' name='taggcc' id='tgac_<{$rs.ticket_group_id}>' class='on_active' value='<{$rs.ticket_group_id}>' />
									</td>
									<td>
										<{ $rs.symbol }><{ $rs.price }>
										
										<map name="imagemap_<{$rs.ticket_group_id}>">
										<{foreach item=rrs from=$show_detail.area_coords}>
											<{if $rrs.ticket_group_id==$rs.ticket_group_id}>
											<area href="###" shape="POLYGON" 
											<{if $rrs.seat_count>0  }>name='show_id=<{$show_detail.show_id}>&area_id=<{$rrs.area_id}>&ticket_group_id=<{$rs.ticket_group_id}>' id='t_<{$rs.ticket_group_id}>_<{$rrs.area_id}>' class='active_area' 
											<{else}>class='sold_out_area'
											<{/if}>
											coords="<{$rrs.coords}>" title="<{$rrs.name}>" />
											<{/if}>
										<{/foreach}>
										</map>
										
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
					</tr>
					<tr id='seat_tr'>
						<td  class="info_header"  style='color:blue;font-size:25;height:26px'><{$LANG.choose_seat.seat}>:</td>
						<td colspan='2'>
							<table>
								<{foreach item=rs from=$show_detail.ticket_type_details}>
									<{foreach item=rrs from=$show_detail.area_coords}>
									<tr id='ast_<{$rs.ticket_group_id}>_<{$rrs.area_id}>' class='ctrl_tr' style='display:none;'>
										<td style='color:blue;font-size:25;'><{if $rrs.display==1}><{$rrs.name}>:<{/if}></td><td class='bs' style='color:blue;font-size:25;'></td>
									</tr>
									<{/foreach}>
								<{/foreach}>
							</table>
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
</td></tr>
<tr>
	<td height='15px'></td>
</tr>
<tr>
	<td align='center'>
	<img class="map"  border=0 src='<{getImagePathByHouse activity_id=$show_detail.activity_id house_id=$show_detail.house_id show_id=$show_detail.show_id }>' />
	</td>
</tr>
</table>


<div id="dialog-modal" style='display:none;'>
	<div id="div_seatplan_load" >
		<img src="<{$rootpath}>/images/loading.gif"/>
	</div>
	<div id="div_seatplan" >
		
	</div>
</div>
<{include file="$smarty_root/seatplan/login_js.tpl" }>

<script>
$(function() {
	$("#how_to_get_more_ticket").hide();
	if($(".on_active").length<=0)
	{
		$("#cpf_show").hide();
		$("#how_to_get_more_ticket").show();
		$("#seat_tr").hide();
	}
	else
	{
		$("#seat_tr").show();
	}
	
	$("#dialog").dialog("destroy");
	//$('.map').maphilight();
	$(".on_active").click(function(){
		var seat_list=$("#seat_list").val();
		if(seat_list!=""&&$("#ticket_group_id").val()!=$(this).val())
		{
			if(!confirm("<{$LANG.seat_plan.you_have_1}>"+$.trim($("#on_active_"+$("#ticket_group_id").val()).text())+"<{$LANG.seat_plan.you_have_2}>"))
			{
				$("#tgac_"+$("#ticket_group_id").val()).click();
				return;
			}
			else
			{
				$(".ctrl_tr").hide();
				$("#seat_list").val("");
			}
		}
		$(".on_active").attr("bordercolor","black");
		$("#ticket_group_id").val($(this).val());
		$('.map').attr("usemap","#imagemap_"+$(this).val()).maphilight();
		
	});
	
	$(".active_area").click(function(){
		$("#dialog-modal").dialog("destroy");
		$("#div_seatplan_load").show();
		$("#div_seatplan").hide();
		var id=$(this).attr("id");
		$("#dialog-modal").dialog({
			modal: true,
			closeText: "close",
			draggable:false,
			resizable:false,
			height:600,
			width:800,
			closeOnEscape:true,
			buttons:{
				"<{$LANG.seat_plan.OK}>":function(){
					var seat_str="";
					$.each($(".seat .selected"),function(){
						id_str=$(this).attr("id").split('_');
						d_seat_id=id_str[1];
						seat_str+=d_seat_id+",";
					});
					
					$("#s"+id).val(seat_str);
					
					if($.trim(seat_str)=="")
					{
						$("#as"+id).hide();
					}
					else
					{
						$("#as"+id).show();
						$("#as"+id+" .bs").text("<{$LANG.choose_seat.get_seat}>");
						$("#as"+id+" .bs").load("choose_seat.php?action=getSeatName&seat_list="+seat_str);
					}
					
					
					$("#seat_list").val("");
					$.each($(".area_seat"),function(){
						$("#seat_list").val($("#seat_list").val()+$(this).val());
					});
					
					 $(this).dialog("close");
				},
				"<{$LANG.seat_plan.CANCEL}>":function(){
					 $(this).dialog("close");
				}
			}
		});
		var src="choose_seat.php?action=getSeatPlan&"+$(this).attr("name");
		//alert(src);
		$("#div_seatplan").load(src,function(data){
			//alert(data);
			$("#div_seatplan_load").hide();
			$("#div_seatplan").show();
		});
	});
	
	$(".sold_out_area").click(function(){
		alert("Sold out");
	});
	$("#seat_list").val("");
	$("#price_td .on_active:first").click();
	
	$("#submit_seat").click(function(){
		var seat_str=$("#seat_list").val();
		if (seat_str!="") {
			$('#form1').submit();
		} else {
			$('#errorMsg').html('<{$LANG.choose_seat.please_select_seat}>');
		}
		
	});
	
	
	$(".show_ddl").change(function(){
		var show_id=$(this).val();
		var str='choose_seat.php?show_id='+show_id;
		window.location.href=str;
	});
});
</script> 
<{include file="$smarty_root/footer.tpl" }>