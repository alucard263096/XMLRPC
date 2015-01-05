<?php /* Smarty version 2.6.26, created on 2010-11-05 06:18:49
         compiled from E:/Apache2.2/htdocs/ta_portal_dev/templates/payment/order_pay_client_info.tpl */ ?>
<div id="unify">
					<table>
						<tr>
							<td width="250" rowspan="3" align="left" valign="top">
								<span class="text14"><?php echo $this->_tpl_vars['LANG']['order_pay']['bug_material']; ?>
</span><?php echo $this->_tpl_vars['LANG']['order_pay']['add_material']; ?>
&nbsp;&nbsp;&nbsp;&nbsp;
							</td>
							<td  align="right">
								<span style="color:red">*</span> <?php echo $this->_tpl_vars['LANG']['order_pay']['name']; ?>
:
							</td>
							<td  >
								<input type="text" id="unifyName" maxlength="30" class="value_gray" style="width: 203px;"/>
							</td>
							<td width='10px'>
							</td>
							<td align="right">
								<span style="color:red">*</span> <?php echo $this->_tpl_vars['LANG']['order_pay']['email']; ?>
:
							</td>
							<td >	
								<input type="text" id="unifyEmail" maxlength="50" class="value_gray" style="width: 203px;"/>
							</td>
						</tr>
						<tr>
							<td align="right" >
								<span style="color:red">*</span> <?php echo $this->_tpl_vars['LANG']['order_pay']['mobile_phone']; ?>
:
							</td>
							<td >
								<input type="text" id="unifyMobilePhoneCode" value="<?php echo $this->_tpl_vars['show_detail']['country_code']; ?>
" maxlength="6" style="width: 50px;" class="value_gray"/>
								<input type="text" id="unifyMobilePhone" maxlength="20" style="width: 150px;" class="value_gray"/>
							</td>
						</tr>
						<tr>
						</tr>
					</table>
					<div id="unifyErrorMessage" style="display: none; color: red; font-weight: bold;"></div>
				</div>