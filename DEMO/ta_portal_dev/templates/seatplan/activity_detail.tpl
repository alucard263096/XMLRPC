
	<table border="0" cellpadding="2" cellspacing="2" width="100%">
		<{if $param_list.category_id == $movie_category_id }>
		<tr>
			<td  class="info_header"><{$LANG.choose_seat.movie_name}>:</td>
			<td class="info_highlight"><{$show_detail.activity_name}></td>
			<td  class="info_header"><{$LANG.choose_seat.cinema}>:</td>
			<td class="info_highlight"><{$show_detail.venue_name}>&nbsp;&nbsp;&nbsp;&nbsp;<span class="info_text"><{$show_detail.address}></span></td>
		</tr>
		<{else}>
			<td  class="info_header"><{$LANG.choose_seat.show_name}>:</td>
			<td class="info_highlight"><{$show_detail.activity_name}></td>
			<td  class="info_header"><{$LANG.choose_seat.venue}>:</td>
			<td class="info_highlight"><{$show_detail.venue_name}></td>
		<{/if}>
		<tr>
			<td class="info_header"><{$LANG.choose_seat.show_time}>:</td>
			<td class="info_text"><{$show_detail.show_date_str}></td>
			<{if $param_list.category_id == $movie_category_id }>
			<td class="info_header"><{$LANG.choose_seat.yard}>:</td>
			<td class="info_text"><{$show_detail.house_name}></td>
			<{/if}>
		</tr>
		<tr id='seat_tr'>
			<td  class="info_header" ><{$LANG.choose_seat.seat}>:</td>
			<td>
				<table>
					<{foreach item=rs from=$show_detail.ticket_type_details}>
						<{foreach item=rrs from=$show_detail.area_coords}>
						<tr id='ast_<{$rs.ticket_group_id}>_<{$rrs.area_id}>' class='ctrl_tr' style='display:none;'>
							<td><{if $rrs.display==1}><{$rrs.name}>:<{/if}></td><td class='bs'></td>
						</tr>
						<{/foreach}>
					<{/foreach}>
				</table>
			</td>
		</tr>
	</table>
<{include file="$smarty_root/seatplan/login_js.tpl" }>
