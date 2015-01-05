			<table width='100%' >
				<tr>
				<td align='left'>
				<div id="express" style="display: none;" >
					<table>						
						<tr>
							<td width="250" rowspan="8" align="left" valign="top">
								<span class="text14"><{$LANG.order_pay.home_delivery}></span><{$LANG.order_pay.add_material}>&nbsp;&nbsp;&nbsp;&nbsp;
							</td>
							<td align="right">
								<span style="color:red">*</span> <{$LANG.order_pay.name}>:
							</td>
							<td  >
								<input type="text" id="expressName" maxlength="30" class="value_gray" style='width:209px;'/>
							</td>
							<td width='10px'>
							</td>
							<td align="right">
								<span style="color:red">*</span> <{$LANG.order_pay.email}>:
							</td>
							<td >
								<input type="text" id="expressEmail" maxlength="50" class="value_gray" style='width:209px;'/>
							</td>
						</tr>
						<tr>
							<td align="right">
								<span style="color:red">*</span> <{$LANG.order_pay.region}>:
							</td>
							<td colspan='5' >
								<select id='country_id' class='country value_gray' >
									<option value='-1'>--<{$LANG.delivery_client.choice}>--</option>
									<{foreach from=$country item=rs }>
									<option value='<{$rs.id}>'><{$rs.long_name}></option>
									<{/foreach}>
								</select>
								<select id='city_-1' class='city show1 value_gray'  >
									<option value='-1'>--<{$LANG.delivery_client.choice}>--</option>
								</select>
								<{foreach from=$city item=det}>
									<select id='city_<{$det.country_id}>' class='city hidden1 value_gray' >
										<option value='-1'>--<{$LANG.delivery_client.choice}>--</option>
										<{foreach from=$det.details item=rs}>
										<option value='<{$rs.id}>'><{$rs.long_name}></option>
										<{/foreach}>
									</select>
								<{/foreach}>
					    		<select id='district_-1'  class='district show1 value_gray' >
									<option value='-1'>--<{$LANG.delivery_client.choice}>--</option>
								</select>
								<{foreach from=$district item=det}>
									<select id='district_<{$det.city_id}>'  class='district hidden1 value_gray'>
										<option value='-1'>--<{$LANG.delivery_client.choice}>--</option>
										<{foreach from=$det.details item=rs}>
										<option value='<{$rs.id}>'><{$rs.long_name}></option>
										<{/foreach}>
									</select>
								<{/foreach}>
							</td>
						</tr>
						<tr>
							<td align="right">
								<span style="color:red">*</span> <{$LANG.order_pay.address}>:
							</td>
							<td  colspan='5'>
								<input type="text" id="expressAddressLine" maxlength="100" class="value_gray" style='width:503px;'/>
							</td>
						</tr>
						<tr>
							<td align="right">
								<span style="color:red">*</span> <{$LANG.order_pay.mobile_phone}>:
							</td>
							<td  >
								<input type="text" id="expressMobilePhoneCode"  maxlength="6" style="width: 50px;" class="value_gray"/>
								<input type="text" id="expressMobilePhone" maxlength="20" class="value_gray"/>
							</td>
						</tr>	
						<tr>
							<td align="right">
								<{$LANG.order_pay.fixed_phone}>:
							</td>
							<td  colspan='5'>
							<input type="text" id="expressFixedPhoneCode"  maxlength="6" style="width: 50px;" class="value_gray"/>
							<input type="text" id="expressFixedPhoneAreaCode" maxlength="6" style="width: 50px;" class="value_gray"/>
							<input type="text" id="expressFixedPhone" maxlength="20" class="value_gray"/>
							</td>
						</tr>						
						<tr>
							<td align="right">
								<{$LANG.order_pay.postal_code}>:
							</td>
							<td  colspan='5'>
								<input type="text" id="expressPostcode" maxlength="10" class="value_gray"/>
							</td>
						</tr>			
						<tr>
							<td align="right" valign='top'>
								<{$LANG.order_pay.remark}>:
							</td>
							<td  colspan='5'>
								<textarea name="textarea" cols="45" rows="3" wrap="virtual" class="infoform300px value_gray" id="textarea" id="expressRemark" maxlength="300" style='width:503px;'></textarea>
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
               <img id="sumbitButton" src="<{$rootpath}>/images/<{$lang}>/button_submitorder.gif" border="0" />
            </a>
		</td>
		</tr>
	</table>
					