						<tr height="30px">
							<td>
								<div id="score<{$movie.activity_id}>">
								   <span  class="ticketCountfont2">
								   <{$LANG.movie_list.recommend_index}>
								   </span>
								</div>
							    <script type="text/javascript">
							    	var score='<{$movie.score}>';
							    	var activity_id='<{$movie.activity_id}>';
									if(score== ''){
										score=0;
									}
									<{if $movie.score_enabled >0 }>
										$("#score"+activity_id).studyplay_star({MaxStar:5,CurrentStar:score,Enabled:false,id:activity_id},function(value){});
									<{else}>
										$("#score"+activity_id).studyplay_star({MaxStar:5,CurrentStar:score,Enabled:true,id:activity_id},function(value){});
									<{/if}>
								</script>
							</td>
							<td>&nbsp;</td>
							<td valign="top">&nbsp;</td>
						</tr>
						<tr>
							<td >
								<div id="div<{$movie.activity_id}>" style="display:none">
									<{$LANG.assess_success}>
								</div>
							</td>
						</tr>