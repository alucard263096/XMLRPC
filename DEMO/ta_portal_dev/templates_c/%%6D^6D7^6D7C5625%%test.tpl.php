<?php /* Smarty version 2.6.26, created on 2010-11-05 10:47:59
         compiled from test.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['smarty_root'])."/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>


<div id="diao">

</div>
<a id="bian">变</a>


<div id="dialog-modal" style='display:none;'>
	<div id="div_seatplan_load" >
		<img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/loading.gif"/>
	</div>
	<div id="div_seatplan" >
		
	</div>
</div>

<script>
$(document).ready(function(){
	$("#bian").click(function(){
	
		$("#dialog-modal").dialog({
			modal: true,
			closeText: "close",
			draggable:false,
			resizable:false,
			height:600,
			width:800,
			closeOnEscape:true,
			buttons:{
				"<?php echo $this->_tpl_vars['LANG']['seat_plan']['OK']; ?>
":function(){
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
						$("#as"+id+" .bs").text("<?php echo $this->_tpl_vars['LANG']['choose_seat']['get_seat']; ?>
");
						$("#as"+id+" .bs").load("choose_seat.php?action=getSeatName&seat_list="+seat_str);
					}
					
					
					$("#seat_list").val("");
					$.each($(".area_seat"),function(){
						$("#seat_list").val($("#seat_list").val()+$(this).val());
					});
					
					 $(this).dialog("close");
				},
				"<?php echo $this->_tpl_vars['LANG']['seat_plan']['CANCEL']; ?>
":function(){
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



<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['smarty_root'])."/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>