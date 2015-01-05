		               <table width="605" border="0" cellspacing="0" cellpadding="0">
		                <tr>
		                  <td><img src="images/content_element01.jpg" width="695" height="17"> </td>
		                </tr>
		              </table>
		              <!--==============//////    Start Main Movie Content1  \\\\\\=========== -->
		              <table width="695" border="0" cellspacing="0" cellpadding="0">
		                <tr>
		                  <td align="center" background="images/content_element03.jpg"><table width="650" border="0" cellspacing="0" cellpadding="0">
		                    <tr>
		                      <td width="270" class="textmovie">
		                        <strong><{$LANG.index.organizer}>:</strong><{$detail_data.origanizer_name}><br>
		                        <strong><{$LANG.index.performance_time}>:</strong><{$detail_data.start_date}> - <{$detail_data.end_date}> <br>
		                        <strong><{$LANG.index.performance_venues}>:</strong><{$detail_data.venue_details.0.venue_name}><br>
		                        <strong><{$LANG.index.price}>:</strong>HK$180, 280, 480<br></td>
		                      <td width="20"><img src="images/spacer.gif" width="20" height="1"></td>
		                      <td width="390"><table width="390" border="0" cellspacing="0" cellpadding="0">
		                        <tr>
		                          <td align="center">&nbsp;</td>
		                          <td width="132"><a href="show/hot.php?activity_id=<{$detail_data.id}>"><img src="images/<{$lang}>/button_buy_now_concert.gif" width="132" height="48" border="0"></a></td>
		                          </tr>
		                      </table></td>
		                    </tr>
		                  </table></td>
		                </tr>
		                <tr>
		                  <td><img src="images/content_element02.jpg" alt="" width="695" height="21"></td>
		                </tr>
		              </table>
		              <!--==============//////    End Main Movie Content1  \\\\\\=========== -->
		              <img src="images/spacer.gif" width="605" height="15">
		              
		              <!--==============//////    Start Main Movie Content2  \\\\\\=========== -->
		              <table width="695" border="0" cellspacing="0" cellpadding="0">
		                <tr>
		                  <td colspan="3"><img src="images/content_element04.jpg" width="695" height="10"></td>
		                </tr>
		                <tr>
		                  <td align="center" background="images/content_element06.jpg" width='900'>
		                  
		                  <table  border="0" cellspacing="0" cellpadding="0">
		                  	<tr>
		                  	  <td>
		                  	  <strong class="text14"><{$LANG.index.drama_overview}>:</strong>
								<{$detail_data.description}>
							  </td>
		                  	</tr>
		                  	<tr>
		                  	 <td ><{$LANG.index_number}>:<span class="text18"><{$detail_data.score}></span></td>
		                  	</tr>
		                    <tr>
		                      <td height="20" valign="top">
		                              <div id="score<{$activity_id}>" style="position: absolute;">
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
		                    </tr>
		                    <tr>
		                    	<td>
		                    		<div id="div<{$activity_id}>" style="display:none;">
										<{$LANG.assess_success}>
									  </div>
		                    	</td>
		                    </tr>
		                  </table></td>
		                </tr>
		                <tr>
		                  <td><img src="images/content_element05.jpg" width="695" height="17"></td>
		                </tr>
		              </table>
		              <!--==============//////    End Main Movie Content2  \\\\\\=========== -->