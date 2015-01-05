<div style="width:940px;"> 
	 		<div id="container-1">
		            <ul class="tabs-nav">
		            	<{foreach from=$payment_type item=rs}>
		            		<li <{if $rs.default == 'Y' }> class="tabs-selected" <{/if}>><a href="#fragment-<{$rs.type}>" <{if $rs.default == 'Y' }> class="ctabs-selected" <{/if}> onClick="setPaymentType('<{$rs.type}>')">
		            			<span><{$rs.name}></span>
		            			<{if $rs.logo neq '' }><img src="<{$rootpath}>/images/<{$rs.logo}>" border="0" align="middle"><{/if}>
		            			</a>
		            		</li>
		            	<{/foreach}>
		            	<!--
		                <li class="tabs-selected"><a href="#fragment-1" onClick="setPaymentType('CreditCard')"><span><{$LANG.common.credit_card}></span><img src="<{$rootpath}>/images/movie_icon_pay01.gif" width="37" height="25" border="0"></a></li>
		                <li class=""><a href="#fragment-2" onClick="setPaymentType('DebitCard')"><span><{$LANG.common.debit_card}></span><img src="<{$rootpath}>/images/movie_icon_pay01.gif" width="37" height="25" border="0"></a></li>
		                <li class=""><a href="#fragment-3" onClick="setPaymentType('Cash')"><span><{$LANG.common.cash}></span><img src="<{$rootpath}>/images/movie_icon_pay01.gif" width="37" height="25" border="0"></a></li>
		                <li class=""><a href="#fragment-4" onClick="setPaymentType('MemberCard')"><span><{$LANG.common.membership_card}></span><img src="<{$rootpath}>/images/movie_icon_pay01.gif" width="37" height="25" border="0"></a></li>
		                -->
		                <input type="hidden" id="paymentType" value="CreditCard"/>
		            </ul>
		            <{foreach from=$payment_type item=rs}>
		            <div id="fragment-<{$rs.type}>" class="tabs-container tabs-hide" style="margin:0 auto;"  >
		            	<{if $rs.type=='CreditCard'}>
		            	<{if $param_list.payment_gateway_type == 'payease'}>
		            	<img src="<{$rootpath}>/images/visa_h31.gif" hspace="5" vspace="5"><img src="<{$rootpath}>/images/mastercard_h31.gif" hspace="5" vspace="5">
		            	<{else}>
		            	<table cellpadding="0" cellspacing="0">
		            		<tr>
		            			<td align='left' >
				            	<table valign="top" border="0"  cellpadding="0" cellspacing="0">
				            		<tr>
				            			<td width='60px'></td>
				            		</tr>
									<tr>
										<td >
											<{$LANG.order_pay.cardType}>:
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
											<{$LANG.order_pay.holder_name}>:
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
												<{$LANG.order_pay.ccNo}>:
											</td>
											<td colspan=2 >
												<input id="ccNo" type="text" maxlength="20" class="quantity"  style="width: 200px;" class="value_gray"/>
											</td>
											<td width='6px'>
											</td>
											<td  >
												<{$LANG.order_pay.security_code}>:
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
												<{$LANG.order_pay.exp_date}>:
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
						<div id="errorDiv" class="errorMsg"></div>
						<{/if}>
		            	<{elseif  $rs.type=='DebitCard'}>
		            		<!--
							<table  valign="top" border="0" align="left" cellpadding="0" cellspacing="0">
								<tr>
									<td>
										<{$LANG.common.debit_card}>:
									</td>
								</tr>	
							</table>
                            -->
                            <img src="../images/debit_card.png" border="0" />
		            	<{elseif  $rs.type=='Cash'}>
							<table  valign="top" border="0" align="left" cellpadding="0" cellspacing="0">
								<tr>
									<td>
										<{$LANG.common.cash}>:
									</td>
								</tr>
							</table>
		            	
		            	<{elseif  $rs.type=='MemberCard'}>
							<table valign="top" border="0" align="left" cellpadding="0" cellspacing="0">
								<tr>
									<td>
										<{$LANG.common.membership_card}>:
									</td>
								</tr>	
							</table>
		            	<{/if}>
		            </div>
		            <{/foreach}>
	        </div> 
	 	</div>