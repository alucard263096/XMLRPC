<?php /* Smarty version 2.6.26, created on 2010-11-08 13:26:22
         compiled from E:/Apache2.2/htdocs/ta_portal_dev/templates/seatplan/activity_detail.tpl */ ?>

	<table border="0" cellpadding="2" cellspacing="2" width="100%">
		<?php if ($this->_tpl_vars['param_list']['category_id'] == $this->_tpl_vars['movie_category_id']): ?>
		<tr>
			<td  class="info_header"><?php echo $this->_tpl_vars['LANG']['choose_seat']['movie_name']; ?>
:</td>
			<td class="info_highlight"><?php echo $this->_tpl_vars['show_detail']['activity_name']; ?>
</td>
			<td  class="info_header"><?php echo $this->_tpl_vars['LANG']['choose_seat']['cinema']; ?>
:</td>
			<td class="info_highlight"><?php echo $this->_tpl_vars['show_detail']['venue_name']; ?>
&nbsp;&nbsp;&nbsp;&nbsp;<span class="info_text"><?php echo $this->_tpl_vars['show_detail']['address']; ?>
</span></td>
		</tr>
		<?php else: ?>
			<td  class="info_header"><?php echo $this->_tpl_vars['LANG']['choose_seat']['show_name']; ?>
:</td>
			<td class="info_highlight"><?php echo $this->_tpl_vars['show_detail']['activity_name']; ?>
</td>
			<td  class="info_header"><?php echo $this->_tpl_vars['LANG']['choose_seat']['venue']; ?>
:</td>
			<td class="info_highlight"><?php echo $this->_tpl_vars['show_detail']['venue_name']; ?>
</td>
		<?php endif; ?>
		<tr>
			<td class="info_header"><?php echo $this->_tpl_vars['LANG']['choose_seat']['show_time']; ?>
:</td>
			<td class="info_text"><?php echo $this->_tpl_vars['show_detail']['show_date_str']; ?>
</td>
			<?php if ($this->_tpl_vars['param_list']['category_id'] == $this->_tpl_vars['movie_category_id']): ?>
			<td class="info_header"><?php echo $this->_tpl_vars['LANG']['choose_seat']['yard']; ?>
:</td>
			<td class="info_text"><?php echo $this->_tpl_vars['show_detail']['house_name']; ?>
</td>
			<?php endif; ?>
		</tr>
		<tr id='seat_tr'>
			<td  class="info_header" ><?php echo $this->_tpl_vars['LANG']['choose_seat']['seat']; ?>
:</td>
			<td>
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
							<td><?php if ($this->_tpl_vars['rrs']['display'] == 1): ?><?php echo $this->_tpl_vars['rrs']['name']; ?>
:<?php endif; ?></td><td class='bs'></td>
						</tr>
						<?php endforeach; endif; unset($_from); ?>
					<?php endforeach; endif; unset($_from); ?>
				</table>
			</td>
		</tr>
	</table>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['smarty_root'])."/seatplan/login_js.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>