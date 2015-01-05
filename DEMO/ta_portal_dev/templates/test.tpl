<{include file="$smarty_root/header.tpl" }>


<div id="diao">

</div>
<a id="bian">变</a>


<div id="dialog-modal" style='display:none;'>
	<div id="div_seatplan_load" >
		<img src="<{$rootpath}>/images/loading.gif"/>
	</div>
	<div id="div_seatplan" >
		
	</div>
</div>

<script>
$(document).ready(function(){
	$("#bian").click(function(){
		$("#div_seatplan_load").show();
		$("#div_seatplan").hide();
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
	
	
		$("#div_seatplan").load("save_ordermess.php",{"action":"diao"},function(data){
			$("#div_seatplan_load").hide();
			$("#div_seatplan").show();
		});
	});
});
</script>



<{include file="$smarty_root/footer.tpl" }>