<{include file="$smarty_root/header.tpl" }>
<div id="shoppingcart">
<{foreach from=$show item=showrs}>
<div class='show_div' id='div_<{$showrs.order_id}>'  style='padding-top:25px;background:#eeeeee;'>
<div class='show_title'><{$showrs.activity}>--<{$showrs.venue}>   <{$showrs.show_date_str}></div>
<table id='table_<{$showrs.show_id}>' class='table_class'>
	<tr>
		<td></td>
		<td></td>
		<td rowspan='<{$showrs.ticket_group_count}>'>
		<{$LANG.shopping.total}>:<span id='order_total_amount_<{$showrs.show_id}>'></span>
		</td>
		<td rowspan='<{$showrs.ticket_group_count}>'>
		<input class='remove_order' id='remove_<{$showrs.order_id}>' type='button' value='<{$LANG.shopping.delete}>' />
		</td>
	</tr>
	<{foreach from=$showrs.ticket_group item=tgrs}>
	<tr valign='middle' class='ticket_group_tr' >
		<td>
			<{$tgrs.symbol}><span class='amount'><{$tgrs.price}></span> x <{$tgrs.ticket_count}><{$LANG.shopping.piece}>
		</td>
		<td>
			<table>
				<{if $tgrs.ticket_option_count>1 }>
				<{foreach from=$tgrs.ticket_detail item=ttrs}>
				<tr>
					<td>
						<select id='ticket_<{$ttrs.ticket_id}>' class='ticket_ddl'>
						<{foreach from=$tgrs.ticket_option item=ttos}>
						<option value='<{$ttos.ticket_type_id}>' <{if $ttos.ticket_type_id==$ttrs.ticket_type_id}>selected<{/if}> >
						<{$ttos.symbol}><span class='amount'><{$ttos.price}></span><{$ttos.long_name}>
						<{if $ttos.fee>0 }> + <{$ttos.symbol}><span class='amount'><{$ttos.fee}></span><{$LANG.shopping.handling_charge}><{/if}>
						</option>
						<{/foreach}>
						</select>
					</td>
					<td><{if $showrs.st_code=='SS'}><{$ttrs.seat_name}><{/if}></td>
				</tr>
				<{/foreach}>
				<{else}>
				<tr>
					<td>
					<{foreach from=$tgrs.ticket_option item=ttos}>
						<{$ttos.symbol}><span class='amount'><{$ttos.price}></span><{$ttos.long_name}>
						<{if $ttos.fee>0 }> + <{$ttos.symbol}><span class='amount'><{$ttos.fee}></span><{$LANG.shopping.handling_charge}><{/if}>
					<{/foreach}>
					</td>
					<td>
					<{foreach from=$tgrs.ticket_detail item=ttrs}>
						<{if $showrs.st_code=='SS'}><{$ttrs.seat_name}><{/if}>
						<{foreach from=$tgrs.ticket_option item=ttos}>
						<input type='hidden' id='ticket_<{$ttrs.ticket_id}>' class='ticket_ddl' value='<{$ttos.ticket_type_id}>' />
						<{/foreach}>
					<{/foreach}>
					</td>
				</tr>
				<{/if}>
			</table>
		</td>
	</tr>
	<{/foreach}>
</table>
</div>
<br>
<{/foreach}>
</div>
<div id='total_amount'></div>
<div id='total_amount'><a id='clear_shoppingcart' href='javascript:void(0);'><{$LANG.shopping.clear_shopping_cart}></a></div>
<div><input id='save_ticket_type' type='button' value='<{$LANG.shopping.checkout_now}>' /></div>

<{foreach from=$ticket_option_group item=trs}>
<{foreach from=$trs.ticket_option item=rs}>
<input id='ticket_type_<{$rs.ticket_type_id}>' value="<{$rs.price}>_<{$rs.fee}>_<{$rs.symbol}>" type='hidden' />
<{/foreach}>
<{/foreach}>

<script>
$(document).ready(function(){

	summaryPrice();
	
	$(".ticket_ddl").change(function(){
		summaryPrice();
		str=$(this).attr("id").split('_');
		ticket_id=str[1];
		var ticket_type_id=$(this).val();
		
		ticket_list="0,0,0,0,0,"+ticket_type_id+","+ticket_id+";";
		$.post("shoppingcart_action.php",
				{
					"action":"save_ticket_type",
					"ticket_list":ticket_list
				},
				function(data){
					alert("a"+data+"b");
				});
		
		
	});
	
	$(".remove_order").click(function(){
		
		str=$(this).attr("id").split('_');
		order_id=str[1];
		$.post("shoppingcart_action.php",
				{
					"action":"remove_order",
					"order_id":order_id
				},
				function(data){
					if(data=="Y")
					{
						$("#div_"+order_id).remove();
						if($("show_div").length==0)
						{
							window.location.href='shoppingcart.php';
						}
					}
					else
					{
						alert("remove error");
					}
				});
		
	});
	
	$("#save_ticket_type").click(function(){
		window.location.href='delivery.php';
	});
	
	$("#clear_shoppingcart").click(function(){
		$.post("shoppingcart_action.php",
				{
					"action":"clear_shoppingcart"
				},
				function(data){
					if(data=="Y")
					{
						window.location.href='shoppingcart.php';
					}
					else
					{
						alert("clear error");
					}
				});
	});
	
});

function summaryPrice()
{
	totle_amount_v=0;
	
	$.each($(".table_class"),function(){
	
		str=$(this).attr("id").split('_');
		show_id=str[1];
		amount=0;
		symbol="";
		
		$.each($("#table_"+show_id+" .ticket_ddl"),function(){
			var ticket_type_id=$(this).val();
			amount_str=$("#ticket_type_"+ticket_type_id).val().split('_');
			price=Number(amount_str[0]);
			symbol=amount_str[2];
			fee=Number(amount_str[1]);
			amount+=price+fee;
		});
		
		totle_amount_v+=amount;
		$("#order_total_amount_"+show_id).html(symbol+outputMoney(amount));
		
	});
	$("#total_amount").html(symbol+outputMoney(totle_amount_v));
}
</script>

<{include file="$smarty_root/footer.tpl" }>