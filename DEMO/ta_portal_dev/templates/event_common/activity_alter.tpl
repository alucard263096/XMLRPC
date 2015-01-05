

<a href="###" id="ele_<{$movie.activity_id}>">
						<img src="<{$rootpath}>/images/<{$lang}>/remind_but.jpg"  border="0">
						</a>
				        <div id="blk_<{$movie.activity_id}>" class="div_remind_button" style="display:none;background-color:#FFFFFF;">
				            	<table width="350" height="200" border="0" align="center" cellpadding="0" cellspacing="5" bgcolor="#a3a3a3">
					            	<tr>
	   									<td align="right" valign="top" bgcolor="#FFFFFF">
					                		<table width="350" border="0" cellspacing="0" cellpadding="0">
										      <tr>
										        <td height="30">&nbsp;</td>
										        <td width="50" height="50" align="right"><a href="###"><img src="./../images/movie/pop_close.gif" width="27" height="27" border="0" id="close_<{$movie.activity_id}>"></a></td>
										        <td width="15"><img src="./../images/movie/spacer.gif" width="15" height="1"></td>
										      </tr>
										    </table>
					                		<table width="350" border="0" cellspacing="5" cellpadding="0">
						                	<tr>
						                		<td class="text14" align="right">
													* <{$LANG.order_pay.mobile_phone}>:
												</td>
												<td align="left">
													<input type="text" id="PhoneCode_<{$movie.activity_id}>"  maxlength="6" value="<{$country_code}>" style="width: 50px;" />
													<input type="text" id="Phone_<{$movie.activity_id}>" maxlength="20" />
												</td>
						                	</tr>
						                	<tr>
						                		<td class="text14" align="right">
													* <{$LANG.order_pay.email}>:
												</td>
												<td align="left">
													<input type="text" id="expressEmail_<{$movie.activity_id}>" maxlength="50" />
												</td>
						                	</tr>
						                	<tr>
						                		<td colspan="2" align="center" >
						                			<div id="errorMessage_<{$movie.activity_id}>" style="display:none;" class="errorMsg"/>
						                		    <input type="button" id="submit_remind_<{$movie.activity_id}>" value="<{$LANG.common.commit}>" onClick="submitRemind('<{$movie.activity_id}>')"/>
						                		</td>
						                	</tr>
					                		</table>
					                	</td>
					                 </tr>
				                </table>
				        </div>
				        <script type="text/javascript">
								remindDiv_<{$movie.activity_id}> = new PopupLayer({trigger:"#ele_"+<{$movie.activity_id}>,popupBlk:"#blk_"+<{$movie.activity_id}>,closeBtn:"#close_"+<{$movie.activity_id}>,
								useOverlay:true,useFx:true,offsets:{x:0,y:-41}});
								remindDiv_<{$movie.activity_id}>.doEffects = function(way){
									if(way == "open"){
										this.popupLayer.css({opacity:0.3}).show(100,function(){
											this.popupLayer.animate({
												left:($(document).width() - this.popupLayer.width())/2,
												top:(document.body.clientHeight - this.popupLayer.height() - 100)/2 + $(document).scrollTop(),
												opacity:0.9
											},300,function(){this.popupLayer.css("opacity",1)}.binding(this));
										}.binding(this));
									}
									else{
										this.popupLayer.animate({
											left:this.trigger.offset().left,
											top:this.trigger.offset().top,
											opacity:0.1
										},{duration:300,complete:function(){this.options.useOverlay?this.overlay.hide():null;this.popupLayer.css("opacity",1);this.popupLayer.hide();}.binding(this)});
									}
								}
						</script>
						
						