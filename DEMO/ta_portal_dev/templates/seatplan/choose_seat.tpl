<{include file="$smarty_root/header.tpl" }>
<link type="text/css" href="<{$rootpath}>/css/accordion_customer_theme.css" rel="stylesheet" />
<link type="text/css" href="<{$rootpath}>/css/seat_plan_style.css" rel="stylesheet" />
<script language="javascript"  type="text/javascript"   src="<{$rootpath}>/js/showcase.js"></script>
<script language="javascript"  type="text/javascript"   src="<{$rootpath}>/js/popup_layer.js"></script>
<script language="javascript"  type="text/javascript"   src="<{$rootpath}>/js/jquery.watermark.js"></script>
<link href="<{$rootpath}>/css/startcss.css" rel="stylesheet" type="text/css" />
<style>

.seat
{
	position: absolute;
	background: red;
}
.seat div{
	position: absolute;
	display: block;
	width: 23px;
	height: 24px;
}


.seat .active{
	background-image: url(../images/available_seat.jpg);
	background-repeat: no-repeat;
	background-position: center;
	cursor: pointer;
}
.seat .aisle{
	padding: 6px;
}
.seat .selected{
	background-image: url(../images/selected_seat.jpg);
	background-repeat: no-repeat;
	background-position: center;
	cursor: pointer;
}
.seat .hold{
	background-image: url(../images/hold_seat.jpg);
	background-repeat: no-repeat;
	background-position: center;
}
.seat .sold{
	background-image: url(../images/sold_seat.jpg);
	background-repeat: no-repeat;
	background-position: center;
}
.seat .disabled{
	background-image: url(../images/disabled_seat.jpg);
	background-repeat: no-repeat;
	background-position: center;
}
</style>
<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
<tr><td>
<div>
	<{include file="$smarty_root/seatplan/activity_detail.tpl" }>
	<div class='seat_status' align='left'>
		<div ><img src="<{$rootpath}>/images/available_seat.jpg" alt="" /></div><div class='tips'><{$LANG.choose_seat.selectable_seat}></div>
		<div ><img src="<{$rootpath}>/images/selected_seat.jpg" alt="" /></div><div class='tips'><{$LANG.choose_seat.selected_seat}></div>
		<div ><img src="<{$rootpath}>/images/sold_seat.jpg" alt="" /></div><div class='tips'><{$LANG.choose_seat.selling_seat}></div>
		<div ><img src="<{$rootpath}>/images/hold_seat.jpg" alt="" /></div><div class='tips'><{$LANG.choose_seat.processing_seat}></div>
		<div ><img src="<{$rootpath}>/images/disabled_seat.jpg" alt="" /></div><div class='tips'><{$LANG.choose_seat.wheelchair_seat}></div>
	</div>

	<div class="screen_center"><img src="<{$rootpath}>/images/spacer.gif" height="40" width="1" align="middle"><{$LANG.choose_seat.shielding}></div>
	<div class="panel" style="height:<{$max_row*34}>px" >
		<div class="seat">
			<{foreach from=$seat_plan item=rs}>
				<div style="top:<{$rs.row*$seat_size}>px;left:<{$rs.col*$seat_size+$start_col-$seat_size}>px;" 
					<{if $rs.display_type=='D'}>class='disabled'
					<{elseif $rs.display_type=='C' }>class='aisle'
					<{elseif $rs.display_type=='S' }>
						<{if $rs.is_active == 0}>class='hold'
						<{else}>
							<{if $rs.status =='S'}>class='sold'
							<{elseif $rs.status=='P' }>class='hold'
							<{elseif $rs.status=='R' }>class='hold'
							<{else}>class='seat_id active'
							<{/if}>
						<{/if}>
					<{elseif $rs.display_type=='D' }>class='disabled'
					<{/if}>
	 				<{if $rs.display_type=='S'}>id="seat_<{$rs.id}>_<{$rs.row}>_<{$rs.col}>"<{/if}> >
	 				<{if $rs.display_type=='C'}><{$rs.row_name}>
	 				<{elseif  $rs.display_type!='D'}><div class="seat_name"><{$rs.col_name}></div>
	 				<{/if}>
	 			</div>
			<{/foreach}>
		</div>
	</div>
	<br/>
	<input id="submit_seat" type="button" class="confirm_button value_gray" />
	<span id="errorMsg" class="errorMsg"></span>
</div>
</td></tr>
</table>

<{include file="$smarty_root/seatplan/login_js.tpl" }>
	
<script type="text/javascript">
	$(document).ready(function() {
		$('#javascripts').load("choose_seat.php", {action:"loadJs"});
	});
</script>

<{include file="$smarty_root/footer.tpl" }>