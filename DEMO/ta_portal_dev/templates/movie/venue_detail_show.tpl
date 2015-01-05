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
<table border="1" cellpadding="1" cellspacing="1" style="width:900px;">
    <{foreach from=$show_list.venue_details item=venue_details}>   
			<{foreach from=$venue_details.activity_details item=activity_details}>
				<tr>
					<td>						
						<div style="padding-left:10px;">
						 	<{if $activity_details.activity_poster <>''}>
						  		<img src="<{$resource_path}><{$activity_details.poster}>" width="100" height="139" />
						  	<{/if}>                 
			            </div>
					</td>
					<td>
						<table>
							<tr height="35px">						
								<td  valign="center"><span  class="cinemafont3"><{$activity_details.name}></span></td>
								<td valign="top" height="30"> 	
									<table>
										<tr>
											<td>	
										        
												<{$LANG.index_number}>：
												<{if $activity_details.score <>''}>
												<span class="moviemark" id="score_number_value<{$activity_details.activity_id}>"><{$activity_details.score}></span>
												<{else}> 
												<span class="moviemark" id="score_number_value<{$activity_details.activity_id}>">0</span>
												<{/if}> 
									 			<div id="score<{$activity_details.activity_id}>">
												</div>										
											    <script type="text/javascript">
											    	var score='<{$activity_details.score}>';
											    	var activity_id='<{$activity_details.activity_id}>';
													if(score== ''){
														score=0;
													}
													<{if $activity_details.score_enabled >0 }>
														$("#score"+activity_id).studyplay_star({MaxStar:5,CurrentStar:score,Enabled:false,id:activity_id},function(value){});
													<{else}>
														$("#score"+activity_id).studyplay_star({MaxStar:5,CurrentStar:score,Enabled:true,id:activity_id},function(value){});
													<{/if}>
												</script>
											</td>
											<td>
												<div id="div<{$activity_details.activity_id}>" style="display:none">
													<{$LANG.assess_success}>
												</div>
											</td>
										</tr>
									</table>	
								</td>
							</tr>
							<tr>
								<td>
									<{$LANG.venue_detail.duration}>:<{$activity_details.duration}>
									<{$LANG.venue_detail.level}>: 
								</td>
								<td>
									<{$LANG.price}> &nbsp; <{$LANG.memberprice}>
								</td>
							</tr>
							<tr>
				        		<td align="left" class="tdCRselectBox"  style="padding-left:25px;">  
				        			 <div class="CRselectBox" id="CRselectBox_<{$activity_details.category_id}>_<{$activity_details.activity_id}>" onclick="showDiv('CRselectBoxOptions_<{$activity_details.category_id}>_<{$activity_details.activity_id}>','CRselectBox_<{$activity_details.category_id}>_<{$activity_details.activity_id}>')"> 
								        <input type="hidden" value="<{$venue_item.schedule_details.0.show_id}>" id="abc_<{$activity_details.category_id}>_<{$activity_details.activity_id}>" /> 
								        <input type="hidden" value="" name="abc_CRtext" id="abc_CRtext" /> 
									    <a style="padding-left:5px;TEXT-DECORATION:none;" rel="<{$venue_item.schedule_details.0.show_id}>" id="CRselectValue_<{$activity_details.category_id}>_<{$activity_details.activity_id}>" >
									    	
									    </a>
									</div>
									<script type="text/javascript">
										var hot_movie_number_temp=0;
										var CRselectValue_name="";
										var abc_name="";
										var is_already_sold=0;
									</script>
									<ul class="CRselectBoxOptions" id="CRselectBoxOptions_<{$activity_details.category_id}>_<{$activity_details.activity_id}>"  >
										<{foreach from=$activity_details.schedule_details item=schedule_details}>
											<li id="CRselectBoxItem<{$schedule_details.show_id}>"
											<{if $schedule_details.remain_ticket <= 0}>
											<{else}>
											onclick="setValue('CRselectBoxItem<{$schedule_details.show_id}>',
											'CRselectBoxOptions_<{$activity_details.category_id}>_<{$activity_details.activity_id}>',
											'CRselectValue_<{$activity_details.category_id}>_<{$activity_details.activity_id}>',
											'abc_<{$activity_details.category_id}>_<{$activity_details.activity_id}>',
											'CRselectBoxItemA<{$schedule_details.show_id}>_<{$activity_details.category_id}>_<{$activity_details.activity_id}>')"
											<{/if}>
											>
												<a href="###" style="TEXT-DECORATION:none;" id="CRselectBoxItemA<{$schedule_details.show_id}>_<{$activity_details.category_id}>_<{$activity_details.activity_id}>" rel="<{$schedule_details.show_id}>" >
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
													'CRselectBoxOptions_<{$activity_details.category_id}>_<{$activity_details.activity_id}>',
													'CRselectValue_<{$activity_details.category_id}>_<{$activity_details.activity_id}>',
													'abc_<{$activity_details.category_id}>_<{$activity_details.activity_id}>',
													'CRselectBoxItemA<{$schedule_details.show_id}>_<{$activity_details.category_id}>_<{$activity_details.activity_id}>');
												}
												if( (remain_ticket <= 0) && (hot_movie_number_temp==0)){
													is_already_sold=2;
													CRselectValue_name='CRselectValue_<{$activity_details.category_id}>_<{$activity_details.activity_id}>';
													abc_name='abc_<{$activity_details.category_id}>_<{$activity_details.activity_id}>';
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
								<td  valign="center">&nbsp;&nbsp;<input type="button" value='' name='abc_<{$activity_details.category_id}>_<{$activity_details.activity_id}>'  class="ticketingButton goto_show" /></td>
						    </tr>
						</table>
					</td>
					
				</tr>
				 <tr ><td height="10" colspan="2" ></td></tr>
			<{/foreach}>	
	<{/foreach}>

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
		var url = "venue_detail.php";
		$('#div3').load(url, {"action":"resetCriteria","page_no":page_no}, function() {
			$('#div3').css('display','');
			$('#div3_load').css('display','none');
		});
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