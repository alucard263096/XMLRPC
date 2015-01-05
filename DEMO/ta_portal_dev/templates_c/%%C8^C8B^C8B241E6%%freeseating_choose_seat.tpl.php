<?php /* Smarty version 2.6.26, created on 2010-10-24 03:26:54
         compiled from F:/Apache2.2/htdocs/ta_portal_dev/templates/seatplan/freeseating_choose_seat.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'convertDateTime', 'F:/Apache2.2/htdocs/ta_portal_dev/templates/seatplan/freeseating_choose_seat.tpl', 71, false),)), $this); ?>
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
<link href="<?php echo $this->_tpl_vars['rootpath']; ?>
/css/startcss.css" rel="stylesheet" type="text/css" />
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
							<table border="0" cellspacing="0" cellpadding="0">
								<tr>
									<?php $_from = $this->_tpl_vars['show_detail']['ticket_type_details']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['rs']):
?>
									<?php if ($this->_tpl_vars['rs']['remain_ticket'] > 0): ?>
									<td>
										<input type='radio' name='taggcc' class='on_active' value='<?php echo $this->_tpl_vars['rs']['ticket_group_id']; ?>
' />
									</td>
									<td>
										<?php echo $this->_tpl_vars['rs']['symbol']; ?>
<?php echo $this->_tpl_vars['rs']['price']; ?>

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
					<tr class="cpf_show">
						<td>
						<?php echo $this->_tpl_vars['LANG']['choose_seat']['ticket_num']; ?>
:
						</td>
						<td>
						<input class='quantity' style='width:30px' maxlength=2 type='text' id='ticket_count' value='1' />
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
</td>
</tr>
</table>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['smarty_root'])."/seatplan/login_js.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	
<script>
var module='free';
$(document).ready(function(){
	$("#how_to_get_more_ticket").hide();
	//alert($(".on_active").length);
	if($(".on_active").length<=0)
	{
		$(".cpf_show").hide();
		$("#how_to_get_more_ticket").show();
		$("#seat_tr").hide();
	}
	else
	{
		$("#seat_tr").show();
	}
	$('#javascripts').load("choose_seat.php", {action:"loadJs"});
	$(".on_active").click(function(){
		$(".on_active").attr("bordercolor","black");
		$("#ticket_group_id").val($(this).val());
		$(this).attr("bordercolor","blue");
	});
	$("#price_td .on_active:first").click();
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