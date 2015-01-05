	<style>
	.seat
	{
		position: static;
		background: none;
	}
	.seat div{
		position: static;
		display: block;
		width: 23px;
		height: 24px;
	}
	.seatpri{
		display: block;
		width: 23px;
		height: 24px;
	}
	
	.seat .active{
		background-repeat: no-repeat;
		background-position: center;
		cursor: pointer;
	}
	.seat .aisle{
		text-align:center;
		padding: 3px;
	}
	.seat .selected{
		background-image: url(<{$rootpath}>//images/selected_seat.jpg);
		background-repeat: no-repeat;
		background-position: center;
		cursor: pointer;
	}
	.seat .hold{
		background-image: url(<{$rootpath}>//images/hold_seat.jpg);
		background-repeat: no-repeat;
		background-position: center;
	}
	.seat .sold{
		background-image: url(<{$rootpath}>//images/sold_seat.jpg);
		background-repeat: no-repeat;
		background-position: center;
	}
	.seat .disabled{
		background-image: url(<{$rootpath}>//images/disabled_seat.jpg);
		background-repeat: no-repeat;
		background-position: center;
	}
	
	
	<{foreach from=$seat_style item=rs }>
	.seat_style_<{$rs.id}>{
		color:<{$rs.fg_color}>;
		background-image:url(<{$resource_path}><{$rs.path}>);
		background-repeat:no-repeat;
	}
	<{/foreach}>
	
	</style>
	<div id='abcd' >
		<{foreach from=$seat_style item=rs }>
		<{if $rs.ticket_group_id==$ticket_group_id }>
		<div style='float:left;'>
			<table><tr><td class='seatpri seat_style_<{$rs.id}>'></td><td><{$rs.symbol}><{$rs.price}></td></tr></table>
		</div>
		<{/if}>
		<{/foreach}>
		<div style='float:left;'>
		<table><tr><td class='seatpri'><img src="<{$rootpath}>/images/selected_seat.jpg" alt="" /></td><td><{$LANG.choose_seat.selected_seat}></td></tr></table>
		</div>
		<div style='float:left;'>
		<table><tr><td class='seatpri'><img src="<{$rootpath}>/images/sold_seat.jpg" alt="" /></td><td><{$LANG.choose_seat.selling_seat}></td></tr></table>
		</div>
		<div style='float:left;'>
		<table><tr><td class='seatpri'><img src="<{$rootpath}>/images/hold_seat.jpg" alt="" /></td><td><{$LANG.choose_seat.processing_seat}></td></tr></table>
		</div>
		<div style='float:left;'>
		<table><tr><td class='seatpri'><img src="<{$rootpath}>/images/disabled_seat.jpg" alt="" /></td><td><{$LANG.choose_seat.wheelchair_seat}></td></tr></table>
		</div>
		<div style='float:left;'>
		<span style='color:blue;'><{$LANG.seat_plan.choose_direct_tips}></span>
		<br>
		<span style='color:red;' id='select_tips'></span>
		</div>
	</div>
	<div class="panel" style='width:770px;height:400px;overflow:auto;'  >
		<div class='seat' >
			<table id='st_table' >
				<{foreach from=$seat_plan item=rcs}>
					<tr>
					<{foreach from=$rcs item=rs}>
						<td align='center' valign='middle'>
						<!--<{$rs.id}><{$rs.display_type}>-->
						<{if $rs.id==0}>
						<div style='display:block;width:10px;height:10px;'>
						</div>
						<{else}>
						<div
							<{if $rs.display_type=='D'}>class='disabled'
							<{elseif $rs.display_type=='C' }>class='aisle'
							<{elseif $rs.display_type=='S' }>
								<{if $rs.is_active == 0   }>class='hold'
								<{else}>
									<{if $rs.status =='S'}>class='sold'
									<{elseif $rs.status=='P' }>class='hold'
									<{elseif $rs.status=='R' }>class='hold'
									<{else}>
										<{if $rs.ticket_group_id ==$param_list.ticket_group_id}>
										name='<{$rs.link_next_id}>_<{$rs.link_prev_id}>' class='<{$rs.id}> seat_id active seat_style_<{$rs.seat_style_id}>'
										<{else}>
										class='hold'
										<{/if}>
									<{/if}>
								<{/if}>
							<{elseif $rs.display_type=='D' }>class='disabled'
							<{/if}>
			 				<{if $rs.display_type=='S'}>id="seat_<{$rs.id}>_<{$rs.row}>_<{$rs.col}>"<{/if}> >
			 				<{if $rs.display_type=='C'}><{$rs.row_name}>
			 				<{elseif  $rs.display_type!='D'}><div class="seat_name"><{$rs.col_name}></div>
			 				<{/if}>
			 			</div>
						<{/if}>
						</td>
					<{/foreach}>
					</tr>
				<{/foreach}>
			</table>
		</div>
	</div>
	
	<script>
		$(document).ready(function(){
			//$(".panel").width();
			//alert($("#st_table").width());
			$("#ta_aisa_button_panel").html($("#abcd").html());
			$("#abcd").html("");
			try
			{
				var seat_str_l=$("#seat_list").val().split(',');
				
				for(i=0;i<seat_str_l.length;i++)
				{
					if(seat_str_l[i]!="")
					{
						$("."+seat_str_l[i]).addClass("selected").removeClass("active");
					}
				}
			}
			catch(eq)
			{
			
			}
			$(".seat .seat_id").click(function() {
					//get this seat information
					id_str=$(this).attr("id").split('_');
					seat_id=id_str[1];
					row=Number(id_str[2]);
					col=Number(id_str[3]);
					
					name=$(this).attr("name");
					left_right=name.split('_');
					v_left=left_right[0];
					v_right=left_right[1];
					if($(this).hasClass("active"))
					{
						//check is near seat
						
						var seat_no=$(".seat .selected").length+getOrderSeatQty();
						if(seat_no>=$("#max_order_qty").val())
						{
							//alert("<{$LANG.choose_seat.only_choose}>"+$("#max_order_qty").val()+"<{$LANG.choose_seat.zhang}>");
							$("#select_tips").text("<{$LANG.choose_seat.only_choose}>"+$("#max_order_qty").val()+"<{$LANG.choose_seat.zhang}>");
							return;
						}
						
						
						is_near=false;
						 
						$.each($(".seat .selected"),function() {
							if(is_near==false)
							{
								name_str=$(this).attr("name").split('_');
								left=Number(name_str[0]);
								right=Number(name_str[1]);
								if(left==seat_id||seat_id==right)
								{
									is_near=true;
								}
							}
						});
						
						
						
						//selected this seat
						if(is_near==false)
						{
							$(".seat .selected").addClass("active").removeClass("selected");
						}
						$(this).addClass("selected").removeClass("active");
					}
					else if($(this).hasClass("selected"))
					{
						is_near=0;
						$.each($(".seat .selected"),function() {
							if(is_near==0)
							{
								id_str=$(this).attr("id").split('_');
								id=Number(id_str[1]);
								if(id==v_left)
								{
									is_near=1;
								}
								
							}
						});
						if(is_near==1)
						{
							$.each($(".seat .selected"),function() {
								if(is_near==1)
								{
									id_str=$(this).attr("id").split('_');
									id=Number(id_str[1]);
									if(id==v_right)
									{
										is_near=2;
									}
								}
									
							});
						}
						if(is_near<2)
						{
							$(this).addClass("active").removeClass("selected");
						}
					}
			});
		});
		function getOrderSeatQty()
		{
			var k=0;
			$.each($(".area_seat"),function(){
				if($(this).attr("id")!="st_<{$ticket_group_id}>_<{$area_id}>")
				{
					var seat_str_l=$(this).val().split(',');
					for(i=0;i<seat_str_l.length;i++)
					{
						if(seat_str_l[i]!="")
						{
							k++;
						}
					}
				}
			});
			return k++;
		}
	</script>