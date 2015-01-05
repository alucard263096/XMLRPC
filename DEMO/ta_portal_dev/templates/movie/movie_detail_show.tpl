<script type="text/javascript">	
	function setValue(li_id,ul_id,a_id,val_id,li_a_id){
	    $("#"+li_id).blur(); 
        var value = $("#"+li_a_id).attr("rel");
        var txt = $("#"+li_id).html(); 
        txt=txt.replace("drop_down_list2","drop_down_list1");
        $("#"+val_id).val(value); 
        $("#"+a_id).html(txt);
        $("#"+a_id).removeClass("selected"); 
        $("#"+li_id).addClass("selected"); 
        $("#"+ul_id).hide(); 
	}
</script>
<div id="movieDetailMenu1">
<table width="722" border="0" cellspacing="0" cellpadding="0">
			<tr>
            <td valign="top">
 <!--==============//////    Start Movie marks Table  \\\\\\=========== -->
                <table width="722" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="402" align="center" valign="top"><table width="380" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td><span class="text14"><{$LANG.movie_detail.user_assess}></span></td>
                        </tr>
                        <tr>
                          <td><table width="380" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                              <td height="30" valign="middle">&nbsp;
                              	<span id="score<{$activity_detail.0.id}>"></span>
                              </td>
                              <script type="text/javascript">
								var score='<{$activity_detail.0.score}>';
								var activity_id='<{$activity_detail.0.id}>';
								if(score== ''){
									score=0;
								}
								<{if $activity_detail.0.score_enabled >0 }>
									$("#score"+activity_id).studyplay_star({MaxStar:5,CurrentStar:score,Enabled:false,id:activity_id},function(value){});
								<{else}>
									$("#score"+activity_id).studyplay_star({MaxStar:5,CurrentStar:score,Enabled:true,id:activity_id},function(value){});
								<{/if}>
                              </script>
                              <td width="110">
	                              <div id="score_number<{$activity_detail.0.id}>" >
									<{$LANG.index_number}>：
									<{if $activity_detail.0.score neq ""}>
									<span class="moviemark" id="score_number_value<{$activity_detail.0.id}>"><{$activity_detail.0.score}></span>
									<{else}> 
									<span class="moviemark" id="score_number_value<{$activity_detail.0.id}>">0</span>
									<{/if}>
								  </div>  
                              </td>
                              <td width="110" align="center"><table border="0" cellspacing="0" cellpadding="0">
                              </tr>
                              </table></td>
                            </tr>
                          </table></td>
                        </tr>
                        <tr>
							<td>
								<div id="div<{$activity_detail.0.id}>" style="display:none">
									<{$LANG.assess_success}>
								</div>
							</td>
						</tr>
                        <tr>
                          <td height="30"><table border="0" cellspacing="0" cellpadding="0">
                            <tr>
                              <td height="30"><span class="text12"><span class="textmovie">5</span><{$LANG.movie_detail.number_assess}></span></td>
                              <td width="10" height="21"><img src="<{$rootpath}>/images/spacer.gif" width="10" height="1"></td>
                              <td><span class="text12"><span class="textmovie">43</span><{$LANG.movie_detail.criticism}>&nbsp;</span></td>
                              <td width="10" height="21"><img src="<{$rootpath}>/images/spacer.gif" width="10" height="1"></td>
                              <td><span class="text12"><span class="textmovie">132</span><{$LANG.movie_detail.collection}></span></td>
                            </tr>
                          </table></td>
                        </tr>
                        <tr>
                          <td height="30" class="text12"><table width="380" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                              <td width="170" height="50" class="moviedetail"><img src="<{$rootpath}>/images/icon_add4.gif" width="43" height="34" align="absmiddle"><a href="#">加入我的收藏</a></td>
                              <td align="right"><table border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                  <td width="40"><img src="<{$rootpath}>/images/<{$lang}>/icon_share.gif" width="35" height="19"></td>
                                  <td align="center" width="24"><a href="#"><img src="<{$rootpath}>/images/share_01.gif" border="0"></a></td>
                                  <td align="center" width="24"><a href="#"><img src="<{$rootpath}>/images/share_02.gif" border="0"></a></td>
                                  <td align="center" width="24"><a href="#"><img src="<{$rootpath}>/images/share_03.gif" border="0"></a></td>
                                  <td align="center" width="24"><a href="#"><img src="<{$rootpath}>/images/share_04.gif" border="0"></a></td>
                                  <td align="center" width="24"><a href="#"><img src="<{$rootpath}>/images/share_05.gif" border="0"></a></td>
                                  <td align="center" width="24"><a href="#"><img src="<{$rootpath}>/images/share_06.gif" border="0"></a></td>
                                  <td width="40" align="right"><a href="#" class="moviemorelink">more&gt;&gt;</a></td>
                                </tr>
                              </table></td>
                            </tr>
                          </table></td>
                        </tr>
                        <tr>
                          <td height="10">&nbsp;</td>
                        </tr>
                    </table>                    </td>
                    <td width="20" valign="top"><img src="<{$rootpath}>/images/spacer.gif" alt="" width="20" height="145"></td>
                    <td width="140" valign="top">&nbsp;</td>
                    <td width="20" valign="top">&nbsp;</td>
                    <td width="140" valign="top" class="textmovie">&nbsp;</td>
                  </tr>
                </table>
                <!--==============//////    End Movie marks Table  \\\\\\=========== -->
               </td>
              </tr> 
			<tr>
            <td valign="top">
                
                <!--==============//////    Start Main Movie Content1  \\\\\\=========== -->
                <table width="722" border="0" cellspacing="0" cellpadding="1">
                  <tr>
                    <td bgcolor="#989898">
                    <table width="720" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td align="center" background="<{$rootpath}>/images/bg_bar.gif" bgcolor="#FFFFFF" class="selectable2_line"><span class="textwhitebold"><{$LANG.movie_detail.cinema}></span></td>
                        <td align="center" background="<{$rootpath}>/images/bg_bar.gif" bgcolor="#FFFFFF" class="selectable3_line">
                        <table width="190" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td align="right"><img src="<{$rootpath}>/images/colour_1.gif"></td>
                            <td><span class="textwhitebold"><{$LANG.memberprice}></span></td>
                            <td align="right"><img src="<{$rootpath}>/images/colour_2.gif"></td>
                            <td><span class="textwhitebold"><{$LANG.price}></span></td>
                          </tr>
                        </table>
                        </td>
                        <td align="center" background="<{$rootpath}>/images/bg_bar.gif" bgcolor="#FFFFFF" class="selectable2_linenone"><span class="textwhitebold"><{$LANG.movie_detail.online_ticket}></span></td>
                      </tr>
                      
                      
                    <{foreach item=movie from=$show_list}>
                     <{foreach item=venue_item from=$movie.venue_details}>
                      <tr>
						<td width="200" bgcolor="#FFFFFF" class="selectable_line"><span class="textbold"><{$venue_item.venue_name}></span>&nbsp;&nbsp;&nbsp;[<{$venue_item.district_name}>]</td>
						<td width="430" bgcolor="#FFFFFF" class="selectable_line">
					        <div class="CRselectBox" id="CRselectBox_<{$movie.activity_id}>_<{$venue_item.venue_id}>" onclick="showDiv('CRselectBoxOptions_<{$movie.activity_id}>_<{$venue_item.venue_id}>','CRselectBox_<{$movie.activity_id}>_<{$venue_item.venue_id}>')"> 
						        <input type="hidden" value="<{$venue_item.schedule_details.0.show_id}>" id="abc_<{$movie.activity_id}>_<{$venue_item.venue_id}>" /> 
						        <input type="hidden" value="" name="abc_CRtext" id="abc_CRtext" /> 
							    <a style="padding-left:5px;TEXT-DECORATION:none;" rel="<{$venue_item.schedule_details.0.show_id}>" id="CRselectValue_<{$movie.activity_id}>_<{$venue_item.venue_id}>" >
							    	
							    </a>
							</div>
							<script type="text/javascript">
								var hot_movie_number_temp=0;
								var CRselectValue_name="";
								var abc_name="";
								var is_already_sold=0;
							</script>
							<ul class="CRselectBoxOptions" id="CRselectBoxOptions_<{$movie.activity_id}>_<{$venue_item.venue_id}>"  >
								<{foreach from=$venue_item.schedule_details item=schedule_details}>
									<li id="CRselectBoxItem<{$schedule_details.show_id}>"
									<{if $schedule_details.remain_ticket <= 0}>
									<{else}>
									onclick="setValue('CRselectBoxItem<{$schedule_details.show_id}>',
									'CRselectBoxOptions_<{$movie.activity_id}>_<{$venue_item.venue_id}>',
									'CRselectValue_<{$movie.activity_id}>_<{$venue_item.venue_id}>',
									'abc_<{$movie.activity_id}>_<{$venue_item.venue_id}>',
									'CRselectBoxItemA<{$schedule_details.show_id}>_<{$movie.activity_id}>_<{$venue_item.venue_id}>')"
									<{/if}>
									>
										<a href="javascript:void(0)" style="TEXT-DECORATION:none;" id="CRselectBoxItemA<{$schedule_details.show_id}>_<{$movie.activity_id}>_<{$venue_item.venue_id}>" rel="<{$schedule_details.show_id}>" >
											<span class="drop_down_list2">
											<{convertDateTime lang=$lang date=$schedule_details.show_date}> <{$schedule_details.house_name}>
											</span> 
											&nbsp;
				                        	<span style="color:#C21759">
				                        		<{$schedule_details.symbol}><{$schedule_details.member_price}>
				                        	</span> 
				                        	&nbsp;
				                        	<span  style="color:#36D900">
				                        		<{$schedule_details.price}>
				                        	</span> 
				                        	<{if $schedule_details.remain_ticket <= 0 }>
				                        		<span style="color:#C21759">
													（<{$LANG.sold_out}>）
												</span> 	
											<{/if}>
										</a>
									</li> 
									<script type="text/javascript">
										var remain_ticket='<{$schedule_details.remain_ticket}>';
										if( (remain_ticket >0 ) && (hot_movie_number_temp==0)){
											hot_movie_number_temp=1;
											is_already_sold=0;
											setValue('CRselectBoxItem<{$schedule_details.show_id}>',
											'CRselectBoxOptions_<{$movie.activity_id}>_<{$venue_item.venue_id}>',
											'CRselectValue_<{$movie.activity_id}>_<{$venue_item.venue_id}>',
											'abc_<{$movie.activity_id}>_<{$venue_item.venue_id}>',
											'CRselectBoxItemA<{$schedule_details.show_id}>_<{$movie.activity_id}>_<{$venue_item.venue_id}>');
										}
										if( (remain_ticket <= 0) && (hot_movie_number_temp==0)){
											is_already_sold=2;
											CRselectValue_name='CRselectValue_<{$movie.activity_id}>_<{$venue_item.venue_id}>';
											abc_name='abc_<{$movie.activity_id}>_<{$venue_item.venue_id}>';
										}
									</script>
								<{/foreach}> 
								<script type="text/javascript">
									if((is_already_sold==2)){
										var notxt='<a href="###" style="TEXT-DECORATION:none;"><{$LANG.sold_out}></a>';
										$("#"+CRselectValue_name).html(notxt);
										$("#"+abc_name).val('-1');
									}
								</script>
							</ul>
						</td>
						<td width="90" align="center" bgcolor="#FFFFFF" class="selectable_linenone">
							<a href="###">
								<img name='abc_<{$movie.activity_id}>_<{$venue_item.venue_id}>' src="<{$rootpath}>/images/<{$lang}>/button_buy_now_movie.gif" width="76" height="26" border="0" class="goto_show">
							</a>
						</td>
					</tr>
                   <{/foreach}>
                  <{/foreach}>
                   
                   
                    </table>
                    </td>
                  </tr>
                </table>
                <!--==============//////    End Main Movie Content1  \\\\\\=========== -->
                
                
                <img src="<{$rootpath}>/images/spacer.gif" width="722" height="20">
                
                
                <!--==============//////    Start Main Movie Content2  \\\\\\=========== -->
                <table width="722" border="0" cellspacing="0" cellpadding="0" style="display: none;">
                  <tr>
                    <td height="50"><span class="text14">票友评论</span>&nbsp;<span class="moviename_italic">潛行凶間</span></td>
                  </tr>
                  <tr>
                    <td class="table_discu"><table width="692" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td><span class="text14">票友评论</span><span class="dicheader"> &nbsp;&nbsp;&nbsp;查看全部<span class="textmovie">4</span>条</span></td>
                        <td width="78" align="right"><table border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td width="78" height="26" align="center" background="<{$rootpath}>/images/button_bg_blk_78w.gif"><strong><a href="#" class="footlink">我也要说>></a></strong></td>
                          </tr>
                        </table></td>
                      </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td class="table_discu"><span class="textmovie">心随缘飘</span> <span class="text999">2010-06-30 23:52:14</span><br>
                      其实那个孤猴国王也蛮可爱的、我挺喜欢。因为剧中每一个角色都是那么完美、缺一不可！[<a href="#">回复</a>]</td>
                  </tr>
                  <tr>
                    <td class="table_discu"><span class="textmovie">心随缘飘</span> <span class="text999">2010-06-30 23:52:14</span><br>
                      其实那个孤猴国王也蛮可爱的、我挺喜欢。因为剧中每一个角色都是那么完美、缺一不可！[<a href="#">回复</a>]</td>
                  </tr>
                </table>
                <!--==============//////    End Main Movie Content2  \\\\\\=========== -->
                
                
                <!--==============//////    Start Main Movie Content1  \\\\\\=========== -->
                <table width="722" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td><img src="<{$rootpath}>/images/spacer.gif" width="1" height="8"></td>
                  </tr>
                  <tr>
                    <td class="dicheader"><span class="text14">专业影评</span> &nbsp;&nbsp;&nbsp;查看全部<span class="textmovie">4</span>条</td>
                  </tr>
                  <tr>
                    <td bgcolor="#dfdfdf"><img src="<{$rootpath}>/images/spacer.gif" width="1" height="1"></td>
                  </tr>
                </table>
                <!--==============//////    End Main Movie Content4  \\\\\\=========== -->
                
                
                <img src="<{$rootpath}>/images/spacer.gif" width="722" height="20">
                
                
                <!--==============//////    Start Main Movie Content5  \\\\\\=========== -->
                <table width="722" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td><table width="722" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="10" valign="top"><img src="<{$rootpath}>/images/movie_dic_tab01.gif" width="10" height="124"></td>
                        <td width="113" valign="top" background="<{$rootpath}>/images/movie_dic_tab03.gif"><table width="113" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td><img src="<{$rootpath}>/images/spacer.gif" width="1" height="6"></td>
                          </tr>
                          <tr>
                            <td height="113" align="center" background="<{$rootpath}>/images/movie_dic_tab04.gif"><table width="82" border="0" cellspacing="0" cellpadding="1">
                              <tr>
                                <td height="82" align="center" bgcolor="#dac5cb"><img src="<{$rootpath}>/images/img_80x80.jpg" width="80" height="80"></td>
                              </tr>
                            </table></td>
                          </tr>
                        </table></td>
                        <td width="7" background="<{$rootpath}>/images/movie_dic_tab03.gif"><img src="<{$rootpath}>/images/spacer.gif" width="7" height="1"></td>
                        <td valign="top" background="<{$rootpath}>/images/movie_dic_tab03.gif"><table width="580" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td height="37" class="movietext14bold">《玩具总动员3》：15年，完美谢幕</td>
                          </tr>
                          <tr>
                            <td height="27"><img src="<{$rootpath}>/images/icon_start_20x20.gif" width="20" height="20" align="absmiddle"><img src="<{$rootpath}>/images/icon_start_20x20.gif" width="20" height="20" align="absmiddle"><img src="<{$rootpath}>/images/icon_start_20x20.gif" width="20" height="20" align="absmiddle"><img src="<{$rootpath}>/images/icon_start_20x20.gif" width="20" height="20" align="absmiddle"><img src="<{$rootpath}>/images/icon_start_20x20.gif" width="20" height="20" align="absmiddle">TA的评分：<span class="moviemark18">4.5</span></td>
                          </tr>
                          <tr>
                            <td height="27"><span class="textbold">Chester Bark</span><span class="text999"> [<a href="#">加为票友</a>]  2010-6-17 15:56:06</span></td>
                          </tr>
                          <tr>
                            <td>&nbsp;</td>
                          </tr>
                          
                        </table></td>
                        <td width="10" valign="top"><img src="<{$rootpath}>/images/movie_dic_tab02.gif" width="10" height="124"></td>
                      </tr>
                    </table>
                      <table width="722" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td background="<{$rootpath}>/images/movie_dic_tab08.gif">&nbsp;</td>
                          <td bgcolor="F4F4F4"> 《玩具总动员》三部曲跨度达到了15年之久。其第一部于1995年上映，作为首部长篇CG电影，获得了极大的成功。第二部曾险些仅仅面向电视市场，但在Pixar的坚持下终于搬上了大屏幕，并成为了为数不多的续作好评甚于首作的电影之一。随后11年中，Pixar在和迪斯尼分分合合的变故中不断壮大...[查看全文]</td>
                          <td background="<{$rootpath}>/images/movie_dic_tab09.gif">&nbsp;</td>
                        </tr>
                        
                        <tr>
                          <td width="10"><img src="<{$rootpath}>/images/movie_dic_tab05.gif" width="10" height="10"></td>
                          <td background="<{$rootpath}>/images/movie_dic_tab06.gif"><img src="<{$rootpath}>/images/movie_dic_tab06.gif" width="10" height="10"></td>
                          <td width="10"><img src="<{$rootpath}>/images/movie_dic_tab07.gif" width="10" height="10"></td>
                        </tr>
                      </table></td>
                  </tr>
                </table>
                <!--==============//////    End Main Movie Content5  \\\\\\=========== -->

             <img src="<{$rootpath}>/images/spacer.gif" width="722" height="20">

                <!--==============//////    Start Main Movie Content6  \\\\\\=========== -->
                <table width="722" border="0" cellspacing="0" cellpadding="0" style="display: none;">
                  <tr>
                    <td><table width="722" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td width="10" valign="top"><img src="<{$rootpath}>/images/movie_dic_tab01.gif" width="10" height="124"></td>
                          <td width="113" valign="top" background="<{$rootpath}>/images/movie_dic_tab03.gif">
                          <table width="113" border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td><img src="<{$rootpath}>/images/spacer.gif" width="1" height="6"></td>
                              </tr>
                              <tr>
                                <td height="113" align="center" background="<{$rootpath}>/images/movie_dic_tab04.gif">
                                <table width="82" border="0" cellspacing="0" cellpadding="1">
                                    <tr>
                                      <td height="82" align="center" bgcolor="#dac5cb"><img src="<{$rootpath}>/images/img2_80x80.jpg" width="80" height="80"></td>
                                    </tr>
                                </table></td>
                              </tr>
                          </table></td>
                          <td width="7" background="<{$rootpath}>/images/movie_dic_tab03.gif"><img src="<{$rootpath}>/images/spacer.gif" width="7" height="1"></td>
                          <td valign="top" background="<{$rootpath}>/images/movie_dic_tab03.gif">
                          <table width="580" border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td height="37" class="movietext14bold">《玩具总动员3》：15年，完美谢幕</td>
                              </tr>
                              <tr>
                                <td height="27"><img src="<{$rootpath}>/images/icon_start_20x20.gif" width="20" height="20" align="absmiddle"><img src="<{$rootpath}>/images/icon_start_20x20.gif" width="20" height="20" align="absmiddle"><img src="<{$rootpath}>/images/icon_start_20x20.gif" width="20" height="20" align="absmiddle"><img src="<{$rootpath}>/images/icon_start_20x20.gif" width="20" height="20" align="absmiddle"><img src="<{$rootpath}>/images/icon_start_20x20.gif" width="20" height="20" align="absmiddle">TA的评分：<span class="moviemark18">4.5</span></td>
                              </tr>
                              <tr>
                                <td height="27"><span class="textbold">Chester Bark</span><span class="text999"> [<a href="#">加为票友</a>]  2010-6-17 15:56:06</span></td>
                              </tr>
                              <tr>
                                <td>&nbsp;</td>
                              </tr>
                          </table></td>
                          <td width="10" valign="top"><img src="<{$rootpath}>/images/movie_dic_tab02.gif" width="10" height="124"></td>
                        </tr>
                      </table>
                        <table width="722" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td background="<{$rootpath}>/images/movie_dic_tab08.gif">&nbsp;</td>
                            <td bgcolor="F4F4F4"> 《玩具总动员》三部曲跨度达到了15年之久。其第一部于1995年上映，作为首部长篇CG电影，获得了极大的成功。第二部曾险些仅仅面向电视市场，但在Pixar的坚持下终于搬上了大屏幕，并成为了为数不多的续作好评甚于首作的电影之一。随后11年中，Pixar在和迪斯尼分分合合的变故中不断壮大...[查看全文]</td>
                            <td background="<{$rootpath}>/images/movie_dic_tab09.gif">&nbsp;</td>
                          </tr>
                          <tr>
                            <td width="10"><img src="<{$rootpath}>/images/movie_dic_tab05.gif" width="10" height="10"></td>
                            <td background="<{$rootpath}>/images/movie_dic_tab06.gif"><img src="<{$rootpath}>/images/movie_dic_tab06.gif" width="10" height="10"></td>
                            <td width="10"><img src="<{$rootpath}>/images/movie_dic_tab07.gif" width="10" height="10"></td>
                          </tr>
                      </table></td>
                  </tr>
                </table>
                <!--==============//////    End Main Movie Content6  \\\\\\=========== -->
                </td>
          </tr>
        </table> 
  </div>
  <!--==============//////    movieDetailMenu2  \\\\\\=========== -->
  <div id="movieDetailMenu2" style="display:none">
  	<table width="722" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td valign="top">
                
                <!--==============//////    Start Movie marks Table  \\\\\\=========== -->            
                
                
                <!--==============//////    Start Main Movie Content3  \\\\\\=========== -->
                <table width="722" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td class="table_discu"><table width="692" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td><span class="text14">票友评论</span></td>
                        <td width="78" align="right"><table border="0" cellspacing="0" cellpadding="0">
                            <tr>
                              <td width="78" height="26" align="center" background="<{$rootpath}>/images/button_bg_yel_78w.gif"><strong><a href="#" class="footlink">我也要说>></a></strong></td>
                            </tr>
                        </table></td>
                      </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td class="table_discu"><table width="692" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td width="47" valign="top"><img src="<{$rootpath}>/images/img_45x45.jpg" width="47" height="47"></td>
                          <td width="10"><img src="<{$rootpath}>/images/spacer.gif" width="10" height="1"></td>
                          <td valign="top"><table width="635" border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td height="47"><span class="textmovie">心随缘飘</span><span class="text999">2010-06-30 23:52:14</span><br>
                                  其实那个孤猴国王也蛮可爱的、我挺喜欢。因为剧中每一个角色都是那么完美、缺一不可！[<a href="#">回复</a>]</td>
                              </tr>
                              <tr>
                                <td class="messagebox"><table width="610" border="0" cellspacing="0" cellpadding="1">
                                  <tr>
                                    <td bgcolor="#CCCCCC" class="mesguid"><table width="610" border="0" cellspacing="0" cellpadding="0">
                                      <tr>
                                        <td width="47" bgcolor="#FFFFFF"><img src="<{$rootpath}>/images/img2_45x45.jpg" width="47" height="47"></td>
                                        <td width="10" bgcolor="#FFFFFF"><img src="<{$rootpath}>/images/spacer.gif" alt="" width="10" height="1"></td>
                                        <td bgcolor="#FFFFFF"><span class="textmovie">心随缘飘</span> <span class="text999">2010-06-30 23:52:14</span><br>
                                          其实那个孤猴国王也蛮可爱的、我挺喜欢。因为剧中每一个角色都是那么完美、缺一不可！[<a href="#">回复</a>]</td>
                                      </tr>
                                    </table></td>
                                  </tr>
                                </table>
                                </td>
                              </tr>
                              <tr>
                                <td>&nbsp;</td>
                              </tr>
                              <tr>
                                <td class="messagebox"><table width="610" border="0" cellspacing="0" cellpadding="1">
                                  <tr>
                                    <td bgcolor="#CCCCCC" class="mesguid"><table width="610" border="0" cellspacing="0" cellpadding="0">
                                      <tr>
                                        <td width="47" bgcolor="#FFFFFF"><img src="<{$rootpath}>/images/img3_45x45.jpg" width="47" height="47"></td>
                                        <td width="10" bgcolor="#FFFFFF"><img src="<{$rootpath}>/images/spacer.gif" alt="" width="10" height="1"></td>
                                        <td bgcolor="#FFFFFF"><span class="textmovie">心随缘飘</span><span class="text999">2010-06-30 23:52:14</span><br>
                                          其实那个孤猴国王也蛮可爱的、我挺喜欢。因为剧中每一个角色都是那么完美、缺一不可！[<a href="#">回复</a>]</td>
                                      </tr>
                                    </table></td>
                                  </tr>
                                </table></td>
                              </tr>
                          </table></td>
                        </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td class="table_discu"><table width="692" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td width="47" valign="top"><img src="<{$rootpath}>/images/img2_45x45.jpg" width="47" height="47"></td>
                          <td width="10"><img src="<{$rootpath}>/images/spacer.gif" width="10" height="1"></td>
                          <td valign="top"><table width="635" border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td height="47"><span class="textmovie">心随缘飘</span><span class="text999">2010-06-30 23:52:14</span><br>
                                  其实那个孤猴国王也蛮可爱的、我挺喜欢。因为剧中每一个角色都是那么完美、缺一不可！[<a href="#">回复</a>]</td>
                              </tr>
                          </table></td>
                        </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td class="table_discu"><table width="692" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td width="47" valign="top"><img src="<{$rootpath}>/images/img3_45x45.jpg" width="47" height="47"></td>
                          <td width="10"><img src="<{$rootpath}>/images/spacer.gif" width="10" height="1"></td>
                          <td valign="top"><table width="635" border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td height="47"><span class="textmovie">心随缘飘</span><span class="text999">2010-06-30 23:52:14</span><br>
                                  其实那个孤猴国王也蛮可爱的、我挺喜欢。因为剧中每一个角色都是那么完美、缺一不可！[<a href="#">回复</a>]</td>
                              </tr>
                          </table></td>
                        </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td class="table_discu"><table width="692" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td width="47" valign="top"><img src="<{$rootpath}>/images/img2_45x45.jpg" width="47" height="47"></td>
                          <td width="10"><img src="<{$rootpath}>/images/spacer.gif" width="10" height="1"></td>
                          <td valign="top"><table width="635" border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td height="47"><span class="textmovie">心随缘飘</span><span class="text999">2010-06-30 23:52:14</span><br>
                                  其实那个孤猴国王也蛮可爱的、我挺喜欢。因为剧中每一个角色都是那么完美、缺一不可！[<a href="#">回复</a>]</td>
                              </tr>
                          </table></td>
                        </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td class="table_discu"><table width="692" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td width="47" valign="top"><img src="<{$rootpath}>/images/img3_45x45.jpg" width="47" height="47"></td>
                          <td width="10"><img src="<{$rootpath}>/images/spacer.gif" width="10" height="1"></td>
                          <td valign="top"><table width="635" border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td height="47"><span class="textmovie">心随缘飘</span><span class="text999">2010-06-30 23:52:14</span><br>
                                  其实那个孤猴国王也蛮可爱的、我挺喜欢。因为剧中每一个角色都是那么完美、缺一不可！[<a href="#">回复</a>]</td>
                              </tr>
                          </table></td>
                        </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td class="table_discu"><table width="692" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td width="47" valign="top"><img src="<{$rootpath}>/images/img2_45x45.jpg" width="47" height="47"></td>
                          <td width="10"><img src="<{$rootpath}>/images/spacer.gif" width="10" height="1"></td>
                          <td valign="top"><table width="635" border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td height="47"><span class="textmovie style2">心随缘飘</span> <span class="text999">2010-06-30 23:52:14</span><br>
                                  其实那个孤猴国王也蛮可爱的、我挺喜欢。因为剧中每一个角色都是那么完美、缺一不可！[<a href="#">回复</a>]</td>
                              </tr>
                          </table></td>
                        </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td class="table_discu"><table width="692" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td width="47" valign="top"><img src="<{$rootpath}>/images/img_45x45.jpg" width="47" height="47"></td>
                          <td width="10"><img src="<{$rootpath}>/images/spacer.gif" width="10" height="1"></td>
                          <td valign="top"><table width="635" border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td height="47"><span class="textmovie style2">心随缘飘</span> <span class="text999">2010-06-30 23:52:14</span><br>
                                  其实那个孤猴国王也蛮可爱的、我挺喜欢。因为剧中每一个角色都是那么完美、缺一不可！[<a href="#">回复</a>]</td>
                              </tr>
                          </table></td>
                        </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td class="table_discu"><table width="692" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td width="47" valign="top"><img src="<{$rootpath}>/images/img3_45x45.jpg" width="47" height="47"></td>
                          <td width="10"><img src="<{$rootpath}>/images/spacer.gif" width="10" height="1"></td>
                          <td valign="top"><table width="635" border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td height="47"><span class="textmovie style2">心随缘飘</span> <span class="text999">2010-06-30 23:52:14</span><br>
                                  其实那个孤猴国王也蛮可爱的、我挺喜欢。因为剧中每一个角色都是那么完美、缺一不可！[<a href="#">回复</a>]</td>
                              </tr>
                          </table></td>
                        </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td height="40" align="right">共 有<span class="textpurple"> 163 </span> 条 评 论&nbsp;&nbsp;&nbsp;&nbsp;    [ <a href="#" class="blklink">首 頁</a> ] [ <a href="#" class="blklink">上 一 页</a> ] [ <a href="#" class="textbold">1</a> ] [ <a href="#" class="blklink">2</a> ] [ <a href="#" class="blklink">3</a> ] [ <a href="#" class="blklink">4</a> ] [ <a href="#" class="blklink">5</a> ] [ <a href="#" class="blklink">下 一 页 </a> ] [ <a href="#" class="blklink">尾 页</a> ]</td>
                  </tr>
                </table>
                <!--==============//////    End Main Movie Content3  \\\\\\=========== -->
                
                
                <!--==============//////    Start Main Movie Content1  \\\\\\=========== -->
                <table width="722" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td><img src="<{$rootpath}>/images/spacer.gif" width="1" height="8"></td>
                  </tr>
                  <tr>
                    <td class="dicheader"><span class="text14">专业影评</span> &nbsp;&nbsp;&nbsp;查看全部<span class="textmovie">4</span>条</td>
                  </tr>
                  <tr>
                    <td bgcolor="#dfdfdf"><img src="<{$rootpath}>/images/spacer.gif" width="1" height="1"></td>
                  </tr>
                </table>
                <!--==============//////    End Main Movie Content4  \\\\\\=========== -->
                
                
                <img src="<{$rootpath}>/images/spacer.gif" width="722" height="20">
                
                
                <!--==============//////    Start Main Movie Content5  \\\\\\=========== -->
                <table width="722" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td><table width="722" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="10" valign="top"><img src="<{$rootpath}>/images/movie_dic_tab01.gif" width="10" height="124"></td>
                        <td width="113" valign="top" background="<{$rootpath}>/images/movie_dic_tab03.gif"><table width="113" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td><img src="<{$rootpath}>/images/spacer.gif" width="1" height="6"></td>
                          </tr>
                          <tr>
                            <td height="113" align="center" background="<{$rootpath}>/images/movie_dic_tab04.gif"><table width="82" border="0" cellspacing="0" cellpadding="1">
                              <tr>
                                <td height="82" align="center" bgcolor="#dac5cb"><img src="<{$rootpath}>/images/img_80x80.jpg" width="80" height="80"></td>
                              </tr>
                            </table></td>
                          </tr>
                        </table></td>
                        <td width="7" background="<{$rootpath}>/images/movie_dic_tab03.gif"><img src="<{$rootpath}>/images/spacer.gif" width="7" height="1"></td>
                        <td valign="top" background="<{$rootpath}>/images/movie_dic_tab03.gif"><table width="580" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td height="37" class="movietext14bold">《玩具总动员3》：15年，完美谢幕</td>
                          </tr>
                          <tr>
                            <td height="27"><img src="<{$rootpath}>/images/icon_start_20x20.gif" width="20" height="20" align="absmiddle"><img src="<{$rootpath}>/images/icon_start_20x20.gif" width="20" height="20" align="absmiddle"><img src="<{$rootpath}>/images/icon_start_20x20.gif" width="20" height="20" align="absmiddle"><img src="<{$rootpath}>/images/icon_start_20x20.gif" width="20" height="20" align="absmiddle"><img src="<{$rootpath}>/images/icon_start_20x20.gif" width="20" height="20" align="absmiddle">TA的评分：<span class="moviemark18">4.5</span></td>
                          </tr>
                          <tr>
                            <td height="27"><span class="textbold">Chester Bark</span><span class="text999"> [<a href="#">加为票友</a>]  2010-6-17 15:56:06</span></td>
                          </tr>
                          <tr>
                            <td>&nbsp;</td>
                          </tr>
                          
                        </table></td>
                        <td width="10" valign="top"><img src="<{$rootpath}>/images/movie_dic_tab02.gif" width="10" height="124"></td>
                      </tr>
                    </table>
                      <table width="722" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td background="<{$rootpath}>/images/movie_dic_tab08.gif">&nbsp;</td>
                          <td bgcolor="F4F4F4"> 《玩具总动员》三部曲跨度达到了15年之久。其第一部于1995年上映，作为首部长篇CG电影，获得了极大的成功。第二部曾险些仅仅面向电视市场，但在Pixar的坚持下终于搬上了大屏幕，并成为了为数不多的续作好评甚于首作的电影之一。随后11年中，Pixar在和迪斯尼分分合合的变故中不断壮大...<a href="#">[查看全文]</a></td>
                          <td background="<{$rootpath}>/images/movie_dic_tab09.gif">&nbsp;</td>
                        </tr>
                        
                        <tr>
                          <td width="10"><img src="<{$rootpath}>/images/movie_dic_tab05.gif" width="10" height="10"></td>
                          <td background="<{$rootpath}>/images/movie_dic_tab06.gif"><img src="<{$rootpath}>/images/movie_dic_tab06.gif" width="10" height="10"></td>
                          <td width="10"><img src="<{$rootpath}>/images/movie_dic_tab07.gif" width="10" height="10"></td>
                        </tr>
                      </table></td>
                  </tr>
                </table>
                <!--==============//////    End Main Movie Content5  \\\\\\=========== -->
                
                
                <img src="<{$rootpath}>/images/spacer.gif" width="722" height="20">
                
                
                
                <!--==============//////    Start Main Movie Content6  \\\\\\=========== -->
                <table width="722" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td><table width="722" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td width="10" valign="top"><img src="<{$rootpath}>/images/movie_dic_tab01.gif" width="10" height="124"></td>
                          <td width="113" valign="top" background="<{$rootpath}>/images/movie_dic_tab03.gif"><table width="113" border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td><img src="<{$rootpath}>/images/spacer.gif" width="1" height="6"></td>
                              </tr>
                              <tr>
                                <td height="113" align="center" background="<{$rootpath}>/images/movie_dic_tab04.gif"><table width="82" border="0" cellspacing="0" cellpadding="1">
                                    <tr>
                                      <td height="82" align="center" bgcolor="#dac5cb"><img src="<{$rootpath}>/images/img2_80x80.jpg" width="80" height="80"></td>
                                    </tr>
                                </table></td>
                              </tr>
                          </table></td>
                          <td width="7" background="<{$rootpath}>/images/movie_dic_tab03.gif"><img src="<{$rootpath}>/images/spacer.gif" width="7" height="1"></td>
                          <td valign="top" background="<{$rootpath}>/images/movie_dic_tab03.gif"><table width="580" border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td height="37" class="movietext14bold">《玩具总动员3》：15年，完美谢幕</td>
                              </tr>
                              <tr>
                                <td height="27"><img src="<{$rootpath}>/images/icon_start_20x20.gif" width="20" height="20" align="absmiddle"><img src="<{$rootpath}>/images/icon_start_20x20.gif" width="20" height="20" align="absmiddle"><img src="<{$rootpath}>/images/icon_start_20x20.gif" width="20" height="20" align="absmiddle"><img src="<{$rootpath}>/images/icon_start_20x20.gif" width="20" height="20" align="absmiddle"><img src="<{$rootpath}>/images/icon_start_20x20.gif" width="20" height="20" align="absmiddle">TA的评分：<span class="moviemark18">4.5</span></td>
                              </tr>
                              <tr>
                                <td height="27"><span class="textbold">Chester Bark</span><span class="text999"> [<a href="#">加为票友</a>]  2010-6-17 15:56:06</span></td>
                              </tr>
                              <tr>
                                <td>&nbsp;</td>
                              </tr>
                          </table></td>
                          <td width="10" valign="top"><img src="<{$rootpath}>/images/movie_dic_tab02.gif" width="10" height="124"></td>
                        </tr>
                      </table>
                        <table width="722" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td background="<{$rootpath}>/images/movie_dic_tab08.gif">&nbsp;</td>
                            <td bgcolor="F4F4F4"> 《玩具总动员》三部曲跨度达到了15年之久。其第一部于1995年上映，作为首部长篇CG电影，获得了极大的成功。第二部曾险些仅仅面向电视市场，但在Pixar的坚持下终于搬上了大屏幕，并成为了为数不多的续作好评甚于首作的电影之一。随后11年中，Pixar在和迪斯尼分分合合的变故中不断壮大...<a href="#">[查看全文]</a></td>
                            <td background="<{$rootpath}>/images/movie_dic_tab09.gif">&nbsp;</td>
                          </tr>
                          <tr>
                            <td width="10"><img src="<{$rootpath}>/images/movie_dic_tab05.gif" width="10" height="10"></td>
                            <td background="<{$rootpath}>/images/movie_dic_tab06.gif"><img src="<{$rootpath}>/images/movie_dic_tab06.gif" width="10" height="10"></td>
                            <td width="10"><img src="<{$rootpath}>/images/movie_dic_tab07.gif" width="10" height="10"></td>
                          </tr>
                      </table></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td><table width="722" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td class="dicheader"><span class="text14">我也来评论</span></td>
                      </tr>
                      <tr>
                        <td class="dicheader"><table width="706" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                              <td width="602" valign="top"><label>
                                <textarea name="textfield2" rows="4" class="forminput600" id="textfield2"></textarea>
                              </label></td>
                              <td width="10"><img src="<{$rootpath}>/images/spacer.gif" width="10" height="1"></td>
                              <td width="94"><a href="#"><img src="<{$rootpath}>/images/<{$lang}>/button_message_yel_submit.gif" border="0"></a></td>
                            </tr>
                        </table></td>
                      </tr>
                    </table></td>
                  </tr>
                </table>
                <!--==============//////    End Main Movie Content6  \\\\\\=========== -->
                </td>
          </tr>
        </table>
  </div>
  
  <!--==============//////    movieDetailMenu3  \\\\\\=========== -->
  <div id="movieDetailMenu3" style="display:none">
  	<!--==============//////    Start Main Movie Content1  \\\\\\=========== -->   
        <table width="635" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="30" valign="top"><img src="<{$rootpath}>/images/spacer.gif" width="30" height="1"></td>
            <td valign="top"><table width="605" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="508" valign="bottom"><table width="508" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="66"><img src="<{$rootpath}>/images/box_process_top1.gif" width="66" height="13"></td>
                    <td width="21"><img src="<{$rootpath}>/images/box_process_top2.gif" width="21" height="13"></td>
                    <td background="<{$rootpath}>/images/box_process_top3.gif"><img src="<{$rootpath}>/images/box_process_top3.gif" width="14" height="13"></td>
                    <td width="17" height="13"><img src="<{$rootpath}>/images/box_process_top4.gif" width="17" height="13"></td>
                  </tr>
                  <tr>
                    <td align="center" background="<{$rootpath}>/images/box_process_mid1.gif"><img src="<{$rootpath}>/images/<{$lang}>/movie_booking_title3.gif" width="41" height="82"></td>
                    <td background="<{$rootpath}>/images/box_process_mid2.gif"><img src="<{$rootpath}>/images/box_process_mid2.gif" width="21" height="13"></td>
                    <td valign="top" bgcolor="#f4f4f4"><table width="404" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td width="90"><img src="<{$rootpath}>/images/icon_indent_dort.gif" width="11" height="17" align="absmiddle">网页<br>
                              <img src="<{$rootpath}>/images/icon_indent_dort.gif" width="11" height="17" align="absmiddle">终端机<br>
                              <img src="<{$rootpath}>/images/icon_indent_dort.gif" width="11" height="17" align="absmiddle">手机<br>
                              <img src="<{$rootpath}>/images/icon_indent_dort.gif" width="11" height="17" align="absmiddle">呼叫中心</td>
                          <td><img src="<{$rootpath}>/images/img_process1.jpg" width="314" height="161"></td>
                        </tr>
                    </table></td>
                    <td background="<{$rootpath}>/images/box_process_mid3.gif"><img src="<{$rootpath}>/images/box_process_mid3.gif" width="17" height="13"></td>
                  </tr>
                  <tr>
                    <td><img src="<{$rootpath}>/images/box_process_bom1.gif" width="66" height="13"></td>
                    <td><img src="<{$rootpath}>/images/box_process_bom2.gif" width="21" height="13"></td>
                    <td background="<{$rootpath}>/images/box_process_bom3.gif"><img src="<{$rootpath}>/images/box_process_bom3.gif" width="14" height="13"></td>
                    <td><img src="<{$rootpath}>/images/box_process_bom4.gif" width="17" height="13"></td>
                  </tr>
                </table></td>
                <td valign="bottom"><img src="<{$rootpath}>/images/icon_process_7.gif" width="109" height="109"></td>
                </tr>
            </table></td>
            </tr>
          <tr>
            <td valign="top">&nbsp;</td>
            <td valign="top">&nbsp;</td>
            </tr>
          <tr>
            <td valign="top">&nbsp;</td>
            <td align="right" valign="top"><table width="440" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="66"><img src="<{$rootpath}>/images/box_process_top1.gif" width="66" height="13"></td>
                <td width="21"><img src="<{$rootpath}>/images/box_process_top2.gif" width="21" height="13"></td>
                <td background="<{$rootpath}>/images/box_process_top3.gif"><img src="<{$rootpath}>/images/box_process_top3.gif" width="14" height="13"></td>
                <td width="17" height="13"><img src="<{$rootpath}>/images/box_process_top4.gif" width="17" height="13"></td>
              </tr>
              <tr>
                <td align="center" background="<{$rootpath}>/images/box_process_mid1.gif"><img src="<{$rootpath}>/images/<{$lang}>/movie_booking_title2.gif" width="41" height="82"></td>
                <td background="<{$rootpath}>/images/box_process_mid2.gif"><img src="<{$rootpath}>/images/box_process_mid2.gif" width="21" height="13"></td>
                <td valign="top" bgcolor="#f4f4f4"><table width="320" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="60"><img src="<{$rootpath}>/images/icon_indent_dort.gif" width="11" height="17" align="absmiddle">信用卡</td>
                    <td><img src="<{$rootpath}>/images/icon_process_1.gif" width="48" height="50"></td>
                    <td width="60"><img src="<{$rootpath}>/images/icon_indent_dort.gif" width="11" height="17" align="absmiddle">现金</td>
                    <td><img src="<{$rootpath}>/images/icon_process_4.gif" width="48" height="50"></td>
                  </tr>
                  <tr>
                    <td><img src="<{$rootpath}>/images/icon_indent_dort.gif" width="11" height="17" align="absmiddle">银联</td>
                    <td><img src="<{$rootpath}>/images/icon_process_2.gif" width="48" height="50"></td>
                    <td><img src="<{$rootpath}>/images/icon_indent_dort.gif" width="11" height="17" align="absmiddle">会员卡</td>
                    <td><img src="<{$rootpath}>/images/icon_process_5.gif" width="48" height="50"></td>
                  </tr>
                  <tr>
                    <td><img src="<{$rootpath}>/images/icon_indent_dort.gif" width="11" height="17" align="absmiddle">借记卡</td>
                    <td><img src="<{$rootpath}>/images/icon_process_3.gif" width="48" height="50"></td>
                    <td><img src="<{$rootpath}>/images/icon_indent_dort.gif" width="11" height="17" align="absmiddle">电子卡</td>
                    <td><img src="<{$rootpath}>/images/icon_process_6.gif" width="48" height="50"></td>
                  </tr>
                </table></td>
                <td background="<{$rootpath}>/images/box_process_mid3.gif"><img src="<{$rootpath}>/images/box_process_mid3.gif" width="17" height="13"></td>
              </tr>
              <tr>
                <td><img src="<{$rootpath}>/images/box_process_bom1.gif" width="66" height="13"></td>
                <td><img src="<{$rootpath}>/images/box_process_bom2.gif" width="21" height="13"></td>
                <td background="<{$rootpath}>/images/box_process_bom3.gif"><img src="<{$rootpath}>/images/box_process_bom3.gif" width="14" height="13"></td>
                <td><img src="<{$rootpath}>/images/box_process_bom4.gif" width="17" height="13"></td>
              </tr>
            </table></td>
            </tr>
          <tr>
            <td valign="top">&nbsp;</td>
            <td valign="top">&nbsp;</td>
            </tr>
          <tr>
            <td valign="top">&nbsp;</td>
            <td valign="top"><table width="605" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="435"><table width="435" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="66"><img src="<{$rootpath}>/images/box_process_top1.gif" width="66" height="13"></td>
                    <td width="21"><img src="<{$rootpath}>/images/box_process_top2.gif" width="21" height="13"></td>
                    <td background="<{$rootpath}>/images/box_process_top3.gif"><img src="<{$rootpath}>/images/box_process_top3.gif" width="14" height="13"></td>
                    <td width="17" height="13"><img src="<{$rootpath}>/images/box_process_top4.gif" width="17" height="13"></td>
                  </tr>
                  <tr>
                    <td align="center" background="<{$rootpath}>/images/box_process_mid1.gif"><img src="<{$rootpath}>/images/<{$lang}>/movie_booking_title1.gif" width="41" height="82"></td>
                    <td background="<{$rootpath}>/images/box_process_mid2.gif"><img src="<{$rootpath}>/images/box_process_mid2.gif" width="21" height="13"></td>
                    <td valign="top" bgcolor="#f4f4f4"><table width="325" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td width="90"><img src="<{$rootpath}>/images/icon_indent_dort.gif" width="11" height="17" align="absmiddle">终端机<br>
                              <img src="<{$rootpath}>/images/icon_indent_dort.gif" width="11" height="17" align="absmiddle">手机<br>
                              <img src="<{$rootpath}>/images/icon_indent_dort.gif" width="11" height="17" align="absmiddle">柜位<br>
                              <img src="<{$rootpath}>/images/icon_indent_dort.gif" width="11" height="17" align="absmiddle">电子邮件<br>
                              <img src="<{$rootpath}>/images/icon_indent_dort.gif" width="11" height="17" align="absmiddle">送货上门</td>
                          <td><img src="<{$rootpath}>/images/img_process2.jpg" width="236" height="161"></td>
                        </tr>
                    </table></td>
                    <td background="<{$rootpath}>/images/box_process_mid3.gif"><img src="<{$rootpath}>/images/box_process_mid3.gif" width="17" height="13"></td>
                  </tr>
                  <tr>
                    <td><img src="<{$rootpath}>/images/box_process_bom1.gif" width="66" height="13"></td>
                    <td><img src="<{$rootpath}>/images/box_process_bom2.gif" width="21" height="13"></td>
                    <td background="<{$rootpath}>/images/box_process_bom3.gif"><img src="<{$rootpath}>/images/box_process_bom3.gif" width="14" height="13"></td>
                    <td><img src="<{$rootpath}>/images/box_process_bom4.gif" width="17" height="13"></td>
                  </tr>
                </table></td>
                <td valign="top"><img src="<{$rootpath}>/images/icon_process_8.gif"></td>
              </tr>
            </table></td>
            </tr>
        </table>
        <!--==============//////    End Main Movie Content1  \\\\\\=========== -->
  </div>
  
  <!--==============//////    movieDetailMenu4  \\\\\\=========== -->
  <div id="movieDetailMenu4" style="display:none">
  	
  </div>
