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
<table width="730" border="0" cellspacing="0" cellpadding="0">
 <{foreach key=k from=$movie_full_list item=movie}>
	<tr>
		<td height="35" valign="bottom">
			<table width="730" border="0" cellspacing="0" cellpadding="0">
				<tr>
					<td width="340" class="moviename_20px">
						<a href="movie_detail.php?city_id=<{$param_list.city_id}>&activity_id=<{$movie.activity_id}>" ><{$movie.name}></a>
					</td>
					<td width="70" valign="middle"><a href="javascript:void(0)"><span id="moviesChosen_<{$movie.activity_id}>" onclick="showMoviesChosen('<{$movie.activity_id}>')" style="color:#C21759;font-weight:bold;"><{$LANG.hot_movie.chosen}><span></a></td>
					
					<td width="120" valign="middle">
						
						<div id="eles<{$k}>" class="district_div">
							<a href="javascript:void(0)"><span style="color:#C21759;text-decoration: none;font-weight: bold;margin-left: 20px;"><{$LANG.hot_movie.district}></span></a>
						</div>
			
						<div class="clr"></div>
						<div id="blks<{$k}>" class="blk" style="display:none;" >
						<div class="head"><div class="head-right">
						</div>
						</div>
						<div class="main"> 
						<a href="javascript:void(0)" id="closes<{$k}>" class="closeBtn"><{$LANG.close}></a>
							<ul>
								<{foreach item=districtDetails from=$movie.district_details}>
									<li><a href="javascript:void(0)" onclick="changeMovieDistrict('<{$movie.activity_id}>','<{$districtDetails.district_id}>');(PopupLayers<{$k}>).close()"><{$districtDetails.district_name}></a></li>
								<{/foreach}>
							</ul>
						</div>
						<script type="text/javascript">		
							var	PopupLayers<{$k}> = new PopupLayer({trigger:"#eles<{$k}>",popupBlk:"#blks<{$k}>",closeBtn:"#closes<{$k}>",useFx:true}); 
						
						</script>	
					</td>
					<td width="70" valign="bottom"><img src="<{$rootpath}>/images/colour_1.gif" align="left"><{$LANG.memberprice}></td>
					<td width="130" valign="bottom"><img src="<{$rootpath}>/images/colour_2.gif" align="left"><{$LANG.price}></td>
				</tr>
			</table>
		</td>
	</tr>
	<tr>
		<td>
			<table width="730" border="0" cellspacing="0" cellpadding="0">
			
			<tr>
				<td width="200"  valign="middle">
					<table width="200" border="0" cellspacing="0" cellpadding="0">
						<tr>
							<td>
								&nbsp;
							</td>
						</tr>
						<tr>
							<td>
								<{if $movie.poster <>''}>
									<a href="movie_detail.php?city_id=<{$param_list.city_id}>&activity_id=<{$movie.activity_id}>" >
										<img src="<{$resource_path}><{$movie.poster}>" border="0"/>
									</a>
						  	 	<{/if}>  
							</td>
							<td width="20"><img src="<{$rootpath}>/images/spacer.gif" width="20" height="1"></td>
							<td width="93" valign="top">
								
							</td>
						</tr>
						<tr>
							<td>
								&nbsp;&nbsp;&nbsp;
								<input type="hidden" value="<{$movie.activity_id}>" id="hidden_<{$movie.activity_id}>" />
							</td>
						</tr>
						<tr>
							<td>
							<div id="score_number<{$movie.activity_id}>" >
							<{$LANG.index_number}>：
							<{if $movie.poster <>''}>
								<span class="moviemark" id="score_number_value<{$movie.activity_id}>"><{$movie.score}></span>
							<{else}> 
								<span class="moviemark" id="score_number_value<{$movie.activity_id}>">0</span>
							<{/if}>
							</div>  
							</td>
							<td>&nbsp;</td>
							<td valign="top">&nbsp;</td>
						</tr>
						<tr height="30px">
							<td>
							<{include file="$smarty_root/score/score_html.tpl" }>
							</td>
						</tr>
					</table>
				</td>
				<td width="530" valign="top">
				<table width="530" border="0" cellspacing="0" cellpadding="0">
					<{foreach from=$movie.venue_details item=venue_item}>
					<tr class="movie<{$movie.activity_id}>_<{$venue_item.district_id}>" name="movieList<{$movie.activity_id}>">
						<td width="20">
						<{if $venue_item.organizer_icon_path <>''}>
							<img src="<{$resource_path}><{$venue_item.organizer_icon_path}>" alt="<{$venue_item.organizer_icon_alt}>" align="left">
						<{/if}>
						</td>
						<td width="120" align="right"><a class="black" href="venue_detail.php?city_id=<{$param_list.city_id}>"><{$venue_item.venue_name}></a></td>
						<td width="320"  align="left" class="tdCRselectBox"  style="padding-left:25px;">
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
										<a href="###" style="TEXT-DECORATION:none;" id="CRselectBoxItemA<{$schedule_details.show_id}>_<{$movie.activity_id}>_<{$venue_item.venue_id}>" rel="<{$schedule_details.show_id}>" >
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
						<td width="70" height="30" align="right">
						<a href="###">
						<img name='abc_<{$movie.activity_id}>_<{$venue_item.venue_id}>' src="<{$rootpath}>/images/<{$lang}>/button_buy_now_yel.gif" width="67" height="24" border="0" class="goto_show">
						</a></td>
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
		<td height="2" bgcolor="#c52d47"><img src="images/spacer.gif" alt="" width="2" height="2"></td>
	</tr>
	<{/foreach}>
	<tr>
		<td>
			&nbsp;
		</td>
	</tr>
 	<{if $total_page >0}>
	<tr>
		<td valign="top">
			<table border="0" cellspacing="0" cellpadding="0">
			<tr>
				<td width="75">
					<table width="66" border="0" cellspacing="0" cellpadding="0">
						<tr>
						    <{if $total_page >1}>
								<td width="66" height="23" align="center" >
					              	<a href="javascript:void(0)" class="blklink  pageno2" onclick="movieBackPage()"><{$LANG.back}></a>
								</td>
							<{/if}>
						</tr>
					</table>
				</td>
				<td>
					<{if $total_page >1}>	
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
								<td>
									<img src="<{$rootpath}>/images/spacer.gif" width="8" height="8">
								</td>							
								<{/section}>	
							</tr>
						</table>
					<{/if}>
				</td>
				<td width="75" align="right">
					<table width="66" border="0" cellspacing="0" cellpadding="0">
						<tr>
							<{if $total_page >1}>	  
								<td width="66" height="23" align="center" >
					              	<a href="javascript:void(0)" class="blklink  pageno2" onclick="movieNextPages()"><{$LANG.next}></a>	  
								</td>
							 <{/if}>
						</tr>
					</table>
				</td>
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
		var url = "hot_movie.php";
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
			var url = "hot_movie.php";
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
			var url = "hot_movie.php";
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

	function changeMovieDistrict(activityId,districtId){
		$("tr[name="+ "movieList"+activityId+"]").hide();
		$(".movie"+activityId+"_"+districtId).show();
	}
	function showMoviesChosen(activityId){
		$("tr[name="+ "movieList"+activityId+"]").show();
	}
</script>


