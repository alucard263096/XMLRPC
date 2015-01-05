<?php /* Smarty version 2.6.26, created on 2010-10-24 03:20:28
         compiled from F:/Apache2.2/htdocs/ta_portal_dev/templates/footer.tpl */ ?>
				</td>
			</tr>
		</table>
		<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
			<tr>
				<td height="50" align="center">&nbsp;</td>
			</tr>
			<tr>
				<td align="center">
					<table width="940" border="0" align="center" cellpadding="1" cellspacing="1">
						<tr>
							<td class="footer_payment_desc" width="540"><?php echo $this->_tpl_vars['LANG']['footer']['payment_desc']; ?>
</td>
							<td class="footer_instant_booking" width="120" align="right"><?php echo $this->_tpl_vars['LANG']['footer']['instant_booking']; ?>
</td>
							<td class="footer_hotline" width="280">
							<?php if ($_SESSION['city_id'] == $this->_tpl_vars['gz_city_id']): ?>
							4006 838 000
							<?php elseif ($_SESSION['city_id'] == $this->_tpl_vars['mo_city_id']): ?>
							2828 2888
							<?php else: ?>
							6883 8000
							<?php endif; ?>
							</td>
						</tr>
						<tr>
							<td align="center" colspan="3"><img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/footer_line.jpg"></td>
						</tr>
						<tr>
							<td class="footer_all_hotline"><?php echo $this->_tpl_vars['LANG']['footer']['all_hotline']; ?>
</td>
							<td colspan="2" align="right"><img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/unionpay_h31.gif" hspace="5"><img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/visa_h31.gif" hspace="5"><img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/mastercard_h31.gif" hspace="5"><img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/comodo_h31.gif" hspace="5"></td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td height="10" align="center">&nbsp;</td>
			</tr>
  			<tr>
		    	<td height="60" background="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/footer_thin_bg.jpg">
					<!--==============//////    Start Footer Content  \\\\\\=========== -->
					<!--<table width="1000" border="0" cellspacing="0" cellpadding="0">
						<tr>
							<td width="20">&nbsp;</td>
							<td width="420" height="115" valign="top"><table width="420" border="0" cellspacing="0" cellpadding="0">
						<tr>
							<td height="10"><img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/spacer.gif" width="10" height="10"></td>
							<td><img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/spacer.gif" alt="" width="10" height="10"></td>
							<td><img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/spacer.gif" alt="" width="10" height="10"></td>
							<td width="105"><img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/spacer.gif" alt="" width="10" height="10"></td>
						</tr>
						<tr>
							<td width="105" height="25" class="textfff"><a href="#" class="footlinkbold"><?php echo $this->_tpl_vars['LANG']['footer']['beginner_guide']; ?>
</a></td>
							<td width="105" class="textfff"><a href="#" class="footlinkbold"><?php echo $this->_tpl_vars['LANG']['footer']['voucher_center']; ?>
</a></td>
							<td width="105" class="textfff"><a href="#" class="footlinkbold"><?php echo $this->_tpl_vars['LANG']['footer']['booking_help']; ?>
</a></td>
							<td width="105" class="textfff"><a href="#" class="footlinkbold"><?php echo $this->_tpl_vars['LANG']['footer']['introduction_tickets']; ?>
</a></td>
						</tr>
						<tr>
							<td height="25" class="textfff"><a href="#" class="footlink"><?php echo $this->_tpl_vars['LANG']['footer']['how_register']; ?>
</a></td>
							<td class="textfff"><a href="#" class="footlink"><?php echo $this->_tpl_vars['LANG']['footer']['recharge_channels']; ?>
</a></td>
							<td class="textfff"><a href="#" class="footlink"><?php echo $this->_tpl_vars['LANG']['footer']['how_booking']; ?>
</a></td>
							<td class="textfff"><a href="#" class="footlink"><?php echo $this->_tpl_vars['LANG']['footer']['password_tickets']; ?>
