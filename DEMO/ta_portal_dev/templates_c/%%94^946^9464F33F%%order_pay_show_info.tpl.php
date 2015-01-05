<?php /* Smarty version 2.6.26, created on 2010-10-24 12:26:10
         compiled from F:/Apache2.2/htdocs/ta_portal_dev/templates/payment/order_pay_show_info.tpl */ ?>
<table width="960" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="358" class="shoppingcartable_nornal2"><span class="textbold"><?php echo $this->_tpl_vars['LANG']['order_pay']['commodity_describe']; ?>
</span></td>
                    <td width="94" align="center" class="shoppingcartable_nornal"><span class="textbold"><?php echo $this->_tpl_vars['LANG']['order_pay']['category']; ?>
</span></td>
                    <td width="94" align="center" class="shoppingcartable_nornal"><span class="textbold"><?php echo $this->_tpl_vars['LANG']['order_pay']['fare']; ?>
</span></td>
                    <td width="94" align="center" class="shoppingcartable_nornal"><span class="textbold"><?php echo $this->_tpl_vars['LANG']['order_pay']['fee']; ?>
</span></td>
                    <td width="94" align="center" class="shoppingcartable_nornal"><span class="textbold"><?php echo $this->_tpl_vars['LANG']['order_pay']['number']; ?>
</span></td>
                    <td width="94" align="center" class="shoppingcartable_nornal"><span class="textbold"><?php echo $this->_tpl_vars['LANG']['order_pay']['small_statistics']; ?>
</span></td>
                  </tr>
                  <tr>
                    <td class="shoppingcartable_nornal" rowspan='<?php echo $this->_tpl_vars['ticket_type_count']; ?>
' >
	                  	 <table>
							<tr>
								<td>
									<?php echo $this->_tpl_vars['show_detail']['activity_name']; ?>

									<br>
									<?php echo $this->_tpl_vars['show_detail']['venue_name']; ?>

								</td>
							</tr>
							<tr>
								<td>
									<?php echo $this->_tpl_vars['show_detail']['show_date_str']; ?>

									&nbsp;&nbsp;
									<?php echo $this->_tpl_vars['show_detail']['house_name']; ?>
<?php echo $this->_tpl_vars['LANG']['order_pay']['yard']; ?>

								</td>
							</tr>
							<tr>
								<td><?php echo $this->_tpl_vars['LANG']['order_pay']['selected_seat']; ?>
 <?php echo $this->_tpl_vars['seat_count']; ?>