<script>
  $(document).ready(function(){
	$(".CRselectBox").hover(function() { 
        $(this).addClass("CRselectBoxHover"); 
        }, function() { 
           $(this).removeClass("CRselectBoxHover"); 
        }); 
	$(".goto_show").click(function(){
		var show_id=$("#"+$(this).attr("name")).val();
		if(show_id > parseInt(0)){
			window.location.href='choose_seat.php?show_id='+show_id;
		}else{
			alert("<{$LANG.select_movie_message}>");
		}
	});
		
     $(document).click(function(event) {
		var target = event.srcElement? event.srcElement: event.target;
		var id=$(target).attr("id") != ''? $(target).attr("id"): $(target).parent().attr("id");
		var start=($(target).attr("id") != ''? $(target).attr("id"): $(target).parent().attr("id")).indexOf('_');
		var end=($(target).attr("id") != ''? $(target).attr("id"): $(target).parent().attr("id")).length;
		var tag = $('.CRselectBoxOptions'); 	
		$.each(tag, function(){
			if(this.id!=("CRselectBoxOptions"+id.substring(start,end))){
				$("#"+this.id).hide();
			}
		}); 
	});
	
	$(window).resize(function(event) {
		var tag = $('.CRselectBoxOptions'); 	
		$.each(tag, function(){
			var start = this.id.indexOf('_');
			var div = $("#"+"CRselectBox"+this.id.substring(start));
			$("#"+this.id).css('left', div.offset().left+1); 
        	$("#"+this.id).css('top',div.offset().top + div.get(0).offsetHeight-1.5);
		}); 
	});
  });
	
	function showDiv(ul_id,div_id){
		if ($("#"+ul_id).is(':visible'))
		{
			$("#"+ul_id).hide();
		}
		else
		{
	        $("#"+ul_id).show(); 
	        $("#"+ul_id).css('left',$("#"+div_id).offset().left+1); 
	        $("#"+ul_id).css('top',$("#"+div_id).offset().top + $("#"+div_id).get(0).offsetHeight-1.5);
	    } 
	}
</script>