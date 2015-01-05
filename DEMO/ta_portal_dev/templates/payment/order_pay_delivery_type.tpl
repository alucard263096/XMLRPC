<table width='100%'>
	<tr>
		<td>
		<{foreach from=$payment_type item=rs}>
			<div id='delivery_tab_<{$rs.type}>' class='delivery_tab'>
				<table>
					<tr>
						<td>
							<table>
								<tr>
								<{foreach from=$rs.delivery_type item=rss}>
								<{foreach from=$all_delivery_list item=all_delivery}>
									<{if $rss.id==$all_delivery.delivery_type_id}>
									<td>
									<input type="radio" name="delivery" value="<{$all_delivery.delivery_type_id}>" 
									id='delivery_<{$rs.type}>_<{$all_delivery.delivery_type_id}>'
									onClick="showDiv('<{$all_delivery.delivery_type_id}>','<{$all_delivery.fee}>','<{$all_delivery.amount_rate}>')" 
									class='delivery_radio <{if $rss.select=="Y"}>delivery_check<{/if}>'
									<{if $rss.select=="Y"}>class='delivery_check' checked <{/if}>/>
									</td>
									<td>
										<{$all_delivery.delivery_name}>
										&nbsp;(<{$symbol}><{if $all_delivery.fee ==''}>0<{else}><{$all_delivery.fee}><{/if}>
										<{if $all_delivery.amount_rate ==''}>
										<{elseif $all_delivery.amount_rate ==0}>
										<{else}> + <{$LANG.order_pay.payment_rate}><{rateFormat rate=$all_delivery.amount_rate}>%<{/if}>)
									</td>
									<{/if}>
								<{/foreach}>
								<{/foreach}>
								</tr>
							</table>
						</td>
					</tr>
				</table>
			</div>
		<{/foreach}>
		</td>
		<td align='right'>
			 <{$LANG.order_pay.total_money}>:<span class="movietextbold"><{$symbol}><input type="text" id="money" class="text_vanish movietextbold" style="width:30px;color:#C21759;font-weight:bold;" readonly="true"/></span>
		</td>
	</tr>
</table>
				<input type="hidden" id="moneyTemp" style="width:30px"/>
				<input type="hidden" id="moneyId" />
				<input type="hidden" value="1" id="deliveryValue"/>