<?php echo $this->_tpl_vars['LANG']['order_pay']['seats']; ?>
</td>
							</tr>
							<tr style='display:none;'>
								<td>
									<?php $_from = $this->_tpl_vars['seat_ticket_group_ticket_type_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['seat_ticket_group_ticket_type']):
?>
					                	<?php echo $this->_tpl_vars['seat_ticket_group_ticket_type']['row_name']; ?>
<?php echo $this->_tpl_vars['LANG']['order_pay']['row']; ?>
<?php echo $this->_tpl_vars['seat_ticket_group_ticket_type']['col_name']; ?>
<?php echo $this->_tpl_vars['LANG']['order_pay']['seat']; ?>
&nbsp;
								    <?php endforeach; endif; unset($_from); ?>
									<input type="hidden" id="moneySum" value="<?php echo $this->_tpl_vars['seat_count']; ?>
"/>
								</td>
							</tr>
						</table>
                    </td>
                     <?php $_from = $this->_tpl_vars['ticket_group_ticket_type_list']['0']['ticket_type_details']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ticket_type_details']):
?>
                     <?php if ($this->_tpl_vars['ticket_type_details']['is_default'] == 1): ?>
						<td align="center" class="shoppingcartable_nornal shoppingcartable_nornal_padding_3">
							<?php echo $this->_tpl_vars['ticket_type_details']['short_name']; ?>

						</td>
						<td align="center" class="shoppingcartable_nornal shoppingcartable_nornal_padding_3">
							<?php if ($this->_tpl_vars['param_list']['member_id'] == 0): ?>
							  <?php echo $this->_tpl_vars['ticket_type_details']['symbol']; ?>
<?php echo $this->_tpl_vars['ticket_type_details']['price']; ?>

							  <input type="hidden" id="m<?php echo $this->_tpl_vars['ticket_type_details']['ticket_type_id']; ?>
" class="qq value_gray" value="<?php echo $this->_tpl_vars['ticket_type_details']['price']; ?>
">
							<?php else: ?>
							  <?php echo $this->_tpl_vars['ticket_type_details']['symbol']; ?>
<?php echo $this->_tpl_vars['ticket_type_details']['member_price']; ?>

							  <input type="hidden" id="m<?php echo $this->_tpl_vars['ticket_type_details']['ticket_type_id']; ?>
" class="qq value_gray" value="<?php echo $this->_tpl_vars['ticket_type_details']['member_price']; ?>
">
							<?php endif; ?>
						</td>
						<td align="center" class="shoppingcartable_nornal shoppingcartable_nornal_padding_3">
							<?php echo $this->_tpl_vars['ticket_type_details']['symbol']; ?>
<?php echo $this->_tpl_vars['ticket_type_details']['fee']; ?>

							<input type="hidden" id="f<?php echo $this->_tpl_vars['ticket_type_details']['ticket_type_id']; ?>
" class="qq value_gray" value="<?php echo $this->_tpl_vars['ticket_type_details']['fee']; ?>
">
						</td>
						<td  class="shoppingcartable_nornal shoppingcartable_nornal_padding_3" align="center">
							<input type="text" class="text_vanish qq value_gray"  style="width:15px" id="n<?php echo $this->_tpl_vars['ticket_type_details']['ticket_type_id']; ?>
" readonly="true" value="<?php echo $this->_tpl_vars['seat_count']; ?>
">
						</td>
						<td align="center" class="shoppingcartable_nornal shoppingcartable_nornal_padding_3">
							<?php echo $this->_tpl_vars['ticket_type_details']['symbol']; ?>
<input type="text" class="text_vanish qq value_gray"  style="width:30px" id="s<?php echo $this->_tpl_vars['ticket_type_details']['ticket_type_id']; ?>
" readonly="true" value="0">
						</td>
                     <?php endif; ?>
                     <?php endforeach; endif; unset($_from); ?>
                  </tr>
                  <?php $_from = $this->_tpl_vars['ticket_group_ticket_type_list']['0']['ticket_type_details']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ticket_type_details']):
?>
                  <?php if ($this->_tpl_vars['ticket_type_details']['is_default'] <> 1): ?>
					<tr>
						<td align="center" class="shoppingcartable_nornal shoppingcartable_nornal_padding_3">
							<?php echo $this->_tpl_vars['ticket_type_details']['short_name']; ?>

						</td>
						<td align="center" class="shoppingcartable_nornal shoppingcartable_nornal_padding_3">
							<?php if ($this->_tpl_vars['param_list']['member_id'] == 0): ?>
							  <?php echo $this->_tpl_vars['ticket_type_details']['symbol']; ?>
<?php echo $this->_tpl_vars['ticket_type_details']['price']; ?>

							  <input type="hidden" id="m<?php echo $this->_tpl_vars['ticket_type_details']['ticket_type_id']; ?>
" class="qq value_gray" value="<?php echo $this->_tpl_vars['ticket_type_details']['price']; ?>
">
							<?php else: ?>
							  <?php echo $this->_tpl_vars['ticket_type_details']['symbol']; ?>
<?php echo $this->_tpl_vars['ticket_type_details']['member_price']; ?>

							  <input type="hidden" id="m<?php echo $this->_tpl_vars['ticket_type_details']['ticket_type_id']; ?>
" class="qq value_gray" value="<?php echo $this->_tpl_vars['ticket_type_details']['member_price']; ?>
">
							<?php endif; ?>
						</td>
						<td align="center" class="shoppingcartable_nornal shoppingcartable_nornal_padding_3">
							<?php echo $this->_tpl_vars['ticket_type_details']['symbol']; ?>
<?php echo $this->_tpl_vars['ticket_type_details']['fee']; ?>

							<input type="hidden" id="f<?php echo $this->_tpl_vars['ticket_type_details']['ticket_type_id']; ?>
" class="qq value_gray" value="<?php echo $this->_tpl_vars['ticket_type_details']['fee']; ?>
">
						</td>
						<td class="shoppingcartable_nornal shoppingcartable_nornal_padding_3">
							<table>
								<tr>
									<td align="center" valign="middle">
									<input type="text" class="text_vanish qq value_gray"  style="width:20px" id="n<?php echo $this->_tpl_vars['ticket_type_details']['ticket_type_id']; ?>
" readonly="true" value="0">
									</td>
									<td align="left" valign="middle">
									<input type="button" value="+" class="value_gray" onClick="sumMoney('n<?php echo $this->_tpl_vars['ticket_type_details']['ticket_type_id']; ?>
')" />
									<input type="button" value="-" class="value_gray" onClick="reduceMoney('n<?php echo $this->_tpl_vars['ticket_type_details']['ticket_type_id']; ?>
')"/>
									</td>
								</tr>
							</table>
						</td>		
						<td align="center" class="shoppingcartable_nornal shoppingcartable_nornal_padding_3">
							<?php echo $this->_tpl_vars['ticket_type_details']['symbol']; ?>
<input type="text" class="text_vanish qq value_gray"  style="width:30px" id="s<?php echo $this->_tpl_vars['ticket_type_details']['ticket_type_id']; ?>
" readonly="true" value="0">
						</td>
					</tr>
					<?php endif; ?>
				<?php endforeach; endif; unset($_from); ?>
                </table>