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
<table>
<tr><td>
<{foreach from=$venue_full_list item=venue}>
<table width="730" border="0" cellspacing="0" cellpadding="0">
     			   <tr>
                    <td height="35" valign="bottom">
                    <table width="730" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="530" class="moviename_20px"><a href="venue_detail.php?city_id=<{$param_list.city_id}>&venue_id=<{$venue.venue_id}>"><span class="moviename_20px"><{$venue.venue_name}></span></a></td>
                        <td width="70" valign="bottom"><img src="<{$rootpath}>/images/colour_1.gif" align="left"><{$LANG.memberprice}></td>
					<td width="130" valign="bottom"><img src="<{$rootpath}>/images/colour_2.gif" align="left"><{$LANG.price}></td>
                      </tr>
                    </table>
                    </td>
                   </tr>

                  <tr>
                    <td><table width="730" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="180" valign="top">
                        <table width="180" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td width="107">
                            	<{if $venue.poster <> ''}>
                        		<a href="venue_detail.php?city_id=<{$param_list.city_id}>&venue_id=<{$venue.venue_id}>">
                        			<img src="<{$resource_path}><{$venue.poster}>" border="0" width="<{$venue.width}>" height="<{$venue.height}>">
                        		</a>
                            	<{/if}>	
                            </td>
                            <td width="20"><img src="<{$rootpath}>/images/spacer.gif" width="20" height="1"></td>
                          </tr>
                          <tr>
                            <td valign="top">
                            <!-- 星星指數-->
                            <div id="score<{$venue.venue_id}>">
							   <span>
							   <{$LANG.movie_list.recommend_index}>
							   </span>
							</div>
						    <script type="text/javascript">
						    	var score='<{$venue.score}>';
						    	var venue_id='<{$venue.venue_id}>';
								if(score== ''){
									score=0;
								}
								<{if $venue.score_enabled >0 }>
									$("#score"+venue_id).studyplay_star({MaxStar:5,CurrentStar:score,Enabled:false,id:venue_id},function(value){});
								<{else}>
									$("#score"+venue_id).studyplay_star({MaxStar:5,CurrentStar:score,Enabled:true,id:venue_id},function(value){});
								<{/if}>
							</script>
							<!-- end 星星指數-->
							</td>
                          </tr>
                          <tr>
                            <td>
                             <div id="score_number<{$venue.venue_id}>" >
									<{$LANG.index_number}>：
									<{if $venue.score neq ""}>
									<span class="moviemark" id="score_number_value<{$venue.venue_id}>"><{$venue.score}></span>
									<{else}> 
									<span class="moviemark" id="score_number_value<{$venue.venue_id}>">0</span>
									<{/if}>
							  </div> 
                            </td>
                          </tr>
                          <tr>
							<td>
								<div id="div<{$venue.venue_id}>" style="display:none">
									<{$LANG.assess_success}>
								</div>
							</td>
						  </tr>
                          <tr>
                            <td><img src="<{$rootpath}>/images/icon_tools_1.gif">  &nbsp;&nbsp;<img src="<{$rootpath}>/images/icon_tools_2.gif">  &nbsp;&nbsp;<img src="<{$rootpath}>/images/icon_tools_3.gif"></td>
                          </tr>
                        </table></td>
                        <td width="550" valign="top">
                        <table width="550" border="0" cellspacing="0" cellpadding="0">
                        <{foreach from=$venue.activity_details item=activity_details}>
                          <tr>
                            <td width="150" align="right"><a class="black" href="movie_detail.php?city_id=<{$param_list.city_id}>&activity_id=<{$activity_details.activity_id}>" ><{$activity_details.name}></a></td>
                            <td width="330" align="left" class="tdCRselectBox"  style="padding-left:25px;">
                            <div class="CRselectBox" id="CRselectBox_<{$venue.venue_id}>_<{$activity_details.activity_id}>" onclick="showDiv('CRselectBoxOptions_<{$venue.venue_id}>_<{$activity_details.activity_id}>','CRselectBox_<{$venue.venue_id}>_<{$activity_details.activity_id}>')"> 
						        <input type="hidden" value="<{$activity_details.schedule_details.0.show_id}>" id="abc_<{$venue.venue_id}>_<{$activity_details.activity_id}>" /> 
						        <input type="hidden" value="" name="abc_CRtext" id="abc_CRtext" /> 
							    <a style="padding-left:5px;TEXT-DECORATION:none;" rel="<{$activity_details.schedule_details.0.show_id}>" id="CRselectValue_<{$venue.venue_id}>_<{$activity_details.activity_id}>" >
							    	
							    </a>
							</div>
							<script type="text/javascript">
								var hot_movie_number_temp=0;
								var CRselectValue_name="";
								var abc_name="";
								var is_already_sold=0;
							</script>
							<ul class="CRselectBoxOptions" id="CRselectBoxOptions_<{$venue.venue_id}>_<{$activity_details.activity_id}>"  >
								<{foreach from=$activity_details.schedule_details item=schedule_details}>
									<li id="CRselectBoxItem<{$schedule_details.show_id}>"
									<{if $schedule_details.remain_ticket <= 0}>
									<{else}>
									onclick="setValue('CRselectBoxItem<{$schedule_details.show_id}>',
									'CRselectBoxOptions_<{$venue.venue_id}>_<{$activity_details.activity_id}>',
									'CRselectValue_<{$venue.venue_id}>_<{$activity_details.activity_id}>',
									'abc_<{$venue.venue_id}>_<{$activity_details.activity_id}>',
									'CRselectBoxItemA<{$schedule_details.show_id}>_<{$venue.venue_id}>_<{$activity_details.activity_id}>')"
									<{/if}>
									>
										<a href="###" style="TEXT-DECORATION:none;" id="CRselectBoxItemA<{$schedule_details.show_id}>_<{$venue.venue_id}>_<{$activity_details.activity_id}>" rel="<{$schedule_details.show_id}>" >
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
											'CRselectBoxOptions_<{$venue.venue_id}>_<{$activity_details.activity_id}>',
											'CRselectValue_<{$venue.venue_id}>_<{$activity_details.activity_id}>',
											'abc_<{$venue.venue_id}>_<{$activity_details.activity_id}>',
											'CRselectBoxItemA<{$schedule_details.show_id}>_<{$venue.venue_id}>_<{$activity_details.activity_id}>');
										}
										if( (remain_ticket <= 0) && (hot_movie_number_temp==0)){
											is_already_sold=2;
											CRselectValue_name='CRselectValue_<{$venue.venue_id}>_<{$activity_details.activity_id}>';
											abc_name='abc_<{$venue.venue_id}>_<{$activity_details.activity_id}>';
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
                            <td width="70" height="30" align="right"><a href="###" class="goto_show" name='abc_<{$venue.venue_id}>_<{$activity_details.activity_id}>' ><img src="<{$rootpath}>/images/<{$lang}>/button_buy_now_yel.gif" width="67" height="24" border="0" /></a></td>
                          </tr>
                          <{/foreach}>
                        </table>
                        </td>
                      </tr>
                    </table>
                      </td>
                    </tr>
                  <tr>
                    <td height="10">&nbsp;</td>
                    </tr>
                  <tr>
                    <td height="2" bgcolor="#c52d47"><img src="<{$rootpath}>/images/spacer.gif" alt="" width="2" height="2"></td>
                    </tr>
                </table>
                 <{/foreach}>
                <!--==============//////    End Main Movie Content1  \\\\\\=========== -->  
              </td>
          </tr>
          
          <!--分頁-->
          <tr>
            <td valign="top">&nbsp;</td>
          </tr>
          <{if $total_page >1}>
          <tr>
            <td valign="top">
            <table border="0" cellspacing="0" cellpadding="0">
              <{if $total_page >1}>
              <tr>
                <td width="75">
                <table width="66" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="66" height="23" align="center" ><a href="javascript:void(0)" onclick="movieBackPage()" class="blklink  pageno2"><{$LANG.back}></a></td>
                  </tr>
                </table>
                </td>
                <{/if}>
                <td>
                <table border="0" cellspacing="0" cellpadding="0">
                  <tr>
                  	<{section name=loop loop=$total_page}> 
                      <td width="25" height="23" align="center" valign="middle">
                      <{if $param_list.page_from == $smarty.section.loop.index+1 }>
									<span class="pageno_on"  id="<{$smarty.section.loop.index+1}>"><{$smarty.section.loop.index+1}></span>
									<{else}>
									<a class="pageno" href="#" id="<{$smarty.section.loop.index+1}>" onclick="changePageNum(<{$smarty.section.loop.index+1}>)" ><{$smarty.section.loop.index+1}></a>
									<{/if}>
                      </td>
                      <td><img src="<{$rootpath}>/images/spacer.gif" width="8" height="8"></td>
                    <{/section}>
                    </tr>
                </table>
                </td>
                <{if $total_page >1}>
                <td width="75" align="right">
                <table width="66" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="66" height="23" align="center" ><a href="javascript:void(0)" onclick="movieNextPages()" class="blklink  pageno2"><{$LANG.next}></a></td>
                  </tr>
                </table>
                </td>
                <{/if}>
              </tr>
            </table>
            </td>
          </tr>
          <{/if}> 
</table>

<script type="text/javascript">	
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
	function changePageNum(page_no){
		$('#div3').css('display','none');
		$('#div3_load').css('display','');
		var url = "venue_list.php";
		$('#div3').load(url, {"action":"resetCriteria","page_no":page_no}, function() {
			$('#div3').css('display','');
			$('#div3_load').css('display','none');
		});
	}
	
	function movieNextPages(){
		if(<{$param_list.page_from}> < <{$total_page}>){
			var page_no=<{$param_list.page_from}>+1;
			$('#div3').css('display','none');
			$('#div3_load').css('display','');
			var url = "venue_list.php";
			$('#div3').load(url, {"action":"resetCriteria","page_no":page_no}, function() {
				$('#div3').css('display','');
				$('#div3_load').css('display','none');
			});
		}
	}
	
	function movieBackPage(){				
		if(<{$param_list.page_from}> > 1){
			var page_no=<{$param_list.page_from}>-1;
			$('#div3').css('display','none');
			$('#div3_load').css('display','');
			var url = "venue_list.php";
			$('#div3').load(url, {"action":"resetCriteria","page_no":page_no}, function() {
				$('#div3').css('display','');
				$('#div3_load').css('display','none');
			});
		}
	}
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