<?php /* Smarty version 2.6.26, created on 2010-10-24 12:26:11
         compiled from F:/Apache2.2/htdocs/ta_portal_dev/templates/payment/order_pay_delivery_info.tpl */ ?>
			<table width='100%' >
				<tr>
				<td align='left'>
				<div id="express" style="display: none;" >
					<table>						
						<tr>
							<td width="250" rowspan="8" align="left" valign="top">
								<span class="text14"><?php echo $this->_tpl_vars['LANG']['order_pay']['home_delivery']; ?>
</span><?php echo $this->_tpl_vars['LANG']['order_pay']['add_material']; ?>
&nbsp;&nbsp;&nbsp;&nbsp;
							</td>
							<td align="right">
								* <?php echo $this->_tpl_vars['LANG']['order_pay']['name']; ?>
:
							</td>
							<td  >
								<input type="text" id="expressName" maxlength="30" class="value_gray" style='width:209px;'/>
							</td>
							<td width='10px'>
							</td>
							<td align="right">
								* <?php echo $this->_tpl_vars['LANG']['order_pay']['email']; ?>
:
							</td>
							<td >
								<input type="text" id="expressEmail" maxlength="50" class="value_gray" style='width:209px;'/>
							</td>
						</tr>
						<tr>
							<td align="right">
								* <?php echo $this->_tpl_vars['LANG']['order_pay']['mobile_phone']; ?>
:
							</td>
							<td  >
								<input type="text" id="expressMobilePhoneCode"  maxlength="6" style="width: 50px;" class="value_gray"/>
								<input type="text" id="expressMobilePhone" maxlength="20" class="value_gray"/>
							</td>
						</tr>	
						<tr>
							<td align="right">
								* <?php echo $this->_tpl_vars['LANG']['order_pay']['fixed_phone']; ?>
:
							</td>
							<td  colspan='5'>
							<input type="text" id="expressFixedPhoneCode"  maxlength="6" style="width: 50px;" class="value_gray"/>
							<input type="text" id="expressFixedPhoneAreaCode" maxlength="6" style="width: 50px;" class="value_gray"/>
							<input type="text" id="expressFixedPhone" maxlength="20" class="value_gray"/>
							</td>
						</tr>		
						<tr>
							<td align="right">
								* <?php echo $this->_tpl_vars['LANG']['order_pay']['region']; ?>
:
							</td>
							<td colspan='5' >
								<select id='country_id' class='country value_gray' >
									<option value='-1'>--<?php echo $this->_tpl_vars['LANG']['delivery_client']['choice']; ?>
--</option>
									<?php $_from = $this->_tpl_vars['country']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['rs']):
?>
									<option value='<?php echo $this->_tpl_vars['rs']['id']; ?>
'><?php echo $this->_tpl_vars['rs']['long_name']; ?>
</option>
									<?php endforeach; endif; unset($_from); ?>
								</select>
								<select id='city_-1' class='city show1 value_gray'  >
									<option value='-1'>--<?php echo $this->_tpl_vars['LANG']['delivery_client']['choice']; ?>
--</option>
								</select>
								<?php $_from = $this->_tpl_vars['city']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['det']):
?>
									<select id='city_<?php echo $this->_tpl_vars['det']['country_id']; ?>
' class='city hidden1 value_gray' >
										<option value='-1'>--<?php echo $this->_tpl_vars['LANG']['delivery_client']['choice']; ?>
--</option>
										<?php $_from = $this->_tpl_vars['det']['details']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['rs']):
?>
										<option value='<?php echo $this->_tpl_vars['rs']['id']; ?>
'><?php echo $this->_tpl_vars['rs']['long_name']; ?>
</option>
										<?php endforeach; endif; unset($_from); ?>
									</select>
								<?php endforeach; endif; unset($_from); ?>
					    		<select id='district_-1'  class='district show1 value_gray' >
									<option value='-1'>--<?php echo $this->_tpl_vars['LANG']['delivery_client']['choice']; ?>
--</option>
								</select>
								<?php $_from = $this->_tpl_vars['district']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['det']):
?>
									<select id='district_<?php echo $this->_tpl_vars['det']['city_id']; ?>
'  class='district hidden1 value_gray'>
										<option value='-1'>--<?php echo $this->_tpl_vars['LANG']['delivery_client']['choice']; ?>
--</option>
										<?php $_from = $this->_tpl_vars['det']['details']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['rs']):
?>
										<option value='<?php echo $this->_tpl_vars['rs']['id']; ?>
'><?php echo $this->_tpl_vars['rs']['long_name']; ?>
</option>
										<?php endforeach; endif; unset($_from); ?>
									</select>
								<?php endforeach; endif; unset($_from); ?>
							</td>
						</tr>
						<tr>
							<td align="right">
								* <?php echo $this->_tpl_vars['LANG']['order_pay']['address']; ?>
:
							</td>
							<td  colspan='5'>
								<input type="text" id="expressAddressLine" maxlength="100" class="value_gray" style='width:503px;'/>
							</td>
						</tr>						
						<tr>
							<td align="right">
								* <?php echo $this->_tpl_vars['LANG']['order_pay']['postal_code']; ?>
:
							</td>
							<td  colspan='5'>
								<input type="text" id="expressPostcode" maxlength="10" class="value_gray"/>
							</td>
						</tr>			
						<tr>
							<td align="right" valign='top'>
								<?php echo $this->_tpl_vars['LANG']['order_pay']['remark']; ?>
:
							</td>
							<td  colspan='5'>
								<textarea name="textarea" cols="45" rows="5" wrap="virtual" class="infoform300px value_gray" id="textarea" id="expressRemark" maxlength="300" style='width:503px;'></textarea>
							</td>
						</tr>
					</table>
					<div id="expressErrorMessage" style="display: none; color: red; font-weight: bold;"></div>
					</div>	
		</td>
		</tr>
		<tr>
		<td align='right'>
		
     		<a href="###" class="value_gray">
               <img id="sumbitButton" src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/<?php echo $this->_tpl_vars['lang']; ?>
/button_submitorder.gif" border="0" />
            </a>
		</td>
		</tr>
	</table>
					