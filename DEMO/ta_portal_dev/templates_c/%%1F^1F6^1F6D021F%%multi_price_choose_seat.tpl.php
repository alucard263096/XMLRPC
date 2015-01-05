<?php /* Smarty version 2.6.26, created on 2010-11-05 06:18:18
         compiled from E:/Apache2.2/htdocs/ta_portal_dev/templates/seatplan/multi_price_choose_seat.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'convertDateTime', 'E:/Apache2.2/htdocs/ta_portal_dev/templates/seatplan/multi_price_choose_seat.tpl', 74, false),array('function', 'getImagePathByHouse', 'E:/Apache2.2/htdocs/ta_portal_dev/templates/seatplan/multi_price_choose_seat.tpl', 181, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['smarty_root'])."/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<link type="text/css" href="<?php echo $this->_tpl_vars['rootpath']; ?>
/css/accordion_customer_theme.css" rel="stylesheet" />
<link type="text/css" href="<?php echo $this->_tpl_vars['rootpath']; ?>
/css/seat_plan_style.css" rel="stylesheet" />
<script language="javascript"  type="text/javascript"   src="<?php echo $this->_tpl_vars['rootpath']; ?>
/js/showcase.js"></script>
<script language="javascript"  type="text/javascript"   src="<?php echo $this->_tpl_vars['rootpath']; ?>
/js/popup_layer.js"></script>
<script language="javascript"  type="text/javascript"   src="<?php echo $this->_tpl_vars['rootpath']; ?>
/js/jquery.watermark.js"></script>
<script language="javascript"  type="text/javascript"   src="<?php echo $this->_tpl_vars['rootpath']; ?>
/js/jquery.maphilight.min.js"></script>
<link href="<?php echo $this->_tpl_vars['rootpath']; ?>
/css/startcss.css" rel="stylesheet" type="text/css" />

<input type='hidden' id='max_order_qty' value='<?php echo $this->_tpl_vars['show_detail']['max_order_qty']; ?>
' />
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
								<?php if ($this->_tpl_vars['movie']['poster'] <> ''): ?>
									<div class='choose_img_bg'>
										<img src="<?php echo $this->_tpl_vars['resource_path']; ?>
<?php echo $this->_tpl_vars['movie']['poster']; ?>
" border="0"/>
									</div>
						  	 	<?php endif; ?>  
							</td>
							<td width="20"><img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/spacer.gif" width="20" height="1"></td>
							<td width="93" valign="top">
								
							</td>
						</tr>
					</table>
				</td>
				<td width="630" valign="middle" align='left' >
				<table width="630" border="0" cellspacing="0" cellpadding="0">
					<tr>
						<td width="80"  ><img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/spacer.gif" width="80" height="1"></td>
						<td width="180" ><img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/spacer.gif" width="180" height="1"></td>
						<td width="370" ><img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/spacer.gif" width="370" height="1"></td>
					</tr>
					<tr>
						<td colspan="3">
						<a href="detail.php?city_id=<?php echo $this->_tpl_vars['movie']['city_id']; ?>
&activity_id=<?php echo $this->_tpl_vars['movie']['activity_id']; ?>
" ><span  class="showname_20px"><?php echo $this->_tpl_vars['movie']['name']; ?>
</span></a>
						</td>
					</tr>
					<tr class="labelFont">
						<td >
							<?php echo $this->_tpl_vars['LANG']['hot_movie']['city']; ?>

						</td>
						<td colspan="2">
							<?php $_from = $this->_tpl_vars['movie']['venue_details']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['venue_item']):
?>
								<?php echo $this->_tpl_vars['venue_item']['city_name']; ?>

							<?php endforeach; endif; unset($_from); ?>
						</td>
					</tr>
					<tr class="labelFont">
						<td >
							<?php echo $this->_tpl_vars['LANG']['hot_movie']['venue']; ?>

						</td>
						<td colspan="2">
							<?php $_from = $this->_tpl_vars['movie']['venue_details']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['venue_item']):
?>
								<?php echo $this->_tpl_vars['venue_item']['venue_name']; ?>

							<?php endforeach; endif; unset($_from); ?>
						</td>
					</tr>
					<tr class="labelFont">
						<td class='result_showdate' id='movie_s_<?php echo $this->_tpl_vars['movie']['activity_id']; ?>
'>
							<?php echo $this->_tpl_vars['LANG']['show_detail']['show_date']; ?>

						</td>
						<td colspan="2">
							<select name='show_id'  id='movie_d_<?php echo $this->_tpl_vars['movie']['activity_id']; ?>
' class='show_ddl' >
							<?php $_from = $this->_tpl_vars['movie']['venue_details']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['venue_item']):
?>
							 <?php $_from = $this->_tpl_vars['venue_item']['schedule_details']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['schedule_details']):
?>
			                       <option <?php if ($this->_tpl_vars['schedule_details']['show_id'] == $this->_tpl_vars['param_list']['show_id']): ?>selected<?php endif; ?> value='<?php echo $this->_tpl_vars['schedule_details']['show_id']; ?>
'><?php echo convertDateTimeSmarty(array('lang' => $this->_tpl_vars['lang'],'date' => $this->_tpl_vars['schedule_details']['show_date']), $this);?>
</option>
			                  <?php endforeach; endif; unset($_from); ?>
			                <?php endforeach; endif; unset($_from); ?>
			                </select>
						</td>
					</tr>
					<tr>
						<td colspan="3">
							<img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/spacer.gif" width='1'  height="5">
						</td>
					</tr>
					<tr class="labelFont">
						<td colspan="2">
						</td>
						
					</tr>
					
					<tr class="cpf_show">
						<td>
						<?php echo $this->_tpl_vars['LANG']['choose_seat']['price']; ?>
:
						</td>
						<td id='price_td' colspan='2'>
						
							<?php $_from = $this->_tpl_vars['show_detail']['ticket_type_details']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['rs']):
?>
								<?php $_from = $this->_tpl_vars['show_detail']['area_coords']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['rrs']):
?>
								<input id='st_<?php echo $this->_tpl_vars['rs']['ticket_group_id']; ?>
_<?php echo $this->_tpl_vars['rrs']['area_id']; ?>
' type='hidden' value='' class='area_seat' />
								<?php endforeach; endif; unset($_from); ?>
							<?php endforeach; endif; unset($_from); ?>
							<table border="0" cellspacing="0" cellpadding="0">
								<tr>
									<?php $_from = $this->_tpl_vars['show_detail']['ticket_type_details']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['rs']):
?>
									<?php if ($this->_tpl_vars['rs']['remain_ticket'] > 0): ?>
									<td>
										<input type='radio' name='taggcc' id='tgac_<?php echo $this->_tpl_vars['rs']['ticket_group_id']; ?>
' class='on_active' value='<?php echo $this->_tpl_vars['rs']['ticket_group_id']; ?>
' />
									</td>
									<td>
										<?php echo $this->_tpl_vars['rs']['symbol']; ?>
<?php echo $this->_tpl_vars['rs']['price']; ?>

										
										<map name="imagemap_<?php echo $this->_tpl_vars['rs']['ticket_group_id']; ?>
">
										<?php $_from = $this->_tpl_vars['show_detail']['area_coords']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['rrs']):
?>
											<?php if ($this->_tpl_vars['rrs']['ticket_group_id'] == $this->_tpl_vars['rs']['ticket_group_id']): ?>
											<area href="###" shape="POLYGON" 
											<?php if ($this->_tpl_vars['rrs']['seat_count'] > 0): ?>name='show_id=<?php echo $this->_tpl_vars['show_detail']['show_id']; ?>
&area_id=<?php echo $this->_tpl_vars['rrs']['area_id']; ?>
&ticket_group_id=<?php echo $this->_tpl_vars['rs']['ticket_group_id']; ?>
' id='t_<?php echo $this->_tpl_vars['rs']['ticket_group_id']; ?>
_<?php echo $this->_tpl_vars['rrs']['area_id']; ?>
' class='active_area' 
											<?php else: ?>class='sold_out_area'
											<?php endif; ?>
											coords="<?php echo $this->_tpl_vars['rrs']['coords']; ?>
" title="<?php echo $this->_tpl_vars['rrs']['name']; ?>
" />
											<?php endif; ?>
										<?php endforeach; endif; unset($_from); ?>
										</map>
										
									</td>
									<?php else: ?>
									<td>
										<input type='radio' name='taggcc' disabled=disabled />
									</td>
									<td>
										<span style='text-decoration:line-through;color:red;'><?php echo $this->_tpl_vars['rs']['symbol']; ?>
<?php echo $this->_tpl_vars['rs']['price']; ?>
</span>
									</td>
									<?php endif; ?>
									<?php endforeach; endif; unset($_from); ?>
								</tr>
							</table>
						</td>
					</tr>
					<tr id='seat_tr'>
						<td  class="info_header"  style='color:blue;font-size:25;height:26px'><?php echo $this->_tpl_vars['LANG']['choose_seat']['seat']; ?>
:</td>
						<td colspan='2'>
							<table>
								<?php $_from = $this->_tpl_vars['show_detail']['ticket_type_details']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['rs']):
?>
									<?php $_from = $this->_tpl_vars['show_detail']['area_coords']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['rrs']):
?>
									<tr id='ast_<?php echo $this->_tpl_vars['rs']['ticket_group_id']; ?>
_<?php echo $this->_tpl_vars['rrs']['area_id']; ?>
' class='ctrl_tr' style='display:none;'>
										<td style='color:blue;font-size:25;'><?php if ($this->_tpl_vars['rrs']['display'] == 1): ?><?php echo $this->_tpl_vars['rrs']['name']; ?>
:<?php endif; ?></td><td class='bs' style='color:blue;font-size:25;'></td>
									</tr>
									<?php endforeach; endif; unset($_from); ?>
								<?php endforeach; endif; unset($_from); ?>
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
							<?php echo $this->_tpl_vars['LANG']['how_to_get_more_ticket']; ?>

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
	<img class="map"  border=0 src='<?php echo getImagePathByHouse(array('activity_id' => $this->_tpl_vars['show_detail']['activity_id'],'house_id' => $this->_tpl_vars['show_detail']['house_id'],'show_id' => $this->_tpl_vars['show_detail']['show_id']), $this);?>
' />
	</td>
</tr>
</table>


<div id="dialog-modal" style='display:none;'>
	<div id="div_seatplan_load" >
		<img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/loading.gif"/>
	</div>
	<div id="div_seatplan" >
		
	</div>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['smarty_root'])."/seatplan/login_js.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

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
			if(!confirm("<?php echo $this->_tpl_vars['LANG']['seat_plan']['you_have_1']; ?>
"+$.trim($("#on_active_"+$("#ticket_group_id").val()).text())+"<?php echo $this->_tpl_vars['LANG']['seat_plan']['you_have_2']; ?>
"))
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
			alert(1);
			$('#form1').submit();
		} else {
			$('#errorMsg').html('<?php echo $this->_tpl_vars['LANG']['choose_seat']['please_select_seat']; ?>
');
		}
		
	});
	
	
	$(".show_ddl").change(function(){
		var show_id=$(this).val();
		var str='choose_seat.php?show_id='+show_id;
		window.location.href=str;
	});
});
</script> 
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['smarty_root'])."/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>