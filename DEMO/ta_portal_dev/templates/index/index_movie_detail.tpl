		               <table width="605" border="0" cellspacing="0" cellpadding="0">
		                <tr>
		                  <td><img src="images/content_element01.jpg" width="605" height="15"> </td>
		                </tr>
		              </table>
		              <!--==============//////    Start Main Movie Content1  \\\\\\=========== -->
		              <table width="605" border="0" cellspacing="0" cellpadding="0">
		                <tr>
		                  <td align="center" background="images/content_element03.jpg"><table width="560" border="0" cellspacing="0" cellpadding="0">
		                    <tr>
		                      <td width="270" class="textmovie"><strong><{$LANG.index.director>}>:</strong><{$detail_data.movie_director}><br>
		                        <strong><{$LANG.index.protagonist>}>:</strong><{$detail_data.movie_artist}> <br>
		                        <strong><{$LANG.index.length_film>}>:</strong><{$detail_data.duration}> <{$LANG.index.minute>}></td>
		                      <td width="20"><img src="images/spacer.gif" width="20" height="1"></td>
		                      <td width="270"><table width="270" border="0" cellspacing="0" cellpadding="0">
		                        <tr>
		                          <td align="center">&nbsp;</td>
		                          <td width="132"><a href="movie/movie_detail.php?activity_id=<{$detail_data.id}>&city_id=<{$param_list.city_id}>"><img src="images/<{$lang}>/button_buy_now_concert.gif" width="132" height="48" border="0"></a></td>
		                          </tr>
		                      </table></td>
		                    </tr>
		                  </table></td>
		                </tr>
		                <tr>
		                  <td><img src="images/content_element02.jpg" alt="" width="605" height="18"></td>
		                </tr>
		              </table>
		              <!--==============//////    End Main Movie Content1  \\\\\\=========== -->
		              <img src="images/spacer.gif" width="605" height="15">
		              
		              <!--==============//////    Start Main Movie Content2  \\\\\\=========== -->
		              <table width="605" border="0" cellspacing="0" cellpadding="0">
		                <tr>
		                  <td><img src="images/content_element04.jpg" width="605" height="10"></td>
		                </tr>
		                <tr>
		                  <td align="center" background="images/content_element06.jpg"><table width="560" border="0" cellspacing="0" cellpadding="0">
		                    <tr>
		                      <td width="270" valign="top"><table width="270" border="0" cellspacing="0" cellpadding="0">
		                        <tr>
		                          <td>&nbsp;</td>
		                        </tr>
		                        <tr>
		                          <td>
		                          <table width="270" border="0" cellspacing="0" cellpadding="0">
		                            <tr>
		                              <td valign='bottom'style="position: absolute;">
		                              <div id="score<{$activity_id}>">
		                               <span  class="ticketCountfont2" id='score_index'>
									   <{$LANG.movie_list.recommend_index}>
									   </span>
		                              </div>
									    <script type="text/javascript">
									    	var score='<{$detail_data.score}>';
									    	var activity_id='<{$activity_id}>';
											if(score== ''){
												score=0;
											}
											$("#score<{$activity_id}>").studyplay_star({MaxStar:5,CurrentStar:score,Enabled:true,id:activity_id},function(value){});
										</script>
		                              </td>
		                              <td width="110" valign='bottom'><{$LANG.index_number}>:<span class="text18"><{$detail_data.score}></span></td>
		                              </tr>
		                              <tr>
			                              <td>
				                              <div id="div<{$activity_id}>" style="display:none;">
												<{$LANG.assess_success}>
											  </div>
										  </td>
									  </tr>
		                          </table>
		                          </td>
		                        </tr>
		                        <tr>
		                          <td height="30" class="text12"><span class="textpurple">5</span><{$LANG.index.score_num}>&nbsp;&nbsp;&nbsp;<span class="textpurple">43</span></span><{$LANG.index.comment_num}>&nbsp;&nbsp;&nbsp;<span class="textpurple">132</span><{$LANG.index.collect_num}></td>
		                        </tr>
		                        <tr>
		                          <td height="10"><img src="images/spacer.gif" width="1" height="10"></td>
		                        </tr>
		                        <tr>
		                          <td><table width="246" border="0" cellspacing="0" cellpadding="0">
		                            <tr>
		                              <td height="31" align="center" background="images/content_element07.jpg"><table width="230" border="0" cellspacing="0" cellpadding="0">
		                                <tr>
		                                  <td width="35"><img src="images/<{$lang}>/icon_share.gif" width="35" height="19"></td>
		                                  <td width="10"><img src="images/spacer.gif" width="10" height="1"></td>
		                                  <td align="center"><a href="#"><img src="images/share_01.gif" border="0"></a></td>
		                                  <td align="center"><a href="#"><img src="images/share_02.gif" border="0"></a></td>
		                                  <td align="center"><a href="#"><img src="images/share_03.gif" border="0"></a></td>
		                                  <td align="center"><a href="#"><img src="images/share_04.gif" border="0"></a></td>
		                                  <td align="center"><a href="#"><img src="images/share_05.gif" border="0"></a></td>
		                                  <td align="center"><a href="#"><img src="images/share_06.gif" border="0"></a></td>
		                                  <td width="40" align="right"><a href="#" class="textmore"><{$LANG.index.more>}>&gt;&gt;</a></td>
		                                </tr>
		                              </table></td>
		                              </tr>
		                          </table></td>
		                        </tr>
		
		                      </table></td>
		                      <td width="20" valign="top"><img src="images/spacer.gif" alt="" width="20" height="145"></td>
		                      <td width="270" valign="top" class="textmovie"><strong class="text14"><{$LANG.index.drama_overview>}>:</strong><br>
								<div style="width:270; word-wrap: break-word;"><{$detail_data.description}></div>
								</td>
		                    </tr>
		                  </table></td>
		                </tr>
		                <tr>
		                  <td><img src="images/content_element05.jpg" width="605" height="15"></td>
		                </tr>
		              </table>
		              <!--==============//////    End Main Movie Content2  \\\\\\=========== -->