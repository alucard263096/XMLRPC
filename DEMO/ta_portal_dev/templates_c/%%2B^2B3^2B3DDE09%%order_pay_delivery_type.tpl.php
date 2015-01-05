<?php /* Smarty version 2.6.26, created on 2010-11-05 06:18:49
         compiled from E:/Apache2.2/htdocs/ta_portal_dev/templates/payment/order_pay_delivery_type.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'rateFormat', 'E:/Apache2.2/htdocs/ta_portal_dev/templates/payment/order_pay_delivery_type.tpl', 26, false),)), $this); ?>
<table width='100%'>
	<tr>
		<td>
		<?php $_from = $this->_tpl_vars['payment_type']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['rs']):
?>
			<div id='delivery_tab_<?php echo $this->_tpl_vars['rs']['type']; ?>
' class='delivery_tab'>
				<table>
					<tr>
						<td>
							<table>
								<tr>
								<?php $_from = $this->_tpl_vars['rs']['delivery_type']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['rss']):
?>
								<?php $_from = $this->_tpl_vars['all_delivery_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['all_delivery']):
?>
									<?php if ($this->_tpl_vars['rss']['id'] == $this->_tpl_vars['all_delivery']['delivery_type_id']): ?>
									<td>
									<input type="radio" name="delivery" value="<?php echo $this->_tpl_vars['all_delivery']['delivery_type_id']; ?>
" 
									id='delivery_<?php echo $this->_tpl_vars['rs']['type']; ?>
_<?php echo $this->_tpl_vars['all_delivery']['delivery_type_id']; ?>
'
									onClick="showDiv('<?php echo $this->_tpl_vars['all_delivery']['delivery_type_id']; ?>
','<?php echo $this->_tpl_vars['all_delivery']['fee']; ?>
','<?php echo $this->_tpl_vars['all_delivery']['amount_rate']; ?>
')" 
									class='delivery_radio <?php if ($this->_tpl_vars['rss']['select'] == 'Y'): ?>delivery_check<?php endif; ?>'
									<?php if ($this->_tpl_vars['rss']['select'] == 'Y'): ?>class='delivery_check' checked <?php endif; ?>/>
									</td>
									<td>
										<?php echo $this->_tpl_vars['all_delivery']['delivery_name']; ?>

										&nbsp;(<?php echo $this->_tpl_vars['symbol']; ?>
<?php if ($this->_tpl_vars['all_delivery']['fee'] == ''): ?>0<?php else: ?><?php echo $this->_tpl_vars['all_delivery']['fee']; ?>
<?php endif; ?>
										<?php if ($this->_tpl_vars['all_delivery']['amount_rate'] == ''): ?>
										<?php elseif ($this->_tpl_vars['all_delivery']['amount_rate'] == 0): ?>
										<?php else: ?> + <?php echo $this->_tpl_vars['LANG']['order_pay']['payment_rate']; ?>
<?php echo rateFormatSmarty(array('rate' => $this->_tpl_vars['all_delivery']['amount_rate']), $this);?>
%<?php endif; ?>)
									</td>
									<?php endif; ?>
								<?php endforeach; endif; unset($_from); ?>
								<?php endforeach; endif; unset($_from); ?>
								</tr>
							</table>
						</td>
					</tr>
				</table>
			</div>
		<?php endforeach; endif; unset($_from); ?>
		</td>
		<td align='right'>
			 <?php echo $this->_tpl_vars['LANG']['order_pay']['total_money']; ?>
:<span class="movietextbold"><?php echo $this->_tpl_vars['symbol']; ?>
<input type="text" id="money" class="text_vanish movietextbold" style="width:30px;color:#C21759;font-weight:bold;" readonly="true"/></span>
		</td>
	</tr>
</table>
				<input type="hidden" id="moneyTemp" style="width:30px"/>
				<input type="hidden" id="moneyId" />
				<input type="hidden" value="1" id="deliveryValue"/>