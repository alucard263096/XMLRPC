<?php /* Smarty version 2.6.26, created on 2010-11-09 08:49:41
         compiled from E:/Apache2.2/htdocs/ta_portal_dev/templates/seatplan/choose_seat.tpl */ ?>
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
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['smarty_root'])."/seatplan/activity_detail.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<div class='seat_status' align='left'>
		<div ><img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/available_seat.jpg" alt="" /></div><div class='tips'><?php echo $this->_tpl_vars['LANG']['choose_seat']['selectable_seat']; ?>
</div>
		<div ><img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/selected_seat.jpg" alt="" /></div><div class='tips'><?php echo $this->_tpl_vars['LANG']['choose_seat']['selected_seat']; ?>
</div>
		<div ><img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/sold_seat.jpg" alt="" /></div><div class='tips'><?php echo $this->_tpl_vars['LANG']['choose_seat']['selling_seat']; ?>
</div>
		<div ><img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/hold_seat.jpg" alt="" /></div><div class='tips'><?php echo $this->_tpl_vars['LANG']['choose_seat']['processing_seat']; ?>
</div>
		<div ><img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/disabled_seat.jpg" alt="" /></div><div class='tips'><?php echo $this->_tpl_vars['LANG']['choose_seat']['wheelchair_seat']; ?>
</div>
	</div>

	<div class="screen_center"><img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/spacer.gif" height="40" width="1" align="middle"><?php echo $this->_tpl_vars['LANG']['choose_seat']['shielding']; ?>
</div>
	<div class="panel" style="height:<?php echo $this->_tpl_vars['max_row']*34; ?>
px" >
		<div class="seat">
			<?php $_from = $this->_tpl_vars['seat_plan']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['rs']):
?>
				<div style="top:<?php echo $this->_tpl_vars['rs']['row']*$this->_tpl_vars['seat_size']; ?>
px;left:<?php echo $this->_tpl_vars['rs']['col']*$this->_tpl_vars['seat_size']+$this->_tpl_vars['start_col']-$this->_tpl_vars['seat_size']; ?>
px;" 
					<?php if ($this->_tpl_vars['rs']['display_type'] == 'D'): ?>class='disabled'
					<?php elseif ($this->_tpl_vars['rs']['display_type'] == 'C'): ?>class='aisle'
					<?php elseif ($this->_tpl_vars['rs']['display_type'] == 'S'): ?>
						<?php if ($this->_tpl_vars['rs']['is_active'] == 0): ?>class='hold'
						<?php else: ?>
							<?php if ($this->_tpl_vars['rs']['status'] == 'S'): ?>class='sold'
							<?php elseif ($this->_tpl_vars['rs']['status'] == 'P'): ?>class='hold'
							<?php elseif ($this->_tpl_vars['rs']['status'] == 'R'): ?>class='hold'
							<?php else: ?>class='seat_id active'
							<?php endif; ?>
						<?php endif; ?>
					<?php elseif ($this->_tpl_vars['rs']['display_type'] == 'D'): ?>class='disabled'
					<?php endif; ?>
	 				<?php if ($this->_tpl_vars['rs']['display_type'] == 'S'): ?>id="seat_<?php echo $this->_tpl_vars['rs']['id']; ?>
_<?php echo $this->_tpl_vars['rs']['row']; ?>
_<?php echo $this->_tpl_vars['rs']['col']; ?>
"<?php endif; ?> >
	 				<?php if ($this->_tpl_vars['rs']['display_type'] == 'C'): ?><?php echo $this->_tpl_vars['rs']['row_name']; ?>

	 				<?php elseif ($this->_tpl_vars['rs']['display_type'] != 'D'): ?><div class="seat_name"><?php echo $this->_tpl_vars['rs']['col_name']; ?>
</div>
	 				<?php endif; ?>
	 			</div>
			<?php endforeach; endif; unset($_from); ?>
		</div>
	</div>
	<br/>
	<input id="submit_seat" type="button" class="confirm_button value_gray" />
	<span id="errorMsg" class="errorMsg"></span>
</div>
</td></tr>
</table>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['smarty_root'])."/seatplan/login_js.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	
<script type="text/javascript">
	$(document).ready(function() {
		$('#javascripts').load("choose_seat.php", {action:"loadJs"});
	});
</script>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['smarty_root'])."/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>