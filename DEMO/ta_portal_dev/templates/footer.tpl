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
							<td class="footer_payment_desc" width="580"><{$LANG.footer.payment_desc}></td>
							<td class="footer_instant_booking" width="100" align="right"><{$LANG.footer.instant_booking}></td>
							<td class="footer_hotline" width="280">
							<{if $smarty.session.city_id == $gz_city_id }>
							4006 838 000
							<{elseif $smarty.session.city_id == $mo_city_id }>
							2828 2888
							<{else}>
							6883 8000
							<{/if}>
							</td>
						</tr>
						<tr>
							<td align="center" colspan="3"><img src="<{$rootpath}>/images/footer_line.jpg"></td>
						</tr>
						<tr>
							<td class="footer_all_hotline"><{$LANG.footer.all_hotline}></td>
							<td colspan="2" align="right"><img src="<{$rootpath}>/images/unionpay_h31.gif" hspace="5"><img src="<{$rootpath}>/images/visa_h31.gif" hspace="5"><img src="<{$rootpath}>/images/mastercard_h31.gif" hspace="5"><img src="<{$rootpath}>/images/comodo_h31.gif" hspace="5"></td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td height="10" align="center">&nbsp;</td>
			</tr>
  			<tr>
		    	<td height="60" background="<{$rootpath}>/images/footer_thin_bg.jpg">
					<!--==============//////    Start Footer Content  \\\\\\=========== -->
					<!--<table width="1000" border="0" cellspacing="0" cellpadding="0">
						<tr>
							<td width="20">&nbsp;</td>
							<td width="420" height="115" valign="top"><table width="420" border="0" cellspacing="0" cellpadding="0">
						<tr>
							<td height="10"><img src="<{$rootpath}>/images/spacer.gif" width="10" height="10"></td>
							<td><img src="<{$rootpath}>/images/spacer.gif" alt="" width="10" height="10"></td>
							<td><img src="<{$rootpath}>/images/spacer.gif" alt="" width="10" height="10"></td>
							<td width="105"><img src="<{$rootpath}>/images/spacer.gif" alt="" width="10" height="10"></td>
						</tr>
						<tr>
							<td width="105" height="25" class="textfff"><a href="#" class="footlinkbold"><{$LANG.footer.beginner_guide}></a></td>
							<td width="105" class="textfff"><a href="#" class="footlinkbold"><{$LANG.footer.voucher_center}></a></td>
							<td width="105" class="textfff"><a href="#" class="footlinkbold"><{$LANG.footer.booking_help}></a></td>
							<td width="105" class="textfff"><a href="#" class="footlinkbold"><{$LANG.footer.introduction_tickets}></a></td>
						</tr>
						<tr>
							<td height="25" class="textfff"><a href="#" class="footlink"><{$LANG.footer.how_register}></a></td>
							<td class="textfff"><a href="#" class="footlink"><{$LANG.footer.recharge_channels}></a></td>
							<td class="textfff"><a href="#" class="footlink"><{$LANG.footer.how_booking}></a></td>
							<td class="textfff"><a href="#" class="footlink"><{$LANG.footer.password_tickets}></a></td>
						</tr>
						<tr>
							<td height="25" class="textfff"><a href="#" class="footlink"><{$LANG.footer.how_activate}></a></td>
							<td class="textfff"><a href="#" class="footlink"><{$LANG.footer.recharge_raiders}></a></td>
							<td class="textfff"><a href="#" class="footlink"><{$LANG.footer.how_pay}></a></td>
							<td class="textfff"><a href="#" class="footlink"><{$LANG.footer.get_ticket_way}></a></td>
						</tr>
						<tr>
							<td height="25" class="textfff">&nbsp;</td>
							<td class="textfff"><a href="#" class="footlink"><{$LANG.footer.prepaid_card_introduced}></a></td>
							<td class="textfff"><a href="#" class="footlink"><{$LANG.footer.how_cancel}></a></td>
							<td class="textfff"><a href="#" class="footlink"><{$LANG.footer.theater_terminal}></a></td>
						</tr>
					</table>
				</td>
				<td>&nbsp;</td>
				<td width="360" align="right" valign="top">//-->
					<table width="1000" border="0" cellspacing="0" cellpadding="0">
						<tr>
							<td width="600" class="textfff" style="padding: 10px;">
								<a href="<{$rootpath}>/corporate/" target="_new" class="footlink"><{$LANG.footer.about_us}></a>
								&nbsp;&nbsp;|&nbsp;&nbsp; 
								<a href="<{$rootpath}>/footer/footer.php?action=contact_us" class="footlink"><{$LANG.footer.contact_us}></a>
								&nbsp;&nbsp;|&nbsp;&nbsp;
								<a href="<{$rootpath}>/footer/footer.php?action=service_terms" class="footlink"><{$LANG.footer.service_statement}></a>
								&nbsp;&nbsp;|&nbsp;&nbsp; 
								<a href="<{$rootpath}>/footer/footer.php?action=privacy" class="footlink"><{$LANG.footer.privacy_statement}></a>
								&nbsp;&nbsp;|&nbsp;&nbsp; 
								<a href="<{$rootpath}>/footer/footer.php?action=qna" class="footlink"><{$LANG.footer.faq}></a> 
								&nbsp;&nbsp;|&nbsp;&nbsp;
								<a href="<{$rootpath}>/footer/footer.php?action=pay_take" class="footlink"><{$LANG.footer.pay_and_pickup}></a>
							</td>
							<td width="400"><img src="<{$rootpath}>/images/footer_hotline.jpg"></td>
						</tr>
					</table>
				</td>
				<!--<td width="20">&nbsp;</td>//-->
  			</tr>   
   		</table>
		<!--==============//////    End Footer Content  \\\\\\=========== -->
		<table width="1000" border="0" cellspacing="0" cellpadding="0" align="center">
			<tr>
				<td width="1000" height="35" align="center" bgcolor="#FFFFFF" class="textcaption">
				<{if $domain == "ticketchina"}>
				© 2010 TicketChina. All Rights Reserved.&nbsp; <span style="font-size:12px;">粤ICP备10203628号&nbsp;增值电信业务经营许可证编号：粤B2-20100473 </span>&nbsp; <script language="javascript" type="text/javascript" src="http://js.users.51.la/4192656.js"></script>
<noscript><a href="http://www.51.la/?4192656" target="_blank"><img alt="&#x6211;&#x8981;&#x5566;&#x514D;&#x8D39;&#x7EDF;&#x8BA1;" src="http://img.users.51.la/4192656.asp" style="border:none" /></a></noscript>
				<{else}>
				© 2010 TicketAsia. All Rights Reserved.
				<{/if}>
				</td>
			</tr>
  		</table>
  		</div>
  		<div style="width:1007px; height:50px;">&nbsp;</div>
  		</center>
	</body>
</html>