
  						<table width='100%' id='ccc'>
  							<tr>
  								<td class='introduction_td'>
  									<span class='showname_16px_p'><{$LANG.show_detail.venue_des}></span>
  								</td>
  							</tr>
			  				<tr height='10px;'>
			  					<td></td>
			  				</tr>
  						</table>
<{foreach from=$activity.venue item=rs }>
  							<{if $rs.path neq ''}>
  							<div style='padding-left:20px;'>
  							<div style='position:absolute;z-index:10;' id='cpark' class='venue_image_bg'>
								<div style='padding:10px;'>
  								<img src='<{$resource_path}><{$rs.path}>' border='0' width='154' height='104' alt='<{$rs.alt_text}>' />
  								</div>
  							</div>
  							</div>
  							<{/if}>
  							<table width='100%'  >
  								<tr bgcolor='#EEECEE' bordercolor='#E9E9E9' >
  									<td>
  										<div style='width:100%;height:35px;' class='venue_title_bg'>
  											<div style='padding-left:215px;'><span class='showname_20px_p'><{$rs.name}></span></div>
  										</div>
  									</td>
  								</tr>
  								<tr>
  									<td height='20px;'>
  										<div style='padding-left:215px;'>
  											<!--<table>
  												<tr>
  													<td><img src="<{$rootpath}>/images/icon_concert_email.gif" align="absmiddle">
  													</td>
  													<td><a href="###">推荐给好友</a>
  													</td>
  													<td><img src="<{$rootpath}>/images/icon_add2.gif" align="absmiddle">
  													</td>
  													<td><a href="###">加入我的收藏</a>
  													</td>
  												</tr>
  											</table>//-->
  										</div>
  									</td>
  								</tr>
  								<tr>
  									<td>
  										<div style='width:100%;' class='venue_title_bg'>
  											<div style='padding-left:215px;'>
	  											<table height='70px;'>
	  												<tr>
	  													<td><strong><{$LANG.venue_detail.address}>：</strong>
	  													</td>
	  													<td><{$rs.address}>
	  													</td>
	  												</tr>
	  												<tr>
	  													<td><strong><{$LANG.venue_detail.phone}>：</strong>
	  													</td>
	  													<td><{$rs.phone}>
	  													</td>
	  												</tr>
	  											</table>
  											</div>
  										</div>
  									</td>
  								</tr>
  							</table>
  							<div style='height:10px;'></div>
  							<table width='720px'  border="0" cellspacing="0" cellpadding="0">
  								<tr>
  									<td><img src="<{$rootpath}>/images/spacer.gif" width="420" height="1"></td>
  									<td><img src="<{$rootpath}>/images/spacer.gif" width="15" height="1"></td>
  									<td><img src="<{$rootpath}>/images/spacer.gif" width="270" height="1"></td>
  								</tr>
  								<tr>
	  								<td class='introduction_td' valign='top'>
	  									<strong><{$LANG.venue_detail.venue_description}>：</strong><{$rs.description}>
	  								</td>
	  								<td>
	  								</td>
	  								<td align='right'>
	  									<div id="map<{$rs.venue_id}>" style="top:0px;left:0px;width:270px;height:220px"></div>
	  								</td>
  								</tr>
  							</table>
  							
							<script>
							$(document).ready(function()
							{
								var values = {
										'pointLatLng': undefined,
										'pointHTML': undefined,
										'pointOpenHTMLEvent': 'click',
										'pointIsDraggable': false,
										'pointIsRemovable': false,
										'pointRemoveEvent': 'dblclick',
										'pointMinZoom': 2,
										'pointMaxZoom': 17,
										'pointIcon': undefined,
										'centerMap': false,
										'centerMoveMethod':'normal'
									};
								try
								{
									$("#map<{$rs.venue_id}>").jmap('init',{    
								        mapType: "map",   
								        mapCenter: [35.86166,104.195397],   
								        mapDimensions: [400, 400],   
								        mapZoom: 3,   
								        mapControlSize: "large",   
								        mapShowType: true,   
								        mapShowOverview: true,   
								        mapEnableDragging: true,   
								        mapEnableScrollZoom: false,   
								        mapSmoothZoom: true,   
								        mapEnableGoogleBar: false  
								    });
								}
								catch(e)
								{
									
								}
								try{
								
									$("#map<{$rs.venue_id}>").jmap('SearchAddress',{
										'query':"<{$rs.address}>",
										'returnType':'getLocations'
									},function(result,options){
										var valid=Mapifies.SearchCode(result.Status.code);
										if(valid.success)
										{
											
											$("#map<{$rs.venue_id}>").jmap({     
										        mapZoom: 15   
										    });
											
											$.each(result.Placemark,function(i,point){
												$("#map<{$rs.venue_id}>").jmap("AddMarker",{
													'pointLatLng':[point.Point.coordinates[1],point.Point.coordinates[0]],
													'pointHtml':point.address
												});
												
												
												//$('#map').jmap('mapZoomTo',{'mapZoom':11});
											//	if the google map set center point,but the div is hide, that the point will
											//  go to top left	
												$('#map<{$rs.venue_id}>').jmap('MoveTo', { 
												  'mapCenter': [point.Point.coordinates[1], point.Point.coordinates[0]], 
												  centerMethod: 'pan',
												  'mapZoom': 11 });                    
											});
											
											//changeMovieDetailDiv(1);
										}
										else
										{
											
										}
									});
								}
								catch(ex)
								{
									alert(ex);
								}
								
								
							});
							</script>
  							<div style='height:10px;'></div>
  							<{if $rs.other_activity.count > 0}>
						<table width='720px' class='introduction_td'  border="0" cellspacing="0" cellpadding="0">
							<tr>
								<td width='720px'><span class='showname_20px_b'><{$LANG.venue_detail.venue_order_show}></span></td>
							</tr>
							<tr>
								<td><hr></td>
							</tr>
							<tr>
								<td>
									<{foreach from=$rs.other_activity item=rss }>
										<{if $rss.activity_id<>$activity.id}>
										<div style='float:left;padding-left:20px;'>
											<table width='300px'  border="0" cellspacing="0" cellpadding="0">
												<tr>
  													<td><img src="<{$rootpath}>/images/spacer.gif" width="100" height="1"></td>
  													<td><img src="<{$rootpath}>/images/spacer.gif" width="10" height="1"></td>
  													<td><img src="<{$rootpath}>/images/spacer.gif" width="190" height="1"></td>
												</tr>
												<tr valign='top'>
													<td>
														<{if $rss.poster neq ""}>
															<img border='0' src="<{$resource_path}><{$rss.poster}>" width='100px' />
														<{/if}>
													</td>
													<td>
													</td>
													<td>
														<table  border="0" cellspacing="0" cellpadding="0">
															<tr>
																<td><span class='showname_13px_wb'><{$rss.name}></span></td>
															</tr>
															<tr height='10px'>
																<td>
																</td>
															</tr>
															<tr>
																<td>
																	<select id='activity_<{$rss.activity_id}>' >
																	<{foreach from=$rss.venue_details item=rcsss}>
																		<{foreach from=$rcsss.schedule_details item=rsss}>
																			<option value='<{$rsss.show_id}>' ><{convertDateTime lang=$lang date=$rsss.show_date}></option>
																		<{/foreach}>
																	<{/foreach}>
																	</select>
																</td>
															</tr>
															<tr height='10px'>
																<td>
																</td>
															</tr>
															<tr>
																<td >
																	<a href='#' name='activity_<{$rss.activity_id}>' class='goto_show'>
																		<img src="<{$rootpath}>/images/<{$lang}>/button_buy_now_blue.gif"  border="0">
																	</a>
																</td>
															</tr>
														</table>
													</td>
												</tr>
												<tr height='10px'>
													<td>
													</td>
												</tr>
											</table>
										</div>
										<{/if}>
									<{/foreach}>
								</td>
							</tr>
						</table>
						<{/if}>
	  				<{/foreach}>