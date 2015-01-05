<table width="960" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="358" class="shoppingcartable_nornal2"><span class="textbold"><{$LANG.order_pay.commodity_describe}></span></td>
                    <td width="94" align="center" class="shoppingcartable_nornal"><span class="textbold"><{$LANG.order_pay.category}></span></td>
                    <td width="94" align="center" class="shoppingcartable_nornal"><span class="textbold"><{$LANG.order_pay.fare}></span></td>
                    <td width="94" align="center" class="shoppingcartable_nornal"><span class="textbold"><{$LANG.order_pay.fee}></span></td>
                    <td width="94" align="center" class="shoppingcartable_nornal"><span class="textbold"><{$LANG.order_pay.number}></span></td>
                    <td width="94" align="center" class="shoppingcartable_nornal"><span class="textbold"><{$LANG.order_pay.small_statistics}></span></td>
                  </tr>
                  <tr>
                    <td class="shoppingcartable_nornal" rowspan='<{$ticket_type_count}>' valign="top">
	                  	 <table>
							<tr>
								<td>
									<{$show_detail.activity_name}>
									<br>
									<{$show_detail.venue_name}>
								</td>
							</tr>
							<tr>
								<td>
									<{$show_detail.show_date_str}>
									&nbsp;&nbsp;
									<{$show_detail.house_name}><{$LANG.order_pay.yard}>
								</td>
							</tr>
							<tr>
								<td><{$LANG.order_pay.selected_seat}> <{$seat_count}><{$LANG.order_pay.seats}></td>
							</tr>
							<tr style='display:none;'>
								<td>
									<{foreach item=seat_ticket_group_ticket_type from=$seat_ticket_group_ticket_type_list}>
					                	<{$seat_ticket_group_ticket_type.row_name}><{$LANG.order_pay.row}><{$seat_ticket_group_ticket_type.col_name}><{$LANG.order_pay.seat}>&nbsp;
								    <{/foreach}>
									<input type="hidden" id="moneySum" value="<{$seat_count}>"/>
								</td>
							</tr>
						</table>
                    </td>
                     <{foreach from=$ticket_group_ticket_type_list.0.ticket_type_details item=ticket_type_details}>
                     <{if $ticket_type_details.is_default == 1}>
						<td align="center" class="shoppingcartable_nornal shoppingcartable_nornal_padding_3">
							<{$ticket_type_details.short_name}>
						</td>
						<td align="center" class="shoppingcartable_nornal shoppingcartable_nornal_padding_3">
							<{if $param_list.member_id == 0}>
							  <{$ticket_type_details.symbol}><{$ticket_type_details.price}>
							  <input type="hidden" id="m<{$ticket_type_details.ticket_type_id}>" class="qq value_gray" value="<{$ticket_type_details.price}>">
							<{else}>
							  <{$ticket_type_details.symbol}><{$ticket_type_details.member_price}>
							  <input type="hidden" id="m<{$ticket_type_details.ticket_type_id}>" class="qq value_gray" value="<{$ticket_type_details.member_price}>">
							<{/if}>
						</td>
						<td align="center" class="shoppingcartable_nornal shoppingcartable_nornal_padding_3">
							<{$ticket_type_details.symbol}><{$ticket_type_details.fee}>
							<input type="hidden" id="f<{$ticket_type_details.ticket_type_id}>" class="qq value_gray" value="<{$ticket_type_details.fee}>">
						</td>
						<td  class="shoppingcartable_nornal shoppingcartable_nornal_padding_3" align="center">
							<input type="text" class="text_vanish qq value_gray"  style="width:15px" id="n<{$ticket_type_details.ticket_type_id}>" readonly="true" value="<{$seat_count}>">
						</td>
						<td align="center" class="shoppingcartable_nornal shoppingcartable_nornal_padding_3">
							<{$ticket_type_details.symbol}><input type="text" class="text_vanish qq value_gray"  style="width:30px" id="s<{$ticket_type_details.ticket_type_id}>" readonly="true" value="0">
						</td>
                     <{/if}>
                     <{/foreach}>
                  </tr>
                  <{foreach from=$ticket_group_ticket_type_list.0.ticket_type_details item=ticket_type_details}>
                  <{if $ticket_type_details.is_default <> 1}>
					<tr>
						<td align="center" class="shoppingcartable_nornal shoppingcartable_nornal_padding_3">
							<{$ticket_type_details.short_name}>
						</td>
						<td align="center" class="shoppingcartable_nornal shoppingcartable_nornal_padding_3">
							<{if $param_list.member_id == 0}>
							  <{$ticket_type_details.symbol}><{$ticket_type_details.price}>
							  <input type="hidden" id="m<{$ticket_type_details.ticket_type_id}>" class="qq value_gray" value="<{$ticket_type_details.price}>">
							<{else}>
							  <{$ticket_type_details.symbol}><{$ticket_type_details.member_price}>
							  <input type="hidden" id="m<{$ticket_type_details.ticket_type_id}>" class="qq value_gray" value="<{$ticket_type_details.member_price}>">
							<{/if}>
						</td>
						<td align="center" class="shoppingcartable_nornal shoppingcartable_nornal_padding_3">
							<{$ticket_type_details.symbol}><{$ticket_type_details.fee}>
							<input type="hidden" id="f<{$ticket_type_details.ticket_type_id}>" class="qq value_gray" value="<{$ticket_type_details.fee}>">
						</td>
						<td class="shoppingcartable_nornal shoppingcartable_nornal_padding_3">
							<table>
								<tr>
									<td align="center" valign="middle">
									<input type="text" class="text_vanish qq value_gray"  style="width:20px" id="n<{$ticket_type_details.ticket_type_id}>" readonly="true" value="0">
									</td>
									<td align="left" valign="middle">
									<input type="button" value="+" class="value_gray" onClick="sumMoney('n<{$ticket_type_details.ticket_type_id}>')" />
									<input type="button" value="-" class="value_gray" onClick="reduceMoney('n<{$ticket_type_details.ticket_type_id}>')"/>
									</td>
								</tr>
							</table>
						</td>		
						<td align="center" class="shoppingcartable_nornal shoppingcartable_nornal_padding_3">
							<{$ticket_type_details.symbol}><input type="text" class="text_vanish qq value_gray"  style="width:30px" id="s<{$ticket_type_details.ticket_type_id}>" readonly="true" value="0">
						</td>
					</tr>
					<{/if}>
				<{/foreach}>
                </table>