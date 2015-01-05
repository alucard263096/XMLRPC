<?php /* Smarty version 2.6.26, created on 2010-10-24 12:26:11
         compiled from F:/Apache2.2/htdocs/ta_portal_dev/templates/payment/order_pay_payment_info.tpl */ ?>
<div style="width:940px;"> 
	 		<div id="container-1">
		            <ul class="tabs-nav">
		            	<?php $_from = $this->_tpl_vars['payment_type']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['rs']):
?>
		            		<li <?php if ($this->_tpl_vars['rs']['default'] == 'Y'): ?> class="tabs-selected" <?php endif; ?>><a href="#fragment-<?php echo $this->_tpl_vars['rs']['type']; ?>
" <?php if ($this->_tpl_vars['rs']['default'] == 'Y'): ?> class="ctabs-selected" <?php endif; ?> onClick="setPaymentType('<?php echo $this->_tpl_vars['rs']['type']; ?>
')">
		            			<span><?php echo $this->_tpl_vars['rs']['name']; ?>
</span>
		            			<?php if ($this->_tpl_vars['rs']['logo'] != ''): ?><img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/<?php echo $this->_tpl_vars['rs']['logo']; ?>
" width="37" height="25" border="0"><?php endif; ?>
		            			</a>
		            		</li>
		            	<?php endforeach; endif; unset($_from); ?>
		            	<!--
		                <li class="tabs-selected"><a href="#fragment-1" onClick="setPaymentType('CreditCard')"><span><?php echo $this->_tpl_vars['LANG']['common']['credit_card']; ?>
</span><img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/movie_icon_pay01.gif" width="37" height="25" border="0"></a></li>
		                <li class=""><a href="#fragment-2" onClick="setPaymentType('DebitCard')"><span><?php echo $this->_tpl_vars['LANG']['common']['debit_card']; ?>
</span><img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/movie_icon_pay01.gif" width="37" height="25" border="0"></a></li>
		                <li class=""><a href="#fragment-3" onClick="setPaymentType('Cash')"><span><?php echo $this->_tpl_vars['LANG']['common']['cash']; ?>
</span><img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/movie_icon_pay01.gif" width="37" height="25" border="0"></a></li>
		                <li class=""><a href="#fragment-4" onClick="setPaymentType('MemberCard')"><span><?php echo $this->_tpl_vars['LANG']['common']['membership_card']; ?>
</span><img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/movie_icon_pay01.gif" width="37" height="25" border="0"></a></li>
		                -->
		                <input type="hidden" id="paymentType" value="CreditCard"/>
		            </ul>
		            <?php $_from = $this->_tpl_vars['payment_type']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['rs']):
?>
		            <div id="fragment-<?php echo $this->_tpl_vars['rs']['type']; ?>
" class="tabs-container tabs-hide" style="margin:0 auto;"  >
		            	<?php if ($this->_tpl_vars['rs']['type'] == 'CreditCard'): ?>
		            	<table cellpadding="0" cellspacing="0">
		            		<tr>
		            			<td align='left' >
				            	<table valign="top" border="0"  cellpadding="0" cellspacing="0">
				            		<tr>
				            			<td width='60px'></td>
				            		</tr>
									<tr>
										<td >
											<?php echo $this->_tpl_vars['LANG']['order_pay']['cardType']; ?>
:
										</td>
										<td >
											<select id="cardType" class="value_gray">
												<option value="VS">VISA</option>
												<option value="MS">Master Card</option>
											</select>
										</td>
										<td width='6px'>
										</td>
										<td  >
											<?php echo $this->_tpl_vars['LANG']['order_pay']['holder_name']; ?>
:
										</td>
										<td  colspan='2'>
											<input id="holder_name" type="text" maxlength="20" style="width: 200px;" class="value_gray"/>
										</td>
									</tr>
								</table>
								</td>
							</tr>
							<tr>
								<td align='left' > 
					            	<table valign="top" border="0"   cellpadding="0" cellspacing="0">
					            		<tr>
					            			<td width='60px'></td>
					            		</tr>
										<tr>
											<td  >
												<?php echo $this->_tpl_vars['LANG']['order_pay']['ccNo']; ?>
:
											</td>
											<td colspan=2 >
												<input id="ccNo" type="text" maxlength="20" class="quantity"  style="width: 200px;" class="value_gray"/>
											</td>
											<td width='6px'>
											</td>
											<td  >
												<?php echo $this->_tpl_vars['LANG']['order_pay']['security_code']; ?>
:
											</td>
											<td >
												<input id="securityCode" type="text" maxlength="5" style="width: 50px;" class="value_gray"/>
											</td>
										</tr>
									</table>
								</td>
							</tr>
							<tr>
								<td align='left' > 
					            	<table valign="top" border="0"   cellpadding="0" cellspacing="0">
					            		<tr>
					            			<td width='60px'></td>
					            		</tr>
										<tr>
											<td>
												<?php echo $this->_tpl_vars['LANG']['order_pay']['exp_date']; ?>
:
											</td>
											<td>
												<select id="expMonth" class="value_gray">
													<option value="1">01</option>
													<option value="2">02</option>
													<option value="3">03</option>
													<option value="4">04</option>
													<option value="5">05</option>
													<option value="6">06</option>
													<option value="7">07</option>
													<option value="8">08</option>
													<option value="9">09</option>
													<option value="10">10</option>
													<option value="11">11</option>
													<option value="12">12</option>
												</select>/
												<select id="expYear" class="value_gray">
													<option value="2010">2010</option>
													<option value="2011">2011</option>
													<option value="2012">2012</option>
													<option value="2013">2013</option>
													<option value="2014">2014</option>
													<option value="2015">2015</option>
													<option value="2016">2016</option>
													<option value="2017">2017</option>
													<option value="2018">2018</option>
													<option value="2019">2019</option>
													<option value="2020">2020</option>
													<option value="2021">2021</option>
													<option value="2022">2022</option>
													<option value="2023">2023</option>
													<option value="2024">2024</option>
												</select>
											</td>
										</tr>
									</table>
								</td>
							</tr>
						</table>
						<div id="errorDiv" class="errorMsg">
		            	</div>
		            	<?php elseif ($this->_tpl_vars['rs']['type'] == 'DebitCard'): ?>
		            	
							<table  valign="top" border="0" align="left" cellpadding="0" cellspacing="0">
								<tr>
									<td>
										<?php echo $this->_tpl_vars['LANG']['common']['debit_card']; ?>
:
									</td>
								</tr>	
							</table>
		            	<?php elseif ($this->_tpl_vars['rs']['type'] == 'Cash'): ?>
							<table  valign="top" border="0" align="left" cellpadding="0" cellspacing="0">
								<tr>
									<td>
										<?php echo $this->_tpl_vars['LANG']['common']['cash']; ?>
:
									</td>
								</tr>
							</table>
		            	
		            	<?php elseif ($this->_tpl_vars['rs']['type'] == 'MemberCard'): ?>
							<table valign="top" border="0" align="left" cellpadding="0" cellspacing="0">
								<tr>
									<td>
										<?php echo $this->_tpl_vars['LANG']['common']['membership_card']; ?>
:
									</td>
								</tr>	
							</table>
		            	<?php endif; ?>
		            </div>
		            <?php endforeach; endif; unset($_from); ?>
	        </div> 
	 	</div>