</a></td>
						</tr>
						<tr>
							<td height="25" class="textfff"><a href="#" class="footlink"><?php echo $this->_tpl_vars['LANG']['footer']['how_activate']; ?>
</a></td>
							<td class="textfff"><a href="#" class="footlink"><?php echo $this->_tpl_vars['LANG']['footer']['recharge_raiders']; ?>
</a></td>
							<td class="textfff"><a href="#" class="footlink"><?php echo $this->_tpl_vars['LANG']['footer']['how_pay']; ?>
</a></td>
							<td class="textfff"><a href="#" class="footlink"><?php echo $this->_tpl_vars['LANG']['footer']['get_ticket_way']; ?>
</a></td>
						</tr>
						<tr>
							<td height="25" class="textfff">&nbsp;</td>
							<td class="textfff"><a href="#" class="footlink"><?php echo $this->_tpl_vars['LANG']['footer']['prepaid_card_introduced']; ?>
</a></td>
							<td class="textfff"><a href="#" class="footlink"><?php echo $this->_tpl_vars['LANG']['footer']['how_cancel']; ?>
</a></td>
							<td class="textfff"><a href="#" class="footlink"><?php echo $this->_tpl_vars['LANG']['footer']['theater_terminal']; ?>
</a></td>
						</tr>
					</table>
				</td>
				<td>&nbsp;</td>
				<td width="360" align="right" valign="top">//-->
					<table width="1000" border="0" cellspacing="0" cellpadding="0">
						<tr>
							<td width="600" class="textfff" style="padding: 10px;">
								<a href="###" class="footlink"><?php echo $this->_tpl_vars['LANG']['footer']['about_us']; ?>
</a>
								&nbsp;&nbsp;|&nbsp;&nbsp; 
								<a href="<?php echo $this->_tpl_vars['rootpath']; ?>
/footer/footer.php?action=contact_us" class="footlink"><?php echo $this->_tpl_vars['LANG']['footer']['contact_us']; ?>
</a>
								&nbsp;&nbsp;|&nbsp;&nbsp;
								<a href="<?php echo $this->_tpl_vars['rootpath']; ?>
/footer/footer.php?action=service_terms" class="footlink"><?php echo $this->_tpl_vars['LANG']['footer']['service_statement']; ?>
</a>
								&nbsp;&nbsp;|&nbsp;&nbsp; 
								<a href="<?php echo $this->_tpl_vars['rootpath']; ?>
/footer/footer.php?action=privacy" class="footlink"><?php echo $this->_tpl_vars['LANG']['footer']['privacy_statement']; ?>
</a>
								&nbsp;&nbsp;|&nbsp;&nbsp; 
								<a href="<?php echo $this->_tpl_vars['rootpath']; ?>
/footer/footer.php?action=qna" class="footlink"><?php echo $this->_tpl_vars['LANG']['footer']['faq']; ?>
</a> 
								&nbsp;&nbsp;|&nbsp;&nbsp;
								<a href="<?php echo $this->_tpl_vars['rootpath']; ?>
/footer/footer.php?action=pay_take" class="footlink"><?php echo $this->_tpl_vars['LANG']['footer']['pay_and_pickup']; ?>
</a>
							</td>
							<td width="400"><img src="<?php echo $this->_tpl_vars['rootpath']; ?>
/images/footer_hotline.jpg"></td>
						</tr>
					</table>
				</td>
				<!--<td width="20">&nbsp;</td>//-->
  			</tr>   
   		</table>
		<!--==============//////    End Footer Content  \\\\\\=========== -->
		<table width="1000" border="0" cellspacing="0" cellpadding="0" align="center">
			<tr>
				<td width="1000" height="35" align="center" bgcolor="#FFFFFF" class="textcaption">© 2010 TicketAsia. All Rights Reserved.</td>
			</tr>
  		</table>
  		</div>
  		<div style="width:1007px; height:50px;">&nbsp;</div>
  		</center>
	</body>
</html>